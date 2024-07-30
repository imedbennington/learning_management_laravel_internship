<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Aduca - Education HTML Template</title>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">


    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="icon" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<!--<p>Hello, {{ $student->first_name }}. Here you can apply to become a teacher.</p>-->
    <!-- start cssload-loader -->
    <div class="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    <!--======================================
        START HEADER AREA
    ======================================-->
    <header class="header-menu-area bg-white">
        <div class="header-top pr-150px pl-150px border-bottom border-bottom-gray py-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-widget">
                            <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                                <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i
                                        class="la la-phone mr-1"></i><a href="tel:00123456789"> (00) 123 456 789</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="la la-envelope-o mr-1"></i><a
                                        href="mailto:contact@aduca.com"> contact@aduca.com</a></li>
                            </ul>
                        </div><!-- end header-widget -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                            <div class="theme-picker d-flex align-items-center">
                                <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                    <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                    </svg>
                                </button>
                                <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                    <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="5"></circle>
                                        <line x1="12" y1="1" x2="12" y2="3"></line>
                                        <line x1="12" y1="21" x2="12" y2="23"></line>
                                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                        <line x1="1" y1="12" x2="3" y2="12"></line>
                                        <line x1="21" y1="12" x2="23" y2="12"></line>
                                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                    </svg>
                                </button>
                            </div>
                            <ul
                                class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                                <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i
                                        class="la la-sign-in mr-1"></i><a href="login.html"> Login</a></li>
                                <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a
                                        href="sign-up.html"> Register</a></li>
                            </ul>
                        </div><!-- end header-widget -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-top -->
        <div class="header-menu-content pr-150px pl-150px bg-white">
            <div class="container-fluid">
                <div class="main-menu-content">
                    <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo-box">
                                <a href="index.html" class="logo"><img src="images/logo.png" alt="logo"></a>
                                <div class="user-btn-action">
                                    <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                        data-toggle="tooltip" data-placement="top" title="Search">
                                        <i class="la la-search"></i>
                                    </div>
                                    <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                        data-toggle="tooltip" data-placement="top" title="Category menu">
                                        <i class="la la-th-large"></i>
                                    </div>
                                    <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm"
                                        data-toggle="tooltip" data-placement="top" title="Main menu">
                                        <i class="la la-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col-lg-2 -->
                        <div class="col-lg-10">
                            <div class="menu-wrapper">
                                <div class="menu-category">
                                    <ul>
                                        <li>
                                            <a href="#">Categories <i class="la la-angle-down fs-12"></i></a>
                                            <ul class="cat-dropdown-menu">
                                                <li>
                                                    <a href="course-grid.html">Development <i
                                                            class="la la-angle-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">All Development</a></li>
                                                        <li><a href="#">Web Development</a></li>
                                                        <li><a href="#">Mobile Apps</a></li>
                                                        <li><a href="#">Game Development</a></li>
                                                        <li><a href="#">Databases</a></li>
                                                        <li><a href="#">Programming Languages</a></li>
                                                        <li><a href="#">Software Testing</a></li>
                                                        <li><a href="#">Software Engineering</a></li>
                                                        <li><a href="#">E-Commerce</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="course-grid.html">business <i
                                                            class="la la-angle-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">All Business</a></li>
                                                        <li><a href="#">Finance</a></li>
                                                        <li><a href="#">Entrepreneurship</a></li>
                                                        <li><a href="#">Strategy</a></li>
                                                        <li><a href="#">Real Estate</a></li>
                                                        <li><a href="#">Home Business</a></li>
                                                        <li><a href="#">Communications</a></li>
                                                        <li><a href="#">Industry</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="course-grid.html">IT & Software <i
                                                            class="la la-angle-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">All IT & Software</a></li>
                                                        <li><a href="#">IT Certification</a></li>
                                                        <li><a href="#">Hardware</a></li>
                                                        <li><a href="#">Network & Security</a></li>
                                                        <li><a href="#">Operating Systems</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="course-grid.html">Finance & Accounting <i
                                                            class="la la-angle-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#"> All Finance & Accounting</a></li>
                                                        <li><a href="#">Accounting & Bookkeeping</a></li>
                                                        <li><a href="#">Cryptocurrency & Blockchain</a></li>
                                                        <li><a href="#">Economics</a></li>
                                                        <li><a href="#">Investing & Trading</a></li>
                                                        <li><a href="#">Other Finance & Economics</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="course-grid.html">design <i
                                                            class="la la-angle-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">All Design</a></li>
                                                        <li><a href="#">Graphic Design</a></li>
                                                        <li><a href="#">Web Design</a></li>
                                                        <li><a href="#">Design Tools</a></li>
                                                        <li><a href="#">3D & Animation</a></li>
                                                        <li><a href="#">User Experience</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="course-grid.html">Personal Development <i
                                                            class="la la-angle-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">All Personal Development</a></li>
                                                        <li><a href="#">Personal Transformation</a></li>
                                                        <li><a href="#">Productivity</a></li>
                                                        <li><a href="#">Leadership</a></li>
                                                        <li><a href="#">Personal Finance</a></li>
                                                        <li><a href="#">Career Development</a></li>
                                                        <li><a href="#">Parenting & Relationships</a></li>
                                                        <li><a href="#">Happiness</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="course-grid.html">Marketing <i
                                                            class="la la-angle-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">All Marketing</a></li>
                                                        <li><a href="#">Digital Marketing</a></li>
                                                        <li><a href="#">Search Engine Optimization</a></li>
                                                        <li><a href="#">Social Media Marketing</a></li>
                                                        <li><a href="#">Branding</a></li>
                                                        <li><a href="#">Video & Mobile Marketing</a></li>
                                                        <li><a href="#">Affiliate Marketing</a></li>
                                                        <li><a href="#">Growth Hacking</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="course-grid.html">Health & Fitness <i
                                                            class="la la-angle-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">All Health & Fitness</a></li>
                                                        <li><a href="#">Fitness</a></li>
                                                        <li><a href="#">Sports</a></li>
                                                        <li><a href="#">Dieting</a></li>
                                                        <li><a href="#">Self Defense</a></li>
                                                        <li><a href="#">Meditation</a></li>
                                                        <li><a href="#">Mental Health</a></li>
                                                        <li><a href="#">Yoga</a></li>
                                                        <li><a href="#">Dance</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="course-grid.html">Photography <i
                                                            class="la la-angle-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">All Photography</a></li>
                                                        <li><a href="#">Digital Photography</a></li>
                                                        <li><a href="#">Photography Fundamentals</a></li>
                                                        <li><a href="#">Commercial Photography</a></li>
                                                        <li><a href="#">Video Design</a></li>
                                                        <li><a href="#">Photography Tools</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- end menu-category -->
                                <form method="post">
                                    <div class="form-group mb-0">
                                        <input class="form-control form--control pl-3" type="text" name="search"
                                            placeholder="Search for anything">
                                        <span class="la la-search search-icon"></span>
                                    </div>
                                </form>
                                <nav class="main-menu">
                                    <ul>
                                        <li>
                                            <a href="#">Home <i class="la la-angle-down fs-12"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="home-2.html">Home Two</a></li>
                                                <li><a href="home-3.html">Home Three</a></li>
                                                <li><a href="home-4.html">Home four</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">courses <i class="la la-angle-down fs-12"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="course-grid.html">course grid</a></li>
                                                <li><a href="course-list.html">course list</a></li>
                                                <li><a href="course-grid-left-sidebar.html">grid left sidebar</a></li>
                                                <li><a href="course-grid-right-sidebar.html">grid right sidebar</a></li>
                                                <li><a href="course-list-left-sidebar.html">list left sidebar <span
                                                            class="ribbon ribbon-blue-bg">New</span></a></li>
                                                <li><a href="course-list-right-sidebar.html">list right sidebar <span
                                                            class="ribbon ribbon-blue-bg">New</span></a></li>
                                                <li><a href="course-details.html">course details</a></li>
                                                <li><a href="lesson-details.html">lesson details</a></li>
                                                <li><a href="my-courses.html">My courses</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Student <i class="la la-angle-down fs-12"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="student-detail.html">student detail</a></li>
                                                <li><a href="student-quiz.html">take quiz</a></li>
                                                <li><a href="student-quiz-results.html">quiz results</a></li>
                                                <li><a href="student-quiz-result-details.html">quiz details</a></li>
                                                <li><a href="student-quiz-result-details-2.html">quiz details 2</a></li>
                                                <li><a href="student-path.html">path details</a></li>
                                                <li><a href="student-path-assessment.html">Skill Assessment</a></li>
                                                <li><a href="student-path-assessment-result.html">Skill result</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-has">
                                            <a href="#">pages <i class="la la-angle-down fs-12"></i></a>
                                            <div class="dropdown-menu-item mega-menu">
                                                <ul class="row no-gutters">
                                                    <li class="col-lg-3">
                                                        <a href="dashboard.html">dashboard <span
                                                                class="ribbon">Hot</span></a>
                                                        <a href="about.html">about</a>
                                                        <a href="teachers.html">Teachers</a>
                                                        <a href="teacher-detail.html">Teacher detail</a>
                                                        <a href="categories.html">categories</a>
                                                        <a href="terms-and-conditions.html">Terms & conditions</a>
                                                        <a href="privacy-policy.html">privacy policy</a>
                                                        <a href="invite.html">invite friend</a>
                                                    </li>
                                                    <li class="col-lg-3">
                                                        <a href="careers.html">careers</a>
                                                        <a href="career-details.html">career details</a>
                                                        <a href="become-a-teacher.html">become an instructor</a>
                                                        <a href="faq.html">FAQs</a>
                                                        <a href="admission.html">admission</a>
                                                        <a href="gallery.html">gallery</a>
                                                        <a href="pricing-table.html">pricing tables</a>
                                                        <a href="contact.html">contact</a>
                                                    </li>
                                                    <li class="col-lg-3">
                                                        <a href="for-business.html">for business</a>
                                                        <a href="sign-up.html">sign-up</a>
                                                        <a href="login.html">login</a>
                                                        <a href="recover.html">recover</a>
                                                        <a href="shopping-cart.html">cart</a>
                                                        <a href="checkout.html">checkout</a>
                                                        <a href="error.html">page 404</a>
                                                    </li>
                                                    <li class="col-lg-3">
                                                        <div class="menu-banner position-relative h-100">
                                                            <div class="overlay rounded-rounded opacity-4"></div>
                                                            <div
                                                                class="menu-banner-content p-4 position-absolute bottom-0 left-0">
                                                                <h4 class="fs-20 font-weight-bold pb-3 text-white">30
                                                                    days free trail for new users</h4>
                                                                <a href="sign-up.html"
                                                                    class="btn theme-btn theme-btn-sm theme-btn-white">Start
                                                                    Learning <i
                                                                        class="la la-arrow-right icon ml-1"></i></a>
                                                            </div>
                                                            <img src="images/menu-banner-img.jpg"
                                                                alt="menu banner image"
                                                                class="w-100 h-100 rounded-rounded">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">blog <i class="la la-angle-down fs-12"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="blog-full-width.html">blog full width </a></li>
                                                <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                <li><a href="blog-single.html">blog detail</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- end ul -->
                                </nav><!-- end main-menu -->
                                <div class="shop-cart mr-4">
                                    <ul>
                                        <li>
                                            <p class="shop-cart-btn d-flex align-items-center">
                                                <i class="la la-shopping-cart"></i>
                                                <span class="product-count">2</span>
                                            </p>
                                            <ul class="cart-dropdown-menu">
                                                <li class="media media-card">
                                                    <a href="shopping-cart.html" class="media-img">
                                                        <img src="images/small-img.jpg" alt="Cart image">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5><a href="course-details.html">The Complete JavaScript Course
                                                                2021: From Zero to Expert!</a></h5>
                                                        <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                        <p class="text-black font-weight-semi-bold lh-18">$12.99 <span
                                                                class="before-price fs-14">$129.99</span></p>
                                                    </div>
                                                </li>
                                                <li class="media media-card">
                                                    <a href="shopping-cart.html" class="media-img">
                                                        <img src="images/small-img.jpg" alt="Cart image">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5><a href="course-details.html">The Complete JavaScript Course
                                                                2021: From Zero to Expert!</a></h5>
                                                        <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                        <p class="text-black font-weight-semi-bold lh-18">$12.99 <span
                                                                class="before-price fs-14">$129.99</span></p>
                                                    </div>
                                                </li>
                                                <li class="media media-card">
                                                    <div class="media-body fs-16">
                                                        <p class="text-black font-weight-semi-bold lh-18">Total: <span
                                                                class="cart-total">$12.99</span> <span
                                                                class="before-price fs-14">$129.99</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="shopping-cart.html" class="btn theme-btn w-100">Got to cart
                                                        <i class="la la-arrow-right icon ml-1"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- end shop-cart -->
                                <div class="nav-right-button">
                                    <a href="admission.html" class="btn theme-btn d-none d-lg-inline-block"><i
                                            class="la la-user-plus mr-1"></i> Admission</a>
                                </div><!-- end nav-right-button -->
                            </div><!-- end menu-wrapper -->
                        </div><!-- end col-lg-10 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-content -->
        <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
            <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm"
                data-toggle="tooltip" data-placement="left" title="Close menu">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
            <ul class="generic-list-item off-canvas-menu-list pt-90px">
                <li>
                    <a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home One</a></li>
                        <li><a href="home-2.html">Home Two</a></li>
                        <li><a href="home-3.html">Home Three</a></li>
                        <li><a href="home-4.html">Home four</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">courses</a>
                    <ul class="sub-menu">
                        <li><a href="course-grid.html">course grid</a></li>
                        <li><a href="course-list.html">course list</a></li>
                        <li><a href="course-grid-left-sidebar.html">grid left sidebar</a></li>
                        <li><a href="course-grid-right-sidebar.html">grid right sidebar</a></li>
                        <li><a href="course-list-left-sidebar.html">list left sidebar <span
                                    class="ribbon ribbon-blue-bg">New</span></a></li>
                        <li><a href="course-list-right-sidebar.html">list right sidebar <span
                                    class="ribbon ribbon-blue-bg">New</span></a></li>
                        <li><a href="course-details.html">course details</a></li>
                        <li><a href="lesson-details.html">lesson details</a></li>
                        <li><a href="my-courses.html">My courses</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Student</a>
                    <ul class="sub-menu">
                        <li><a href="student-detail.html">student detail</a></li>
                        <li><a href="student-quiz.html">take quiz</a></li>
                        <li><a href="student-quiz-results.html">quiz results</a></li>
                        <li><a href="student-quiz-result-details.html">quiz details</a></li>
                        <li><a href="student-quiz-result-details-2.html">quiz details 2</a></li>
                        <li><a href="student-path.html">path details</a></li>
                        <li><a href="student-path-assessment.html">Skill Assessment</a></li>
                        <li><a href="student-path-assessment-result.html">Skill result</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">pages</a>
                    <ul class="sub-menu">
                        <li><a href="dashboard.html">dashboard <span class="ribbon">Hot</span></a></li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="teachers.html">Teachers</a></li>
                        <li><a href="teacher-detail.html">Teacher detail</a></li>
                        <li><a href="careers.html">careers</a></li>
                        <li><a href="career-details.html">career details</a></li>
                        <li><a href="categories.html">categories</a></li>
                        <li><a href="terms-and-conditions.html">Terms & conditions</a></li>
                        <li><a href="privacy-policy.html">privacy policy</a></li>
                        <li><a href="for-business.html">for business</a></li>
                        <li><a href="become-a-teacher.html">become an instructor</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="admission.html">admission</a></li>
                        <li><a href="gallery.html">gallery</a></li>
                        <li><a href="pricing-table.html">pricing tables</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="sign-up.html">sign-up</a></li>
                        <li><a href="login.html">login</a></li>
                        <li><a href="recover.html">recover</a></li>
                        <li><a href="shopping-cart.html">cart</a></li>
                        <li><a href="checkout.html">checkout</a></li>
                        <li><a href="error.html">page 404</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog-full-width.html">blog full width </a></li>
                        <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                        <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                        <li><a href="blog-single.html">blog detail</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- end off-canvas-menu -->
        <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
            <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm"
                data-toggle="tooltip" data-placement="left" title="Close menu">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
            <ul class="generic-list-item off-canvas-menu-list pt-90px">
                <li>
                    <a href="course-grid.html">Development</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Development</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Mobile Apps</a></li>
                        <li><a href="#">Game Development</a></li>
                        <li><a href="#">Databases</a></li>
                        <li><a href="#">Programming Languages</a></li>
                        <li><a href="#">Software Testing</a></li>
                        <li><a href="#">Software Engineering</a></li>
                        <li><a href="#">E-Commerce</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">business</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Business</a></li>
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Entrepreneurship</a></li>
                        <li><a href="#">Strategy</a></li>
                        <li><a href="#">Real Estate</a></li>
                        <li><a href="#">Home Business</a></li>
                        <li><a href="#">Communications</a></li>
                        <li><a href="#">Industry</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">IT & Software</a>
                    <ul class="sub-menu">
                        <li><a href="#">All IT & Software</a></li>
                        <li><a href="#">IT Certification</a></li>
                        <li><a href="#">Hardware</a></li>
                        <li><a href="#">Network & Security</a></li>
                        <li><a href="#">Operating Systems</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Finance & Accounting</a>
                    <ul class="sub-menu">
                        <li><a href="#"> All Finance & Accounting</a></li>
                        <li><a href="#">Accounting & Bookkeeping</a></li>
                        <li><a href="#">Cryptocurrency & Blockchain</a></li>
                        <li><a href="#">Economics</a></li>
                        <li><a href="#">Investing & Trading</a></li>
                        <li><a href="#">Other Finance & Economics</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">design</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Design Tools</a></li>
                        <li><a href="#">3D & Animation</a></li>
                        <li><a href="#">User Experience</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Personal Development</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Personal Development</a></li>
                        <li><a href="#">Personal Transformation</a></li>
                        <li><a href="#">Productivity</a></li>
                        <li><a href="#">Leadership</a></li>
                        <li><a href="#">Personal Finance</a></li>
                        <li><a href="#">Career Development</a></li>
                        <li><a href="#">Parenting & Relationships</a></li>
                        <li><a href="#">Happiness</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Marketing</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Marketing</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Search Engine Optimization</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Branding</a></li>
                        <li><a href="#">Video & Mobile Marketing</a></li>
                        <li><a href="#">Affiliate Marketing</a></li>
                        <li><a href="#">Growth Hacking</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Health & Fitness</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Health & Fitness</a></li>
                        <li><a href="#">Fitness</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Dieting</a></li>
                        <li><a href="#">Self Defense</a></li>
                        <li><a href="#">Meditation</a></li>
                        <li><a href="#">Mental Health</a></li>
                        <li><a href="#">Yoga</a></li>
                        <li><a href="#">Dance</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Photography</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Photography</a></li>
                        <li><a href="#">Digital Photography</a></li>
                        <li><a href="#">Photography Fundamentals</a></li>
                        <li><a href="#">Commercial Photography</a></li>
                        <li><a href="#">Video Design</a></li>
                        <li><a href="#">Photography Tools</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- end off-canvas-menu -->
        <div class="mobile-search-form">
            <div class="d-flex align-items-center">
                <form method="post" class="flex-grow-1 mr-3">
                    <div class="form-group mb-0">
                        <input class="form-control form--control pl-3" type="text" name="search"
                            placeholder="Search for anything">
                        <span class="la la-search search-icon"></span>
                    </div>
                </form>
                <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                    <i class="la la-times"></i>
                </div><!-- end off-canvas-menu-close -->
            </div>
        </div><!-- end mobile-search-form -->
        <div class="body-overlay"></div>
    </header><!-- end header-menu-area -->
    <!--======================================
        END HEADER AREA
