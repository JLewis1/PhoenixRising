<?php get_header()?>

<?php while(have_posts()): the_post()?>
<section>
	<div id="post-detail">
		<div class="description">
		<?php 
			if ( has_post_thumbnail() ) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
				the_post_thumbnail( 'thumbnail' );
				
			}
		?>
			<h2><?php the_title()?></h2>
			<p><?php the_content();?></p>
		</div>
	</div>
</section>

<?php endwhile;?>

<?php comments_template('', true)?>

<?php get_footer()?>