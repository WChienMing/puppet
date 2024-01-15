<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="white" />
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#222222" />
    <!-- Google Fonts -->
    <!-- CSS Styles  -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&amp;family=Dela+Gothic+One&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/vendor/animate.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/vendor/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/vendor/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.min5152.css?ver=1.0" />
    <link rel="icon" href="<?= base_url() ?>/img/favicon_nft.svg" />
    <title>PUPPET</title>
    <style>
        .section {
  position: relative; /* 设置相对定位作为后续绝对定位元素的参照 */
  text-align: center; /* 内容居中 */
  padding: 50px 0; /* 添加一些垂直间距 */
}

.background-pattern {
  position: absolute; /* 绝对定位 */
  top: 280px; /* 置于顶部 */
  left: 0; /* 置于左侧 */
  width: 100%;
  height: 100%; 
  background-image: url('public/img/frame12.png');
  background-repeat: repeat-x;
  z-index: 1;
}

.content {
position: relative;
z-index: 2;
}

.character-image img {

max-width: 100%;
height: auto;
margin-top: -50px;

z-index: 3;
}
    </style>
</head>

<body class="theme-light">
    <header class="header">
        <div class="container">
            <nav class="header__navbar navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <!-- <img src="public/img/logo.svg" alt="" /> -->
                    <p class="m-0 logo">PUPPET</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav list-unstyled">
                        <li class="nav-item">
                            <a class="nav-link" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="roadmap">Roadmap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="post.html">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="404.html">404</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dark/index.html">Dark Version</a>
                        </li> -->
                    </ul>
                    <div class="header__social">
                        <ul class="social__list">
                            <li class="social__item">
                                <a class="d-flex text-decoration-none" href="#" target="_blank">
                                    <svg width="35" height="35">
                                        <use xlink:href="#twitch"></use>
                                    </svg>
                                    <span class="d-lg-none">Twitch</span>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="d-flex text-decoration-none" href="#" target="_blank">
                                    <svg width="35" height="35">
                                        <use xlink:href="#discord"></use>
                                    </svg>
                                    <span class="d-lg-none">Discord</span>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="d-flex text-decoration-none" href="#" target="_blank">
                                    <svg width="35" height="35">
                                        <use xlink:href="#twitter"></use>
                                    </svg>
                                    <span class="d-lg-none">Twitter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>