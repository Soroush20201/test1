<?php
/* Template Name: Custom Login */
// Start the session
// session_start();

if (isset($_POST['login'])) {
    $username = sanitize_user($_POST['username']);
    $password = $_POST['password'];

    // Attempt to sign the user in
    $user = wp_signon(array(
        'user_login' => $username,
        'user_password' => $password,
        'remember' => true,
    ));

    if (is_wp_error($user)) {
        $error_message = $user->get_error_message();
        echo 'Login failed. ' . $error_message;
    } else {
        $user_id = $user->ID;
        // $profile_url = get_permalink(491); // Replace 123 with the ID of your profile page
        // wp_redirect($profile_url); // Redirect to the custom profile page after successful login
        wp_redirect(home_url('/profile'));
        exit;
    }

}
get_header();
 ?>

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

    </main>
</div>

    
<?php





?>

<!-- Create a login form -->
<form method="post" action="">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>

<?php get_footer();?>
