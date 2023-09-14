<!-- FOOTER -->
<footer class="noprint">
    <!-- NEWSLETTER -->
    <div class="container">
        <div class="col-12">
            <?php
            $socialMediaModifier = 'social-media--horizontal social-media--footer';
            $socialMediaSource = 'footer';
            include('include-social-media.php');
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="copyright">© <?= date("Y"); ?> Escoteiros do Brasil - Todos os direitos reservados</p>
            </div>
            <?php if(have_rows('links_footer', 'option')){ ?>
                <div class="col-md-10 offset-md-1 col-sm-12">
                    <ul class="footer-links">
                        <?php while (have_rows('links_footer', 'option')){
                            the_row();
                            $post_object = get_sub_field('link_page');
                            $post_label = get_sub_field('link_label');
                            if($post_object){ ?>
                                <?php $post = $post_object;
                                setup_postdata($post); ?>
                                <li class="footer-links__item">
                                    <a href="<?php the_permalink(); ?>"><?= $post_label; ?></a>
                                </li>
                        <?php wp_reset_postdata();
                            }
                        } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/d326dba99a.js" crossorigin="anonymous"></script>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '603759040326810',
            cookie: true,
            xfbml: true,
            version: '7.0'
        });

        FB.AppEvents.logPageView();
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- FIM DE FOOTER -->
<?php wp_footer(); ?>
</body>
</html>
