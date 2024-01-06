<?php require_once('../../private/initialize.php');
$page_title = 'Ventures';
$page = 'Dashboard';

include(SHARED_PATH . '/horizontal_header.php'); ?>


<div class="row mb-2">
    <div class="col-sm-4">
        <a href="<?php echo url_for('/public/ventures/add') ?>" class="btn btn-danger rounded-pill mb-3"><i
                class="mdi mdi-plus"></i> Create
            Ventures</a>
    </div>
    <div class="col-sm-8">
        <div class="text-sm-end">
            <div class="btn-group mb-3">
                <button type="button" class="btn btn-primary">All</button>
            </div>
            <div class="btn-group mb-3 ms-1">
                <button type="button" class="btn btn-light">Ongoing</button>
                <button type="button" class="btn btn-light">Finished</button>
            </div>
            <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                <button type="button" class="btn btn-secondary"><i class="ri-function-line"></i></button>
            </div>
            <div class="btn-group mb-3 d-none d-sm-inline-block">
                <button type="button" class="btn btn-link text-muted"><i class="ri-list-check-2"></i></button>
            </div>
        </div>
    </div><!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-md-6 col-xxl-3">
        <!-- project card -->
        <div class="card d-block">
            <div class="card-body">
                <div class="dropdown card-widgets">
                    <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-more-fill"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i
                                class="mdi mdi-delete me-1"></i>Delete</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i
                                class="mdi mdi-email-outline me-1"></i>Invite</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"><i
                                class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                    </div>
                </div>
                <!-- project title-->
                <h4 class="mt-0">
                    <a href="<?php echo url_for('public/ventures/details') ?>" class="text-title">App design and
                        development</a>
                </h4>
                <div class="badge bg-success">Finished</div>

                <p class="text-muted font-13 my-3">With supporting text below as a natural lead-in to additional
                    contenposuere erat a ante...<a href="javascript:void(0);" class="fw-bold text-muted">view more</a>
                </p>

                <!-- project detail-->
                <p class="mb-1">
                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                        <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                        <b>21</b> Tasks
                    </span>
                    <span class="text-nowrap mb-2 d-inline-block">
                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                        <b>741</b> Comments
                    </span>
                </p>
                <div id="tooltip-container">
                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                        <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                    </a>

                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                        <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                    </a>

                    <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="James Anderson" class="d-inline-block">
                        <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                    </a>
                    <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                        +7 more
                    </a>
                </div>
            </div> <!-- end card-body-->
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <!-- project progress-->
                    <p class="mb-2 fw-bold">Progress <span class="float-end">100%</span></p>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%;">
                        </div><!-- /.progress-bar -->
                    </div><!-- /.progress -->
                </li>
            </ul>
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row-->



<?php include(SHARED_PATH . '/footer.php'); ?>