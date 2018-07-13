<header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs" style="background: #468fcc">
                <div class="container">
                    <ul class="quick-menu pull-right">
                        <li><a href="logout.php">Welcome!  <?php echo $_SESSION['username'] ?> (Logout)</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="main-header">
                
                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>

                <div class="container">
                    <h1 class="navbar-brand" style="padding: 0;text-align: left;margin: 22px 0 0;height: auto;">
                        <a href="index.php" title="">
                            <img src="images/id90_header_logo.png" alt="" style="width: 100px;margin-top: -20px;">
                        </a>
                    </h1>
                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item-has-children">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="menu-item-has-children <?php if(basename($_SERVER['PHP_SELF'])=='hotel-list-view.php'){ echo 'active';} ?>">
                                <a href="#">Hotels</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Flights</a>
                               
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Cars</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Cruises</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <nav id="mobile-menu-01" class="mobile-menu collapse">
                    <ul id="mobile-primary-menu" class="menu">
                        <li class="menu-item-has-children">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="hotel-index.html">Hotels</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Flights</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Cars</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Cruises</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>