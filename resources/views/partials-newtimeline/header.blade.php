<!-- BEGIN HEADER TOP -->
<div class="page-header-top">
    <div class="container">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html"><h1>Nusrat Jahan Jinia</h1></a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler"></a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->

  @include('task/pending')

                <!-- END TODO DROPDOWN -->
                <li class="droddown dropdown-separator">
                    <span class="separator"></span>
                </li>
                <!-- BEGIN INBOX DROPDOWN -->

  @include('new-messages/newmessages')

                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown dropdown-user dropdown-dark">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="./assets/admin/layout3/img/jinia.jpg">
                        <span class="username username-hide-mobile">Jinia</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="newtimeline/create">
                                <i class="icon-user"></i> Create </a>
                        </li>
                        <li>
                            <a href="newtimeline.show">
                                <i class="icon-calendar"></i> Show </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
								3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
								7 </span>
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="extra_lock.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
</div>
<!-- END HEADER TOP -->
