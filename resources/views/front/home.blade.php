@extends('front.layouts.app')

@section('main')


<!-- Home Start -->
<section class="container-fluid my-5 section-container header-container" id="home">
    <img src="assets/google.png" alt="header" />
    <img src="assets/twitter.png" alt="header" />
    <img src="assets/amazon.png" alt="header" />
    <img src="assets/figma.png" alt="header" />
    <img src="assets/linkedin.png" alt="header" />
    <img src="assets/microsoft.png" alt="header" />
    <h2>
        <img src="assets/bag.png" alt="bag" /> No.1 Job Hunt Website
    </h2>
    <h1>Search, Apply &<br />Get Your <span>Dream Job</span></h1>
    <p>
        Your future starts here. Discover countless opportunities, take action
        by applying to jobs that match your skills and aspirations, and
        transform your career.
    </p>
    <div class="header-btns">
        <button class="btn btn-primary">Browse Jobs</button>
        <a href="#">
            <span><i class="bi bi-play-fill"></i></span>
            How It Works?
        </a>
    </div>
</section>


<!-- Home End -->


<!-- Search Start -->
<div class="container-fluid search mb-5 p-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-10">
                <div class="row g-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control border-0" placeholder="Keyword" />
                    </div>
                    <div class="col-md-4">
                        <select class="form-select border-0">
                            <option selected>Category</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select border-0">
                            <option selected>Location</option>
                            <option value="1">Location 1</option>
                            <option value="2">Location 2</option>
                            <option value="3">Location 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn bg-primary border-0 w-100">Search</button>
            </div>
        </div>
    </div>
</div>
<!-- Search End -->


<!-- Category Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-4 heading wow fadeInUp" style="max-width:900px; margin:auto;" data-wow-delay="0.1s"><span>Countless Career Options</span> Are Waiting For You To Explore </h1>
        <p class="text-center wow fadeInUp mb-5">Discover a World of Exciting Opportunities and Endless Possibilities, and <br> Find the Perfect Career Path to Shape Your Future. </p>

        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                    <h6 class="mb-3">Marketing</h6>
                    <p class="mb-0">123 Vacancy</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                    <h6 class="mb-3">Customer Service</h6>
                    <p class="mb-0">123 Vacancy</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                    <h6 class="mb-3">Human Resource</h6>
                    <p class="mb-0">123 Vacancy</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                    <h6 class="mb-3">Project Management</h6>
                    <p class="mb-0">123 Vacancy</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                    <h6 class="mb-3">Business Development</h6>
                    <p class="mb-0">123 Vacancy</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                    <h6 class="mb-3">Sales & Communication</h6>
                    <p class="mb-0">123 Vacancy</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                    <h6 class="mb-3">Teaching & Education</h6>
                    <p class="mb-0">123 Vacancy</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                    <h6 class="mb-3">Design & Creative</h6>
                    <p class="mb-0">123 Vacancy</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Category End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="assets/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="assets/about-2.jpg" style="width: 85%; margin-top: 15%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="assets/about-3.jpg" style="width: 85%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="assets/about-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center heading mb-5 wow fadeInUp" data-wow-delay="0.1s"><span>Latest & Top</span> Job Openings</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                        href="#tab-1">
                        <h6 class="mt-n1 mb-0">Featured</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <h6 class="mt-n1 mb-0">Full Time</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <h6 class="mt-n1 mb-0">Part Time</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-1.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Software Engineer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-2.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Marketing Manager</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-3.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Product Designer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-4.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Creative Director</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-5.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Wordpress Developer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-1.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Software Engineer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-2.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Marketing Manager</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-3.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Product Designer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-4.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Creative Director</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-5.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Wordpress Developer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-1.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Software Engineer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-2.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Marketing Manager</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-3.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Product Designer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-4.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Creative Director</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="assets/com-logo-5.jpg" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">Wordpress Developer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i
                                            class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jobs End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="text-center heading mb-5">What Our <span>Clients Say</span> </h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Creating an account was a breeze, and I was amazed by the number of job opportunities available.
                    Thanks to this website, I foundthe perfect position that aligned perfectly with my careergoals.
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="assets/testimonial-1.jpg"
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Jane Smith</h5>
                        <small>Software Engineer</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                    As a recent graduate, I was unsure where to start my job search.
                    This website guided me through the process step by step. From
                    creating my profile to receiving job offers, everything was
                    seamless. I'm now happily employed thanks to this platform!
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="assets/testimonial-2.jpg"
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">David Smith</h5>
                        <small>Recent Graduate</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                    Searching for a job can be overwhelming, but this platform made
                    it simple and efficient. I uploaded my resume, applied to a few
                    positions, and soon enough, I was hired! Thank you for helping
                    me kickstart my career!
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="assets/testimonial-3.jpg"
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Michael Brown</h5>
                        <small>Graphic Designer</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                    Searching for a job can be overwhelming, but this platform made
                    it simple and efficient. I uploaded my resume, applied to a few
                    positions, and soon enough, I was hired! Thank you for helping
                    me kickstart my career!
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="assets/testimonial-4.jpg"
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Sarah Patel</h5>
                        <small>Web Developer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection