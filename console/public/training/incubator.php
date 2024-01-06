<?php
$course = [
    0 => [
        'id' => 1,
        'module' => 'INC MODULE 8',
        'image' => 'road-map.jpeg',
        'title' => 'Welcome to KEIA Startups Incubator Program',
        'est_time' => '2 Hour',
        'start_date' => 'Jul 03, 2023',
        'complete_date' => '-',
        'score' => '100',
    ],
    1 => [
        'id' => 2,
        'module' => 'INC MODULE 9',
        'image' => 'biz_model_canvas.png',
        'title' => 'Entrepreneurial Mindshifts',
        'est_time' => '2 Hour',
        'start_date' => 'Jul 04, 2023',
        'complete_date' => 'Jul 04, 2023',
        'score' => '100',
    ],
    2 => [
        'id' => 3,
        'module' => 'INC MODULE 10',
        'image' => 'attract-customer.jpg',
        'title' => 'Generate Traction For Your Startup',
        'est_time' => '8 Hour',
        'start_date' => 'Feb 25, 2023',
        'complete_date' => 'Feb 25, 2023',
        'score' => '100',
    ],
    3 => [
        'id' => 4,
        'module' => 'INC MODULE 4A',
        'image' => 'validate-problem-1.png',
        'title' => 'Validate the Problem - Customer Problem Interviews',
        'est_time' => '4 Hour',
        'start_date' => 'Feb 26, 2023',
        'complete_date' => 'Feb 26, 2023',
        'score' => '100',
    ],
    4 => [
        'id' => 5,
        'module' => 'INC MODULE 4B',
        'image' => 'validate-problem-2.jpeg',
        'title' => 'Validate the Problem - Customer Problem Interviews',
        'est_time' => '10 Days',
        'start_date' => 'Mar 05, 2023',
        'complete_date' => 'Mar 05, 2023',
        'score' => '100',
    ],
    5 => [
        'id' => 6,
        'module' => 'INC MODULE 5',
        'image' => 'validate_solution.jpeg',
        'title' => 'Validate your Solution - Customer Solution Interviews',
        'est_time' => '6 Days',
        'start_date' => 'Mar 25, 2023',
        'complete_date' => 'Mar 26, 2023',
        'score' => '100',
    ],

    6 => [
        'id' => 7,
        'module' => 'INC MODULE 6',
        'image' => 'report.png',
        'title' => 'Venture Report, Pitch & Program Summary',
        'est_time' => '7 Days',
        'start_date' => 'Apr 10, 2023',
        'complete_date' => 'Apr 10, 2023',
        'score' => '100',
    ],



];
// pre_r($course);
foreach ($course as $key => $value) { ?>

    <div class="card">
        <div class="card-body">
            <div class="row align-items-center mb-2">
                <div class="col-md-3 text-center ">
                    <img src="<?php echo url_for('assets/images/') . $value['image'] ?>" class="img-fluid">
                </div>
                <div class="col-md-9 ">
                    <small>
                        <?php echo $value['module'] ?>
                    </small>
                    <div class="row">
                        <div class="col-12 col-md-9 border-sm-bottom border-sm-top">
                            <h3>
                                <a class="user-color" href="#my_training_list14" data-toggle="collapse">
                                    <strong>
                                        <?php echo $value['title'] ?>
                                        <i class="fa fa-caret-down ml-3 showhidemodual desktop-arrow"
                                            style="font-size: 25px"></i>
                                    </strong>
                                </a>
                            </h3>
                            <h6>
                                Estimated Time to Complete: <strong>
                                    <?php echo $value['est_time'] ?>
                                </strong>
                            </h6>
                        </div>
                        <div class="col-3 col-md-3 text-center">
                            <div class="c100 p100 main_progress14 small d-none d-lg-block" data-percent="100">
                                <div role="progressbar" aria-valuenow="<?php echo $value['score'] ?? "" ?>"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="--value:<?php echo $value['score'] ?? "" ?>"></div>
                            </div>
                        </div>

                        <!--  If (Lesson is started) this row of data begins
//Commented out until you can complete -->

                        <div class="col-9 col-md-12 row lesson_progress_details14">
                            <div class="col-9 col-md-3 mt-2 mt-md-3" id="started14">
                                Started: <strong>
                                    <?php echo $value['start_date'] ?? "" ?>
                                </strong>
                            </div>
                            <div class="col-9 col-md-3 mt-2 mt-md-3" id="completed14">
                                Completed: <strong>
                                    <?php echo $value['complete_date'] ?? "" ?>
                                </strong>
                            </div>
                            <div class="col-9 col-md-3 mt-2 mt-md-3" id="lesson_score14">
                                Lesson Score: <strong>
                                    <?php echo $value['score'] ?? "" ?>%
                                </strong>
                            </div>
                            <!-- end if -->
                        </div>

                    </div> <!-- End Row -->
                </div>
            </div>

            <div class="text-center">
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample<?php echo $value['id'] ?>"
                    aria-expanded="false" aria-controls="collapseExample<?php echo $value['id'] ?>">
                    Expand
                </a>
                </d>
                <div class="collapse" id="collapseExample<?php echo $value['id'] ?>">
                    <div class="card card-body mb-0">
                        <div class="row mentor_info">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <h4 class="assignment mt-1">
                                    Lesson
                                </h4>
                                <div class="w-100 border pt-4 p-md-5 mt-3 mb-5 rounded">
                                    <div class="lesson-container d-flex flex-column flex-lg-row">
                                        <div class="col-12 col-lg-8 d-flex flex-wrap justify-content-between">
                                            <button type="button"
                                                class="col-12 col-lg-6 btn btn-primary btn-primary-lg start_lesson start_lesson14"
                                                data-id="14"><i class="fa fa-play"></i> Review Lesson</button>
                                            <span
                                                class="Lesson_info col-12 col-lg-5 p-0 my-md-auto mr-lg-1 align-self-center">
                                                <strong>30 mins</strong> - Interactive Lesson</span>

                                        </div>
                                        <div class="col-12 col-lg-4 text-center d-flex align-items-center lesson-count">
                                            <div class="mobile-spacer d-flex col-12">
                                                <span
                                                    class="col-8 text-left align-self-center p-0 p-lg-1 text-nowrap"><strong>50%
                                                        of total</strong></span>
                                                <div class="col-4 justify-content-between pr-0">
                                                    <div class="c100 p100 lesson_progress lession_progress14 ex-small ml-3"
                                                        data-percent="100">
                                                        <div role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100" style="--value:100; --size:2rem"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="text-center">
                            <a class="btn btn-primary" data-bs-toggle="collapse"
                                href="#collapseExample<?php echo $value['id'] ?>" aria-expanded="false"
                                aria-controls="collapseExample<?php echo $value['id'] ?>">
                                Collapse
                            </a>

                        </p>
                    </div>

                </div>

            </div> <!-- end card-body-->
        </div>
    </div>
<?php } ?>