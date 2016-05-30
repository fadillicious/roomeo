<!-- left side start-->
<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/logo.png" alt="">
        </a>
    </div>

    <div class="logo-icon text-center">
        <a href="<?php echo Yii::app()->request->baseUrl; ?>">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/logo_icon.png" alt="">
        </a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">

        <!-- visible to small devices only -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media logged-user">
                <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/photos/user-avatar.png" class="media-object">
                <div class="media-body">
                    <h4><a href="#"><?php echo Yii::app()->user->name; ?></a></h4>
                    <span><?php echo Yii::app()->user->role_name; ?></span>
                </div>
            </div>

            <h5 class="left-nav-title">Account Information</h5>
            <ul class="nav nav-pills nav-stacked custom-nav">
              <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="active"><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>Ruangan</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"> Dummy</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"> Dummy</a></li>

                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>Peminjaman</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"> Dummy</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"> Dummy</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>User Management</span></a>
                <ul class="sub-menu-list">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/user/admin"> Users</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/role/index"> Roles</a></li>
                </ul>
            </li>

        </ul>
        <!--sidebar nav end-->

    </div>
</div>
<!-- left side end-->
