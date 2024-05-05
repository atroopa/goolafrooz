<?PHP

if(is_category()){
    $category = get_queried_object();
    echo 'This is the category: ' . $category->slug;

    $cat_post = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'category_name' => $category->slug
      ));

      if ($cat_post->have_posts()) { ?>

        <?PHP while ($cat_post->have_posts()) {
            $cat_post->the_post();  ?>

            <ul>
                <li><?PHP the_title(); ?></li>
            </ul>




    <?php
            }
     }
    }
    ?>
