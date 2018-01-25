<?php 
			$args = array( 'post_type' => 'audio' );
			$loop = new WP_Query( $args );
			if( $loop->have_posts() ) { ?>
				<div class="audios__list row">
				<div class=" offset-md-2 col-md-8 offset-0 col">
					<div class="audios__list--header">
						<h2>papo momento da virada</h2>
						<h5>Rafa Ribeiro</h5>
					</div>
					<?php while( $loop->have_posts() ) {
					$loop->the_post(); ?>

					<div class="videos__item col-md col-12">
						<div class="videos__item--title">
							<a href="<?= the_permalink(); ?>">
								<h4>
									<?php the_title(); ?>
								</h4>
							</a>
							<div class="videos__item--frame">
								<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} 
			the_content();
			?>

							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php	} ?>