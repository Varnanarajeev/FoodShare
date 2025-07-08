<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials - FoodShare</title>
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
                <h1>Community Stories</h1>
                <p>Hear from the amazing people making FoodShare possible</p>
            </div>
        </section>

        <section class="testimonials-section">
            <div class="container">
                <div class="testimonials-grid">
                    <div class="testimonial-card featured">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p>"FoodShare has completely transformed how we handle surplus food at our restaurant. Instead of throwing away perfectly good meals, we now feed 50+ families every week. The platform is so easy to use, and the NGOs are incredibly professional and grateful."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-photo">
                                <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Sarah Martinez" />
                            </div>
                            <div class="author-info">
                                <h3>Sarah Martinez</h3>
                                <p>Owner, Bella Vista Restaurant</p>
                                <div class="author-stats">
                                    <span>🍽️ 2,500+ meals donated</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p>"As an NGO director, FoodShare has been a game-changer for our operations. We can now access fresh, quality food donations from multiple sources, allowing us to serve 200 more families each month."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-photo">
                                <img src="https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Michael Chen" />
                            </div>
                            <div class="author-info">
                                <h3>Michael Chen</h3>
                                <p>Director, Community Food Bank</p>
                                <div class="author-stats">
                                    <span>👥 800+ families served</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p>"I started using FoodShare when I realized how much food my family was wasting. Now, whenever we have surplus from parties or events, I know it will reach people who truly need it. It feels amazing to make a difference!"</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-photo">
                                <img src="https://images.pexels.com/photos/3763188/pexels-photo-3763188.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Emily Rodriguez" />
                            </div>
                            <div class="author-info">
                                <h3>Emily Rodriguez</h3>
                                <p>Home Donor</p>
                                <div class="author-stats">
                                    <span>🏠 45+ donations made</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p>"The transparency and efficiency of FoodShare impressed us from day one. We can track our donations, see their impact, and connect directly with NGOs. It's exactly what the food donation space needed."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-photo">
                                <img src="https://images.pexels.com/photos/2182975/pexels-photo-2182975.jpeg?auto=compress&cs=tinysrgb&w=200" alt="David Kim" />
                            </div>
                            <div class="author-info">
                                <h3>David Kim</h3>
                                <p>Manager, Fresh Market Grocery</p>
                                <div class="author-stats">
                                    <span>📦 500+ kg donated</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p>"FoodShare helped us establish consistent food sources for our shelter. The variety and quality of donations have improved significantly, and the scheduling system makes pickup coordination seamless."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-photo">
                                <img src="https://images.pexels.com/photos/3763152/pexels-photo-3763152.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Lisa Thompson" />
                            </div>
                            <div class="author-info">
                                <h3>Lisa Thompson</h3>
                                <p>Coordinator, Hope Shelter</p>
                                <div class="author-stats">
                                    <span>🏠 150+ people fed daily</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">"</div>
                            <p>"Our catering business often has leftover food from events. FoodShare makes it incredibly easy to ensure this food doesn't go to waste. The platform is intuitive, and the impact is immediate and visible."</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-photo">
                                <img src="https://images.pexels.com/photos/2182973/pexels-photo-2182973.jpeg?auto=compress&cs=tinysrgb&w=200" alt="James Wilson" />
                            </div>
                            <div class="author-info">
                                <h3>James Wilson</h3>
                                <p>Owner, Elite Catering Services</p>
                                <div class="author-stats">
                                    <span>🎉 100+ events donated from</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="impact-numbers">
            <div class="container">
                <h2 class="section-title">Our Community Impact</h2>
                <div class="impact-stats">
                    <div class="impact-stat">
                        <h3>50,000+</h3>
                        <p>Meals Donated</p>
                    </div>
                    <div class="impact-stat">
                        <h3>2,000+</h3>
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

        <section class="video-testimonials">
            <div class="container">
                <h2 class="section-title">Video Stories</h2>
                <div class="video-grid">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <img src="https://images.pexels.com/photos/6995247/pexels-photo-6995247.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Restaurant success story" />
                            <div class="play-button">▶</div>
                        </div>
                        <div class="video-info">
                            <h3>From Waste to Hope: A Restaurant's Journey</h3>
                            <p>See how Bella Vista Restaurant transformed their food waste into community impact through FoodShare.</p>
                        </div>
                    </div>

                    <div class="video-card">
                        <div class="video-thumbnail">
                            <img src="https://images.pexels.com/photos/6995260/pexels-photo-6995260.jpeg?auto=compress&cs=tinysrgb&w=600" alt="NGO impact story" />
                            <div class="play-button">▶</div>
                        </div>
                        <div class="video-info">
                            <h3>Feeding Families: An NGO's Perspective</h3>
                            <p>Community Food Bank shares how FoodShare has expanded their reach and impact in the community.</p>
                        </div>
                    </div>

                    <div class="video-card">
                        <div class="video-thumbnail">
                            <img src="https://images.pexels.com/photos/6995242/pexels-photo-6995242.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Community impact" />
                            <div class="play-button">▶</div>
                        </div>
                        <div class="video-info">
                            <h3>Building Stronger Communities</h3>
                            <p>Discover how FoodShare is bringing communities together and creating lasting positive change.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="join-community">
            <div class="container">
                <div class="join-content">
                    <h2>Join Our Community</h2>
                    <p>Be part of the movement to reduce food waste and fight hunger. Whether you're a donor or an NGO, your story could be the next one we share.</p>
                    <div class="join-buttons">
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
                <p>&copy; 2024 FoodShare. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="main.js"></script>
</body>

</html>