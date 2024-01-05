<style>
    .content {
        max-height: 100px;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        margin-bottom: 10px;
    }

    hr {
        color: inherit;
        background-color: currentColor;
        border: 0;
        opacity: 0.25;
    }
</style>


<div>
    <div class="fw-bold mb-3">Filters for Research output</div>

    <div class="border-bottom mb-3">
        <p class="mb-1">Sustainable Development Goals</p>
        <div class="content" id="content1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="1">
                <label class="form-check-label" for="1">
                    SD G 3 - Good Health and Well-being (268)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="2">
                <label class="form-check-label" for="2">
                    SDG 7 - Affordable and Clean Energy (132)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="3">
                <label class="form-check-label" for="3">
                    SDG 13 - Climate Action (72)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="4">
                <label class="form-check-label" for="4">
                    SDG 12 - Responsible Consumption and Production (65)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="5">
                <label class="form-check-label" for="5">
                    SDG 16 - Peace, Justice and Strong Institutions (60)
                </label>
            </div>
        </div>
        <label role="button" class="toggleButton d-inline-block mb-2" data-target="content1">
            Show more
        </label>
    </div>
    <!--  -->
    <!--  -->
    <!--  -->

    <div class="border-bottom mb-3">
        <p class="mb-1">Start Year</p>

        <div class="content" id="content2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="2">
                <label class="form-check-label" for="2">
                    2024 (32)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="3">
                <label class="form-check-label" for="3">
                    2023 (327)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="4">
                <label class="form-check-label" for="4">
                    2022 (336)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="5">
                <label class="form-check-label" for="5">
                    2021 (336)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="5">
                <label class="form-check-label" for="5">
                    2020 (323)
                </label>
            </div>
        </div>
        <label role="button" class="toggleButton d-inline-block mb-2" data-target="content2">
            Show more
        </label>
    </div>
    <!--  -->
    <!--  -->
    <!--  -->

    <div class="border-bottom mb-3">
        <p class="mb-1">Status</p>
        <div class="content" id="content3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="2">
                <label class="form-check-label" for="2">
                    Finished (4302)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="3">
                <label class="form-check-label" for="3">
                    Active (744)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="4">
                <label class="form-check-label" for="4">
                    Not started (121)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="5">
                <label class="form-check-label" for="5">
                    Curtailed (3)
                </label>
            </div>
        </div>
        <label role="button" class="toggleButton d-inline-block mb-2" data-target="content3">
            Show more
        </label>
    </div>
    <!--  -->
    <!--  -->
    <!--  -->

    <div class="border-bottom mb-3">
        <p class="mb-1">Project participants</p>
        <div class="content" id="content4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="2">
                <label class="form-check-label" for="2">
                    Chris Bowen (71)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="3">
                <label class="form-check-label" for="3">
                    Alexander Lunt (64)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="4">
                <label class="form-check-label" for="4">
                    Sam Akehurst (49)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="5">
                <label class="form-check-label" for="5">
                    Jonathan Knight (47)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="5">
                <label class="form-check-label" for="5">
                    Emma Stone (45)
                </label>
            </div>
        </div>
        <label role="button" class="toggleButton d-inline-block mb-2" data-target="content4">
            Show more
        </label>
    </div>

</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButtons = document.querySelectorAll('.toggleButton');

        toggleButtons.forEach(button => {
            const contentId = button.getAttribute('data-target');
            const content = document.getElementById(contentId);

            let isExpanded = false;

            button.addEventListener('click', function() {
                isExpanded = !isExpanded;
                const maxHeight = isExpanded ? content.scrollHeight + 'px' : '100px';

                content.style.maxHeight = maxHeight;
                button.textContent = isExpanded ? 'Show Less' : 'Show More';
                button.className = isExpanded ? 'text-info' : 'text-dark';
            });
        });
    });
</script>