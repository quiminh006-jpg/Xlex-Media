<?php
get_header();
?>
<div class="Body">
    <?php if(get_option('ophim_is_ads') == 'on') { ?>
        <div class="Main Container" style="text-align: center">
            <div id=top_addd></div>
        </div>
    <?php } ?>
    <div class="Main Container">
        <div class="TpRwCont ">
            <main style="text-align: center">
            <h1>404</h1>
            <h1>Trang không tồn tại</h1>
            </main>
            <?php get_sidebar('ophim'); ?>
        </div>
    </div>
</div>
<?php
//get_sidebar('ophim');
get_footer();
?>
