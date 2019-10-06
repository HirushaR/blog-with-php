
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav mr-auto">

        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-keyboard"></i> Post List</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="home.php"><i class='fas fa-home'></i> Home </a>
            </li>


            <li class="nav-item dropdown ml-auto">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class='far fa-user-circle' style='font-size:24px'></i></a>

                <div class="dropdown-menu dropdown-menu-right">
                    <?php
                    $user = $_SESSION['login_user'];
                    if($user=="")
                    {
                        header("location:index.html");
                    }
                    ?>
                    <a href="#"class="dropdown-item"><i class="fa fa-sign-out"></i> <?php echo $user; ?></a>
                    <a href="logout.php"class="dropdown-item"><i class="fa fa-sign-out"></i> Logout</a>
                </div>

             </li>


        </ul>
    </div>
</nav>