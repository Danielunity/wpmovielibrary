
<?php else if ( 'api-key-error' == $notice ) : ?>
	<div class="update-nag wpml">
		<?php _e( 'You haven\'t specified a valid <acronym title="TheMovieDB">TMDb</acronym> API key in your Settings; this is required for the plugin to search a get movies metadata. WPMovieLibrary will use an internal API key, but you may consider getting your own personnal one at <a href="https://www.themoviedb.org/">TMDb</a> to get better results.', WPML_SLUG ) ?><br />
		<span style="float:right">
			<a class="button-secondary" href="http://tmdb.caercam.org/"><?php _e( 'Learn more about the internal API key', WPML_SLUG ) ?></a>
			<a class="button-primary" href="<?php echo wp_nonce_url( admin_url( '/admin.php?page=wpmovielibrary&amp;hide_wpml_api_key_notice=1' ), 'hide-wpml-api-key-notice', '_nonce' ) ?>"><?php _e( 'Do not notify me again', WPML_SLUG ) ?></a>
		</span>
	</div>
<?php else if ( 'missing-archive' == $notice ) : ?>

	<div class="update-nag">
		<?php _e( 'WPMovieLibrary couldn\'t find an archive page; this page is required to provide archives of your collections, genres and actors.', WPML_SLUG ) ?><br /><br />
		<span style="float:right">
			<a class="button-primary" href="<?php echo wp_nonce_url( admin_url( '/admin.php?page=wpmovielibrary&amp;wpml_set_archive_page=1' ), 'wpml-set-archive-page', '_nonce' ) ?>"><?php _e( 'Create an archive page', WPML_SLUG ) ?></a>
		</span>
	</div>
<?php endif; ?>
