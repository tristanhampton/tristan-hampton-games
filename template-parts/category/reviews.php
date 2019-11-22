<main class="category-reviews">
<?php $query = new WP_Query(array('post_type'=>'review')) ?>
  <?php if($query -> have_posts()): ?>
  <section>
    <h2>Reviews</h2>
    <?php while($query -> have_posts()): $query -> the_post(); ?>
        <?php 
        $header = get_field('header'); 
        $body = get_field('body');
        $review_start = $body['review_start'];
        ?>
        <div class="thumbnail">
            <h3><a href="<?php the_permalink() ?>"><?php echo $header['review_title'] ?></a></h3>
            <p><?php echo $header['review_tagline'] ?></p>
            <?php echo $review_start ?>
            <p><a href="<?php the_permalink() ?>">Read More...</a></p>
        </div>
    <?php endwhile ?>
  </section>
<?php endif ?>
</main>