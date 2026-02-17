<?php
/**
 * Template Name: About Page
 * Dedicated template for the About page with contact form
 */
get_header(); ?>

<main>
    <section class="page-header">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <p>The story behind La Ville Resiliente.</p>
        </div>
    </section>

    <section style="padding: 0 0 var(--spacing-xl);">
        <div class="container" style="max-width: 720px;">
            <?php while (have_posts()) : the_post(); ?>
                <?php
                $content = get_the_content();
                if ($content) :
                ?>
                    <div class="post-body">
                        <?php the_content(); ?>
                    </div>
                <?php else : ?>
                    <!-- Default About Content -->
                    <div class="post-body">
                        <h2>Our Mission</h2>
                        <p>La Ville Resiliente chronicles the remarkable stories of resilience, innovation, and transformation happening across Abidjan. Through the lens of environmental sustainability and energy access, we share the voices of those building a brighter, more sustainable future for Côte d'Ivoire's economic capital.</p>
                        <p>From community solar initiatives to lagoon restoration efforts, from urban gardens to waste-to-energy innovations — these are the stories that rarely make headlines but are quietly reshaping what it means to live in, and belong to, a city.</p>

                        <h2>What We Cover</h2>
                        <p><strong>Environment</strong> — Efforts to protect and restore Abidjan's natural ecosystems, from its lagoons to its urban green spaces.</p>
                        <p><strong>Energy</strong> — Communities transitioning to renewable energy and the innovators making it happen.</p>
                        <p><strong>Community</strong> — The people and movements driving change from the ground up.</p>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-section">
        <div class="container" style="max-width: 720px;">
            <div class="contact-content">
                <h2 style="margin-bottom: var(--spacing-sm);">Get In Touch</h2>
                <p style="margin-bottom: var(--spacing-lg);">Have a story to share or want to collaborate? We'd love to hear from you.</p>

                <form class="contact-form" action="#" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="What is this about?">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Tell us your story or ask a question..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
