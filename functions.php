<?php
add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
    load_theme_textdomain('blankslate', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    global $content_width;
    if (!isset($content_width)) $content_width = 640;
    register_nav_menus(
        array('main-menu' => __('Main Menu', 'blankslate'))
    );
}

add_action('wp_enqueue_scripts', 'blankslate_load_scripts');
function blankslate_load_scripts()
{
    wp_enqueue_script('jquery');
}

add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_filter('the_title', 'blankslate_title');
function blankslate_title($title)
{
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter('wp_title', 'blankslate_filter_wp_title');
function blankslate_filter_wp_title($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'blankslate'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

function blankslate_custom_pings($comment)
{
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php
}

add_filter('get_comments_number', 'blankslate_comments_number');
function blankslate_comments_number($count)
{
    if (!is_admin()) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}


// added 1
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
require_once('wp_bootstrap_navwalker_footer.php');


register_nav_menus(array(
    'primary' => __('Primary Menu', 'THEMENAME'),
));

function my_walker_nav_menu_start_el($item_output, $item, $depth, $args)
{
    // you can put your if statements in here (use item, depth and args in conditions)
    if ($depth > 0) {

        $item_output = preg_replace('/<a /', '<a class="schild" ', $item_output, 1);
        //$item_output = preg_replace('/<li /', '<li class="dropdown-menu-item" ', $item_output, 3);
    } else if ($depth == 0) {
        $item_output = preg_replace('/<a /', '<a class="nav-item-child dropdown-toggle radius-3" ', $item_output, 1);
    }


    // .. and so on
    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);


//g

register_nav_menus(array(
    'header_menu' => 'Header Menu',
));

register_nav_menus(array(
    'footer_menu' => 'Footer Menu',
));
