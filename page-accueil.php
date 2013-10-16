
<?php get_header(); ?>
    
            <div id="root">
            <header>
                <div class="wrapper">
                    <a href="index.html"><h1><?php bloginfo('name'); ?></h1></a>
                    <nav>
                        
                          <?php wp_nav_menu( array( 'items_wrap' => '%3$s' ) ); ?>  
                    </nav>
                </div>
            </header>    
            <div class="wrapper">
            <?php the_post_thumbnail('slide'); ?>    
            </div>

            <!--

            <section id="presentation">
                <div class="wrapper">
                    <h2>Je suis web designer</h2>

                    <p>Je suis web designer et et je suis étudiant en infographie à la Haute École de la Province de Liège. Si vous désirez acquérir votre propre site web, vous êtes à la bonne adresse. Je maitrise différentes technologies telles que PHP, Javascript HTML 5 et CSS. L’ergonomie est aussi au centre de mon travail, le confort des utilisateurs est une de mes priorités. Je m'intéresses aussi de près à la photographie, la typographie et le graphisme.</p>
                </div>
            </section>
            -->

                
                <?php 
                    $loop = new WP_Query( array( 'post_type' => 'travaux', 'posts_per_page' => 4 ) );
                    $idg = 0; 
                    if( $loop->have_posts() ): ?>


            <section id="works">
                <div class="wrapper">
                    <h2>Mes derniers travaux</h2>

                    <?php 
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $idg ++;
                    ?>

    
                       
                        
                            <div class="<?php echo 'fig'.$idg;?> work">
                                <a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('accueil_travaux'); ?></a>
                                
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="button" >Voir le projet</a>
                            </div>
                        

                        
                    <?php endwhile; ?>
                     </section>
                    <?php endif; ?>
        
                    
           

           <?php 

           $loop = new WP_Query( array(  'posts_per_page' => 4 ) );
           if( $loop->have_posts() ): ?>
            <section id="news">
                <div class="wrapper">
                <h2>News</h2>
                   	<?php 
					
					while ( $loop->have_posts() ) : $loop->the_post();
					 
					 ?>

					
                    
                    <article>
                        <a href="<?php the_permalink(); ?>" class="fig1"><h3><?php the_title(); ?></h3></a>
                        <?php the_post_thumbnail('accueil_travaux'); ?>
                        <p><?php the_excerpt(); ?></p>
                        
                    </article>

					<?php endwhile;?>
            </section>
            <?php endif; ?>



        <footer id="footer">
            <div class="wrapper">
            
            

                                <?php 
                    $loop = new WP_Query( array( 'post_type' => 'social', 'posts_per_page' => 4 ) );
                     
                    if( $loop->have_posts() ): ?>
                    

                   <ul  id="social" class="social" itemref="contact"  itemscope  itemtype="http://schema.org/Person"> 
                    <?php 
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $idg ++;
                    ?>

    
                       
                        <li><a href="<?php the_field('url');  ?>" itemprop="url" class="ir <?php the_field('reseaux_sociaux');  ?>" ><?php
                        

                            //var_dump(get_field( "url" ) );
                            $nomduresau = get_field( "reseaux_sociaux" )[0];
                           echo(get_field_object('reseaux_sociaux')['choices'][$nomduresau]);
                            
                            
                        ?></a></li>
                         
                        
                    <?php endwhile; ?>
                     </ul>
                    <?php endif; ?>
                



                    <div id="contact" class="vcard">
                         <span class="fn" itemprop="name">Maxime Lefèbvre</span>
                         
                         <div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span class="street-address" itemprop="streetAddress">rue hocheporte 18</span>
                            <span class="postal-code" itemprop="postalCode">4000</span>
                            <span class="locality"    itemprop="addressLocality">Liège</span>
                            <span class="country"     itemprop="addressCountry">Belgique</span>
                         </div>
                         <span class= "" itemprop="telephone">00(32)499 47 10 95</span>
                         <a class="email" itemprop="email" href="mailto:contact@maxime-lefebvre.be">contact@maxime-lefebvre.be</a>
                         <a class="url visuallyhidden " itemprop="url" href="http://www.maxime-lefebvre.be">Mon site web</a>   
                        
                    </div>

            


           
        </footer>
        

<?php get_footer(); ?>