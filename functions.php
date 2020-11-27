<?php
/**
 * Register additional widget area in footer.
 *
 */
function footer_additional_text_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Text Under Copyright in Footer', 'customizrchild' ),
		'id'            => 'footer_additional_text_1',
		'class'         => 'footer-additional-text',
		'description'   => __( 'Appears underneath the footer copyright; when this contains one or more widgets, it will replace the existing "Powered by Wordpress" section. Ideal for a small snippet of text or a few links.', 'customizrchild' ),
		'before_widget' => '<div class="czr-footer-additional-text">',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'footer_additional_text_widgets_init' );

