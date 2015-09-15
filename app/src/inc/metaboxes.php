<?php
/**
 * bshvil Theme Metaboxes.
 *
 * @package bshvil
 */

/**
 * Add page metabox.
 *
 */

class Pages_Meta_Box {

    public function __construct() {

        if ( is_admin() ) {
            add_action( 'load-post.php',     array( $this, 'init_metabox' ) );
            add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
        }

    }

    public function init_metabox() {

        add_action( 'add_meta_boxes', array( $this, 'add_metabox'  )        );
        add_action( 'save_post',      array( $this, 'save_metabox' ), 10, 2 );

    }

    public function add_metabox() {

        add_meta_box(
            'pageMetabox',
            __( 'Advanced Options' ),
            array( $this, 'render_metabox' ),
            'page',
            'side',
            'high'
        );

    }

    public function render_metabox( $post ) {

        // Retrieve an existing value from the database.
        $cdk_top_category = get_post_meta( $post->ID, 'cdk_top_category', true );
        $cdk_middle_category = get_post_meta( $post->ID, 'cdk_middle_category', true );
        $cdk_bottom_category = get_post_meta( $post->ID, 'cdk_bottom_category', true );

        // Set default values.
        if( empty( $cdk_top_category ) ) $cdk_top_category = '';
        if( empty( $cdk_middle_category ) ) $cdk_middle_category = '';
        if( empty( $cdk_bottom_category ) ) $cdk_bottom_category = '';

        // Form fields.
        echo '<table class="form-table">';

        echo '	<tr>';
        echo '		<th><label for="cdk_top_category" class="cdk_top_category_label">' . __( 'Select Category' ) . ' - ' . __( 'Top' ) . '</label></th>';
        echo '		<td>';
        echo '			<select id="cdk_top_category" name="cdk_top_category" class="cdk_top_category_field">';
        echo '			<option value="" ' . selected( $cdk_top_category, '', false ) . '> ' . __( 'Select' );
        $categories = get_categories();
        foreach( $categories as $cat ) {
            echo '		<option value="' . $cat->term_id . '" ' . selected( $cdk_top_category, $cat->term_id, false ) . '> ' . $cat->name;
        }
        echo '			</select>';
        echo '		</td>';
        echo '	</tr>';

        echo '	<tr>';
        echo '		<th><label for="cdk_middle_category" class="cdk_middle_category_label">' . __( 'Select Category' ) . ' - ' . __( 'Middle' ) . '</label></th>';
        echo '		<td>';
        echo '			<select id="cdk_middle_category" name="cdk_middle_category" class="cdk_middle_category_field">';
        echo '			<option value="" ' . selected( $cdk_middle_category, '', false ) . '> ' . __( 'Select' );
        foreach( $categories as $cat ) {
            echo '		<option value="' . $cat->term_id . '" ' . selected( $cdk_middle_category, $cat->term_id, false ) . '> ' . $cat->name;
        }
        echo '			</select>';
        echo '		</td>';
        echo '	</tr>';

        echo '	<tr>';
        echo '		<th><label for="cdk_bottom_category" class="cdk_bottom_category_label">' . __( 'Select Category' ) . ' - ' . __( 'Bottom' ) . '</label></th>';
        echo '		<td>';
        echo '			<select id="cdk_bottom_category" name="cdk_bottom_category" class="cdk_bottom_category_field">';
        echo '			<option value="" ' . selected( $cdk_bottom_category, '', false ) . '> ' . __( 'Select' );
        foreach( $categories as $cat ) {
            echo '		<option value="' . $cat->term_id . '" ' . selected( $cdk_bottom_category, $cat->term_id, false ) . '> ' . $cat->name;
        }
        echo '			</select>';
        echo '		</td>';
        echo '	</tr>';

        echo '</table>';

    }

    public function save_metabox( $post_id, $post ) {

        // Check if it's not a revision.
        if ( wp_is_post_revision( $post_id ) )
            return;

        // Sanitize user input.
        $cdk_new_top_category = isset( $_POST[ 'cdk_top_category' ] ) ? $_POST[ 'cdk_top_category' ] : '';
        $cdk_new_middle_category = isset( $_POST[ 'cdk_middle_category' ] ) ? $_POST[ 'cdk_middle_category' ] : '';
        $cdk_new_bottom_category = isset( $_POST[ 'cdk_bottom_category' ] ) ? $_POST[ 'cdk_bottom_category' ] : '';

        // Update the meta field in the database.
        update_post_meta( $post_id, 'cdk_top_category', $cdk_new_top_category );
        update_post_meta( $post_id, 'cdk_middle_category', $cdk_new_middle_category );
        update_post_meta( $post_id, 'cdk_bottom_category', $cdk_new_bottom_category );

    }

}

new Pages_Meta_Box;

/**
 * Add post metabox.
 *
 */
class Posts_Meta_Box {

    public function __construct() {

        if ( is_admin() ) {
            add_action( 'load-post.php',     array( $this, 'init_metabox' ) );
            add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
        }

    }

    public function init_metabox() {

        add_action( 'add_meta_boxes', array( $this, 'add_metabox'  )        );
        add_action( 'save_post',      array( $this, 'save_metabox' ), 10, 2 );

    }

    public function add_metabox() {

        add_meta_box(
            'postMetabox',
            __( 'Advanced Options' ),
            array( $this, 'render_metabox' ),
            'post',
            'side',
            'high'
        );

    }

    public function render_metabox( $post ) {

        // Retrieve an existing value from the database.
        $cdk_subtitle = get_post_meta( $post->ID, 'cdk_subtitle', true );

        // Set default values.
        if( empty( $cdk_subtitle ) ) $cdk_subtitle = '';

        // Form fields.
        echo '<table class="form-table">';

        echo '	<tr>';
        echo '		<th><label for="cdk_subtitle" class="cdk_subtitle_label">' . __( 'Title Attribute' ) . '</label></th>';
        echo '		<td>';
        echo '			<input type="text" id="cdk_subtitle" name="cdk_subtitle" class="cdk_subtitle_field" placeholder="" value="' . esc_attr__( $cdk_subtitle ) . '">';
        echo '		</td>';
        echo '	</tr>';

        echo '</table>';

    }

    public function save_metabox( $post_id, $post ) {

        // Check if it's not a revision.
        if ( wp_is_post_revision( $post_id ) )
            return;

        // Sanitize user input.
        $cdk_new_subtitle = isset( $_POST[ 'cdk_subtitle' ] ) ? sanitize_text_field( $_POST[ 'cdk_subtitle' ] ) : '';

        // Update the meta field in the database.
        update_post_meta( $post_id, 'cdk_subtitle', $cdk_new_subtitle );

    }

}

new Posts_Meta_Box;
