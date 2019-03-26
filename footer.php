<?php
    wp_enqueue_script('jquery'); 
  ?>
<section class="footer-ad">
    <h2>思い立ったら即TELを！</h2>
    <h2 class="footer-tell"><a href="tel:0987250375">0987-25-0375</a></h2>
    <div class="more-btn">
        <a href="https://excel-fc.com/contact/">メールでお問合せ</a>
    </div>
</section>
<footer>
            <div class="footer-inner">
                <div class="footer-left">
                    <h2 class="company">エクセルフィットネスセンター</h2>
                    <div class="business-hour">
                        <table>
                            <tr>
                                <td>住所</td>
                                <td>宮崎県日南市星倉3-3-13</td>
                            </tr>
                            <tr>
                                <td>TEL</td>
                                <td><a href="tel:0987250375">0987-25-0375</a></td>
                            </tr>
                            <tr>
                                <td>平日</td>
                                <td>AM10:00〜PM10:00</td>
                            </tr>
                            <tr>
                                <td>土日祝</td>
                                <td>AM10:00〜PM6:00</td>
                            </tr>
                            <tr>
                                <td>定休日</td>
                                <td>毎週木曜日</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="footer-middle">
                    <ul class="footer-menu">
                    <?php wp_nav_menu( array ( 'theme_location' => 'footer_menu_L' ) ); ?>
                    </ul>
                    <ul class="footer-menu">
                    <?php wp_nav_menu( array ( 'theme_location' => 'footer_menu_R' ) ); ?>
                    </ul>
                </div>
                <div class="footer-right">
                    <div class="sns-icon">
                        <a href="https://www.facebook.com/excel.yamada/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/f-ogo_RGB_HEX-58.png" alt="Facebookはこちらから！"></a>
                        <a href="https://www.instagram.com/yosinariyamada/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagramはこちらから！"></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <a href="https://excel-fc.com/privacy-policy/">プライバシーポリシー</a>
                <p>Copyright©️2018 エクセルフィットネスセンター</p>
            </div>
        </footer>
        <script src="<?php echo get_template_directory_uri()?>/js/main.js"></script>
  <?php wp_footer(); ?>
  
</body>
</html>