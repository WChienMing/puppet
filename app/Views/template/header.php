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
        /* .section {
            position: relative;
            text-align: center;
            padding: 50px 0;
        }

        .background-pattern {
            position: absolute;
            top: 280px;
            left: 0;
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
        } */

        .custom-owl .owl-item:not(.active) img {
            opacity: 1;
            transform: scale(0.2);
            transition: opacity 0.3s, transform 0.3s;
        }
        
        .custom-owl .section-gallery__carousel.owl-item.active .section-gallery__carousel-item img {
            opacity: 1;
            transform: scale(1);
        }

        .custom-owl .section-gallery__carousel.owl-item.active {
            visibility: visible;
        }

        #container {
    position: relative;
    width: 100%; /* 使容器宽度填满屏幕宽度 */
    height: 100vh; /* 容器高度设置为视窗高度，或根据需要调整 */
    background: url('public/img/main.png') no-repeat center center; 
    background-size: cover; /* 使背景图片覆盖整个容器 */
}

.clickable-area {
    position: absolute;
    cursor: pointer;
    background: rgba(0, 0, 0); /* 设置为完全透明 */
}

    </style>
</head>

<body class="theme-light">
    <header class="header" style="background: #0F1B6C;">
        <div class="container">
            <nav class="header__navbar navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <!-- <img src="public/img/logo.svg" alt="" /> -->
                    <p class="m-0 logo" style="transform: rotate(-3.248deg);">PUPPET</p>
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
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="faq">FAQ</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery">Gallery</a>
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
                    <!-- <div class="header__social">
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
                    </div> -->
                </div>
            </nav>
        </div>
    </header>