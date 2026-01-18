<?php get_header(); ?>

<main>
    <?php while (have_posts()) : the_post(); ?>
        <article class="post-article">
            <div class="post-container">
                <!-- Post Meta -->
                <div class="post-meta-info">
                    <span class="post-date"><?php echo get_the_date('j M Y'); ?></span>
                    <span class="post-category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            $cat_names = array();
                            foreach ($categories as $category) {
                                $cat_names[] = esc_html($category->name);
                            }
                            echo implode(' • ', $cat_names);
                        }
                        ?>
                    </span>
                </div>

                <!-- Post Title -->
                <h1 class="post-main-title"><?php the_title(); ?></h1>

                <!-- Author -->
                <div class="post-author">
                    <div class="author-avatar">
                        <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                    </div>
                    <div class="author-info">
                        <span class="author-name"><?php the_author(); ?></span>
                    </div>
                </div>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-featured-img">
                        <?php the_post_thumbnail('post-featured'); ?>
                    </div>
                <?php endif; ?>

                <!-- Post Content -->
                <div class="post-body">
                    <?php the_content(); ?>
                </div>

                <!-- Back Link -->
                <div class="post-footer">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="back-link">← Back to stories</a>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
