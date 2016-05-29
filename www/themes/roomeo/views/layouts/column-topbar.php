<!-- header section start-->
<div class="header-section">

    <!--toggle button start-->
    <a class="toggle-btn"><i class="fa fa-bars"></i></a>
    <!--toggle button end-->

    <!--search start-->
    <!-- <form class="searchform" action="index.html" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
    </form> -->
    <!--search end-->

    <!--notification menu start -->
    <div class="menu-right">
        <ul class="notification-menu">
            <li>
                <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-head pull-right">
                    <h5 class="title">You have 5 Mails </h5>
                    <ul class="dropdown-list normal-list">
                        <li class="new">
                            <a href="">
                                <span class="thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/photos/user1.png" alt="" /></span>
                                <span class="desc">
                                  <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                  <span class="msg">Lorem ipsum dolor sit amet...</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/photos/user2.png" alt="" /></span>
                                <span class="desc">
                                  <span class="name">Jonathan Smith</span>
                                  <span class="msg">Lorem ipsum dolor sit amet...</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/photos/user3.png" alt="" /></span>
                                <span class="desc">
                                  <span class="name">Jane Doe</span>
                                  <span class="msg">Lorem ipsum dolor sit amet...</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/photos/user4.png" alt="" /></span>
                                <span class="desc">
                                  <span class="name">Mark Henry</span>
                                  <span class="msg">Lorem ipsum dolor sit amet...</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/photos/user5.png" alt="" /></span>
                                <span class="desc">
                                  <span class="name">Jim Doe</span>
                                  <span class="msg">Lorem ipsum dolor sit amet...</span>
                                </span>
                            </a>
                        </li>
                        <li class="new"><a href="">Read All Mails</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/photos/user-avatar.png" alt="" />
                      <?php echo Yii::app()->user->name; ?>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                    <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">
                        <i class="fa fa-sign-out"></i> Log Out</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!--notification menu end -->

</div>
<!-- header section end-->
