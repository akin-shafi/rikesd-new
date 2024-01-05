<?php require_once('../../../private/initialize.php');
$page_title = 'Start Project Details';
?>

<?php include(SHARED_PATH . '/marketplace-header.php'); ?>

<!-- <section> begin ============================-->
<section class="section bg-light container-fluid border">
    <div class=" container">
        <div class="row">
            <div class="col-12">
                <h4 class="my-2">UKRI Policy Support Fund: The future of critical public health deathcare infrastructure
                    in England and Wales</h4>
                <p class="mb-2">
                    <a rel="Person" href="#!" class="link text-info person">Woodthorpe, K.</a>,
                    <a rel="Person" href="#!" class="link text-info person">Teggi, D.</a> &amp;
                    <a rel="Person" href="#!" class="link text-info person">Crawley, M.</a>
                </p>

                <p class="mb-2">Department of Social & Policy Sciences Centre for Death and SocietyInstitute for Policy
                    Research (IPR) Centre for Qualitative Research</p>
                <i>Project: Research-related funding</i>
            </div>
        </div>
    </div>
</section>

<style>
    .bg-custom {
        background: #f2f2f2;
        border-top: 1px solid #e1e4e6;
        border-bottom: 1px solid #e1e4e6;
    }

    .is-tab.active {
        border-bottom: 2px solid #666 !important;
        border-radius: 0 !important;
        color: #666 !important;
    }
</style>
<div class="py-3 bg-custom">
    <div class="container">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <div class="nav-link btn me-2 is-tab active" id="pills-overview-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview"
                    aria-selected="true">
                    <i class="fas fa-cube me-2"></i> Overview
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <div class="nav-link btn me-2 is-tab" id="pills-fingerprint-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-fingerprint" type="button" role="tab" aria-controls="pills-fingerprint"
                    aria-selected="false">
                    <i class="fas fa-fingerprint"></i> Fingerprint
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="container mt-3 mb-5">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
            <div class="row">
                <div class="col-12 col-md-9">
                    <h4>
                        <i class="fas fa-cube me-2"></i> Overview Project Details
                    </h4>
                    <h5>Description</h5>
                    <p>This project will create a research partnership between the Centre for Death and Society and the
                        Institute for Cemetery and Crematorium Management, who together will generate and deliver
                        evidence that will inform the Law Commission's once-in-a-generation review of critical public
                        health legislation related to the care and disposal of the deceased.</p>
                    <p>Designed in collaboration with the Law Commission to maximise the relevance for the Commission's
                        work, the project will conduct research on this critical public health infrastructure, which is
                        under review as a result of growing concerns about its long term sustainability given rising
                        fossil fuel costs, declining land availability, and the growth of new (unregulated) disposal
                        technologies such as alkaline hydrolysis.</p>
                    <h5>Layman's description</h5>
                    <p>This project will create a research partnership between the Centre for Death and Society and the
                        Institute for Cemetery and Crematorium Management, who together will generate and deliver
                        evidence that will inform the Law Commission's once-in-a-generation review of critical public
                        health legislation related to the care and disposal of the deceased.</p>
                    <p>Designed in collaboration with the Law Commission to maximise the relevance for the Commission's
                        work, the project will conduct research on this critical public health infrastructure, which is
                        under review as a result of growing concerns about its long term sustainability given rising
                        fossil fuel costs, declining land availability, and the growth of new (unregulated) disposal
                        technologies such as alkaline hydrolysis.</p>

                    <p><span class="d-inline-block" style="width: 180px;">Short</span> title £13586.60</p>
                    <p><span class="d-inline-block" style="width: 180px;">Status</span> Active</p>
                    <p><span class="d-inline-block" style="width: 180px;">Effective start/end date</span> 3/01/24 →
                        31/07/24</p>

                    <h5>Collaborative partners</h5>
                    <ul>
                        <li>University of Bath (lead)</li>
                        <li>Institute of Cemetery and Crematorium Management</li>
                        <li>Law Commission</li>
                    </ul>
                    <h5>UN Sustainable Development Goals</h5>
                    <p>In 2015, UN member states agreed to 17 global Sustainable Development Goals (SDGs) to end
                        poverty, protect the planet and ensure prosperity for all. This project contributes towards the
                        following SDG(s):</p>

                    <h5>RCUK Research Areas</h5>
                    <span class="border p-1">Sociology</span> <span class="border p-1">Social policy</span>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-fingerprint" role="tabpanel" aria-labelledby="pills-fingerprint-tab">
            <div class="row">
                <div class="col-12">
                    <h4>
                        <i class="fas fa-fingerprint"></i> Fingerprint
                    </h4>
                    <p>Explore the research topics touched on by this project. These labels are generated based on the
                        underlying awards/grants. Together they form a unique fingerprint.</p>
                    Sort by | <a href="#!">Weight</a> | <a href="#!">Alphabetically</a>

                    <h5 class="fw-normal my-3">Earth & Environmental Sciences</h5>

                    <span class="border p-1 me-1">Public Health</span>
                    <span class="border p-1 me-1">Health Legislation</span>
                    <span class="border p-1 me-1">Cemetery</span>
                    <span class="border p-1 me-1">Infrastructure</span>
                    <span class="border p-1 me-1">Project</span>
                    <span class="border p-1 me-1">Hydrolysis</span>
                    <span class="border p-1 me-1">Fossil Fuel</span>
                    <span class="border p-1 me-1">Sustainability</span>
                    <span class="border p-1 me-1">Land</span>
                    <span class="border p-1 me-1">Cost</span>
                    <span class="border p-1 me-1">Policy</span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <section> close ============================-->

</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->
<input type="hidden" id="eUrl" value="<?= url_for_root('/login') ?>">
<?php include(SHARED_PATH . '/main-footer.php'); ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script> -->