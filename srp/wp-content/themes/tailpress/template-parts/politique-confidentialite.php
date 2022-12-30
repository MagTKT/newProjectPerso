<?php
/*
 * Template Name: Page de politique de confidentialité
 * Template Post Type: page
 */
get_header(); ?>

<div class="flex justify-center items-center py-20 px-10 sm:flex-col mx-auto-120px mx-auto-80px mx-auto-40px mx-auto-20px">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-style-desktop-title-h-1-60-px text-center text-greywhite"><?php echo(the_title()); ?></h1>
            <div class="flex mt-2.5">
            <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
            <span class="icon-quill text-white mx-5"></span>
            <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
            </div>
        </div>
    </div>
</header>
<div class='flex mx-auto-120px mx-auto-80px mx-auto-40px mx-auto-20px'>
    <div class="entry-content mt-10">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>