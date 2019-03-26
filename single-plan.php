<?php get_header('top'); ?>
        <div class="header-img-price">
        <div class="img-box">
            <h1>料金・サービス紹介</h1>
        </div>
    </div>
    <section class="jump-btn">
        <button><a href="#prices"> 料金 </a></button>
        <button><a href="#personal">パーソナル<br>トレーニング</a></button>
        <button><a href="#health-class">健康教室</a></button>
    </section>
    <div class="wrap">
        <section id="prices">
            <section class="price">
                <div class="title">
                    <h1 class="lines-on-sides">料金</h1>
                </div>
                <div class="new-member-special shadow">
                    <div class="box-title">入会特典</div>
                    <div class="box-inner">
                        <p>初めての方も安心！</p>
                        <p>パーソナル（30分&times;2回）<span class="learge red bold">無料！</span></p>
                    </div>
                </div>
                <div class="fees">
                    <div class="fee">
                        <div class="fee-title">入会・登録料</div>
                        <div class="fee-price"><p class="price-inner">3,000円</p></div>
                    </div>
                    <div class="fee">
                        <div class="fee-title">体験（1回のみ）</div>
                        <div class="fee-price"><p class="price-inner">500円</p></div>
                    </div>
                    <div class="fee">
                        <div class="fee-title">ビジター料金</div>
                        <div class="fee-price"><p class="price-inner">1,000円<br>会員の同伴者は500円</p></div>
                    </div>
                </div>
                
                
                <div class="membership">
                    <h2>ご利用料金表</h2>
                    <!-- for Mobile -->
                    <div class="member-cards-s">
                        <div class="member-card">
                            <div class="fee-title member-card-hd">
                                1ヶ月会員
                            </div>
                            <div class="member-card-in">
                                <div class="member-card-row">
                                    <p>期間</p><p>1ヶ月</p>
                                </div>
                                <div class="member-card-row">
                                    <p>内容</p><p>1ヶ月フリーパス</p>
                                </div>
                                <div class="member-card-row c-price">
                                    <p>使用料</p><p class="member-card-price"><?php echo number_format(get_field('price-monthly'));?>円</p>
                                </div>
                            </div>
                        </div>
                        <div class="member-card">
                            <div class="fee-title member-card-hd">
                                1年会員
                            </div>
                            <div class="member-card-in">
                                <div class="member-card-row">
                                    <p>期間</p><p>1年</p>
                                </div>
                                <div class="member-card-row">
                                    <p>内容</p><p>1年間フリーパス</p>
                                </div>
                                <div class="member-card-row c-price">
                                    <p>使用料</p><p class="member-card-price"><?php echo number_format(get_field('price-yearly'));?>円</p>
                                </div>
                                <div class="member-card-row">
                                    <p>1ヶ月あたり</p><p>約<?php echo number_format(get_field('permonth-yearly'));?>円</p>
                                </div>
                            </div>
                        </div>
                        <div class="member-card">
                            <div class="fee-title member-card-hd">
                                ペア割（２名様）
                            </div>
                            <div class="member-card-in">
                                <div class="member-card-row">
                                    <p>期間</p><p>1年</p>
                                </div>
                                <div class="member-card-row">
                                    <p>内容</p><p>1年間フリーパス<br>ご利用は個人個人でOK!</p>
                                </div>
                                <div class="member-card-row c-price">
                                    <p>使用料</p><p class="member-card-price"><?php echo number_format(get_field('price-pair'));?>円<span class="person">/人</span></p>
                                </div>
                                <div class="member-card-row">
                                    <p>1ヶ月あたり</p><p>約<?php echo number_format(get_field('permonth-pair'));?>円</p>
                                </div>
                            </div>
                        </div>
                        <div class="member-card">
                            <div class="fee-title member-card-hd">
                                グループ割（３名様以上）
                            </div>
                            <div class="member-card-in">
                                <div class="member-card-row">
                                    <p>期間</p><p>1年</p>
                                </div>
                                <div class="member-card-row">
                                    <p>内容</p><p>1年間フリーパス<br>ご利用は個人個人でOK!</p>
                                </div>
                                <div class="member-card-row c-price">
                                    <p>使用料</p><p class="member-card-price"><?php echo number_format(get_field('price-group'));?>円<span class="person">/人</span></p>
                                </div>
                                <div class="member-card-row">
                                    <p>1ヶ月あたり</p><p>約<?php echo number_format(get_field('permonth-group'));?>円</p>
                                </div>
                            </div>
                        </div>
                        <div class="member-card">
                            <div class="fee-title member-card-hd">
                                団体割（６名様以上）
                            </div>
                            <div class="member-card-in">
                                <div class="member-card-row">
                                    <p>期間</p><p>1年</p>
                                </div>
                                <div class="member-card-row">
                                    <p>内容</p><p>1年間フリーパス<br>ご利用は個人個人でOK!</p>
                                </div>
                                <div class="member-card-row c-price">
                                    <p>使用料</p><p class="member-card-price"><?php echo number_format(get_field('price-party'));?>円<span class="person">/人</span></p>
                                </div>
                                <div class="member-card-row">
                                    <p>1ヶ月あたり</p><p>約<?php echo number_format(get_field('permonth-party'));?>円</p>
                                </div>
                            </div>
                        </div>
                        <div class="member-card">
                            <div class="fee-title member-card-hd">
                                家族割（１世帯３名様まで）
                            </div>
                            <div class="member-card-in">
                                <div class="member-card-row">
                                    <p>期間</p><p>1年</p>
                                </div>
                                <div class="member-card-row">
                                    <p>内容</p><p>1年間フリーパス<br>ご利用は個人個人でOK!</p>
                                </div>
                                <div class="member-card-row c-price">
                                    <p>使用料</p><p class="member-card-price"><?php echo number_format(get_field('price-family'));?>円<span class="person">/世帯</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="member-card">
                            <div class="fee-title member-card-hd">
                                デイタイム会員
                            </div>
                            <div class="member-card-in">
                                <div class="member-card-row">
                                    <p>期間</p><p>1年</p>
                                </div>
                                <div class="member-card-row">
                                    <p>内容</p><p>PM1:00〜6:00まで</p>
                                </div>
                                <div class="member-card-row c-price">
                                    <p>使用料</p><p class="member-card-price"><?php echo number_format(get_field('price-day'));?>円</p>
                                </div>
                                <div class="member-card-row">
                                    <p>1ヶ月あたり</p><p>約<?php echo number_format(get_field('permonth-day'));?>円</p>
                                </div>
                            </div>
                        </div>
                        <div class="member-card">
                            <div class="fee-title member-card-hd">
                                ナイトタイム会員
                            </div>
                            <div class="member-card-in">
                                <div class="member-card-row">
                                    <p>期間</p><p>1年</p>
                                </div>
                                <div class="member-card-row">
                                    <p>内容</p><p>PM4:00〜営業終了まで</p>
                                </div>
                                <div class="member-card-row c-price">
                                    <p>使用料</p><p class="member-card-price"><?php echo number_format(get_field('price-night'));?>円</p>
                                </div>
                                <div class="member-card-row">
                                    <p>1ヶ月あたり</p><p>約<?php echo number_format(get_field('permonth-night'));?>円</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- for Desctop -->
                    <table class="plan-table">
                        <tr class="plan-head">
                            <th class="plan-name">プラン</th>
                            <th class="plan-term">期間</th>
                            <th class="plan-price">使用料（税込）</th>
                            <th class="plan-content">内容</th>
                            <th class="plan-per-year">1ヶ月あたり</th>
                        </tr>
                        <tr>
                            <td class="plan-name">1ヶ月会員</td>
                            <td class="plan-term">1ヶ月</td>
                            <td class="plan-price"><?php echo number_format(get_field('price-monthly'));?>円</td>
                            <td class="plan-content">1ヶ月フリーパス</td>
                            <td class="plan-per-year"> - </td>
                        </tr>
                        <tr class="gray">
                            <td class="plan-name">1年会員</td>
                            <td class="plan-term">1年</td>
                            <td class="plan-price"><?php echo number_format(get_field('price-yearly'));?>円</td>
                            <td class="plan-content">1年間フリーパス</td>
                            <td class="plan-per-year">約<?php echo number_format(get_field('permonth-yearly'));?>円</td>
                        </tr>
                        <tr>
                            <td class="plan-name">ペア割<br><span class="small">（2名様）</span></td>
                            <td class="plan-term">1年</td>
                            <td class="plan-price"><?php echo number_format(get_field('price-pair'));?>円/人</td>
                            <td class="plan-content">1年間フリーパス<br>ご利用は個人個人でOK</td>
                            <td class="plan-per-year">約<?php echo number_format(get_field('permonth-pair'));?>円</td>
                        </tr>
                        <tr class="gray">
                            <td class="plan-name">グループ割<br><span class="small">（3名様以上）</span></td>
                            <td class="plan-term">1年</td>
                            <td class="plan-price"><?php echo number_format(get_field('price-group'));?>円/人</td>
                            <td class="plan-content">1年間フリーパス<br>ご利用は個人個人でOK</td>
                            <td class="plan-per-year">約<?php echo number_format(get_field('permonth-group'));?>円</td>
                        </tr>
                        <tr>
                            <td class="plan-name">団体割<br><span class="small">（6名様以上）</span></td>
                            <td class="plan-term">1年</td>
                            <td class="plan-price"><?php echo number_format(get_field('price-party'));?>円/人</td>
                            <td class="plan-content">1年間フリーパス<br>ご利用は個人個人でOK</td>
                            <td class="plan-per-year">約<?php echo number_format(get_field('permonth-party'));?>円</td>
                        </tr>
                        <tr class="gray">
                            <td class="plan-name">家族割</span></td>
                            <td class="plan-term">1年</td>
                            <td class="plan-price"><?php echo number_format(get_field('price-family'));?>円</td>
                            <td class="plan-content">ご家族1世帯3名様まで</td>
                            <td class="plan-per-year"> - </td>
                        </tr>
                        <tr>
                            <td class="plan-name">デイタイム会員</td>
                            <td class="plan-term">1年</td>
                            <td class="plan-price"><?php echo number_format(get_field('price-day'));?>円</td>
                            <td class="plan-content">PM1:00〜6:00まで</td>
                            <td class="plan-per-year">約<?php echo number_format(get_field('permonth-day'));?>円</td>
                        </tr>
                        <tr class="gray">
                            <td class="plan-name">ナイト会員</td>
                            <td class="plan-term">1年</td>
                            <td class="plan-price"><?php echo number_format(get_field('price-night'));?>円</td>
                            <td class="plan-content">PM4:00〜営業終了まで</td>
                            <td class="plan-per-year">約<?php echo number_format(get_field('permonth-night'));?>円</td>
                        </tr>
                    </table>
                    <div class="privilege">
                        <h3>お得な特典！</h3>
                        <p>エクセルの会員証のご提示で<a href="http://www.jsgroup.jp/" target="_blank">ホテルジェイズ日南リゾート</a>の温泉・岩盤浴が半額料金でご利用いただけます！</p>
                        <p>トレーニングをしたら温泉でリラックス！最高です。</p>
                    </div>
                </div>
    
                <div class="special-rate">
                    <h2>提携会員特別料金</h2>
                    <div class="special-rate-companies">
                        <div class="accordions">
                            <button class="accordion">医療法人　慶和会 河野医院</button>
                            <div class="special-content">
                                <p>お得なメタボ割引！</p>
                                <p>ご利用時に院長の紹介状をご提示ください。</p>
                            </div>
                        </div>
                        <div class="accordions">
                            <button class="accordion">医療法人　文誠会　百瀬病院</button>
                            <div class="special-content">
                                <p>ご利用時に職員証または紹介状を提示して下さい</p>
                            </div>
                        </div>
                        <div class="accordions">
                            <button class="accordion">日南歯科医師会</button>
                            <div class="special-content">
                                <p>ご利用時に会員証明書を提示して下さい</p>
                            </div>
                        </div>
                        <div class="accordions">
                            <button class="accordion">JAはまゆう職員労働組合</button>
                            <div class="special-content">
                                <p>ご利用時に職員証を提示して下さい</p>
                            </div>
                        </div>
                        <div class="accordions">
                            <button class="accordion">日南商工会議所</button>
                            <div class="special-content">
                                <p>ご利用時に日南商工会議所の会員証明を提示して下さい</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="how-to-use">
                <div class="title">
                    <h1 class="lines-on-sides">ご利用の流れ</h1>
                </div>
                <article class="user-desc">
                    <p>タオル・運動しやすい服・上履きをご用意ください</p>
                    <p>すぐに始めるのではなく、まずはカウンセリングで個々の目標や目的、持病など伺いながら無理のない基本的なプログラムをアドバイスいたします。</p>
                    <p>親切・丁寧にマシーンの使用方法を説明しますので、運動が苦手な方や初心者の方でも安心してご利用いただけます。</p>
                    <div class="desc-icons">
                        <div class="desc-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-recture.png" alt="まずはお申し込み・カウンセリング">
                            <p>お申し込み・カウンセリング</p>                   
                        </div>
                        <div class="desc-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-explain.png" alt="そしてトレーニング・使用方法などの説明を行います">
                            <p>トレーニング・使用方法などの説明</p>                   
                        </div>
                        <div class="desc-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-training.png" alt="それから運動開始となります！">
                            <p>運動開始</p>                   
                        </div>
                    </div>
                </article>
            </section>
            
        </section>
        
        <article class="personal" id="personal">
            <h4>確実に結果を出したいあなたへおすすめ！</h4>
            <h1 class="bold">&#9586;パーソナルトレーニング&#9585;</h1>
            <h3 class="bold">こんなお悩みありませんか？</h3>
            <div class="hope">
                <ul>
                    <li>今まで結果が出なかったけれど、今度こそ痩せたい</span></li>
                    <li>結婚式があるので締まった身体になりたい</li>
                    <li>スーツの似合う身体になりたい</li>
                    <li>運動の仕方がわからない</li>
                    <li>体重が減らない、または増えない</li>
                    <li>部活でもっといいパフォーマンスができるように効果的なトレーニングをしたい</li>
                    <li>目標設定の仕方、メニューの作成方法、追い込み方、効かせ方がわからない</li>
                    <li>一人ではモチベーションが続かないので強制力が欲しい</li>
                </ul>
                <div class="diagram-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/excel-diagram.png" alt="今すぐ変わりたい・絶対に結果を出したい・今度こそ変わりたい方にぴったりです">
                </div>
            </div>
            <h3 class="p-h3">あらゆる悩みに対し、専門知識を持ったインストラクターがマンツーマンでサポートいたします！</h3>
            <article class="guidance-content">
                <div class="guidance-title">
                    <h2>エクセルのパーソナルトレーニングは、<span class="red bold">運動&times;食事</span> 両方の指導を受けられるから結果が出る！</h2>
                </div>
                <div class="guidance-inner">
                    <article class="guidance">
                        <div class="guidance-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/personal.jpg" alt="エクセルの運動指導">
                        </div>
                        <div class="guidance-desc">
                            <h2>運動指導</h2>
                            <p class="decolation">EXCERXISE</p>
                            <p>パーソナルトレーニングではトレーナーがあなたの目標をヒアリングし、体の状態をチェックします。</p>
                            <p>体づくりの第一歩は自分の体を知ること。</p>
                            <p>パーソナルトレーニングを受講された方の中には「自分の体がこんな状態だったとは知らなかった」とおっしゃる方も少なくありません。</p>
                            <p>正しい知識と豊富な経験を持つトレーナーが、あなたの状態に合わせたトレーニング方法、負荷の上げ方などを指導しますので、確実にかつ早くトレーニングの効果が得られます。</p>
                            <p>パーソナル終了後には必ず変化を感じていただけると思います。</p>
                        </div>
                    </article>
                    <article class="guidance">
                        <div class="guidance-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/nutrition.jpg" alt="エクセルの食事指導">
                        </div>
                        <div class="guidance-desc">
                            <h2>食事指導</h2>
                            <p class="decolation">NUTRITION</p>
                            <p>トレーニングの効果を最大限に引き出すには正しい食事が重要です。</p>
                            <p>パーソナルトレーニング期間中は毎食の写真をLINEで送っていただき、食事指導と記録、意識付けを行います。</p>
                            <p>つい食べ過ぎてしまって減量できない方や忙しくて簡単な食事ばかりになりがちな方、せっかくトレーニングしているのになかなか筋肉がつかない方も、食事内容を見直すことでトレーニングとの相乗効果が得られます。</p>
                            <p>決して無理な指導はせず、途中で挫折せずに続けていける食事指導をいたします。</p>
                        </div>
                    </article>
                </div>
            </article>

            <div class="personal-price">
                <div class="guidance-title">
                    <h2>パーソナル料金表</h2>
                </div>
                <div class="once">
                    <div class="once-title">
                        <p>1セッション（60分&times;1回）</p>
                    </div>
                    <div class="once-desc">
                        <p class="left">一度だけ受けたい、気になることがあるのでマンツーマンで指導してほしいなど1回限りのご利用をご希望の方</p>
                        <p class="bold once-price">5,000円</p>
                    </div>
                </div>
                <div class="once">
                    <div class="once-title">
                        <p>パーソナル回数券</p>
                    </div>
                    <div class="once-desc">
                        <p class="left">お得なパーソナル回数券！5回分（有効期限2ヶ月）</p>
                        <p class="bold once-price">20,000円</p>
                    </div>
                </div>
                <!-- for mobile -->
                <div class="member-cards">
                    <div class="member-card">
                        <div class="fee-title member-card-hd">
                            1ヶ月コース
                        </div>
                        <div class="member-card-in">
                            <div class="member-card-row">
                                <p>期間</p><p>1ヶ月</p>
                            </div>
                            <div class="member-card-row">
                                <p>内容</p><p class="set-one-line">60分×2回/週（全8回）のトレーニング指導<br>LINEでの食事指導</p>
                            </div>
                            <div class="member-card-row c-price">
                                <p>料金（税込）</p><p class="member-card-price">30,000円<span class="person">（使用料別）</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="member-card">
                        <div class="fee-title member-card-hd">
                            2ヶ月コース
                        </div>
                        <div class="member-card-in">
                            <div class="member-card-row">
                                <p>期間</p><p>2ヶ月</p>
                            </div>
                            <div class="member-card-row">
                                <p>内容</p><p class="set-one-line">60分×2回/週（全16回）のトレーニング指導<br>LINEでの食事指導</p>
                            </div>
                            <div class="member-card-row c-price">
                                <p>料金（税込）</p><p class="member-card-price">50,000円<span class="person">（使用料別）</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- for Desctop -->
                <table class="personal-plans">
                    <tr>
                        <th class="personal-plan">プラン</th>
                        <th class="personal-content">内容</th>
                        <th class="personal-fee">料金（税込）</th>
                    </tr>
                    <tr>
                        <td class="personal-plan f-20">1ヶ月コース</td>
                        <td class="personal-content">60分×2回/週（全8回）のトレーニング指導<br>
                                LINEでの食事指導</td>
                        <td class="personal-fee member-card-price">30,000円<span class="person">（使用料別）</span></td>
                    </tr>
                    
                    <tr>
                        <td class="personal-plan f-20">2ヶ月コース</td>
                        <td class="personal-content">60分×2回/週（全16回）のトレーニング指導<br>
                                LINEでの食事指導</td>
                        <td class="personal-fee member-card-price">50,000円<span class="person">（使用料別）</span></td>
                    </tr>
                </table>
                <div class="personal-priv">
                    <h4 class="left">2ヶ月コース限定特典</h4>
                    <p class="bold">パーソナルメンテナンスコース　30分×6回（1ヶ月）10,000円</p>
                    <p>2ヶ月コースを終了された後にメンテナンスをサポートする<span class="bold">パーソナルメンテナンスコース</span>をご利用いただけます。</p>
                </div>

                <div class="once">
                    <div class="once-title">
                        <p>完全貸切コース</p>
                    </div>
                    <div class="once-desc">
                        <p class="left">営業時間外や定休日に完全マンツーマンでご指導いたします。<br>2ヵ月16回コース　90分／回<br>ペアでのご利用もOKです！（同一時間で）</p>
                        <p class="bold once-price">160,000円（使用料込）</p>
                    </div>
                </div>
            </div>

            <div class="personal-notice">
                <p>パーソナルトレーニングのご利用にはお申し込みとご予約が必要です。</p>
                <p>また、パーソナルをお受けできるのは<span class="underline">毎月5名様まで</span>となっております。</p>
                <p>詳しくは電話か受付でお尋ねください。</p>
            </div>
        </article>
        
        <article id="health-class">
            <article class="health-class">
                <div class="title">
                    <h1 class="lines-on-sides">エクセル健康教室</h1>
                </div>
                <div class="healthclass-desc">
                    <p>エクセルフィットネスセンターでは毎週木曜日に筋トレ、タオル体操、ストレッチを行う健康教室を開催しています。</p>
                    <p>健康教室はジムの会員ではない方でもご利用になれますので、お気軽にご参加ください。</p>
                </div>
                <div id="carouselExampleControls" class="carousel slide slide-width" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active healthclass-img-h">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kenko-class1.jpg" alt="健康教室の様子" class="d-block w-100">
                        </div>
                        <div class="carousel-item healthclass-img-h">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kenko-class2.jpg" alt="健康教室の様子" class="d-block w-100">
                        </div>
                        <div class="carousel-item healthclass-img-h">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kenko-class3.jpg" alt="健康教室の様子" class="d-block w-100">
                        </div>
                        <div class="carousel-item healthclass-img-h">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/kenko-class4.jpg" alt="健康教室の様子" class="d-block w-100">
                        </div>
                    </div>
                    <a href="#carouselExampleControls" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#carouselExampleControls" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                
                <div class="healthclass-details">
                    <div class="healthclass-detail">
                        <p class="yellow-label">料金</p>
                        <p class="inside">1回 500円</p>
                    </div>
                    <div class="healthclass-detail">
                        <p class="yellow-label">時間</p>
                        <p class="inside">毎週木曜日　午後13:30〜14:30</p>
                    </div>
                    <div class="healthclass-detail">
                        <p class="yellow-label">場所</p>
                        <p class="inside">エクセルフィットネスセンター</p>
                    </div>
                    <div class="healthclass-detail">
                        <p class="yellow-label">人数</p>
                        <p class="inside">3〜10名程度</p>
                    </div>
                    <div class="healthclass-content">
                        <p class="yellow-label">内容</p>
                        <ol class="inside">
                            <li>筋トレ</li>
                            <li>タオル体操</li>
                            <li>エアースイミング</li>
                            <li>タオルウォーキング</li>
                            <li>リラクゼーション・ストレッチ</li>
                        </ol>
                    </div>
                </div>
                <p class="center">参加ご希望の方は前日午後6時までに<a href="tel:0987250375">0987-25-0375</a>までお電話でご予約ください。</p>
            </article>
    
            <article class="towel-gymnatics">
                <h2 class="towel-title">タオル体操とは？</h2>
                <div class="towel-gymnatics-inner">
                    <div class="towel-gymnatics-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kenko-class3.jpg" alt="講座の様子">
                    </div>
                    <div class="towelgym-desc">
                        <div class="towelgym-what">
                            <p>タオル体操とは、インストラクターの山田が考案した<span class="bold">ストレッチや筋トレなどの全身運動ができる体操</span>です。</p>
                            <p>ダンベルなどは使用せず長めのタオルのみを使うので、身近にあるもので自分の筋力や体力に合わせた運動ができ、<span class="red">姿勢改善や腰痛予防、肩こり解消、ロコモ予防</span>にぴったりです。</p>
                        </div>
                        <div class="effect">
                            <h3>運動効果</h3>
                            <ol>
                                <li>心肺機能を高め、スタミナのある体を作る</li>
                                <li>血液循環を良くし、代謝機能を高め、組織の働きを良くする</li>
                                <li>筋力を高め、骨格筋の働きを良くする</li>
                                <li>適度に緊張を解消（リフレッシュ）し、精神を安定させる</li>
                                <li>習慣にすることで全身および部分的シェイプアップの効果もある</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </article>

            <article class="media-info">
                <h2 class="towel-title">タオル体操のメディア掲載履歴</h2>
                <div class="media-lines">
                    <div class="media-line">
                        <p class="media-date">2014年4月12日</p>
                        <p class="media-type">ラジオ</p>
                        <p class="media-desc">NHKラジオ第一にて「ふるさと自慢　歌自慢」の「ふるさとの星」として出演し、ゲストの堀内孝雄さんとあさみちゆきさんに「タオル体操」を紹介しました。</p>
                    </div>
                    <div class="media-line">
                        <p class="media-date">2013年6月18日</p>
                        <p class="media-type">テレビ</p>
                        <p class="media-desc">MRT宮崎放送「MRTニュース Next」にてタオル体操の取材を受けました。</p>
                    </div>
                    <div class="media-line">
                        <p class="media-date">2012年4月4日</p>
                        <p class="media-type">テレビ</p>
                        <p class="media-desc">MRT宮崎放送の人気番組「アッパレ！Miyazaki」のスタジオで「ダイナミックシェイプ」の実演を行いました。</p>
                    </div>
                    <div class="media-line">
                        <p class="media-date">2011年4月13日</p>
                        <p class="media-type">テレビ</p>
                        <p class="media-desc">MRT宮崎放送の人気番組「アッパレ！Miyazaki」のスタジオで「エアースイミング」の実演を行いました。</p>
                    </div>
                    <div class="media-line">
                        <p class="media-date">2010年2月19日</p>
                        <p class="media-type">テレビ</p>
                        <p class="media-desc">NHK「いっちゃがTV」に「タオル体操」に生出演しました。</p>
                    </div>
                    <div class="media-line">
                        <p class="media-date">2009年1月20日</p>
                        <p class="media-type">雑誌</p>
                        <p class="media-desc">週刊女性2月3日号のタオル体操のコーナーで当施設が紹介されました。</p>
                    </div>
                    <div class="media-line">
                        <p class="media-date">2008年10月28日</p>
                        <p class="media-type">テレビ</p>
                        <p class="media-desc">MRT宮崎放送の人気番組「アッパレ！Miyazaki」のスタジオでタオル体操の実演を行いました。</p>
                    </div>
                </div>
            </article>

            <article class="visiting-lecture">
                <h2 class="towel-title">健康教室出張講座のご案内</h2>
                <div class="lecture-announce">
                    <div class="lecture-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kenko-class2.jpg" alt="中部病院での講座の様子">
                    </div>
                    <div class="lecture-desc">
                        <p>健康教室は出張での指導もおこなっております。</p>
                        <p>地区の高齢者サロンや公民館での健康講座などにいかがでしょうか？</p>
                        <p>これまでの利用例：介護施設・中部病院・親子会のレクレーションなど</p>
                    </div>
                </div>
                <div class="lecture-details">
                    <div class="lecture-detail">
                        <p class="yellow-label">料金</p>
                        <div class="lecture-column">
                            <p>講師料　2万円</p>
                            <p>日南市民の方は日南市の「すぐれもん講座」ご利用で無料になります。　→詳しくは<a href="" class="link-blue">日南市のHP</a>をご覧ください</p>
                        </div>
                    </div>
                    <div class="lecture-detail">
                        <p class="yellow-label">交通費</p>
                        <div class="lecture-column">
                            <p>日南市内・・・無料</p>
                            <p>日南市外・・・有料（距離に応じて）</p>
                        </div>
                    </div>
                    <div class="healthclass-detail">
                        <p class="yellow-label">出張範囲</p>
                        <p class="lecture-inside">全国どこでも可</p>
                    </div>
                    <div class="healthclass-detail">
                        <p class="yellow-label">お申し込み方法</p>
                        <p class="lecture-inside">お申し込みフォームまたはお電話 <a href="tel:987-25-0375" class="link-blue">0987-25-0375</a>までご連絡ください。ご質問もお待ちしております。</p>
                    </div>
                </div>
            </article>
        </article>


<?php get_footer(); ?>