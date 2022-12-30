<div class="flex justify-center items-center w-full py-20 px-10 sm:flex-col">
  <div class="h-[400px] max-w-[400px] flex justify-center mr-5 md:h-auto md:mr-0 w-full">
    <img src="<?php echo(get_field('image_header')['url']); ?>" class="max-w-[400px] h-full w-full object-contain md:max-w-[340px]" />
  </div>
  <div class="flex flex-col justify-center items-center">
    <h1 class="text-style-desktop-title-h-1-60-px text-center text-greywhite"><?php echo(get_field('titre_header')); ?></h1>
    <div class="flex mt-2.5">
      <span class="border-solid border-t-[0.5px] border-orangedark w-[60px] mr-10"></span>
      <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
    </div>
    <h2 class="text-greywhite text-style-desktop-title-h-2-35-px mt-5 text-center"><?php echo(get_field('texte_header')); ?></h2>
    <a href="<?php echo get_home_url(); ?>/contact">
      <button type="button" class="text-greywhite bg-orangedark rounded-lg px-5 py-2.5 mt-10 uppercase text-style-desktop-button-13-px">Nous contacter</button>
    </a>
  </div>
</div>
</header>
<div class="py-10 mx-auto-120px mx-auto-80px mx-auto-40px mx-auto-20px pt-5">
    <h3 class="text-style-desktop-title-h-2-50-px text-bluesuperdark text-center"><?php echo(get_field('titre_competence')); ?></h3>
    <div class="flex my-5 justify-center items-center">
      <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
      <span class="icon-library mx-5"></span>
      <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
    </div>

    <section>
      <div class="container px-6 py-10 mx-auto">
        <h3 class="text-style-desktop-title-h-2-35-px text-bluesuperdark text-center"><?php echo(get_field('titre_particulier')); ?></h3>
          <div class="grid grid-cols-1 gap-8 mt-8 xsm:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">
            <?php $args = array(
            'post_type' => 'particulier',
            'post_status' => 'publish',
            );
            $products_loop = new WP_Query( $args );
            if ( $products_loop->have_posts() ) : while ( $products_loop->have_posts() ) : $products_loop->the_post();?>
              <div class="">
                <div class="relative">
                  <a href="<?php echo get_home_url(); ?>/particuliers#section-<?php echo $post->post_name ?>">
                    <img class="object-cover w-full h-56 rounded-lg " src="<?php echo get_field('image_de_presentation')['url'] ?>" alt="">
                    <div class="absolute top-0 w-full h-56 rounded-lg  hover:gradient_blue">
                    <h3 class="text-orangedark text-style-desktop-title-h-5 text-center font-bold mt-[90px] text-lg"><?php the_title(); ?></h3>
                  </div>
                  </a>
                </div>
            </div>
            <?php endwhile;?>
            <?php wp_reset_postdata(); endif;?>
          </div>
      </div>
    </section>

    <section>
      <div class="container px-6 py-10 mx-auto">
        <h3 class="text-style-desktop-title-h-2-35-px text-bluesuperdark text-center"><?php echo(get_field('titre_professionnel')); ?></h3>
          <div class="grid grid-cols-1 gap-8 mt-8 xsm:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">
            <?php $args = array(
            'post_type' => 'professionnel',
            'post_status' => 'publish',
            );
            $products_loop = new WP_Query( $args );
            if ( $products_loop->have_posts() ) : while ( $products_loop->have_posts() ) : $products_loop->the_post();?>
            <div class="">
              <div class="relative">
                <a href="<?php echo get_home_url(); ?>/professionnels#section-<?php echo $post->post_name ?>">
                  <img class="object-cover w-full h-56 rounded-lg" src="<?php echo get_field('image_de_presentation')['url'] ?>" alt="">
                  <div class="absolute top-0 w-full h-56 rounded-lg hover:gradient_blue">
                    <h3 class="text-orangedark text-style-desktop-title-h-5 text-center font-bold mt-[90px] text-lg"><?php the_title(); ?></h3>
                  </div>
                </a>
              </div>
            </div>
            <?php endwhile;?>
            <?php wp_reset_postdata(); endif;?>
          </div>
      </div>
    </section>


  </div>
  </div>

 


    
  </div>
