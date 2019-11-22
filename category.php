<?php  get_header(); ?>


<?php 
if(is_category('game')){
    get_template_part('template-parts/category/games', 'index');
}

if(is_category('review')){
    get_template_part('template-parts/category/reviews', 'index');
}
?>

<?php  get_footer(); ?>
