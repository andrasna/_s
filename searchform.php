<form role="search" method="get" class="mb4" action="<?php echo home_url( '/' ); ?>">
    <label>
        <input type="search" class="input-reset bn pa2 bg-black-05" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="input-reset bn pa2 bg-black-80 white pointer" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>