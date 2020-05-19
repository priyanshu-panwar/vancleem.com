<?php require_once('private/initialize.php'); ?>

<?php $page_title = 'new project'; ?>

<?php include('shared/admin-header.php'); ?>

        
        <section id="main">
            <aside id="s-user-alerts" class="sidebar">
                <ul class="tab-nav tn-justified tn-icon m-t-10" data-tab-color="blue">
                    <li><a class="sua-messages" href="#sua-messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="sua-notifications" href="#sua-notifications" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="sua-tasks" href="#sua-tasks" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade" id="sua-messages">
                        <ul class="sua-menu list-inline list-unstyled palette-Light-Blue bg">
                            <li><a href=""><i class="zmdi zmdi-check-all"></i> Mark all</a></li>
                            <li><a href=""><i class="zmdi zmdi-long-arrow-tab"></i> View all</a></li>
                            <li><a href="" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="lgi-heading">David Villa Jacobs</div>
                                    <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Candice Barnes</div>
                                    <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Jeannette Lawson</div>
                                    <small class="lgi-text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Darla Mckinney</div>
                                    <small class="lgi-text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Rudolph Perez</div>
                                    <small class="lgi-text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>

                        <a href="" class="btn btn-float btn-danger m-btn">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>
                    <div class="tab-pane fade" id="sua-notifications">
                        <ul class="sua-menu list-inline list-unstyled palette-Orange bg">
                            <li><a href=""><i class="zmdi zmdi-volume-off"></i> Mute</a></li>
                            <li><a href=""><i class="zmdi zmdi-long-arrow-tab"></i> View all</a></li>
                            <li><a href="" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="lgi-heading">David Villa Jacobs</div>
                                    <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Candice Barnes</div>
                                    <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Jeannette Lawson</div>
                                    <small class="lgi-text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Darla Mckinney</div>
                                    <small class="lgi-text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lgi-heading">Rudolph Perez</div>
                                    <small class="lgi-text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sua-tasks">
                        <ul class="sua-menu list-inline list-unstyled palette-Green-400 bg">
                            <li><a href=""><i class="zmdi zmdi-time"></i> Archived</a></li>
                            <li><a href=""><i class="zmdi zmdi-check-all"></i> Mark all</a></li>
                            <li><a href="" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>
                        </ul>

                        <div class="list-group lg-alt c-overflow">
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Google Chrome Extension</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Social Intranet Projects</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Bootstrap Admin Template</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="lgi-heading m-b-5">Youtube Client App</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="" class="btn btn-float btn-danger m-btn">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>
                </div>
            </aside>

            <aside id="s-main-menu" class="sidebar">
                <div class="smm-header">
                    <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>
                </div>

                <ul class="smm-alerts">
                    <li data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-email"></i>
                    </li>
                    <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-notifications"></i>
                    </li>
                    <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                        <i class="zmdi zmdi-view-list-alt"></i>
                    </li>
                </ul>

                <ul class="main-menu">
                    <li>
                        <a href="index.php"><i class="zmdi zmdi-home"></i> Home</a>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-compact"></i> Headers</a>

                        <ul>
                            <li><a href="alternative-header.html">Altenative</a></li>
                            <li><a href="colored-header.html">Colored</a></li>
                        </ul>
                    </li>
                    <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                    <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                        <ul>
                            <li><a href="tables.html">Normal Tables</a></li>
                            <li><a href="data-tables.html">Data Tables</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu active">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                        <ul>
                            <li class="active"><a href="form-elements.html">Basic Form Elements</a></li>
                            <li><a href="form-components.html">Form Components</a></li>
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validations.html">Form Validation</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                        <ul>
                            <li><a href="colors.html">Colors</a></li>
                            <li><a href="animations.html">Animations</a></li>
                            <li><a href="box-shadow.html">Box Shadow</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="alerts.html">Alerts</a></li>
                            <li><a href="preloaders.html">Preloaders</a></li>
                            <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                            <li><a href="media.html">Media</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="other-components.html">Others</a></li>
                        </ul>
                    </li>
                    <li><a href="flot-charts.html"><i class="zmdi zmdi-trending-up"></i> Flot Charts</a></li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                        <ul>
                            <li><a href="photos.html">Default</a></li>
                            <li><a href="photo-timeline.html">Timeline</a></li>
                        </ul>
                    </li>
                    <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                    <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                        <ul>
                            <li><a href="profile-about.html">Profile</a></li>
                            <li><a href="list-view.html">List View</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="pricing-table.html">Pricing Table</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="wall.html">Wall</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="login.html">Login and Sign Up</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

                        <ul>
                            <li><a href="form-elements.html">Level 2 link</a></li>
                            <li><a href="form-components.html">Another level 2 Link</a></li>
                            <li class="sub-menu">
                                <a href="" data-ma-action="submenu-toggle">I have children too</a>

                                <ul>
                                    <li><a href="">Level 3 link</a></li>
                                    <li><a href="">Another Level 3 link</a></li>
                                    <li><a href="">Third one</a></li>
                                </ul>
                            </li>
                            <li><a href="form-validations.html">One more 2</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2></h2>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Project details </h2>
                        </div>

                        <div class="card-body card-padding">
                        <form action="" method="post">
                            <div class="checkbox">
                                <label>
                                    <input type="hidden" name="visible" value="0">
                                    <input type="checkbox" name='active' value="1">
                                    <i class="input-helper"></i>
                                    Active
                                </label>
                            </div>

                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" name="nameEn" class="form-control" placeholder="Project name - En">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Project name - Fr">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Technologies">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Date (YYYY-MM)">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="fg-line">
                                    <textarea class="form-control" rows="5" placeholder="Project description - En...."></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="fg-line">
                                    <textarea class="form-control" rows="5" placeholder="Project description - Fr...."></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Screenshot (640x480)">
                                </div>
                            </div>

                            <br>
                            <div class="btn-colors btn-demo"> <!-- Optional container for demo porpose only -->
                                <button class="btn palette-Orange bg">SAVE</button>
                                <button class="btn palette-Orange bg">CANCEL</button>
                            </div>
                        </form>

                        </div>
                    </div>

                    </div>
                </div>
            </section>

<?php include('shared/admin-footer.php'); ?>