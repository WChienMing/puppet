<footer class="footer">
        <div class="footer__container container">
            <div class="row">
                <div class="col-12">
                    <div class="footer__social">
                        <p class="d-flex justify-content-center m-0">Copyright © 2024 Puppet Company All rights reserved.</p>
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