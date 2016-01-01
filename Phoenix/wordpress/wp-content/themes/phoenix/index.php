<?php get_header()?>
<section>
	<div id="slideshow-container">
		<div id="slideshow-frame">
			<div class="active-slide">
				<?php while(have_posts()): the_post(); ?>
					<div class="slide">
					<a class="title" href="<?php the_permalink();?>">
					<?php 
						if ( has_post_thumbnail() ) {
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
							the_post_thumbnail( 'thumbnail' );
							
						}
					?>
					</a>
					</div>
				<?php endwhile;?>
			</div>
			
			<div class="strip">
			<?php while(have_posts()): the_post(); ?>
				<div class="slide">
				<?php 
					if ( has_post_thumbnail() ) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
						the_post_thumbnail( 'thumbnail' );
					}
				?>
				</div>
			<?php endwhile;?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="slideshow-container" class="mobile">
		<div id="slideshow-frame">
			<div class="active-slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
			<div class="strip">
			<?php while(have_posts()): the_post(); ?>
				<div class="slide">
				<a class="title" href="<?php the_permalink();?>">
				<?php 
					if ( has_post_thumbnail() ) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
						the_post_thumbnail( 'thumbnail' );
					}
				?>
				</a>
				</div>
			<?php endwhile;?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="posts">
		<h1>recent posts</h1>
		<?php $count = 0;?>
		<?php while(have_posts()): the_post(); ?>
			<? php $count++;
				$alt = 'post ' . $count;
				$alt .= ( $count % 2 ) ? 'left' : 'right';
			?>

			<div <?php post_class($alt);?>>
				<a class="title" href="<?php the_permalink();?>"><?php the_title()?></a>
				By <?php echo get_the_author_link();?>
				<?php 
					if ( has_post_thumbnail() ) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
						echo '<div class="img-container"><a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
						the_post_thumbnail( 'thumbnail' );
						echo '</a></div>';
					}
				?>
				<?php the_content();?>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			
		<?php endwhile;?>
	</div>
</section>
<?php get_footer()?>