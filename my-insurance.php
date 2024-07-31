<?php include('include/header.php'); ?>
<div class="position-relative mb-5">
    <div class="d-lg-flex">
        <div class="chat-leftsidebar card">
            <div class="card-body" style="flex: 0;">
                <div class="text-center bg-light rounded px-4 py-3">
                    <div class="text-end">
                        <div class="dropdown chat-noti-dropdown">
                            <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a class="dropdown-item" href="profile-edit.php">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="chat-user-status">
                        <img src="assets/images/doctor.png" class="avatar-md rounded-circle" alt="" />
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
                        <div class="flex-shrink-0"></div>
                    </div>
                </a>
                <a href="my-insurance.php" class="border-bottom active bg-primary-subtle">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-newspaper-variant-outline font-size-20 align-middle me-3"></i>
                        <div class="flex-grow-1">
                            <h5 class="font-size-14 mb-0">My Insurance</h5>
                        </div>
                        <div class="flex-shrink-0"></div>
                    </div>
                </a>

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
                

                <div class="p-4 pt-0">
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h5 class="font-size-16 me-3 mb-0">My Insurance</h5>
                        <a href="edit-insurance.php" style="margin-left: auto;" class="btn btn-outline-primary waves-effect waves-light">Add Insurance</a>
                    </div>
                    <hr class="my-3">
                    
                    <div class="table-responsive mt-3 pb-0">
                        <table class="table table-sm table-nowrap table-centered mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <b class="fw-bold">Abudhabi National Insurance Company</b>  </br>
                                        <span class="text-muted my-1 d-block">- Sub Insurances</span>
                                    <ul>
                                        <li>ABUDHABI NATIONAL NETWORK</li>
                                        <li>HIGH-GN,GNPLUS,GNR-INS017</li>
                                        <li>HIGH-RNA,RNB-INS017</li>
                                        <li>HIGH-SILVER-INS017</li>
                                    </ul>
                                    </td>
                                    <td>
                                        <span>
                                            <div class="d-flex gap-2 justify-content-end">
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="btn btn-sm btn-icon btn-primary text-white text-success">
                                                    <i class="mdi mdi-pencil font-size-18"></i>
                                                </a>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="btn btn-sm btn-icon btn-secondary text-white text-danger">
                                                    <i class="mdi mdi-delete font-size-18"></i>
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <td>
                                        <b class="fw-bold">AETNA</b>   </br>
                                        <span class="text-muted my-1 d-block">- Sub Insurances</span>
                                        <ul>
                                            <li>AHP-TPA005</li>
                                            <li>IHP-TPA005</li>
                                            <li>MOFA-TPA005</li>
                                            <li>RHP-TPA005</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <span>
                                            <div class="d-flex gap-2 justify-content-end">
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="btn btn-sm btn-icon btn-primary text-white text-success">
                                                    <i class="mdi mdi-pencil font-size-18"></i>
                                                </a>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="btn btn-sm btn-icon btn-secondary text-white text-danger">
                                                    <i class="mdi mdi-delete font-size-18"></i>
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <td>
                                    <b class="fw-bold">AL Buhaira National Insurance Company</b>  </br> 
                                        <span class="text-muted my-1 d-block">- Sub Insurances</span>
                                    <ul>
                                        <li>Al Buhaira Network</li>
                                        <li>MEDIUM-LIMITED-INS020</li>
                                        <li>HIGH-COMPREHENSIVE PLUS-INS020</li>
                                        <li>HIGH-COMPREHENSIVE-INS020</li>
                                        <li>MEDIUM-STANDARDS-INS020</li>
                                        <li>MEDIUM-RESTRICTED-INS020</li>
                                    </ul>
                                    </td>
                                    <td>
                                        <span>
                                            <div class="d-flex gap-2 justify-content-end">
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="btn btn-sm btn-icon btn-primary text-white text-success">
                                                    <i class="mdi mdi-pencil font-size-18"></i>
                                                </a>
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="btn btn-sm btn-icon btn-secondary text-white text-danger">
                                                    <i class="mdi mdi-delete font-size-18"></i>
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <!-- end tr -->
                            </tbody>
                            <!-- end tbody -->
                        </table>
                    </div>
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
