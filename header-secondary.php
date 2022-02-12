
<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Medplus
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'medplus_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'medplus_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<!-- medpus -->



    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <title>MEDPLUS Clinic</title>
</head>


</head>

<body <?php body_class(); ?> <?php medplus_body_attributes(); ?>>
	<?php do_action( 'wp_body_open' ); ?>

    <header class="bg-dark-blue">
  
        <?php
         get_template_part( 'global-templates/navbar', 'secondary' ); 
        ?>
    </header>






















