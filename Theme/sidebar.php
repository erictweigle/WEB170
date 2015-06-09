                <div id="right-sidebar"> <!-- START RIGHT SIDEBAR -->

                    <!-- BEGIN SUBNAVIGATION -->

                    <div id="sidebar-subnav">
                    
                        <!--<div id="sidebar-contact">
                            <h3>Contact</h3>
                            <p>Hi there, you should give me jobs and money. I want all of your money please.</p>
                            <a href="contact.php">Contact Danielle &raquo;</a>
                        </div>
                        <div id="sidebar-resume">
                            <h3>Resume</h3>
                            <p>Hi there, are you wondering if you should give me all your money? Here's my resume!</p>
                            <a href="images/resume.pdf">View Resume &raquo;</a>
                            <br />
                            <a href="images/resume.pdf">Download Resume &raquo;</a>
                        </div>-->
                        
                        <?php if (is_page()) : ?>
                        
                        <h2><?php echo get_the_title($post->post_parent); //get the gateway page title ?></h2>
                        
                        <ul>
                        <?php
                        if ($post->post_parent) {
                            wp_list_pages( array( 'child_of' => $post->post_parent, 'title_li' => '', ));
                        } else {
                            wp_list_pages( array( 'child_of' => $post->ID, 'title_li' => '', ));
                        }
                        ?>
                        </ul>
                        
                        <?php endif; ?>
                        <?php if (!(is_page())) : ?>
                        
                        <h2>Blog</h2>
                        <ul><?php wp_list_categories( array('title_li' => '')); ?></ul>
                        
                        <?php endif; ?>

                    </div>
                    <!-- END SUBNAVIGATION -->

                    <!-- BEGIN QUOTE -->
                    <div id="sidebar-quote">

                    <?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
                    <blockquote><?php echo get_post_meta($post->ID, 'Quote', true) ?></blockquote>
                    <?php endif; ?>

                    </div>
                    <!-- END QUOTE -->
                    
                    <!-- BEGIN DYNAMIC SIDEBAR -->
                    
                    <?php dynamic_sidebar(1); ?>
                    
                    <!-- END DYNAMIC SIDEBAR -->


                </div> <!-- END RIGHT SIDEBAR -->