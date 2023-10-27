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
        <section class="section" id="resume">
            <div class="container">
                <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
                @foreach (json_decode($expriences) as $exprience)
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                           <div class="card-header">
                                <div class="mt-2">
                                    <h4>Expertise</h4>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="title text-danger">2017 - Present</h6>
                                <P>{{ $exprience -> expertise2017 }}</P>
                                <P class="subtitle">{{ $exprience -> expertiseDescription }}</P>
                                <hr>
                                <h6 class="title text-danger">2016 - 2017</h6>
                                <P>{{ $exprience -> expertise2016 }}</P>
                                <P class="subtitle">{{ $exprience -> secoundDescription }}</P>
                                <hr>
                                <h6 class="title text-danger">2015 - 2016</h6>
                                <P>{{ $exprience -> expertise2015 }}</P>
                                <P class="subtitle">{{ $exprience -> thirdDescription }}</P>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                           <div class="card-header">
                                <div class="mt-2">
                                    <h4>Education</h4>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="title text-danger">2017 - Present</h6>
                                <P>{{ $exprience -> education2017 }}</P>
                                <P class="subtitle">{{ $exprience -> eduFirstDescription }}</P>
                                <hr>
                                <h6 class="title text-danger">2016 - 2017</h6>
                                <P>{{ $exprience -> education2016 }}</P>
                                <P class="subtitle">{{ $exprience -> eduSecoundDescription }}</P>
                                <hr>
                                <h6 class="title text-danger">2015 - 2016</h6>
                                <P>{{ $exprience -> education2015 }}</P>
                                <P class="subtitle">{{ $exprience -> eduThirdDescription }}.</P>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                           <div class="card-header">
                                <div class="pull-left">
                                    <h4 class="mt-2">Skills</h4>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="card-body pb-2">
                                <h6>{{$exprience -> html}}</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6>{{$exprience -> javascript}}</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6>{{$exprience -> php}}</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6>SQL</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6>{{$exprience -> laravel}}</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6>{{$exprience -> sql}}</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                           <div class="card-header">
                                <div class="pull-left">
                                    <h4 class="mt-2">Languages</h4>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="card-body pb-2">
                               <h6>{{$exprience -> languageBangla}}</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6>{{$exprience -> languageEnglish}}</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6>{{$exprience -> languageArabic}}</h6>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

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
