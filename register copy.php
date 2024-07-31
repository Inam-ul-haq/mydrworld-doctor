
<!doctype html>
<html lang="en">

    
<head>

        <meta charset="utf-8" />
        <title>Doctor Login | Mydrworld</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- plugin css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/all/all.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Intel Input Css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.4/build/css/intlTelInput.css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/custom.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="authentication-bg min-vh-100">
        <!-- <div class="bg-overlay bg-light"></div> -->
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-12">

                        

                        <div class="card">
                            <div class="card-body p-4"> 
                                <div class="mb-4 pb-2">
                                    <a href="" class="d-block auth-logo">
                                        <img src="assets/images/mydrworld.svg" alt="" height="60" class="auth-logo-dark me-start">
                                        <img src="assets/images/mydrworld.svg" alt="" height="60" class="auth-logo-light me-start">
                                    </a>
                                </div>
                                <div class="text-center mt-2">
                                    <h5>Create An Account</h5>
                                    <p class="text-black">Welcome to Doctor Panel.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="profile-edit.php">
        
                                        <!-- <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="username">First Name</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter First Name">
                                                    <span class="bx bx-user"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="username">Last Name</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter Last Name">
                                                    <span class="bx bx-user"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="username">Email Address</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="email" class="form-control" id="" placeholder="Enter Address">
                                                    <span class="bx bx-envelope"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="username">Phone Number</label>
                                                <div class="position-relative">
                                                    <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number">
                                                </div>
                                            </div>


                                            <div class="col-lg-6 mb-3">
                                            
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                    <span class="bx bx-lock-alt"></span>
                                                    <input type="password" class="form-control" id="password-input" placeholder="Enter Password">
                                                    <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 mb-3">
                                            
                                                <label class="form-label" for="password-input">Confirm Password</label>
                                                <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                    <span class="bx bx-lock-alt"></span>
                                                    <input type="password" class="form-control" id="password-input" placeholder="Enter Confirm Password">
                                                    <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Country</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select Country">
                                                        <option></option>
                                                        <option value="1">Uae</option>
                                                        <option value="2">India</option>
                                                    </select>
                                                    <i class="bx bx-navigation"></i>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Emirates</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select Emirates">
                                                        <option></option>
                                                        <option value="1">Dubai</option>
                                                        <option value="2">Abu Dhabi</option>
                                                    </select>
                                                    <i class="bx bx-layer"></i>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">City</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select City">
                                                        <option></option>
                                                        <option value="1">Dubai</option>
                                                        <option value="2">Abu Dhabi</option>
                                                    </select>
                                                    <i class="bx bx-navigation"></i>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Area</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select Area">
                                                        <option></option>
                                                        <option value="1">Business Bay</option>
                                                        <option value="2">Al Barsha</option>
                                                    </select>
                                                    <i class="bx bx-navigation"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="">Qualification </label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" multiple data-placeholder="Select Qualification">
                                                        <option></option>
                                                        <option value="1">MMBS</option>
                                                        <option value="2">BDS</option>
                                                        <option value="3">BAMS</option>
                                                        <option value="4">BUMS</option>
                                                        <option value="5">BHMS</option>
                                                        <option value="6">BYNS</option>
                                                        <option value="7">MD - General Medicine</option>
                                                        <option value="8">DM - Cardiology</option>
                                                    </select>
                                                    <i class="fi fi-rr-graduation-cap" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="">Specialty</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" multiple data-placeholder="Select Specialty">
                                                        <option></option>
                                                        <option value="1">Pediatricians</option>
                                                        <option value="2">Dermatologists</option>
                                                        <option value="3">Ophthalmologists</option>
                                                        <option value="4">Obstetrician/gynecologists</option>
                                                        <option value="5">Cardiologists</option>
                                                        <option value="6">Endocrinologists</option>
                                                        <option value="7">Gastroenterologists</option>
                                                        <option value="8">Neurologists</option>
                                                    </select>
                                                    <i class="fi fi-rr-doctor" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="">Special Interest</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" multiple data-placeholder="Select Special Interest">
                                                        <option></option>
                                                        <option value="1">Heart</option>
                                                        <option value="2">Bone & Joints</option>
                                                        <option value="3">Skin Care</option>
                                                    </select>
                                                    <i class="fi fi-rr-syringe" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Years of Experiences</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter Years of Experiences" />
                                                    <span class="fi fi-rr-stars"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Language Spoken</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" multiple data-placeholder="Select Language Spoken">
                                                        <option></option>
                                                        <option value="1">English</option>
                                                        <option value="2">Arabic</option>
                                                    </select>
                                                    <i class="fi fi-rs-square-a" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Available for instant appointment</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select Available for instant appointment">
                                                        <option></option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                    <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="username">Direct Contact Number for Appointment</label>
                                                <div class="position-relative">
                                                <input type="text" class="form-control" id="phone1" placeholder="Enter Direct Contact Number for Appointment" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">License No </label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter License No" />
                                                    <span class="fi fi-tr-hashtag"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">License Type</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select License Type">
                                                        <option></option>
                                                        <option value="1">HAAD</option>
                                                        <option value="2">Dubai - DHA - Dubai Health Authority</option>
                                                    </select>
                                                    <i class="fi-rr-angle-small-down" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="custom-upload">
                                                    <label for="uploadphotos" class="form-label">Upload License</label>
                                                    <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" />
                                                </div>
                                            </div>





                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Emirates Id </label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter Emirates Id" />
                                                    <span class="fi fi-tr-hashtag"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Emirates Expiry</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control flatpicker-input" placeholder="Emirates Expiry">
                                                    <span class="fi fi-rr-calendar-day" style="margin-top: 2px;"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="custom-upload">
                                                    <label for="uploadphotos" class="form-label">Upload Emirates Doc</label>
                                                    <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" />
                                                </div>
                                            </div>



                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Passport Number</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" placeholder="Enter Passport Number">
                                                    <span class="fi fi-tr-passport" style="margin-top: 2px;"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="custom-upload">
                                                    <label for="uploadphotos" class="form-label">Upload Passport</label>
                                                    <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" />
                                                </div>
                                            </div>





                                            
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Insurances Type</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select Insurances Type">
                                                        <option></option>
                                                        <option value="1">Abu Dhabi National Insurance Company</option>
                                                    </select>
                                                    <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Sub Insurances</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select Sub Insurances">
                                                        <option></option>
                                                        <option value="1">Abu Dhabi National Network</option>
                                                    </select>
                                                    <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="custom-upload">
                                                    <label for="uploadphotos" class="form-label">Upload Photo</label>
                                                    <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 mb-3">
                                                <div class="form-check py-1 d-flex align-items-center">
                                                    <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check"> by proceeding Agree <a href="#!" target="_blank">Privacy Policy</a></label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary mx-auto waves-effect waves-light" type="submit">Create An Account</button>
                                            </div>
                                        </div> -->
                
                                        
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label" for="">Name of Hospital/Clinic Name/ Dental Care/ Home Care</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter Name of Hospital/Clinic Name/ Dental Care/ Home Care" />
                                                    <span class="bx bx bx-buildings"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">First Name</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter First Name" />
                                                    <span class="bx bx-user"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Last Name</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter Last Name" />
                                                    <span class="bx bx-user"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="">Qualification </label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" multiple data-placeholder="Select Qualification">
                                                        <option></option>
                                                        <option value="1">MMBS</option>
                                                        <option value="2">BDS</option>
                                                        <option value="3">BAMS</option>
                                                        <option value="4">BUMS</option>
                                                        <option value="5">BHMS</option>
                                                        <option value="6">BYNS</option>
                                                        <option value="7">MD - General Medicine</option>
                                                        <option value="8">DM - Cardiology</option>
                                                    </select>
                                                    <i class="fi fi-rr-graduation-cap" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="">Specialty</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" multiple data-placeholder="Select Specialty">
                                                        <option></option>
                                                        <option value="1">Pediatricians</option>
                                                        <option value="2">Dermatologists</option>
                                                        <option value="3">Ophthalmologists</option>
                                                        <option value="4">Obstetrician/gynecologists</option>
                                                        <option value="5">Cardiologists</option>
                                                        <option value="6">Endocrinologists</option>
                                                        <option value="7">Gastroenterologists</option>
                                                        <option value="8">Neurologists</option>
                                                        
                                                    </select>
                                                    <i class="fi fi-rr-doctor" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label" for="">Special Interest</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" multiple data-placeholder="Select Special Interest">
                                                        <option></option>
                                                        <option value="1">Heart</option>
                                                        <option value="2">Bone & Joints</option>
                                                        <option value="3">Skin Care</option>
                                                    </select>
                                                    <i class="fi fi-rr-syringe" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Years of Experiences</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter Years of Experiences" />
                                                    <span class="fi fi-rr-stars"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">License No </label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" class="form-control" id="" placeholder="Enter License No" />
                                                    <span class="fi fi-tr-hashtag"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">License Type</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select License Type">
                                                        <option></option>
                                                        <option value="1">HAAD</option>
                                                        <option value="2">Dubai - DHA - Dubai Health Authority</option>
                                                    </select>
                                                    <i class="fi-rr-angle-small-down" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Country of Orgin</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select Country">
                                                        <option></option>
                                                        <option value="1">Uae</option>
                                                        <option value="2">India</option>
                                                    </select>
                                                    <i class="bx bx-navigation"></i>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Language Spoken</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" multiple data-placeholder="Select Language Spoken">
                                                        <option></option>
                                                        <option value="1">English</option>
                                                        <option value="2">Arabic</option>
                                                    </select>
                                                    <i class="fi fi-rs-square-a" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Gender</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select Gender">
                                                        <option></option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                    <i class="fi fi-rr-venus-mars" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                               <label class="form-label" for="">Insurances Type</label>
                                               <div class="position-relative select-custom-icon">
                                                   <select name="" id="" class="select2-single" multiple data-placeholder="Select Insurances Type">
                                                       <option></option>
                                                       <option value="1">Abu Dhabi National Insurance Company</option>
                                                       <option value="2">AETNA</option>
                                                       <option value="3">AL Buhaira National Insurance Company</option>
                                                   </select>
                                                   <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>
                                               </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                               <label class="form-label" for="">Sub Insurances</label>
                                               <div class="position-relative select-custom-icon">
                                                   <select name="" id="" class="select2-single" multiple data-placeholder="Select Sub Insurances">
                                                       <option></option>
                                                        <optgroup label="Abu Dhabi National Insurance Company">
                                                            <option value="a1">ABUDHABI NATIONAL NETWORK</option>
                                                            <option value="a2">HIGH-GN,GNPLUS,GNR-INS017</option>
                                                            <option value="a3">HIGH-RNA,RNB-INS017</option>
                                                            <option value="a4">HIGH-SILVER-INS017</option>
                                                        </optgroup>

                                                        <optgroup label="AETNA">
                                                            <option value="b1">AHP-TPA005</option>
                                                            <option value="b2">IHP-TPA005</option>
                                                            <option value="b3">MOFA-TPA005</option>
                                                            <option value="b4">RHP-TPA005</option>
                                                        </optgroup>
                                                   </select>
                                                   <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>
                                               </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Phone Number</label>
                                                <div class="position-relative">
                                                    <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" />
                                                    <!-- <span class="bx bx-phone"></span> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Email</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="email" class="form-control" id="" placeholder="Enter Email" />
                                                    <span class="bx bx-envelope"></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                            
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                    <span class="bx bx-lock-alt"></span>
                                                    <input type="password" class="form-control" id="password-input" placeholder="Enter Password">
                                                    <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 mb-3">
                                            
                                                <label class="form-label" for="password-input">Confirm Password</label>
                                                <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                    <span class="bx bx-lock-alt"></span>
                                                    <input type="password" class="form-control" id="password-input" placeholder="Enter Confirm Password">
                                                    <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <label class="form-label" for="">Emirates</label>-->
                                            <!--     <div class="position-relative input-custom-icon">-->
                                            <!--        <input type="text" class="form-control" id="" placeholder="Enter Emirates" />-->
                                            <!--        <span class="bx bx-layer"></span>-->
                                            <!--    </div> -->
                                            <!--    <div class="position-relative select-custom-icon">-->
                                            <!--        <select name="" id="" class="select2-single" data-placeholder="Select Emirates">-->
                                            <!--            <option></option>-->
                                            <!--            <option value="1">Dubai</option>-->
                                            <!--            <option value="2">Abu Dhabi</option>-->
                                            <!--        </select>-->
                                            <!--        <i class="bx bx-layer"></i>-->
                                            <!--    </div>-->
                                            <!--</div>-->

                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <label class="form-label" for="">City</label>-->
                                            <!--    <div class="position-relative select-custom-icon">-->
                                            <!--        <select name="" id="" class="select2-single" data-placeholder="Select City">-->
                                            <!--            <option></option>-->
                                            <!--            <option value="1">Dubai</option>-->
                                            <!--            <option value="2">Abu Dhabi</option>-->
                                            <!--        </select>-->
                                            <!--        <i class="bx bx-navigation"></i>-->
                                            <!--    </div>-->
                                            <!--</div>-->

                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <label class="form-label" for="">Area</label>-->
                                            <!--    <div class="position-relative select-custom-icon">-->
                                            <!--        <select name="" id="" class="select2-single" data-placeholder="Select Area">-->
                                            <!--            <option></option>-->
                                            <!--            <option value="1">Business Bay</option>-->
                                            <!--            <option value="2">Al Barsha</option>-->
                                            <!--        </select>-->
                                            <!--        <i class="bx bx-navigation"></i>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <label class="form-label" for="">Country of Orgin</label>-->
                                            <!--    <div class="position-relative select-custom-icon">-->
                                            <!--        <select name="" id="" class="select2-single" data-placeholder="Select License Type">-->
                                            <!--            <option></option>-->
                                            <!--            <option value="1">HAAD</option>-->
                                            <!--            <option value="2">Dubai - DHA - Dubai Health Authority</option>-->
                                            <!--        </select>-->
                                            <!--        <i class="fi-rr-angle-small-down" style="margin-top: 2px;"></i>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <div class="custom-upload">-->
                                            <!--        <label for="uploadphotos" class="form-label">Upload License</label>-->
                                            <!--        <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" />-->
                                            <!--    </div>-->
                                            <!--</div>-->

                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <label class="form-label" for="">Emirates Id </label>-->
                                            <!--    <div class="position-relative input-custom-icon">-->
                                            <!--        <input type="text" class="form-control" id="" placeholder="Enter Emirates Id" />-->
                                            <!--        <span class="fi fi-tr-hashtag"></span>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <label class="form-label" for="">Emirates Expiry</label>-->
                                            <!--    <div class="position-relative input-custom-icon">-->
                                            <!--        <input type="text" class="form-control flatpicker-input" placeholder="Emirates Expiry" />-->
                                            <!--        <span class="fi fi-rr-calendar-day" style="margin-top: 2px;"></span>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <div class="custom-upload">-->
                                            <!--        <label for="uploadphotos" class="form-label">Upload Emirates Doc</label>-->
                                            <!--        <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" />-->
                                            <!--    </div>-->
                                            <!--</div>-->

                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <label class="form-label" for="">Passport Number</label>-->
                                            <!--    <div class="position-relative input-custom-icon">-->
                                            <!--        <input type="text" class="form-control" placeholder="Enter Passport Number" />-->
                                            <!--        <span class="fi fi-tr-passport" style="margin-top: 2px;"></span>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <div class="custom-upload">-->
                                            <!--        <label for="uploadphotos" class="form-label">Upload Passport</label>-->
                                            <!--        <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <label class="form-label" for="">Insurances Type</label>-->
                                            <!--    <div class="position-relative select-custom-icon">-->
                                            <!--        <select name="" id="" class="select2-single" data-placeholder="Select Insurances Type">-->
                                            <!--            <option></option>-->
                                            <!--            <option value="1">Abu Dhabi National Insurance Company</option>-->
                                            <!--        </select>-->
                                            <!--        <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <label class="form-label" for="">Sub Insurances</label>-->
                                            <!--    <div class="position-relative select-custom-icon">-->
                                            <!--        <select name="" id="" class="select2-single" data-placeholder="Select Sub Insurances">-->
                                            <!--            <option></option>-->
                                            <!--            <option value="1">Abu Dhabi National Network</option>-->
                                            <!--        </select>-->
                                            <!--        <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-lg-6 mb-3">-->
                                            <!--    <div class="custom-upload">-->
                                            <!--        <label for="uploadphotos" class="form-label">Upload Photo</label>-->
                                            <!--        <input class="form-control" type="file" id="upload_imgs" accept="image/jpg, image/jpeg" />-->
                                            <!--    </div>-->
                                            <!--</div>-->

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-password-input">Profile <small class="text-muted">- maximum 250 words</small></label>
                                                    <textarea class="form-control" id="ckeditor-classic"></textarea>
                                                </div>
                                            </div>
                                            
                                            

                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="">Available for instant appointment</label>
                                                <div class="position-relative select-custom-icon">
                                                    <select name="" id="" class="select2-single" data-placeholder="Select Available for instant appointment">
                                                        <option></option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                    <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="username">Direct Contact Number for Appointment</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" id="phone1" placeholder="Enter Direct Contact Number for Appointment" />
                                                    <!-- <span class="bx bx-phone"></span> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                                <div class="form-check py-1 d-flex align-items-center">
                                                    <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check"> by proceeding Agree <a href="#!" target="_blank">Privacy Policy</a></label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary mx-auto waves-effect waves-light" type="submit">Create An Account</button>
                                            </div>
                                        
                                        
                                        

                                        

                                        <div class="mt-3 text-center">
                                            <p class="mb-0">Already have an account? <a href="index.php" class="fw-medium text-primary">Log In</a> </p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center p-4">
                            <p class="text-white">© <script>document.write(new Date().getFullYear())</script> © Mydrworld.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->


    <!-- JAVASCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/flatpickr.min.js"></script>    
    <!-- Intel Input Js-->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.4/build/js/intlTelInput.min.js"></script>

    <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/form-editor.init.js"></script>
    
    <script>
        const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            
            initialCountry: "AE",
            strictMode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.4/build/js/utils.js",
        });

        const input1 = document.querySelector("#phone1");
        window.intlTelInput(input1, {
            
            initialCountry: "AE",
            strictMode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.0.4/build/js/utils.js",
        });

        $(document).ready(function() {
            $('.select2-single').select2({
                placeholder: $(this).data('placeholder'),

            });
        });

        $(".flatpicker-input").flatpickr({
            dateFormat: "d-m-Y",
            minDate: "today"
        });
        
        $(".flatpicker-input-time").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });
        $(".flatpicker-input-multiple").flatpickr({
            dateFormat: "d-m-Y",
            mode: "multiple",
            minDate: "today"
        });
    </script>

    </body>


</html>