<?php if ( defined( 'DOING_AJAX' ) ) : ?>
	<div class="no_job_listings_found"><?php _e( 'There are no listings matching your search.', 'specialty' ); ?></div>
<?php else : ?>
	<p class="no_job_listings_found"><?php _e( 'There are currently no vacancies.', 'specialty' ); ?></p>
<?php endif; ?>