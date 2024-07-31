<?php include('include/header.php'); ?>

<div class="position-relative mb-5">
    <div class="d-lg-flex">
        <div class="chat-leftsidebar card">
            <div class="card-body" style="flex: 0;">
                <div class="text-center bg-light rounded px-4 py-3">
                    <!-- <div class="text-end">
                        <div class="dropdown chat-noti-dropdown">
                            <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a class="dropdown-item" href="profile-edit.php">Edit</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="chat-user-status mt-4">
                        <!-- <img src="assets/images/doctor.png" class="avatar-md rounded-circle" alt="" /> -->
                        <div class="avatar-upload position-relative">
                            <div class="avatar-edit">
                                <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" class="avatar-md rounded-circle mx-auto" style="background-image: url(assets/images/doctor.png); background-size: contain;"></div>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-size-16 mb-1 mt-3"><a href="#" class="text-reset">DR S.K SHETTY M.S </a></h5>
                    <p class="text-muted mb-0">General Dentist</p>
                    <p class="text-muted mb-0">AL NASEEM MEDICAL CENTER LLC</p>
                </div>
            </div>

            <div class="mail-list">
                <a href="profile.php" class=" ">
                    <div class="d-flex align-items-center">
                        <i class="bx bx-user-circle font-size-20 align-middle me-3"></i>
                        <div class="flex-grow-1">
                            <h5 class="font-size-14 mb-0">My Profile</h5>
                        </div>
                    </div>
                </a>
                <a href="profile-edit.php" class="border-bottom active bg-primary-subtle">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-star-outline font-size-20 align-middle me-3"></i>
                        <div class="flex-grow-1">
                            <h5 class="font-size-14 mb-0">Edit Profile</h5>
                        </div>
                        <div class="flex-shrink-0"></div>
                    </div>
                </a>
                <!-- <a href="my-insurance.php" class="border-bottom">
                   <div class="d-flex align-items-center">
                       <i class="mdi mdi-newspaper-variant-outline font-size-20 align-middle me-3"></i>
                       <div class="flex-grow-1">
                           <h5 class="font-size-14 mb-0">My Insurance</h5>
                       </div>
                       <div class="flex-shrink-0"></div>
                   </div>
                </a> -->

                <a href="change-password.php" class="border-bottom">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-key-outline font-size-20 align-middle me-3"></i>
                        <div class="flex-grow-1">
                            <h5 class="font-size-14 mb-0">Change Password</h5>
                        </div>
                        <div class="flex-shrink-0"></div>
                    </div>
                </a>
            </div>
        </div>
        <!-- end chat-leftsidebar -->

        <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-3">
            <div class="card">
                <div class="p-4 pt-5">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="">Name of Hospital/Clinic Name/ Dental Care/ Home Care</label>
                                <!-- <div class="position-relative input-custom-icon">
                                    <input type="text" class="form-control" id="" placeholder="Enter Name of Hospital/Clinic Name/ Dental Care/ Home Care" />
                                    <span class="bx bx bx-buildings"></span>
                                </div> -->
                                <div class="position-relative select-custom-icon">
                                    <select name="" id="" class="select2-single" data-placeholder="Select Hospital/Clinic Name/ Dental Care/ Home Care">
                                        <option></option>
                                        <option value="1">Aster Hospital</option>
                                        <option value="2">Mediclinic City Hospital</option>
                                    </select>
                                    <i class="bx bx bx-buildings"></i>
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
                            <div class="col-lg-12 mb-3">
                                <label class="form-label" for="">License Type</label>
                                <div class="position-relative select-custom-icon">
                                    <select name="" id="" class="select2-single" multiple data-placeholder="Select License Type">
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
                            <!-- <div class="col-lg-12 mb-3">
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
                                            </div> -->
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="">Clinic Number</label>
                                <div class="position-relative">
                                    <input type="number" class="form-control" id="phone" placeholder="Enter Clinic Number" />
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

                            <!-- <div class="col-lg-6 mb-3">
                                <label class="form-label" for="">Available for instant appointment</label>
                                <div class="position-relative select-custom-icon">
                                    <select name="" id="" class="select2-single" data-placeholder="Select Available for instant appointment">
                                        <option></option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                    <i class="fi fi-rr-compliance-document" style="margin-top: 2px;"></i>
                                </div>
                            </div> -->
                            <div class="col-lg-6 mb-3">
                                <label class="form-label" for="username">Direct Contact Number for Appointment (Optional)</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="phone1" placeholder="Enter Direct Contact Number for Appointment" />
                                    <!-- <span class="bx bx-phone"></span> -->
                                </div>
                            </div>
                            <!--<div class="col-12">-->
                            <!--    <div class="mb-3">-->
                            <!--        <label class="form-label" for="formrow-password-input">Update Location</label>-->
                            <!--        <input type="text" class="form-control flatpicker-input" placeholder="Enter Location" />-->
                            <!--        <div id="gmaps-markers" class="gmaps mt-2"></div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="col-12">
                                <button class="btn btn-primary" type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end user chat -->
        </div>
        <!-- End d-lg-flex  -->
    </div>
</div>

<?php include('include/footer.php'); ?>
<script src="assets/js/ckeditor.js"></script>
<script src="assets/js/form-editor.init.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
<script src="assets/js/gmaps.min.js"></script>
<script src="assets/js/gmaps.init.js"></script>
<script>
    $("#base-style").DataTable();
</script>

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

    $("#base-style").DataTable();
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#imagePreview").css("background-image", "url(" + e.target.result + ")");
                $("#imagePreview").hide();
                $("#imagePreview").fadeIn(650);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function () {
        readURL(this);
    });
</script>
