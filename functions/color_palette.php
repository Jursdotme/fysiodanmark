<?php
function siteorigin_universal_color_pallet() {
?>
    <script>
        jQuery(document).ready(function($){
            $.wp.wpColorPicker.prototype.options = {
                width: 242,
                palettes: [
                  '#71bf48',
                  '#5a9938',
                  '#353535',
                  '#6c6b69',
                  '#f4f4f4',
                  '#ffffff',
                  '#3b5998',
                ]
            };
        });

    </script>
<?php
}
add_action('admin_print_footer_scripts', 'siteorigin_universal_color_pallet');
add_action('customize_controls_print_footer_scripts', 'siteorigin_universal_color_pallet');
