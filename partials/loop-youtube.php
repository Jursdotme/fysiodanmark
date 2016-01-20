<?php if (have_posts()):


	while (have_posts()) : the_post(); ?>

	<?php $url = get_field('video_url');
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    $youtube_id = $my_array_of_vars['v'];
    // Output: C4kxS1ksqtw
	 ?>

	 <button class="md-trigger" data-modal="modal-<?php echo $youtube_id ?>">
     <div class="video-thumbnail" style="background-image:url('http://img.youtube.com/vi/<?php echo $youtube_id ?>/hqdefault.jpg');"></div>
     <h3><?php the_title(); ?></h3>
     <p>
       <?php the_field('beskrivelse'); ?>
     </p>
   </button>

<?php endwhile; ?>

<?php while (have_posts()) : the_post(); ?>

	<?php
    $url = get_field('video_url');
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    $youtube_id = $my_array_of_vars['v'];
    // Output: C4kxS1ksqtw
    ?>

    <div class="md-modal md-effect-1" id="modal-<?php echo $youtube_id ?>">
			<div class="md-content">
      <h3><?php the_title(); ?></h3>
      <div class="responsive-video">
        <iframe width="1280" height="720" src="//www.youtube.com/embed/<?php echo $youtube_id ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <button class="md-close button">Luk</button>
		</div>
    </div>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'secondthought' ); ?></h2>
	</article>

<?php endif; ?>
