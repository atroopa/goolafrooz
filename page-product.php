<?PHP //Template Name: products ?>
<?php get_header(); ?>

<?PHP
$slides = array(
  array("IMAGE_URL" => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/collage.jpg"),
  array("IMAGE_URL" => "https://images.pexels.com/photos/3030268/pexels-photo-3030268.jpeg"),
  array("IMAGE_URL" => "https://images.pexels.com/photos/4170431/pexels-photo-4170431.jpeg"),
);

foreach ($slides as $slide) {
  get_template_part("inc/product", "slide", $slide);
}

?>

<?php get_footer(); ?>