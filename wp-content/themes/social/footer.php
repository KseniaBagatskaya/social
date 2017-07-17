<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div>
<footer id="colophon" role="contentinfo">
    <div class="container">
        <div class="row">
            <?php do_action('twentytwelve_credits'); ?>
            <a href="<?php echo esc_url(__('http://www.apes-at-work.com/', 'twentytwelve')); ?>"><?php the_field('footer_title', 'option'); ?> </a>

            <?php if (have_rows('footer_menu', 'option')): ?>
                <ul class="social">
                    <?php while (have_rows('footer_menu', 'option')): the_row(); ?>
                        <li><a href="<?php the_sub_field('url'); ?>">
                                <i class="<?php the_sub_field('img'); ?>"></i>
                                <?php the_sub_field('name'); ?>
                            </a></li>
                    <?php endwhile; ?>
                </ul>

            <?php endif; ?>
        </div>

    </div>
</footer>
</div>
<a href="#" id="scroll_up"><i class="fa fa-chevron-up"></i></a>
<script>
    (function ($) {
        $(document).ready(function () {
            setPosition();
            $('#scroll_up').click(function () {
                $("html, body").animate({"scrollTop": 0}, 'slow');
                return false;
            });
        });
        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                $('#scroll_up').fadeIn();
            } else {
                $('#scroll_up').fadeOut();
            }
        });
        $(window).resize(function () {
            setPosition();
        });
        function setPosition() {
            var w = $(window).width();
            var $btn = $('#scroll_up');
            if (w > 1130) {
                var w_p = $('#page').width();
                var w_btn = $btn.width();
                var offset = (w - w_p) / 4 - w_btn - 5;
                $btn.css({'right': offset});
                console.log(w);
                console.log(w_p);
                console.log(offset);
            } else {
                $btn.css({'right': 40});
            }

        }
    })(jQuery);

</script>
<?php wp_footer(); ?>

<script>

    window.onload = function () {

        setTimeout(function () {

            var ad = document.querySelector("ins.adsbygoogle");

            if (ad && ad.innerHTML.replace(/\s/g, "").length == 0) {

                ad.style.cssText = 'display:block !important';

                ad.innerHTML = 'Your custom HTML messages goes here';
            }

        }, 2000);
    };
</script>

</body>
</html>