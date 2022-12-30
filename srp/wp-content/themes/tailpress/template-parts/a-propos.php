<?php
/*
 * Template Name: Page a propos
 * Template Post Type: page
 */
get_header(); ?>

<div class="flex justify-center items-center py-10 px-10 sm:flex-col mx-auto-120px mx-auto-80px mx-auto-40px mx-auto-20px">
  <div class="h-[400px] max-w-[400px] flex justify-center mr-5 md:h-auto md:mr-0 w-full">
    <img src="<?php echo(get_field('image_header')['url']); ?>" class="rounded-full max-w-[400px] h-full w-full object-cover md:max-w-[340px]" />
  </div>
  <div class="flex flex-col justify-center items-center">
    <h1 class="text-style-desktop-title-h-1-60-px text-center text-greywhite"><?php echo('Qui sommes-nous ?'); ?></h1>
    <div class="flex mt-2.5">
      <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
      <span class="icon-quill text-white mx-5"></span>
      <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
    </div>
    <h2 class="text-greywhite text-style-desktop-title-h-2-35-px mt-5 text-center"><?php echo('SRP Détective est une Agence d’enquêtes '); ?><br><?php echo('et d’investigations privées'); ?> </h2>
    <a href="<?php echo get_home_url(); ?>/contact">
      <button type="button" class="text-greywhite bg-orangedark rounded-lg px-5 py-2.5 mt-10 uppercase text-style-desktop-button-13-px">Nous contacter</button>
    </a>
  </div>
</div>
</header>

<div class='flex mx-auto-120px mx-auto-80px mx-auto-40px mx-auto-20px'>
  <div class="nav md:hidden">
      <nav class="services-nav sticky top-52 left-auto self-start mt-[120px] flex flex-col w-[200px]">
        <?php $slider = get_field('theme'); foreach($slider as $s):?>
          <a href="#section-<?php echo $s['titre_du_theme']; ?>" class="content-menu-item" data-anchor="section-<?php echo $s['titre_du_theme']; ?>">
            <?php echo $s['titre_du_theme']; ?>
          </a>
        <?php endforeach; ?>
      </nav>
  </div>

<div class="py-10 pt-5 ml-20 md:ml-0">
    <h3 class="text-style-desktop-title-h-2-50-px text-bluesuperdark text-center mt-20">Nous sommes de la région Parisienne et nous intervenons sur tout le territoire national </h3>
    <div class="flex my-5 justify-center items-center">
      <span class="border-solid border-t-[2px] border-orangedark w-[120px] my-5"></span>
    </div>
    <p class="text-style-desktop-text-22-px-light text-bluesuperdark text-center">Notre agence est agréée par le <strong>Conseil national des activités privées de sécurité (CNAPS)</strong> et elle est réglementée par le titre II livre IV du code de la sécurité intérieure.
        <br><br>
        Article L621-1: Est soumise aux dispositions du présent titre la profession libérale qui consiste, pour une personne, à recueillir, même sans faire état de sa qualité ni révéler l'objet de sa mission, des informations ou renseignements destinés à des tiers, en vue de la défense de leurs intérêts.
        <br><br>
        Au service des particuliers comme des professionnels, nous intervenons rapidement et avec efficacité pour vous apporter la meilleure solution.
    </p>

    <h3 class="text-style-desktop-title-h-2-50-px text-bluesuperdark text-center mt-20">Les qualités qui définissent SRP Détective</h3>
    
    <div class="my-5 justify-center items-center">
      <?php $slider = get_field('theme'); foreach($slider as $s):?>
        <div class="flex my-5 justify-center items-center">
          <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
          <span class="text-style-desktop-title-h-3 text-bluesuperdark text-center mx-5 list-block my-5" id="section-<?php echo $s['titre_du_theme']; ?>"><?php echo $s['titre_du_theme']; ?></span>
          <span class="border-solid border-t-[0.5px] border-orangedark w-[60px]"></span>
        </div>
        <div class="">
          <img src="<?php echo $s['image_du_theme']['url'] ?>" class="max-h-[400px] w-full justify-center items-center object-cover md:max-h-[340px] my-8" />
          <p class="text-style-desktop-text-22-px-light text-bluesuperdark text-center my-8">
            <?php echo $s['texte_du_theme'];; ?>
          </p>
        </div>
			<?php endforeach; ?>
    </div>
</div>
      </div>   

<?php get_footer(); ?>