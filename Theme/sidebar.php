                <div id="right-sidebar"> <!-- START RIGHT SIDEBAR -->
                    
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
                    <ul>                    
                    <?php wp_list_categories( array('title_li' => '')); ?>
                    </ul>
                    
                    <?php endif; ?>                    
                    
                </div> <!-- END RIGHT SIDEBAR -->