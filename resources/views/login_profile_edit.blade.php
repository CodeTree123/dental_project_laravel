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
            </div>
        </div>
    </div>
    <!-- Header end -->
    <!-- main start -->
    <div class="container-fluid">
 <div class="row justify-content-center align-items-center">
     <div class="col-lg-5 mt-5">
     <form action="{{route('login_update_doctor',$doctor_id)}}" method="post">
     @method('PUT')
     @csrf
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="h3 mb-3 fw-normal">Edit Your Profile</h1>
        <h1 class="h3 mb-3 fw-normal">Your ID:{{$doctor_id}}</h1>

        <div class="form-floating ">
            <input type="text" name="mobile" class="form-control mb-2" id="floatingInput" placeholder="Name">
            <label for="floatingInput">Mobile Number</label>
        </div>
        <div class="form-floating">
            <input type="text" name="BMDC" class="form-control mb-2" id="bmdcID" placeholder="BMDC Registration No.">
            <label for="bmdcID">BMDC Registration No.</label>
        </div>
        <div class="form-floating">
            <input type="text" name="chember_name" class="form-control mb-2" id="chamberName" placeholder="chamberName">
            <label for="chamberName">Chamber Name</label>
        </div>
        <div class="form-floating">
            <input type="text" name="chember_add" class="form-control mb-2" id="chamberAddress" placeholder="chamberAddress">
            <label for="chamberAddress">Chamber Address</label>
        </div>
 
        
        <button class="w-100 btn btn-lg btn-outline-dark mb-2" type="submit">Sign Up</button> 
      
             
  </form>
     </div>
 </div>
    </div>
    <!-- Admin Notice,Ad & Events end -->

    <!-- main end -->
    <!-- footer -->
    <div class="footer p-3 fixed-bottom">
        <div class="row container-fluid">
            <p class="text-center my-auto">
                ?? Developed By CODETREE
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