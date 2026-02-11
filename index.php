<?php
get_header();
?>
<div class="Body">
    <?php if(get_option('ophim_is_ads') == 'on') { ?>
    <div class="Main Container" style="text-align: center">
        <div id=top_addd></div>
    </div>
    <?php } ?>
    <?php if ( is_active_sidebar('widget-slider-poster') ) {
        dynamic_sidebar( 'widget-slider-poster' );
    } else {
        _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
    }
    ?>


    <div class="Main Container">
        <?php if ( is_active_sidebar('widget-slider-thumb') ) {
            dynamic_sidebar( 'widget-slider-thumb' );
        } else {
            _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
        }
        ?>
        <div class="TpRwCont ">
            <main>
                <?php if ( is_active_sidebar('widget-area') ) {
                    dynamic_sidebar( 'widget-area' );
                } else {
                    _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
                }
                ?>
            </main>
            <?php get_sidebar('ophim'); ?>
        </div>
    </div>
</div>
<?php
//get_sidebar('ophim');
get_footer();
?>
