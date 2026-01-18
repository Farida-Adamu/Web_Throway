<?php get_header(); ?>

<main>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section id="blog" class="blog-grid">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="blog-card">
                            <div class="card-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('card-thumbnail'); ?>
                                    </a>
                                <?php else : ?>
                                    <div class="placeholder-image">Story Image</div>
                                <?php endif; ?>
                            </div>
                            <div class="card-content">
                                <?php
                                $category = laville_get_first_category();
                                if ($category) :
                                ?>
                                    <span class="category"><?php echo $category; ?></span>
                                <?php endif; ?>

                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="card-link">Read more →</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <?php
                // Pagination
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('← Previous', 'la-ville-resiliente'),
                    'next_text' => __('Next →', 'la-ville-resiliente'),
                ));
                ?>

            <?php else : ?>
                <p><?php _e('No posts found.', 'la-ville-resiliente'); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
