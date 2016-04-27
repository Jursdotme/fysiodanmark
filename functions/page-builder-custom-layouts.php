<?php

require_once( 'page-builder-layouts/forside-hovedside-layout.php' ); // Build navigation Walkers
add_filter('siteorigin_panels_prebuilt_layouts','forside_hovedside_layout');

require_once( 'page-builder-layouts/klinik-forside-layout.php' ); // Build navigation Walkers
add_filter('siteorigin_panels_prebuilt_layouts','klinik_forside_layout');

require_once( 'page-builder-layouts/medarbejder-oversigt-layout.php' ); // Build navigation Walkers
add_filter('siteorigin_panels_prebuilt_layouts','medarbejder_oversigt_layout');

require_once( 'page-builder-layouts/klinik-2013-layout.php' ); // Build navigation Walkers
add_filter('siteorigin_panels_prebuilt_layouts','klinik_2013_layout');

require_once( 'page-builder-layouts/produktoversigt-layout.php' ); // Build navigation Walkers
add_filter('siteorigin_panels_prebuilt_layouts','produktoversigt_layout');
