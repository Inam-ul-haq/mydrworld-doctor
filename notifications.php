<?php include('include/header.php'); ?>

<div class="card">
    <div class="card-body">
        <div class="position-relative">
        <div class="simplebar-content" style="padding: 0px;">
                                    <a href="appointment-details-pending.php" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/user.png" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">John Doe</h6>
                                                <div>
                                                    <p class="mb-0">A pending appointment request has been received from John Doe for 05 May 2024 at 09:30AM at AL NASEEM MEDICAL CENTER LLC.</p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    </a>

                                    <a href="appointment-details-confirmed.php" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/user.png" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">John Doe</h6>
                                                <div>
                                                    <p class="mb-0">Your appointment with John Doe at AL NASEEM MEDICAL CENTER LLC on 05 May 2024 at 09:30AM has been confirmed.</p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    </a>
                                    <a href="appointment-details-rescheduled.php" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/user.png" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">John Doe</h6>
                                                <div>
                                                    <p class="mb-0">Your appointment with John Doe at AL NASEEM MEDICAL CENTER LLC has been rescheduled to 06 May 2024 at 09:30AM.</p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    </a>

                                    <a href="appointment-details-cancelled.php" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/user.png" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">John Doe</h6>
                                                <div>
                                                    <p class="mb-0">Your appointment with John Doe at AL NASEEM MEDICAL CENTER LLC on 05 May 2024 at 09:30AM has been cancelled due to doctor unavailability.</p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    </a>
                                    
                                    
                                    <a href="appointment-details-completed.php" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/user.png" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">John Doe</h6>
                                                <div>
                                                    <p class="mb-0">Your appointment with John Doe at AL NASEEM MEDICAL CENTER LLC on 05 May 2024 at 09:30AM has been successfully completed.</p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    </a>
                                    
                                </div>
                            
        </div>
        </div>
</div>




<?php include('include/footer.php'); ?>

<script>
   $('#base-style').DataTable();
</script>