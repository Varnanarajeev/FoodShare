<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - FoodShare</title>
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
                <h1>Frequently Asked Questions</h1>
                <p>Find answers to common questions about FoodShare</p>
            </div>
        </section>

        <section class="faq-section">
            <div class="container">
                <div class="faq-categories">
                    <button class="faq-category active" onclick="showCategory('general')">General</button>
                    <button class="faq-category" onclick="showCategory('donors')">For Donors</button>
                    <button class="faq-category" onclick="showCategory('ngos')">For NGOs</button>
                    <button class="faq-category" onclick="showCategory('safety')">Food Safety</button>
                </div>

                <div id="general" class="faq-category-content active">
                    <h2>General Questions</h2>
                    <div class="faq-list">
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>What is FoodShare?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>FoodShare is a web-based platform that connects food donors (households, restaurants, caterers) with local NGOs to reduce food waste and fight hunger. We make it easy to donate surplus food to those who need it most.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>Is FoodShare free to use?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Yes! FoodShare is completely free for both donors and NGOs. Our mission is to reduce food waste and fight hunger, not to make profit.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>How does FoodShare work?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Donors register and list their surplus food with details like type, quantity, and pickup location. NGOs browse available donations and accept those that match their needs. The platform facilitates the connection and pickup coordination.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>Who can use FoodShare?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Anyone can become a donor - individuals, households, restaurants, caterers, grocery stores, or any organization with surplus food. NGOs must register and be approved by our admin team to ensure they're legitimate organizations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="donors" class="faq-category-content">
                    <h2>For Donors</h2>
                    <div class="faq-list">
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>How do I donate food?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Register as a donor, log in to your dashboard, and click "Donate Food". Fill out the form with details about your food including type, quantity, expiry date, and pickup location. NGOs will then be able to see and accept your donation.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>What types of food can I donate?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>You can donate cooked food, raw ingredients, packaged food, fruits & vegetables, dairy products, and bakery items. The food should be safe for consumption and within its expiry date.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>How do I know if my donation was accepted?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>You'll receive notifications when an NGO accepts your donation. You can also check the status in your donor dashboard under "My Donations".</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>Can I cancel a donation?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>You can cancel a donation if it hasn't been accepted yet. Once an NGO accepts your donation, please contact them directly to discuss any changes.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="ngos" class="faq-category-content">
                    <h2>For NGOs</h2>
                    <div class="faq-list">
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>How do I register as an NGO?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Click "Join as NGO" on our homepage, fill out the registration form with your organization details and registration number. Your application will be reviewed by our admin team and you'll be notified once approved.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>How long does NGO approval take?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>NGO approval typically takes 2-5 business days. We verify your organization's legitimacy and registration details before approval.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>How do I accept donations?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Once approved, log in to your NGO dashboard and browse available donations. Click "Accept" on donations that match your needs and capacity. You'll then coordinate pickup with the donor.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>What if I receive unsafe food?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>If you receive food that appears unsafe or doesn't match the description, you can report it through your dashboard. Our admin team will investigate and take appropriate action.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="safety" class="faq-category-content">
                    <h2>Food Safety</h2>
                    <div class="faq-list">
                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>How do you ensure food safety?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>We have strict guidelines for food donations including expiry date requirements, proper storage instructions, and food handling protocols. NGOs can report any safety concerns, and we take immediate action when needed.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>What are the food safety guidelines?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Food must be within expiry date, properly stored, and safe for consumption. Cooked food should be donated within 2 hours of cooking or properly refrigerated. All food should be in clean, sealed containers.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>Can I donate expired food?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>No, we do not accept expired food donations. All food must be within its expiry date and safe for consumption to ensure the health and safety of recipients.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h3>Who is responsible for food safety?</h3>
                                <span class="faq-toggle">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Donors are responsible for ensuring the food they donate is safe and properly described. NGOs should inspect food upon pickup and report any concerns. FoodShare provides guidelines but users are responsible for following food safety protocols.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-cta">
            <div class="container">
                <div class="cta-content">
                    <h2>Still have questions?</h2>
                    <p>Can't find the answer you're looking for? Our support team is here to help.</p>
                    <a href="contact.php" class="btn btn-primary">Contact Support</a>
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
    <script src="faq.js"></script>
</body>

</html>