======================================-->

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area section-padding img-bg-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="section-heading">
                    <h2 class="section__title text-white">Become An Instructor</h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="index.html">Home</a></li>
                    <li>Pages</li>
                    <li>Become An Instructor</li>
                </ul>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!--======================================
        START FEATURE AREA
 ======================================-->
    <section class="feature-area section--padding bg-gray">
        <div class="container">
            <div class="feature-heading-content-wrap text-center">
                <div class="section-heading">
                    <h2 class="section__title">Create an Online Video <br>
                        Course & Earn Money by Teaching</h2>
                </div><!-- end section-heading -->
            </div>
            <div class="row pt-60px">
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box before-none">
                        <div class="icon-element mx-auto shadow-sm">
                            <svg class="svg-icon-color-1" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                x="0px" y="0px" viewBox="0 0 512.001 512.001" xml:space="preserve">
                                <g>
                                    <path
                                        d="M400.003,152H256.001c-5.523,0-10,4.477-10,10s4.477,10,10,10h144.002c5.523,0,10-4.477,10-10S405.526,152,400.003,152z" />
                                </g>
                                <g>
                                    <path
                                        d="M365.011,202.931c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07 s1.07,5.21,2.93,7.07s4.44,2.93,7.07,2.93s5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07S366.871,204.791,365.011,202.931z" />
                                </g>
                                <g>
                                    <path d="M263.061,45.931c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07
                                        s1.07,5.21,2.93,7.07c1.86,1.86,4.44,2.93,7.07,2.93s5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07
                                        S264.921,47.791,263.061,45.931z" />
                                </g>
                                <g>
                                    <path
                                        d="M315.878,200h-59.877c-5.523,0-10,4.477-10,10s4.477,10,10,10h59.877c5.523,0,10-4.477,10-10S321.401,200,315.878,200z" />
                                </g>
                                <g>
                                    <path
                                        d="M400.003,260H256.001c-5.523,0-10,4.477-10,10s4.477,10,10,10h144.002c5.523,0,10-4.477,10-10S405.526,260,400.003,260z" />
                                </g>
                                <g>
                                    <path
                                        d="M365.011,310.931c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07
                                        s1.07,5.21,2.93,7.07s4.44,2.93,7.07,2.93s5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07S366.871,312.791,365.011,310.931z" />
                                </g>
                                <g>
                                    <path
                                        d="M315.878,308h-59.877c-5.523,0-10,4.477-10,10s4.477,10,10,10h59.877c5.523,0,10-4.477,10-10S321.401,308,315.878,308z" />
                                </g>
                                <g>
                                    <path
                                        d="M400.003,368H256.001c-5.523,0-10,4.477-10,10s4.477,10,10,10h144.002c5.523,0,10-4.477,10-10S405.526,368,400.003,368z" />
                                </g>
                                <g>
                                    <path
                                        d="M365.011,418.931c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07
                                        s1.07,5.21,2.93,7.07s4.44,2.93,7.07,2.93s5.21-1.07,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07S366.871,420.791,365.011,418.931z" />
                                </g>
                                <g>
                                    <path
                                        d="M315.878,416h-59.877c-5.523,0-10,4.477-10,10s4.477,10,10,10h59.877c5.523,0,10-4.477,10-10S321.401,416,315.878,416z" />
                                </g>
                                <g>
                                    <path
                                        d="M419.243,39.001h-76.379C331.823,28.48,316.898,22,300.479,22h-8.76C285.022,8.742,271.263,0,256,0
                                        s-29.021,8.742-35.719,22H211.5c-16.419,0-31.343,6.48-42.384,17.001H92.759c-26.885,0-48.758,21.873-48.758,48.758v375.484
                                        c0,26.885,21.873,48.758,48.758,48.758h326.483c26.885,0,48.758-21.873,48.758-48.758V87.759
                                        C468.001,60.874,446.128,39.001,419.243,39.001z M211.501,42h15.586c4.498,0,8.442-3.003,9.639-7.338
                                        C239.111,26.029,247.037,20,256.001,20c8.964,0,16.89,6.029,19.274,14.662c1.197,4.335,5.142,7.338,9.639,7.338h15.565
                                        c21.705,0,39.571,16.75,41.354,38.001H170.147C171.93,58.75,189.797,42,211.501,42z M448.001,463.244
                                        c0,15.857-12.901,28.758-28.758,28.758H92.759c-15.857,0-28.758-12.901-28.758-28.758V87.759
                                        c0-15.857,12.901-28.758,28.758-28.758h62.347c-3.276,7.512-5.105,15.794-5.105,24.5v6.5c0,5.523,4.477,10,10,10H351.98
                                        c5.523,0,10-4.477,10-10v-6.5c0-8.705-1.829-16.988-5.105-24.5h62.368c15.857,0,28.758,12.901,28.758,28.758V463.244z" />
                                </g>
                                <g>
                                    <path
                                        d="M192.41,149.596c-3.905-3.905-10.237-3.905-14.142-0.001l-42.762,42.763l-13.173-13.174
                                        c-3.905-3.904-10.237-3.904-14.143,0c-3.905,3.905-3.905,10.237,0,14.143l20.245,20.245c1.953,1.953,4.512,2.929,7.071,2.929
                                        c2.559,0,5.119-0.976,7.071-2.929l49.833-49.833C196.315,159.834,196.315,153.502,192.41,149.596z" />
                                </g>
                                <g>
                                    <path d="M168.001,368h-48c-5.523,0-10,4.477-10,10v48c0,5.523,4.477,10,10,10h48c5.523,0,10-4.477,10-10v-48
                                        C178.001,372.477,173.524,368,168.001,368z M158.001,416h-28v-28h28V416z" />
                                </g>
                                <g>
                                    <path d="M168.001,260h-48c-5.523,0-10,4.477-10,10v48c0,5.523,4.477,10,10,10h48c5.523,0,10-4.477,10-10v-48
                                        C178.001,264.477,173.524,260,168.001,260z M158.001,308h-28v-28h28V308z" />
                                </g>
                            </svg>
                        </div>
                        <h3 class="info__title">01. Plan Your Course</h3>
                        <p class="info__text">Whether you want to develop as a professional or discover a new hobby,
                            there's an online course for that.</p>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box before-none">
                        <div class="icon-element mx-auto shadow-sm">
                            <svg class="svg-icon-color-2" width="40" viewBox="0 -48 496 496"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m472 0h-448c-13.230469 0-24 10.769531-24 24v352c0 13.230469 10.769531 24 24 24h448c13.230469 0 24-10.769531 24-24v-352c0-13.230469-10.769531-24-24-24zm8 376c0 4.414062-3.59375 8-8 8h-448c-4.40625 0-8-3.585938-8-8v-352c0-4.40625 3.59375-8 8-8h448c4.40625 0 8 3.59375 8 8zm0 0">
                                </path>
                                <path d="m448 32h-400v240h400zm-16 224h-368v-208h368zm0 0"></path>
                                <path
                                    d="m328 200.136719c0-17.761719-11.929688-33.578125-29.007812-38.464844l-26.992188-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.449219-41.503906-11.183593-.96875-22.34375 2.800781-30.574219 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907l-26.992188 7.710937c-17.078124 4.886719-29.007812 20.703125-29.007812 38.464844v39.863281h160zm-16 23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312l-3.976562-2.3125c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.839844-13.160156 7.792969-17.695312 5.007812-4.601563 11.496093-6.832032 18.382812-6.207032 12.230469 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031zm0 0">
                                </path>
                                <path
                                    d="m32 364.945312 73.886719-36.945312-73.886719-36.945312zm16-48 22.113281 11.054688-22.113281 11.054688zm0 0">
                                </path>
                                <path d="m152 288h16v80h-16zm0 0"></path>
                                <path d="m120 288h16v80h-16zm0 0"></path>
                                <path d="m336 288h-48v32h-104v16h104v32h48v-32h128v-16h-128zm-16 64h-16v-48h16zm0 0">
                                </path>
                            </svg>
                        </div>
                        <h3 class="info__title">02. Record Your Video</h3>
                        <p class="info__text">Whether you want to develop as a professional or discover a new hobby,
                            there's an online course for that.</p>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="info-box before-none">
                        <div class="icon-element mx-auto shadow-sm">
                            <svg class="svg-icon-color-3" width="41" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160
                                                C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160
                                                c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224
                                                S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32
                                                C426.667,241.643,412.309,256,394.667,256z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333
                                                S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32
                                                C129.515,241.643,115.157,256,97.515,256z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667
                                                c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                                                c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656
                                                c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667
                                                c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96
                                                c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320
                                                c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h3 class="info__title">03. Build Community</h3>
                        <p class="info__text">Whether you want to develop as a professional or discover a new hobby,
                            there's an online course for that.</p>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end feature-area -->
    <!--======================================
       END FEATURE AREA
