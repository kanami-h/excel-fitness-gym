<?php
/**
 * Template Name: トップページ
 * Description: トップページ用のテンプレート
 */
get_header('top'); 
?>
<?php 
if(have_posts()):
    while(have_posts()):the_post();
?>
<div class="top-img-space">
    <?php the_content(); ?>
</div>
<?php
endwhile;
endif;
?>
    <div class="wrap">
        <div id="newsFeed" class="news-container">
            <h1 class="bold">お知らせ</h1>
            <?php
                $arg = array(
                    'posts_per_page' => 3,//表示するページ数
                    'orderby' => 'date',
                    'order' => 'DESC', //DESCで最新、ASCで最後から表示
                    'category_name' => 'notice'
                );
            $posts = get_posts($arg);
            if($posts): ?>
            <ul class="list">
                <?php
                foreach($posts as $post):
                    setup_postdata($post); ?>
                    <li><?php the_time( 'Y.m.d' ); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
            </ul>
            <?php
                endif;
                wp_reset_postdata();
            ?>
                        
        </div>
        
        <div class="greeting">
            <div class="greeting title">
                <h1>WELCOME! <span class="title-small">TO EXCEL FITNESS CENTER</span></h1>
            </div>
            <div class="greeting-inner">
                <div class="greeting-message">
                    <p>エクセルフィットネスセンターは、理想の体づくりをサポートする<span class="bold color-pen">ボディメイク専門店です。</span></p>
                    <p><span class="bold color-pen">鏡に映る自分</span>の姿を変えたいと思いませんか？</p>
                    <p>エクセルでは、あなたの体づくりを専門知識を持ったインストラクターがサポートします。</p>
                    <p>今こそ、変わるチャンスです！一緒に理想の体を手に入れましょう！</p>
                    <div class="more-btn">
                        <a href="https://excel-fc.com/about">もっと詳しく→</a>
                    </div>
                </div>
                <div class="greeting-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/greeting-img.jpg" alt="">
                </div>
            </div>
        </div>

        <div id="plans">
            <div class="title">
                <h1 class="lines-on-sides">あなたの目標に合わせたプランをご提案</h1>
            </div>
            <div class="plan-list">
                <ul>
                    <li>パワーアップコース</li>
                    <li>シェイプアップコース</li>
                    <li>初心者コース</li>
                    <li>若返り筋トレコース</li>
                    <li>ウエスト引き締めコース</li>
                </ul>
                <ul>
                    <li>健康増進コース</li>
                    <li>メタボ撃退コース</li>
                    <li>楽トレコース</li>
                    <li>介護予防コース</li>
                    <li>体脂肪燃焼コース</li>
                </ul>
            </div>
            <div class="plan-cards">
                <div class="plan-card">
                    <div class="plan-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/personal.jpg" alt="パーソナルトレーニング">
                    </div>
                    <div class="plan-subtitle">
                        <p>「本気で変わりたい」人のための</p>
                    </div>
                    <div class="plan-title">
                        <h3>パーソナルトレーニング</h3>
                    </div>
                    <a href="https://excel-fc.com/plan/price/#personal" class="more-btn-s">もっと詳しく</a>
                </div>
                <div class="plan-card">
                    <div class="plan-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kenko-class4.jpg" alt="エクセル健康教室">
                    </div>
                    <div class="plan-subtitle">
                        <p>気持ちよく運動したい方に！</p>
                    </div>
                    <div class="plan-title">
                        <h3>エクセル健康教室</h3>
                    </div>
                    <a href="https://excel-fc.com/plan/price/#health-class" class="more-btn-s">もっと詳しく</a>
                </div>
            </div>
        </div>

        <div class="prices-top">
            <div class="title">
                <h1 class="lines-on-sides">選べる料金コース</h1>
            </div>
            <div class="new-member-special">
                <div class="box-title">入会特典</div>
                <div class="box-inner">
                    <p>初めての方も安心！</p>
                    <p>パーソナル（30分&times;2回）<span class="learge red bold">無料！</span></p>
                </div>
            </div>
            <div class="price-cards">
                <div class="price-card">
                    <a href="https://excel-fc.com/plan/price/#prices">
                        <div class="price-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/monthly.jpg" alt="月会員">
                        </div>
                        <div class="price-title">
                            <p class="bold">MONTHLY</p>
                            <p>月会員　¥3,900</p>
                        </div>
                    </a>
                </div>
                <div class="price-card">
                    <a href="https://excel-fc.com/plan/price/#prices">
                        <div class="price-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/yearly.jpg" alt="月会員">
                        </div>
                        <div class="price-title">
                            <p class="bold">YEARLY</p>
                            <p>年会員　¥16,000〜</p>
                        </div>
                    </a>
                </div>
                <div class="price-card">
                <a href="https://excel-fc.com/plan/price/#prices">
                        <div class="price-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/day_night.png" alt="月会員">
                        </div>
                        <div class="price-title">
                            <p class="bold">DAY/NIGHT TIME</p>
                            <p class="f-13">デイタイム会員　¥17,000</p>
                            <p class="f-13">ナイトタイム会員　¥19,000</p>
                        </div>
                    </a>
                </div>
            </div>
            <p class="center">そのほか、提供企業様向けのお得な割引料金もございます</p>
            
            <div class="more-btn">
                <a href="https://excel-fc.com/plan/price/#prices">料金を見る</a>
            </div>
        </div>

        <div class="blog">
            <div class="title">
                <h1 class="lines-on-sides">Mr.エクセルブログ</h1>
            </div>
            <div class="blog-cards">
            <?php 
            query_posts('showposts=3');
            get_template_part('loop', 'main'); 
            ?>
            </div>
            <div class="more-btn"><a href="https://excel-fc.com/blog">ブログ一覧へ</a></div>
        </div>

    </div>
    <!-- <div id="pageTop" onclick="jumpBtn">TOP</div> -->
    <?php get_footer(); ?>
