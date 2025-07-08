<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - FoodShare</title>
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
                    <li><a href="about.php" class="active">About</a></li>
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
                <h1>About FoodShare</h1>
                <p>Connecting communities to fight hunger and reduce food waste</p>
            </div>
        </section>

        <section class="content-section">
            <div class="container">
                <div class="content-grid">
                    <div class="content-text">
                        <h2>Our Mission</h2>
                        <p>FoodShare was born from a simple yet powerful idea: no one should go hungry while perfectly good food goes to waste. Every day, millions of pounds of food are discarded while countless individuals and families struggle with food insecurity.</p>

                        <p>Our platform bridges this gap by creating a seamless connection between food donors—including households, restaurants, caterers, and grocery stores—and local NGOs who work tirelessly to feed those in need.</p>

                        <h3>What We Do</h3>
                        <ul class="feature-list">
                            <li>🤝 Connect food donors with verified NGOs</li>
                            <li>📱 Provide an easy-to-use platform for food donation</li>
                            <li>🚚 Facilitate efficient food pickup and distribution</li>
                            <li>📊 Track impact and reduce food waste</li>
                            <li>🌍 Build stronger, more sustainable communities</li>
                        </ul>
                    </div>
                    <div class="content-image">
                        <img src="https://images.pexels.com/photos/6995242/pexels-photo-6995242.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Community volunteers" />
                    </div>
                </div>
            </div>
        </section>

        <section class="values-section">
            <div class="container">
                <h2 class="section-title">Our Values</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">🌱</div>
                        <h3>Sustainability</h3>
                        <p>We believe in creating lasting solutions that benefit both people and the planet by reducing food waste and promoting sustainable practices.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🤲</div>
                        <h3>Compassion</h3>
                        <p>Every action we take is driven by empathy and a genuine desire to help those facing food insecurity in our communities.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🔗</div>
                        <h3>Connection</h3>
                        <p>We strengthen communities by bringing people together around a common cause and fostering meaningful relationships.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">⚡</div>
                        <h3>Efficiency</h3>
                        <p>We streamline the donation process to ensure food reaches those who need it quickly and safely.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="impact-section">
            <div class="container">
                <h2 class="section-title">Our Impact</h2>
                <div class="impact-stats">
                    <div class="impact-stat">
                        <h3>50,000+</h3>
                        <p>Meals Donated</p>
                    </div>
                    <div class="impact-stat">
                        <h3>500+</h3>
                        <p>Active Donors</p>
                    </div>
                    <div class="impact-stat">
                        <h3>150+</h3>
                        <p>Partner NGOs</p>
                    </div>
                    <div class="impact-stat">
                        <h3>25</h3>
                        <p>Cities Served</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Join Our Mission</h2>
                    <p>Whether you're a donor looking to make a difference or an NGO seeking food donations, we're here to help you create positive change in your community.</p>
                    <div class="cta-buttons">
                        <a href="donor_register.php" class="btn btn-primary">Become a Donor</a>
                        <a href="ngo_register.php" class="btn btn-secondary">Join as NGO</a>
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