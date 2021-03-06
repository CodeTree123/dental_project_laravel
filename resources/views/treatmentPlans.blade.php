<!-- <div class="col-6 text-start pe-0">Gender: Female</div> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatment Plans Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- Bootstrap 5.1.3 CSS -->
    <!-- CSS only -->
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
                            <!-- <img src="{{url('/uploads/patient/'.$patient->image)}}" class="doctor-profile my-4"> -->
                            <!-- <i class="fa-solid fa-pen-to-square"></i> -->
                            <h2 class="mb-2">{{$patient->name}}</h2>
                        </div>
                        <div class="Patient-personal-info">
                            <div class="row">
                                <div class="col-8 text-start">Patient ID: {{$patient->id}}</div>
                                <div class="col-4 text-start">Age: {{$patient->age}}</div>
                                <div class="col-6 text-start pe-0">Gender: {{$patient->gender}}</div>
                                <div class="col-6 text-start ps-0">Blood Group: {{$patient->Blood_group}}</div>
                                <div class="col-12 text-start">Date of Birth: {{$patient->date}}</div>


                                <div class="col-12 text-start">Mobile: {{$patient->mobile}}</div>

                                <div class="col-12 text-start">Occupation: {{$patient->occupation}}</div>
                                <div class="col-12 text-start">Address: {{$patient->address}}</div>
                                <div class="col-12 text-start">Email: {{$patient->email}}</div>

                            </div>
                        </div>
                        <div class="Patient-info">
                            <div class="row">
                                <div class="col-12 text-start">BP :{{$patient->bp_high}} / {{$patient->bp_low}}</div>
                                <div class="col-12 text-start">Heart Disease: {{$patient->Heart_Disease}}</div>
                                <div class="col-12 text-start">Diabetic: {{$patient->Diabetic}}</div>
                                <div class="col-12 text-start">Helpatics: {{$patient->Helpatics}}</div>
                                <div class="col-12 text-start">Bleeding disorder: {{$patient->Bleeding_disorder}}</div>
                                <div class="col-12 text-start">Allergy: {{$patient->Allergy}}</div>
                                <div class="col-12 text-start">Pregnant/Lactating: {{$patient->Pregnant}}</div>
                                <div class="col-12 text-start">Other: {{$patient->other}}</div>
                                <!-- <button type="button" class="btn btn-secondary btn-sm">Small button</button> -->
                                <div class="col-12 text-start d-flex justify-content-center p-edit mt-2">
                                    <!--  a tag trigger modal -->
                                    <!-- <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Add/Edit</a> -->
                                    <!-- Modal -->
                                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content bg-secondary">
                                                <!--bg-opacity-50-->
                                                <!-- Modal Header & Close btn -->
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">
                                                        Edit Patient Info.
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <!-- Modal Header & Close btn end -->
                                                <!-- Modal Body -->

                                                <div class="modal-body">
                                                    <form action="{{url('/update/patient',$patient->id)}}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="row">
                                                            <!-- 1 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="exampleInputEmail1" class="form-label text-white">BP</label>
                                                                <div class="d-flex">
                                                                    <input type="number" name="bp_high" class="form-control me-3">
                                                                    <h3 class="m-0">/</h3>
                                                                    <input type="number" name="bp_low" class="form-control ms-3">
                                                                </div>

                                                                <!-- <div class="form-text"></div> -->
                                                            </div>
                                                            <!-- 2 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label text-white">Bleeding discorder</label>
                                                                <select class="form-select" name="Bleeding_disorder" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 3 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label text-white">Heart Disease</label>
                                                                <select class="form-select" name="Heart_Disease" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 4 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label text-white">Allergy</label>
                                                                <select class="form-select" name="Allergy" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 5 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label text-white">Diabetic</label>
                                                                <select class="form-select" name="Diabetic" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 6 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label text-white">Pregnant/Lactating</label>
                                                                <select class="form-select" name="Pregnant" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 7 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="mName" class="form-label text-white">Helpatics</label>
                                                                <select class="form-select" name="Helpatics" aria-label="Heart Disease">
                                                                    <option selected></option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <!-- <option value="3">Others</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- 8 -->
                                                            <div class="mb-2 col-6">
                                                                <label for="exampleInputEmail1" class="form-label text-white">Other</label>
                                                                <input type="text" name="other" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                                <!-- <div id="emailHelp" class="form-text">We'll never share your
                                                            email with anyone else.</div> -->
                                                            </div>
                                                            <!-- <div class="mb-3">
                                                        <label for="formFile" class="form-label text-white">Drop your image</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div> -->
                                                            <!-- <button type="submit" class="btn btn-primary ">Submit</button> -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Modal Body end -->
                                                <!-- Modal Footer -->

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
                        <a href="{{route('prescription',[$patient->id,$treatment_info->id,$treatment_info->treatment_plans])}}" class="btns my-2">Prescription</a>
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
                    <!-- treatmentplans start -->

                    <div class="row">
                        <div class="col-md-6 treatment-info">
                            <div class=" text-center">
                                <h4 class="">Tooth Information</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="container">
                                            <div class="treatment-info mb-2 ">
                                                <img class="tooth-img"
                                                    src="{{ asset('assets/img/teeths/Upper-right/1TMR.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <h4>{{$treatment_info->tooth_side}}</h4>
                                        <h4>Tooth No: {{$treatment_info->tooth_no}}</h4>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="treatment-info">
                                    <h4 class="text-center">
                                        Tooth Restoration
                                    </h4>

                                    <div class="d-flex justify-content-between bg-success   text-white bg-opacity-50">
                                        <h6 class="float-start">Classification</h6>
                                        <h6 class="float-end">Class II</h6>
                                    </div>


    <div class="treatment-box text-center d-flex flex-wrap justify-content-between p-2">
        <!-- <button type="button" class="btn btn-outline-info text-dark mt-2 mb-2 btn-lg ">Class I</button>
        <button type="button" class="btn btn-outline-info text-dark mt-2 mb-2 btn-lg  ">Class II</button>
        <button type="button" class="btn btn-outline-info text-dark mt-2 mb-2 btn-lg ">Class III</button>
        <button type="button" class="btn btn-outline-info text-dark  mb-2 btn-lg ">ClassI</button>
        <button type="button" class="btn btn-outline-info text-dark  mb-2 btn-lg ">Class V</button>
        <button type="button" class="btn btn-outline-info text-dark  mb-2 btn-lg ">Class VI</button> -->

  <input type="checkbox" class="btn-check " name="btnradio" id="classI" autocomplete="off" >
  <label class="btn btn-outline-dark m-1" for="classI">Class I</label>

  <input type="checkbox" class="btn-check " name="btnradio" id="classII" autocomplete="off">
  <label class="btn btn-outline-dark m-1" for="classII">Class II</label>

  <input type="checkbox" class="btn-check " name="btnradio" id="classIII" autocomplete="off">
  <label class="btn btn-outline-dark m-1" for="classIII">Class III</label>

  <input type="checkbox" class="btn-check " name="btnradio" id="classIV" autocomplete="off">
  <label class="btn btn-outline-dark m-1" for="classIV">Class IV</label>

  <input type="checkbox" class="btn-check " name="btnradio" id="classV" autocomplete="off">
  <label class="btn btn-outline-dark m-1" for="classV">Class V</label>

  <input type="checkbox" class="btn-check " name="btnradio" id="classVI" autocomplete="off">
  <label class="btn btn-outline-dark m-1" for="classVI">Class VI</label>

    </div>
                                    <div class="">
                                        <div class="bg-success pb-4   text-white bg-opacity-50">
                                            <h6 class="float-start">Restorative Material</h6>
                                            <h6 class="float-end">Composite</h6>
                                        </div>

                                        <table
                                            class="table table-bordered bg-success  text-dark bg-opacity-25 border-white">
                                            <tbody>
                                                <tr>
                                                    <td>Composition</td>
                                                    <td>Amalgum</td>
                                                    <td>Veneer</td>
                                                    <td>Gl</td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Gl</td>

                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>

                                    <div></div>
                                    <div class="bg-success pb-4   text-white bg-opacity-50">
                                        <h6 class="float-start ">Treatment Status</h6>
                                        <h6 class="float-end text-danger">Not Done</h6>
                                    </div>



                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-danger bg-dark ">Not Done</td>
                                                <td class="text-warning ">On Going</td>
                                                <td class="text-success ">Done</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded-3 border-2 border-dark">
                                <h4 class="text-center">Steps</h4>

                                <ol class="border border-1 border-dark m-2">
                                    <li class="border-bottom">Preparation</li>
                                    <li class="border-bottom">Isolations</li>
                                    <li class="border-bottom">Isolations</li>

                                    <li class="border-bottom">Pulp Protection</li>
                                    <li class="border-bottom">Eching & Bonding</li>
                                    <li class="border-bottom">Composite Application</li>
                                    <li class="border-bottom">Curing Time</li>
                                    <li class="border-bottom">Polishing</li>
                                    <li class="border-bottom">Bite CheckingS</li>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </ol>

                                <div class="text-center">
                                    <button class="btn bg-success px-3 text-white bg-opacity-75 mb-2 ">Done</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- treatmentplans end -->

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
                <div class="info-box-col p-2 mb-3">
                    <h4 class="d-flex justify-content-end">Post to Furums</h4>
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
                ?? Developed By CODETREE
            </p>
        </div>
    </div>
    <!-- footer end-->





    <script>
    const radio1 = document.getElementById("radio1");
    const radio2 = document.getElementById("radio2");
    const permanent = document.getElementById("permanent");
    const deciduous = document.getElementById("deciduous");

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


    <script></script>
    <!-- Bootstrap JS -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>