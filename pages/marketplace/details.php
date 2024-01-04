<?php require_once('../../private/initialize.php');
$page_title = "Market Place";
$projects = Product::find_by_undeleted(['order' => 'ASC']);

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 0;
$services = Services::find_by_id($activeTab) ?? 1;

?>
<?php include(SHARED_PATH . '/marketplace-header.php'); ?>
<?php //include(SHARED_PATH . '/page-banner.php'); ?>

<section class="section py-0">
    <div class="bg-holder overlay overlay-elixir" style="background-image:url(../assets/img/background-14.jpg);"></div>
    <!--/.bg-holder-->
    <div class="container">
        <div class="row min-vh-25 align-items-center text-white">
            <div class="col" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <h4 class="text-white pt-5 mt-5">
                    An Illustrated Guide to Clinical Psychology
                </h4>
                <div class="text-white text-justify">
                    <p class="">
                        Juliet Young, Catherine Butler, Rachel Paskell
                    </p>

                    <div>
                        Department of PsychologyAddiction and Mental Health Group (AIM)

                    </div>
                    <p class="mt-2">
                        <i>Research output: Book/Report › Book</i>
                    </p>
                </div>

            </div>
        </div>
    </div><!-- end of .container-->
</section>
<section class="section pt-4 bg-100 container-fluid">
    <div class="container">
        <div class="row  mt-5">
            <div class="col-lg-8 ">
                <h5>Abstract</h5>
                <p>
                    What does a day in the life of a practising clinical psychologist look like? Which therapeutic
                    approaches do
                    they use? How do you become a clinical psychologist?
                </p>

                <p>
                    Answering these questions and more, An Illustrated Guide to Clinical Psychology is ideal for
                    aspiring,
                    trainee,
                    and newly qualified clinical psychologists to learn more about the field.
                </p>

                <p>
                    Written by clinical psychologists, and featuring illustrations by one of the authors, Juliet
                    Young,
                    this
                    accessible book explores the history and context of clinical psychology, the key skills, tools,
                    and
                    theoretical
                    foundations for clinical psychologists, and the main therapeutic approaches that they use. The
                    book
                    navigates
                    through the necessary components to understand the underpinning elements of the profession, with
                    a
                    taster of
                    different areas that clinical psychologists work in. Through a critical lens, it also explores
                    topical
                    debates
                    within the profession and addresses issues of diversity and inclusion.
                </p>
            </div>
            <div class="col-lg-4 ">
                <h5>Other files and links</h5>
                <p>

                </p>
            </div>
        </div>
    </div>
</section>


</main><!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

<?php include(SHARED_PATH . '/main-footer.php'); ?>