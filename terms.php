<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions - FoodShare</title>
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
                    <li><a href="contact.php">Contact</a></li>
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
                <h1>Terms & Conditions</h1>
                <p>Last updated: January 28, 2025</p>
            </div>
        </section>

        <section class="legal-content">
            <div class="container">
                <div class="legal-document">
                    <h2>1. Acceptance of Terms</h2>
                    <p>By accessing and using FoodShare, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>

                    <h2>2. Description of Service</h2>
                    <p>FoodShare is a web-based platform that connects food donors with local NGOs to reduce food waste and fight hunger. The service allows:</p>
                    <ul>
                        <li>Donors to list surplus food for donation</li>
                        <li>NGOs to browse and accept food donations</li>
                        <li>Coordination of food pickup and distribution</li>
                        <li>Tracking of donation history and impact</li>
                    </ul>

                    <h2>3. User Accounts</h2>
                    <p>To use certain features of FoodShare, you must register for an account. You agree to:</p>
                    <ul>
                        <li>Provide accurate, current, and complete information</li>
                        <li>Maintain and update your information</li>
                        <li>Keep your password secure and confidential</li>
                        <li>Accept responsibility for all activities under your account</li>
                    </ul>

                    <h2>4. Food Safety and Quality</h2>
                    <p>All users must adhere to food safety guidelines:</p>
                    <ul>
                        <li>Donors must ensure food is safe, fresh, and within expiry dates</li>
                        <li>Food must be properly stored and handled</li>
                        <li>Accurate descriptions must be provided</li>
                        <li>NGOs should inspect food upon pickup</li>
                        <li>Any safety concerns must be reported immediately</li>
                    </ul>

                    <h2>5. User Responsibilities</h2>
                    <h3>Donors:</h3>
                    <ul>
                        <li>Provide accurate information about food donations</li>
                        <li>Ensure food safety and quality</li>
                        <li>Be available for scheduled pickups</li>
                        <li>Communicate any changes promptly</li>
                    </ul>

                    <h3>NGOs:</h3>
                    <ul>
                        <li>Provide valid organization credentials</li>
                        <li>Use donations for intended charitable purposes</li>
                        <li>Coordinate pickups professionally</li>
                        <li>Report any issues or concerns</li>
                    </ul>

                    <h2>6. Prohibited Uses</h2>
                    <p>You may not use FoodShare to:</p>
                    <ul>
                        <li>Violate any laws or regulations</li>
                        <li>Donate unsafe or expired food</li>
                        <li>Misrepresent yourself or your organization</li>
                        <li>Use the platform for commercial gain</li>
                        <li>Harass or harm other users</li>
                        <li>Interfere with platform operations</li>
                    </ul>

                    <h2>7. Liability and Disclaimers</h2>
                    <p>FoodShare serves as a platform to connect donors and NGOs. We:</p>
                    <ul>
                        <li>Do not guarantee food quality or safety</li>
                        <li>Are not responsible for food-related illnesses</li>
                        <li>Do not verify all user information</li>
                        <li>Cannot guarantee successful donations</li>
                        <li>Are not liable for user interactions or disputes</li>
                    </ul>

                    <h2>8. Privacy</h2>
                    <p>Your privacy is important to us. Please review our Privacy Policy, which also governs your use of the service, to understand our practices.</p>

                    <h2>9. Intellectual Property</h2>
                    <p>The FoodShare platform, including its design, features, and content, is owned by FoodShare and protected by intellectual property laws. Users may not:</p>
                    <ul>
                        <li>Copy or reproduce platform content</li>
                        <li>Use our trademarks or logos</li>
                        <li>Reverse engineer the platform</li>
                        <li>Create derivative works</li>
                    </ul>

                    <h2>10. Termination</h2>
                    <p>We may terminate or suspend your account and access to the service immediately, without prior notice, for conduct that we believe violates these Terms or is harmful to other users, us, or third parties.</p>

                    <h2>11. Changes to Terms</h2>
                    <p>We reserve the right to modify these terms at any time. We will notify users of significant changes via email or platform notifications. Continued use of the service constitutes acceptance of modified terms.</p>

                    <h2>12. Governing Law</h2>
                    <p>These Terms shall be interpreted and governed by the laws of the jurisdiction in which FoodShare operates, without regard to conflict of law provisions.</p>

                    <h2>13. Contact Information</h2>
                    <p>If you have any questions about these Terms & Conditions, please contact us at:</p>
                    <ul>
                        <li>Email: legal@foodshare.com</li>
                        <li>Phone: +91 73568 93655</li>
                        <li>Address: 2AB Block, Princess Street Fortkochi</li>
                    </ul>

                    <div class="legal-footer">
                        <p><strong>By using FoodShare, you acknowledge that you have read, understood, and agree to be bound by these Terms & Conditions.</strong></p>
                    </div>
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