======================================-->

    <!-- ================================
       START FUNFACT AREA
================================= -->
    <section class="funfact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column-half">
                    <div class="counter-item">
                        <div class="counter__icon icon-element mb-3 shadow-sm">
                            <svg class="svg-icon-color-1" width="40" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="m499.5 422h-10v-304.92c0-20.678-16.822-37.5-37.5-37.5h-108.332v-27.962c0-28.462-23.156-51.618-51.618-51.618h-72.1c-28.462 0-51.618 23.156-51.618 51.618v27.962h-108.332c-20.678 0-37.5 16.822-37.5 37.5v304.92h-10c-6.893 0-12.5 5.607-12.5 12.5v34.549c0 23.683 19.268 42.951 42.951 42.951h426.098c23.683 0 42.951-19.268 42.951-42.951v-34.549c0-6.893-5.607-12.5-12.5-12.5zm-155.832-307.112h2.347c6.299 0 11.423 5.124 11.423 11.423 0 6.298-5.124 11.422-11.423 11.422h-2.347zm0 37.844h2.347c15.203.011 27.366-12.987 26.36-28.152h72.125v249.151h-18.64v-41.301c0-14.129-4.877-27.975-13.732-38.988-8.856-11.014-21.335-18.751-35.139-21.786l-67.199-14.761c-4.975-1.086-8.438-5.551-8.44-10.494v-12.896c25.347-15.384 42.318-43.248 42.318-75.002zm-144.678 120.228 6.441-1.415c6.113-1.344 11.335-4.877 14.948-9.642l24.143 17.74-15.434 15.434zm29.701 38.208-3.889 62.563h-123.662v-41.301c0-22 15.599-41.398 37.09-46.124l41.257-9.062 43.142 31.702c1.838 1.349 3.941 2.081 6.062 2.222zm57.691-64.029-30.382 22.325-30.382-22.325c.031-.624.058-5.717.033-6.388 9.461 3.502 19.686 5.419 30.35 5.419s20.888-1.917 30.35-5.419c-.013.671-.005 5.765.031 6.388zm-42.032 53.89 11.65-11.65 11.599 11.599 4.258 72.753h-32.027zm23.129-21.385 24.143-17.74c3.613 4.765 8.835 8.298 14.948 9.642l6.44 1.415-30.098 22.118zm21.894 29.3 43.14-31.701 41.256 9.062c21.492 4.726 37.091 24.124 37.091 46.124v41.302h-123.976l-3.662-62.561c2.151-.126 4.287-.857 6.151-2.226zm-106.041-194.309c10.817-.592 21.509-2.153 31.874-4.66 4.026-.974 6.501-5.027 5.527-9.054-.975-4.026-5.026-6.503-9.054-5.526-9.216 2.229-18.722 3.628-28.348 4.202v-47.979c.001-20.191 16.428-36.618 36.619-36.618h72.1c20.191 0 36.618 16.427 36.618 36.618v45.1c-6.201-2.706-12.011-6.201-17.336-10.485-7.358-5.922-13.503-13.088-18.26-21.298-1.673-2.89-4.521-4.86-7.814-5.407-3.288-.544-6.619.398-9.132 2.589-10.05 8.761-21.15 16.144-33.04 21.971-3.719 1.822-5.257 6.315-3.434 10.035 1.821 3.718 6.313 5.258 10.035 3.434 11.728-5.747 22.683-12.825 32.811-21.178 5.302 8.187 11.822 15.419 19.43 21.54 8.063 6.488 17.038 11.5 26.74 14.939v45.645c0 40.069-32.599 72.668-72.668 72.668s-72.668-32.599-72.668-72.668zm27.318 118.869v12.896c-.006 4.93-3.494 9.415-8.439 10.494l-67.201 14.761c-13.803 3.035-26.281 10.772-35.138 21.786-8.855 11.014-13.732 24.859-13.732 38.988v41.302h-18.64v-249.151h72.125c-1.022 15.115 11.132 28.186 26.36 28.152h2.347v5.77c0 31.754 16.971 59.619 42.318 75.002zm-56.087-107.193c0-6.299 5.124-11.423 11.423-11.423h2.347v22.845h-2.347c-6.299-.001-11.423-5.125-11.423-11.422zm342.437 342.738c0 15.412-12.539 27.951-27.951 27.951h-426.098c-15.412 0-27.951-12.539-27.951-27.951v-32.049h190.545v12.5c0 9.649 7.851 17.5 17.5 17.5h65.91c9.649 0 17.5-7.851 17.5-17.5v-12.5h72.043c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-340.998v-304.92c0-12.406 10.094-22.5 22.5-22.5h108.332v5.308h-2.347c-8.226 0-15.584 3.78-20.434 9.692h-81.551c-6.341 0-11.5 5.159-11.5 11.5v260.151c0 4.143 3.357 7.5 7.5 7.5h392c4.143 0 7.5-3.357 7.5-7.5v-260.151c0-6.341-5.159-11.5-11.5-11.5h-81.551c-4.85-5.913-12.208-9.692-20.434-9.692h-2.347v-5.308h108.332c12.406 0 22.5 10.094 22.5 22.5v304.92h-61.002c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h83.502zm-276.455-19.549v-12.5h70.91v12.5c0 1.379-1.121 2.5-2.5 2.5h-65.91c-1.379 0-2.5-1.121-2.5-2.5zm16.377-243.596c5.712 3.132 12.166 4.823 18.662 4.892 8.306.087 15.383-2.637 19.495-4.893 3.632-1.992 4.96-6.551 2.968-10.183s-6.549-4.961-10.183-2.968c-2.545 1.396-6.654 3.045-11.863 3.045-5.146 0-9.343-1.661-11.866-3.046-3.633-1.994-8.191-.661-10.183 2.97-1.991 3.633-.662 8.191 2.97 10.183zm-19.602-52.241c4.143 0 7.5-3.357 7.5-7.5v-15.472c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v15.472c0 4.143 3.358 7.5 7.5 7.5zm77.36 0c4.143 0 7.5-3.357 7.5-7.5v-15.472c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v15.472c0 4.143 3.357 7.5 7.5 7.5z" />
                                </g>
                            </svg>
                        </div>
                        <h4 class="counter__title counter text-color-2">7520</h4>
                        <p class="counter__meta">expert instructors</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="counter-item">
                        <div class="counter__icon icon-element mb-3 shadow-sm">
                            <svg class="svg-icon-color-2" width="42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                x="0px" y="0px" viewBox="0 0 480.1 480.1" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M240.135,0.05C144.085,0.036,57.277,57.289,19.472,145.586l-2.992,0.992l1.16,3.48
                                    c-49.776,122.766,9.393,262.639,132.159,312.415c28.673,11.626,59.324,17.594,90.265,17.577
                                    c132.548,0.02,240.016-107.416,240.036-239.964S372.684,0.069,240.135,0.05z M428.388,361.054l-12.324-12.316V320.05
                                    c0.014-1.238-0.26-2.462-0.8-3.576l-31.2-62.312V224.05c0-2.674-1.335-5.172-3.56-6.656l-24-16
                                    c-1.881-1.256-4.206-1.657-6.4-1.104l-29.392,7.344l-49.368-21.184l-6.792-47.584l18.824-18.816h40.408l13.6,20.44
                                    c1.228,1.838,3.163,3.087,5.344,3.448l48,8c1.286,0.216,2.604,0.111,3.84-0.304l44.208-14.736
                                    C475.855,208.053,471.889,293.634,428.388,361.054z M395.392,78.882l-13.008,8.672l-36.264-7.256l-23.528-7.832
                                    c-1.44-0.489-2.99-0.551-4.464-0.176l-29.744,7.432l-13.04-4.344l9.664-19.328h27.056c1.241,0.001,2.465-0.286,3.576-0.84
                                    l27.68-13.84C362.382,51.32,379.918,63.952,395.392,78.882z M152.44,33.914l19.2,12.8c0.944,0.628,2.01,1.048,3.128,1.232
                                    l38.768,6.464l-3.784,11.32l-20.2,6.744c-1.809,0.602-3.344,1.83-4.328,3.464l-22.976,38.288l-36.904,22.144l-54.4,7.768
                                    c-3.943,0.557-6.875,3.93-6.88,7.912v24c0,2.122,0.844,4.156,2.344,5.656l13.656,13.656v13.744l-33.28-22.192l-12.072-36.216
                                    C57.68,98.218,99.777,56.458,152.44,33.914z M129.664,296.21l-36.16-7.24l-13.44-26.808v-18.8l29.808-29.808l11.032,22.072
                                    c1.355,2.712,4.128,4.425,7.16,4.424h51.472l21.672,36.12c1.446,2.407,4.048,3.879,6.856,3.88h22.24l-5.6,28.056l-30.288,30.288
                                    c-1.503,1.499-2.349,3.533-2.352,5.656v20l-28.8,21.6c-2.014,1.511-3.2,3.882-3.2,6.4v28.896l-9.952-3.296l-14.048-35.136V304.05
                                    C136.065,300.248,133.389,296.97,129.664,296.21z M105.616,419.191C30.187,362.602-1.712,264.826,25.832,174.642l6.648,19.936
                                    c0.56,1.687,1.666,3.14,3.144,4.128l39.88,26.584l-9.096,9.104c-1.5,1.5-2.344,3.534-2.344,5.656v24
                                    c-0.001,1.241,0.286,2.465,0.84,3.576l16,32c1.108,2.21,3.175,3.784,5.6,4.264l33.6,6.712v73.448
                                    c-0.001,1.016,0.192,2.024,0.568,2.968l16,40c0.876,2.185,2.67,3.874,4.904,4.616l24,8c0.802,0.272,1.642,0.412,2.488,0.416
                                    c4.418,0,8-3.582,8-8v-36l28.8-21.6c2.014-1.511,3.2-3.882,3.2-6.4v-20.688l29.656-29.656c1.115-1.117,1.875-2.54,2.184-4.088
                                    l8-40c0.866-4.333-1.944-8.547-6.277-9.413c-0.515-0.103-1.038-0.155-1.563-0.155h-27.472l-21.672-36.12
                                    c-1.446-2.407-4.048-3.879-6.856-3.88h-51.056l-13.744-27.576c-1.151-2.302-3.339-3.91-5.88-4.32
                                    c-2.54-0.439-5.133,0.399-6.936,2.24l-10.384,10.344V192.05c0-2.122-0.844-4.156-2.344-5.656l-13.656-13.656v-13.752l49.136-7.016
                                    c1.055-0.153,2.07-0.515,2.984-1.064l40-24c1.122-0.674,2.062-1.614,2.736-2.736l22.48-37.464l21.192-7.072
                                    c2.393-0.785,4.271-2.662,5.056-5.056l8-24c1.386-4.195-0.891-8.72-5.086-10.106c-0.387-0.128-0.784-0.226-1.186-0.294
                                    l-46.304-7.72l-8.136-5.424c50.343-16.386,104.869-14.358,153.856,5.72l-14.616,7.296h-30.112c-3.047-0.017-5.838,1.699-7.2,4.424
                                    l-16,32c-1.971,3.954-0.364,8.758,3.59,10.729c0.337,0.168,0.685,0.312,1.042,0.431l24,8c1.44,0.489,2.99,0.551,4.464,0.176
                                    l29.744-7.432l21.792,7.256c0.312,0.112,0.633,0.198,0.96,0.256l40,8c2.08,0.424,4.244-0.002,6.008-1.184l18.208-12.144
                                    c8.961,9.981,17.014,20.741,24.064,32.152l-39.36,13.12l-42.616-7.104l-14.08-21.12c-1.476-2.213-3.956-3.547-6.616-3.56h-48
                                    c-2.122,0-4.156,0.844-5.656,2.344l-24,24c-1.782,1.781-2.621,4.298-2.264,6.792l8,56c0.403,2.769,2.223,5.126,4.8,6.216l56,24
                                    c1.604,0.695,3.394,0.838,5.088,0.408l28.568-7.144l17.464,11.664v27.72c-0.014,1.238,0.26,2.462,0.8,3.576l31.2,62.312v30.112
                                    c0,2.122,0.844,4.156,2.344,5.656l16.736,16.744C344.921,473.383,204.549,493.415,105.616,419.191z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h4 class="counter__title counter text-color-3">54,252</h4>
                        <p class="counter__meta">foreign followers</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="counter-item">
                        <div class="counter__icon icon-element mb-3 shadow-sm">
                            <svg class="svg-icon-color-3" width="42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160
                                                C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160
                                                c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224
                                                S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32
                                                C426.667,241.643,412.309,256,394.667,256z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333
                                                S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32
                                                C129.515,241.643,115.157,256,97.515,256z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667
                                                c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                                                c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656
                                                c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667
                                                c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96
                                                c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320
                                                c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h4 class="counter__title counter text-color-4">97,220</h4>
                        <p class="counter__meta">students enrolled</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="counter-item">
                        <div class="counter__icon icon-element mb-3 shadow-sm">
                            <svg class="svg-icon-color-4" width="40" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="m181.022 142.59-8.659 3.138c-13.364 4.846-23.334 16.536-26.021 30.517l-2.938 15.396c-1.466 7.626.53 15.436 5.479 21.425 4.951 5.995 12.251 9.433 20.025 9.433h75.057c7.714 0 14.977-3.393 19.927-9.309 4.946-5.911 7.004-13.65 5.646-21.233l-2.74-15.315c-2.539-14.201-12.542-26.081-26.108-31.004l-9.18-3.327v-13.53c0-.38-.037-.75-.092-1.115 6.697-6.818 10.533-16.115 10.533-25.627v-20.159c0-19.678-16.01-35.687-35.689-35.687s-35.692 16.009-35.692 35.687v20.787c0 9.778 4.032 18.705 10.515 25.188-.038.304-.063.611-.063.925zm71.008 36.692 2.74 15.317c.574 3.201-.295 6.468-2.384 8.964-2.092 2.5-5.162 3.935-8.423 3.935h-75.057c-3.285 0-6.369-1.452-8.461-3.985-2.088-2.528-2.931-5.823-2.311-9.05l2.938-15.396c1.693-8.812 7.979-16.183 16.4-19.236l5.672-2.055c.142.146.285.293.439.428 6.463 5.651 14.57 8.477 22.682 8.476 8.102 0 16.207-2.82 22.671-8.46.233-.203.447-.422.651-.65l5.983 2.169c8.554 3.102 14.86 10.59 16.46 19.543zm-66.46-97.402c0-11.406 9.281-20.687 20.689-20.687 9.628 0 17.718 6.62 20.015 15.54-.964.471-1.953.916-2.966 1.321-9.222 3.692-16.671 3.202-18.8 1.71-3.392-2.378-8.068-1.558-10.447 1.834-2.378 3.392-1.557 8.068 1.834 10.447 3.663 2.569 8.635 3.853 14.309 3.853 5.155 0 10.89-1.071 16.745-3.19v9.329c0 5.733-2.371 11.347-6.506 15.402-1.914 1.878-4.107 3.333-6.462 4.337-.165.063-.327.131-.486.205-2.419.957-5.003 1.438-7.644 1.369-11.184-.215-20.281-9.494-20.281-20.684zm19.993 56.469c.229.004.456.006.685.006 3.519 0 6.967-.529 10.261-1.544v11.999c-6.251 3.854-14.242 3.852-20.485-.006v-11.971c3.034.919 6.231 1.452 9.539 1.516z" />
                                    <path
                                        d="m88.264 350.904h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z" />
                                    <path
                                        d="m88.264 391.345h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z" />
                                    <path
                                        d="m88.264 431.784h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z" />
                                    <path
                                        d="m88.264 472.225h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z" />
                                    <path
                                        d="m80.764 262.524c0 4.143 3.357 7.5 7.5 7.5h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.358-7.5 7.5z" />
                                    <path
                                        d="m88.264 310.464h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z" />
                                    <path
                                        d="m60.569 350.932c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z" />
                                    <path
                                        d="m60.569 270.052c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z" />
                                    <path
                                        d="m60.569 310.492c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z" />
                                    <path
                                        d="m60.569 391.372c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z" />
                                    <path
                                        d="m60.569 431.813c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z" />
                                    <path
                                        d="m60.569 472.253c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z" />
                                    <path
                                        d="m485.63 118.121c-3.026-3.83-5.886-7.449-7.269-10.783-1.492-3.599-2.08-8.354-2.702-13.39-1.091-8.822-2.327-18.821-9.305-25.798s-16.978-8.213-25.8-9.304c-5.037-.622-9.794-1.21-13.393-2.702-3.335-1.383-6.953-4.241-10.784-7.268-5.271-4.165-11.068-8.738-17.922-10.813v-2.269c.001-19.736-16.058-35.794-35.797-35.794h-312.444c-19.739 0-35.798 16.058-35.798 35.795v28.949c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-28.949c0-11.467 9.33-20.795 20.798-20.795h312.444c11.468 0 20.798 9.328 20.798 20.795v2.27c-6.852 2.076-12.647 6.647-17.918 10.812-3.831 3.026-7.449 5.885-10.783 7.268-3.599 1.491-8.356 2.079-13.393 2.702-8.822 1.09-18.821 2.326-25.8 9.303-6.979 6.978-8.215 16.977-9.306 25.799-.622 5.035-1.21 9.791-2.702 13.39-1.383 3.334-4.242 6.953-7.269 10.783-5.604 7.091-11.954 15.128-11.954 25.417s6.351 18.326 11.954 25.417c3.026 3.83 5.886 7.449 7.269 10.783 1.492 3.599 2.08 8.354 2.702 13.391 1.091 8.821 2.327 18.82 9.305 25.797 6.978 6.978 16.978 8.213 25.8 9.304 2.63.325 5.179.644 7.532 1.084v113.367c0 4.443 2.48 8.411 6.473 10.355 3.992 1.947 8.645 1.453 12.146-1.288l15.943-12.483v136.94c0 11.467-9.33 20.795-20.798 20.795h-312.443c-11.468 0-20.798-9.328-20.798-20.795v-378.435c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v378.434c0 19.737 16.059 35.795 35.798 35.795h312.444c19.739 0 35.798-16.058 35.798-35.795v-136.94l15.943 12.482c2.081 1.63 4.571 2.466 7.089 2.466 1.716 0 3.444-.389 5.064-1.178 3.994-1.944 6.476-5.912 6.476-10.354v-83.697c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v76.555l-19.937-15.609c-2.015-1.595-4.549-2.474-7.136-2.474s-5.121.879-7.104 2.448l-19.959 15.627v-98.625c.544.426 1.091.857 1.645 1.294 7.092 5.604 15.13 11.953 25.42 11.953 10.289 0 18.327-6.35 25.419-11.952 3.831-3.026 7.45-5.886 10.784-7.269 3.599-1.491 8.356-2.079 13.393-2.702 8.822-1.09 18.821-2.326 25.801-9.303 6.977-6.978 8.213-16.977 9.304-25.798.623-5.036 1.211-9.792 2.703-13.391 1.383-3.334 4.242-6.953 7.269-10.783 5.604-7.091 11.954-15.128 11.954-25.417s-6.351-18.326-11.954-25.417zm-11.769 41.534c-3.528 4.465-7.176 9.081-9.355 14.337-2.273 5.48-3.016 11.487-3.734 17.296-.871 7.046-1.693 13.701-5.023 17.031-3.331 3.33-9.987 4.152-17.034 5.023-5.81.718-11.816 1.46-17.298 3.733-5.256 2.179-9.872 5.826-14.337 9.354-5.679 4.485-11.042 8.723-16.121 8.723s-10.442-4.237-16.121-8.723c-4.465-3.527-9.081-7.175-14.337-9.354-.362-.15-1.618-.628-1.889-.712-4.957-1.724-10.26-2.385-15.41-3.021-7.047-.871-13.703-1.694-17.034-5.024-3.329-3.329-4.152-9.984-5.023-17.029-.718-5.81-1.46-11.815-3.733-17.297-2.18-5.256-5.827-9.872-9.355-14.337-4.485-5.678-8.723-11.04-8.723-16.117s4.237-10.439 8.723-16.117c3.528-4.465 7.176-9.081 9.355-14.337 2.273-5.48 3.016-11.487 3.733-17.296.871-7.046 1.694-13.701 5.024-17.031 3.331-3.33 9.987-4.152 17.034-5.023 5.81-.718 11.816-1.46 17.298-3.733 5.256-2.179 9.872-5.826 14.337-9.354 5.667-4.477 11.021-8.705 16.091-8.721.009 0 .019.001.028.001.01 0 .02-.001.03-.001 5.071.015 10.425 4.244 16.093 8.721 4.465 3.527 9.081 7.175 14.337 9.354 5.481 2.273 11.489 3.016 17.299 3.733 7.047.871 13.703 1.694 17.033 5.024s4.153 9.984 5.024 17.03c.718 5.809 1.46 11.815 3.733 17.296 2.18 5.256 5.827 9.872 9.355 14.337 4.485 5.678 8.723 11.04 8.723 16.117s-4.237 10.44-8.723 16.117z" />
                                    <path
                                        d="m439.109 119.704-25.522-7.221-14.757-22.04c-1.763-2.632-4.705-4.202-7.872-4.202s-6.11 1.571-7.872 4.202l-14.757 22.04-25.524 7.222c-3.048.863-5.452 3.178-6.43 6.19s-.392 6.297 1.566 8.783l16.403 20.843-1.018 26.497c-.123 3.166 1.333 6.168 3.896 8.031 1.645 1.195 3.594 1.813 5.565 1.813 1.102 0 2.21-.193 3.274-.585l24.895-9.158 24.893 9.157c2.973 1.096 6.276.636 8.839-1.225s4.021-4.862 3.899-8.029l-1.018-26.502 16.404-20.843c1.958-2.489 2.543-5.772 1.564-8.784-.975-3.012-3.379-5.326-6.428-6.189zm-24.587 28.143c-1.386 1.764-2.103 3.97-2.018 6.219l.778 20.284-19.053-7.009c-2.111-.777-4.436-.776-6.543-.001l-19.055 7.01.779-20.291c.084-2.241-.634-4.447-2.023-6.217l-12.554-15.952 19.539-5.527c2.161-.613 4.04-1.979 5.289-3.845l11.295-16.87 11.294 16.868c1.25 1.867 3.129 3.233 5.294 3.848l19.535 5.526z" />
                                </g>
                            </svg>
                        </div>
                        <h4 class="counter__title counter text-color-5">20</h4>
                        <p class="counter__meta">years of experience</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end funfact-area -->
    <!-- ================================
       START FUNFACT AREA
