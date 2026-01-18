<?php get_header(); ?>

<main>
    <?php while (have_posts()) : the_post(); ?>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p><?php the_excerpt(); ?></p>
                <?php endif; ?>
            </div>
        </section>

        <!-- Page Content -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
