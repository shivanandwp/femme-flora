<aside <?php hybrid_attr( 'sidebar', 'after_header' ); ?>>

		<?php if ( is_active_sidebar( 'after_header' ) ) : // If the sidebar has widgets. ?>
			<div class="wrap">
			<?php dynamic_sidebar( 'after_header' ); // Displays the subsidiary sidebar. ?>
			</div>
		<?php else : // If the sidebar has no widgets. ?>
			<?php
			$show_default_widget_content = apply_filters('convertica_show_default_widget_content',true);
			if($show_default_widget_content) {
				?>
				<div class="wrap">
				<?php the_widget(
					'WP_Widget_Text',
					array(
						'title'  => __( 'Example Widget', 'femme-flora' ),
						// Translators: The %s are placeholders for HTML, so the order can't be changed.
						'text'   => sprintf( __( 'This is an example widget to show how the After-Header sidebar looks by default. You can add custom widgets from the %swidgets screen%s in the admin.', 'femme-flora' ), current_user_can( 'edit_theme_options' ) ? '<a href="' . admin_url( 'widgets.php' ) . '">' : '', current_user_can( 'edit_theme_options' ) ? '</a>' : '' ),
						'filter' => true,
					),
					array(
						'before_widget' => '<section class="widget widget_text">',
						'after_widget'  => '</section>',
						'before_title'  => '<h3 class="widget-title">',
						'after_title'   => '</h3>'
					)
				); ?>
				</div>
			<?php
			}
			?>
		<?php endif; // End widgets check. ?>

	</aside><!-- #sidebar-subsidiary -->