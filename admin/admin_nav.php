<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="view_slider.php">Heritage Homestays</a>
            </div>
            
            <div class="header-right">
                <form action="admin_login.php" method="POST">
                <button type="submit" name="logout_admin" class="btn btn-danger" title="Logout"><i class="fa fa-sign-out fa-2x fa-flip-horizontal"></i></button>
                </form>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <!-- <div class="user-img-div">
                        </div> -->
                    </li>


                    <li>
                        <a class="active-menu" href="admin_index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Home slider<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_slider.php"><i class="fa fa-toggle-on"></i>Add</a>
                            </li>
                            <li>
                                <a href="view_slider.php"><i class="fa fa-bell "></i>View</a>
                            </li>                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Food menu<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_food.php"><i class="fa fa-toggle-on"></i>Add</a>
                            </li>
                            <li>
                                <a href="view_food.php"><i class="fa fa-bell "></i>View</a>
                            </li>                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Stay Rooms<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_room.php"><i class="fa fa-toggle-on"></i>Add</a>
                            </li>
                            <li>
                                <a href="view_rooms.php"><i class="fa fa-bell "></i>View</a>
                            </li>                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Gallery<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_gallery.php"><i class="fa fa-toggle-on"></i>Add</a>
                            </li>
                            <li>
                                <a href="view_gallery.php"><i class="fa fa-bell "></i>View</a>
                            </li>                           
                        </ul>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->