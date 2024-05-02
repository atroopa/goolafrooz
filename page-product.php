<?PHP //Template Name: products ?>
<?php get_header(); ?>

<?PHP
$slides = array(
  array("IMAGE_URL" => "https://golafrooz.com/wp-content/uploads/2024/05/hitter-slider.jpg"),
  array("IMAGE_URL" => "https://golafrooz.com/wp-content/uploads/2024/05/navdani-slider.jpg"),
  array("IMAGE_URL" => "https://golafrooz.com/wp-content/uploads/2024/05/fan-slider.jpg"),
);

foreach ($slides as $slide) {
    echo "---------";
    get_template_part("inc/product", "slide", $slide);
}

?>

<?php get_footer(); ?>