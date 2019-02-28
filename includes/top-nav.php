<ul class="top-nav nav-bar">

    <div class="container">
        <li class="top-nav brand">
            <a href="home.php"><i class="fab fa-pied-piper-pp"></i></a>
        </li>

        <li class="top-nav search">
            <form class="top-nav"><input class="top-nav" placeholder="Search"/><i class="fas fa-search"></i></form>
        </li>

        <li class="top-nav options" style="float:right">
            <div class="dropdown">
                <button class="dropButton"><i class="fas fa-caret-down"></i></button>
                <div class="dropContent">
                    <a href="index.php">Log Out</a>
                </div>
            </div>
        </li>

        <li class="top-nav" style="float:right"><a class="top-nav" href="internship_home.php">Internships</a></li>
        <li class="top-nav" style="float:right"><a class="top-nav" href="#capstone">Capstones</a></li>
        <li class="top-nav" style="float:right"><a class="top-nav" href="#jobs">Jobs</a></li>
        <li class="top-nav" style="float:right"><a class="top-nav" href="home.php">Home</a></li>
        <li class="top-nav" style="float:right"><a class="top-nav"
                                                   href="#profile"><?php echo $_SESSION["username"]; ?></a></li>

    </div>

</ul>
