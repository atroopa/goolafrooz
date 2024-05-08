<?php
// Template Name: products

get_header();

$parent_term_slug = 'green-house-products';
$parent_term = get_term_by('slug', $parent_term_slug, 'category');

$args = array(
    'taxonomy' => 'category',
    'hide_empty' => false,
    'parent' => $parent_term->term_id,
);

$slides = array(
    array("IMAGE_URL" => "https://golafrooz.com/wp-content/uploads/2024/05/hitter-slider.jpg"),
    array("IMAGE_URL" => "https://golafrooz.com/wp-content/uploads/2024/05/navdani-slider.jpg"),
    array("IMAGE_URL" => "https://golafrooz.com/wp-content/uploads/2024/05/fan-slider.jpg"),
);

$sub_terms = get_terms($args);

if ($sub_terms) {
    $imageMap = array(
        "greenhouse-fan" => $slides[2]["IMAGE_URL"],
        "greenhouse-boilers" => $slides[1]["IMAGE_URL"],
        "greenhouse-heater" => $slides[0]["IMAGE_URL"],
    );

    echo '<ul>'; // Open the unordered list outside the loop for better structure

    foreach ($sub_terms as $sub_term) {
        if (isset($imageMap[$sub_term->slug])) {
            $imageURL = $imageMap[$sub_term->slug];
            $slide = array('IMAGE_URL' => $imageURL);
            ?>

            <li>
                <a href="<?php echo get_term_link($sub_term); ?>"><?php echo $sub_term->name; ?></a>
                <div><?PHP  echo $sub_term->description; ?></div>
                <?php get_template_part("inc/product", "slide", $slide); ?>
            </li>

            <?php // Close the PHP tag within the loop for proper syntax
        }
    }

    echo '</ul>'; // Close the unordered list outside the loop
}

get_footer();
?>