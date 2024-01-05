<?php require_once('../../../private/initialize.php');
$page_title = "Equipments";
$page = "Market Place";


?>
<?php include(SHARED_PATH . '/marketplace-header.php'); ?>
<?php include('../search.php') ?>
<style>
    .rendering .title {
        font-size: 1.3125rem;
        margin-bottom: 5px;
        font-size: 20px;
        color: #418900;
    }

    .rendering {
        font-size: 1rem;
    }

    .rendering p.type {
        padding-bottom: 4px;
    }

    .rendering p.type {
        font-size: .875rem;
        color: #575757;
        margin: 5px 0 0 0;
        font-style: italic;
    }
</style>
<div class="container-fluid ">
    <div class="row ">
        <div class="col-2"></div>
        <div class="col-10">
            <div class="row">
                <?php for ($i = 1; $i < 9; $i++) { ?>
                    <div class="col-4 p-2 my-4">
                        <div class="result-container">
                            <div class="rendering">
                                <div class="title">
                                    <a rel="Equipment" href="#" class="link"><span>100 kN hydraulic
                                            actuator</span></a>
                                </div>
                                <p class="equipment-person"></p><a rel="Organisation"
                                    href="https://researchportal.bath.ac.uk/en/organisations/department-of-architecture-civil-engineering"
                                    class="link organisation"><span>Department of Architecture &amp; Civil
                                        Engineering</span></a>
                                <p class="type"><span class="type_family">Facility/equipment<span class="type_family_sep">:
                                        </span></span><span class="type_classification">Equipment</span></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/main-footer.php'); ?>