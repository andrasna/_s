<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class('sans-serif'); ?>>
<div class="mw8 pv5 center flex justify-between">
  <header>
    <?php the_custom_logo(); ?>
    <h1 class="ma0">
      <a class="link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </h1>
    <?php
    $_s_description = get_bloginfo( 'description', 'display' );
    if ( $_s_description || is_customize_preview() ) :
    ?>
    <p class="f4 ma0"><?php echo $_s_description; ?></p>
    <?php endif; ?>
  </header>

  <nav>
    <?php
    if ( has_nav_menu( 'primary' ) ) {
      wp_nav_menu( array(
        'theme_location'  => 'primary',
        'container'       => 'ul',
        'items_wrap'      => '<ul class="list pl0 flex">%3$s</ul>',
        'walker'          => new PrimaryNav(),
      ) );
    }
    ?>
  </nav>
</div>

<div class="mw8 center">
