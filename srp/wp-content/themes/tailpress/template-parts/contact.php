<?php
/*
 * Template Name: Page contact
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
            <h2 class="text-greywhite text-style-desktop-title-h-2-35-px mt-5 text-center"><?php echo('SRP Détective est présent '); ?><br><?php echo('pour toutes vos demandes '); ?> </h2>
            <a href="<?php echo get_home_url(); ?>/contact">
            <button type="button" class="text-greywhite bg-orangedark rounded-lg px-5 py-2.5 mt-10 uppercase text-style-desktop-button-13-px">Nous contacter</button>
            </a>
        </div>
    </div>
</header>
<div class="py-10 mx-auto-120px mx-auto-80px mx-auto-40px mx-auto-20px pt-5">
    <div class="flex justify-around md:flex-col-reverse">
        <div class="justify-center items-center back-contact">
            <h3 class="pt-10 px-10 text-style-desktop-title-h-2-35-px text-orangedark">Si nous discutions de votre besoin ?</h3>
            <div class="py-10 px-10">
                <p class="text-style-desktop-text-22-px-light text-bluesuperdark ">Vous avez une questions et souhaitez obtenir plus d'informations ?</p>
                <p class="text-style-desktop-text-22-px-light text-bluesuperdark py-5"><strong>Contactez-nous!</strong></p>
                <div class="flex items-center">
                    <span class="icon-phone text-bluesuperdark mr-5"></span>
                    <p class="text-style-desktop-text-22-px-light text-bluesuperdark "><?php echo(get_field('tel')); ?></p>
                </div>
                <div class="flex items-center">
                    <span class="icon-location2 text-bluesuperdark mr-5"></span>
                    <p class="text-style-desktop-text-22-px-light text-bluesuperdark "><?php echo(get_field('adresse')); ?></p>
                </div>
            </div>
        </div>
        <div class="contact text-center back-contact p-7">
            <h3 class="pt-8 text-style-desktop-title-h-2-35-px text-orangedark">Contactez-nous</h3>
            <div class="form"> <?php the_content(); ?></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>