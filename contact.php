<?php
session_start();

$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $messageText = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($subject) || empty($messageText)) {
        $message = 'Please fill in all fields.';
        $messageType = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Please enter a valid email address.';
        $messageType = 'error';
    } else {
        // Here you would typically save to database or send email
        $message = 'Thank you for your message! We\'ll get back to you soon.';
        $messageType = 'success';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FoodShare</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1><a href="index.php">🍽️ FoodShare</a></h1>
            </div>
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="logout.php" class="btn btn-secondary">Logout</a></li>
                    <?php else: ?>
                        <li><a href="donor_login.php" class="btn btn-primary">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>

    <main class="page-content">
        <section class="page-hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you. Get in touch with our team.</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h2>Get in Touch</h2>
                        <p>Have questions about FoodShare? Need help with your account? Want to partner with us? We're here to help!</p>

                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="contact-icon">📧</div>
                                <div class="contact-details">
                                    <h3>Email</h3>
                                    <p>info@foodshare.com</p>
                                    <p>support@foodshare.com</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="contact-icon">📞</div>
                                <div class="contact-details">
                                    <h3>Phone</h3>
                                    <p>+91 73568 93655</p>
                                    <p>Mon-Fri: 9AM-6PM IST</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="contact-icon">📍</div>
                                <div class="contact-details">
                                    <h3>Address</h3>
                                    <p>2AB Block, Princess Street</p>
                                    <p>Fortkochi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form-container">
                        <h2>Send us a Message</h2>

                        <?php if ($message): ?>
                            <div class="<?php echo $messageType; ?>-message">
                                <?php echo htmlspecialchars($message); ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" class="contact-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select id="subject" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="general" <?php echo ($_POST['subject'] ?? '') === 'general' ? 'selected' : ''; ?>>General Inquiry</option>
                                    <option value="support" <?php echo ($_POST['subject'] ?? '') === 'support' ? 'selected' : ''; ?>>Technical Support</option>
                                    <option value="partnership" <?php echo ($_POST['subject'] ?? '') === 'partnership' ? 'selected' : ''; ?>>Partnership</option>
                                    <option value="feedback" <?php echo ($_POST['subject'] ?? '') === 'feedback' ? 'selected' : ''; ?>>Feedback</option>
                                    <option value="other" <?php echo ($_POST['subject'] ?? '') === 'other' ? 'selected' : ''; ?>>Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="6" required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-preview">
            <div class="container">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-grid">
                    <div class="faq-item">
                        <h3>How do I donate food?</h3>
                        <p>Simply register as a donor, fill out the food donation form with details about your surplus food, and wait for NGOs to accept your donation.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is the platform free to use?</h3>
                        <p>Yes! FoodShare is completely free for both donors and NGOs. Our mission is to reduce food waste and fight hunger.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How do you ensure food safety?</h3>
                        <p>We have strict guidelines for food donations and allow NGOs to report any safety concerns. All users must follow our food safety protocols.</p>
                    </div>
                </div>
                <div class="text-center mt-20">
                    <a href="faq.php" class="btn btn-secondary">View All FAQs</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>🍽️ FoodShare</h3>
                    <p>Making food donation simple and impactful</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="terms.php">Terms & Conditions</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="team.php">Our Team</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p>Email: info@foodshare.com</p>
                    <p>Phone: +91 73568 93655</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 FoodShare. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="main.js"></script>
</body>

</html>