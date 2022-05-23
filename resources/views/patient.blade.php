<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
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
                                        <a class="nav-link active" aria-current="page"
                                            href="{{route('index')}}">Home</a>

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
                                        <a class="nav-link" href="#">Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">My Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i></a>
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
            <!-- Profile start -->
            <div class="col-md-3 pe-0">
                <div class="profile">
                    <div class="complete">
                        <div class="p-header">
                            <!-- <img src="img/banner.jpg" class="cover"> -->
                            <img src="{{ asset('assets/img/profile.png')}}" class="doctor-profile my-4">
                            <!-- <i class="fa-solid fa-pen-to-square"></i> -->
                            <h2 class="mb-2">Md. Abul Kasam</h2>
                        </div>
                        <div class="Patient-personal-info">
                            <div class="row">
                                <div class="col-8 text-start">Patient ID: 123456789</div>
                                <div class="col-4 text-start">Age: 25</div>
                                <div class="col-6 text-start pe-0">Gender: Female</div>
                                <div class="col-6 text-start ps-0">Blood Group: AB+</div>
                                <div class="col-12 text-start">Date of Birth: 12/12/2020</div>
                                
                                
                                <div class="col-12 text-start">Mobile: 01933333333</div>

                                <div class="col-12 text-start">Occupation: Student</div>
                                <div class="col-12 text-start">Address: 12/C,Uttara-12,Uttara,Dhaka,Bangladesh</div>
                                <div class="col-12 text-start">Email:aasdfbadsf@gmail.com</div>
                                <!-- <div class="col-12 text-start">Reference: 32165</div> -->
                            </div>
                        </div>
                        <div class="Patient-info">
                            <div class="row">
                                <div class="col-12 text-start">BP : </div>
                                <div class="col-12 text-start">Heart Disease:</div>
                                <div class="col-12 text-start">Diabetic:</div>
                                <div class="col-12 text-start">Helpatics:</div>
                                <div class="col-12 text-start">Bleeding discorder:</div>
                                <div class="col-12 text-start">Allergy:</div>
                                <div class="col-12 text-start">Pregnant/Lactating:</div>
                                <div class="col-12 text-start">Other:</div>
                                <!-- <button type="button" class="btn btn-secondary btn-sm">Small button</button> -->
                                <div class="col-12 text-start d-flex justify-content-center p-edit mt-2" >
                                <!--  a tag trigger modal -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Add/Edit</a>
                                <!-- Modal -->
                                <div class="modal fade " id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content bg-secondary">    <!--bg-opacity-50-->
                                            <!-- Modal Header & Close btn -->
                                            <div class="modal-header">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">
                                                    Edit Patient Info.
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            </div>
                                            <!-- Modal Header & Close btn end -->
                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                    <!-- 1 -->
                                                    <div class="mb-2 col-6">
                                                        <label for="exampleInputEmail1" class="form-label text-white">BP</label>
                                                        <div class="d-flex">
                                                            <input type="number" class="form-control me-3">
                                                            <h3 class="m-0">/</h3>
                                                            <input type="number" class="form-control ms-3">
                                                        </div>
                                                        
                                                        <!-- <div class="form-text"></div> -->
                                                    </div>
                                                    <!-- 2 -->
                                                    <div class="mb-2 col-6">
                                                        <label for="mName" class="form-label text-white">Bleeding discorder</label>
                                                        <select class="form-select" aria-label="Heart Disease">
                                                            <option selected></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                            <!-- <option value="3">Others</option> -->
                                                        </select>
                                                    </div>
                                                    <!-- 3 -->
                                                    <div class="mb-2 col-6">
                                                        <label for="mName" class="form-label text-white">Heart Disease</label>
                                                        <select class="form-select" aria-label="Heart Disease">
                                                            <option selected></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                            <!-- <option value="3">Others</option> -->
                                                        </select>
                                                    </div>
                                                    <!-- 4 -->
                                                    <div class="mb-2 col-6">
                                                        <label for="mName" class="form-label text-white">Allergy</label>
                                                        <select class="form-select" aria-label="Heart Disease">
                                                            <option selected></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                            <!-- <option value="3">Others</option> -->
                                                        </select>
                                                    </div>
                                                    <!-- 5 -->
                                                    <div class="mb-2 col-6">
                                                        <label for="mName" class="form-label text-white">Diabetic</label>
                                                        <select class="form-select" aria-label="Heart Disease">
                                                            <option selected></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                            <!-- <option value="3">Others</option> -->
                                                        </select>
                                                    </div>
                                                    <!-- 6 -->
                                                    <div class="mb-2 col-6">
                                                        <label for="mName" class="form-label text-white">Pregnant/Lactating</label>
                                                        <select class="form-select" aria-label="Heart Disease">
                                                            <option selected></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                            <!-- <option value="3">Others</option> -->
                                                        </select>
                                                    </div>
                                                    <!-- 7 -->
                                                    <div class="mb-2 col-6">
                                                        <label for="mName" class="form-label text-white">Helpatics</label>
                                                        <select class="form-select" aria-label="Heart Disease">
                                                            <option selected></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                            <!-- <option value="3">Others</option> -->
                                                        </select>
                                                    </div>
                                                    <!-- 8 -->
                                                    <div class="mb-2 col-6">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label text-white">Other</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp">
                                                        <!-- <div id="emailHelp" class="form-text">We'll never share your
                                                            email with anyone else.</div> -->
                                                    </div>
                                                    <!-- <div class="mb-3">
                                                        <label for="formFile" class="form-label text-white">Drop your image</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div> -->
                                                    <!-- <button type="submit" class="btn btn-primary ">Submit</button> -->
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Modal Body end -->
                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                            <!-- Modal Footer end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="profile py-2">
                    <!-- <h3>Treatment Plans</h3> -->
                    <div class="complete"> 

                        <a href="{{route('treatmentPlans')}}" class="btns my-2">Treatment Plans</a>
                        <a href="{{route('appointment')}}" class="btns my-2">Appointment</a>
                        <a href="{{route('prescription_list')}}" class="btns my-2">Prescription</a>
                        <a href="#" class="btns my-2">Billing</a>
                    </div>

                    <!-- <a href="">setting</a>
              <a href="" class="lgout-a">Logout</a> -->
                </div>
            </div>
            <!-- Profile end -->
            <!-- Mid Section start -->
            <div class="col-md-6 pe-0">
                <div class="blank-sec">
                    <!-- teeth chart start -->
                    <div class="chart-teeth">
                        <div class="row mx-0">
                            <div class="col-md-6 p-0">
                                <div class="top-area1" id="top-area-top">
                                    <input type="radio" name="tooth-selector" id="radio1">
                                    <label for="radio1">Permanent Teeth</label>
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="top-area2" id="sec-col-top">
                                    <input type="radio" name="tooth-selector" id="radio2">
                                    <label for="radio2">Deciduous Teeth</label>
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-12 px-0">
                                <div class="row mx-0" id="permanent">
                                    <!-- Upper Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>1</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/1TMR.png')}}"
                                                            alt="" id="1">
                                                        <p>18</p>
                                                    </li>
                                                    <li>
                                                        <p>2</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/2SMR.png')}}"
                                                            alt="" id="2">
                                                        <p>17</p>
                                                    </li>
                                                    <li>
                                                        <p>3</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/3FMR.png')}}"
                                                            alt="" id="3">
                                                        <p>16</p>
                                                    </li>
                                                    <li>
                                                        <p>4</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/4SPMR.png')}}"
                                                            alt="" id="4">
                                                        <p>15</p>
                                                    </li>
                                                    <li>
                                                        <p>5</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/5FPMR.png')}}"
                                                            alt="" id="5">
                                                        <p>14</p>
                                                    </li>
                                                    <li>
                                                        <p>6</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/6CR.png')}}"
                                                            alt="" id="6">
                                                        <p>13</p>
                                                    </li>
                                                    <li>
                                                        <p>7</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/7LIR.png')}}"
                                                            alt="" id="7">
                                                        <p>12</p>
                                                    </li>
                                                    <li>
                                                        <p>8</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/8CIR.png')}}"
                                                            alt="" id="8">
                                                        <p>11</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Upper Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>9</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/9CIL.png')}}"
                                                            alt="" id="9">
                                                        <p>21</p>
                                                    </li>
                                                    <li>
                                                        <p>10</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/10LIL.png')}}"
                                                            alt="" id="10">
                                                        <p>22</p>
                                                    </li>
                                                    <li>
                                                        <p>11</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/11CL.png')}}"
                                                            alt="" id="11">
                                                        <p>23</p>
                                                    </li>
                                                    <li>
                                                        <p>12</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/12FPML.png')}}"
                                                            alt="" id="12">
                                                        <p>24</p>
                                                    </li>
                                                    <li>
                                                        <p>13</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/13SPML.png')}}"
                                                            alt="" id="13">
                                                        <p>25</p>
                                                    </li>
                                                    <li>
                                                        <p>14</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/14FML.png')}}"
                                                            alt="" id="14">
                                                        <p>26</p>
                                                    </li>
                                                    <li>
                                                        <p>15</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/15SML.png')}}"
                                                            alt="" id="15">
                                                        <p>27</p>
                                                    </li>
                                                    <li>
                                                        <p>16</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/16TML.png')}}"
                                                            alt="" id="16">
                                                        <p>28</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right">
                                            <h4>Lower Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>48</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/48TMR.png')}}"
                                                            alt="" id="32">
                                                        <p>32</p>
                                                    </li>
                                                    <li>
                                                        <p>47</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/47SMR.png')}}"
                                                            alt="" id="31">
                                                        <p>31</p>
                                                    </li>
                                                    <li>
                                                        <p>46</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/46FMR.png')}}"
                                                            alt="" id="30">
                                                        <p>30</p>
                                                    </li>
                                                    <li>
                                                        <p>45</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/45SPMR.png')}}"
                                                            alt="" id="29">
                                                        <p>29</p>
                                                    </li>
                                                    <li>
                                                        <p>44</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/44FPMR.png')}}"
                                                            alt="" id="28">
                                                        <p>28</p>
                                                    </li>
                                                    <li>
                                                        <p>43</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/43CR.png')}}"
                                                            alt="" id="27">
                                                        <p>27</p>
                                                    </li>
                                                    <li>
                                                        <p>42</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/42LIR.png')}}"
                                                            alt="" id="26">
                                                        <p>26</p>
                                                    </li>
                                                    <li>
                                                        <p>41</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/41CIR.png')}}"
                                                            alt="" id="25">
                                                        <p>25</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right">
                                            <h4>Lower Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>31</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/31CIL.png')}}"
                                                            alt="" id="24">
                                                        <p>24</p>
                                                    </li>
                                                    <li>
                                                        <p>32</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/32LIL.png')}}"
                                                            alt="" id="23">
                                                        <p>23</p>
                                                    </li>
                                                    <li>
                                                        <p>33</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/33CL.png')}}"
                                                            alt="" id="22">
                                                        <p>22</p>
                                                    </li>
                                                    <li>
                                                        <p>34</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/34FPML.png')}}"
                                                            alt="" id="21">
                                                        <p>21</p>
                                                    </li>
                                                    <li>
                                                        <p>35</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/35SPML.png')}}"
                                                            alt="" id="20">
                                                        <p>20</p>
                                                    </li>
                                                    <li>
                                                        <p>36</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/36FML.png')}}"
                                                            alt="" id="19">
                                                        <p>19</p>
                                                    </li>
                                                    <li>
                                                        <p>37</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/37SML.png')}}"
                                                            alt="" id="18">
                                                        <p>18</p>
                                                    </li>
                                                    <li>
                                                        <p>38</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/38TML.png')}}"
                                                            alt="" id="17">
                                                        <p>17</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                </div>
                                <div class="row mx-0" id="deciduous">
                                    <!-- Upper Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>A</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/4SPMR.png')}}"
                                                            alt="" id="A">
                                                        <p>15</p>
                                                    </li>
                                                    <li>
                                                        <p>B</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/5FPMR.png')}}"
                                                            alt="" id="B">
                                                        <p>14</p>
                                                    </li>
                                                    <li>
                                                        <p>C</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/6CR.png')}}"
                                                            alt="" id="C">
                                                        <p>13</p>
                                                    </li>
                                                    <li>
                                                        <p>D</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/7LIR.png')}}"
                                                            alt="" id="D">
                                                        <p>12</p>
                                                    </li>
                                                    <li>
                                                        <p>E</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-right/8CIR.png')}}"
                                                            alt="" id="E">
                                                        <p>11</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Upper Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right T-border-bottom">
                                            <h4>Upper Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>F</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/9CIL.png')}}"
                                                            alt="" id="F">
                                                        <p>21</p>
                                                    </li>
                                                    <li>
                                                        <p>G</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/10LIL.png')}}"
                                                            alt="" id="G">
                                                        <p>22</p>
                                                    </li>
                                                    <li>
                                                        <p>H</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/11CL.png')}}"
                                                            alt="" id="H">
                                                        <p>23</p>
                                                    </li>
                                                    <li>
                                                        <p>I</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/12FPML.png')}}"
                                                            alt="" id="I">
                                                        <p>24</p>
                                                    </li>
                                                    <li>
                                                        <p>J</p>
                                                        <img src="{{ asset('assets/img/teeths/Upper-left/13SPML.png')}}"
                                                            alt="" id="J">
                                                        <p>25</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Right -->
                                    <div class="col-md-6 p-0 T-border-right">
                                        <div class="upper-right">
                                            <h4>Lower Right</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>45</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/45SPMR.png')}}"
                                                            alt="" id="T">
                                                        <p>T</p>
                                                    </li>
                                                    <li>
                                                        <p>44</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/44FPMR.png')}}"
                                                            alt="" id="S">
                                                        <p>S</p>
                                                    </li>
                                                    <li>
                                                        <p>43</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/43CR.png')}}"
                                                            alt="" id="R">
                                                        <p>R</p>
                                                    </li>
                                                    <li>
                                                        <p>42</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/42LIR.png')}}"
                                                            alt="" id="Q">
                                                        <p>Q</p>
                                                    </li>
                                                    <li>
                                                        <p>41</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Right/41CIR.png')}}"
                                                            alt="" id="P">
                                                        <p>P</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                    <!-- Lower Left -->
                                    <div class="col-md-6 p-0 T-border-left">
                                        <div class="upper-right">
                                            <h4>Lower Left</h4>
                                            <div class="upper-right-teeths">
                                                <ul>
                                                    <li>
                                                        <p>31</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/31CIL.png')}}"
                                                            alt="" id="O">
                                                        <p>O</p>
                                                    </li>
                                                    <li>
                                                        <p>32</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/32LIL.png')}}"
                                                            alt="" id="N">
                                                        <p>N</p>
                                                    </li>
                                                    <li>
                                                        <p>33</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/33CL.png')}}"
                                                            alt="" id="M">
                                                        <p>M</p>
                                                    </li>
                                                    <li>
                                                        <p>34</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/34FPML.png')}}"
                                                            alt="" id="L">
                                                        <p>L</p>
                                                    </li>
                                                    <li>
                                                        <p>35</p>
                                                        <img src="{{ asset('assets/img/teeths/Lower-Left/35SPML.png')}}"
                                                            alt="" id="K">
                                                        <p>K</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->
                                </div>
                                <!-- Tooth Tools Function Start -->
                                <div class="tool-out">
                                    <div class="tools-h">
                                        <h3 id="hi">Tooth No. 14</h3>
                                        <h3 id="hello">Upper Right</h3>
                                        <i class="fa-solid fa-xmark" id="close-btn"></i>
                                    </div>
                                    <h5>C/C    Chief Complaint</h5>
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <ul>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                    </ul>
                                    <h5>C/F    Clinical Findings</h5>
                                    <input type="text">
                                    <ul>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                    </ul>
                                    <h5>T/P    Treatment Plans</h5>
                                    <input type="text">
                                    <ul>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                        <li>Pain</li>
                                        <li>Check-up</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tooth Tools Function Start -->

                            <!-- Teeth Button -->
                            <div class="col-md-12 teeth-bottom px-0">
                                <div class="teeth-btn">
                                    <a>Full Mouth</a>
                                    <a>Multi Teeth</a>
                                </div>
                                <!-- <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck1">Full Mouth</label>

                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck2">Multi Teeth</label> -->

                                <!-- <button>Multi Teeth</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- teeth chart end -->
                    <!-- Treatment Card start -->
                    <div class="treatment-cards my-3">
                        <div class="treatment-cards-h p-2">
                            <h4 class="m-0">Treatment Plans For Md. Abul Kasam</h4>
                        </div>
                        <!-- Treatment Plans Status -->
                        <div class="row mx-0">
                            <div class="col-md-4 p-0 pt-1 pe-1">
                                <div class="treatment-card d-flex flex-column flex-wrap">
                                    <div class="treatment-card-details">
                                        <h4 class="m-0">Upper Right Central Incisor</h4>
                                        <p class="fw-bold m-0 ms-1 mt-1">Root Canal Treatment</p>
                                        <p class="m-0 ms-1">Start : 12/04/2021</p>
                                        <p class="m-0 ms-1">Status : <span class="text-warning">Progress</span></p>
                                        <p class="m-0 ms-1 mb-1">Next Visit : 25/04/2021</p>
                                    </div>
                                    <div class="treatment-card-btn">
                                        <h5 class="py-1">Enter</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 p-0 pt-1 pe-1">
                                <div class="treatment-card d-flex flex-column flex-wrap">
                                    <div class="treatment-card-details">
                                        <h4 class="m-0">Full Mouth</h4>
                                        <p class="fw-bold m-0 ms-1 mt-1">Scaling & Polishing</p>
                                        <p class="m-0 ms-1">Start : 04/03/2021</p>
                                        <p class="m-0 ms-1">Status : <span class="text-success">Done</span></p>
                                    </div>
                                    <div class="treatment-card-btn">
                                        <h5 class="py-1">Enter</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 p-0 pt-1">
                                <div class="treatment-card d-flex flex-column flex-wrap">
                                    <div class="treatment-card-details">
                                        <h4 class="m-0">Tooth No : 2-3-4</h4>
                                        <p class="fw-bold m-0 ms-1 mt-1">Bridge</p>
                                        <p class="m-0 ms-1">Status : <span class="text-danger">Not Done</span></p>
                                    </div>
                                    <div class="treatment-card-btn">
                                        <h5 class="py-1">Enter</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Treatment Card end -->
                    
                </div>
            </div>
            <!-- Mid Section end -->

            <!-- Prescription,Ad & Events start -->
            <div class="col-md-3 page-home">

                <!-- We have info-box-col-1 for not fixed height -->
                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Previous Steps List</h4>
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
                    </div>
                </div>
                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Previous Prescription</h4>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Notice #1
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-box-col p-2 mb-3 d-flex flex-column">
                    <h4 class=" justify-content-end">Post to Forums</h4>
                    <button type="button" class="btn btn-outline-info text-dark mt-2 mb-2 btn-lg  ">Post</button>
                    <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse1" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Notice #1
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                    </div> -->
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




    <script>
    const radio1 = document.getElementById("radio1");
    const radio2 = document.getElementById("radio2");
    const permanent = document.getElementById("permanent");
    const deciduous = document.getElementById("deciduous");
    permanent.style.display = 'flex';
    deciduous.style.display = "none";

    function handleRadioClick() {

        if (radio1.checked) {
            permanent.style.display = 'flex';
            deciduous.style.display = "none";
        } else {
            permanent.style.display = 'none';
            deciduous.style.display = "flex";
        }
    }

    const radioButtons = document.querySelectorAll('input[name="tooth-selector"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('click', handleRadioClick);
    });
    </script>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset ('assets/js/app.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset ('assets/js/chosen.jquery.js')}}"></script>

    

</body>

</html>