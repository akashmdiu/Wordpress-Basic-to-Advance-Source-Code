
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                if (is_active_sidebar('footer_one')) :
                    dynamic_sidebar('footer_one');
                endif;

                ?>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-6">
            <p class="copyright">Copyright: <span>
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </span><?php echo $timer_master['copyright']; ?>
            </p>
        </div>
        <div class="col-md-2">
            <div class="account">
                <?php
                if (is_user_logged_in()) { ?>
                    <a href="<?php echo site_url(); ?>/wp-login.php?action=logout">Log Out</a>
                <?php
                } else { ?>
                    <p>
                        <a href="<?php echo site_url(); ?>/login">Log In</a> |
                        <a href="<?php echo site_url(); ?>/registration-form">Register</a>
                    </p>
                <?php }
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Social Media -->
            <ul class="social">
                <?php
                if (is_array($timer_master['icon'])) {
                    foreach ($timer_master['icon'] as $single_icon) { ?>
                        <li>
                            <a href="<?php echo $single_icon['url']; ?>" class="Facebook">
                                <i class="ion-social-<?php echo $single_icon['title']; ?>"></i>
                            </a>
                        </li>
                <?php }
                }
                ?>
            </ul>
        </div>
    </div>
</footer> <!-- /#footer -->
<?php wp_footer(); ?>
</body>

</html>