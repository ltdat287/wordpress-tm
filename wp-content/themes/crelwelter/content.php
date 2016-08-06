<?php if ( is_single() ) : ?>
<div class="detail-new">
  <h3 class="name-tittle"><?php the_title(); ?></h3>
  <div class="content-new">
    <?php the_content(); ?>
  </div>
</div>
<?php else : ?>
  <div class="new">
    <div class="list-new">
      <a href="<?php the_permalink(); ?>" ><img src="images/imgnew.jpg" class="imgstyle"> </a>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
      <p><?php the_excerpt(); ?></p>
    </div>
  </div>
<?php endif; ?>
