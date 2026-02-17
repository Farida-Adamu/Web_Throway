<?php
/**
 * Template Name: Gallery Page
 * Gallery page template for future image displays
 */
get_header(); ?>

<main>
    <section class="page-header">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <p>Visual stories of resilience, innovation, and transformation across Abidjan.</p>
        </div>
    </section>

    <section style="padding: 0 0 var(--spacing-xxl);">
        <div class="container">
            <?php while (have_posts()) : the_post(); ?>
                <?php
                $content = get_the_content();
                if ($content) :
                    the_content();
                else :
                ?>
                    <p style="font-size: 1.1rem; opacity: 0.7;">Gallery coming soon. Check back for photos and visual stories from Abidjan.</p>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
