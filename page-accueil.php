
<?php get_header(); ?>
        <div id="root">
            <header>
                <div class="wrapper">
                    <a href="index.html"><h1><?php bloginfo('name'); ?></h1></a>
                    <nav>
                        
                               
                            
                            <?php wp_nav_menu(array('menu'=>'Header Menu')); ?>
                        
                    </nav>
                </div>
            </header>
            <section id="slide">
                
            </section>



            <section id="presentation">
                <div class="wrapper">
                    <h2>Je suis web designer</h2>

                    <p>Je suis web designer et et je suis étudiant en infographie à la Haute École de la Province de Liège. Si vous désirez acquérir votre propre site web, vous êtes à la bonne adresse. Je maitrise différentes technologies telles que PHP, Javascript HTML 5 et CSS. L’ergonomie est aussi au centre de mon travail, le confort des utilisateurs est une de mes priorités. Je m'intéresses aussi de près à la photographie, la typographie et le graphisme.</p>
                </div>
            </section>

            <section id="works">

               
                <div class="wrapper">


                    <h2>Mes derniers travaux</h2>


					<?php 
					$loop = new WP_Query( array( 'post_type' => 'travaux', 'posts_per_page' => 4 ) );
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

<!--
                    <a href="#" class="fig1">
                    <figure >
                        <img src="img/renova.png" alt="Logotype de RGBA" />
                        <figcaption>Renova 9</figcaption>
                    </figure>
                    </a>

                    <a href="#" class="fig2">
                    <figure >
                        <img src="img/dewinter.png" alt="Logotype de De Winter" />
                        <figcaption>De Winter</figcaption>
                    </figure>
                    </a>

                    <a href="#" class="fig3">
                    <figure >
                        <img src="img/lara.png" alt="Site web de la photographe Lara Gasparotto" />
                        <figcaption>Lara Gasparotto</figcaption>
                    </figure>
                    </a>

                    <a href="#" class="fig4">
                    <figure >
                        <img src="img/ecrimed.png" alt="Ecrimed - Formation Refonte du logo, Design du site web" />
                        <figcaption>Ecrimed formation</figcaption>
                    </figure>  
                    </a>

                    <a href="#" class="fig5">         
                    <figure >
                        <img src="img/cleaner.jpg" alt="Projet scolaire Cleaner" />
                        <figcaption>Cleaner</figcaption>
                    </figure>
                    </a>                

                    <a href="#" class="fig6">
                    <figure >
                        <img src="img/cassebrique.png" alt="Jeu  casse brique réalisé grace à Canvas" />
                        <figcaption>Casse brique</figcaption>
                    </figure>  
                    </a>   

                    <a href="#" class="fig7">
                    <figure >
                        <img src="img/Pendu.png" alt="Jeu WebApp Pendu" />
                        <figcaption>Pendu</figcaption>
                    </figure>
                    </a>
-->

                     

                    

                    
                    
            </section>
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
        
            <div id="social">
                <div class="wrapper">
                    <h2>Merci d'avoir prit le temps de visiter mon site.</h2>
                    <p>Si il vous a plu, n'hésitez pas à me suivre sur les reseaux sociaux</p>
                
                    <ul>
                        <li><a href="https://www.facebook.com/maximelefebvreweb">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="be.linkedin.com/in/maximelefebvre/">LinkedIn</a></li>
                        <li><a href="#">Dribble </a></li>
                    </ul>
                </div>
            </div>
            <div id="root_footer"> </div>
        </div>      
        


        <footer id="footer">
            

           
                <div class="wrapper">
                    <ul>
                        <li>18, rue hocheporte 4000 Liège</li>
                        <li>contact@maxime-lefebvre.be</li>
                        <li>+32(0)499 47 10 95</li>
                    </ul>
                </div>
            

           
        </footer>
        

<?php get_footer(); ?>