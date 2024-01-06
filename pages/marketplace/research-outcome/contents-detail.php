<?php require_once('../../../private/initialize.php');
$page_title = "Discovery";
$id = $_GET['id'] ?? 1;
$items = [
    1 => [
        'Topic' => 'Development and Evaluation of an Innovative mRNA-Based Vaccine Platform for Comprehensive Immune Response Against COVID-19',
        'Author' => 'Mustapha Popoola, Greenwood, D. & Dennis, M',
        'Publish' => ' 1 Jan 2024',
        'Journal' => 'Pharmaceutical Research & Development',
        'Abstract' => 'The ongoing global pandemic caused by the severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) has spurred unprecedented efforts in the scientific community to develop effective vaccines. This Ph.D. research work focuses on the design, development, and evaluation of an innovative mRNA-based vaccine platform for generating a comprehensive immune response against COVID-19. The study aims to contribute to the global fight against the pandemic by providing a novel and efficacious vaccine strategy.',
        'price' => 25000
    ],
    2 => [
        'Topic' => ' Sustainable Production of Industrial Engine Oil from Waste Products: A Comprehensive Study on Catalytic Upcycling and Performance Evaluation',
        'Author' => 'Isiaka Adewale',
        'Publish' => '23 Oct 2023',
        'Journal' => 'Materials Research and Technology',
        'Abstract' => 'This PhD thesis research aims to address the 
                        growing environmental concerns associated with the production and 
                        disposal of waste products, particularly those generated from industrial processes. 
                        The focus of this study is on the development of a sustainable approach for the production of high-quality industrial engine oil from waste materials. 
                        The research encompasses both the synthesis of engine oil through catalytic upcycling of waste feedstocks and an extensive evaluation of the performance and environmental impact of the resulting product.',
        'price' => 13000
    ],

]
    ?>

<?php include(SHARED_PATH . '/marketplace-header.php'); ?>

