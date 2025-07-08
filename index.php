<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodShare - Local Food Donation System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>🍽️ FoodShare</h1>
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
            <div class="mobile-menu-toggle" id="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="container">
                <div class="hero-content">
                    <h2>Fighting Hunger, Reducing Waste</h2>
                    <p>Connect food donors with local NGOs to ensure no food goes to waste while helping those in need.</p>
                    <div class="hero-buttons">
                        <a href="donor_register.php" class="btn btn-primary">Donate Food</a>
                        <a href="ngo_register.php" class="btn btn-secondary">Join as NGO</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://images.pexels.com/photos/6995247/pexels-photo-6995247.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Food donation" />
                </div>
            </div>
        </section>

        <section id="how-it-works" class="how-it-works">
            <div class="container">
                <h2 class="section-title">How It Works</h2>
                <div class="steps">
                    <div class="step">
                        <div class="step-icon">📝</div>
                        <h3>1. Register</h3>
                        <p>Sign up as a donor or NGO to start making a difference in your community.</p>
                    </div>
                    <div class="step">
                        <div class="step-icon">🍯</div>
                        <h3>2. List Food</h3>
                        <p>Donors can easily list surplus food with details like quantity, type, and pickup location.</p>
                    </div>
                    <div class="step">
                        <div class="step-icon">🤝</div>
                        <h3>3. Connect</h3>
                        <p>NGOs browse available food donations and accept those that match their needs.</p>
                    </div>
                    <div class="step">
                        <div class="step-icon">❤️</div>
                        <h3>4. Impact</h3>
                        <p>Food reaches those in need while reducing waste and building community connections.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="stats" class="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <h2>Our Impact</h2>
                        <p>FoodShare bridges the gap between food surplus and food insecurity. We believe that no one should go hungry while perfectly good food goes to waste.</p>
                        <p>Our platform makes it easy for households, restaurants, and caterers to donate surplus food to verified NGOs who distribute it to those who need it most.</p>
                        <div class="stats">
                            <div class="stat">
                                <h3>5000+</h3>
                                <p>Meals Saved</p>
                            </div>
                            <div class="stat">
                                <h3>150+</h3>
                                <p>NGO Partners</p>
                            </div>
                            <div class="stat">
                                <h3>2000+</h3>
                                <p>Active Donors</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-image">
                        <img src="https://images.pexels.com/photos/6995260/pexels-photo-6995260.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Community helping" />
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials-preview">
            <div class="container">
                <h2 class="section-title">What Our Community Says</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <p>"FoodShare has transformed how we handle surplus food. It's so easy to connect with NGOs in our area."</p>
                        <div class="testimonial-author">
                            <strong>Sarah Johnson</strong>
                            <span>Restaurant Owner</span>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>"Thanks to FoodShare, we can now feed 200 more families every week with quality food donations."</p>
                        <div class="testimonial-author">
                            <strong>Michael Chen</strong>
                            <span>NGO Director</span>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-20">
                    <a href="testimonials.php" class="btn btn-secondary">Read More Stories</a>
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