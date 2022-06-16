  <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Menu</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Task<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a>{{link_to_route('task.create','Add new task')}}</a>
                                </li>
                                <li>
                                    <a href="#">{{link_to_route('task.index','List task')}}</a>
                                </li>
                            </ul>
                            <!--  /.nav-second-level -->
                        </li>
                      <!--   <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i>Person<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/nhanvien/danhsach">List</a>
                                </li>
                                <li>
                                    <a href="admin/nhanvien/them">Create</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level
                        </li>
                          <li>
                            <a href="#"><i class="fas fa-donate"></i>Salary<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/luong/danhsach">List</a>
                                </li>
                                <li>
                                    <a href="admin/luong/them">Create</a>
                                </li>
                            </ul>
                             /.nav-second-level -->
                      <!--   </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/user/danhsach">List</a>
                                </li>
                                <li>
                                    <a href="admin/user/them">Create</a>
                                </li>
                            </ul>
                             /.nav-second-level -->
                       <!--  </li>  -->
                    </ul>
                </div>
             <!--    /.sidebar-collapse -->
            </div>