================================= -->

    <div class="section-block"></div>

    <!--======================================
        START REGISTER AREA
======================================-->
    <section class="register-area section--padding dot-bg overflow-hidden">
        <div class="container">
            <div class="register-heading-content-wrap text-center">
                <div class="section-heading">
                    <h2 class="section__title">Fill Up this Form to Join with Us</h2>
                </div><!-- end section-heading -->
            </div>
            <div class="row pt-50px">
                <div class="col-lg-10 mx-auto">
                    <div class="card card-item">
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" class="row" action="{{ route('requests.store') }}">
                                @csrf
                                <div class="input-box col-lg-6">
                                <input type="hidden" name="student_id" value="{{ $student->id}}">
                                    <label class="label-text">First Name</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="first_name"
                                            placeholder="e.g. Alex">
                                        <span class="la la-user input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-6">
                                    <label class="label-text">Last Name</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="last_name"
                                            placeholder="e.g. Smith">
                                        <span class="la la-user input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-6">
                                    <label class="label-text">Email Address</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="email" name="email"
                                            placeholder="e.g. alexsmith@gmail.com">
                                        <span class="la la-envelope input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-6">
                                    <label class="label-text">Address</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="address"
                                            placeholder="e.g. 12345 Little Baker St, Melbourne">
                                        <span class="la la-map-marker input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-12">
                                    <label class="label-text">Phone Number</label>
                                    <div class="form-group">
                                        <input id="phone" class="form-control form--control" type="text" name="phone">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-12">
                                    <label class="label-text">Birthday</label>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label">Pick a Date</label>
                                            <input type="text" name="date_of_birth" id="date_of_birth"
                                                class="form-control datepicker" value="{{ old('date_of_birth') }}"
                                                required />
                                            @error('date_of_birth')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div><!-- end col-lg-4 -->
                                    </div><!-- end row -->
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-6">
                                    <label class="label-text">City</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="city"
                                            placeholder="City">
                                        <span class="la la-map input-icon"></span>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-6">
                                    <label for="country-select" class="label-text">Country</label>
                                    <div class="form-group">
                                        <div class="select-container w-auto">
                                            <select id="country-select" name="country" class="select-container-select">
                                                <option selected>Select Country</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The
                                                    Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                                </option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories
                                                </option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                    Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                                    State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                </option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                    People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                    Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia,
                                                    The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated
                                                    States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                    Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                </option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                    Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South
                                                    Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China
                                                </option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic
                                                    of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor
                                                    Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box col-lg-12">
                                    <label class="label-text">Select Gender</label>
                                    <div class="form-group d-flex align-items-center">
                                        <div class="custom-control custom-radio fs-15 mr-3">
                                            <input type="radio" class="custom-control-input" id="maleRadioCheck"
                                                name="gender" value="male" required>
                                            <label class="custom-control-label custom--control-label"
                                                for="maleRadioCheck">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio fs-15">
                                            <input type="radio" class="custom-control-input" id="femaleRadioCheck"
                                                name="gender" value="female" required>
                                            <label class="custom-control-label custom--control-label"
                                                for="femaleRadioCheck">Female</label>
                                        </div>
                                    </div>

                                </div><!-- end input-box -->
                                <div class="btn-box col-lg-12">
                                    <div class="custom-control custom-checkbox mb-4 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="agreeCheckbox" required>
                                        <label class="custom-control-label custom--control-label" for="agreeCheckbox">by
                                            signing i agree to the
                                            <a href="terms-and-conditions.html" class="text-color hover-underline">terms
                                                and conditions</a> and
                                            <a href="privacy-policy.html" class="text-color hover-underline">privacy
                                                policy</a>
                                        </label>
                                    </div><!-- end custom-control -->
                                    <button class="btn theme-btn" type="submit">Apply Now <i
                                            class="la la-arrow-right icon ml-1"></i></button>
                                </div><!-- end btn-box -->
                            </form>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end register-area -->
    <!--======================================
        END REGISTER AREA
