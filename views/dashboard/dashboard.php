<?php do_action( 'wpml_dashboard_setup' ); ?>

	<div id="wpml-home" class="wrap">

		<h2><?php echo WPML_NAME; ?></h2>

		<div id="wpml_dashboard_welcome_panel_widget" class="<?php if ( in_array( 'wpml_dashboard_welcome_panel_widget', $hidden ) ) echo ' hidden hide-if-js'; ?>">
			<div id="wpml-welcome-panel" class="welcome-panel">
				<a id="wpml-welcome-panel-close" href="<?php echo wp_nonce_url( admin_url( 'admin.php?page=wpmovielibrary&amp;show_wpml_welcome_panel=1' ), 'show-wpml-welcome-panel', 'show_wpml_welcome_panel_nonce' ) ?>" class="welcome-panel-close"><span class="dashicons dashicons-dismiss"></span><?php _e( 'Dismiss', 'wpmovielibrary-admin' ); ?></a>
				<div class="welcome-panel-content">
					<h3><?php _e( 'Welcome to WordPress Movie Library!', 'wpmovielibrary-admin' ); ?></h3>
					<p class="about-description">
						<?php _e( 'Thank you for using WPMovieLibrary. We made this plugin for movie lovers! Here are a few links to get you started.', 'wpmovielibrary-admin' ); ?>
					</p>
					<div class="welcome-panel-column-container">
						<div class="welcome-panel-column">
							<h4><?php _e( 'Get Started', 'wpmovielibrary-admin' ); ?></h4>
							<a class="button button-primary button-hero" href="http://wpmovielibrary.com/documentation/"><?php _e( 'View the Documentation', 'wpmovielibrary-admin' ); ?></a>
							<p><?php printf( __( 'and you may want to look at the <a href="%s">plugin settings</a>.', 'wpmovielibrary-admin' ), admin_url( 'admin.php?page=wpml_edit_settings' ) ) ?></p>
						</div>

						<div class="welcome-panel-column">
							<h4><?php _e( 'Start building your library', 'wpmovielibrary-admin' ); ?></h4>
							<ul>
								<li><span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo admin_url( 'post-new.php?post_type=movie' ) ?>"><?php _e( 'Create your first movie', 'wpmovielibrary-admin' ); ?></a></li>
								<li><span class="dashicons dashicons-list-view"></span><a href="<?php echo admin_url( 'admin.php?page=wpml_import' ) ?>"><?php _e( 'Import lists of movies', 'wpmovielibrary-admin' ); ?></a></li>
								<li><span class="dashicons dashicons-format-video"></span><a href="<?php echo admin_url( 'edit.php?post_type=movie' ) ?>"><?php _e( 'Manage your movies', 'wpmovielibrary-admin' ); ?></a></li>
							</ul>
						</div>

						<div class="welcome-panel-column">
							<h4><?php _e( 'Furthermore', 'wpmovielibrary-admin' ); ?></h4>
							<ul>
								<li><span class="dashicons dashicons-category"></span><a href="<?php echo admin_url( 'edit-tags.php?taxonomy=collection&post_type=movie' ) ?>"><?php _e( 'Create and manage Collections', 'wpmovielibrary-admin' ); ?></a></li>
								<li><span class="dashicons dashicons-tag"></span><?php printf( __( 'Create and manage <a href="%s">Genres</a> and <a href="%s">Actors</a>', 'wpmovielibrary-admin' ), admin_url( 'edit-tags.php?taxonomy=genre&post_type=movie' ), admin_url( 'edit-tags.php?taxonomy=actor&post_type=movie' ) ) ?></a></li>
								<li><a href="<?php echo admin_url( '' ) ?>"><?php _e( '', 'wpmovielibrary-admin' ); ?></a></li>
								<li><a href=""><?php _e( '', 'wpmovielibrary-admin' ); ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="dashboard-widgets-wrap">
			<div id="dashboard-widgets" class="metabox-holder">
				<div id="postbox-container-1" class="postbox-container">
					<?php do_meta_boxes( $screen->id, 'normal', '' ); ?>
				</div>
				<div id="postbox-container-2" class="postbox-container">
					<?php do_meta_boxes( $screen->id, 'side', '' ); ?>
				</div>
			</div>
		</div>

	</div>