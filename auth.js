// Authentication JavaScript
document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const userTypeSelect = document.getElementById('userType');
    const ngoFields = document.getElementById('ngoFields');

    // Handle user type selection in registration
    if (userTypeSelect && ngoFields) {
        userTypeSelect.addEventListener('change', function () {
            if (this.value === 'ngo') {
                ngoFields.classList.remove('hidden');
                // Make NGO fields required
                ngoFields.querySelectorAll('input, textarea').forEach(field => {
                    field.required = true;
                });
            } else {
                ngoFields.classList.add('hidden');
                // Remove required attribute from NGO fields
                ngoFields.querySelectorAll('input, textarea').forEach(field => {
                    field.required = false;
                });
            }
        });
    }

    // Handle login form submission
    if (loginForm) {
        loginForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Validate form
            if (!validateForm(this)) {
                showMessage('Please fill in all required fields', 'error');
                return;
            }

            // Validate email
            if (!validateEmail(data.email)) {
                showMessage('Please enter a valid email address', 'error');
                return;
            }

            setLoadingState(this.querySelector('button[type="submit"]'), true);

            // Simulate API call
            setTimeout(() => {
                // Here you would make an actual API call to your PHP backend
                fetch('php/login.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                })
                    .then(response => response.json())
                    .then(result => {
                        if (result.success) {
                            // Store user data
                            saveToLocalStorage('user', result.user);

                            // Redirect based on user type
                            switch (result.user.type) {
                                case 'donor':
                                    window.location.href = 'donor/dashboard.html';
                                    break;
                                case 'ngo':
                                    window.location.href = 'ngo/dashboard.html';
                                    break;
                                case 'admin':
                                    window.location.href = 'admin/dashboard.html';
                                    break;
                            }
                        } else {
                            showMessage(result.message || 'Login failed', 'error');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showMessage('An error occurred. Please try again.', 'error');
                    })
                    .finally(() => {
                        setLoadingState(this.querySelector('button[type="submit"]'), false);
                    });
            }, 1000);
        });
    }

    // Handle registration form submission
    if (registerForm) {
        registerForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Validate form
            if (!validateForm(this)) {
                showMessage('Please fill in all required fields', 'error');
                return;
            }

            // Validate email
            if (!validateEmail(data.email)) {
                showMessage('Please enter a valid email address', 'error');
                return;
            }

            // Validate phone
            if (!validatePhone(data.phone)) {
                showMessage('Please enter a valid phone number', 'error');
                return;
            }

            // Validate password
            if (!validatePassword(data.password)) {
                showMessage('Password must be at least 8 characters long and contain uppercase, lowercase, and numbers', 'error');
                return;
            }

            // Confirm password
            if (data.password !== data.confirmPassword) {
                showMessage('Passwords do not match', 'error');
                return;
            }

            setLoadingState(this.querySelector('button[type="submit"]'), true);

            // Simulate API call
            setTimeout(() => {
                // Here you would make an actual API call to your PHP backend
                fetch('php/register.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                })
                    .then(response => response.json())
                    .then(result => {
                        if (result.success) {
                            if (data.userType === 'ngo') {
                                showMessage('Registration successful! Your account is pending admin approval.', 'success');
                                setTimeout(() => {
                                    window.location.href = 'login.html';
                                }, 2000);
                            } else {
                                showMessage('Registration successful! Please login.', 'success');
                                setTimeout(() => {
                                    window.location.href = 'login.html';
                                }, 2000);
                            }
                        } else {
                            showMessage(result.message || 'Registration failed', 'error');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showMessage('An error occurred. Please try again.', 'error');
                    })
                    .finally(() => {
                        setLoadingState(this.querySelector('button[type="submit"]'), false);
                    });
            }, 1000);
        });
    }

    // Auto-fill user type from URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const userType = urlParams.get('type');
    if (userType && userTypeSelect) {
        userTypeSelect.value = userType;
        userTypeSelect.dispatchEvent(new Event('change'));
    }
});

// Check if user is logged in
function checkAuth() {
    const user = getFromLocalStorage('user');
    if (!user) {
        window.location.href = '../login.html';
        return null;
    }
    return user;
}

// Logout function
function logout() {
    removeFromLocalStorage('user');
    window.location.href = '../index.html';
}

// Redirect to appropriate dashboard
function redirectToDashboard(userType) {
    switch (userType) {
        case 'donor':
            window.location.href = 'donor/dashboard.html';
            break;
        case 'ngo':
            window.location.href = 'ngo/dashboard.html';
            break;
        case 'admin':
            window.location.href = 'admin/dashboard.html';
            break;
        default:
            window.location.href = 'index.html';
    }
}

// Password strength checker
function checkPasswordStrength(password) {
    const strength = {
        score: 0,
        feedback: []
    };

    if (password.length >= 8) {
        strength.score += 1;
    } else {
        strength.feedback.push('At least 8 characters');
    }

    if (/[A-Z]/.test(password)) {
        strength.score += 1;
    } else {
        strength.feedback.push('One uppercase letter');
    }

    if (/[a-z]/.test(password)) {
        strength.score += 1;
    } else {
        strength.feedback.push('One lowercase letter');
    }

    if (/\d/.test(password)) {
        strength.score += 1;
    } else {
        strength.feedback.push('One number');
    }

    if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
        strength.score += 1;
        strength.feedback.push('Strong password!');
    } else {
        strength.feedback.push('Special character (optional)');
    }

    return strength;
}

// Real-time password validation
function setupPasswordValidation() {
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');

    if (passwordInput) {
        passwordInput.addEventListener('input', function () {
            const strength = checkPasswordStrength(this.value);
            // You can display strength indicator here
        });
    }

    if (confirmPasswordInput) {
        confirmPasswordInput.addEventListener('input', function () {
            if (this.value !== passwordInput.value) {
                this.style.borderColor = '#dc3545';
            } else {
                this.style.borderColor = '#28a745';
            }
        });
    }
}

// Initialize password validation on page load
document.addEventListener('DOMContentLoaded', setupPasswordValidation);