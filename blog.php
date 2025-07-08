<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - FoodShare</title>
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
                    <li><a href="blog.php" class="active">Blog</a></li>
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
                <h1>FoodShare Blog</h1>
                <p>Stories, insights, and updates from our community</p>
            </div>
        </section>

        <section class="blog-section">
            <div class="container">
                <div class="blog-grid">
                    <article class="blog-post featured">
                        <div class="post-image">
                            <img src="https://images.pexels.com/photos/6995247/pexels-photo-6995247.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Food waste statistics" />
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category">Impact</span>
                                <span class="post-date">January 15, 2024</span>
                            </div>
                            <h2>The Hidden Cost of Food Waste: Why Every Meal Matters</h2>
                            <p>Introduction: The Growing Issue of Food Waste
                                Did you know that nearly one-third of all food produced globally goes to waste every year? That’s around 1.3 billion tons of perfectly edible food thrown away, impacting not only our wallets but also our planet. Food waste is a critical issue that has far-reaching consequences, from environmental degradation to economic losses and social inequality. In this blog post, we’ll explore the causes, consequences, and simple solutions to combat food waste, helping you make a positive impact.

                                What Is Food Waste?
                                Food waste refers to food that is discarded, whether at the production, retail, or consumer level, even though it is fit for consumption. It can happen in homes, restaurants, grocery stores, and even on farms. Examples include leftovers tossed in the trash, expired products, or crops left unharvested.

                                The Shocking Consequences of Food Waste
                                1. Environmental Impact
                                Greenhouse Gas Emissions: When food waste ends up in landfills, it decomposes and releases methane, a potent greenhouse gas. Food waste is responsible for 6%-8% of global greenhouse gas emissions.
                                Resource Wastage: Wasted food means wasted resources, including water, land, energy, and labor used in production and transportation. For example, wasting one burger wastes the equivalent of 1,500 liters of water used to produce it.
                                2. Economic Losses
                                Food waste costs the global economy approximately $1 trillion annually. For households, this translates to hundreds of dollars wasted per year in discarded food.
                                3. Social Inequality
                                While food is wasted in some parts of the world, millions of people go hungry every day. Redistributing surplus food could significantly reduce hunger and improve food security globally.
                                What Can You Do to Reduce Food Waste?
                                1. Plan Your Meals
                                Avoid overbuying by planning meals and creating a shopping list. Stick to it to prevent purchasing items you won’t use.

                                2. Store Food Properly
                                Learn the best ways to store fresh produce, dairy, and pantry items to extend their shelf life. For example, keep fruits and vegetables in separate drawers to prevent premature ripening.

                                3. Use Leftovers Creatively
                                Turn yesterday’s dinner into today’s lunch! For instance, transform roasted vegetables into a hearty soup or casserole.

                                4. Understand Expiry Labels
                                Many people confuse “best before” and “use by” dates, leading to unnecessary waste. “Best before” indicates quality, while “use by” is a safety guideline.

                                5. Compost Food Scraps
                                If you have food waste, composting is an eco-friendly alternative to throwing it away. It reduces landfill waste and creates nutrient-rich soil for gardening.

                                6. Donate Surplus Food
                                Donate excess food to local food banks, shelters, or community fridges to help those in need.

                                How Businesses Can Help Combat Food Waste
                                1. Restaurants and Cafes
                                Offer smaller portion sizes and encourage customers to take leftovers home. Implement food waste tracking to reduce overproduction.

                                2. Grocery Stores
                                Sell “imperfect” produce at a discount to reduce waste. Partner with organizations to donate unsold food.

                                3. Farmers and Producers
                                Utilize technology to forecast demand accurately and reduce overproduction. Create products from surplus crops, such as juices or jams.

                                Why Reducing Food Waste Matters
                                Fighting food waste is a simple yet powerful way to protect the environment, save money, and fight hunger. By making small changes in our daily habits, we can collectively make a big difference.

                                Conclusion: Join the Movement Against Food Waste
                                Reducing food waste isn’t just good for the planet—it’s good for your wallet and your community. Start small by making mindful choices in your home and encouraging others to do the same. Together, we can create a world where food is valued, resources are preserved, and hunger is minimized.

                                How are you fighting food waste in your home? Share your tips and ideas in the comments below or tag us on social media with #FoodWasteSolutions!

                            </p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <div class="post-image">
                            <img src="https://images.pexels.com/photos/6995260/pexels-photo-6995260.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Community volunteers" />
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category">Community</span>
                                <span class="post-date">January 12, 2024</span>
                            </div>
                            <h3>Success Story: How Local Restaurant Feeds 200 Families Weekly</h3>
                            <p>Meet Maria's Kitchen, a local restaurant that has transformed their approach to surplus food through FoodShare...</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <div class="post-image">
                            <img src="https://images.pexels.com/photos/6995242/pexels-photo-6995242.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Food safety" />
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category">Safety</span>
                                <span class="post-date">January 10, 2024</span>
                            </div>
                            <h3>Food Safety Guidelines: Best Practices for Donors</h3>
                            <p>Ensuring food safety is paramount in food donation. Here's a comprehensive guide to safe food handling and donation practices...</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <div class="post-image">
                            <img src="https://images.pexels.com/photos/6995244/pexels-photo-6995244.jpeg?auto=compress&cs=tinysrgb&w=600" alt="NGO partnership" />
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category">Partnership</span>
                                <span class="post-date">January 8, 2024</span>
                            </div>
                            <h3>Building Stronger Communities Through Food Partnerships</h3>
                            <p>Learn how NGOs and donors are creating lasting partnerships that go beyond food donation to build stronger communities...</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <div class="post-image">
                            <img src="https://images.pexels.com/photos/4099354/pexels-photo-4099354.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Technology impact" />
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category">Technology</span>
                                <span class="post-date">January 5, 2024</span>
                            </div>
                            <h3>How Technology is Revolutionizing Food Donation</h3>
                            <p>Explore how digital platforms like FoodShare are making food donation more efficient, transparent, and impactful...</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <div class="post-image">
                            <img src="https://images.pexels.com/photos/6995252/pexels-photo-6995252.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Volunteer impact" />
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category">Volunteer</span>
                                <span class="post-date">January 3, 2024</span>
                            </div>
                            <h3>Volunteer Spotlight: Making a Difference One Donation at a Time</h3>
                            <p>Meet the volunteers who are the backbone of our food donation network and learn how you can get involved...</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </article>
                </div>

                <div class="blog-pagination">
                    <button class="pagination-btn" disabled>Previous</button>
                    <span class="pagination-info">Page 1 of 3</span>
                    <button class="pagination-btn">Next</button>
                </div>
            </div>
        </section>

        <section class="blog-categories">
            <div class="container">
                <h2 class="section-title">Explore by Category</h2>
                <div class="categories-grid">
                    <div class="category-card">
                        <div class="category-icon">📊</div>
                        <h3>Impact Stories</h3>
                        <p>Real stories of how FoodShare is making a difference in communities</p>
                        <span class="post-count">12 posts</span>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">🤝</div>
                        <h3>Community</h3>
                        <p>Highlights from our amazing community of donors and NGOs</p>
                        <span class="post-count">8 posts</span>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">🛡️</div>
                        <h3>Food Safety</h3>
                        <p>Guidelines and best practices for safe food donation</p>
                        <span class="post-count">6 posts</span>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">💡</div>
                        <h3>Tips & Guides</h3>
                        <p>Helpful tips for donors and NGOs to maximize their impact</p>
                        <span class="post-count">10 posts</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter-signup">
            <div class="container">
                <div class="newsletter-content">
                    <h2>Stay Updated</h2>
                    <p>Subscribe to our newsletter for the latest stories, tips, and updates from the FoodShare community.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
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