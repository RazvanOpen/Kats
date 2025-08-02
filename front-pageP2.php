<?php

get_header();
?>

    <main id="primary" class="site-main">
 
    <section class="banner section">
  <div class="video-container">
    <video 
      autoplay 
      muted 
      loop 
      playsinline 
      poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/VideoImage/fallback.png"
      class="hero-video"
    >
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/VideoImage/StudioKoukakvid.mp4" type="video/mp4">
      Votre navigateur ne supporte pas la vidéo HTML5.
    </video>
    <img class="hero-fallback" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/VideoImage/fallback.png" alt="fallback image mobile">
  </div>

  <div class="banner-content">
    <h1 class="floating-title">Fleurs d’oranger & chats errants</h1>
  </div>
</section>




        <section id="story" class="story section">
            <h2>L'histoire</h2>
              <img class="hibiscus-rotate hibiscus-story" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Videoimage/Hibiscus.png" alt="hibiscus animé">


            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',
            
            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters" class="characters-swiper-container">
  <h3>Les personnages</h3>

  <div class="swiper characters-swiper">
    <div class="swiper-wrapper">
      <?php
      $args = array(
        'post_type' => 'characters',
        'posts_per_page' => -1,
        'meta_key' => '_main_char_field',
        'orderby' => 'meta_value_num',
      );
      $characters_query = new WP_Query($args);

      if ($characters_query->have_posts()) :
        while ($characters_query->have_posts()) : $characters_query->the_post(); ?>
          <div class="swiper-slide">
            <figure>
              <?php the_post_thumbnail('medium'); ?>
              <figcaption><?php the_title(); ?></figcaption>
            </figure>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <p>Aucun personnage trouvé.</p>
      <?php endif; ?>
    </div>
  </div>
</article>

            <article id="place">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="section">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

        <section id="oscars" class="section oscars">
            <h2 class="section-title">Nomination aux Oscars</h2>
            <div class="oscars__content">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/oscar-logo.png" alt="Oscar du court-métrage">
                <p>Le film <strong>“Fleurs d’orangers et chats errants”</strong> est nommé aux Oscars dans la catégorie meilleur court-métrage d’animation.</p>
            </div>
        </section>
        <section>
        <img class="hibiscus-rotate2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/VideoImage/Hibiscus.png" alt="hibiscus animé">
        </section>
    </main><!-- #main -->

<?php
get_footer();