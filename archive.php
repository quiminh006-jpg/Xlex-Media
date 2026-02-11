<?php
get_header();
?>
<div class="Body">
    <div class="Main Container">

        <div class="TpRwCont ">
            <main>
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="TpRwCont" style="margin-bottom: 20px">
                            <div class="col-md-12 blogShort">

                                <a href="<?php the_permalink(); ?>"><img style="width: 150px;margin-right: 15px" src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                                                         alt="<?php the_title(); ?>" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                                <br>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <article>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p></article>
                                <a class="btn btn-blog pull-right marginBottom10" href="<?php the_permalink(); ?>">Xem thêm</a>
                            </div>

                        </div>
                    <?php }
                    wp_reset_postdata();
                } ?>
                <?php ophim_pagination(); ?>
            </main>
            <?php get_sidebar('ophim'); ?>
        </div>
    </div>
</div>
<?php
//get_sidebar('ophim');
get_footer();
?>
