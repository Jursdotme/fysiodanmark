<?php

$id = $instance['background_image'];
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$image_attributes = wp_get_attachment_image_src( $id, $size );
$image_url = $image_attributes[0];


$post_selector_pseudo_query = $instance['some_posts'];
// Process the post selector pseudo query.
$processed_query = siteorigin_widget_post_selector_process_query( $post_selector_pseudo_query );

// Use the processed post selector query to find posts.
$query_result = new WP_Query( $processed_query );

// Loop through the posts and do something with them.
if($query_result->have_posts()) : ?>
	<div class="link-box">
		<div class="link-box-header" style="background-image: url(' <?php echo $image_url; ?>');">
			<h3><?php echo $instance['overskrift']; ?></h3>
		</div>
		<ul>
        <?php while($query_result->have_posts()) : $query_result->the_post(); ?>
					<li>
						<a href="<?php the_permalink() ?>"><i class="fa fa-angle-double-right"></i> <?php the_title() ?></a>
					</li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
</div>

<?php endif; ?>
