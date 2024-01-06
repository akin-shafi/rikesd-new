<?php require_once('../../../private/initialize.php');
$page_title = 'Analytics';
$page = 'Dashboard';

include(SHARED_PATH . '/horizontal_header.php'); ?>


<div class="row">
    <div class="col-lg-6 pt-2">
        <div class="w-100">You’ve completed 10 of 100 task of the <strong>KEIA Startups Platform</strong> program.</div>

        <div>
            <h6>Criteria for completion</h6>
        </div>

        <div>
            <ul>
                <li>Completed all training tasks (excluding optional tasks)</li>

                <li>70% average or better on all lesson knowledge tests</li>
            </ul>
        </div>
        <div class="mt-4">
            <button class=" btn btn-secondary rounded w-75"><i class="uil uil-play-circle"></i> Watch our
                onboarding
                video</button>
        </div>
    </div> <!-- end col-->

    <div class="col-lg-6 text-center">
        <img class="img-fluid" src="<?php echo url_for('assets/images/badge.png') ?>" width="200" alt="" srcset="">
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row mt-4">
    <div class="col-lg-8">
        <div class="card">
            <div class="border-bottom d-flex card-header justify-content-between align-items-center">
                <h4 class="header-title">My Training</h4>

            </div>

            <div class="border-bottom ">
                <div class="card-body d-flex justify-content-around">
                    <div class="p-2">
                        <img class="img-fluid" width="120"
                            src="<?php echo url_for('assets/images/progress-img.png') ?>" />
                    </div>
                    <div class="p-2">
                        <div>INC MODULE 1</div>
                        <h2>
                            <a href="#">Non-Working Prototypes & Delivering an Offer</a>
                        </h2>
                    </div>
                    <div class="p-2">
                        <div role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                            style="--value:45"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="border-bottom d-flex card-header justify-content-between align-items-center">
                <h4 class="header-title">My Ventures</h4>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
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


            </div>

            <div class="border-bottom ">
                <div class="card-body">

                    <!-- project title-->
                    <h4 class="mt-0">
                        <a href="<?php echo url_for('public/projects/details') ?>" class="text-title">App design and
                            development</a>
                    </h4>
                    <div class="badge bg-dark">Researching</div>

                    <p class="text-muted font-13 my-3">With supporting text below as a natural lead-in to
                        additional
                        contenposuere erat a ante...<a href="javascript:void(0);" class="fw-bold text-muted">view
                            more</a>
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
                            data-bs-placement="top" class="d-inline-block" aria-label="Mat Helme"
                            data-bs-original-title="Mat Helme">
                            <img src="<?php echo url_for('assets/images/users/avatar-6.jpg') ?>"
                                class="rounded-circle avatar-xs" alt="friend">
                        </a>

                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                            data-bs-placement="top" class="d-inline-block" aria-label="Michael Zenaty"
                            data-bs-original-title="Michael Zenaty">
                            <img src="<?php echo url_for('assets/images/users/avatar-7.jpg') ?>"
                                class="rounded-circle avatar-xs" alt="friend">
                        </a>

                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                            data-bs-placement="top" class="d-inline-block" aria-label="James Anderson"
                            data-bs-original-title="James Anderson">
                            <img src="<?php echo url_for('assets/images/users/avatar-8.jpg') ?>"
                                class="rounded-circle avatar-xs" alt="friend">
                        </a>
                        <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                            +7 more
                        </a>
                    </div>
                </div> <!-- end card-body-->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <!-- project progress-->
                        <p class="mb-2 fw-bold">Progress <span class="float-end">60%</span></p>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="60" style="width: 60%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </li>
                </ul>
            </div>
        </div>
    </div>





    <div class="col-lg-4">
        <div class="card">
            <div class="d-flex card-header justify-content-between align-items-center">
                <h4 class="header-title">Recent Comment</h4>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <!-- users -->
                <div class="row">
                    <div class="col">
                        <div class="card-body py-0 mb-3" data-simplebar="init" style="max-height: 546px">
                            <div class="simplebar-wrapper" style="margin: 0px -24px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset " style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content"
                                            style="height: auto; overflow: hidden scroll;">
                                            <?php for ($i = 1; $i < 5; $i++) { ?>
                                                <div class="simplebar-content border-top border-bottom"
                                                    style="padding: 0px 24px;">
                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start mt-1 p-2">
                                                            <img src="<?php echo url_for('assets/images/users/avatar-2.jpg') ?>"
                                                                class="me-2 rounded-circle" height="48" alt="Brandon Smith">
                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    Brandon Smith
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">

                                                                    <span class="w-75">
                                                                        Hi, we have over 50 direct products with various
                                                                        prices ranging from $5 to $60 per unit as detailed
                                                                        in our price list. We are presently engaging our
                                                                        online community and we have about 20 sign ups
                                                                        already. The plan is to schedule a meeting with you
                                                                        soon after we complete experiment 1&2 and prepare
                                                                        the experiment reports.
                                                                        #mentorreview
                                                                    </span>
                                                                </p>
                                                                <div class="pt-1 text-muted font-12">2023-11-5
                                                                    4:30am</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 664px;"></div>
                            </div>

                        </div> <!-- end slimscroll-->
                    </div> <!-- End col -->
                </div> <!-- end users -->
            </div> <!-- end tab content-->
        </div>
    </div>
</div>



<?php include(SHARED_PATH . '/footer.php'); ?>