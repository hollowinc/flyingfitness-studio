<?php get_header(); ?>
<main>
    <section class="fv fv1">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/fv.webp" media="(min-width: 768px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/fv-sp.webp" class="fv-bg" alt="空中ヨガをはじめるならStudio.com">
        </picture>
        <div class="float-cta">
            <div class="inner">
                <div class="p1">
                    <?php the_field('txt1'); ?>
                </div>
                <div class="border">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-border.webp">
                </div>
                <div class="limited">
                    <p><?php the_field('txt2'); ?></p>
                </div>
                <p class="big"><?php the_field('txt3'); ?></p>
                <a href="#campaign">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-bottom-arrow.svg">
                </a>

            </div>
        </div>

    </section>

    <section class="topics sec">
        <div class="topics__inner">
            <div class="topics__ttl">
                <h2>Topics</h2>
                <h6>お知らせ</h6>
            </div>
            <ul>
              <?php
                $news_query = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 3, // 表示したい記事数
                    'orderby' => 'date', // 日付順に並べる
                    'order' => 'DESC' // 最新の投稿から表示
                ]);

                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post();
                        $category = get_the_category(); // 投稿のカテゴリーを取得
                        $thumbnail_url = get_the_post_thumbnail_url() ?: get_template_directory_uri() . '/assets/img/common/noimg.webp';
                        $cat_name = $category ? $category[0]->name : '未分類'; // 最初のカテゴリーの名前
                ?>
                  <li>
                      <a href="<?php the_permalink(); ?>">
                          <div class="img-wrapper">
                              <img src="<?php echo esc_url($thumbnail_url); ?>">
                          </div>
                          <div class="txt-wrapper">
                              <time><?php the_time('Y.m.d'); ?></time>
                              <p class="ttl">
                                  <?php the_title(); ?>
                              </p>
                          </div>
                      </a>
                  </li>
                <?php endwhile;
                    wp_reset_postdata(); // クエリのリセット
                endif;
                ?>
            </ul>

            <div class="btn-wrapper">
                <a href="<?php echo esc_url(home_url('/topics/')); ?>" class="btn">
                    過去のブログを見る
                </a>
            </div>
        </div>
    </section>

    <section class="campaign" id="campaign">
        <div class="campaign__inner">

            <?php get_template_part('template-parts/cta'); ?>
            <?php get_template_part('template-parts/cta2'); ?>

            <div class="btn-flex">
                <a href="<?php the_field('btn1-url');?>" class="btn1" target="_blank" rel="noopener noreferrer">
                    <span><?php the_field('btn1'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/btn-arrow-white.svg">
                </a>
                <a href="<?php the_field('btn2-url');?>" class="btn2" target="_blank" rel="noopener noreferrer">
                    <span><?php the_field('btn2'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/btn-arrow-white.svg">
                </a>
            </div>
            <div class="btn-wrapper">
                <a href="https://www.ajn.co.jp/studio-com/wp-content/uploads/2024/04/91dca0d7c171ce5eceab077fdcd29c55.pdf" class="btn" target="_blank" rel="noopener noreferrer">
                    クラス紹介
                </a>
            </div>
            <div class="box-footer">
                <div class="new-notice">
                  <p>
                    AntiGravity®Fitness(ハンモックフィットネス)体験は、
                    <br><span>☆</span>FUN(基礎クラス)
                    <br><span>★</span>Chill&Relax(リラックスクラス)
                    <br>をお選びください。
                    <br>低空ティシュー・ハンモックを使用しないフロアクラスの中からお好きなクラスをお選びいただけます。
                  </p>
                </div>
                <p class="notice2">
                    ※フロアクラスの体験はヨガマットをご持参ください。（レンタル有り/有料）
                    <br>※再度体験のお客様はご予約の際にお伝えくださいませ。
                    <br>フロント不在時もございます。体験のご予約はメールをぜひご利用くださいませ。
                </p>
                <div class="btns">
                    <a href="tel:058-201-6777" class="btn tel">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-tel.svg">
                        <div class="txt">
                            <p>お気軽にお電話ください</p>
                            <p class="big">058-201-6777</p>
                        </div>
                    </a>
                    <a href="#contact" class="btn mail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-mail.svg">
                        <div class="txt">
                            <p>メールでのお申込み</p>
                        </div>
                    </a>
                </div>
                <p class="notice">スタジオレンタルをご希望の場合はメールより申し込みをお願いします。</p>
                <div class="price-link">
                    <a href="https://www.ajn.co.jp/studio-com/rentalfee/" target="_blank" rel="noopener noreferrer">
                        レンタルスタジオ料金表
                    </a>
                </div>

                <div class="members">
                    <h5>会員様</h5>
                    <div class="txt">
                        <p class="ttl">今月のスケジュール、<br class="sp-show">ご予約はこちら</p>
                        <p class="desc">予約は、パソコン、携帯のウェブ上から<br class="sp-show">受け付けております。</p>
                        <a href="https://reserva.be/studiocom" class="btn" target="_blank" rel="noopener noreferrer">
                            予約する
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="about-sec">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/about-txt.svg" alt="About Aerial  Yoga" class="about-txt">
        <h2>空中ヨガ（フィットネス）<br class="sp-show">とは？</h2>
        <h3>
            空中ヨガはハンモックを使って反重力状態でヨガを行うフィットネス。
            <br>楽しみながらコアトレーニングや、心のバランス調整しましょう
        </h3>
        <p class="desc">
            空中ヨガは、アメリカ・ニューヨーク発祥のアンティグラビティ（反重力）フィットネスのメソッドの一つです。
            <br>ハンモックを使用して行われる全く新しいエクササイズで、今や世界50ヶ国以上で親しまれています。
            <br>いつもは負担に感じてしまう重力を利用した「反重力」を楽しめることが特長で、関節に負担を与えることなく空間を自由自在に動き回ることができる楽しさがあります。そして、このエクササイズを通じて、コアトレーニングや心のバランスの調整、など、その方の目的に合わせた効果を提供します。
            <br>『体を使って動き楽しんでいたら、ふと気付くと健康にキレイになってた♪』 これが空中ヨガ（フィットネス）の『醍醐味』です。年齢や体型に関わらずどなたでもチャレンジできます！ハンモックに乗って逆さになったり、空中でバランスを取りながらポーズをとったり、空中でハンモックに埋もれながら体全てをゆだね、自分の存在を再確認したり。重力からの開放そして健康、美への近道となるはずです。
        </p>
    </section>

    <section class="effect">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/fitness-img.webp" alt="フィットネスをする女性" class="fitness-img">
        <div class="effect__inner">
            <h2><span>空中ヨガ（フィットネス）<br class="sp-show">の効果</span></h2>
            <ul>
                <li>
                    <div class="num">01</div>
                    <h6>体幹強化</h6>
                    <p>
                        初心者でも関節や背骨に負担をかけることなく、余計な力を使わないで体幹を鍛えることができます。
                    </p>
                </li>

                <li>
                    <div class="num">02</div>
                    <h6>筋力強化</h6>
                    <p>
                        空中で浮いてバランスととるため、腕、腹部、胸部、肩などの筋肉を使うことになるから、きれいに筋肉がつきやすくなります。
                    </p>
                </li>

                <li>
                    <div class="num">03</div>
                    <h6>脳の活性化</h6>
                    <p>
                        レッスンはほとんど逆さ向きになった状態で行いますので、頭が下にくることで、血流が促され脳が活性化されます。
                    </p>
                </li>

                <li>
                    <div class="num">04</div>
                    <h6>ストレス解消</h6>
                    <p>
                        無駄な力もぬけますので、リラックス効果があり、さらに力が抜けて呼吸に集中ができます。副交感神経が優位になりストレス解消ができます。
                    </p>
                </li>

                <li>
                    <div class="num">05</div>
                    <h6>リラックス効果</h6>
                    <p>
                        レッスンはほとんど逆さ向きになった状態で行いますので、頭が下にくることで、血流が促され脳が活性化されます。
                    </p>
                </li>

                <li>
                    <div class="num">06</div>
                    <h6>ストレッチ効果</h6>
                    <p>
                        普段はできないポーズをすることで、身体が極限まで伸びてスッキリします。ハンモックを使うことで体が硬い方でも楽にポーズを行うことができます。
                    </p>
                </li>
            </ul>
            <div class="img-wrapper">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/fitness-effect-main.webp" media="(min-width: 768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/fitness-effect-main-sp.webp" class="fv-bg" alt="楽しい・美・リラックス・健康">
                </picture>
            </div>
        </div>
    </section>

    <section class="recommend">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/osusume.webp" class="recommend-bg">
        <div class="recommend__inner">
            <div class="box">
                <h4>空中ヨガ（フィットネス）は</h4>
                <h2>こんな方に<span>おすすめ！</span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/osusume-arrow.webp">
                <div class="lists">
                    <ul>
                        <li><span>姿勢</span>をよくしたい</li>
                        <li><span>肩こり、腰痛</span>に<br class="sp-show">悩んでいる</li>
                        <li>激しい<span>運動が嫌い</span></li>
                        <li><span>汗</span>はかきたくない</li>
                        <li>程よく<span>筋肉</span>を<br class="sp-show">つけたい</li>
                    </ul>
                    <ul>
                        <li><span>体幹</span>を鍛えたい</li>
                        <li><span>美body</span>を<br class="sp-show">手に入れたい</li>
                        <li><span>キレイ</span>になりたい</li>
                        <li>自分を<span>変えたい</span></li>
                        <li><span>ワクワク</span>したい</li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="desc">
            特に女性の方にオススメです。
            <br>楽しみながら身体を鍛えることができます。
            <br>空中で味わう不思議な世界をぜひ体感してみてください♪
        </p>
    </section>

    <section class="feature-sec">
        <div class="feature-sec__inner">
            <div class="gifu">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/gifu.svg" alt="岐阜初">
            </div>
            <div class="ttls">
                <p class="ttl"><span class="sp1">本格空中フィットネスクラブ</span></p>
                <p class="ttl ttl2"><span class="sp1">Studio.COMの<span>特長</span></span></p>
            </div>
            <ul class="feature-list">
                <li>
                    <p class="p1">
                        特徴<span>01</span>
                    </p>
                    <p class="p2">
                        <span>何か始めてみたい方に</span>
                    </p>
                    <p class="p2 p3">
                        <span>ぴったりのフィットネス！</span>
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/feature1.webp" alt="難しいことは何もありません！">
                </li>

                <li>
                    <p class="p1">
                        特徴<span>02</span>
                    </p>
                    <p class="p2">
                        <span>見晴らしのよい</span>
                    </p>
                    <p class="p2 p3">
                        <span>スタジオ♪</span>
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/feature2.webp" alt="開放感ばっちり！ストレス解消">
                </li>

                <li>
                    <p class="p1">
                        特徴<span>03</span>
                    </p>
                    <p class="p2">
                        <span>アットホームで</span>
                    </p>
                    <p class="p2 p3">
                        <span>初心者でも安心♡</span>
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/feature3.webp" alt="明るいインストラクターが待っています！">
                </li>
            </ul>
        </div>
    </section>

    <section class="instagram">
        <div class="instagram__inner">
            <div class="img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/insta.svg" alt="Instagram">
            </div>
            <h2>教室の様子</h2>
            <div class="flex">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/insta-img.webp" alt="Instagram画像">
            </div>
            <div class="insta-btn">
                <a href="https://www.instagram.com/studiodotcom/" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/insta2.svg">
                    Follow me Instagram
                </a>
            </div>
        </div>
    </section>

    <section class="media">
        <div class="media__inner">
            <div class="ttl">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/media-fukidashi.webp">
                <h2>テレビやメディアでも<br class="sp-show">話題沸騰中です！</h2>
            </div>

            <div class="inner-inner">
                <div class="ttl-wrapper">
                    <h3>
                        <span class="sp1">多くの芸能人や、<br class="sp-show">モデル、海外セレブ等が<br><span class="sp2">空中ヨガ</span>にはまっています。</span>
                    </h3>
                </div>
                <p>
                    綾瀬はるかさん（ぴったんこカンカン）や新垣結衣さん（嵐にしやがれ）、市川由衣さん、米倉涼子さん、<br class="sp-hide">剛力彩芽さん、道端アンジェリカさん、ローラさんといった多くの女性芸能人がはまっているそうです。<br class="sp-hide">また、テレビ番組や雑誌にも取り上げられています。
                </p>
                <div class="flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/media-img1.webp" alt="TBS・白熱ライブビビットにて紹介されました。">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/media-img2.webp" alt="フジテレビ・バイキングにて紹介されました。">
                </div>
            </div>

        </div>
    </section>

    <section class="campaign">
        <div class="campaign__inner">
            <?php get_template_part('template-parts/cta1'); ?>
            <?php get_template_part('template-parts/cta2'); ?>

            <div class="btn-flex">
                <a href="<?php the_field('btn1-url');?>" class="btn1" target="_blank" rel="noopener noreferrer">
                    <span><?php the_field('btn1'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/btn-arrow-white.svg">
                </a>
                <a href="<?php the_field('btn2-url');?>" class="btn2" target="_blank" rel="noopener noreferrer">
                    <span><?php the_field('btn2'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/btn-arrow-white.svg">
                </a>
            </div>
            <div class="btn-wrapper">
                <a href="https://www.ajn.co.jp/studio-com/wp-content/uploads/2024/04/91dca0d7c171ce5eceab077fdcd29c55.pdf" class="btn" target="_blank" rel="noopener noreferrer">
                    クラス紹介
                </a>
            </div>
            <div class="box-footer">
                <div class="new-notice">
                  <p>
                    AntiGravity®Fitness(ハンモックフィットネス)体験は、
                    <br><span>☆</span>FUN(基礎クラス)
                    <br><span>★</span>Chill&Relax(リラックスクラス)
                    <br>をお選びください。
                    <br>低空ティシュー・ハンモックを使用しないフロアクラスの中からお好きなクラスをお選びいただけます。
                  </p>
                </div>
                <p class="notice2">
                    ※フロアクラスの体験はヨガマットをご持参ください。（レンタル有り/有料）
                    <br>※再度体験のお客様はご予約の際にお伝えくださいませ。
                    <br>フロント不在時もございます。体験のご予約はメールをぜひご利用くださいませ。
                </p>
                <div class="btns">
                    <a href="tel:058-201-6777" class="btn tel">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-tel.svg">
                        <div class="txt">
                            <p>お気軽にお電話ください</p>
                            <p class="big">058-201-6777</p>
                        </div>
                    </a>
                    <a href="#contact" class="btn mail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-mail.svg">
                        <div class="txt">
                            <p>メールでのお申込み</p>
                        </div>
                    </a>
                </div>
                <p class="notice">スタジオレンタルをご希望の場合はメールより申し込みをお願いします。</p>
                <div class="price-link">
                    <a href="https://www.ajn.co.jp/studio-com/rentalfee/" target="_blank" rel="noopener noreferrer">
                        レンタルスタジオ料金表
                    </a>
                </div>

                <div class="members">
                    <h5>会員様</h5>
                    <div class="txt">
                        <p class="ttl">今月のスケジュール、<br class="sp-show">ご予約はこちら</p>
                        <p class="desc">予約は、パソコン、携帯のウェブ上から<br class="sp-show">受け付けております。</p>
                        <a href="https://reserva.be/studiocom" class="btn" target="_blank" rel="noopener noreferrer">
                            予約する
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="fv">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/kaso-fv.webp" media="(min-width: 768px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/kaso-fv.webp" class="fv-bg" alt="Studio.com">
        </picture>


    </section>

    <section class="instructor">
        <div class="instructor__inner">
            <div class="ttl">
                <h2>Instructor</h2>
                <h6>インストラクターご紹介</h6>
            </div>
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst1.webp" alt="Mayu">
                    <div class="txt">
                        <p class="desc">歯科衛生士として仕事をしてきて結婚、出産し、子供も少し手が離れ自分を見つめる時、出逢ったのがこのAntiGravity®でした。 輝いて笑顔でいたいです！ そして出逢いに感謝！！</p>
                        <div class="bg-blue">
                            <p>日々の忙しさはさまざまで違うけれど、ハリソン・アンティグラビティー・ハンモックに揺られている時は楽しく一緒に揺られていきましょう♪</p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst2.webp" alt="Yuki!ko">
                    <div class="txt">
                        <p class="desc">
                            歯科技工士・医療事務・登録販売者・ZUMBAインストラクター。
                            <br>資格はいろいろありますが…。
                            <br>身体のバランスが取れなくなり、自分自身を見つめ直した時出会ったのが
                            <br>ANTI GRAVITY®FITNESS‼
                            <br>心と身体が開放し癒され、楽しすぎて笑顔が止まらなかった。
                            <br>純粋な喜びと興奮を人に伝えていきたいと思い、インストラクターを志願！
                            <br>その際に手を差し伸べてくださった先輩インストラクターとStudio.COM。ANTI GRAVITY®を通して繋がる事が出来た仲間の支えがあって、伝える側へ。
                            <br>ANTI GRAVITY®に感謝！！出会いに感謝！！
                            <br>ANTI GRAVITY®を多くの人に伝える事で"pay it foward ！！"恩送り
                        </p>
                        <div class="bg-blue">
                            <p>
                                一緒に心と身体を開放してみませんか？
                                <br>ANTI GRAVITY®クラスに来るだけで、あなた自身のケアをすることになり、頑張るあなたに力を与え心を豊かにしてくれます。
                                <br>SHOWING UP　出席するだけであなたは成功者なので!!共に"Fly High!!"
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst3.webp" alt="Misato">
                    <div class="txt">
                        <p class="desc">
                            新しい道を探しているとき目に留まったAntiGravity®fitness。
                            <br>心惹かれてインストラクターに。
                        </p>
                        <div class="bg-blue">
                            <p>
                                心と身体を軽やかに
                                <br>より健康でより幸せに
                                <br>毎日をHappyにしていきましょう
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst4.webp" alt="Mariko">
                    <div class="txt">
                        <p class="desc">
                            三児の母、産後に出逢ったバランスボール。
                            <br>当たり前になりがちだった、身体とココロの不調に気がつく。
                            <br>有酸素運動を続けることで毎日を元気に過ごすことができることを実感。
                            <br>楽しく継続できるよう、パワー全開で笑顔のレッスンをお届けします！
                        </p>
                        <div class="bg-blue">
                            <p>
                                バランスボールで楽しく弾んで、身体と心をリフレッシュ！！
                                <br>正しい姿勢で体幹キープしていきましょう！
                                <br>わたしの笑顔にぜひ逢いにきてください！！
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst5.webp" alt="Tomomi">
                    <div class="txt">
                        <p class="desc">
                            産前産後、体力もなく心もカラダもピリピリ、ボロボロの状態の私でした。
                            <br>2人目の産後2年目でバランスボールとの出会いがありました。
                            <br>バランスボールで弾む度に心とカラダが満たされスッキリする感覚を実感。
                            <br>5年の月日が経っても、バランスボールが大好きでインストラクターの先生のキラキラ感がたまらなくて、私もなりたい！とインストラクターへ。
                            <br>運動習慣が無かった私が毎日弾み、体力がつきカラダが整うと心が晴れ家族の為だけでなく、視野を広げた自分らしい生き方をみつけられました。
                            <br>バランスボールは有酸素運動の中でも一番と言っていいほど効率よく全身の筋肉、体幹を鍛えながら脳トレをし、心もカラダも整えることが出来る為おススメです。
                            <br>
                            <br>自営業では建築関係の仕事であるため足場をのぼったりしています。
                            <br>バランスボールで体幹が鍛えられているため、とても軽々と足場をのぼれるし、体力がついているため少々キツくても平気で、パワフルに仕事ができます。
                            <br>持ち前の明るさで、パワフルに楽しくレッスンします！！よろしくお願い致します。
                        </p>
                        <div class="bg-blue">
                            <p>
                                会員さんへ
                                <br>弾めば　整う　ココロとカラダ。
                                <br>是非一度、体感してみて欲しいです。
                                <br>新しい自分に出会えるかも。
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst6.webp" alt="Asumi">
                    <div class="txt">
                        <p class="desc">
                            3人の子宝に恵まれて幸せ絶頂のはずだったのですが…現実はボロボロでした。腰痛、膝痛、頭痛、イライラ、鬱々、若年性更年障害、家族の病気、何も上手くいきませんでした。
                            <br>
                            <br>この全ての不調を改善したい！負けたくない！身体と心について一から勉強しました。様々な出会いとご縁でエアロビクス、ショートアクア、バレトンの資格をとり今の自分がいます。変えたい、変わりたいという気持ちで歩んできました。今は全ての出来事と周りの人に感謝しています。
                            <br>鬼は自分。福も自分。
                        </p>
                        <div class="bg-blue">
                            <p>
                                自分を大事にして下さい。
                                <br>自分を大事にして健康であれば皆さんの周りも自分もどんどん幸せになります。
                                <br>Studio.COMのレッスンでそのお手伝いをさせて下さい。
                                <br>お待ちしてます！！
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst7.webp" alt="Kayoko">
                    <div class="txt">
                        <p class="desc">
                            ストレッチ感覚で始めたヨガですが、身体が心地よく伸び広がり、
                            <br>心身共に癒されるヨガに魅力を感じインストラクターの資格を取得。
                            <br>
                            <br>全米ヨガアライアンスRYT500
                            <br>IHTA認定ヨガインストラクター1級
                            <br>IHTA認定ヨガインストラクター2級
                            <br>IHTA認定リストラティブヨガインストラクター
                            <br>IHTA認定小顔フェイシャルヨガインストラクター
                            <br>IHTA認定シニアヨガインストラクター
                            <br>AEAJ認定アロマテラピー1級
                        </p>
                        <div class="bg-blue">
                            <p>
                                心を込めて丁寧にヨガを伝えます。
                                <br>スタジオ.コムでお待ちしています。
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst8.webp" alt="Mamina">
                    <div class="txt">
                        <p class="desc">
                            ヨガと出会い素敵な出会いが生まれいまのわたしが在ります。
                            <br>AntiGravity®もそのひとつ。
                        </p>
                        <div class="bg-blue">
                            <p>
                                大切なつながりに感謝を込めて、HAVE FUN!!
                                <br>純粋に楽しみ、LOVE YOUR SELF
                                <br>ただ、愛すること。
                                <br>みなさんと共有できますように。
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst9.webp" alt="Natsuki">
                    <div class="txt">
                        <p class="desc">
                            仕事での肩こりがきっかけで友達と始めたヨガ。
                            <br>ヨガに夢中になりました。
                            <br>頭の中でいろんなことを考えるスペースがないくらい夢中になってヨガができました。
                            <br>もっと知りたいから伝えたいに変わりアライアンス取得しました。
                            <br>
                            <br>全米ヨガアライアンス　RYT200
                            <br>IHTAヨガインストラクター1級、2級
                            <br>IHTAピラティスインストラクター
                        </p>
                        <div class="bg-blue">
                            <p>
                                みなさんと一緒に今の自分と向き合う時間、そしてhappyになれる時間を過ごしたいです。
                                <br>スタジオでお待ちしています。
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst10.webp" alt="Rikako">
                    <div class="txt">
                        <p class="desc">
                            Studio.COMで低空ティシューに出会い、楽しさを伝えたいとその後インストラクターへ
                        </p>
                        <div class="bg-blue">
                            <p>
                                普段の生活の中で体験できない世界を！
                                <br>一緒に楽しみましょう!!
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/inst11.webp" alt="Nobu">
                    <div class="txt">
                        <p class="desc">
                            会社員として働く中で、体質改善・健康維持を目的としてはじめたヨガ。
                            <br>いつの間にかヨガの魅力にハマり込み、
                            <br>今ではかけがえのないものになりました。
                            <br>
                            <br>日常にある『不調の元』に気づき、向き合い、癒す。
                            <br>というヨガの実践を重ねてきた経験を、
                            <br>インストラクターとして皆様に伝え共有していきたいです。
                            <br>皆様との出会いに感謝いたします。
                            <br>
                            <br>全米ヨガアライアンスRYT200
                        </p>
                        <div class="bg-blue">
                            <p>
                                ヨガをされる方・興味を持たれた方の日常が穏やかで輝かしいものになるべく、ヨガはその一翼を担うものだと考えます。
                                <br>スタジオドットコムのレッスンを通して、心身を整え、毎日を楽しみ、輝かせていきましょう！
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <section class="voice">
        <div class="voice__inner">
            <div class="ttl">
                <h2>Voice</h2>
                <h6>体験者の声</h6>
            </div>
            <div class="ttl2">
                <h3>
                    <span>空中ヨガの体験をされた方が</span>
                </h3>
                <h3>
                    <span>身体の変化を実感しています！</span>
                </h3>
            </div>
            <ul>
                <li>
                    <div class="num">Voice<span>01</span></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/voice1.webp" alt="ヤマザキサヤコさん">
                    <div class="txt">
                        <h5><span>童心にかえったように<br class="sp-show">楽しめて感動！</span></h5>
                        <p>
                            一見難しそう…と思っていたのですが、童心に帰ったように楽しめて感動！逆さまになって、体に血液が巡っていくのを感じ、終わった後はとってもすっきりしました。ブランコのように乗って、こいでみたり、空を飛んだようなポーズだったり、お母さんのお腹にいた時の様な瞑想ポーズだったり、盛りだくさんの内容。背筋が伸びて身長が伸びた感覚も。ひとつひとつのポーズが出来たことの喜びもあって、なんだかはまりそうです！
                        </p>
                    </div>
                </li>

                <li>
                    <div class="num">Voice<span>02</span></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/voice2.webp" alt="ナカツガワタカコさん">
                    <div class="txt">
                        <h5><span>レッスン後、驚くくらいの<br class="sp-show">デトックス効果を体感</span></h5>
                        <p>
                            ハンモックと床に全面的に体をあずけるので、全く”がんばる”ことなく全身をストレッチ出来ます。体も頭もゆるゆる状態！それでもしっかりと体をねじる、伸ばすので、他のクラスとは違う爽快感を味わう事ができました。レッスン後、驚くくらいのデトックス効果を体感しました。体の中の状態、骨盤の位置、背骨のひとつひとつを感じながら指先、足先を思いっきり伸ばしていくリストラティブはAntiGravity®を続けていく上で、基本にしたい体をニュートラルにする大事なレッスンだと思っています。
                        </p>
                    </div>
                </li>

                <li>
                    <div class="num">Voice<span>03</span></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/voice3.webp" alt="ニッタアヤさん">
                    <div class="txt">
                        <h5><span>重力を使って行なう<br class="sp-show">ヨガはやっぱり違う！</span></h5>
                        <p>
                            普通のヨガは受けた事がありますが、重力を使って行なうヨガはやっぱり違う！と感じました。ハンモックの上で行なうために、バランス感覚が必要だったり、重力とハンモックに体を委ねて行なうストレッチ、ハンモックに包まれながら行なう瞑想もなど、今までのヨガとは違った要素があって斬新。コアトレーニングや瞑想のためにも、継続して受けてみたいと思いました。
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="manzoku">
        <div class="manzoku__inner">
            <div class="ttl">
                <p class="p1"><span>Studio.com</span>の</p>
                <p class="p2"><span>空中ヨガの体験レッスン</span>を受けた方に</p>
                <p class="p3"><span>アンケート</span>を取ったところ</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/manzoku-fukidashi.webp">
            </div>
            <div class="main-img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/manzoku.webp" media="(min-width: 768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/manzoku-sp.webp" class="fv-bg" alt="">
                </picture>
            </div>
            <div class="txt">
                <p>ほとんどの方が<br class="sp-show">空中ヨガを試して</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/manzoku-txt.svg" alt="満足度95%">
                <p>と答えていただきました！</p>
            </div>
        </div>
        <div class="manzoku__inner2">
            <div class="img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/dot.svg">
            </div>
            <div class="message">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/manzoku-message.webp" media="(min-width: 768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/manzoku-message-sp.webp" class="fv-bg" alt="メッセージ">
                </picture>
            </div>
            <div class="limited">
                <h3><span>募集人数には限りがあります！</span></h3>
                <h4>
                    今なら<span>お得に</span>体験することが可能です。
                </h4>
                <div class="box">
                    <p>
                        体験キャンペーンの<span><br class="sp-show">募集人数には限りがあります。</span>
                        <br><span>定員が埋まり次第終了</span>し、以後は全て通常価格でのサービス提供となり、
                        <br>特典も適用が出来なくなります。
                        <br>空中ヨガを体感するなら<br class="sp-show"><span>今が絶好のチャンス！</span>
                        <br>ぜひこの機会を見逃さないで下さい。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="campaign">
        <div class="campaign__inner">
            <?php get_template_part('template-parts/cta1'); ?>
            <?php get_template_part('template-parts/cta2'); ?>

            <div class="btn-flex">
                <a href="<?php the_field('btn1-url');?>" class="btn1" target="_blank" rel="noopener noreferrer">
                    <span><?php the_field('btn1'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/btn-arrow-white.svg">
                </a>
                <a href="<?php the_field('btn2-url');?>" class="btn2" target="_blank" rel="noopener noreferrer">
                    <span><?php the_field('btn2'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/btn-arrow-white.svg">
                </a>
            </div>
            <div class="btn-wrapper">
                <a href="https://www.ajn.co.jp/studio-com/wp-content/uploads/2024/04/91dca0d7c171ce5eceab077fdcd29c55.pdf" class="btn" target="_blank" rel="noopener noreferrer">
                    クラス紹介
                </a>
            </div>
            <div class="box-footer">
                <div class="new-notice">
                  <p>
                    AntiGravity®Fitness(ハンモックフィットネス)体験は、
                    <br><span>☆</span>FUN(基礎クラス)
                    <br><span>★</span>Chill&Relax(リラックスクラス)
                    <br>をお選びください。
                    <br>低空ティシュー・ハンモックを使用しないフロアクラスの中からお好きなクラスをお選びいただけます。
                  </p>
                </div>
                <p class="notice2">
                    ※フロアクラスの体験はヨガマットをご持参ください。（レンタル有り/有料）
                    <br>※再度体験のお客様はご予約の際にお伝えくださいませ。
                    <br>フロント不在時もございます。体験のご予約はメールをぜひご利用くださいませ。
                </p>
                <div class="btns">
                    <a href="tel:058-201-6777" class="btn tel">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-tel.svg">
                        <div class="txt">
                            <p>お気軽にお電話ください</p>
                            <p class="big">058-201-6777</p>
                        </div>
                    </a>
                    <a href="#contact" class="btn mail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-mail.svg">
                        <div class="txt">
                            <p>メールでのお申込み</p>
                        </div>
                    </a>
                </div>
                <p class="notice">スタジオレンタルをご希望の場合はメールより申し込みをお願いします。</p>
                <div class="price-link">
                    <a href="https://www.ajn.co.jp/studio-com/rentalfee/" target="_blank" rel="noopener noreferrer">
                        レンタルスタジオ料金表
                    </a>
                </div>

                <div class="members">
                    <h5>会員様</h5>
                    <div class="txt">
                        <p class="ttl">今月のスケジュール、<br class="sp-show">ご予約はこちら</p>
                        <p class="desc">予約は、パソコン、携帯のウェブ上から<br class="sp-show">受け付けております。</p>
                        <a href="https://reserva.be/studiocom" class="btn" target="_blank" rel="noopener noreferrer">
                            予約する
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="faq">
        <div class="faq__inner">
            <div class="ttl">
                <h2>Q<span>&</span>A</h2>
                <h6>よくある質問</h6>
            </div>
            <ul>
                <li>
                    <div class="q">
                        <p class="en">Q.</p>
                        <p class="ja">参加するときの服装は？</p>
                    </div>
                    <div class="answer">
                        <p class="en">
                            A.
                        </p>
                        <div class="txt">
                            <p class="big">動きやすい服装をお勧め致します。</p>
                            <p class="desc">
                                動きやすい服装、スパッツやレギンスなどの長ズボン、上着は長袖or半袖などの脇が隠れる服をお勧め致します。
                                <br>布やリングと肌の摩擦を防ぐため）ファスナーなど突起のついた服装も避けて頂いております。
                                <br>布が破けてしまう恐れがあります。
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="q">
                        <p class="en">Q.</p>
                        <p class="ja">お支払いにクレジットカードは使えますか？</p>
                    </div>
                    <div class="answer">
                        <p class="en">
                            A.
                        </p>
                        <div class="txt">
                            <p class="big">はい。ご利用頂けます。</p>
                            <p class="desc">
                                入会時の会費は現金もしくはクレジットカードでのお支払でお願いします。
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="q">
                        <p class="en">Q.</p>
                        <p class="ja">体験レッスンで気をつける事はありますか？</p>
                    </div>
                    <div class="answer">
                        <p class="en">
                            A.
                        </p>
                        <div class="txt">
                            <p class="big">初めての方は、予約時間の20分前にはご来店ください。</p>
                            <p class="desc">
                                レッスン前のお食事は、約2時間空けていただく事をお勧めしております。
                                <br>初回レッスンに要する所要時間の目安は、約2時間です。
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <section class="price-sec">
        <div class="ttl">
            <h2>Price</h2>
            <h6>料金</h6>
        </div>
        <div class="price-sec__inner">

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th class="th1"></th>
                            <th class="th2">価格（税込）</th>
                            <th class="th3">体験当日特典</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="td1">
                                入会金
                            </td>
                            <td class="td2">
                                5,500円
                            </td>
                            <td class="td3" rowspan="6">
                                <p>入会金</p>
                                <p class="big">無料</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">
                                フルマンスリー会員
                            </td>
                            <td class="td2">
                                13,200円
                            </td>
                        </tr>
                        <tr>
                            <td class="td1 rec">
                                プチマンスリー会員（月5回）
                            </td>
                            <td class="td2">
                                9,900円
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">
                                プチプチマンスリー会員（月3回）
                            </td>
                            <td class="td2">
                                7,700円
                            </td>

                        </tr>
                        <tr>
                            <td class="td1">
                                フロアマンスリー会員(月3回）
                            </td>
                            <td class="td2">
                                6,600円
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">
                                共通回数券6回券
                            </td>
                            <td class="td2">
                                17,160円
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">
                                ドロップイン<br class="sp-show">（非会員）
                            </td>
                            <td class="td2">
                                ハンモック　3,300円
                                <br>フロアヨガ　3,300円
                                <br>低空ティシュー　3,300円
                            </td>
                        </tr>
                        <tr>
                            <td class="td1">
                                初回体験レッスン
                            </td>
                            <td class="td2">
                                通常1回3,300円
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <section class="access">
        <div class="access__inner">
            <div class="ttl">
                <h2>Access</h2>
                <h6>アクセス</h6>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.6684186362927!2d136.7093655!3d35.4382431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003ac532b0abe27%3A0xd270991081fa4ad8!2z44CSNTAxLTExNTEg5bKQ6Zic55yM5bKQ6Zic5biC5bed6YOo77yS5LiB55uuIOOCouOCr-OCouODrOOCrOODvOODrA!5e0!3m2!1sja!2sjp!4v1732077438569!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="detail">
                <p class="tenpo">尻毛店</p>
                <p>
                    岐阜市川部2-71-3アクアレガーレstage1 1F
                </p>
            </div>
            <div class="btn-wrapper">
                <a href="tel:058-201-6777" class="tel">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header-tel.svg">
                    <div class="btn-txt">
                        <p class="number">058-201-6777</p>
                        <p class="notice">営業時間 10：00～22：00 不定休</p>
                    </div>

                </a>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="contact__inner">
            <h2>メールでのお申込み</h2>
            <p class="desc">
                担当者よりご確認後、電話またはメールにてご連絡させて頂きます。
                <br>体験スケジュールからご希望のレッスン・日時をご確認の上ご予約をお願いします。
            </p>

            <div class="btn-flex">
                <a href="<?php the_field('btn1-url');?>" class="btn1" target="_blank" rel="noopener noreferrer">
                    <span><?php the_field('btn1'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/btn-arrow-white.svg">
                </a>
                <a href="<?php the_field('btn2-url');?>" class="btn2" target="_blank" rel="noopener noreferrer">
                    <span><?php the_field('btn2'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/btn-arrow-white.svg">
                </a>
            </div>
            <p class="notice">「<span>※</span>」マークは必須項目となります。必ずご入力下さい。</p>
            <?php the_content(); ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>