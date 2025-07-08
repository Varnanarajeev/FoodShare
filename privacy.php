<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - FoodShare</title>
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
                <h1>Privacy Policy</h1>
                <p>Last updated: January 1, 2024</p>
            </div>
        </section>

        <section class="legal-content">
            <div class="container">
                <div class="legal-document">
                    <h2>1. Information We Collect</h2>
                    <h3>Personal Information</h3>
                    <p>When you register for FoodShare, we collect:</p>
                    <ul>
                        <li>Name and contact information (email, phone, address)</li>
                        <li>Account credentials (username, password)</li>
                        <li>Organization details (for NGOs)</li>
                        <li>Profile information and preferences</li>
                    </ul>

                    <h3>Donation Information</h3>
                    <p>When you create or accept donations, we collect:</p>
                    <ul>
                        <li>Food details (type, quantity, description)</li>
                        <li>Pickup location and timing</li>
                        <li>Photos and special instructions</li>
                        <li>Communication between donors and NGOs</li>
                    </ul>

                    <h3>Usage Information</h3>
                    <p>We automatically collect:</p>
                    <ul>
                        <li>Device and browser information</li>
                        <li>IP address and location data</li>
                        <li>Platform usage patterns</li>
                        <li>Performance and error logs</li>
                    </ul>

                    <h2>2. How We Use Your Information</h2>
                    <p>We use your information to:</p>
                    <ul>
                        <li>Provide and improve our services</li>
                        <li>Connect donors with NGOs</li>
                        <li>Facilitate food donations and pickups</li>
                        <li>Send notifications and updates</li>
                        <li>Ensure platform security and safety</li>
                        <li>Generate analytics and reports</li>
                        <li>Comply with legal requirements</li>
                    </ul>

                    <h2>3. Information Sharing</h2>
                    <p>We may share your information with:</p>

                    <h3>Other Users</h3>
                    <ul>
                        <li>Donors and NGOs see each other's contact information for accepted donations</li>
                        <li>Basic profile information is visible to facilitate connections</li>
                        <li>Donation details are shared with interested NGOs</li>
                    </ul>

                    <h3>Service Providers</h3>
                    <ul>
                        <li>Hosting and infrastructure providers</li>
                        <li>Email and communication services</li>
                        <li>Analytics and monitoring tools</li>
                        <li>Payment processors (if applicable)</li>
                    </ul>

                    <h3>Legal Requirements</h3>
                    <ul>
                        <li>When required by law or legal process</li>
                        <li>To protect our rights and safety</li>
                        <li>To prevent fraud or abuse</li>
                        <li>In case of business transfer or merger</li>
                    </ul>

                    <h2>4. Data Security</h2>
                    <p>We implement security measures to protect your information:</p>
                    <ul>
                        <li>Encryption of sensitive data in transit and at rest</li>
                        <li>Secure authentication and access controls</li>
                        <li>Regular security audits and updates</li>
                        <li>Limited access to personal information</li>
                        <li>Incident response and breach notification procedures</li>
                    </ul>


                    <h2>5. Your Rights and Choices</h2>
                    <p>You have the right to:</p>
                    <ul>
                        <li>Access and review your personal information</li>
                        <li>Update or correct your information</li>
                        <li>Delete your account and associated data</li>
                        <li>Opt out of non-essential communications</li>
                        <li>Request data portability</li>
                        <li>Object to certain data processing</li>
                    </ul>

                    <h2>6. Cookies and Tracking</h2>
                    <p>We use cookies and similar technologies to:</p>
                    <ul>
                        <li>Remember your preferences and settings</li>
                        <li>Authenticate and secure your account</li>
                        <li>Analyze platform usage and performance</li>
                        <li>Provide personalized experiences</li>
                    </ul>
                    <p>You can control cookies through your browser settings, but this may affect platform functionality.</p>




                    <h2>7. Contact Us</h2>
                    <p>If you have questions about this Privacy Policy or our data practices, contact us at:</p>
                    <ul>
                        <li>Email: privacy@foodshare.com</li>
                        <li>Phone: +91 73568 93655</li>
                        <li>Address: 2AB Block, Princess Street Fortkochi</li>
                    </ul>

                    <div class="legal-footer">
                        <p><strong>By using FoodShare, you acknowledge that you have read and understood this Privacy Policy.</strong></p>
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
                    <p>Phone: +1 (555) 123-4567</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 FoodShare. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="main.js"></script>
</body>

</html>