<?php
/*
 * Template Name: Page professionnels
 * Template Post Type: page
 */
get_header(); ?>

    <div class="flex justify-center items-center py-20 px-10 sm:flex-col mx-auto-120px mx-auto-80px mx-auto-40px mx-auto-20px">
        <div class="h-[400px] max-w-[400px] flex justify-center mr-5 md:h-auto md:mr-0 w-full">
            <img src="<?php echo(get_field('image_header')['url']); ?>" class="rounded-full max-w-[400px] h-full w-full object-cover md:max-w-[340px]" />
        </div>
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-style-desktop-title-h-1-60-px text-center text-greywhite"><?php echo(the_title()); ?></h1>
            <div class="flex mt-2.5">
            <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
            <span class="icon-quill text-white mx-5"></span>
            <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
            </div>
            <h2 class="text-greywhite text-style-desktop-title-h-2-35-px mt-5 text-center"><?php echo('SRP Détective est présent '); ?><br><?php echo('pour tout professionnels '); ?> </h2>
            <a href="<?php echo get_home_url(); ?>/contact">
            <button type="button" class="text-greywhite bg-orangedark rounded-lg px-5 py-2.5 mt-10 uppercase text-style-desktop-button-13-px">Nous contacter</button>
            </a>
        </div>
    </div>
</header>

    <div class='flex mx-auto-120px mx-auto-80px mx-auto-40px mx-auto-20px'>
    <div class="nav md:hidden">
        <nav class="services-nav sticky top-52 left-auto self-start mt-[120px] flex flex-col w-[200px]">
            <?php $args = array(
            'post_type' => 'professionnel',
            'post_status' => 'publish',
            );
            $products_loop = new WP_Query( $args );
            if ( $products_loop->have_posts() ) : while ( $products_loop->have_posts() ) : $products_loop->the_post();?>
            <a href="#section-<?php echo $post->post_name ?>" class="content-menu-item" data-anchor="section-<?php echo $post->post_name ?>">
            <?php echo the_title(); ?>
            </a>
            <?php endwhile;?>
            <?php wp_reset_postdata(); endif;?>
        </nav>
    </div>
    
    <div class="py-10 pt-5 ml-20 md:ml-0">
        <h3 class="text-style-desktop-title-h-2-50-px text-bluesuperdark text-center mt-20">bla bla </h3>
        <div class="flex my-5 justify-center items-center">
        <span class="border-solid border-t-[2px] border-orangedark w-[120px] my-5"></span>
    </div>
        <div class="my-5 justify-center items-center">
        <?php $args = array(
        'post_type' => 'professionnel',
        'post_status' => 'publish',
        );
        $products_loop = new WP_Query( $args );
        if ( $products_loop->have_posts() ) : while ( $products_loop->have_posts() ) : $products_loop->the_post();?>
        <div class="my-5 justify-center items-center">
        <div class="flex my-5 justify-center items-center">
            <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
            <span class="text-style-desktop-title-h-3 text-bluesuperdark text-center mx-5 list-block my-5" id="section-<?php echo $post->post_name ?>"><?php the_title(); ?></span>
            <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
        </div>
            <div class="">
                <img src="<?php echo get_field('image_de_presentation')['url'] ?>" class="max-h-[400px] w-full justify-center items-center object-cover md:max-h-[340px] my-8" />
                <p class="text-style-desktop-text-22-px-light text-bluesuperdark text-center my-8">
                <?php echo get_field('texte_du_domaine') ?>
                </p>
            </div>
        </div>
        <?php endwhile;?>
        <?php wp_reset_postdata(); endif;?>
    </div>   
</div> 

<?php get_footer(); ?>