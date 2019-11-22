<?php 
 get_header();
 get_template_part('template-parts/headers/front-page', 'header');
?>
<main class="front-page">

<!-- RECENTLY ADDED GAMES -->
  <?php $query = new WP_Query(array('post_type'=>'game', 'posts_per_page'=>2)) ?>
  <?php if($query -> have_posts()): ?>
  <section>
    <h2>Recently Added</h2>
    <?php while($query -> have_posts()): $query -> the_post(); ?>
      <?php $header = get_field('header'); ?>
      <div class="thumbnail">
        <a href="<?php the_permalink() ?>">
          <h3><?php echo $header['game_title'] ?></h3>
          <img src="<?php echo $header['cover'] ?>" alt="<?php echo $header['game_title'] ?> cover">
        </a>
      </div>
    <?php endwhile ?>
  </section>
  <?php endif ?>

<!-- PS4 GAMES -->
  <?php $query = new WP_Query(array('tag'=>'PS4', 'post_type'=>'game', 'posts_per_page'=>2)) ?>
  <?php if($query -> have_posts()): ?>
  <section>
    <h2>PS4 Games</h2>
    <?php while($query -> have_posts()): $query -> the_post(); ?>
      <?php $header = get_field('header'); ?>
      <div class="thumbnail">
        <a href="<?php the_permalink() ?>">
          <h3><?php echo $header['game_title'] ?></h3>
          <img src="<?php echo $header['cover'] ?>" alt="<?php echo $header['game_title'] ?> cover">
        </a>
      </div>
    <?php endwhile ?>
  </section>
  <?php endif ?>

<!-- SWITCH GAMES -->
  <?php $query = new WP_Query(array('tag'=>'Switch', 'post_type'=>'game', 'posts_per_page'=>2)) ?>
  <?php if($query -> have_posts()): ?>
  <section>
    <h2>Switch Games</h2>
    <?php while($query -> have_posts()): $query -> the_post(); ?>
      <?php $header = get_field('header'); ?>
      <div class="thumbnail">
        <a href="<?php the_permalink() ?>">
          <h3><?php echo $header['game_title'] ?></h3>
          <img src="<?php echo $header['cover'] ?>" alt="<?php echo $header['game_title'] ?> cover">
        </a>
      </div>
    <?php endwhile ?>
  </section>
  <?php endif ?>

<!-- GAME REVIEWS -->
  <?php $query = new WP_Query(array('post_type'=>'review', 'posts_per_page'=>2)) ?>
  <?php if($query -> have_posts()): ?>
  <section>
    <h2>Reviews</h2>
    <?php while($query -> have_posts()): $query -> the_post(); ?>
        <?php 
        $header = get_field('header'); 
        $body = get_field('body');
        $review_start = $body['review_start'];
        ?>
        <div class="thumbnail-review">
            <h3><a href="<?php the_permalink() ?>"><?php echo $header['review_title'] ?></a></h3>
            <p><?php echo $header['review_tagline'] ?></p>
            <?php echo $review_start ?>
            <p><a href="<?php the_permalink() ?>">Read More...</a></p>
        </div>
    <?php endwhile ?>
  </section>
<?php endif ?>


</main>
<?php get_footer(); ?>