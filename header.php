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