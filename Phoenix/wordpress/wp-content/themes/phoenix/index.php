<?php get_header()?>
<section>
	<div id="slideshow-container">
		<div id="slideshow-frame">
			<div class="active-slide">
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
			</div>
			
			<div class="strip">
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="slideshow-container" class="mobile">
		<div id="slideshow-frame">
			<div class="active-slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
			<div class="strip">
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
				<div class="slide"><img src="<?php bloginfo('template_directory'); ?>/img/slideshow_img.jpg"></div>
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
				<a href="<?php the_permalink();?>"><?php the_title()?></a>
				By <?php echo get_the_author_link();?>
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} 
				<?php the_content();?>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			
		<?php endwhile;?>
	</div>
</section>
<?php get_footer()?>