<?PHP // Template Name: gallery

get_header();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>golafrooz gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Isotope JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

    <script>
        $(document).ready(function() {
            'use strict';

            //***********isotope js
            var $projects = $('.projects');

            $projects.isotope({
                itemSelector: '.item',
                layoutMode: 'fitRows'
            });

            $('ul.filters > li').on('click', function(e) {
                e.preventDefault();

                var filter = $(this).attr('data-filter');

                $('ul.filters > li').removeClass('active');
                $(this).addClass('active');

                $projects.isotope({
                    filter: filter
                });
            });

            // ***********bootstarp Modal
            $('.modal').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            });

            // Change image on modal show
            $(".modal").on("show.bs.modal", function() {
                var activeImage = $(this).find(".image-list img:first").attr("src");
                $(this).find(".product-image .active1").attr("src", activeImage);
            });

            // Change image on modal click
            $(".modal .image-list img, .modal .card-img-top").on("click", function() {
                var activeImage = $(this).attr("src");
                $(this).closest(".modal").find(".active1").attr("src", activeImage);
            });

            $(".nav .nav-link").on("click", function() {
                $(".nav").find(".active").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>

    <style>
        /*--- Default css strats---*/
        html,
        body {
            height: 100%;
        }

        body {
            font-family: sans-serif;
            width: 100%;
            height: 100%;
            font-size: 16px;
            line-height: 1.7;
            color: #333;
            font-weight: 400;
            text-rendering: optimizeSpeed;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #333;
            font-weight: 600;
        }

        p {
            letter-spacing: 0;
            line-height: 1.8;
        }

        a {
            text-decoration: none;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            transition: all 0.4s;
        }

        a:focus {
            outline: none;
            text-decoration: none;
        }

        ul,
        li {
            margin: 0;
            padding: 0;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /*---Default css ends---*/
        /*---------- Nav area css starts -------------*/
        .navbar-nav {
            margin-top: 15px;
            width: 100%;
        }

        .nav li .active {
            color: #00a7be !important;
            font-weight: 900;
        }

        .navbar {
            margin-bottom: 0;
            color: #000;
        }

        .navbar li {
            display: inline-block;
            float: none;
        }

        .navbar li a {
            color: #333;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 1rem;
        }

        .navbar li a:hover {
            color: #A7F5FF;
            text-decoration: none;
        }

        .navbar li.active a {
            font-weight: bold;
            color: #D1E8EB;
        }

        /*---------- Nav area css ends -------------*/
        .col-12 {
            height: 100%;
            margin: 0;
            overflow: visible;
        }

        .card {
            height: 25vh;
            width: 100%;
            border: none;
            cursor: pointer;
            overflow: visible;
            padding: 5px;
        }

        img {
            border-radius: 0;
            height: 90%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            -webkit-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        img:hover {
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
        }

        .card:hover .card-text {
            font-size: 1rem;
            color: #00a7be;
        }

        .card-body {
            padding: 0;
            margin: 0;
            text-align: center;
            align-items: center;
        }

        .card-text {
            padding: 0;
            margin: 0;
            color: #fff;
            font-size: 1rem;
            background: #333;
            white-space: nowrap;
            width: 100%;
            height: 3rem;
        }

        /*---------- works area css end --------*/
        /*---------- modal css start --------*/
        .modal-dialog {
            max-width: 100vw;
        }

        .modal-content {
            border: none;
            background: rgba(0, 0, 0, 0.7);
        }

        .modal-content .modal-header {
            border: none;
        }

        .modal-content .modal-header span {
            color: #fff;
        }

        .modal-content .modal-body {
            padding: 10px;
            text-align: center;
        }

        .modal-content .modal-body .upper {
            height: fit-content;
            display: flex;
        }

        .modal-content .modal-body .upper .text {
            width: 30vw;
            color: #fff;
            text-align: left;
            padding: 5%;
        }

        .modal-content .modal-body .upper .text h2 {
            font-size: 2rem;
            color: #fff;
        }

        .modal-content .modal-body .upper .text h3 {
            font-size: 1.5rem;
            color: #fff;
        }

        .modal-content .modal-body .upper .text p {
            font-size: 0.8rem;
            margin: 0;
        }

        .modal-content .modal-body .upper .product-image {
            max-width: 70vw;
        }

        .modal-content .modal-body .upper .product-image .active1 {
            max-height: 60vh;
            padding: 10px;
            object-fit: contain;
        }

        .modal-content .modal-body .sideImg {
            width: 100%;
            box-sizing: border-box;
        }

        .modal-content .modal-body .sideImg ul {
            width: 100%;
            text-align: center;
        }

        .modal-content .modal-body .sideImg ul li {
            display: inline-block;
            height: 20vh;
            width: 20vw;
        }

        .modal-content .modal-body .sideImg ul li img {
            height: 100%;
            object-fit: cover;
            padding: 5px;
        }

        .modal-content .modal-body .sideImg ul li img:hover {
            opacity: 0.7;
        }

        @media (max-width: 770px) {
            .modal-content .modal-body .upper {
                display: block;
            }

            .modal-content .modal-body .upper .text {
                height: fit-content;
                width: 100%;
            }

            .modal-content .modal-body .upper .product-image {
                max-width: 100vw;
            }

            .modal-content .modal-body .upper .product-image .active1 {
                max-height: 60vh;
                padding: 10px;
                object-fit: contain;
            }

            .modal-content .modal-body .sideImg ul {
                text-align: left;
            }

            .modal-content .modal-body .sideImg ul li {
                height: 50px;
                width: 50px;
            }
        }

        @media (orientation: landscape) and (max-height: 500px) {
            .modal-content .modal-body .upper {
                display: block;
            }

            .modal-content .modal-body .upper .text {
                height: fit-content;
                width: 100%;
            }

            .modal-content .modal-body .upper .product-image {
                height: 70%;
                width: 100%;
            }

            .modal-content .modal-body .sideImg ul {
                text-align: center;
            }

            .modal-content .modal-body .sideImg ul li {
                height: 50px;
                width: 50px;
            }
        }

        .modal-content .modal-footer {
            border: none;
            justify-content: center;
            align-content: center;
        }

        .modal-content .modal-footer .btn {
            background: transparent;
            border: #fff solid 2px;
        }

        /*---------- modal css end --------*/
    </style>


</head>
<?php
// اطلاعات مربوط به عکس‌ها و متن‌ها
$albums = array(
    array(
        "card-title" => "تیتر کارت تونلی",
        "title" => "گلخانه تونلی تایتل",
        "subtitle" => "گلخانه تونلی ساب تایتل",
        "image_src" => "https://gratisography.com/wp-content/uploads/2019/12/gratisography-concrete-architecture-2-900x600.jpg",
        "modal_id" => "#workModal1",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum necessitatibus enim nam in ex voluptate voluptates veniam iusto alias aspernatur?",
        "images" => array(
            "https://gratisography.com/wp-content/uploads/2019/12/gratisography-concrete-architecture-2-900x600.jpg",
            "https://gratisography.com/thumbnails/gratisography-2-thumbnail-small.jpg",
            "https://gratisography.com/thumbnails/gratisography-245-thumbnail-small.jpg",
            "https://gratisography.com/thumbnails/gratisography-36-thumbnail-small.jpg"
        )

    ),
    array(
        "card-title" => "تیتر کارت دوم",
        "title" => "تیتر اصلی آلبوم دوم",
        "subtitle" => "ساب تایتل آلبوم دوم",
        "image_src" => "https://gratisography.com/wp-content/uploads/2019/12/gratisography-mountains-scenic-horizon-900x547.jpg",
        "modal_id" => "#workModal2",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum necessitatibus enim nam in ex voluptate voluptates veniam iusto alias aspernatur?",
        "images" => array(
            "https://gratisography.com/wp-content/uploads/2019/12/gratisography-mountains-scenic-horizon-900x547.jpg",
            "https://gratisography.com/thumbnails/gratisography-desert-landscape-sky-thumbnail-small.jpg",
            "https://gratisography.com/thumbnails/gratisography-field-blue-sky-thumbnail-small.jpg",
            "https://gratisography.com/thumbnails/gratisography-butterfly-flower-thumbnail-small.jpg"
        )
    ),
    array(
        "card-title" => "تیتر کارت سوم",
        "title" => "Album3",
        "subtitle" => "Subtitle3",
        "image_src" => "https://gratisography.com/wp-content/uploads/2019/11/gratisography-city-glass-buildings-900x600.jpg",
        "modal_id" => "#workModal3",
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum necessitatibus enim nam in ex voluptate voluptates veniam iusto alias aspernatur?",
        "images" => array(
            "https://gratisography.com/wp-content/uploads/2019/11/gratisography-city-glass-buildings-900x600.jpg",
            "https://gratisography.com/thumbnails/gratisography-urban-construction-staging-thumbnail-small.jpg",
            "https://gratisography.com/thumbnails/gratisography-brick-vine-thumbnail-small.jpg",
            "https://gratisography.com/thumbnails/gratisography-64-thumbnail-small.jpg"
        )
    ),
    array(
        "card-title" => "تیتر کارت چهارم",
        "title" => "تایتل چهارم",
        "subtitle" => "ساب تایتل چهارم ",
        "image_src" => "https://gratisography.com/wp-content/uploads/2019/11/gratisography-urban-construction-staging-900x600.jpg",
        "modal_id" => "#workModal4",
        "text" => "متن آلبوم چهارم",
        "images" => array(
            "https://gratisography.com/wp-content/uploads/2019/11/gratisography-urban-construction-staging-900x600.jpg",
            "https://gratisography.com/thumbnails/gratisography-328-thumbnail-small.jpg",
            "https://gratisography.com/thumbnails/gratisography-305-thumbnail-small.jpg",
            "https://gratisography.com/thumbnails/gratisography-286-thumbnail-small.jpg"
        )
    )
);
?>

<body class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%">
    <div class="col-12">
        <ul class="nav navbar navbar-light filters text-center">
            <li class="active" data-filter="*"><a href="#!">همه</a></li>
            <li data-filter=".graphic"><a href="#!">گلخانه تونلی</a></li>
            <li data-filter=".uiUx"><a href="#!">گلخانه شیشه ای هلندی</a></li>
            <li data-filter=".exhibition"><a href="#!">گلخانه اسپانیایی تیپ دو</a></li>
            <li data-filter=".archi"><a href="#!">گلخانه اسپانیایی تیپ یک</a></li>
        </ul>

        <div class="projects">
            <div class="row col-12">
                <div class="card col-12  col-md-4 item graphic">
                    <img class="card-img-top work-img" src="<?php echo $albums[0]['image_src']; ?>" data-toggle="modal" data-target="<?php echo $albums[0]['modal_id']; ?>" />
                    <div class="text-center h-10">
                        <h2 class="flex flex-col items-center justify-center bg-gray-900 text-white h-full py-3 text-sm hover:text-sky-400">
                            <?php echo $albums[0]['card-title']; ?>
                        </h2>
                    </div>
                </div>

                <div class="card col-12 col-md-4 item uiUx">
                    <img class="card-img-top work-img" src="<?php echo $albums[1]['image_src']; ?>" data-toggle="modal" data-target="<?php echo $albums[1]['modal_id']; ?>" />
                    <div class="text-center h-10">
                        <h2 class="flex flex-col items-center justify-center bg-gray-900 text-white h-full py-3 text-sm hover:text-sky-400">
                            <?php echo $albums[1]['card-title']; ?>
                        </h2>
                    </div>
                </div>


                <div class="card col-12 col-md-4 item exhibition">
                    <img class="card-img-top work-img" src="<?php echo $albums[2]['image_src']; ?>" data-toggle="modal" data-target="<?php echo $albums[2]['modal_id']; ?>" />
                    <div class="text-center h-10">
                        <h2 class="flex flex-col items-center justify-center bg-gray-900 text-white h-full py-3 text-sm hover:text-sky-400">
                            <?php echo $albums[2]['card-title']; ?>
                        </h2>
                    </div>
                </div>

                <!-- Card for Album4 -->
                <div class="card col-12 col-md-4 item exhibition">
                    <img class="card-img-top work-img" src="<?php echo $albums[3]['image_src']; ?>" data-toggle="modal" data-target="<?php echo $albums[3]['modal_id']; ?>" />
                    <div class="text-center h-10">
                        <h2 class="flex flex-col items-center justify-center bg-gray-900 text-white h-full py-3 text-sm hover:text-sky-400">
                            <?php echo $albums[3]['card-title']; ?>
                        </h2>
                    </div>
                </div>


                <div class="card col-12  col-md-4 item exhibition">
                    <img class="card-img-top  work-img" src="https://gratisography.com/thumbnails/gratisography-brick-vine-thumbnail.jpg" data-toggle="modal" data-target="#workModal5" />
                    <div class="text-center h-10">
                        <h2 class="flex flex-col items-center justify-center bg-gray-900 text-white h-full py-3 text-sm hover:text-sky-400">
                            Album5
                        </h2>
                    </div>
                </div>

                <div class="card col-12  col-md-4 item exhibition">
                    <img class="card-img-top  work-img" src="https://gratisography.com/thumbnails/gratisography-64-thumbnail.jpg" data-toggle="modal" data-target="#workModal6" />
                    <div class="text-center h-10">
                        <h2 class="flex flex-col items-center justify-center bg-gray-900 text-white h-full py-3 text-sm hover:text-sky-400">
                            Album6
                        </h2>
                    </div>
                </div>

                <div class="card col-12  col-md-4 item exhibition">
                    <img class="card-img-top  work-img" src="https://gratisography.com/thumbnails/gratisography-352-thumbnail.jpg" data-toggle="modal" data-target="#workModal7" />
                    <div class="text-center h-10">
                        <h2 class="flex flex-col items-center justify-center bg-gray-900 text-white h-full py-3 text-sm hover:text-sky-400">
                            Album7
                        </h2>
                    </div>
                </div>

                <div class="card col-12  col-md-4 item exhibition">
                    <img class="card-img-top  work-img" src="https://gratisography.com/thumbnails/gratisography-315-thumbnail.jpg" data-toggle="modal" data-target="#workModal8" />
                    <div class="text-center h-10">
                        <h2 class="flex flex-col items-center justify-center bg-gray-900 text-white h-full py-3 text-sm hover:text-sky-400">
                            Album8
                        </h2>
                    </div>
                </div>
                <div class="card col-12  col-md-4 item archi">
                    <img class="card-img-top  work-img" src="https://gratisography.com/thumbnails/gratisography-61-thumbnail.jpg" data-toggle="modal" data-target="#workModal9" />
                    <div class="text-center h-10">
                        <h2 class="flex flex-col items-center justify-center bg-gray-900 text-white h-full py-3 text-sm hover:text-sky-400">
                            Album9
                        </h2>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>



    <!-- modal1 -->
    <div class="modal fade" id="workModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="upper">
                        <div class="text">
                            <h2><?php echo $albums[0]['title']; ?></h2>
                            <h3><?php echo $albums[0]['subtitle']; ?></h3>
                            <p><?php echo $albums[0]['text']; ?></p>
                        </div>
                        <div class="product-image">
                            <img class="active1">
                        </div>
                    </div>
                    <div class="sideImg">
                        <ul class="image-list">
                            <li class="image-item">
                                <img src="<?php echo $albums[0]['images'][0]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[0]['images'][1]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[0]['images'][2]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[0]['images'][3]; ?>">
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>
    <!-- modal1 end -->


    <!-- modal2 -->
    <div class="modal fade" id="workModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="upper">
                        <div class="text">
                            <h2><?php echo $albums[1]['title']; ?></h2>
                            <h3><?php echo $albums[1]['subtitle']; ?></h3>
                            <p><?php echo $albums[1]['text']; ?></p>
                        </div>

                        <div class="product-image">
                            <img class="active1">
                        </div>
                    </div>
                    <div class="sideImg">
                        <ul class="image-list">
                            <li class="image-item">
                                <img src="<?php echo $albums[1]['images'][0]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[1]['images'][1]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[1]['images'][2]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[1]['images'][3]; ?>">
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>
    <!-- modal2 end -->

    <!-- modal3 -->
    <div class="modal fade" id="workModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="upper">
                        <div class="text">
                            <h2><?php echo $albums[2]['title']; ?></h2>
                            <h3><?php echo $albums[2]['subtitle']; ?></h3>
                            <p><?php echo $albums[2]['text']; ?></p>
                        </div>
                        <div class="product-image">
                            <img class="active1">
                        </div>
                    </div>
                    <div class="sideImg">
                        <ul class="image-list">
                            <li class="image-item">
                                <img src="<?php echo $albums[2]['images'][0]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[2]['images'][1]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[2]['images'][2]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[2]['images'][3]; ?>">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- modal3 end -->

    <!-- modal4 -->
    <!-- Modal for Album4 -->
    <div class="modal fade" id="workModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="upper">
                        <div class="text">
                            <h2><?php echo $albums[3]['title']; ?></h2>
                            <h3><?php echo $albums[3]['subtitle']; ?></h3>
                            <p><?php echo $albums[3]['text']; ?></p>
                        </div>
                        <div class="product-image">
                            <img class="active1">
                        </div>
                    </div>
                    <div class="sideImg">
                        <ul class="image-list">
                            <li class="image-item">
                                <img src="<?php echo $albums[3]['images'][0]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[3]['images'][1]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[3]['images'][2]; ?>">
                            </li>
                            <li class="image-item">
                                <img src="<?php echo $albums[3]['images'][3]; ?>">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- modal4 end -->

    <!-- modal5 -->
    <div class="modal fade" id="workModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="upper">
                        <div class="text">
                            <h2>title1</h2>
                            <h3>sub title1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum necessitatibus
                                enim nam in ex voluptate voluptates veniam iusto alias aspernatur?</p>
                        </div>

                        <div class="product-image">
                            <img class="active1">
                        </div>
                    </div>
                    <div class="sideImg">
                        <ul class="image-list">
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-brick-vine-thumbnail.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-291-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-197-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-219-thumbnail-small.jpg">
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>
    <!-- modal5 end -->

    <!-- modal6 -->
    <div class="modal fade" id="workModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="upper">
                        <div class="text">
                            <h2>title1</h2>
                            <h3>sub title1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum necessitatibus
                                enim nam in ex voluptate voluptates veniam iusto alias aspernatur?</p>
                        </div>

                        <div class="product-image">
                            <img class="active1">
                        </div>
                    </div>
                    <div class="sideImg">
                        <ul class="image-list">
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-64-thumbnail.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-135-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-148-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-84-thumbnail-small.jpg">
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>
    <!-- modal6 end -->

    <!-- modal7 -->
    <div class="modal fade" id="workModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="upper">
                        <div class="text">
                            <h2>title1</h2>
                            <h3>sub title1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum necessitatibus
                                enim nam in ex voluptate voluptates veniam iusto alias aspernatur?</p>
                        </div>

                        <div class="product-image">
                            <img class="active1">
                        </div>
                    </div>
                    <div class="sideImg">
                        <ul class="image-list">
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-352-thumbnail.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-92-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-85-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-88-thumbnail-small.jpg">
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>
    <!-- modal7 end -->

    <!-- modal8 -->
    <div class="modal fade" id="workModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="upper">
                        <div class="text">
                            <h2>title1</h2>
                            <h3>sub title1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum necessitatibus
                                enim nam in ex voluptate voluptates veniam iusto alias aspernatur?</p>
                        </div>

                        <div class="product-image">
                            <img class="active1">
                        </div>
                    </div>
                    <div class="sideImg">
                        <ul class="image-list">
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-315-thumbnail.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-59-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-57-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-19-thumbnail-small.jpg">
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>
    <!-- modal8 end -->

    <!-- modal9 -->
    <div class="modal fade" id="workModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="upper">
                        <div class="text">
                            <h2>title1</h2>
                            <h3>sub title1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum necessitatibus
                                enim nam in ex voluptate voluptates veniam iusto alias aspernatur?</p>
                        </div>

                        <div class="product-image">
                            <img class="active1">
                        </div>
                    </div>
                    <div class="sideImg">
                        <ul class="image-list">
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-61-thumbnail.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-colorful-wall-geometry-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-9-thumbnail-small.jpg">
                            </li>
                            <li class="image-item">
                                <img src="https://gratisography.com/thumbnails/gratisography-5-thumbnail-small.jpg">
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>
    <!-- modal9 end -->
</body>

</html>

<?PHP get_footer(); ?>