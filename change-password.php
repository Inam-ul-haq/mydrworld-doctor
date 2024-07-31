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
                                                <div class="avatar-upload position-relative">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" class="avatar-md rounded-circle mx-auto" style="background-image: url(assets/images/doctor.png);background-size: contain;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <img src="assets/images/doctor.png" class="avatar-md rounded-circle" alt=""> -->
                                                <!-- <div class="">
                                                    <div class="status"></div>
                                                </div> -->
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
                                                    <a href="profile-edit.php" class="border-bottom">
                                                        <div class="d-flex align-items-center">
                                                            <i class="mdi mdi-star-outline font-size-20 align-middle me-3"></i>
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-0">Edit Profile</h5>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                            </div>
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
            
                                                    <a href="change-password.php" class="border-bottom active bg-primary-subtle">
                                                        <div class="d-flex align-items-center">
                                                            <i class="mdi mdi-key-outline font-size-20 align-middle me-3"></i>
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-14 mb-0">Change Password</h5>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                            </div>
                                                        </div>
                                                    </a>
            
                                                </div>

                            </div>
                            <!-- end chat-leftsidebar -->

                            <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-3">
                                <div class="card">
                                    <div class="p-4 pt-5">
                                    <form action="#" class="custom-form">
                                        
            
                                    <div class="row"> 
                                      
                                                            <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-firstname-input">Old Password</label>
                                                            <input type="password" class="form-control" placeholder="Enter " id="formrow-firstname-input">
                                                        </div>
                                                        </div>

                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-email-input">New Password</label>
                                                                    <input type="password" class="form-control" placeholder="Enter" id="formrow-email-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="formrow-password-input">Confirm New Password</label>
                                                                    <input type="password" class="form-control" placeholder="Enter" id="formrow-password-input">
                                                                </div>
                                                            </div>   
                                                        </div>

                                                        <!-- <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="formrow-customCheck">
                                                            <label class="form-check-label" for="formrow-customCheck">Sub-Insurances</label>
                                                        </div> -->
                                                        
                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
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

<script>
   $('#base-style').DataTable();

   $("#base-style").DataTable();
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>