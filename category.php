<?PHP

if (is_category()) {
    $category = get_queried_object();
    echo 'This is the category: ' . $category->slug;

    $cat_post = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'category_name' => $category->slug
    ));

    if ($cat_post->have_posts()) { ?>
        <!-- ---------------------------- -->
        <?PHP while ($cat_post->have_posts()) {
            $cat_post->the_post();  ?>

            <ul>
                <li><?PHP the_title(); ?></li>
            </ul>

  

                <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
                <style>
                    .card {
                        transition: transform 0.3s ease-in-out,
                            box-shadow 0.3s ease-in-out;
                    }

                    .card:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
                    }

                    .card1:hover {
                        transform: rotate(-2deg) scale(1.05);
                    }

                    .card2:hover {
                        transform: rotate(2deg) scale(1.05);
                    }

                    .card3:hover {
                        transform: scale(1.05);
                    }

                    .card4:hover {
                        transform: skewY(-5deg);
                    }
                </style>


            <body class="bg-gray-100 flex 
             justify-center 
             items-center h-screen">
                <div class="grid grid-cols-1 
                md:grid-cols-2
                lg:grid-cols-4 gap-8">
                    <!-- Card 1 -->
                    <div class="max-w-xs bg-white
                    rounded-lg overflow-hidden 
                    shadow-lg card card1">
                        <img class="w-full" src="https://media.geeksforgeeks.org/wp-content/uploads/20240405130404/Image_5.png" alt="Product Image">
                        <div class="p-4">
                            <h3 class="text-xl 
                           font-semibold 
                           text-gray-800">Product Name 1</h3>
                            <p class="text-gray-600
                          mt-2">here content goes for the card 1</p>
                            <p class="text-gray-700 
                          font-bold mt-2">$19.99</p>
                            <button class="bg-blue-500 text-white 
                           font-semibold py-2 px-4
                           mt-4 rounded-lg 
                           hover:bg-blue-600
                           transition-all
                           duration-300">Add
                                to Cart</button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="max-w-xs bg-white 
                    rounded-lg overflow-hidden
                    shadow-lg card card2">
                        <img class="w-full" src="https://media.geeksforgeeks.org/wp-content/uploads/20240405130408/Image_2.png" alt="Product Image">
                        <div class="p-4">
                            <h3 class="text-xl
                           font-semibold 
                           text-gray-800">Product Name 2</h3>
                            <p class="text-gray-600
                          mt-2">here content goes for the card 2</p>
                            <p class="text-gray-700
                          font-bold mt-2">$29.99</p>
                            <button class="bg-blue-500 text-white
                           font-semibold py-2 px-4 mt-4
                           rounded-lg hover:bg-blue-600 
                           transition-all duration-300">Add
                                to Cart</button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="max-w-xs bg-white rounded-lg
                    overflow-hidden shadow-lg
                    card card3">
                        <img class="w-full" src="https://media.geeksforgeeks.org/wp-content/uploads/20240405130404/Image_5.png" alt="Product Image">
                        <div class="p-4">
                            <h3 class="text-xl 
                           font-semibold 
                           text-gray-800">Product Name 3</h3>
                            <p class="text-gray-600
                          mt-2">here content goes for the card 3</p>
                            <p class="text-gray-700 
                          font-bold mt-2">$39.99</p>
                            <button class="bg-blue-500 text-white 
                           font-semibold py-2 px-4
                           mt-4 rounded-lg hover:bg-blue-600
                           transition-all duration-300">
                                Add to Cart</button>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="max-w-xs bg-white 
                    rounded-lg overflow-hidden
                    shadow-lg card card4">
                        <img class="w-full" src="https://media.geeksforgeeks.org/wp-content/uploads/20240405130405/Image_4.png" alt="Product Image">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold
                           text-gray-800">Product Name 4</h3>
                            <p class="text-gray-600 mt-2">
                                here content goes for the card 4</p>
                            <p class="text-gray-700 font-bold mt-2">$49.99</p>
                            <button class="bg-blue-500 text-white 
                           font-semibold py-2 px-4 mt-4 
                           rounded-lg hover:bg-blue-600
                           transition-all duration-300">
                                Add to Cart</button>
                        </div>
                    </div>
                </div>
            </body>

            </html>


<?php
        }
    }
}
?>