<?php get_header(); ?>

<section class="description" style="background: url(<?php if (get_field('section_background')) : ?><?php the_field('section_background'); ?><?php endif; ?>) no-repeat; background-size: cover">
    <div class=" container">
        <?php if (get_field('main-title')) : ?>
            <h1 id="scrollTo" class="section-title"><?php the_field('main-title'); ?></h1>
        <?php endif; ?>
        <?php if (get_field('main-subtitle')) : ?>
            <p class="section-subtitle"><?php the_field('main-subtitle'); ?></p>
        <?php endif; ?>
        <div class="description__content">
            <p class="description__text">
                <?php if (get_field('main_avatar')) : ?>
                    <img src="<?php the_field('main_avatar'); ?>" alt="Stephanie" class="description__author">
                <?php endif; ?>
                <?php if (get_field('about')) : ?>
                    <span class="description__text">
                        <?php the_field('about'); ?>
                    </span>
                <?php endif; ?>
            </p>
        </div>
        <!-- /.description__content -->
        <?php if (get_field('description__sign')) : ?>
            <div class="description__sign">
                <?php the_field('description__sign'); ?>
            </div>
        <?php endif; ?>
    </div>
    <!-- /.container -->
</section>
<!-- /.description -->

<section class="contact" style="background-image: url(<?php if (get_field('contact_background')) : ?><?php the_field('contact_background'); ?><?php endif; ?>);">
    <?php if (get_field('contact__subtitle')) : ?>
        <span class="contact__subtitle"><?php the_field('contact__subtitle'); ?></span>
    <?php endif; ?>
    <?php if (get_field('contact__title')) : ?>
        <h2 class="contact__title"><?php the_field('contact__title'); ?></h2>
    <?php endif; ?>
    <?php if (get_field('contact_link_label')) : ?>
        <a href="#contact" class="contact__link"><?php the_field('contact_link_label'); ?></a>
    <?php endif; ?>
</section>
<!-- /.contact -->

