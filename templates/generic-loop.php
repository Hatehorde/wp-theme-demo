<?php if(have_posts(  )) : ?>

<?php while(have_posts(  )) : the_post(  );?>

        <article class="flex">
            <div class="texte-article trois-quart">
                <h2><?php the_title(  ); ?></h2>
                <p><?php the_content(  ); ?></p>
            </div>
        </article>

                
    <?php endwhile; ?>

<?php endif;?>