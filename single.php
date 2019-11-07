<?php  get_header(); ?>

<!-- TODO: Change is_singular to custom post type -->
<?php if(is_singular('XXX')){
    get_template_part('template-parts/single/article', 'index');
}
?>

<?php  get_footer(); ?>
