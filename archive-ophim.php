<?php
get_header();
?>
<div class="Body">
    <div class="Main Container">
    </div>
    <div class="Main Container">
        <div class="TpRwCont ">
            <main>
                <section>
                    <div class="Top AAIco-movie_filter"><h2 class="Title">Tất cả phim</h2></div>
                    <?php if (!have_posts()) { ?>
                        <p class="comment-notes">
                            <span id="email-notes">Thông báo!</span>
                            <span class="required-field-message">Không có nội dung cho mục này. </span>
                        </p>
                    <?php } ?>
                    <ul class="MovieList Rows AX A04 B03 C20 D03 E20 Alt">
                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post(); ?>
                                <?php include THEMETEMPLADE . '/section/section_thumb_item.php' ?>
                            <?php }
                            wp_reset_postdata();
                        } ?>
                    </ul>
                    <?php ophim_pagination(); ?>
                </section>
            </main>
            <?php get_sidebar('ophim'); ?>
        </div>
    </div>
</div>
<?php
//get_sidebar('ophim');
get_footer();
?>
