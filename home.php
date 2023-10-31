<?php get_header(); ?>
    <div id="primary" class="content-area">
        <div class=""></div>
        <main id="main" class="site-main">
            <?php get_template_part( 'template-parts/heros/hero', 'archive' ); ?>
            <h1 class="display-3 mt-5 text-center"><u></u></h1>
            <?php if ( have_posts() ) : ?>
                <div class="container-fluid p-5">
                    <div class="row">
                        <div class="posts col-sm-8">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article class="search-result mb-5 p-4 border border-secondary jumbotron" id="post-<?php the_ID(); ?>">
                                    <header class="entry-header">
                                        <div class=""></div>
                                        <?php the_title( sprintf( '<h2 class="entry-title mb-2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                        <?php if ( 'post' === get_post_type() ) : ?>
                                            <div class="entry-meta">
                                                <?php
                                                wordpress_boilerplate_posted_on();
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </header>
                                    <div class="p-0 p-md-3 p-lg-5">
                                        <div><?php wordpress_boilerplate_post_thumbnail(); ?>
                                            
                                        </div>
                                    </div>

                                    <div class="entry-summary my-0">
                                        <p class="h4">
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <a class="btn btn-text pl-0" href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
                                            Learn More <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                            <?php //the_posts_navigation(); ?>
                            <div class="pagination"><?php the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( 'More Recent', 'textdomain' ),
                                'next_text' => __( 'Less Recent', 'textdomain' ),
                            ) ); ?></div>
                        </div>
                        <div class="col-sm-4"><?php get_sidebar(); ?></div>
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

