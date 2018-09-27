<article id="post-<?php the_ID(); ?>" class="tenup__content guttered" role="article">
  <section class="tenup__content__post-image">
    <?php the_post_thumbnail( 'full' ) ?>
  </section>

  <section class="tenup__content__copy">
    <p class="tenup__content__copy__post-date">
      <?php the_date(); ?>
    </p>

    <h2 class="tenup__content__copy__post-title">
      <a href="<?php the_permalink(); ?>" aria-label="Link to post titled <?php the_title(); ?>">
        <?php the_title(); ?>
      </a>
    </h2>

    <section class="tenup__content__copy__post-content">
        <?php the_content(); ?>
    </section>

    <div class="tenup__content__copy__post-more">
      <a href="<?php the_permalink(); ?>" aria-label="Read more link for post titled <?php the_title(); ?>">
        Read more<span class="chevron"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path class="svg-chevron" d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg></span>
      </a>
    </div>
  </section>
</article>
