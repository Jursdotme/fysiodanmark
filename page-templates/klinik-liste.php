<?php

/* Template Name: Klinik Liste */


get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php

        // WP_Query arguments
        $args = array (
        'post_type'              => array( 'imm_members' ),
        'posts_per_page'         => '-1',
        'order'                  => 'ASC',
        'orderby'                => 'title',
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ) {
          echo "<table><thead><tr>";
          echo "<th>Kliniknavn</th>";
          echo "<th>Adresse</th>";
          echo "<th>Postnr</th>";
          echo "<th>By</th>";
          echo "<th>Hjemmesideadresse</th>";
          echo "</tr></thead><tbody>";
        	while ( $query->have_posts() ) {
            $query->the_post();

            $member_address  = get_field('member_address');
      			$member_zip      = get_field('member_zip');
      			$member_city     = get_field('member_city');
      			$member_location = get_field('member_location');
      			$member_image		 = get_field('member_image');
      			$member_contact  = get_field('member_contact');
      			$member_phone    = get_field('member_phone');
      			$member_fax      = get_field('member_fax');
      			$member_email    = get_field('member_email');
      			$member_website  = get_field('member_website');
            ?>

              <tr>
                <td><?php the_title();?></td>
                <td><?php echo $member_address; ?></td>
                <td><?php echo $member_zip;?></td>
                <td><?php echo $member_city;?></td>
                <td><a href="<?php echo $member_website; ?>" target="_blank"><?php echo rtrim(substr($member_website, 7), '/'); ?></a></td>
              </tr>

        	<?php }
          echo "</tbody></table>";
        }

        // Restore original Post Data
        wp_reset_postdata(); ?>

			</article>
			<!-- /article -->


		</section>
		<!-- /section -->


	</main>

<?php get_footer(); ?>
