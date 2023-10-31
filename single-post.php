<?php get_header(); ?>
    <div id="primary" class="content-area">
        <div class=""></div>
        <main id="main" class="site-main">
            <?php get_template_part( 'template-parts/heros/hero', 'archive' ); ?>
            <h1 class="display-3 mt-5 text-center"><u></u></h1>
            <?php if ( have_posts() ) : ?>
                <div class="p-5 container-fluid">
                    <div class="row">
                        <div class="posts col-sm-8">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="my-5">
                                    <div class=" jumbotron border border-secondary">
                                        <h1><?php the_title(); ?></h1>
                                        <div class="row">
                                            <div class="col text-left">
                                                <h3><?php the_time('F j, Y');?></h3>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col">
                                                <p><?php the_content(); ?> </p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                 <p><?php the_tags();?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-left">
                                                <?php previous_post_link( '%link','Previous Post' ); ?>
                                            </div>
                                            <div class="col text-right">
                                                <?php next_post_link( '%link','Next Post' ) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php //the_posts_navigation(); ?>
                            <?php if (comments_open()){
                                comments_template();
                            } ?>
                        </div>
                        <div class="col-sm-3"><?php get_sidebar(); ?></div>
                    </div>
                         <br>
                        <p><strong>Notice:</strong><em>
                            The contents of this Blog were developed under a grant from the National Institute on Disability, Independent Living, and Rehabilitation Research (NIDILRR grant number 90RTEM0004). NIDILRR is a Center within the Administration for Community Living (ACL), Department of Health and Human Services (HHS). The contents of this Blog do not necessarily represent the policy of NIDILRR, ACL, or HHS, and you should not assume endorsement by the Federal Government.
                        </em></p>
                </div>
            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
        </main>
    </div>
<?php get_footer(); ?>


