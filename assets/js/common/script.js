
jQuery(function($){

  //スムーススクロール
  $(function() {
    const rootFontSize = parseFloat($('html').css('font-size'));
    
    function smoothScrollTo(targetSelector) {
        let target = $(targetSelector.length ? targetSelector : '[name=' + targetSelector.slice(1) + ']');
        if (target.length) {
            const isDesktop = window.matchMedia("(min-width: 768px)").matches;
            const adjustment = isDesktop ? -12 * rootFontSize : -12 * rootFontSize; 
            $('html, body').animate({
                scrollTop: target.offset().top + adjustment
            }, 1000);
        }
    }

    // 既存のクリックイベント
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            smoothScrollTo(this.hash);
            return false;
        }
    });

    // ページ読み込み時にハッシュがあればスムーススクロール
    if (window.location.hash) {
        setTimeout(function() {
            smoothScrollTo(window.location.hash);
        }, 500);  
    };
  });

  //ヘッダーメニューアニメーション
//  $( function() {
//      $( '.hamburger' ).on( 'click', function(e){
//          e.preventDefault();
//          $(this).toggleClass('active');
//          $('.header__right').toggleClass('active');
//          $('.header').toggleClass('active');
          
//      });

//      $( '.header a' ).on( 'click', function(){
//          $('.hamburger').removeClass('active');
//          $('.header__right').removeClass('active');
//          $('.header').removeClass('active');

//      });

//  });

  //ヘッダー・CTAの表示非表示を制御
  $(window).scroll(function() {
      var fvTop = $('.fv1').offset().top; 
      var headerHeight = $('.fv1').outerHeight() / 4;
      var scrollPos = $(this).scrollTop(); 
      
      // fvの4分の1が画面外に出た場合、CTAとヘッダーにクラスを付与
      if(scrollPos > fvTop + headerHeight) {
          $('header').addClass('scrolled');
          $('.right-cta').addClass('scrolled');
          $('.totop').addClass('scrolled');
      } else {
          $('header').removeClass('scrolled');
          $('.right-cta').removeClass('scrolled');
          $('.totop').removeClass('scrolled');
      }
  });

  $.get("https://holidays-jp.github.io/api/v1/date.json", function(holidaysData) {
    $("#date1 , #date2").datepicker({
      dayNames: ['日','月','火','水','木','金','土'],
      dateFormat: 'yy/mm/dd',
      changeMonth:true,
      monthNames: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
      monthNamesShort:  ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
      showMonthAfterYear: true,
      minDate: 0, // 過去の日付は選択不可
    });
  
});

    

});
