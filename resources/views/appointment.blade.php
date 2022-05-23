<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>

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
                              <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">My Profile</a>
                          </li>
                       
                        <li class="nav-item dropdown">
                          <a class="nav-link " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-gear"></i></a>
                          <ul class="dropdown-menu">
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

  <!-- header end -->

  <!-- body -->
  <!-- body part 1 -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 pe-0">
        <div class="profile">
          <div class="complete">
            <div class="p-header">
              <!-- <img src="img/banner.jpg" class="cover"> -->
              <img src="{{ asset('assets/img/profile.png')}}"  class="doctor-profile my-4">
              
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
            <a  href="{{route('patient')}}" class="btns my-2">Patient</a>
            <a href="{{route('appointment')}}" class="btns my-2">Appointment</a>
            <a href="#" class="btns my-2">Income/Expence</a>
            <a href="#" class="btns my-2">Subscription</a>
          </div>
          
          <!-- <a href="">setting</a>
          <a href="" class="lgout-a">Logout</a> -->
        </div>
      </div>

        <!-- body part 1 end-->
  <!-- body part 2 -->

      <div class="col-md-7 pe-0">
        <!-- <div class="blank-sec"> -->

        <table class="table table-striped">
          <thead>
              <tr>
                <th class="action-btns" scope="col"> <a href="#">SL</a></th>
                <th class="action-btns" scope="col"><a href="#">First</a></th>
                <th class="action-btns" scope="col"><a href="#">Last</a></th>
                <th class="action-btns" scope="col"><a href="#">Add Appoinment</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><div class="btn btns">Set Appointment</div></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><div class="btn btns">Set Appointment</div></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td><div class="btn btns">Set Appointment</div></td>
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td><div class="btn btns">Set Appointment</div></td>
                </tr>
            </tbody>
        </table>
<!-- </div> -->
     </div>
      <!-- body part 2 end -->
  <!-- body part 3 -->

    <!-- Admin Notice,Ad & Events start -->
     <div class="col-md-3 page-home">
      
       <div class="info-box-col p-2 mb-3">
          <h4 class="d-flex justify-content-end">Admin Notice Board</h4>
       </div>
       <div class="info-box-col p-2 mb-3">
        <h4 class="d-flex justify-content-end">Ad</h4>
       </div>
       <div class="info-box-col p-2 mb-3">
          <h4 class="d-flex justify-content-end">Upcoming Events</h4>
       </div>
     </div>
       <!-- body part 3 end -->

    </div>
  </div>
  <!-- body end-->

 
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