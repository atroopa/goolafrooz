<?PHP //Template Name: products ?>

<?php get_header(); ?>

<?PHP

$parent_term_slug = 'green-house-products'; // slug دسته اصلی "محصولات" را وارد کنید

$parent_term = get_term_by('slug', $parent_term_slug, 'category');

$args = array(
    'taxonomy' => 'category',
    'hide_empty' => false,
    'parent' => $parent_term->term_id,
);

$sub_terms = get_terms($args);

if ($sub_terms) {
    echo '<ul>';
    foreach ($sub_terms as $sub_term) {
        echo '<li><a href="' . get_term_link($sub_term) . '">' . $sub_term->name . '</a></li>';
    }
    echo '</ul>';
}

?>

<?PHP
$slides = array(
  array("IMAGE_URL" => "https://golafrooz.com/wp-content/uploads/2024/05/hitter-slider.jpg"),
  array("IMAGE_URL" => "https://golafrooz.com/wp-content/uploads/2024/05/navdani-slider.jpg"),
  array("IMAGE_URL" => "https://golafrooz.com/wp-content/uploads/2024/05/fan-slider.jpg"),
);

foreach ($slides as $slide) {

    get_template_part("inc/product", "title");

    get_template_part("inc/product", "slide", $slide);
}

?>

<?php get_footer(); ?>