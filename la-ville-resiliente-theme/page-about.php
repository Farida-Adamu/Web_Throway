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
                    <!-- Default About Content (French) -->
                    <div class="post-body">
                        <h2>Qui Sommes-Nous</h2>
                        <p>La Ville Résiliente est un projet de narration dédié aux personnes, aux idées et aux initiatives qui façonnent un Abidjan plus résilient. Nous croyons que la résilience ne se résume pas à surmonter les épreuves — c'est aussi l'ingéniosité quotidienne, la solidarité et la détermination d'une ville et de ses communautés.</p>
                        <p>Abidjan est l'une des villes les plus dynamiques d'Afrique de l'Ouest, un lieu d'énergie extraordinaire, de croissance rapide et de défis complexes.</p>
                        <p>La Ville Résiliente est un projet éditorial indépendant. Nos récits sont reportés, écrits et produits avec soin, en privilégiant l'exactitude, la nuance et les voix des personnes au cœur de chaque histoire.</p>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-section">
        <div class="container" style="max-width: 720px;">
            <div class="contact-content">
                <h2 style="margin-bottom: var(--spacing-sm);">Contactez-Nous</h2>
                <p style="margin-bottom: var(--spacing-lg);">Vous avez une histoire à partager ou souhaitez collaborer ? Nous serions ravis de vous entendre.</p>

                <form class="contact-form" action="#" method="post">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="votre@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" placeholder="De quoi s'agit-il ?">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Partagez votre histoire ou posez-nous une question..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
