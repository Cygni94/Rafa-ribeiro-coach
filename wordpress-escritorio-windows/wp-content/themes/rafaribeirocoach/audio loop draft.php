<span class="audios__item--header">
    <span class="audios__item--btn">
        <img class="play-btn" src="<?php bloginfo('template_url');?>/assets/img/icon/play.svg" alt="">
    </span>
    <span class="audios__item--title">papo momento da virada </span>
    <span class="separator">- </span>
    <span class="audios__item--guest">
        <?php the_title();?>
    </span>
</span>
<span class="audios__item--length">00:00</span>











<?php 
			$args = array( 'post_type' => 'audio' );
			$loop = new WP_Query( $args );
			if( $loop->have_posts() ) {?>
<div class="audios__list row">
	<div class=" offset-md-2 col-md-8 offset-0 col">
		<div class="audios__list--header">
			<h2>papo momento da virada</h2>
			<h5>Rafa Ribeiro</h5>
		</div>
		<?php while( $loop->have_posts() ) {
					$loop->the_post();?>


		<hr>
		<div class="audios__item">
			<div class="audios__item--wrapper">
				<span class="audios__item--header">
					<span class="audios__item--btn">
						<img class="play-btn" src="<?php bloginfo('template_url');?>/assets/img/icon/play.svg" alt="">
					</span>
					<span class="audios__item--title">papo momento da virada </span>
					<span class="separator">- </span>
					<span class="audios__item--guest">
						<?php the_title();?>
					</span>
				</span>
				<span class="audios__item--length">00:00</span>
			</div>
		</div>
	</div>
</div>
</div>
<?php }?>
</div>
<?php	}?>