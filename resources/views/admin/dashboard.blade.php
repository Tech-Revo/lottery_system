<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    @include('adminLayouts/adminheader')

</head>

<body>

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    @include('adminLayouts/navbar')

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Home</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            @include('adminLayouts/smallnav')
        </header>
    </div>
    <!--  END NAVBAR  -->




    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('adminLayouts/sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">




            <div class="container" style="height: 200px">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-5 p-0">
                        <div id="style1" class="carousel slide style-custom-1" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#style1" data-slide-to="0" class="active"></li>
                                <li data-target="#style1" data-slide-to="1"></li>
                                <li data-target="#style1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 slide-image" src="{{ url('assets/img/banner.png') }}"
                                        alt="First slide">
                                    <div class="carousel-caption">
                                        .................
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 slide-image" src="{{ url('assets/img/banner.png') }}"
                                        alt="Second slide">
                                    <div class="carousel-caption">
                                        .................
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 slide-image" src="{{ url('assets/img/banner.png') }}"
                                        alt="Third slide">
                                    <div class="carousel-caption">
                                        .................
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#style1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#style1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>







        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->


    @include('adminLayouts/adminfooter')

</body>

</html>
