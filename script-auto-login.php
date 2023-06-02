<?php
function auto_login_urgent() {
        if(!isset($_GET['al_user_id'])){
            return;
        }
        $user_id = $_GET['al_user_id'];
        wp_set_current_user($user_id);
        $secure_cookie = is_ssl() ? true : false;
        wp_set_auth_cookie($user_id,true, $secure_cookie);
        wp_redirect( home_url() );
        exit;
    }
add_action( 'init', 'auto_login_urgent' );
