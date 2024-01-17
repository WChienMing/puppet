<footer class="footer">
        <div class="footer__container container">
            <div class="row">
                <div class="col-12">
                    <div class="footer__social">
                        <p class="d-flex justify-content-center">Copyright © 2024 Puppet Company All rights reserved.</p>
                        <ul class="social__list">
                            <li class="social__item">
                                <a class="d-flex text-decoration-none" href="#" target="_blank">
                                    <!-- <svg width="35" height="35">
                                        <use xlink:href="#twitch"></use>
                                    </svg> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path d="M391.2 103.5H352.5v109.7h38.6zM285 103H246.4V212.8H285zM120.8 0 24.3 91.4V420.6H140.1V512l96.5-91.4h77.3L487.7 256V0zM449.1 237.8l-77.2 73.1H294.6l-67.6 64v-64H140.1V36.6H449.1z"/>
                                    </svg>
                                    <span class="d-lg-none">Twitch</span>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="d-flex text-decoration-none" href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512">
                                        <path d="M524.5 69.8a1.5 1.5 0 0 0 -.8-.7A485.1 485.1 0 0 0 404.1 32a1.8 1.8 0 0 0 -1.9 .9 337.5 337.5 0 0 0 -14.9 30.6 447.8 447.8 0 0 0 -134.4 0 309.5 309.5 0 0 0 -15.1-30.6 1.9 1.9 0 0 0 -1.9-.9A483.7 483.7 0 0 0 116.1 69.1a1.7 1.7 0 0 0 -.8 .7C39.1 183.7 18.2 294.7 28.4 404.4a2 2 0 0 0 .8 1.4A487.7 487.7 0 0 0 176 479.9a1.9 1.9 0 0 0 2.1-.7A348.2 348.2 0 0 0 208.1 430.4a1.9 1.9 0 0 0 -1-2.6 321.2 321.2 0 0 1 -45.9-21.9 1.9 1.9 0 0 1 -.2-3.1c3.1-2.3 6.2-4.7 9.1-7.1a1.8 1.8 0 0 1 1.9-.3c96.2 43.9 200.4 43.9 295.5 0a1.8 1.8 0 0 1 1.9 .2c2.9 2.4 6 4.9 9.1 7.2a1.9 1.9 0 0 1 -.2 3.1 301.4 301.4 0 0 1 -45.9 21.8 1.9 1.9 0 0 0 -1 2.6 391.1 391.1 0 0 0 30 48.8 1.9 1.9 0 0 0 2.1 .7A486 486 0 0 0 610.7 405.7a1.9 1.9 0 0 0 .8-1.4C623.7 277.6 590.9 167.5 524.5 69.8zM222.5 337.6c-29 0-52.8-26.6-52.8-59.2S193.1 219.1 222.5 219.1c29.7 0 53.3 26.8 52.8 59.2C275.3 311 251.9 337.6 222.5 337.6zm195.4 0c-29 0-52.8-26.6-52.8-59.2S388.4 219.1 417.9 219.1c29.7 0 53.3 26.8 52.8 59.2C470.7 311 447.5 337.6 417.9 337.6z"/>
                                    </svg>
                                    <span class="d-lg-none">Discord</span>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="d-flex text-decoration-none" href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                    </svg>
                                    <span class="d-lg-none">Twitter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-to-top"></div>
    <script src="<?= base_url() ?>/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/js/vendor/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/js/vendor/wow.min.js"></script>
    <script src="<?= base_url() ?>/js/vendor/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/js/script5152.js?ver=1.0"></script>
    <script>
    new WOW().init();
    </script>
    <script>
    // $(document).ready(function() {
    //     var $owl = $("#custom");
    //     var inactiveImgSrc = "public/img/not.png"; // 非活跃项的图像路径

    //     $owl.owlCarousel({
    //         items: 1, // 每次只显示一个图像
    //         loop: true, // 循环播放
    //         center: true, // 将活跃项置于中心
    //         autoplay: true
    //     });

    //     // 检查并更新非活跃项的图像
    //     function checkAndUpdateImages() {
    //         $owl.find('.owl-item').each(function() {
    //         var $item = $(this);
    //         if (!$item.hasClass('active')) {
    //             // 如果这个项不是活跃的，则更改图像为非活跃图像
    //             $item.find('img').attr('src', inactiveImgSrc);
    //         }
    //         });
    //     }

    //     // 当轮播项变化时触发
    //     $owl.on('translated.owl.carousel', function(event) {
    //         checkAndUpdateImages();
    //     });

    //     // 初始页面加载时也需要运行一次检查
    //     checkAndUpdateImages();
    // });
    $(document).ready(function() {
    var $owl = $("#custom");
    var inactiveImgSrc = "public/img/not.png"; // 非活跃项的图像路径
    
    $owl.owlCarousel({
        items: 1,
        loop: true,
        center: true,
        // autoplay: true,
        // autoplayTimeout: 3000,
    });

    function updateImages() {
        
        // 遍历所有轮播项
        $owl.find('.owl-item').each(function() {
            var $item = $(this);
            var $img = $item.find('img');
            var $text = $item.find('.nft_text'); // 选中要隐藏的文本元素
            
            // 检查当前轮播项是否活跃
            if ($item.hasClass('active')) {
                // 如果是活跃项，使用对应的图像路径
                $img.attr('src', $img.data('active-src')); // 使用data属性存储活跃图像路径
                $text.show(); // 显示文本
            } else {
                // 如果是非活跃项，使用非活跃图像路径
                $img.attr('src', inactiveImgSrc);
                $text.hide(); // 显示文本
            }
        });
    }

    $owl.on('translated.owl.carousel', function(event) {
        updateImages();
    });

    updateImages();
});






    </script>
</body>

</html>