======================================-->

    <!-- ================================
         END FOOTER AREA
================================= -->
    <section class="footer-area pt-100px bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column-half">
                    <div class="footer-item">
                        <h3 class="fs-20 font-weight-semi-bold pb-2">Company</h3>
                        <div class="divider border-bottom-0"><span></span></div>
                        <ul class="generic-list-item">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Become a Teacher</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="footer-item">
                        <h3 class="fs-20 font-weight-semi-bold pb-2">Courses</h3>
                        <div class="divider border-bottom-0"><span></span></div>
                        <ul class="generic-list-item">
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Hacking</a></li>
                            <li><a href="#">PHP Learning</a></li>
                            <li><a href="#">Spoken English</a></li>
                            <li><a href="#">Self-Driving Car</a></li>
                            <li><a href="#">Garbage Collectors</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="footer-item">
                        <h3 class="fs-20 font-weight-semi-bold pb-2">Download App</h3>
                        <div class="divider border-bottom-0"><span></span></div>
                        <div class="mobile-app">
                            <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                            <a href="#" class="d-block mb-2 hover-s"><img src="images/appstore.png" alt="App store"
                                    class="img-fluid"></a>
                            <a href="#" class="d-block hover-s"><img src="images/googleplay.png" alt="Google play store"
                                    class="img-fluid"></a>
                        </div>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="footer-item">
                        <h3 class="fs-20 font-weight-semi-bold pb-2">Newsletter</h3>
                        <div class="divider border-bottom-0"><span></span></div>
                        <form method="post" class="subscriber-form">
                            <p class="pb-3 lh-24">Want us to email you about special offers & updates?</p>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form--control pl-3"
                                    placeholder="Enter email address">
                                <button class="btn theme-btn w-100 mt-3" type="button">Subscribe <i
                                        class="la la-arrow-right icon ml-1"></i></button>
                            </div>
                        </form>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="section-block"></div>
        <div class="copyright-content py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="d-flex flex-wrap align-items-center">
                            <a href="index.html" class="pr-4">
                                <img src="images/logo.png" alt="footer logo" class="footer__logo">
                            </a>
                            <p class="copy-desc">Copyright &copy; 2021 <a href="https://techydevs.com/">TechyDevs</a>
                                Inc.</p>
                        </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end">
                            <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                                <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                            <div class="select-container select-container-sm">
                                <select class="select-container-select">
                                    <option value="1">English</option>
                                    <option value="2">Deutsch</option>
                                    <option value="3">Español</option>
                                    <option value="4">Français</option>
                                    <option value="5">Bahasa Indonesia</option>
                                    <option value="6">Bangla</option>
                                    <option value="7">日本語</option>
                                    <option value="8">한국어</option>
                                    <option value="9">Nederlands</option>
                                    <option value="10">Polski</option>
                                    <option value="11">Português</option>
                                    <option value="12">Română</option>
                                    <option value="13">Русский</option>
                                    <option value="14">ภาษาไทย</option>
                                    <option value="15">Türkçe</option>
                                    <option value="16">中文(简体)</option>
                                    <option value="17">中文(繁體)</option>
                                    <option value="17">Hindi</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end copyright-content -->
    </section><!-- end footer-area -->
    <!-- ================================
          END FOOTER AREA
================================= -->

    <!-- start scroll top -->
    <div id="scroll-top">
        <i class="la la-arrow-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

    <!-- template js files -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/waypoint.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/fancybox.js') }}"></script>
    <script src="{{ asset('js/datedropper.min.js') }}"></script>
    <script src="{{ asset('js/emojionearea.min.js') }}"></script>
    <script src="{{ asset('js/intlTelInput-jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>

        $(function () {
            $("#date_of_birth").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });

    </script>
</body>

</html>