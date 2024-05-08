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
    array("ICON_URL" => "https://golafrooz.com/wp-content/uploads/2023/11/%DA%A9%D8%A7%D9%88%D8%B1-%D9%81%D9%86%D9%87%D8%A7-1003x1003.png"),
    array("ICON_URL" => "https://golafrooz.com/wp-content/uploads/2023/11/%DA%A9%D8%A7%D9%88%D8%B1-%D9%86%D8%A7%D9%88%D8%AF%D8%A7%D9%86%D9%87%D8%A7-2-1003x1003.png"),
    array("ICON_URL" => "https://golafrooz.com/wp-content/uploads/2023/11/%DA%A9%D8%A7%D9%88%D8%B1-%D8%B3%DB%8C%D8%B3%D8%AA%D9%85-%DA%AF%D8%B1%D9%85%D8%A7%DB%8C%D8%B4%DB%8C1-1003x1003.png")
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
                <!-- ----------- TITLE CAT -------------- -->
                <div class=" w-full dark:bg-slate-800 gap-6 flex items-center justify-center">
                    <div class="w-1/2 bg-gray-100 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
                        <div class="flex items-center gap-4">
                            <img src="<?php echo $iconURL; ?>" class="w-32 group-hover:w-36 group-hover:h-36 h-32 object-center object-cover rounded-full transition-all duration-500 delay-500 transform" />
                            <div class="w-fit transition-all transform duration-500">
                                <h1 class="text-gray-600 dark:text-gray-200 font-bold">
                                    <a href="<?php echo get_term_link($sub_term); ?>"><?php echo $sub_term->name; ?></a>
                                </h1>
                                <div class="text-gray-400"><?PHP echo $sub_term->description; ?></div>

                                <a class="text-xs text-gray-500 dark:text-gray-200 group-hover:opacity-100 opacity-0 transform transition-all delay-300 duration-500">
                                </a>
                            </div>
                        </div>
                        <div class="absolute group-hover:bottom-1 delay-300 -bottom-16 transition-all duration-500 bg-gray-600 dark:bg-gray-100 right-1 rounded-lg">
                            <div class="flex justify-evenly items-center gap-2 p-1 text-2xl text-white dark:text-gray-800">

                            </div>
                        </div>
                    </div>
                </div>
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