<main class="review">
<?php while( have_posts() ) : the_post();  ?>
    <?php 
    $header = get_field('header');
    $body = get_field('body');
    $review_start = $body['review_start'];
    $review_sections = $body['review_section'];
    ?>

    <header>
        <h2><?php echo $header['review_title'] ?></h2>
        <p><?php echo $header['review_tagline'] ?></p>
        <p><?php echo $header['author']?> on <?php echo $header['game_title'] ?></p>
    </header>

    <main>
        <section>
            <?php echo $review_start ?>
        </section>

        <?php if($review_sections): foreach($review_sections as $section):  ?>
        <section>
            <?php  if($section['heading']): ?> 
            <h3><?php echo $section['heading'] ?></h3>
            <?php endif ?>

            <?php  if($section['image']): ?> 
            <img src="<?php echo $section['image'] ?>">
            <?php endif ?>

            <?php  if($section['text']): ?> 
            <p><?php echo $section['text'] ?></p>
            <?php endif ?>
        </section>
        <?php endforeach; endif ?>
    </main>

    <footer>
        <img src="<?php echo $header['author_photo'] ?>" alt="<?php echo $header['author']?> profile photo">
        <p><?php echo $header['author_description'] ?></p>
    </footer>




<?php endwhile ?>
</main>