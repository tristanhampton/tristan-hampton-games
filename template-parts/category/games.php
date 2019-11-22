<main class="category-games">
<?php $query = new WP_Query(array('post_type'=>'game')) ?>
  <?php if($query -> have_posts()): ?>
  <section>
    <h2>Games</h2>
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
</main>