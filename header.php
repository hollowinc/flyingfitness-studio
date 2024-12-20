<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
    <script>
        (function(d) {
            var config = {
            kitId: 'lhl6hez',
            scriptTimeout: 3000,
            async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
</head>

<body <?php body_class(); ?> id="body">
    <header class="header">
        <div class="header__inner">
            <div class="header__left">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.webp" alt="Studio.com">
                </a>
                <p>
                    気軽に楽しめる岐阜市尻毛の空中ヨガはStudio.COM<br>アットホームで初心者でも安心！
                </p>
            </div>
            <div class="sp-show">
                <ul class="sp-ul">
                    <li>
                        <a href="tel:058-201-6777" class="tel">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header-tel.svg">
                            <p>電話</p>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="lesson">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header-lesson.svg">
                            <div class="btn-txt">
                                <p class="ttl">体験レッスン</p>
                                <p class="notice">のお申込み</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="header__right">
                <ul>
                    <li>
                        <a href="tel:058-201-6777" class="tel">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header-tel.svg">
                            <div class="btn-txt">
                                <p class="number">058-201-6777</p>
                                <p class="notice">営業時間 10：00～22：00 不定休</p>
                            </div>

                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="lesson">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header-lesson.svg">
                            <div class="btn-txt">
                                <p class="ttl">体験レッスン</p>
                                <p class="notice">のお申込みはこちら</p>
                            </div>

                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </header>

    <div class="right-cta">
        <a href="tel:058-201-6777" class="tel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-tel.svg">
            <p>電話</p>
        </a>
        <a href="#contact" class="mail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-mail.svg">
            <p>メ<span>ー</span>ル</p>
        </a>
        <a href="https://reserva.be/studiocom" class="member" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/cta-member.svg">
            <p>会員様</p>
        </a>
    </div>



    <a href="#body" class="totop">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/arrow-top.svg">
        <p>
            TOP
        </p>
    </a>