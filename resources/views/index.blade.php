<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Office Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- Bootstrap 5.1.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">


</head>

<body>
    <!-- Header Start -->
    <div class="header py-2 mb-3">
        <div class="container-fluid my-2">
            <div class="row align-items-center">
                <!--logo & title start-->
                <div class="col-md-5">
                    <a class="d-flex align-items-center logo" href="{{route('index')}}">
                        <!-- <img class="logo" src="img/Logo.png" alt="Logo"> -->
                        <h2 class="ms-3 mb-0 logo-title">
                            Dental Office Management System
                        </h2>
                    </a>
                </div>
                <!--logo & title end-->

                <!--nav start-->
                <div class="col-md-4">
                    <nav class="navbar navbar-expand-lg navbar-light p-0 ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav fs-4 pe-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Inventory</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Forum</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--nav end-->

                <!--info Bar start-->
                <div class="col-md-3">
                    <nav class="navbar navbar-expand-lg navbar-light p-0 ">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav fs-5 pe-auto ms-5">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">My Profile</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link " data-bs-toggle="dropdown" href="#" role="button"
                                            aria-expanded="false"><i class="fa-solid fa-gear"></i></a>
                                        <ul class="dropdown-menu">

                                            <li><a class="dropdown-item" href="{{route('profile_edit')}}">Edit Profile</a></li>
                                            <li><a class="dropdown-item" href="#">Log Out</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--info Bar end-->
            </div>
        </div>
    </div>
    <!-- Header end -->
    <!-- main start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 pe-0">
                <div class="profile">
                    <div class="complete">
                        <div class="p-header">
                            <!-- <img src="img/banner.jpg" class="cover"> -->
                            <img src="{{ asset('assets/img/profile.png')}}" class="doctor-profile my-4">

                            <h2 class="mb-2">Dr Abduallah Bin Sayeed</h2>
                            <p class="mb-2">Dental Consulatant of the Royal <br>Dental</p>
                            <a href="#_" class="btns mb-2">This Month</a>
                            <p class="mb-2">SMS Remaining : 50</p>
                            <p class="mb-2">Buy SMS : 50</p>

                        </div>
                    </div>
                </div>
                <div class="profile py-2">
                    <!-- <h3>Treatment Plans</h3> -->
                    <div class="complete">
                        <a href="{{route('patient')}}" class="btns my-2">Patient</a>
                        <a href="{{route('appointment')}}" class="btns my-2">Appointment</a>
                        <a href="#" class="btns my-2">Income/Expence</a>
                        <a href="#" class="btns my-2">Subscription</a>
                    </div>

                    <!-- <a href="">setting</a>
              <a href="" class="lgout-a">Logout</a> -->
                </div>
            </div>
            <div class="col-md-7 pe-0">
                <div class="blank-sec">
                    <!-- slider -->
                    <div id="carouselExampleSlidesOnly" class="carousel slide mb-3" data-bs-ride="carousel">
                        <div class="carousel-inner slide-border">
                            <div class="carousel-item active">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card slider-card-body">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title 1</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title 2</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title 3</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card slider-card-body">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title 4</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title 5</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title 6</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card slider-card-body">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title 7</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title 8</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card slider-card-body">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title 9</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider end -->
                    <!-- Search & New Patient Start -->
                    <div class="row m-0">
                        <div class="col-md-6 search-border-left ">
                            <input type="text" placeholder="Search Old Patient" name="" class="search-input">
                            <button class="search-btn">Search</button>
                        </div>
                        <div class="col-md-6 search-border-right">
                            <div class="new-gen-pat">
                                <!--  a tag trigger modal -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">New Patient
                                    registration
                                </a>
                                <!-- Modal -->
                                <div class="modal fade " id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <!-- Modal Header & Close btn -->
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="exampleModalLabel">
                                                    New Patient Registration
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <!-- Modal Header & Close btn end -->
                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Mobile no.</label> -->
                                                        <input type="number" class="form-control"
                                                            placeholder="Mobile No">
                                                        <!-- <div class="form-text"></div> -->
                                                    </div>
                                                    <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Name</label> -->
                                                        <input type="name" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Name">
                                                        <!-- <div id="emailHelp" class="form-text"></div> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="mName" class="form-label text-dark">Gender</label> -->
                                                                <select class="form-select" aria-label="Gender">
                                                                    <option selected>Select gender</option>
                                                                    <option value="1">Male</option>
                                                                    <option value="2">Female</option>
                                                                    <option value="3">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="mName" class="form-label text-dark">Blood Group</label> -->
                                                                <select class="form-select" aria-label="Blood Group">
                                                                    <option selected> Patient's Blood Group
                                                                    </option>
                                                                    <option value="a+">A+</option>
                                                                    <option value="a-">A-</option>
                                                                    <option value="b+">B+</option>
                                                                    <option value="b-">B-</option>
                                                                    <option value="ab-">AB+</option>
                                                                    <option value="ab-">AB-</option>
                                                                    <option value="o+">O+</option>
                                                                    <option value="o-">O-</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <!-- <label for="mName" class="form-label text-dark">Date of Birth</label> -->
                                                                <!-- <br> class="msform"-->
                                                                <input class="form-control" name="date_of_birth"
                                                                    type="date" placeholder=" ">
                                                            </div>
                                                        </div>
                                                       <div class="col">
                                                       <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Occupation</label> -->
                                                        <input type="text" class="form-control"
                                                            placeholder="Occupation">
                                                        <!-- <div class="form-text"></div> -->
                                                    </div>
                                                       </div>
                                                    </div>
                                                    

                                                    <div class="mb-3">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Address</label> -->
                                                        <input type="address" class="form-control"
                                                            placeholder="Address">
                                                        <!-- <div class="form-text"></div> -->
                                                    </div>
                                                    <div class="">
                                                        <!-- <label for="exampleInputEmail1" class="form-label text-dark">Email address</label> -->
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="Email address">
                                                        <div id="emailHelp" class="form-text">We'll never share your
                                                            email with anyone else.</div>
                                                    </div>
                                                    <div class="">
                                                        <label for="formFile" class="form-label text-dark">Drop your
                                                            image</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <!-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        </div> -->

                                                    <!-- <button type="submit" class="btn btn-primary ">Submit</button> -->
                                                </form>
                                            </div>
                                            <!-- Modal Body end -->
                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary  btn-sm">Save
                                                    changes</button>
                                            </div>
                                            <!-- Modal Footer end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                    </div>
                    <!-- Search & New Patient end-->
                    <!--Appointment Start  -->
                    <div class="Appointment-sec my-3">
                        <div class="Appointment-h p-2">
                            <h4 class="m-0">Today we have 6 Appointment</h4>
                        </div>
                        <!-- Appointment Status -->
                        <div class="row p-1">
                            <div class="col-md-3">
                                <div class="Appointment-details d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h4 class="m-0">Hasan Mahud</h4>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-success">Done</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="Appointment-details d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h4 class="m-0">Hasan Mahud</h4>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-warning">Pending</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="Appointment-details d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h4 class="m-0">Hasan Mahud</h4>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-warning">Pending</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="Appointment-details d-flex flex-wrap align-items-center p-1">
                                    <div class="Appointment-Patient-img me-2">
                                        <img src="{{ asset('assets/img/profile.png')}}">

                                    </div>
                                    <div class="Appointment-Patient-details">
                                        <h4 class="m-0">Hasan Mahud</h4>
                                        <p class="m-0">05:00pm</p>
                                        <p class="m-0"> Root canal</p>
                                    </div>
                                    <div class="patient-status m-auto my-1">
                                        <h5>Status : <span class="text-warning">Pending</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Appointment end  -->
                    <!--Patient list Start  -->
                    <div class="patient-list-col">
                        <div class="patient-list-h p-2">
                            <h4 class="m-0">Patient List</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Day</th>
                                    <th scope="col">Names</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Saturday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sunday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                </tr>
                                <tr>
                                    <th scope="row">Monday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                    <td>Shafi</td>
                                </tr>
                                <tr>
                                    <th scope="row">tuesday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wednesday</th>
                                </tr>
                                <tr>
                                    <th scope="row">Thursday</th>
                                    <td>Tom</td>
                                    <td>Sam</td>
                                    <td>Rafa</td>
                                </tr>
                                <tr>
                                    <th scope="row">Friday</th>
                                    <td>Tom</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Appointment list end -->
                </div>
            </div>

            <!-- Admin Notice,Ad & Events start -->
            <div class="col-md-3 page-home">

                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Admin Notice Board</h4>
                    <!-- accordion -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Notice #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Notice #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Notice #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                    <!-- accordion end -->
                </div>
                <div class="info-box-col info-box-col-ad p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Ad</h4>


                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/ad_slider_img/ad_slider_1.jpg')}}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/ad_slider_img/ad_slider_2.png')}}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/ad_slider_img/ad_slider_3.jpg')}}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Upcoming Events</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->
    <!-- footer -->
    <div class="footer p-3">
        <div class="row container-fluid">
            <p class="text-center my-auto">
                © Developed By CODETREE
            </p>
        </div>
    </div>
    <!-- footer end-->





    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>