jQuery(function () {
    //スムーススクロール
    jQuery('a[href^="#"]').click(function () {
        var speed = 500;
        var href = jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        jQuery("html, body").animate({
            scrollTop: position
        }, speed, "swing");
        return false;
    });
    jQuery('.navi_btn').on('click', function () {
        jQuery('body').toggleClass('active');
    });
    //progress bar
    var imgNum = imagesLoaded('body').images.length;
    var loadedImg = 0;
    var progressNowPosition = 0;
    Timer = setInterval(progressMonitor, 1000 / 50);
    imagesLoaded('body').on('progress', function () {
        loadedImg++;
    });

    function progressMonitor() {
        var progressPosition = (loadedImg / imgNum) * 100;
        progressNowPosition += (progressPosition - progressNowPosition) * 0.1;
        jQuery('#progress_bar').css('width', progressNowPosition + '%');
        jQuery('#progress_txt').text(Math.floor(progressNowPosition) + '%');
        if (progressNowPosition >= 100) {
            clearInterval(Timer);
            jQuery('#progress').fadeOut(1000, function () {
                jQuery('main').fadeIn(1000);
            });
        }
        if (progressNowPosition > 99.9) {
            progressNowPosition = 100;
        }
    }


});



jQuery(function (jQuery) {

    /**
     *
     * スライド
     */
    var jQuerySlide = jQuery('.gallery'),
        jQuerymainSlide = jQuery('#main_fallery'),
        jQuerymainSlidebtnWrap = jQuery('.mainslide_button_wrap'),
        jQuerymainSlideCell = jQuery('#main_slide_wrapper .gallery-cell'),
        setMainBtn = function () {
            // メインギャラリー　ボタンサイズ
            var width = (jQuery(this).width() - jQuerymainSlideCell.width()) / 2,
                height = jQuerymainSlideCell.height();
            jQuerymainSlidebtnWrap.css({
                width: width,
                height: height
            });
        };


    // フッターの位置を取得
    jQuery(window).on({
        resize: function () {

            setMainBtn();

        }
    });



    jQuery('.mainslide_button_wrap').show();


    // メインのスライドセット
    jQuerySlide.flickity({
        // options
        contain: false, //
        prevNextButtons: false, // 次、前のボタン
        wrapAround: true, // 無限スクロール
        draggable: true, // ドラッグやフリック
        resizeBound: true, // リサイズされた時のサイズ変更の有無
        pageDots: false, //ページドット
        // initialIndex: Math.floor(Math.random() * slideLen),//始まりの画像 ランダム
        autoPlay: false
    });


    var slideHeight = jQuerymainSlideCell.height();
    jQuerymainSlide.find('.flickity-viewport').css('height', slideHeight);



    setMainBtn();





    /**
     *
     * next preview
     */
    var jQuerydisco_slide = jQuery('#disco_gallery'),
        jQuerydisco_slidebtnWrap = jQuery('.disco_slide_button_wrap'),
        jQuerydisco_slideCell = jQuery('#disco_gallery .gallery-cell');


    var isTouch = ('ontouchstart' in window);

    // メイン
    jQuery('#mainslide_previous').on({
        'touchstart mousedown': function (e) {
            e.preventDefault();
            this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
            this.pageY = (isTouch ? event.changedTouches[0].pageY : e.pageY);
        },
        'touchmove mousemove': function (e) {
            e.preventDefault();
        },
        'touchend mouseup': function (e) {
            jQuery('#main_gallery').flickity('previous', true);
        }
    });

    jQuery('#mainslide_next').on({
        'touchstart mousedown': function (e) {
            e.preventDefault();
            this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
            this.pageY = (isTouch ? event.changedTouches[0].pageY : e.pageY);
        },
        'touchmove mousemove': function (e) {
            e.preventDefault();
        },
        'touchend mouseup': function (e) {
            jQuery('#main_gallery').flickity('next', true);
        }
    });



    // ディスコ
    jQuery('.previous').on({
        'touchstart mousedown': function (e) {
            e.preventDefault();
            this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
            this.pageY = (isTouch ? event.changedTouches[0].pageY : e.pageY);
        },
        'touchmove mousemove': function (e) {
            e.preventDefault();
        },
        'touchend mouseup': function (e) {
            jQuery('#disco_gallery').flickity('previous', true);
        }
    });

    jQuery('.next').on({
        'touchstart mousedown': function (e) {
            e.preventDefault();
            this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
            this.pageY = (isTouch ? event.changedTouches[0].pageY : e.pageY);
        },
        'touchmove mousemove': function (e) {
            e.preventDefault();
        },
        'touchend mouseup': function (e) {
            jQuery('#disco_gallery').flickity('next', true);
        }
    });




    jQuery('.disco_slide_button_wrap').show();



    jQuery(window).on({
        load: function () {

            // Flickity リンク


            jQuerydisco_slideCell.find("a").on('click', function (e) {
                var url = jQuery(this).attr('href');
                location.href = url;
                e.preventDefault();
            });

            jQuerySlide.flickity('resize');
            jQuerymainSlide.flickity({
                // options
            });


        }
    });


    jQuerySlide.flickity('resize');





});
