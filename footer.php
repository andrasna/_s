<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

</div>

<footer class="mw8 center mv5 flex justify-between-ns">
    <div>
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>">
        <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' );
        ?>
      </a>
    </div>
    <div>
      <?php
      /* translators: 1: Theme name, 2: Theme author. */
      printf( esc_html__( '%1$s by %2$s.', '_s' ), 'Theme', '<a href="#">Author name</a>' );
      ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
