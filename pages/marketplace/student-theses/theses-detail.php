<?php require_once('../../../private/initialize.php');
$page_title = 'Student Theses';
?>

<?php include(SHARED_PATH . '/marketplace-header.php'); ?>

<!-- <section> begin ============================-->
<section class="section bg-light container-fluid border">
    <div class=" container">
        <div class="row">
            <div class="col-12">
                <h4 class="my-2">3D Face Recognition Using Multicomponent Feature Extraction from the Nasal Region and
                    its Environs</h4>
                <p class="mb-2">
                    <a rel="Person" href="#!" class="link text-info person">Jiangning Gao</a>
                </p>

                <p class="mb-2">Department of Electronic & Electrical Engineering</p>
                <i>Student thesis: Doctoral Thesis › PhD</i>
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
                    <i class="fas fa-cube me-2"></i> Abstract
                </div>
            </li>
            <!-- <li class="nav-item" role="presentation">
                <div class="nav-link btn me-2 is-tab" id="pills-fingerprint-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-fingerprint" type="button" role="tab" aria-controls="pills-fingerprint"
                    aria-selected="false">
                    <i class="fas fa-fingerprint"></i> Fingerprint
                </div>
            </li> -->
        </ul>
    </div>
</div>

<div class="container mt-3 mb-5">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
            <div class="row pt-3">
                <div class="col-12 col-md-9 ">
                    <!-- <h4>
                        <i class="fas fa-cube me-2"></i> Abstract
                    </h4> -->
                    <!-- <h5>Abstract</h5> -->
                    <h5>Thesis on Extracting Expression Robust Features for 3D Face Recognition</h5>

                    <p>This thesis is dedicated to extracting expression robust features for 3D face recognition. The
                        use of 3D imaging enables the extraction of discriminative features that can significantly
                        improve the recognition performance due to the availability of facial surface information such
                        as depth, surface normals, and curvature. Expression robust analysis using information from both
                        depth and surface normals is investigated by dividing the main facial region into patches of
                        different scales. The nasal region and adjoining parts of the cheeks are utilized as they are
                        more consistent over different expressions and are hard to deliberately occlude. In addition, in
                        comparison with other parts of the face, these regions have a high potential to produce
                        discriminative features for recognition and overcome pose variations.</p>

                    <p>An overview and classification methodology of the widely used 3D face databases are first
                        introduced to provide an appropriate reference for 3D face database selection. Using the FRGC
                        and Bosphorus databases, a low complexity pattern rejector for expression robust 3D face
                        recognition is proposed by matching curves on the nasal and its environs, which results in a
                        low-dimension feature set of only 60 points. To extract discriminative features more locally, a
                        novel multi-scale and multi-component local shape descriptor is further proposed, which achieves
                        more competitive performances under the identification and verification scenarios.</p>

                    <p>In contrast with many of the existing work on 3D face recognition that considers captures
                        obtained with laser scanners or structured light, this thesis also investigates applications to
                        reconstructed 3D captures from lower cost photometric stereo imaging systems that have
                        applications in real-world situations. To this end, the performance of the expression robust
                        face recognition algorithms developed for captures from laser scanners is further evaluated on
                        the Photoface database, which contains naturalistic expression variations.</p>

                    <p>To improve the recognition performance of all types of 3D captures, a universal landmarking
                        algorithm is proposed that makes use of different components of the surface normals. Using
                        facial profile signatures and thresholded surface normal maps, facial roll and yaw rotations are
                        calibrated, and five main landmarks are robustly detected on the well-aligned 3D nasal region.
                        The landmarking results show that the detected landmarks demonstrate high within-class
                        consistency and can achieve good recognition performances under different expressions. This is
                        also the first landmarking work specifically developed for the reconstructed 3D captures from
                        photometric stereo imaging systems.</p>

                    <div>

                        <table class="table table-borderless">
                            <tr>
                                <td>Date of Award</td>
                                <td>23 Nov 2016</td>
                            </tr>
                            <tr>
                                <td>Original language</td>
                                <td>English</td>
                            </tr>

                            <tr>
                                <td>Awarding Institution</td>
                                <td>University of Bath</td>
                            </tr>
                            <tr>
                                <td>Supervisor</td>
                                <td>Adrian Evans (Supervisor) & Ran Li (Supervisor)</td>
                            </tr>
                        </table>





                    </div>


                </div>
                <div class="col-12 col-md-3 ">
                    <h5>Documents</h5>
                    <div>
                        <a href="#"><i class="fa fa-paperclip"></i> Thesis</a>
                        <p>
                            File: application/pdf, -1 bytes
                            <br>
                            Type: Thesis
                        </p>

                    </div>

                    <div class="pt-3">
                        <h5>Related content</h5>
                    </div>
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