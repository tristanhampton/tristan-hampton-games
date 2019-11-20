<?php  get_header(); ?>


<?php 
if(is_singular('game')){
    get_template_part('template-parts/single/game', 'index');
}
?>

<?php  get_footer(); ?>
