<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html>

<head lang="fa">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Cars magazine </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/img/iconr-My-Seven-Travel-BMV.512.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <style>
        * {
            transition: all 0.6s;
        }

        html {
            height: 100%;
        }

        body {
            font-family: 'Lato', sans-serif;
            color: #888;
            margin: 0;
        }

        #main {
            display: table;
            width: 100%;
            height: 100vh;
            text-align: center;
        }

        .fof {
            display: table-cell;
            vertical-align: middle;
        }

        .fof h1 {
            font-size: 50px;
            display: inline-block;
            padding-right: 12px;
            animation: type .5s alternate infinite;
        }

        @keyframes type {
            from {
                box-shadow: inset -3px 0px 0px #888;
            }

            to {
                box-shadow: inset -3px 0px 0px transparent;
            }
        }
    </style>
</head>

<body class="home-template">
    <div class="site-wrapper">
        <nav class="main-nav overlay clearfix">
            <a class="blog-logo" href="index.php"><img src="assets/img/kisspng-2018-ford-mustang-sports-car-logo-mustang-logo-png-photos-5a77aba27c3ae1.2599717715177921625089.png" alt="Fashion Critiques" /></a>

            <ul id="menu">
                <!-- Navbar items -->
                <li class="nav-current" role="presentation">
                    <a href="index.php">صفحه اصلی</a>
                </li>
                <li class="#" role="presentation">
                    <a href="List of the best car companies.html">لیست بهترین شرکت های خودروسازی</a>
                </li>
                <li class="#" role="presentation">
                    <a href="about us.html">درباره ما</a>
                </li>
                <li class="#" role="presentation">
                    <?php
                    if (isset($_SESSION['userid'])) {
                        $name = $_SESSION['name'];
                        $lastname = $_SESSION['lastname'];
                        echo "<h5 style='color:white'>" . $name . " " . $lastname . "</h5>";
                    } else {
                    ?>
                        <a href="sign up log in.php">ورود/ثبت نام </a>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['userid'])) {
                    ?>
                <li class="#" role="presentation">
                    <a href="logout.php">خروج</a>
                </li>
            <?php
                    }
            ?>
            <!-- search bar right align -->
            <div class="search">
                <form action="./search.php" method="post">
                    <input type="text" placeholder=" حستجو کنید" name="search">
                    <button type="submit" name="submit" class="searchButton">
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg></div>
                    </button>

                </form>
            </div>
            <span class="socialheader">
                <a href="https://twitter.com/ClassicDarkPack" target="_blank"><span class="symbol">circletwitterbird</span></a>
                <a href="https://www.facebook.com/profile.php?id=100092881512068"><span class="symbol">circlefacebook</span></a>
                <a href="mailto:123335722+ClassicDarkPack@users.noreply.github.com"><span class="symbol">circleemail</span></a>
            </span>
            </ul>
        </nav>
        <header class="main-header" style="
          background-image: url(assets/img/erik-mclean-ZRns2R5azu0-unsplash.jpg);" background>
            <div class="vertical">
                <div class="main-header-content inner">
                    <h1 class="page-title">مجله ماشین ها</h1>
                    <div class="entry-title-divider">
                        <span></span><span></span><span></span>
                    </div>
                    <h2 class="page-description">
                        منتظر فرصت های خارق العاده نباشید. موقعیت های معمولی را غنیمت بشمارید
                    </h2>
                </div>
            </div>
            <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll
                    Down</span></a>
        </header>
        <main id="content" class="content" role="main">
            <div class="wraps">
                <img src="assets/img/shadow.png" class="wrapshadow" />
                <?php
                $search = $_POST['search'];
                $sql = "SELECT * from magazine where carname = '$search' or carname like '%$search%'";
                $res = $con->query($sql);
                $row = $res->fetch_array();
                if ($res->num_rows > 0) {
                    $carname = $row['carname'];
                    $img = $row['img'];
                    $article = $row['article'];
                ?>
                    <div class="grid">
                        <div class="grid-item">
                            <article class="post tag-romance">
                                <a href="<?php echo $carname . ".html"; ?>"><img src="<?php echo $img; ?>" /></a>
                                <div class="wrapgriditem">
                                    <header class="post-header">
                                        <h2 class="post-title">
                                            <a href="<?php echo $carname . "html"; ?>"><?php echo $carname; ?></a>
                                        </h2>
                                        <section class="post-excerpt">
                                            <p dir="rtl">
                                                <?php
                                                echo $article;
                                                ?>
                                                <a class="read-more" href="<?php echo $carname . "html"; ?>">&raquo;</a>
                                            </p>
                                        </section>
                                </div>
                            </article>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div id="main">
                        <div class="fof">
                            <h1>Error 404
                            </h1>
                            <br>
                            <h1>
                                نتیجه ای یافت نشد
                            </h1>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </main>
        <footer class="site-footer clearfix">
            <a href="#top" id="back-to-top" class="back-top"></a>
            <div class="text-center">
                <a href="index.html">مجله ماشین ها</a> &copy; 2023<br />
                ساخته شده توسط "&nbsp; <a href="#">امیر مهدی سلگی</a>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/js/masonry.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
    <script src="app.js"></script>