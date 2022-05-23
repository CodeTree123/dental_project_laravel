<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- Bootstrap 5.1.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>

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

                  <h2 class="mb-2">Md. Abul Kasam</h2>
                </div>
                <div class="Patient-personal-info">
                  <div class="row">
                    <div class="col-12 text-start">Patient ID: 123456789</div>
                    <div class="col-8 text-start">Date of Birth: 12/12/2020</div>
                    <div class="col-4 text-start">Age: 25</div>
                    <div class="col-6 text-start pe-0">Gender: Female</div>
                    <div class="col-6 text-start ps-0">Blood Group: AB+</div>
                    <div class="col-12 text-start">Mobile: 01933333333</div>
                    
                    <div class="col-12 text-start">Occupation: Student</div>
                    <div class="col-12 text-start">Address: 12/C,Uttara-12,Uttara,Dhaka</div>
                    <div class="col-12 text-start">Email:aasdfbadsf@gmail.com</div>
                    <div class="col-12 text-start">Reference: 32165</div>
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
                  </div>
                </div>
              </div>
            </div>
            <div class="profile py-2">
              <!-- <h3>Treatment Plans</h3> -->
              <div class="complete">
                <a href="#" class="btns my-2">Treatment Plans</a>
                <a href="{{route('patient')}}" class="btns my-2">Patient</a>
                <a href="{{route('appointment')}}" class="btns my-2">Appointment</a>
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
              
              <!-- teeth chart end -->
              <!-- Treatment Card start -->
           
              <!-- Treatment Card end -->
              <!-- Previous Prescription -->
              <div class="treatment-cards my-3">
                <div class="treatment-cards-h p-2">
                  <h4 class="m-0">Previous Prescription</h4>
                </div>
                <!-- Previous Prescription table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Prescription 2</th>
                      <td>12/04/2021</td>
                      <td class="action-btns">
                        <a href="#">View</a>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                        <a href="#">Send</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Prescription 1</th>
                      <td>24/03/2021</td>
                      <td class="action-btns">
                        <a href="#">View</a>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                        <a href="#">Send</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
             </div>
            </div>
         </div>
         <!-- Mid Section end -->
 
        <!-- Prescription,Ad & Events start -->
         <div class="col-md-3 page-home">

            <!-- We have info-box-col-1 for not fixed height -->
            <div class="info-box-col p-2 mb-3">
                <h4 class="d-flex justify-content-end">Previous Medical History</h4>
            </div>
           <div class="info-box-col p-2 mb-3">
            <h4 class="d-flex justify-content-end">Ad</h4>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>