<!DOCTYPE html>
<html lang="en">
<head>
    <title>School Portal</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<div id="app">

 <!-- MOBILE MENU -->
 <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="{{ url('index-2')}}"><img src="images/logo.png" alt="" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>All Courses</h4>
                            <ul>
                                <li><a href="{{ url('course-details')}}">Accounting/Finance</a></li>
                                <li><a href="{{ url('course-details')}}">civil engineering</a></li>
                                <li><a href="{{ url('course-details')}}">Art/Design</a></li>
                                <li><a href="{{ url('course-details')}}">Marine Engineering</a></li>
                                <li><a href="{{ url('course-details')}}">Business Management</a></li>
                                <li><a href="{{ url('course-details')}}">Journalism/Writing</a></li>
                                <li><a href="{{ url('course-details')}}">Physical Education</a></li>
                                <li><a href="{{ url('course-details')}}">Political Science</a></li>
                                <li><a href="{{ url('course-details')}}">Sciences</a></li>
                                <li><a href="{{ url('course-details')}}">Statistics</a></li>
                                <li><a href="{{ url('course-details')}}">Web Design/Development</a></li>
                                <li><a href="{{ url('course-details')}}">SEO</a></li>
                                <li><a href="{{ url('course-details')}}">Google Business</a></li>
                                <li><a href="{{ url('course-details')}}">Graphics Design</a></li>
                                <li><a href="{{ url('course-details')}}">Networking Courses</a></li>
                                <li><a href="{{ url('course-details')}}">Information technology</a></li>
                            </ul>
                            <h4>User Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                            </ul>
                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="{{ url('index-2')}}">Home</a></li>
                                <li><a href="{{ url('about')}}">About us</a></li>
                                <li><a href="{{ url('admission')}}">Admission</a></li>
                                <!-- <li><a href="{{ url('all-courses')}}">All courses</a></li> -->
                                <li><a href="{{ url('course-details')}}">Course details</a></li>
                                <li><a href="{{ url('awards')}}">Awards</a></li>
                                <li><a href="{{ url('seminar')}}">Seminar</a></li>
                                <li><a href="{{ url('events')}}">Events</a></li>
                                <li><a href="{{ url('event-details')}}">Event details</a></li>
                                <li><a href="{{ url('event-register')}}">Event register</a></li>
                                <li><a href="{{ url('contact-us')}}">Contact us</a></li>
                            </ul>
                            <h4>User Profile</h4>
                            <ul>
                                <li><a href="{{ url('dashboard')}}">User profile</a></li>
                                <li><a href="{{ url('db-courses')}}">Courses</a></li>
                                <li><a href="{{ url('db-exams')}}">Exams</a></li>
                                <li><a href="{{ url('db-profile')}}">Prfile</a></li>
                                <li><a href="{{ url('db-time-line')}}">Time line</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +101-1231-1231</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                                </li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="{{ url('index-2')}}"><img src="images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ url('index-2')}}">Home</a>
                                </li>
                                <li class="about-menu">
                                    <a href="{{ url('about')}}" class="mm-arr">About us</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="{{ url('admission')}}">
                                                            <img src="images/h-about.jpg" alt="">
                                                            <span>Academics</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mm1-com mm1-s2">
                                                    <p>Want to change the world? At Berkeley we’re doing just that. When you join the Golden Bear community, you’re part of an institution that shifts the global conversation every single day.</p>
                                                    <a href="{{ url('about')}}" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ url('all-courses')}}">All Courses</a></li>
                                                        <li><a href="{{ url('course-details')}}">Course details</a></li>
                                                        <li><a href="{{ url('about')}}">About</a></li>
                                                        <li><a href="{{ url('admission')}}">Admission</a></li>
                                                        <li><a href="{{ url('awards')}}">Awards</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                        <li><a href="{{ url('dashboard')}}">Student profile</a></li>
                                                        <li><a href="{{ url('db-courses')}}">Dashboard courses</a></li>
                                                        <li><a href="{{ url('db-exams')}}">Dashboard exams</a></li>
                                                        <li><a href="{{ url('db-profile')}}">Dashboard profile</a></li>
                                                        <li><a href="{{ url('db-time-line')}}">Dashboard timeline</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
                                    <a href="#" class="mm-arr">Admission</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="admi-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="{{ url('about')}}">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Academics</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="{{ url('about')}}" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="{{ url('admission')}}">
                                                            <img src="images/h-adm1.jpg" alt="">
                                                            <span>Admission</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="{{ url('admission')}}" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="{{ url('awards')}}">
                                                            <img src="images/h-cam1.jpg" alt="">
                                                            <span>History & awards</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="{{ url('awards')}}" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s4">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="{{ url('seminar')}}">
                                                            <img src="images/h-res1.jpg" alt="">
                                                            <span>Seminar 2018</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="{{ url('seminar')}}" class="mm-r-m-btn">Read more</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ url('all-courses')}}">All Courses</a></li>
                                <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                                <li class="cour-menu">
                                    <a href="#!" class="mm-arr">All Pages</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="cour-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-cour-com mm1-s3">
													<h4>Frontend pages:1</h4>
                                                    <ul>
                                                        <li><a href="{{ url('index-2')}}">Home</a></li>
														<li><a href="{{ url('index-1')}}">Home - 1</a></li>
														<li><a href="{{ url('all-courses')}}">All Courses</a></li>
														<li><a href="{{ url('course-details')}}">Course Details</a></li>
														<li><a href="{{ url('about')}}">About us</a></li>
														<li><a href="{{ url('admission')}}">admission</a></li>
														<li><a href="{{ url('awards')}}">awards</a></li>
														<li><a href="{{ url('blog')}}">blog</a></li>
														<li><a href="{{ url('blog-details')}}">blog details</a></li>
														<li><a href="{{ url('contact-us')}}">contact us</a></li>
														<li><a href="{{ url('departments')}}">Departments</a></li>
														<li><a href="{{ url('events')}}">events</a></li>
														<li><a href="{{ url('event-details')}}">event details</a></li>
														<li><a href="{{ url('event-register')}}">event register</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
													<h4>Frontend pages:2</h4>
                                                    <ul>
														<li><a href="{{ url('facilities')}}">facilities</a></li>
														<li><a href="{{ url('facilities-detail')}}">facilities detail</a></li>
														<li><a href="{{ url('research')}}">research</a></li>
														<li><a href="{{ url('seminar')}}">seminar</a></li>
														<li><a href="{{ url('gallery-photo')}}">gallery photo</a></li>
                                                    </ul>
													<h4 class="ed-dr-men-mar-top">User Dashboard</h4>
                                                    <ul>
                                                        <li><a href="{{ url('dashboard')}}">Student profile</a></li>
                                                        <li><a href="{{ url('db-courses')}}">Dashboard courses</a></li>
                                                        <li><a href="{{ url('db-exams')}}">Dashboard exams</a></li>
                                                        <li><a href="{{ url('db-profile')}}">Dashboard profile</a></li>
                                                        <li><a href="{{ url('db-time-line')}}">Dashboard timeline</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
													<h4>Admin panel:1</h4>
                                                    <ul>
														<li><a href="{{ url('admin')}}">admin</a></li>
														<li><a href="{{ url('admin-add-courses')}}">Add new course</a></li>
														<li><a href="{{ url('admin-all-courses')}}">All courses</a></li>
														<li><a href="{{ url('admin-student-details')}}">Student details</a></li>
														<li><a href="{{ url('admin-user-add')}}">Add new user</a></li>
														<li><a href="{{ url('admin-user-all')}}">All users</a></li>
														<li><a href="{{ url('admin-panel-setting')}}">Admin setting</a></li>
														<li><a href="{{ url('admin-event-add')}}">event add</a></li>
														<li><a href="{{ url('admin-event-all')}}">event all</a></li>
														<li><a href="{{ url('admin-setting')}}">Admin Setting</a></li>
														<li><a href="{{ url('admin-slider')}}">Slider setting</a></li>
														<li><a href="{{ url('admin-slider-edit')}}">Slider edit</a></li>
														<li><a href="{{ url('admin-course-details')}}">course details</a></li>
														<li><a href="{{ url('admin-login')}}">admin login</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
													<h4>Admin panel:2</h4>
                                                    <ul>
														<li><a href="{{ url('admin-event-edit')}}">event edit</a></li>
														<li><a href="{{ url('admin-exam-add')}}">exam add</a></li>
														<li><a href="{{ url('admin-exam-all')}}">exam all</a></li>
														<li><a href="{{ url('admin-exam-edit')}}">exam edit</a></li>
														<li><a href="{{ url('admin-export-data')}}">export data</a></li>
														<li><a href="{{ url('admin-import-data')}}">import data</a></li>
														<li><a href="{{ url('admin-job-add')}}">Add new jobs</a></li>
														<li><a href="{{ url('admin-job-all')}}">All jobs</a></li>
														<li><a href="{{ url('admin-job-edit')}}">Edit job</a></li>
														<li><a href="{{ url('admin-main-menu')}}">main menu</a></li>
														<li><a href="{{ url('admin-page-add')}}">Add new page</a></li>
														<li><a href="{{ url('admin-page-all')}}">All pages</a></li>
														<li><a href="{{ url('admin-page-edit')}}">Edit page</a></li>
														<li><a href="{{ url('admin-forgot')}}">forgot password</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s4">
													<h4>Admin panel:3</h4>
                                                    <ul>
														<li><a href="{{ url('admin-quick-link')}}">quick link</a></li>
														<li><a href="{{ url('admin-seminar-add')}}">Add new seminar</a></li>
														<li><a href="{{ url('admin-seminar-all')}}">All seminar</a></li>
														<li><a href="{{ url('admin-seminar-edit')}}">Edit seminar</a></li>
														<li><a href="{{ url('admin-seminar-enquiry')}}">Semester enquiry</a></li>
														<li><a href="{{ url('admin-all-enquiry')}}">All enquiry</a></li>
														<li><a href="{{ url('admin-view-enquiry')}}">All enquiry view</a></li>
														<li><a href="{{ url('admin-event-enquiry')}}">event enquiry</a></li>
														<li><a href="{{ url('admin-admission-enquiry')}}">Admission enquiry</a></li>
														<li><a href="{{ url('admin-common-enquiry')}}">common enquiry</a></li>
														<li><a href="{{ url('admin-course-enquiry')}}">course enquiry</a></li>
														<li><a href="{{ url('admin-all-menu')}}">menu all</a></li>
														<li><a href="{{ url('admin-about-menu')}}">Menu - About</a></li>
														<li><a href="{{ url('admin-admission-menu')}}">Menu - admission</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ url('events')}}">Events</a>
                                </li>
                                <li><a href="{{ url('dashboard')}}">Student</a>
                                </li>
                                <li><a href="{{ url('contact-us')}}">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="{{ url('course-details')}}">Accounting/Finance</a></li>
                                            <li><a href="{{ url('course-details')}}">civil engineering</a></li>
                                            <li><a href="{{ url('course-details')}}">Art/Design</a></li>
                                            <li><a href="{{ url('course-details')}}">Marine Engineering</a></li>
                                            <li><a href="{{ url('course-details')}}">Business Management</a></li>
                                            <li><a href="{{ url('course-details')}}">Journalism/Writing</a></li>
                                            <li><a href="{{ url('course-details')}}">Physical Education</a></li>
                                            <li><a href="{{ url('course-details')}}">Political Science</a></li>
                                            <li><a href="{{ url('course-details')}}">Sciences</a></li>
                                            <li><a href="{{ url('course-details')}}">Statistics</a></li>
                                            <li><a href="{{ url('course-details')}}">Web Design/Development</a></li>
                                            <li><a href="{{ url('course-details')}}">SEO</a></li>
                                            <li><a href="{{ url('course-details')}}">Google Business</a></li>
                                            <li><a href="{{ url('course-details')}}">Graphics Design</a></li>
                                            <li><a href="{{ url('course-details')}}">Networking Courses</a></li>
                                            <li><a href="{{ url('course-details')}}">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->


    
@yield('content')
   
 <!-- SOCIAL MEDIA SHARE -->
 <section>
        <div class="icon-float">
            <ul>
                <li><a href="#" class="sh">1k <br> Share</a> </li>
                <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
            </ul>
        </div>
    </section>

</div>
    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>