<div class="single-article">
<?php while( have_posts() ) : the_post();  ?>
    <header>
        <div>
            <h2><?php the_field('title'); ?></h2>
            <p><?php the_field('tagline'); ?></p>
            <p>by: <?php the_field('author'); ?></p>
        </div>
        <img src="<?php the_field('featured_image'); ?>">
    </header>
    <main>
        <div class="author">
            <img src="<?php the_field('author_photo'); ?>">
            <p><?php the_field('author'); ?></p>
        </div>
        <?php the_field('paragraphs'); ?>
        <img src="<?php the_field('article_image'); ?>" alt=""> 
        <?php the_field('paragraphs_2'); ?>
    </main>
<?php endwhile; ?>
</div>