 
 <?php get_header(); ?> 

 <div class="wrapper">
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

    <article class="post" id="post-<?php the_ID(); ?>">

            <h2 role="heading"><?php the_title(); ?></h2>
            <?php the_thumbnail();?>
            <time date="<?php  the_time('Y-m-d'); ?>"><?php echo get_the_date(Y-m-d); ?></time>
            <div class="post-content">
                <?php the_content(); ?>
            </div>


    </article>
<?php endwhile; ?>
<?php endif; ?>
</div>

 <?php get_footer(); ?> 