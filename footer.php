

</div>
<?php
if ( is_active_sidebar('widget-footer') ) {
    dynamic_sidebar( 'widget-footer' );
} else {
    _e('This is widget footer. Go to Appearance -> Widgets to add some widgets.', 'ophim');
}
?>
</body>
<link rel='stylesheet' id='font-awesome-public_css-css'
      href='<?= get_template_directory_uri() ?>/assets/css/font-awesome.css?ver=1.0.0'
type='text/css' media='all'/>
<link rel='stylesheet' id='material-public-css-css'
      href='<?= get_template_directory_uri() ?>/assets/css/material.css?ver=1.0.0'
type='text/css' media='all'/>
<link rel='stylesheet' id='font-source-sans-pro-public-css-css'
      href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C600%2C700&#038;ver=1.0.0'
      type='text/css' media='all'/>
<script type="text/javascript"
        src='<?= get_template_directory_uri() ?>/assets/js/owl.carousel.min.js?ver=1.0.0'
id='funciones_public_carousel-js'></script>

<script type="text/javascript" id='funciones_public_sol-js-extra'>
    var toroflixPublic = {"url":"/","nonce":"7a0fde296e","trailer":"","noItemsAvailable":"No entries found","selectAll":"Select all","selectNone":"Select none","searchplaceholder":"Click here to search","loadingData":"Still loading data...","viewmore":"View more","id":"","type":"","report_text_reportForm":"Report Form","report_text_message":"Message","report_text_send":"SEND","report_text_has_send":"the report has been sent","playerAutomaticSlider":"1"};
</script>

<script type="text/javascript"
        src='<?= get_template_directory_uri() ?>/assets/js/sol.js?ver=1.0.0'
id='funciones_public_sol-js'></script>
<script type="text/javascript"
        src='<?= get_template_directory_uri() ?>/assets/js/functions.js?ver=1.0.0'
id='funciones_public_functions-js'></script>
<?php wp_footer(); ?>
</html>