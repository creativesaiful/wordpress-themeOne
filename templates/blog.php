<?php if (have_posts()):;

                    while (have_posts()) : the_post();
                ?>
                        <div class="blog_area">
                          
                                <div class="blog_post_img">
                                    <a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                                </div>
                                <div class="blog_post_content">
                                    <h2> <a href=" <?php the_permalink() ?> "><?php the_title(); ?></a> </h2>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            
                        </div>

                <?php endwhile;
                else:
                    _e('<div class="alert alert-danger">No posts found</div>');

                endif; ?>