<?php if (have_posts()): while (have_posts()) : the_post();

	$product_image = get_field('product_image');
	$product_thumbs = get_field('product_thumbs');
	echo '<div class="product">';
		echo '<a class="img fancybox" href="'. $product_image['sizes']['large'] .'" title="' . get_the_title() . '"  rel="product_' . $post->ID . '">';
			if ($product_image) {
				echo '<img src="'. $product_image['sizes']['thumbnail'].'">';
			}
			echo '<i class="zoom fa fa-search-plus"></i>';
		echo '</a>';

		if ($product_thumbs) {
			foreach( $product_thumbs as $thumb ):
				echo '<a class="fancybox" href="'. $thumb['sizes']['large'].'" title="' . get_the_title() . '" rel="product_' . $post->ID . '" style="display:none;"><img src="'. $thumb['sizes']['product-thumb'].'"></a>';
			endforeach;
		}
		echo '<div class="text">';
			echo '<h3 class="font-primary">' . get_the_title() . '</h3>';
			echo '<div class="description">' . get_field('product_description') . '</div>';
			echo '<div class="price">Pris ' . number_format(get_field('product_price'),2,',','.') . ' kr.</div>';
		echo '</div>';
	echo '</div>';

endwhile; ?>

<?php else: ?>

<?php endif; ?>