<section class="pricelist" style="background: url(<?php if (get_field('section_background-2')) : ?><?php the_field('section_background-2'); ?><?php endif; ?>) no-repeat; background-size: cover">
    <div class="container">
        <?php if (get_field('pricelist__title')) : ?>
            <h2 id="pricelist" class="section-title pricelist__title"><?php the_field('pricelist__title'); ?></h2>
        <?php endif; ?>
        <?php if (get_field('pricelist__subtitle')) : ?>
            <p class="section-subtitle pricelist__subtitle"><?php the_field('pricelist__subtitle'); ?></p>
        <?php endif; ?>
        <?php if (get_field('pricelist__description')) : ?>
            <p class="pricelist__description"><?php the_field('pricelist__description'); ?></p>
        <?php endif; ?>
        <?php if (get_field('pricelist__table-title')) : ?>
            <h3 class="pricelist__table--title"><?php the_field('pricelist__table-title'); ?></h3>
        <?php endif; ?>
        <div class="table-responsive-xl">
            <table class="pricelist__table">
                <thead>
                    <tr>
                        <th scope="col" class="hair-length__item--empty"></th>
                        <?php if (get_field('column-2-title')) : ?>
                            <th scope="col" class="hair-price__item--title"><span class="title-wrapper"><?php the_field('column-2-title'); ?></span></th>
                        <?php endif; ?>
                        <?php if (get_field('column-3-title')) : ?>
                            <th scope="col" class="hair-price__item--title"><span class="title-wrapper"><?php the_field('column-3-title'); ?></span></th>
                        <?php endif; ?>
                        <?php if (get_field('column-4-title')) : ?>
                            <th scope="col" class="hair-price__item--title"><span class="title-wrapper"><?php the_field('column-4-title'); ?></span></th>
                        <?php endif; ?>
                        <?php if (get_field('column-5-title')) : ?>
                            <th scope="col" class="hair-price__item--title"><span class="title-wrapper"><?php the_field('column-5-title'); ?></span></th>
                        <?php endif; ?>
                        <?php if (get_field('column-6-title')) : ?>
                            <th scope="col" class="hair-price__item--title"><span class="title-wrapper"><?php the_field('column-6-title'); ?></span></th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="hair-length__item"><?php the_field('hair-length-1'); ?></th>
                        <td class="hair-price__item"><?php the_field('hair-length-1-price-1'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-1-price-2'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-1-price-3'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-1-price-4'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-1-price-5'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row" class="hair-length__item"><?php the_field('hair-length-2'); ?></th>
                        <td class="hair-price__item"><?php the_field('hair-length-2-price-1'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-2-price-2'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-2-price-3'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-2-price-4'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-2-price-5'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row" class="hair-length__item"><?php the_field('hair-length-3'); ?></th>
                        <td class="hair-price__item"><?php the_field('hair-length-3-price-1'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-3-price-2'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-3-price-3'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-3-price-4'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-3-price-5'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row" class="hair-length__item"><?php the_field('hair-length-4'); ?></th>
                        <td class="hair-price__item"><?php the_field('hair-length-4-price-1'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-4-price-2'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-4-price-3'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-4-price-4'); ?></td>
                        <td class="hair-price__item"><?php the_field('hair-length-4-price-5'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="pricelist__description pricelist__description--bottom">
            <?php the_field('service_description'); ?>
        </p>
    </div>
</section>
<!-- /.pricelist -->
<section class="photos">
    <h2 id="photos" class="section-title photos__title"><?php the_field('photos__title'); ?></h2>
    <div class="photos__items">
        <a href="<?php the_field('gallery__slide-1'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-1'); ?>" alt="Photo: hair style"></a>
        <a href="<?php the_field('gallery__slide-2'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-2'); ?>" alt="Photo: hair style"></a>
        <a href="<?php the_field('gallery__slide-3'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-3'); ?>" alt="Photo: hair style"></a>
        <a href="<?php the_field('gallery__slide-4'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-4'); ?>" alt="Photo: hair style"></a>
        <a href="<?php the_field('gallery__slide-5'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-5'); ?>" alt="Photo: hair style"></a>
        <a href="<?php the_field('gallery__slide-6'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-6'); ?>" alt="Photo: hair style"></a>
        <a href="<?php the_field('gallery__slide-7'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-7'); ?>" alt="Photo: hair style"></a>
        <a href="<?php the_field('gallery__slide-8'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-8'); ?>" alt="Photo: hair style"></a>
        <a href="<?php the_field('gallery__slide-9'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-9'); ?>" alt="Photo: hair style"></a>
        <a href="<?php the_field('gallery__slide-10'); ?>" data-fancybox="gallery"><img class=" photo" src="<?php the_field('gallery__slide-10'); ?>" alt="Photo: hair style"></a>
    </div>
    <!-- /.photos__items -->
</section>
<!-- /.photos -->
<section class="connection" style="background: url(<?php the_field('section_background-3'); ?>) no-repeat; background-size: cover">
    <div class="container">
        <h2 id="contact" class="section-title connection__title"><?php the_field('connection__title'); ?></h2>
        <p class="section-subtitle connection__subtitle"><?php the_field('connection__subtitle'); ?></p>
        <div class="connection__wrapper">
            <div class="form-wrapper">
                <!-- /.form__wrapper -->
                <?php echo do_shortcode('[contact-form-7 id="191" html_class="connection__form" title="Contact form STEPHANIE"]'); ?>

                <a href="tel:<?php the_field('phone-number'); ?>" class="connection__phone">
                    <img src="<?php bloginfo('template_url'); ?>/img/phone.svg" alt="Icon: Phone" class="phone">
                    <span class="phone-number"><?php the_field('phone-number'); ?></span>
                </a>
                <a href="mailto:<?php the_field('email'); ?>" class="connection__mail">
                    <img src="<?php bloginfo('template_url'); ?>/img/mail.svg" alt="Icon: Mail" class="mail">
                    <span class="mail-text"><?php the_field('email'); ?></span>
                </a>
            </div>
            <div class="map">
                <?php the_field('gmap'); ?>
                <p class="location"><?php the_field('location_address'); ?></p>
            </div>

            <!-- /.map -->
        </div>
        <!-- /.connection__wrapper -->
    </div>
    <!-- /.container -->
</section>
<!-- /.connection -->

<?php get_footer(); ?>