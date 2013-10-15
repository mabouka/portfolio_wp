<?php get_header(); ?>
            <header>
                <div class="wrapper">
                    <a href="index.html"><h1><?php bloginfo('name'); ?></h1></a>
                    <nav>
                        
                          <?php wp_nav_menu( array( 'items_wrap' => '%3$s' ) ); ?>  
                    </nav>
                </div>
            </header>    
Page Portfolio
 <?php get_footer(); ?> 