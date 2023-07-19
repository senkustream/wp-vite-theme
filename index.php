<?php get_header(); ?>
    <div class="container">
        <h1>Nani!</h1>
        <p>Finally, it works!</p>
        <p>Try to type something below and save it in editor without refresh the browser!</p>

        <!-- Your turn -->
        <div style="margin: 8px 0;">
            <p>You can set background image too!</p>
        </div>
        <div id="message"></div>
        <div class="img-bg"></div>
        <div id="image-background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/images/mono-log-unsplash.jpg);"></div>
    </div>
<?php get_footer(); ?>