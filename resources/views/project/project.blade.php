
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>JohnDoe Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>
            <div class="header-content">
                <h4 class="header-subtitle" >Hello, I am</h4>
                @foreach (json_decode($data) as $item)
                <h4 class="header-subtitle" >{{ $item -> name }}</h4>
                <h6 class="header-mono" >{{ $item -> skill }}</h6>
                <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
                @endforeach
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('exprience') }}" class="nav-link">Work Exprience</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('project') }}" class="nav-link">Project</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="assets/imgs/avatar.jpg" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">John Doe</h5>
                        <div class="brand-subtitle">Web Designer | Developer</div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-6 about-card">
                <h3 class="font-weight-light">Who am I ?</h3>
                <span class="line mb-5"></span>
                    @foreach (json_decode($data) as $personal)
                    <h5 class="mb-3">{{ $personal -> skillTitle }}</h5>
                    <p class="mt-20">{{ $personal -> description }}</p>
                    @endforeach
                <button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</button>
            </div>
            <div class="col-lg-6 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                   @foreach (json_decode($data) as $expertise)
                   <div class="col-10 ml-auto mr-3">
                    <h6>{{ $expertise -> expertise }}</h6>
                    <p class="subtitle"> {{ $expertise -> designTitle }}</p>
                    <hr>
                     </div>
                   @endforeach
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    @foreach (json_decode($data) as $expertise)
                    <div class="col-10 ml-auto mr-3">
                        <h6>{{ $expertise -> webDevelopment}}</h6>
                        <p class="subtitle">{{ $expertise -> developTitle }}</p>
                        <hr>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".new" class="active">
                        New
                    </a>
                    <a href="#" data-filter=".advertising">
                        Advertising
                    </a>
                    <a href="#" data-filter=".branding">
                        Branding
                    </a>
                    <a href="#" data-filter=".web">
                        Web
                    </a>
                </div>
                <div class="portfolio-container">
                   @foreach (json_decode($project) as $item)
                   <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="{{ $item -> img }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href=""></a>
                            <div class="text-holder">
                                <a href="{{ route('single.page',$item->id) }}"><h6 class="title">{{ $item -> title }}</h6></a>
                                <p class="subtitle">{{ $item -> subtitle }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                   @endforeach
                </div>
            </div>
        </div>
    </section>

    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a>
            </p>
        </div>
    </footer>

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>
</html>
