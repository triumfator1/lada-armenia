<?php get_header() ?>
    <main class="main-content">
      <div class="container">
        <div class="wrap">
          <div class="our-services">
            <h2 class="title our-services__title">
              Наши <span style="color: #F9A422">услуги</span>
            </h2>
            <div class="service-cards">
              <?php
                $terms = get_terms( array(
                  'hide_empty'  => 0,
                  'orderby'     => 'id',
                  'order'       => 'ASC',
                  'taxonomy'    => 'category',
                  'exclude' => 1,
                  'parent' => 0
                ) );
                foreach ($terms as $term):
                  $image = get_field('image', 'category_' . $term->term_id); ?>
                  <div class="our-services__card card">
                    <img src="<?php echo $image['url'] ?>" class="card-img-top" alt="<?php echo $image['alt'] ?>">
                    <div class="card-body">
                      <h3 class="card-title"><?php echo $term->name ?></h3>
                      <a href="#" class="card-menu-button">
                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 1L7 7L13 1" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                      </a>
                      <?php $subterms = get_terms([
                          'hide_empty'  => 0,
                          'orderby'     => 'id',
                          'order'       => 'ASC',
                          'taxonomy'    => 'category',
                          'parent' => $term->term_id
                      ]);
                      if (!is_wp_error($subterms) && count($subterms)): ?>
                        <ul class="card-menu">
                          <?php foreach ($subterms as $subterm): ?>
                            <li class="card-menu__element"><?php echo $subterm->name ?></li>
                          <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php endforeach; ?>
            </div>            
          </div>    
          <div class="book-form">
            <h2 class="title book-form__title">
              Забронировать <span style="color: #FFD500">авторский тур</span>
            </h2>          
			  
			  <?php echo do_shortcode('[contact-form-7 id="5" title="main-form"]'); ?>
            <div class="booking-info">
              Нажимая, вы даете согласие на обработку персональных данных.
            </div>
          </div>
        </div>
      </div>
    </main>  
    <?php get_footer() ?>
</body>
</html>