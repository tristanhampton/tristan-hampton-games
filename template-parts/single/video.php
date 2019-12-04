<main class="video">
<?php while( have_posts() ) : the_post();  ?>

    <header>
        <h2><?php the_field('title') ?></h2>
        <p><?php the_field('tagline') ?></p>
    </header>

    <main>
        <?php the_field('twitter_embed') ?>
        <div>
            <?php the_field('description') ?>
        </div>
    </main>
<?php endwhile ?>
</main>