<?php
class PrimaryNav extends Walker_Nav_Menu {
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      $output .= sprintf( "\n<li><a  href='%s' class='link ml4 %s'>%s</a></li>\n",
          $item->url,
          ( $item->object_id == get_the_ID() ) ? 'current' : '',
          $item->title
      );
  }
} 