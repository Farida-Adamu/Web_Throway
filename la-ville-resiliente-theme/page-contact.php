<?php
/**
 * Template Name: Contact Page
 * Dedicated template for the Contact page
 */
get_header(); ?>

<main>
    <section class="page-header">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <p>Have a story to share or want to collaborate? We'd love to hear from you.</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-content">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    // If the page has content (e.g. from Contact Form 7 plugin), show it
                    $content = get_the_content();
                    if ($content) :
                        the_content();
                    else :
                    // Fallback basic HTML form
                    ?>
                    <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <input type="hidden" name="action" value="laville_contact_form">
                        <?php wp_nonce_field('laville_contact_nonce'); ?>

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
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
