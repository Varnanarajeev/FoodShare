<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Registration - FoodShare</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="auth-container">
        <div class="auth-form">
            <div class="auth-header">
                <h1>🍽️ FoodShare</h1>
                <h2>Join as an NGO</h2>
                <p>Register your organization to receive food donations and help those in need</p>
            </div>

            <form method="POST" class="form" id="ngoRegisterForm">
                <div class="form-section">
                    <h3>Organization Information</h3>

                    <div class="form-group">
                        <label for="orgName">Organization Name</label>
                        <input type="text" id="orgName" name="orgName" required>
                    </div>

                    <div class="form-group">
                        <label for="regNumber">Registration Number</label>
                        <input type="text" id="regNumber" name="regNumber" required placeholder="Official registration/license number">
                    </div>

                    <div class="form-group">
                        <label for="orgType">Organization Type</label>
                        <select id="orgType" name="orgType" required>
                            <option value="">Select organization type</option>
                            <option value="ngo">Non-Governmental Organization</option>
                            <option value="charity">Charity</option>
                            <option value="foundation">Foundation</option>
                            <option value="shelter">Shelter</option>
                            <option value="food_bank">Food Bank</option>
                            <option value="community_center">Community Center</option>
                            <option value="religious">Religious Organization</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Organization Description</label>
                        <textarea id="description" name="description" rows="4" required placeholder="Describe your organization's mission and activities"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="website">Website (Optional)</label>
                        <input type="url" id="website" name="website" placeholder="https://your-organization.org">
                    </div>
                </div>

                <div class="form-section">
                    <h3>Contact Information</h3>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="contactFirstName">Contact Person First Name</label>
                            <input type="text" id="contactFirstName" name="contactFirstName" required>
                        </div>
                        <div class="form-group">
                            <label for="contactLastName">Contact Person Last Name</label>
                            <input type="text" id="contactLastName" name="contactLastName" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="position">Position/Title</label>
                        <input type="text" id="position" name="position" required placeholder="e.g., Director, Coordinator, Manager">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="altPhone">Alternative Phone (Optional)</label>
                            <input type="tel" id="altPhone" name="altPhone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Organization Address</label>
                        <textarea id="address" name="address" rows="3" required placeholder="Complete address including city, state, and postal code"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Service Information</h3>

                    <div class="form-group">
                        <label for="serviceArea">Service Area</label>
                        <input type="text" id="serviceArea" name="serviceArea" required placeholder="Areas/communities you serve">
                    </div>

                    <div class="form-group">
                        <label for="beneficiaries">Number of Beneficiaries</label>
                        <select id="beneficiaries" name="beneficiaries" required>
                            <option value="">Select range</option>
                            <option value="1-50">1-50 people</option>
                            <option value="51-100">51-100 people</option>
                            <option value="101-250">101-250 people</option>
                            <option value="251-500">251-500 people</option>
                            <option value="501-1000">501-1000 people</option>
                            <option value="1000+">1000+ people</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="foodTypes">Preferred Food Types</label>
                        <div class="checkbox-grid">
                            <div class="checkbox-group">
                                <input type="checkbox" id="cooked" name="foodTypes[]" value="cooked">
                                <label for="cooked">Cooked Food</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="raw" name="foodTypes[]" value="raw">
                                <label for="raw">Raw Ingredients</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="packaged" name="foodTypes[]" value="packaged">
                                <label for="packaged">Packaged Food</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="fruits" name="foodTypes[]" value="fruits">
                                <label for="fruits">Fruits & Vegetables</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="dairy" name="foodTypes[]" value="dairy">
                                <label for="dairy">Dairy Products</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="bakery" name="foodTypes[]" value="bakery">
                                <label for="bakery">Bakery Items</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Account Security</h3>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" required>
                        </div>
                    </div>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the <a href="terms.php">Terms & Conditions</a> and <a href="privacy.php">Privacy Policy</a></label>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" id="verification" name="verification" required>
                    <label for="verification">I certify that all information provided is accurate and that our organization is legally registered</label>
                </div>

                <button type="submit" class="btn btn-primary btn-full">Submit NGO Application</button>

                <div class="form-note">
                    <p><strong>Note:</strong> Your application will be reviewed by our admin team. You will receive an email notification once your account is approved.</p>
                </div>
            </form>

            <div class="auth-footer">
                <p>Already have an account? <a href="ngo/ngo_login.php">Login here</a></p>
                <p>Want to donate food? <a href="donor_register.php">Register as Donor</a></p>
            </div>
        </div>

        <div class="auth-image">
            <img src="https://images.pexels.com/photos/6995242/pexels-photo-6995242.jpeg?auto=compress&cs=tinysrgb&w=800" alt="NGO helping community" />
        </div>
    </div>

    <script src="main.js"></script>
    <script src="auth.js"></script>
</body>

</html>