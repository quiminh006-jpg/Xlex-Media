<?php
get_header();
?>
<div class="Body">
    <div class="Main Container">

        <div class="TpRwCont ">
            <main>
                <style>
                    p {
                        color: #8b8b8b;
                        font-size: 15px;
                    }
                </style>
                <?php
                while ( have_posts() ) : the_post();
                    ?>

                    <div class="group-film">
                        <h2><?php the_title(); ?>
                        </h2>
                        <div class="row group-film-small">
                            <?php  the_content(); ?>
                        </div>

                    </div>


                <?php
                endwhile;
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
