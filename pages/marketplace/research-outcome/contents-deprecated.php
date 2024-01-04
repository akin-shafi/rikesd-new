<section class="bg-100 container-fluid">
    <div class="row">
        <div class="col-md-9 col-lg-12 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">

            <div class="card mt-2" data-zanim-xs='{"delay":0.1,"duration":1}'>
                <div class="card-body p-md-2" id="formbody">
                    <div id="content">
                        <!-- Sample product cards -->
                        <div class="row">
                            <?php foreach ($projects as $value) { ?>
                                <div class="col-md-4 my-4">
                                    <div class="card">
                                        <img src="<?php echo url_for_root('assets/img/product/' . $value->image) ?>"
                                            width="200" height="250" class="card-img-top" alt="Product 1">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <?php echo $value->project_title ?>
                                            </h5>
                                            <p class="card-text line-clamp text-justify ">
                                                <?php echo $value->description ?>
                                            </p>
                                            <div class="r">
                                                <a href="<?php echo url_for_root('/pages/marketplace/details?id=') . $value->id ?>"
                                                    class="btn btn-primary">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>




                            <!-- Add more product cards here -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>