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

$icons = array(
    array("ICON_URL" => "https://icons.com/icon1.png"),
    array("ICON_URL" => "https://icons.com/icon2.png"),
    array("ICON_URL" => "https://icons.com/icon3.png")
);

$sub_terms = get_terms($args);

if ($sub_terms) {
    $imageMap = array(
        "greenhouse-fan" => array($slides[2]["IMAGE_URL"], $icons[2]["ICON_URL"]),
        "greenhouse-boilers" => array($slides[1]["IMAGE_URL"], $icons[1]["ICON_URL"]),
        "greenhouse-heater" => array($slides[0]["IMAGE_URL"], $icons[0]["ICON_URL"]),
    );
    
    echo '<ul>'; // Open the unordered list outside the loop for better structure

    foreach ($sub_terms as $sub_term) {
        if (isset($imageMap[$sub_term->slug])) {
            list($imageURL, $iconURL) = $imageMap[$sub_term->slug];
            $slide = array('IMAGE_URL' => $imageURL);
            ?>

            <li>
                <a href="<?php echo get_term_link($sub_term); ?>"><?php echo $sub_term->name; ?></a>
                <div><?PHP  echo $sub_term->description; ?></div>
                <?php echo $iconURL; ?>
                <!-- ------ SLIDER --------- -->
                <?php get_template_part("inc/product", "slide", $slide); ?>

            </li>

            <?php // Close the PHP tag within the loop for proper syntax
        }
    }

    echo '</ul>'; // Close the unordered list outside the loop
}

get_footer();
?>