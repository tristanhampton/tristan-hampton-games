<?php  get_header(); ?>


<?php 
if(is_singular('game')){
        get_template_part('template-parts/single/game', 'index');
}

if(is_singular('review')){
        get_template_part('template-parts/single/review', 'index');
}

if(is_singular('twitter_video')){
        get_template_part('template-parts/single/video', 'index');
}
?>

<?php  get_footer(); ?>
