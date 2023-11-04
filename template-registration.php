<?php
/* Template Name: Custom Registration */

get_header();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_id = wp_create_user($username, $password, $email);

    if (!is_wp_error($user_id)) {
        echo 'Registration successful.';

        // You can redirect users to a specific page after registration
        wp_redirect(home_url('/login')); // Redirect to the login page
        exit;
    } else {
        echo 'Registration failed. ' . $user_id->get_error_message();
    }
}
?>

<form method="post" action="">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" name="submit" value="Register">
</form>

<?php get_footer(); ?>