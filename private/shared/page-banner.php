<?php
$tab = $_GET['tab'] ?? '';
$services = Services::find_by_id($tab) ?? 1;
?>
<section class="section" style="padding-top: 7.5rem !important;padding-bottom: 7.5rem !important;">
  <div class="bg-holder overlay overlay-elixir" style="background-image:url(../assets/img/background-14.jpg);"></div>
  <!--/.bg-holder-->
  <div class="container">
    <div class="row min-vh-25 align-items-center text-white">
      <div class="col" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <h4 class="text-white pt-5 mt-5">
          <?php echo $services->item ?? '' ?></h4>
        <div class="text-justify">
          <p class="text-white">
            <?php echo $services->description ?? '' ?>
          </p>
        </div>

      </div>
    </div>
  </div><!-- end of .container-->
</section>