<?PHP

if(is_category()){
    $category = get_queried_object();
    echo 'This is the category: ' . $category->slug;

    $cat_post = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'category_name' => 'green-house-blog'
      ));


}else {
    echo "null: ";
}

?>