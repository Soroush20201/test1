<?php
/*
Template Name: Profile Template
*/
get_header();
$current_user = wp_get_current_user();
 ?>
<?php  ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; ?>
        <?php


if ($current_user->exists()) {
    echo 'Username: ' . $current_user->user_login . '<br>';
    echo 'User email: ' . $current_user->user_email . '<br>';
    echo 'User display name: ' . $current_user->display_name . '<br>';
    echo 'User ID: ' . $current_user->ID . '<br>';
}
?>


    </main>
</div>


<?php get_footer(); ?>