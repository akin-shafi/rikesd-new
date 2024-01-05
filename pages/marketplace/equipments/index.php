<?php require_once('../../../private/initialize.php');
$page_title = "Equipments";
$page = "Market Place";

$items = [
    1 => [
        'item' => '3D Printer',
        'department' => 'Department of Chemical Engineering',
        'type' => 'equipment',
    ],
    2 => [
        'item' => 'Building research park',
        'department' => 'Department of Architecture & Civil Engineering',
        'type' => 'Facility',
    ],
    3 => [
        'item' => 'Diamond Wire Saw',
        'department' => 'Department of Mechanical Engineering',
        'type' => 'Equipment',
    ],
    4 => [
        'item' => 'Controlled Temperature Room',
        'department' => 'Department of Life Sciences',
        'type' => 'Facility',
    ],
]
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
<div class="container ">
    <div class="row ">
        <div class="col-12 col-md-3">
            <h6>Filters for
                <?= $page_title ?? "" ?>
            </h6>
            <div class="border-bottom mb-3">
                <p class="mb-1">Equipment taxonomy</p>
                <div class="content" id="content1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="1">
                        <label class="form-check-label" for="1">
                            Whole Body (3)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="2">
                        <label class="form-check-label" for="2">
                            Chromatography (2)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="2">
                        <label class="form-check-label" for="2">
                            Evaporator (0)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="2">
                        <label class="form-check-label" for="2">
                            Mass Spectrometry (0)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="2">
                        <label class="form-check-label" for="2">
                            Load (0)
                        </label>
                    </div>
                </div>

                <p class="mb-1">Equipment taxonomy</p>
                <div class="content" id="content2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="1">
                        <label class="form-check-label" for="1">
                            Equipment (2)

                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="2">
                        <label class="form-check-label" for="2">
                            Technology type (4)

                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="2">
                        <label class="form-check-label" for="2">
                            Facility (2)
                        </label>
                    </div>

                </div>


                <!-- <label role="button" class="toggleButton d-inline-block my-2" data-target="content1">
            Show more
        </label> -->
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="row">
                <?php foreach ($items as $key => $value) { ?>
                    <div class="col-4 p-2 my-4">
                        <div class="result-container">
                            <div class="rendering">
                                <div class="title">
                                    <a rel="Equipment"
                                        href="<?php echo url_for_root('pages/marketplace/equipments/equipment-detail.php?dt='); ?>"
                                        class="link"><span>
                                            <?php echo $value['item'] ?>
                                        </span></a>
                                </div>
                                <p class="equipment-person"></p><a rel="Organisation" href="#"
                                    class="link organisation"><span>
                                        <?php echo $value['department'] ?>
                                    </span></a>
                                <p class="type"><span class="type_family">Facility/equipment<span class="type_family_sep">:
                                        </span></span><span class="type_classification">
                                        <?php echo $value['type'] ?>
                                    </span></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/main-footer.php'); ?>