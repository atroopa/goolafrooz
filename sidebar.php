<div class="w-full md:w-1/4 px-4">
                <div class="bg-gray-100 p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">مطالب مرتبط</h2>
                    <ul class="list-none">
                        <?php
                        // Display related posts
                        $related_posts = get_posts(array(
                            'posts_per_page' => 4,
                            'post__not_in' => array(get_the_ID()),
                            'category__in' => wp_get_post_categories(get_the_ID()),
                            'orderby' => 'rand',
                        ));
                        foreach ($related_posts as $post) : setup_postdata($post); ?>
                            <li class="mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-gray-900"><?php the_title(); ?></a>
                            </li>
                        <?php endforeach;
                        wp_reset_postdata(); // Reset the post data query ?>
                    </ul>
                </div>
                <div class="bg-gray-100 p-4 mt-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">دسته ها</h2>
                    <ul class="list-none">
                        <li class="mb-2">
                            <a href="#" class="text-gray-700 hover:text-gray-900"><?PHP the_category(); ?></a>
                        </li>
                    </ul>
                </div>
            </div>