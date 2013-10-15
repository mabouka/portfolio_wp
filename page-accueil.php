
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

            <?php the_post_thumbnail('slide'); ?>    
           



            <section id="presentation">
                <div class="wrapper">
                    <h2>Je suis web designer</h2>

                    <p>Je suis web designer et et je suis étudiant en infographie à la Haute École de la Province de Liège. Si vous désirez acquérir votre propre site web, vous êtes à la bonne adresse. Je maitrise différentes technologies telles que PHP, Javascript HTML 5 et CSS. L’ergonomie est aussi au centre de mon travail, le confort des utilisateurs est une de mes priorités. Je m'intéresses aussi de près à la photographie, la typographie et le graphisme.</p>
                </div>
            </section>


                
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

    
                       
                        <a href="<?php the_permalink(); ?>" class="<?php echo 'fig'.$idg;?>">
                            <figure >
                                <?php the_post_thumbnail('accueil_travaux'); ?>
                                <figcaption><?php the_title(); ?></figcaption>
                            </figure>
                        </a>

                        
                    <?php endwhile; ?>
                     </section>
                    <?php endif; ?>


					



<!--
                    <a href="#" class="fig1">
                    <figure >
                        <img src="img/renova.png" alt="Logotype de RGBA" />
                        <figcaption>Renova 9</figcaption>
                    </figure>
                    </a>

-->   

                    

                    
                    
           
            <section id="news">
                <div class="wrapper">
                <h2>News</h2>
                   	<?php 
					$loop = new WP_Query( array(  'posts_per_page' => 4 ) );
					while ( $loop->have_posts() ) : $loop->the_post();
					 
					 ?>

					  	<a href="<?php the_permalink(); ?>" class="fig1">
                    	<figure >
                        <?php the_post_thumbnail('accueil_travaux'); ?>
                        <figcaption><?php the_title(); ?></figcaption>
                    </figure>
                    </a>

					<?php

					endwhile;

					?>
            </section>
        



        <footer id="footer">
            

           
                <div class="wrapper">

                    <ul>
                        <li><a href="https://www.facebook.com/maximelefebvreweb">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="be.linkedin.com/in/maximelefebvre/">LinkedIn</a></li>
                        <li><a href="#">Dribble </a></li>
                    </ul>
                    
                    


                    <div id="hcard-Maxime-Lefèbvre" class="vcard" itemtype="http://schema.org/Person">
                         <span class="fn" itemprop="name">Maxime Lefèbvre</span>
                         
                         <div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <span class="street-address" itemprop="streetAddress">rue hocheporte 18</span>
                            <span class="postal-code" itemprop="postalCode">4000</span>
                            <span class="locality"    itemprop="addressLocality">Liège</span>
                            <span class="country"     itemprop="addressCountry">Belgique</span>
                         </div>
                         <a class="email" itemprop="email" href="mailto:contact@maxime-lefebvre.be">contact@maxime-lefebvre.be</a>
                        
                    </div>


            

           
        </footer>
        

<?php get_footer(); ?>