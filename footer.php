<footer class="footer">
    <?php if (get_field('small_logo_footer')) : ?>
        <a href="index.php"><img src="<?php the_field('small_logo_footer'); ?>" alt="Logo: Inspiratie by Stephanie" class="header-logo"></a>
    <?php endif; ?>
    <p class="copyright"><?php if (get_field('copyright')) : ?><?php the_field('copyright'); ?><?php endif; ?> <?php if (get_field('brand_name')) : ?><a href="index.php" class="brand"><?php the_field('brand_name'); ?></a><?php endif; ?></p>
</footer>

<?php wp_footer(); ?>
</body>

</html>