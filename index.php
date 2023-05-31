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
          <a href="List of the best car companies.php">لیست بهترین شرکت های خودروسازی</a>
        </li>
        <li class="#" role="presentation">
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
    <header class="main-header" style="
          background-image: url(assets/img/erik-mclean-ZRns2R5azu0-unsplash.jpg);
        " background>
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
        <div class="grid">
          <div class="grid-item">
            <article class="post tag-romance">
              <a href="ford.php"><img src="https://wallpapercave.com/wp/wp4731402.jpg" /></a>
              <div class="wrapgriditem">
                <header class="post-header">
                  <h2 class="post-title">
                    <a href="ford.php">Ford</a>
                  </h2>
                  <section class="post-excerpt">
                    <p dir="rtl">
                      فورد ماستنگ (به انگلیسی: Ford Mustang) که با نام موستانگ
                      نیز شناخته می‌شود، خودروی ساخته شده توسط کارخانه فورد است.
                      نسل اول این خودرو بر روی پلتفرم نسل دوم فورد فالکون ساخته
                      و در ۱۷ آوریل ۱۹۶۴ به بازار عرضه شد. در حال حاضر ششمین نسل
                      از این مدل به بازار عرضه شده‌است. فورد ماستنگ کلاس تازه‌ای
                      به نام پونی کار یا خودروهای پونی را در آمریکای شمالی ایجاد
                      کرد؛ خودروهای اسپرت کوپه‌ای که کاپوتی کشیده و پشت کوتاهی
                      داشتند. خودروهایی نظیر شورلت کامارو، ای‌ام‌سی جاولین و دوج
                      چلنجر از دیگر ماشین‌ها در کلاس پونی کارز هستند. ماستنگ
                      همچنین الهام بخش طراحی خودروهای اسپرت دیگری نظیر تویوتا
                      سلیکا و فورد کاپری هم بود.
                      <a class="read-more" href="ford.php">&raquo;</a>
                    </p>
                  </section>
                  <footer class="post-meta">
                    <img class="author-thumb" src="https://img.icons8.com/plasticine/100/null/ford.png" alt="Ford" />
                    <a href="ford.php">Ford</a>
                    <time class="post-date" datetime="1964-4-17">1964 April 17 , Friday</time>
                  </footer>
              </div>
            </article>
          </div>
          <div class="grid-item">
            <article class="post tag-romance">
              <a href="Ferrari.php"><img src="assets/img/35800.jpg" /></a>
              <div class="wrapgriditem">
                <header class="post-header">
                  <h2 class="post-title">
                    <a href="Ferrari.php">Ferrari</a>
                  </h2>
                </header>
                <section class="post-excerpt">
                  <p dir="rtl">
                    فِراری (به ایتالیایی: Ferrari) شرکت خودروسازی ایتالیایی
                    است؛ که در زمینه طراحی و تولید خودروهای لوکس، اسپورت و
                    سوپراسپورت فعالیت می‌نماید. پیشینه تأسیس شرکت فراری به سال
                    ۱۹۲۹ و راه‌اندازی شرکت اسکودریا فراری، توسط انزو فراری
                    بازمی‌گردد. این شرکت در سال‌های نخست، در زمینه طراحی و
                    ساخت خودروهای مسابقه‌ای، همچنین حامی مالی مسابقات
                    اتومبیل‌رانی فعالیت می‌کرد. این شرکت از سال ۱۹۴۷ تولید
                    خودروهای جاده‌ای، با برند فراری را آغاز نمود. در سال ۱۹۶۹
                    شرکت خودروسازی فیات، اقدام به خریداری ۵۰٪ از سهام این شرکت
                    نمود، که در سال ۲۰۰۸ مالکیت فیات در فراری به ۸۵٪ افزایش
                    پیدا کرد. هم‌اکنون شرکت اکسور با در اختیار داشتن ۲۲٪ و
                    پیرو فراری (فرزند انزو) با ۱۰٪ از سهام این شرکت، مالکین
                    اصلی فراری به‌شمار می‌آیند، همچنین بخشی از سهام این شرکت
                    در بازار بورس نیویورک و بورس ایتالیا معامله می‌شود
                    <a class="read-more" href="Ferrari.php">&raquo;</a>
                  </p>
                </section>
                <footer class="post-meta">
                  <img class="author-thumb" src="https://img.icons8.com/color/48/null/ferrari-badge.png" alt="img" />
                  <a href="Ferrari.php">Ferrari </a>

                  <time class="post-date" datetime="1939-September-13">13 September 1939</time>
                </footer>
              </div>
            </article>
          </div>
          <div class="grid-item">
            <article class="post tag-romance">
              <a href="Aston Martin.php"><img src="assets/img/astonhed.jpg" /></a>
              <div class="wrapgriditem">
                <header class="post-header">
                  <h2 class="post-title">
                    <a href="Aston Martin.php">Aston Martin</a>
                  </h2>
                </header>
                <section class="post-excerpt">
                  <p dir="auto">
                    استون مارتین (به انگلیسی: Aston Martin) شرکت خودروسازی
                    بریتانیایی است، که در زمینه مهندسی، طراحی و ساخت خودروهای
                    اسپورت فعالیت می‌کند. این شرکت در سال ۱۹۱۳ توسط رابرت
                    بمفورد و لیونل مارتین در شهر لندن تأسیس شد. از سال ۱۹۹۴ تا
                    ۲۰۰۷ استون مارتین بخشی از گروه پرمیر اتوموتیو به‌شمار
                    می‌آمد، استون مارتین یک شرکت خودروسازی بریتانیایی میباشد
                    که امروزه خودروهای اسپرت و سوپراسپرت را عرضه می‌کند.
                  </p>
                </section>
                <footer class="post-meta">
                  <img class="author-thumb" src="assets/img/aston_martin_logo_icon_145843.png" alt="blog-logo" nopin="nopin" />
                  <a href="Aston Martin.php">Aston Martin</a>
                  <time class="post-date" datetime="2016-12-18">15 January 1913</time>
                </footer>
              </div>
            </article>
          </div>
          <div class="grid-item">
            <article class="post tag-romance">
              <a href="Chevrolet.php"><img src="https://wallpapercave.com/wp/wp7037680.jpg" /></a>
              <div class="wrapgriditem">
                <header class="post-header">
                  <h2 class="post-title">
                    <a href="Chevrolet.php"> Chevrolet </a>
                  </h2>
                </header>
                <section class="post-excerpt">
                  <p>
                    <a class="read-more" href="/having-a-first-chance/">&nbsp;
                      شِورولِت (انگلیسی: Chevrolet ) که با نام شورلت نیز شناخته می‌شود، شرکت
                      خودروسازی آمریکایی است، که هم‌اکنون نام برند گروهی از خودروهایی می‌باشد که توسط جنرال موتورز
                      تولید
                      می‌شوند. نام این شرکت از مؤسس آن لوئی شوروله گرفته شده‌است و تلفظ اصلی نام این شرکت نیز شِوروله
                      است اما در ایران بیشتر به‌صورت شورولت معروف است.

                      این شرکت، در سال ۱۹۱۱ توسط لوئی شوروله و ویلیام سی. دورانت تأسیس شد.[۱] شرکت شورلت در سال ۱۹۱۸
                      توسط جنرال موتورز خریداری گردید.

                      شورلت در طول سال‌ها فعالیت در صنعت خودروسازی، مدل‌های مشهوری را به بازار خودروی جهان عرضه کرد،
                      که
                      از شناخته شده‌ترین آن‌ها می‌توان به: ایمپالا، ملیبو، کامارو، تاهو، اکسپرس، ولت، کروز، کلرادو،
                      تاورا، تراکر، بلیزر، سابربن، سلبریتی، نوا، لومینا، مونت کارلو، مونتانا، ون، وگا، کاوالیر،
                      کاپریس،
                      کودیاک و کوروت، شول، اشاره نمود.
                    </a>
                  </p>
                </section>
                <footer class="post-meta">
                  <img class="author-thumb" src="assets/img/c1.jpg" alt="Chevrolet" nopin="nopin" />
                  <a href="Chevrolet.php">Chevrolet</a>
                  <time class="post-date" datetime="2016-12-18">1911 November 3</time>
                </footer>
              </div>
            </article>
          </div>
          <div class="grid-item">
            <article class="post tag-romance featured">
              <a href="Lamborghini.php"><img src="https://wallpapercave.com/wp/wp9070460.jpg" /></a>
              <div class="wrapgriditem">
                <header class="post-header">
                  <h2 class="post-title">
                    <a href="Lamborghini.php">Lamborghini</a>
                  </h2>
                </header>
                <section class="post-excerpt">
                  <p dir="auto">
                    لامبورگینی (به ایتالیایی: Lamborghini) شرکت خودروسازی
                    ایتالیایی است، که در زمینه طراحی و ساخت خودروهای سوپر
                    اسپرت فعالیت می‌کند. شرکت لامبورگینی در سال ۱۹۶۳ توسط
                    فروچیو لامبورگینی تأسیس شد و در سال ۱۹۹۸ گروه آئودی آن را
                    با قیمت ۱۱۰ میلیون دلار خریداری کرد، که در ساختار این گروه
                    خودروسازی آلمانی و به‌عنوان زیرمجموعه‌ای از شرکت آئودی
                    قرار گرفت که خود زیرمجموعه گروه فولکس‌واگن است. دفتر مرکزی
                    این شرکت در دهکده‌ای کوچک به نام سن‌آگاتا، بولونیز قرار
                    دارد و تحت مدیریت آئودی، در خط تولید کارخانجات خود،
                    مدل‌های اونتادور، سیان، اوراکان و اوروس را تولید می‌نماید.
                  </p>
                </section>
                <footer class="post-meta">
                  <img class="author-thumb" src="assets/img/lam1.png" alt="Lamborghini" nopin="nopin" />
                  <a href="Lamborghini.php">Lamborghini</a>

                  <time class="post-date" datetime="2016-12-18">1963; 60 years ago</time>
                </footer>
              </div>
            </article>
          </div>
          <div class="grid-item">
            <article class="post">
              <a href="Toyota.php"><img src="assets/img/to3.jpg" /></a>
              <div class="wrapgriditem">
                <header class="post-header">
                  <h2 class="post-title">
                    <a href="Toyota.php">Toyota</a>
                  </h2>
                </header>
                <section class="post-excerpt">
                  <p>
                    تویوتا موتور کورپوریشن (به ژاپنی: トヨタ自動車株式会社) شرکت چندملیتی ژاپنی سازندهٔ خودرو، ماشین‌آلات،
                    پیشرانه
                    و قطعات خودرو مستقر در شهر تویوتا در استان آیچی ژاپن است.

                    نخستین خط تولید خودرو تویوتا در سال ۱۹۳۷ توسط کیشیرو تویودا و در کارخانه ماشین‌سازی صنایع
                    تویوتا،[۳]
                    که متعلق به پدر وی (ساکیشی تویودا) بود، راه‌اندازی شد. نخستین خودروی سواری این شرکت تویوتا ای‌ای
                    نام
                    داشت.

                    این کورپوریشن دارندهٔ برندهای دینا، دایهاتسو، لکسوس و هینو موتورز نیز می‌باشد که هم‌اکنون به‌عنوان
                    بزرگ‌ترین خودروساز جهان شناخته می‌شود.[۴] سهام این شرکت در بازار بورس نیویورک، بورس لندن و بورس
                    توکیو معامله می‌شود. تویوتا (トヨタ) در زبان ژاپنی به معنی شالیزار است.
                  </p>
                </section>
                <footer class="post-meta">
                  <img class="author-thumb" src="assets/img/to1.jpg" alt="Toyota" nopin="nopin" />
                  <a href="Toyota.php">Toyota</a>
                  <time class="post-date" datetime="2016-12-18">August 28, 1937; 85 years ago</time>
                </footer>
              </div>
            </article>
          </div>
          <div class="grid-item">
            <article class="post tag-romance">
              <a href="Mazda.php"><img src="assets/img/maz3.png" /></a>
              <div class="wrapgriditem">
                <header class="post-header">
                  <h2 class="post-title">
                    <a href="Mazda.php">Mazda</a>
                  </h2>
                </header>
                <section class="post-excerpt">
                  <p>
                    مزدا موتور کورپوریشن (به ژاپنی: マツダ株式会社) شرکت خودروسازی ژاپنی چندملیتی است، که در سال ۱۹۲۰ توسط
                    جوجیرو ماتسودا تأسیس شد. دفتر مرکزی این شرکت در شهرستان آکای، هیروشیما، ژاپن قرار دارد. این
                    کورپوریشن در سال ۲۰۱۶ بالغ بر یک میلیون و ۵۰۰ هزار خودرو تولید نمود. در سال ۲۰۱۸ مزدا در جایگاه
                    پانزدهم از بزرگترین تولیدکنندگان خودرو در جهان قرار داشته‌است.
                  </p>
                </section>
                <footer class="post-meta">
                  <img class="author-thumb" src="assets/img/Mazda_logo_with_emblem.svg.png" alt="Mazda" nopin="nopin" />
                  <a href="Mazda.php">Mazda</a>
                  <time class="post-date" datetime="2016-12-18">January 30, 1920,</time>
                </footer>
              </div>
            </article>
          </div>
          <div class="grid-item">
            <article class="post featured">
              <a href="nissan.php"><img src="assets/img/n2.jpg" /></a>
              <div class="wrapgriditem">
                <header class="post-header">
                  <h2 class="post-title">
                    <a href="nissan.php">nissan</a>
                  </h2>
                </header>
                <section class="post-excerpt">
                  <p>
                    نیسان موتور کورپوریشن (به ژاپنی: 日産自動車株式会社) شرکت خودروسازی ژاپنی چندملیتی است، که دفتر مرکزی آن در
                    شهر یوکوهاما قرار دارد. ریشه‌های تأسیس این شرکت به زمان راه‌اندازی شرکت خودروسازی داتسون
                    بازمی‌گردد،
                    در پی خریداری شرکت داتسون توسط یوشیسوکه آیکاوا، وی داتسون را در شرکت خوشه‌ای و تازه تأسیس خود،
                    یعنی؛
                    گروه نیسان ادغام نمود و بخش خودروسازی جدید را نیسان نامید. شرکت نیسان همانند تویوتا و هوندا که به
                    ترتیب برندهای لکسوس و آکورا را در آمریکای شمالی راه‌اندازی کردند، برند اینفینیتی را برای بازار
                    آمریکای شمالی خود تأسیس کرد. از سال ۱۹۹۹ شرکت رنو به یکی از سهام‌داران اصلی نیسان تبدیل شد،
                    به‌طوری‌که تا سال ۲۰۰۸ مالک ۴۴٪ از سهام آن گردید، در مقابل هم‌اکنون نیسان نیز ۱۵٪ از سهام رنو را
                    در
                    اختیار دارد. اکنون کارلوس غصن به‌طور هم‌زمان، مدیرعامل و رئیس هیئت مدیره هر دو شرکت نیسان و رنو
                    می‌باشد[۳] و از طریق شرکت رنو-نیسان آلیانس که حاصل مشارکت استراتژیک این دو خودروساز می‌باشد، سکان
                    رهبری رنو، نیسان و چند خودروساز دیگر را در دست دارد. در سال ۲۰۱۲ نیسان پس از شرکت‌های جنرال
                    موتورز،
                    تویوتا، گروه فولکس‌واگن، گروه هیوندای موتور و فورد، به‌عنوان ششمین خودروساز بزرگ جهان شناخته شد.
                  </p>
                </section>
                <footer class="post-meta">
                  <img class="author-thumb" src="https://img.icons8.com/color/48/null/nissan.png" alt="David" nopin="nopin" />
                  <a href="nissan.php">nissan</a>
                  <time class="post-date" datetime="2016-12-14">December 26, 1933</time>
                </footer>
              </div>
            </article>
          </div>
          <div class="grid-item">
            <article class="post tag-romance">
              <a href="Dodge.php"><img src="assets/img/dodge_challenger_srt_4k-HD.jpg" /></a>
              <div class="wrapgriditem">
                <header class="post-header">
                  <h2 class="post-title">
                    <a href="Dodge.php"> Dodge </a>
                  </h2>
                </header>
                <section class="post-excerpt">
                  <p>
                    داج یا دوج (به انگلیسی: Dodge) یک شرکت خودروسازی آمریکایی است، که در سال ۱۹۰۰ توسط جان فرانسیس داج
                    و
                    هوراس الجین داج تأسیس شد. این شرکت امروزه از زیرمجموعه‌های شرکت خودروسازی استلانتیس به‌شمار
                    می‌آید.
                    شرکت داج هم‌اکنون تولیدکننده خودروهای مینی‌ون و اس‌یووی است. دفتر مرکزی، این شرکت در شهر آبرن
                    هیلز،
                    میشیگان قرار دارد. پس از خریداری شرکت کرایسلر، توسط شرکت فیات، داج نیز به فیات واگذار گردید و
                    اکنون
                    توسط استلانتیس، مدیریت می‌شود.
                  </p>

                </section>
                <footer class="post-meta">
                  <img class="author-thumb" src="https://img.icons8.com/color/48/null/dodge.png" alt="Dodge" />
                  <a href="Dodge.php">Dodge</a>
                  <time class="post-date" datetime="2016-12-14">14 December 1900</time>
                </footer>
              </div>
            </article>
          </div>
        </div>
        <nav class="pagination" role="navigation">
          <span class="page-number">Page 1 of 2</span>
          <a class="older-posts" href="page2.php">Older Posts &rarr;</a>
        </nav>
      </div>
    </main>
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
  <script src="app.js"></script>

</body>

</html>