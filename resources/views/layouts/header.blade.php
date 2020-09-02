<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="#">
                <!-- Logo icon image, you can use font-icon also --><b>
                    <!--This is dark logo icon--><img src="{{ asset('assets/plugins/images/admin-logo.png') }}"
                        alt="home" class="dark-logo" />
                    <!--This is light logo icon--><img src="{{ asset('assets/plugins/images/admin-logo-dark.png') }}"
                        alt="home" class="light-logo" />
                </b>
                <!-- Logo text image you can use text also --><span class="hidden-xs">
                    <!--This is dark logo text--><img src="{{ asset('assets/plugins/images/admin-text.png') }}"
                        alt="home" class="dark-logo" />
                    <!--This is light logo text--><img src="{{ asset('assets/plugins/images/admin-text-dark.png') }}"
                        alt="home" class="light-logo" />
                </span> </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i
                            class="fa fa-search"></i></a> </form>
            </li>
            <li>
                <a class="profile-pic" href="#"> <img src="{{ asset('assets/plugins/images/users/varun.jpg') }}"
                        alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
            </li>
            <li style="margin: 15px 15px 0px 0px;">
                <!-- Split button -->
                <div  class="btn-group">
                    <button type="button" class="btn btn-danger">Action</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
