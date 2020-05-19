<?php require_once('private/initialize.php'); ?>

<?php $page_title = 'Home'; ?>

<?php include('shared/admin-header.php'); ?>

        <section id="main">

            <aside id="s-main-menu" class="sidebar">
                <div class="smm-header">
                    <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
                </div>

                <ul class="smm-alerts">
                    <li data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-email"></i>
                    </li>
                    <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-linkedin-box"></i>
                    </li>
                    <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-behance"></i>
                    </li>
                </ul>

                <ul class="main-menu">
                    <li class="active">
                        <a href="index.php"><i class="zmdi zmdi-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="message-list.php"><i class="zmdi zmdi-email"></i> Messages</a>
                    </li>
                    <li>
                        <a href="message-list.php"><i class="zmdi zmdi-comments"></i> Opportunities</a>
                    </li>
                    <li>
                        <a href="blog-list.php"><i class="zmdi zmdi-collection-text"></i> Blog</a>
                    </li>
                    <li>
                        <a href="project-list.php"><i class="zmdi zmdi-case"></i> Projects</a>
                    </li>
                    <li>
                        <a href="project-list.php"><i class="zmdi zmdi-chart"></i> Statistics</a>
                    </li>
                </ul>
            </aside>
            
            <section id="content">
                <div class="container">

                    <div id="c-grid" class="clearfix" data-columns>
                        <div class="card c-dark palette-Blue-700 bg">
                                <div class="card-header">
                                    <h2>Website Sessions <small>Google Analytics month-over-month</small></h2>

                                     <ul class="actions a-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Change Date Range</a>
                                                </li>
                                                <li>
                                                    <a href="">Change Graph Type</a>
                                                </li>
                                                <li>
                                                    <a href="">Other Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body card-padding">
                                    <h2 class="m-t-0 m-b-15 c-white">
                                        <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                                        120
                                    </h2>

                                    <div class="sparkline-1 text-center"></div>
                                </div>
                            </div>

                        <div class="card c-dark palette-Blue-700 bg">
                            <div class="card-header">
                                <h2>Inner page views <small>7 days - blog posts and projects</small></h2>

                                <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body card-padding">
                                <h2 class="m-t-0 m-b-15 c-white">
                                    <i class="zmdi zmdi-caret-up-circle m-r-5"></i>
                                    15
                                </h2>
                                <div class="sparkline-2 text-center"></div>
                            </div>
                        </div>

                        <div class="card c-dark palette-Blue-700 bg">
                            <div class="card-header">
                                <h2>Messages <small>7 days - incoming and outgoing</small></h2>

                                <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body card-padding">
                                <h2 class="m-t-0 m-b-15 c-white">
                                    <i class="zmdi zmdi-caret-down-circle m-r-5"></i>
                                    7
                                </h2>
                                <div class="sparkline-3 text-center"></div>
                            </div>
                        </div>

                    </div>

                    <div id="c-grid" class="clearfix" data-columns>

                        <div class="card" id="todo-lists">
                            <div class="card-header ch-dark palette-Blue-700 bg ">
                                <h2>Projects <small>with number of views</small></h2>

                                <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="">Active projects</a>
                                            </li>
                                            <li>
                                                <a href="">Archived projects</a>
                                            </li>
                                            <li>
                                                <a href="">New project</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="list-group lg-alt">
                                    <div class="list-group-item-header palette-Light-Blue text"></div>
                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="avatar-char ac-check">
                                                <input class="acc-check" type="checkbox">

                                                <span class="acc-helper palette-Light-Blue bg">12</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Yield Management Solutions</div>
                                            <small class="lgi-text">Microsoft Access + VBA</small>
                                        </div>
                                    </div>

                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="avatar-char ac-check">
                                                <input class="acc-check" type="checkbox">

                                                <span class="acc-helper palette-Light-Blue bg">11</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Revenue Management Solution</div>
                                            <small class="lgi-text">Microsoft Excel + VBA</small>
                                        </div>
                                    </div>

                                    <a href="" class="list-group-item view-more">
                                        <i class="zmdi zmdi-long-arrow-right"></i> View all
                                    </a>
                                </div>

                                <button class="btn palette-Orange bg btn-float waves-effect waves-circle waves-float"><i class="zmdi zmdi-plus"></i></button>
                            </div>
                        </div>

                        <div class="card" id="todo-lists">
                            <div class="card-header ch-dark palette-Blue-700 bg">
                                <h2>Blog posts <small>with number of views</small></h2>

                                <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="list-group lg-alt">

                                    <div class="list-group-item-header palette-Blue-700 text"></div>

                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="avatar-char ac-check">
                                                <input class="acc-check" type="checkbox">

                                                <span class="acc-helper palette-Light-Blue bg">5</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Transfer data from Google Sheets to MySQL</div>
                                            <small class="lgi-text">05/08/2018</small>
                                        </div>
                                    </div>

                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="avatar-char ac-check">
                                                <input class="acc-check" type="checkbox">

                                                <span class="acc-helper palette-Light-Blue bg">3</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading">Google Analytics data to MySQL database</div>
                                            <small class="lgi-text">20/08/2012</small>
                                        </div>
                                    </div>

                                    <a href="" class="list-group-item view-more">
                                        <i class="zmdi zmdi-long-arrow-right"></i> View all
                                    </a>
                                </div>

                                <button class="btn palette-Orange bg btn-float waves-effect waves-circle waves-float"><i class="zmdi zmdi-plus"></i></button>
                            </div>
                        </div>

                        <div class="card" id="todo-lists">
                            <div class="card-header ch-dark palette-Blue-700 bg">
                                <h2>Opportunities <small>with number of days pending</small></h2>

                                <ul class="actions a-alt">
                                    <li class="dropdown">
                                        <a href="" data-toggle="dropdown">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="">Change Date Range</a>
                                            </li>
                                            <li>
                                                <a href="">Change Graph Type</a>
                                            </li>
                                            <li>
                                                <a href="">Other Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="list-group lg-alt">
                                    <div class="list-group-item-header palette-Blue-700 text"></div>

                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="avatar-char ac-check">
                                                <input class="acc-check" type="checkbox">

                                                <span class="acc-helper palette-Light-Blue bg">3</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading"><strong>Jean-Claude Marius</strong> - Drouin & Fils</div>
                                            <small class="lgi-text">Demande de tarif</small>
                                        </div>
                                    </div>

                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="avatar-char ac-check">
                                                <input class="acc-check" type="checkbox">

                                                <span class="acc-helper palette-Light-Blue bg">3</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="lgi-heading"><strong>John Makham</strong> - VLC Group</div>
                                            <small class="lgi-text">Information request</small>
                                        </div>
                                    </div>

                                    <a href="" class="list-group-item view-more">
                                        <i class="zmdi zmdi-long-arrow-right"></i> View all
                                    </a>
                                </div>

                                <button class="btn palette-Orange bg btn-float waves-effect waves-circle waves-float"><i class="zmdi zmdi-plus"></i></button>
                            </div>
                        </div>

                    </div>

                    </div>
                </div>
            </section>

<?php include('shared/admin-footer.php'); ?>