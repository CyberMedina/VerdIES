@extends('cliente.layouts.master')

@section('title', 'Promociones')

@section('content')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Cliente/assets/scss/home/home.css') }}">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">




    <div class="card mb-6">


        <livewire:Aliado />

        <!-- <div class="row gy-6 mb-6">
                    <div class="col-lg-6">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="card-body d-flex justify-content-between flex-wrap-reverse">
                                <div class="mb-0 w-100 app-academy-sm-60 d-flex flex-column justify-content-between text-center text-sm-start">
                                    <div class="card-title">
                                        <h5 class="text-primary mb-2">El duarte</h5>
                                        <p class="text-body w-sm-80 app-academy-xl-100">
                                            Fritanga.
                                        </p>
                                    </div>
                                    <div class="mb-0"><button class="btn btn-sm btn-primary">Ver promociones</button></div>
                                </div>
                                <div class="w-100 app-academy-sm-40 d-flex justify-content-center justify-content-sm-end h-px-150 mb-4 mb-sm-0">
                                    <img class="img-fluid scaleX-n1-rtl" src="https://res.cloudinary.com/drmoodyde/image/upload/v1728884274/logo2_voerlq.webp" alt="boy illustration" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="card-body d-flex justify-content-between flex-wrap-reverse">
                                <div class="mb-0 w-100 app-academy-sm-60 d-flex flex-column justify-content-between text-center text-sm-start">
                                    <div class="card-title">
                                        <h5 class="text-primary mb-2">LibreIES</h5>
                                        <p class="text-body w-sm-80 app-academy-xl-100">
                                            Librería
                                        </p>
                                    </div>
                                    <div class="mb-0"><button class="btn btn-sm btn-primary">Ver promociones</button></div>
                                </div>
                                <div class="w-100 app-academy-sm-40 d-flex justify-content-center justify-content-sm-end h-px-150 mb-4 mb-sm-0">
                                    <img class="img-fluid scaleX-n1-rtl" src="https://res.cloudinary.com/drmoodyde/image/upload/v1728884274/logo3_yv3kyl.webp" alt="boy illustration" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-6 mb-6">
                    <div class="col-lg-6">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="card-body d-flex justify-content-between flex-wrap-reverse">
                                <div class="mb-0 w-100 app-academy-sm-60 d-flex flex-column justify-content-between text-center text-sm-start">
                                    <div class="card-title">
                                        <h5 class="text-primary mb-2">Bar rojo</h5>
                                        <p class="text-body w-sm-80 app-academy-xl-100">
                                            Fritanga
                                        </p>
                                    </div>
                                    <div class="mb-0"><button class="btn btn-sm btn-primary">Ver promociones</button></div>
                                </div>
                                <div class="w-100 app-academy-sm-40 d-flex justify-content-center justify-content-sm-end h-px-150 mb-4 mb-sm-0">
                                    <img class="img-fluid scaleX-n1-rtl" src="https://res.cloudinary.com/drmoodyde/image/upload/v1728884273/logo1_kedikj.webp" alt="boy illustration" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row gy-6 mb-6">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="rounded-2 text-center mb-4">
                                <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-1.png" alt="tutor image 1"></a>
                            </div>
                            <div class="card-body p-4 pt-2">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <span class="badge bg-label-primary">Web</span>
                                    <p class="d-flex align-items-center justify-content-center fw-medium gap-1 mb-0">
                                        4.4 <span class="text-warning"><i class="bx bxs-star me-1 mb-1_5"></i></span><span class="fw-normal">(1.23k)</span>
                                    </p>
                                </div>
                                <a href="app-academy-course-details.html" class="h5">Basics of Angular</a>
                                <p class="mt-1">Introductory course for Angular and framework basics in web development.</p>
                                <p class="d-flex align-items-center mb-1"><i class="bx bx-time-five me-1"></i>30 minutes</p>
                                <div class="progress mb-4" style="height: 8px">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                    <a class="w-100 btn btn-label-secondary d-flex align-items-center" href="app-academy-course-details.html">
                                        <i class="bx bx-rotate-right bx-sm align-middle scaleX-n1-rtl me-2"></i><span>Start Over</span>
                                    </a>
                                    <a class="w-100 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                                        <span class="me-2">Continue</span><i class="bx bx-chevron-right bx-sm lh-1 scaleX-n1-rtl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-2 h-100 shadow-none border">
                            <div class="rounded-2 text-center mb-4">
                                <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-2.png" alt="tutor image 2"></a>
                            </div>
                            <div class="card-body p-4 pt-2">
                                <div class="d-flex justify-content-between align-items-center mb-4 pe-xl-4 pe-xxl-0">
                                    <span class="badge bg-label-danger">UI/UX</span>
                                    <p class="d-flex align-items-center justify-content-center fw-medium gap-1 mb-0">
                                        4.2 <span class="text-warning"><i class="bx bxs-star me-1 mb-1_5"></i></span><span class="fw-normal"> (424)</span>
                                    </p>
                                </div>
                                <a class="h5" href="app-academy-course-details.html">Figma & More</a>
                                <p class="mt-1">Introductory course for design and framework basics in web development.</p>
                                <p class="d-flex align-items-center mb-1"><i class="bx bx-time-five me-1"></i>16 hours</p>
                                <div class="progress mb-4" style="height: 8px">
                                    <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                <a class="w-100 btn btn-label-secondary d-flex align-items-center" href="app-academy-course-details.html">
                                    <i class="bx bx-rotate-right bx-sm align-middle me-2"></i><span>Start Over</span>
                                </a>
                                <a class="w-100 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                                    <span class="me-2">Continue</span><i class="bx bx-chevron-right bx-sm lh-1 scaleX-n1-rtl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card p-2 h-100 shadow-none border">
                        <div class="rounded-2 text-center mb-4">
                            <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-3.png" alt="tutor image 3"></a>
                        </div>
                        <div class="card-body p-4 pt-2">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="badge bg-label-success">SEO</span>
                                <p class="d-flex align-items-center justify-content-center fw-medium gap-1 mb-0">
                                    5 <span class="text-warning"><i class="bx bxs-star me-1 mb-1_5"></i></span><span class="fw-normal"> (12)</span>
                                </p>
                            </div>
                            <a class="h5" href="app-academy-course-details.html">Keyword Research</a>
                            <p class="mt-1">Keyword suggestion tool provides comprehensive details & keyword suggestions.</p>
                            <p class="d-flex align-items-center mb-1"><i class="bx bx-time-five me-1"></i>7 hours</p>
                            <div class="progress mb-4" style="height: 8px">
                                <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                <a class="w-100 btn btn-label-secondary d-flex align-items-center" href="app-academy-course-details.html">
                                    <i class="bx bx-rotate-right bx-sm align-middle me-2"></i><span>Start Over</span>
                                </a>
                                <a class="w-100 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                                    <span class="me-2">Continue</span><i class="bx bx-chevron-right bx-sm lh-1 scaleX-n1-rtl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card p-2 h-100 shadow-none border">
                        <div class="rounded-2 text-center mb-4">
                            <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-4.png" alt="tutor image 4"></a>
                        </div>
                        <div class="card-body p-4 pt-2">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="badge bg-label-info">Music</span>
                                <p class="d-flex align-items-center justify-content-center gap-1 mb-0">
                                    3.8 <span class="text-warning"><i class="bx bxs-star me-1 mb-1_5"></i></span><span class="fw-normal"> (634)</span>
                                </p>
                            </div>
                            <a class="h5" href="app-academy-course-details.html">Basics to Advanced</a>
                            <p class="mt-1">20 more lessons like this about music production, writing, mixing, mastering</p>
                            <p class="d-flex align-items-center mb-1"><i class="bx bx-time-five me-1"></i>30 minutes</p>
                            <div class="progress mb-4" style="height: 8px">
                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                <a class="w-100 btn btn-label-secondary d-flex align-items-center" href="app-academy-course-details.html">
                                    <i class="bx bx-rotate-right bx-sm align-middle me-2"></i><span>Start Over</span>
                                </a>
                                <a class="w-100 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                                    <span class="me-2">Continue</span><i class="bx bx-chevron-right bx-sm lh-1 scaleX-n1-rtl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card p-2 h-100 shadow-none border">
                        <div class="rounded-2 text-center mb-4">
                            <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-5.png" alt="tutor image 5"></a>
                        </div>
                        <div class="card-body p-4 pt-2">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="badge bg-label-warning">Painting</span>
                                <p class="d-flex align-items-center justify-content-center gap-1 mb-0">
                                    4.7 <span class="text-warning"><i class="bx bxs-star me-1 mb-1_5"></i></span><span class="fw-normal"> (34)</span>
                                </p>
                            </div>
                            <a class="h5" href="app-academy-course-details.html">Art & Drawing</a>
                            <p class="mt-1">Easy-to-follow video & guides show you how to draw animals, people & more.</p>
                            <p class="d-flex align-items-center text-success mb-1"><i class="bx bx-check me-1"></i>Completed</p>
                            <div class="progress mb-4" style="height: 8px">
                                <div class="progress-bar w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <a class="w-100 btn btn-label-primary" href="app-academy-course-details.html"><i class="bx bx-rotate-right bx-sm me-1_5"></i>Start Over</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card p-2 h-100 shadow-none border">
                        <div class="rounded-2 text-center mb-4">
                            <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-6.png" alt="tutor image 6"></a>
                        </div>
                        <div class="card-body p-4 pt-2">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="badge bg-label-danger">UI/UX</span>
                                <p class="d-flex align-items-center justify-content-center gap-1 mb-0">
                                    3.6 <span class="text-warning"><i class="bx bxs-star me-1 mb-1_5"></i></span><span class="fw-normal"> (2.5k)</span>
                                </p>
                            </div>
                            <a class="h5" href="app-academy-course-details.html">Basics Fundamentals</a>
                            <p class="mt-1">This guide will help you develop a systematic approach user interface.</p>
                            <p class="d-flex align-items-center mb-1"><i class="bx bx-time-five me-1"></i>16 hours</p>
                            <div class="progress mb-4" style="height: 8px">
                                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex flex-column flex-md-row gap-4 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                <a class="w-100 btn btn-label-secondary d-flex align-items-center" href="app-academy-course-details.html">
                                    <i class="bx bx-rotate-right bx-sm align-middle me-2"></i><span>Start Over</span>
                                </a>
                                <a class="w-100 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                                    <span class="me-2">Continue</span><i class="bx bx-chevron-right bx-sm lh-1 scaleX-n1-rtl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

    </div>
    <!-- / Content -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>

    <script src="{{ asset('Cliente/assets/js/home/index.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('Cliente/assets/js/app-academy-dashboard.js') }}"></script>
@endsection
