<main class="category-videos">
<?php $query = new WP_Query(array('post_type'=>'twitter_video')) ?>
  <?php if($query -> have_posts()): ?>
  <section>
    <h2>Videos</h2>
    <?php while($query -> have_posts()): $query -> the_post(); ?>
      <div class="thumbnail-video">
        <a href="<?php the_permalink() ?>">
          <h3><?php the_field('title') ?></h3>
          <p><?php the_field('tagline') ?></p>
          <div class="tweet">
            <?php the_field('twitter_embed') ?> 
          </div>
        </a>
      </div>
    <?php endwhile ?>
  </section>
<?php endif ?>
</main>