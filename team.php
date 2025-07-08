<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - FoodShare</title>
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
                <h1>Meet Our Team</h1>
                <p>The passionate individuals behind FoodShare's mission</p>
            </div>
        </section>

        <section class="team-section">
            <div class="container">
                <div class="team-intro">
                    <h2>Our Story</h2>
                    <p>FoodShare was founded by a group of passionate individuals who witnessed the stark contrast between food waste and food insecurity in their communities. United by a common vision to create positive change, our team combines expertise in technology, social work, and community development to build a platform that truly makes a difference.</p>
                </div>

                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-photo">
                            <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Sarah Johnson" />
                        </div>
                        <div class="member-info">
                            <h3>Sarah Johnson</h3>
                            <p class="member-role">Founder & CEO</p>
                            <p class="member-bio">Former restaurant owner who experienced firsthand the challenge of food waste. Sarah founded FoodShare to create a systematic solution to connect surplus food with those in need.</p>
                            <div class="member-contact">
                                <a href="mailto:sarah@foodshare.com">sarah@foodshare.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Michael Chen" />
                        </div>
                        <div class="member-info">
                            <h3>Michael Chen</h3>
                            <p class="member-role">CTO & Co-founder</p>
                            <p class="member-bio">Software engineer with 10+ years of experience in building scalable platforms. Michael leads our technical development and ensures the platform is reliable and user-friendly.</p>
                            <div class="member-contact">
                                <a href="mailto:michael@foodshare.com">michael@foodshare.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="https://images.pexels.com/photos/3763188/pexels-photo-3763188.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Emily Rodriguez" />
                        </div>
                        <div class="member-info">
                            <h3>Emily Rodriguez</h3>
                            <p class="member-role">Community Outreach Director</p>
                            <p class="member-bio">Social worker with extensive experience in community development. Emily builds relationships with NGOs and ensures our platform serves the communities that need it most.</p>
                            <div class="member-contact">
                                <a href="mailto:emily@foodshare.com">emily@foodshare.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="https://images.pexels.com/photos/2182975/pexels-photo-2182975.jpeg?auto=compress&cs=tinysrgb&w=400" alt="David Kim" />
                        </div>
                        <div class="member-info">
                            <h3>David Kim</h3>
                            <p class="member-role">Operations Manager</p>
                            <p class="member-bio">Logistics expert who ensures smooth operations between donors and NGOs. David optimizes our processes to maximize efficiency and food safety.</p>
                            <div class="member-contact">
                                <a href="mailto:david@foodshare.com">david@foodshare.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="https://images.pexels.com/photos/3763152/pexels-photo-3763152.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Lisa Thompson" />
                        </div>
                        <div class="member-info">
                            <h3>Lisa Thompson</h3>
                            <p class="member-role">Marketing & Communications</p>
                            <p class="member-bio">Communications specialist passionate about spreading awareness of food waste issues. Lisa manages our outreach efforts and helps grow our community of donors and NGOs.</p>
                            <div class="member-contact">
                                <a href="mailto:lisa@foodshare.com">lisa@foodshare.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="https://images.pexels.com/photos/2182973/pexels-photo-2182973.jpeg?auto=compress&cs=tinysrgb&w=400" alt="James Wilson" />
                        </div>
                        <div class="member-info">
                            <h3>James Wilson</h3>
                            <p class="member-role">Food Safety Advisor</p>
                            <p class="member-bio">Former health inspector with expertise in food safety regulations. James develops our safety guidelines and ensures all donations meet health standards.</p>
                            <div class="member-contact">
                                <a href="mailto:james@foodshare.com">james@foodshare.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="values-section">
            <div class="container">
                <h2 class="section-title">What Drives Us</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">💡</div>
                        <h3>Innovation</h3>
                        <p>We continuously seek new ways to improve food donation processes and create more efficient solutions.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🤝</div>
                        <h3>Collaboration</h3>
                        <p>We believe in the power of working together with communities, NGOs, and donors to create lasting change.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🌍</div>
                        <h3>Impact</h3>
                        <p>Every decision we make is guided by our commitment to reducing food waste and fighting hunger.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🔒</div>
                        <h3>Trust</h3>
                        <p>We maintain the highest standards of transparency, safety, and reliability in everything we do.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="join-team-section">
            <div class="container">
                <div class="join-content">
                    <h2>Join Our Mission</h2>
                    <p>We're always looking for passionate individuals who want to make a difference in their communities. Whether you're a developer, community organizer, or simply someone who cares about reducing food waste, we'd love to hear from you.</p>
                    <div class="join-buttons">
                        <a href="contact.php" class="btn btn-primary">Get In Touch</a>
                        <a href="about.php" class="btn btn-secondary">Learn More</a>
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