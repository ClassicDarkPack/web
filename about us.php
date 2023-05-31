<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>about-us</title>
  <meta name="description" content="Thoughts, reviews and ideas since 1999." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/iconr-My-Seven-Travel-BMV.512.png" />
  <link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic" />
  <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet"
    type="text/css" />
</head>

<body class="post-template">
  <div class="site-wrapper">
  <nav class="main-nav overlay clearfix">
      <a class="blog-logo" href="index.php"><img src="assets/img/kisspng-2018-ford-mustang-sports-car-logo-mustang-logo-png-photos-5a77aba27c3ae1.2599717715177921625089.png" alt="Fashion Critiques" /></a>

      <ul id="menu">
        <!-- Navbar items -->
        <li class="#" role="presentation">
          <a href="index.php">صفحه اصلی</a>
        </li>
        <li class="#" role="presentation">
          <a href="List of the best car companies.php">لیست بهترین شرکت های خودروسازی</a>
        </li>
        <li class="nav-current" role="presentation">
          <a href="about us.php">درباره ما</a>
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
    <header class="main-header post-head" style="background-image: url(assets/img/cod1.jpg)">
      <div class="vertical">
        <div class="main-header-content inner">
          <h1 class="post-title">about us</h1>
          <div class="entry-title-divider">
            <span></span><span></span><span></span>
          </div>
          <section class="post-meta">
            <time class="post-date" datetime="">Amir Mahdi Solgi
            </time>
          </section>
        </div>
      </div>
    </header>
    <main id="content" class="content" role="main">
      <div class="wraps">
        <img src="assets/img/shadow.png" class="wrapshadow" />
        <article class="post featured">
          <section class="post-content">
            <p dir="rtl">

            </p>
            <p dir="rtl">
              </e>این مجله برای پروژه دانشگاه طراحی و گرد اوری شده است </p>
          </section>
          <footer class="post-footer">
            <figure class="author-image">
              <a class="img" href="#" style="background-image: url(assets/img/cod2.jpg)"><span
                  class="hidden">cars</span></a>
            </figure>
            <section class="author">
              <h4><a href="#">Amir Mahdi Solgi</a></h4>
              <div class="author-meta">
                <span class="author-location icon-location"> iran</span>
                <span class="author-link icon-link"><a href="https://www.ferrari.com/">$</a></span>
              </div>
            </section>
            <section class="share">
              <h4>Share this post</h4>
              <a class="icon-twitter" href="https://twitter.com/intent/tweet?text=Once%20Upon%20a%20Time&amp;url=#"
                onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
                <span class="hidden">Twitter</span>
              </a>
              <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=#"
                onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
                <span class="hidden">Facebook</span>
              </a>
              <a class="icon-google-plus" href="https://plus.google.com/share?url=#"
                onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
                <span class="hidden">Google+</span>
              </a>
            </section>
          </footer>
          <script>
            (function () {
              // DON'T EDIT BELOW THIS LINE
              var d = document,
                s = d.createElement("script");
              s.src = "https://wowthemesdemo.disqus.com/embed.js";
              s.setAttribute("data-timestamp", +new Date());
              (d.head || d.body).appendChild(s);
            })();
          </script>
        </article>
      </div>
    </main>
    <div class="clearfix"></div>
    <footer class="site-footer clearfix">
      <a href="#top" id="back-to-top" class="back-top"></a>
      <div class="text-center">
        <a href="index.php">مجله ماشین ها</a> &copy; 2023<br />
        ساخته شده توسط "&nbsp; <a href="#">امیر مهدی سلگی</a>
      </div>
    </footer>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="assets/js/masonry.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="assets/js/index.js"></script>
</body>

</html>