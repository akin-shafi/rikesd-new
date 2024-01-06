<?php
$items = [
    1 => [
        'Topic' => 'Development and Evaluation of an Innovative mRNA-Based Vaccine Platform for Comprehensive Immune Response Against COVID-19',
        'Author' => 'Mustapha Popoola, Greenwood, D. & Dennis, M',
        'Publish' => ' 1 Jan 2024',
        'Journal' => 'International Journal of Pharmaceutical Research & Development'
    ],
    2 => [
        'Topic' => ' Sustainable Production of Industrial Engine Oil from Waste Products: A Comprehensive Study on Catalytic Upcycling and Performance Evaluation',
        'Author' => 'Isiaka Adewale',
        'Publish' => '23 Oct 2023',
        'Journal' => 'Journal of Materials Research and Technology'
    ],

]
    ?>
<div>
    <div class="fw-bold">Active</div>

    <hr />
    <?php foreach ($items as $key => $value) { ?>

        <div class="result-container mb-5">
            <div class="card">
                <h5 class="card-title">
                    <a rel="UPMProject"
                        href="<?php echo url_for_root('/pages/marketplace/research-outcome/contents-detail.php?id=' . $key); ?>"
                        class="link">
                        <?php echo $value['Topic'] ?>
                    </a>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <a rel="Person" href="#!" class="link text-info person">
                        <?php echo $value['Author'] ?></span>

                        <span rel="Person" class="link person">
                            <?php echo $value['Publish'] ?>, In:
                            <?php echo $value['Journal'] ?>.
                        </span>
                    </a>


                </h6>

                <!-- <small class="card-text mb-0">
                    <span class="date">3/01/24</span> → <span class="date">31/07/24</span>
                </small> -->

                <p class="card-text">
                    <small class="d-block">
                        <i>
                            <span class="type_family">Research output:<span class="type_family_sep">: </span>
                            </span><span class="type_classification">Contribution to journal > Article > peer-review</span>
                        </i>
                    </small>
                </p>

                <div class="mb-1" style="font-size: small;"><i class="fa fa-unlock text-danger" aria-hidden="true"></i> Open
                    Access</div>
            </div>

            <ul class="nav">
                <li class="nav-item me-1">
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle text-capitalize" type="button" id="ph"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Quantiles
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="ph">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>15 Profiles</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-folder-open me-2"></i>25 Research
                                    output</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cube me-2"></i>10 Projects</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa fa-circle me-2"></i>17 Equipment</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-home me-2"></i>1 Research unit</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item me-1">
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle text-capitalize" type="button" id="ph"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Extreme Value Theory
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="ph">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cube me-2"></i>1 Projects</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item me-1">
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle text-capitalize" type="button" id="ph"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Forecast
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="ph">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cube me-2"></i>1 Projects</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item me-1">
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle text-capitalize" type="button" id="ph"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Forecasting
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="ph">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>5 Profiles</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-folder-open me-2"></i>16 Research
                                    output</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cube me-2"></i>3 Projects</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-home me-2"></i>1 Research unit</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item me-1">
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle text-capitalize" type="button" id="ph"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            project
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="ph">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>2 Profiles</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-folder-open me-2"></i>20 Research
                                    output</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cube me-2"></i>13 Projects</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-home me-2"></i>1 Research unit</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    <?php } ?>




    <nav aria-label="Result navigation">
        <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>