<!-- <section> begin ============================-->
<section class="section bg-light container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <h4 class="mb-2">
                    <?php echo $items[$id]['Topic'] ?>
                </h4>

                <p class="mb-2">
                    <a rel="Person" href="#!" class="link text-info person">
                        <?php echo $items[$id]['Author'] ?></span>

                        <span rel="Person" class="link person">
                            <?php echo $items[$id]['Publish'] ?>, In:
                            <?php echo $items[$id]['Journal'] ?>.
                        </span>
                    </a>
                </p>

                <p class="mb-2">
                    <i>
                        <?php echo $items[$id]['Journal'] ?>
                    </i>


                <div>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                        data-bs-target="#declarationModal">
                        Buy Now for $
                        <?php echo number_format($items[$id]['price'], 2) ?>
                    </button>
                </div>
                </p>

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
                    <i class="fas fa-fingerprint"></i> Research Objectives
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
                    <!-- <h4>
                        <i class="fas fa-cube me-2"></i> Overview Project Details
                    </h4> -->
                    <h5>Abstract</h5>
                    <p>
                        <?php echo $items[$id]['Abstract'] ?>
                    </p>
                    <p><span class="d-inline-block" style="width: 180px;">Original language</span> English</p>
                    <p><span class="d-inline-block" style="width: 180px;">Pages (from-to)</span> 1-3</p>
                    <p><span class="d-inline-block" style="width: 180px;">Number of pages</span> 24</p>
                    <p><span class="d-inline-block" style="width: 180px;">Journal</span> International Journal of
                        <?php echo $items[$id]['Journal'] ?>
                    </p>
                    <p><span class="d-inline-block" style="width: 180px;">Volume</span> 1</p>
                    <p><span class="d-inline-block" style="width: 180px;">Issue number</span> 1</p>
                    <p><span class="d-inline-block" style="width: 180px;">Early online date</span> 28 Apr 2023</p>
                    <p><span class="d-inline-block" style="width: 180px;">Publication status</span> Published - 1 Dec
                        2023</p>

                    <div class="mb-3">
                        <h5>Keywords</h5>

                        <span class="d-inline-block border p-1 mb-1">mRNA Vaccine Design</span>
                        <span class="d-inline-block border p-1 mb-1">Delivery System Optimization</span>
                        <span class="d-inline-block border p-1 mb-1">Immunogenicity and Safety Studies</span>
                        <span class="d-inline-block border p-1 mb-1">Comprehensive Immune Response Assessment</span>
                        <span class="d-inline-block border p-1 mb-1">Cross-Protection and Variants Analysis</span>
                        <span class="d-inline-block border p-1 mb-1">Scale-Up and Manufacturing Considerations</span>
                        <span class="d-inline-block border p-1 mb-1">Clinical Trials and Human Trials</span>
                        <span class="d-inline-block border p-1 mb-1">Public Health Impact and Implementation</span>
                    </div>


                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-fingerprint" role="tabpanel" aria-labelledby="pills-fingerprint-tab">
            <div class="row">
                <div class="col-12">
                    <h4>
                        <i class="fas fa-fingerprint"></i> Research Objectives
                    </h4>
                    <p>
                    <h5>mRNA Vaccine Design:</h5>
                    <ul>
                        <li>Investigate the optimal selection of antigenic targets within the SARS-CoV-2 virus to induce
                            a robust immune
                            response.</li>
                        <li>Design and optimize the mRNA sequences encoding these antigenic targets for efficient
                            translation and
                            antigen presentation.</li>
                    </ul>

                    <h5>Delivery System Optimization:</h5>
                    <ul>
                        <li>Develop advanced lipid nanoparticle (LNP) formulations for efficient and targeted delivery
                            of mRNA to host
                            cells.</li>
                        <li>Evaluate the safety and efficacy of various delivery systems in promoting antigen expression
                            and immune
                            response.</li>
                    </ul>

                    <h5>Immunogenicity and Safety Studies:</h5>
                    <ul>
                        <li>Conduct in vitro studies to assess the immunogenicity of the mRNA vaccine candidates in
                            human cell
                            lines.</li>
                        <li>Perform preclinical trials using animal models to evaluate the safety profile and efficacy
                            of the selected
                            mRNA vaccine formulations.</li>
                    </ul>

                    <h5>Comprehensive Immune Response Assessment:</h5>
                    <ul>
                        <li>Analyze the humoral immune response by measuring antibody titers against SARS-CoV-2.</li>
                        <li>Evaluate the cellular immune response through the assessment of T-cell activation and
                            cytokine production.</li>
                    </ul>

                    <h5>Cross-Protection and Variants Analysis:</h5>
                    <ul>
                        <li>Investigate the potential cross-protection of the developed mRNA vaccine against known
                            variants of
                            SARS-CoV-2.</li>
                        <li>Develop strategies to enhance the vaccine's effectiveness against emerging variants.</li>
                    </ul>

                    <h5>Scale-Up and Manufacturing Considerations:</h5>
                    <ul>
                        <li>Develop scalable and cost-effective manufacturing processes for the production of the mRNA
                            vaccine.</li>
                        <li>Evaluate the stability and shelf-life of the vaccine formulations under various storage
                            conditions.</li>
                    </ul>

                    <h5>Clinical Trials and Human Trials:</h5>
                    <ul>
                        <li>Initiate and conduct Phase I, II, and III clinical trials to assess the safety,
                            immunogenicity, and efficacy
                            of the mRNA vaccine in human subjects.</li>
                        <li>Collaborate with regulatory bodies to ensure compliance with ethical and safety standards.
                        </li>
                    </ul>

                    <h5>Public Health Impact and Implementation:</h5>
                    <ul>
                        <li>Assess the potential public health impact of the developed mRNA vaccine in mitigating the
                            spread and severity
                            of COVID-19.</li>
                        <li>Develop strategies for widespread vaccine distribution and accessibility, particularly in
                            underserved
                            populations.</li>
                    </ul>

                    <p>This research work aims to provide a comprehensive understanding of the potential of mRNA-based
                        vaccines against
                        COVID-19, contributing valuable insights to the scientific community and playing a crucial role
                        in the global
                        effort to control and ultimately eradicate the pandemic.
                    </p>
                    </p>
                    Sort by | <a href="#!">Weight</a> | <a href="#!">Alphabetically</a>

                    <h5 class="fw-normal my-3">Bio-Chemistry</h5>

                    <span class="d-inline-block border p-1 mb-1 me-1">Public Health</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Health Legislation</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Cemetery</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Infrastructure</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Project</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Hydrolysis</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Fossil Fuel</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Sustainability</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Land</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Cost</span>
                    <span class="d-inline-block border p-1 mb-1 me-1">Policy</span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Declaration of Interest Modal -->
<div class="modal fade" id="declarationModal" tabindex="-1" aria-labelledby="declarationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="declarationModalLabel">Declaration of Interest</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your declaration of interest form goes here -->
                <form>
                    <!-- Example form fields -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address:</label>
                        <input type="email" class="form-control" id="email" placeholder="john@example.com">
                    </div>
                    <!-- Add more form fields as needed -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Additional Message (if any):</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <!-- Add your form submission logic here -->

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
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