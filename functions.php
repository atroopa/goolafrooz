<?php

function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'Main_Menu'=>'منوی اصلی',
        'footer_one'=>'منوس اول فوتر',
        'footer_two'=>'منوی دوم فوتر',
    ));
}

add_action("after_setup_theme", "theme_setup");


function handle_contact_form() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'your@email.com';
        $subject = 'پیام جدید از فرم تماس';
        $body = "نام: $name\nایمیل: $email\nپیام:\n$message";
        $headers = ['From: ' . $email, 'Reply-To: ' . $email];

        if (wp_mail($to, $subject, $body, $headers)) {
            wp_redirect(home_url('/thank-you'));
            exit;
        } else {
            wp_redirect(home_url('/error'));
            exit;
        }
    }
}

add_action('admin_post_nopriv_send_contact_form', 'handle_contact_form');
add_action('admin_post_send_contact_form', 'handle_contact_form');


?>