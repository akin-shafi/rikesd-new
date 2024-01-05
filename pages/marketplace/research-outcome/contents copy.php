<div class="portal-search-results">


    <div class="search-facet-refinement">
        <div class="search-facet-result">

        </div>

        <div class="current-selected-search-facets">
            <div class="search-concept-result-wrapper underline">



                <table class="selected-filters-and-concepts">


                    <tbody>
                        <tr class="selected-filters" style="display: none;">
                            <td>
                                <span class="selected-search-facets-title">
                                    Search concepts
                                </span>
                                <br>
                                <ul class="badges extracted"></ul>
                            </td>
                        </tr>
                        <tr class="excracted" style="display: none;">
                            <td class="selected-filter-name" style="vertical-align: middle">
                                <span class="selected-search-facets-title">
                                    Selected filters
                                </span>
                                <div class="selected-concepts-section-filters clear-all">

                                    <a href="/en/publications/?showAdvanced=false&amp;allConcepts=true&amp;inferConcepts=true&amp;originalSearch=&amp;improvedLayoutOrganisationUuid="
                                        class="remove">
                                        Clear all
                                    </a>
                                </div>
                                <div class="badges search_filters" data-filters-applied="Filters applied,">




















































































                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>


                <script>

                    if (true) {
                        $(document).ready(function () {

                            $('.last_checked_item').on('click', function () {
                                return false;
                            });

                            $("div.search-concept-fadein").fadeIn();
                            $options.on('click', 'a.remove', function (e) {
                                $(this).addClass('being-removed');
                            });
                            $hideEmptyfilters();
                            $selectCheckBox();
                            $IE11Styling();
                        });
                        var $options = $('.badges.extracted'),
                            items = $options.find('li.filter').sort(sortFilters);

                        function sortFilters(aName, bName) {
                            return ((aName.className > bName.className) ? -1 : ((aName.className == bName.className) ? 2 : 1));
                        }

                        $options.html(items);
                        $('li.concept-filters').not('.someClass').children('.sort-concept').css("display", "none");
                        $('.concept-filters').last().addClass("someClass").after("<br/>");

                        var $hideEmptyfilters = function () {
                            var size = $(".search-concept-result-wrapper tr").each(function () {
                                if ($(this).find(".concept-badge-small").length == 0) {
                                    $(this).css("display", "none");
                                }
                            });
                            if (size == 0) {
                                $(".selected-filter-name").css("display", "none");

                            }

                        };

                        var $selectCheckBox = function () {

                            $(".filter.concept-filters.excracted").on('click', function () {
                                var url = $(this).find('input').data('url'),
                                    searchType = $('#main-content').hasClass('page-section-content-searchAll') ? '?doSearch=Search&' : '?',
                                    changeUrl = url.replace("?", searchType);
                                window.location.href = changeUrl;
                            });
                        }
                    }
                    else {
                        $(document).ready(function () {

                            $("div.search-concept-fadein").fadeIn();
                            $options.on('click', 'a.remove', function (e) {
                                $(this).addClass('being-removed');
                            });
                        });
                        var $options = $('.badges'),
                            items = $options.find('li.filter').sort(sortFilters);
                        function sortFilters(aName, bName) {
                            return ((aName.className > bName.className) ? -1 : ((aName.className == bName.className) ? 2 : 1));
                        }
                        $options.html(items);
                        $('.concept-filters').last().addClass("someClass").after("<br/>");
                        $('li.concept-filters').not('.someClass').children('.sort-concept').css("display", "none");


                        $(".search-concept-fadein").hide(0).delay(200).fadeIn(2000)
                    }

                    var $IE11Styling = function () {
                        var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
                        if (isIE11) {
                            $('.filter.concept-filters.excracted input[name=extractedConcepts]').css("margin-top", "5px");
                        }

                    }

                </script>
            </div>
        </div>
    </div>


    <div class="search-result-top">
        <div class="search-tools search-tools-left">
            <ul>
                <li class="search-pager-information">
                    1 - 50 out of 80,716 results
                </li>
                <li class="dropdown search-orderings">

                    <button id="btn-ordering" data-toggle="dropdown" aria-expanded="false"
                        aria-label="Results sorted byPublication Year, Title(descending)" data-loaded="true">Publication
                        Year, Title <span class="direction">(descending)</span><i
                            class="icon icon-down-open-mini"></i></button>
                    <div class="dropdown-container">
                        <ul class="search-orderings">
                            <li><a href="/en/publications/?ordering=publicationYearThenTitle&amp;descending=false"
                                    rel="nofollow" aria-label="Sort by Publication Year, Title (ascending)">Publication
                                    Year, Title<span class="label">(ascending)</span></a></li>
                            <li><a href="/en/publications/?ordering=title&amp;descending=false" rel="nofollow"
                                    aria-label="Sort by Title (ascending)">Title</a></li>
                            <li><a href="/en/publications/?ordering=type&amp;descending=false" rel="nofollow"
                                    aria-label="Sort by Type (ascending)">Type</a></li>
                        </ul>
                    </div>
                </li>

                <li class="rss">

                    <a href="/en/publications/?format=rss" target="_blank" title="View search result as RSS"
                        download="rss.xml" type="application/rss+xml" aria-label="Download RSS file">
                        <i class="icon icon-rss" aria-hidden="true"></i>
                    </a>

                </li>





                <li>
                    <a href="/en/publications/?export=xls" onclick="return exportTrack(event);" data-format="mime.xls"
                        title="Export search results" aria-label="Export search results">
                        Export search results
                    </a>


                </li>






            </ul>
        </div>

        <script type="text/javascript">
            function exportTrack(event) {
                if (window._gaq && window._gaq._getTracker) {
                    gtag('event', 'Export Results', {
                        'event_category': 'Search',
                        'event_label': 'publications',
                        'value': ''
                    });
                }
                pageDataTracker.trackEvent('contentExport',
                    {
                        content:
                            [
                                { type: 'publications', exportType: 'file', format: event.target.dataset.format }
                            ]
                    });
            }
        </script>


    </div>









    <h2 class="sr-only hidden_search_result_heading">Search results</h2>
    <ul class="list-results">


        <li class="list-result-item list-result-item-0">


            <div class="search-result-group">
                2024
            </div>



            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_bookanthology rendering_portal-short rendering_bookanthology_portal-short">
                    <h3 class="title"><a rel="BookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/an-illustrated-guide-to-clinical-psychology"
                            class="link"><span>An Illustrated Guide to Clinical Psychology</span></a></h3><span>Young,
                        J.</span>, <span>Butler, C.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/rachel-paskell"
                        class="link person"><span>Paskell, R.</span></a>, <span class="date">21 Mar 2024</span>, <a
                        rel="Publisher" href="#" class="link" tabindex="-1"><span>Jessica Kingsley
                            Publishers</span></a>.<p class="type"><span class="type_family">Research output<span
                                class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Book/Report<span class="type_parent_sep"> ›
                            </span></span><span class="type_classification">Book</span></p>
                </div>








                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="3b95f579-303d-48df-8023-95401bd75931" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Clinical Psychology</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1fff8a1d-31fb-471e-9cbf-d083ab3e3e84"
                            data-rank-value="0.5135590491964787" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Psychology</span>
                                <span class="value sr-only">51%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="bf756c52-7504-4662-8b85-8867cf5f1959"
                            data-rank-value="0.11909832630219662" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Lenses</span>
                                <span class="value sr-only">11%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="310bb28e-79d6-4c2e-901d-ab7e641d3511"
                            data-rank-value="0.10380517702424048" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Therapeutic Uses</span>
                                <span class="value sr-only">10%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="07042850-9dfd-4aaa-a57f-43f2a6fefb2f"
                            data-rank-value="0.09443384454935967" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">History</span>
                                <span class="value sr-only">9%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-1">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontobookanthology rendering_portal-short rendering_contributiontobookanthology_portal-short">
                    <h3 class="title"><a rel="ContributionToBookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/boardroom-diversity-the-role-of-the-responsible-leader"
                            class="link"><span>Boardroom Diversity: The Role of the Responsible Leader</span></a></h3>
                    <span>Sealey, R.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/johanne-ward-grosvold"
                        class="link person"><span>Grosvold, J.</span></a>, <span class="date">2024</span>, <em>Handbook
                        on Corporate Governance and Corporate Social Responsibility.</em> Magnan, M. &amp; Michelon, G.
                    (eds.). <a rel="Publisher" href="#" class="link" tabindex="-1"><span>Edward Elgar Publishing
                            Ltd</span></a>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Chapter or section in a
                            book/report/conference proceeding<span class="type_parent_sep"> › </span></span><span
                            class="type_classification">Chapter or section</span></p>
                </div>








                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="596218ca-afae-4fc6-8538-c862b0ee0d78" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">leader</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="51964653-e99f-4973-801a-f77726d7106f"
                            data-rank-value="0.9785718624819567" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">corporate board</span>
                                <span class="value sr-only">97%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="d59a260c-5e43-4318-b865-406356e6a573"
                            data-rank-value="0.7732070181366804" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">gender</span>
                                <span class="value sr-only">77%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="126b2650-9398-4987-ba87-76c0eb7fe987"
                            data-rank-value="0.7405716835616624" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">corporate social responsibility</span>
                                <span class="value sr-only">74%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="2d09cf01-a043-496c-8ed0-2092ee0b2ff8"
                            data-rank-value="0.5551688506886414" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">practice firm</span>
                                <span class="value sr-only">55%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-2">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontobookanthology rendering_portal-short rendering_contributiontobookanthology_portal-short">
                    <h3 class="title"><a rel="ContributionToBookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/foreign-policy-of-emerging-powers"
                            class="link"><span>Foreign Policy of Emerging Powers</span></a></h3><span>Destradi,
                        S.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/leslie-wehner"
                        class="link person"><span>Wehner, L.</span></a>, <span class="date">9 Jan 2024</span>, <em>The
                        Oxford Handbook of Foreign Policy Analysis.</em> Kaarbo, J. &amp; Thies, C. (eds.). Oxford, U.
                    K.: <a rel="Publisher" href="#" class="link" tabindex="-1"><span>Oxford University Press</span></a>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Chapter or section in a
                            book/report/conference proceeding<span class="type_parent_sep"> › </span></span><span
                            class="type_classification">Chapter or section</span></p>
                </div>










            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-3">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontoperiodical rendering_portal-short rendering_contributiontoperiodical_portal-short">
                    <h3 class="title"><a rel="ContributionToPeriodical"
                            href="https://researchportal.bath.ac.uk/en/publications/how-business-can-fight-populism"
                            class="link"><span>How business can fight populism</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/zena-al-esia"
                        class="link person"><span>Al-Esia, Z.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/andrew-crane"
                        class="link person"><span>Crane, A.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/kostas-iatridis"
                        class="link person"><span>Iatridis, K.</span></a> &amp; <span>Yorgancioglu, A.</span>, <span
                        class="date">1 Jan 2024</span>, Stanford Social Innovation Review, 22, 1, <span class="pages">p.
                        44-51</span> <span class="numberofpages">8 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to specialist
                            publication<span class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontoperiodical rendering_publicationattacheddocumentsportalrenderer rendering_contributiontoperiodical_publicationattacheddocumentsportalrenderer">
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="4dceb8db-b431-428e-a913-d07abb6bf44e" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">populism</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="4caf7003-9c4e-4d2d-9e0e-7a3f2675da58"
                            data-rank-value="0.5828941186511725" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">threat</span>
                                <span class="value sr-only">58%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="7e8c8708-7e09-4ba2-bdad-e937a28499ed"
                            data-rank-value="0.5754613956572564" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">governance</span>
                                <span class="value sr-only">57%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">







                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-4">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_bookanthology rendering_portal-short rendering_bookanthology_portal-short">
                    <h3 class="title"><a rel="BookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/rethinking-knowledgeable-practice-in-education"
                            class="link"><span>Rethinking knowledgeable practice in education</span></a></h3><a
                        rel="Person" href="https://researchportal.bath.ac.uk/en/persons/jim-hordern"
                        class="link person"><span>Hordern, J.</span></a>, <span class="date">22 Apr 2024</span>, (In
                    preparation) Abingdon, U. K.: <a rel="Publisher" href="#" class="link"
                        tabindex="-1"><span>Routledge</span></a>. <span class="numberofpages">152 p.</span> (Foundations
                    and Futures of Education)<p class="type"><span class="type_family">Research output<span
                                class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Book/Report<span class="type_parent_sep"> ›
                            </span></span><span class="type_classification">Book</span></p>
                </div>








                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="804886a3-e5d5-4da4-bde0-8dbf03e6e841" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">education</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="6cdae10c-8ecf-43f6-9c86-5d45865fbf09"
                            data-rank-value="0.4797046488729981" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Vocational Education</span>
                                <span class="value sr-only">47%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="f248bd00-9c40-4c64-9d68-e8631f931054"
                            data-rank-value="0.45156147738823726" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">educational practice</span>
                                <span class="value sr-only">45%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="02e5762c-2012-451c-b9cd-17ee2b049c71"
                            data-rank-value="0.36263075685054513" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">sociology</span>
                                <span class="value sr-only">36%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="46f78335-804d-491f-8dca-4ea64812961d"
                            data-rank-value="0.34352128786949315" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">expertise</span>
                                <span class="value sr-only">34%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-5">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_bookanthology rendering_portal-short rendering_bookanthology_portal-short">
                    <h3 class="title"><a rel="BookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/towards-powerful-educational-knowledge-perspectives-from-educatio"
                            class="link"><span>Towards Powerful Educational Knowledge: Perspectives from Educational
                                Foundations, Curriculum Theory and Didaktik</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/jim-hordern"
                        class="link person"><span>Hordern, J. (ed.)</span></a>, <span>Muller, J. (ed.)</span> &amp;
                    <span>Deng, Z. (ed.)</span>, <span class="date">4 Apr 2024</span>, (In preparation) Abingdon, U. K.:
                    <a rel="Publisher" href="#" class="link" tabindex="-1"><span>Routledge</span></a>. <span
                        class="numberofpages">127 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Book/Report<span
                                class="type_parent_sep"> › </span></span><span class="type_classification">Book</span>
                    </p>
                </div>








                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="bd7eea7c-645d-443f-81ca-b9c7ec21b724" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">curriculum theory</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="f248bd00-9c40-4c64-9d68-e8631f931054"
                            data-rank-value="0.44948744724884376" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">educational practice</span>
                                <span class="value sr-only">44%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="e6302c94-f342-4ef3-99d9-1f19d319ddce"
                            data-rank-value="0.3776516047567965" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">curriculum</span>
                                <span class="value sr-only">37%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="73825ab0-d318-40af-bf40-fd18a4c8e8ac"
                            data-rank-value="0.30190660009310516" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">empiricism</span>
                                <span class="value sr-only">30%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="f6db9216-b138-4aac-88b1-d4815b07b76b"
                            data-rank-value="0.27317624789585715" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">educational theory</span>
                                <span class="value sr-only">27%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-6">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontobookanthology rendering_portal-short rendering_contributiontobookanthology_portal-short">
                    <h3 class="title"><a rel="ContributionToBookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/trust-capacity-and-management-of-vaccine-rollouts"
                            class="link"><span>Trust, capacity and management of vaccine rollouts</span></a></h3>
                    <span>Hannah, A.</span>, <span>Attwell, K.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/jordan-tchilingirian"
                        class="link person"><span>Tchilingirian, J.</span></a>, <span class="date">28 Feb 2024</span>,
                    <em>Research Handbook on Public Management and COVID-19.</em> Dickinson, H., Yates, S., O'Flynn, J.
                    &amp; Smith, C. (eds.). Cheltenham, U. K.: <a rel="Publisher" href="#" class="link"
                        tabindex="-1"><span>Edward Elgar Publishing Ltd</span></a>, <span class="pages">p. 206 -
                        217</span> (Elgar Handbooks in Public Administration and Management).<p class="type"><span
                            class="type_family">Research output<span class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Chapter or section in a book/report/conference
                            proceeding<span class="type_parent_sep"> › </span></span><span
                            class="type_classification">Chapter or section</span></p>
                </div>










            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-7">


            <div class="search-result-group">
                2023
            </div>



            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/remaking-the-margins-frontier-assemblages-and-brokerage-in-hamban"
                            class="link"><span>(Re)making the margins: frontier assemblages and brokerage in Hambantota,
                                Sri Lanka</span></a></h3><span>Goodhand, J.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/oliver-walton"
                        class="link person"><span>Walton, O.</span></a>, <span class="date">30 Apr 2023</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>Journal of
                                International Development.</span></a></span> <span class="volume">35</span>, <span
                        class="journalnumber">3</span>, <span class="pages">p. 459-477</span> <span
                        class="numberofpages">19 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="96f21a44-66cd-4044-8af9-84aaa7d57974" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Brokerage</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="107358cd-7fae-41ec-875e-9ca5737a62a7"
                            data-rank-value="0.7406658377701804" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Sri Lanka</span>
                                <span class="value sr-only">74%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="340a562e-7f66-4759-b2a8-9010754a1e3f"
                            data-rank-value="0.5795359941204131" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">rupture</span>
                                <span class="value sr-only">57%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="61bb2408-b75a-43bc-8c53-f65db638f228"
                            data-rank-value="0.5609655322919771" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Margin</span>
                                <span class="value sr-only">56%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="82d186c1-f853-430f-a6a5-9c9b4fefd0f3"
                            data-rank-value="0.48127325154953243" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">end of the war</span>
                                <span class="value sr-only">48%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">2</span>



                            <span class="label">Citations
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1002/jid.3651"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-1">
                                                <title id="widget-plumprint-1">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.30931199427398,47.22315752615415 64.95237218164426,60.887472240563206 L 68.49621881891616,49.98063378675762 C 51.04510258899057,54.191677537512305 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.69052330287756,50.30134796657462 44.30277241657732,32.40306607644015 L 35.02486146928248,39.143862950696345 C 51.618300483556744,45.994565748271484 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1" r="7"
                                                    cx="70.54282075197531" cy="56.67476707849887"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="5.5"
                                                    cx="70.54282075197531" cy="56.67476707849887"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="7"
                                                    cx="37.30383855048258" cy="32.52523292150113"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="5.5"
                                                    cx="37.30383855048258" cy="32.52523292150113"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">2</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">4</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1002/jid.3651"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1002/jid.3651"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="054ac498-6487-a17b-f066-d55218b2a25f"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=126360887"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=126360887&amp;tab=twitter'>
          Posted by <b>2</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>6</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=126360887'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 2"
                                        src="https://badges.altmetric.com/?size=128&amp;score=2&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-8">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/diabetesonaplate-the-everyday-deployment-and-contestation-of-diab"
                            class="link"><span>#DiabetesOnAPlate: the everyday deployment and contestation of diabetes
                                stigma in an online setting</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/leda-blackwood"
                        class="link person"><span>Blackwood, L.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/jeffrey-gavin"
                        class="link person"><span>Gavin, J.</span></a>, <span>Arnott, E.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/julie-barnett"
                        class="link person"><span>Barnett, J.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/charlotte-dack"
                        class="link person"><span>Dack, C.</span></a> &amp; <span>Johansen, J.</span>, <span
                        class="date">31 Dec 2023</span>, <span class="journal">In: <a rel="Journal" href="#"
                            class="link" tabindex="-1"><span>Critical Public Health.</span></a></span> <span
                        class="volume">33</span>, <span class="journalnumber">2</span>, <span class="pages">p.
                        160-173</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b67605de-4bf2-4070-8b09-7e062ce6a287" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">chronic illness</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="57b3934a-c1af-4ee9-90ba-73c47b85b0f6"
                            data-rank-value="0.8771202966140635" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Journalism</span>
                                <span class="value sr-only">87%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="0da6e0d1-6796-4b79-b6c1-824861cff999"
                            data-rank-value="0.7200694107145551" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Public Health</span>
                                <span class="value sr-only">72%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="f86f56ec-f5b3-422c-a43d-e2124532430d" data-rank-value="0.570770002635059"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Social Networking</span>
                                <span class="value sr-only">57%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="8d340bff-4f64-4ca1-b1ea-5233c66ff52b"
                            data-rank-value="0.5138637782722091" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Health Policy</span>
                                <span class="value sr-only">51%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">1</span>



                            <span class="label">Citation
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1080/09581596.2022.2077548"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-2">
                                                <title id="widget-plumprint-2">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.22258276539442,52.01369320408618 45.90423977855504,66.13211781824477 L 54.09576022144496,66.13211781824477 C 46.77741723460558,52.01369320408618 53.59998925948199,46.9792503401265 65.59122080280456,62.35206603789542 L 69.87392484493876,49.17125831282512 C 51.136900389547066,54.55985840572482 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.20925660901267,50.26507460022768 43.83131868222497,34.54141507468958 L 37.20423943415722,39.35626998487258 C 51.42350505498047,46.47670135264621 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#f3c316" stroke="#6e1a62" stroke-width="1" r="5" cx="50"
                                                    cy="69"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5" cx="50"
                                                    cy="69"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="8.459431618637298" cx="72.34722328826516"
                                                    cy="57.261053002472046"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="6.959431618637298" cx="72.34722328826516"
                                                    cy="57.261053002472046"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">11</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-mention">
                                                <div class="ppp-title">Mentions</div>
                                                <ul>
                                                    <li class="plx-mention"><span class="ppp-label">Blog Mentions:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1080/09581596.2022.2077548"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut"
                                data-doi="10.1080/09581596.2022.2077548" data-hide-no-mentions="true"
                                data-link-target="_blank" class="altmetric-embed"
                                data-uuid="17858706-a2b9-101a-f947-bf64b1e5f614"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=128971337"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=128971337&amp;tab=twitter'>
          Posted by <b>4</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>13</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=128971337'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 3"
                                        src="https://badges.altmetric.com/?size=128&amp;score=3&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-9">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/knowyourworth-how-influencers-commercialise-meaningful-work"
                            class="link"><span>#Knowyourworth: How Influencers Commercialise Meaningful Work</span></a>
                    </h3><span>Trittin-Ulbrich, H.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/sarah-glozer"
                        class="link person"><span>Glozer, S.</span></a>, <span class="date">22 Nov 2023</span>,
                    (Acceptance date) <span class="journal">In: <a rel="Journal" href="#" class="link"
                            tabindex="-1"><span>Human Relations.</span></a></span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>








                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="e320cd63-a34c-403c-b38c-474316faa287" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Meaningful Work</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b7775876-8ac4-481a-84b1-7de064414485"
                            data-rank-value="0.5267718988050601" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Personnel</span>
                                <span class="value sr-only">52%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b5e612f4-1e70-4534-bf4e-d12e193e7c25"
                            data-rank-value="0.43707553695549495" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Feedback</span>
                                <span class="value sr-only">43%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="4bb23ae7-117e-4707-aa00-03cdfac67fa2"
                            data-rank-value="0.3020154655696438" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Industry</span>
                                <span class="value sr-only">30%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="2cf8af35-aeeb-4178-8019-d603d6cacee9"
                            data-rank-value="0.2643739901360749" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Social Media</span>
                                <span class="value sr-only">26%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-10">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontobookanthology rendering_portal-short rendering_contributiontobookanthology_portal-short">
                    <h3 class="title"><a rel="ContributionToBookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/13-benzenedicarbonitrile-2456-tetrakisdiphenylamino"
                            class="link"><span>1,3-Benzenedicarbonitrile, 2,4,5,6-Tetrakis(diphenylamino)-</span></a>
                    </h3><span>Tibbetts, J.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/alex-cresswell"
                        class="link person"><span>Cresswell, A.</span></a>, <span class="date">13 Jan 2023</span>,
                    <em>Encyclopaedia of Reagents for Organic Synthesis.</em> <span class="numberofpages">10 p.</span>
                    (Encyclopedia of Reagents for Organic Synthesis (EROS)).<p class="type"><span
                            class="type_family">Research output<span class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Chapter or section in a book/report/conference
                            proceeding<span class="type_parent_sep"> › </span></span><span
                            class="type_classification">Chapter or section</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontobookanthology rendering_publicationattacheddocumentsportalrenderer rendering_contributiontobookanthology_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                    <div class="files">File</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="3a32f26b-dec9-4d8e-982e-c2639ba66d97" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">hexane</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="c86d5543-82a1-4ac5-bf7d-c495fbb7cf7c"
                            data-rank-value="0.8623581466420647" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">mercurous chloride</span>
                                <span class="value sr-only">86%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="81db4898-b245-4583-848b-283522aa8960"
                            data-rank-value="0.8276514894884877" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">deprotonation</span>
                                <span class="value sr-only">82%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="9caf7f7b-5007-4427-bca2-5a7b39073381"
                            data-rank-value="0.7360964123908771" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">diphenylamine</span>
                                <span class="value sr-only">73%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="da53f5d1-fd08-47aa-9121-0887c535bce0" data-rank-value="0.695328820689942"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">pentane</span>
                                <span class="value sr-only">69%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">


                        <div class="metric metrics-downloads">
                            <span class="count tooltipped tooltipped-n"
                                aria-label="Total downloads for this work">72</span>
                            <span class="label">Downloads
                                (Pure)</span>
                        </div>

                    </div>


                    <div class="metrics-wrap metrics-bottom one">







                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-11">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/25-the-role-of-anticipatory-prescribing-in-care-homes-identifying"
                            class="link"><span>25  The role of anticipatory prescribing in care homes: identifying
                                dying, complying with regulations and preventing death in hospital – a qualitative
                                study</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/diana-teggi" class="link person"><span>Teggi,
                            D.</span></a>, <span class="date">30 Jan 2023</span>, <span class="journal">In: <a
                            rel="Journal" href="#" class="link" tabindex="-1"><span>BMJ Supportive &amp; Palliative
                                Care.</span></a></span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span class="type_classification">Meeting
                            abstract</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="0a922892-3cc9-4d10-a966-4e0e6a0c234d" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Home Care Services</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="c56ca5d0-19b9-405b-8c2a-24a0ce6984da" data-rank-value="0.956495048840581"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Formal Social Control</span>
                                <span class="value sr-only">95%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="a519e077-71e6-48c0-9b9f-93760535bf3c"
                            data-rank-value="0.30082437119759214" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Pharmaceutical Preparations</span>
                                <span class="value sr-only">30%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="a813572d-83c4-43f4-82fb-11082e3afae8" data-rank-value="0.239126289262872"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Caregivers</span>
                                <span class="value sr-only">23%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="177545b8-dd74-4eea-9f24-832091ec94e7"
                            data-rank-value="0.22524316340833386" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Injections</span>
                                <span class="value sr-only">22%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">







                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-12">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/2t-pot-hawkes-model-for-left-and-right-tail-conditional-quantile-"
                            class="link"><span>2T-POT Hawkes model for left- and right-tail conditional quantile
                                forecasts of financial log-returns: out-of-sample comparison of conditional EVT
                                models</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/matthew-tomlinson"
                        class="link person"><span>Tomlinson, M. F.</span></a>, <span>Greenwood, D.</span> &amp; <a
                        rel="Person" href="https://researchportal.bath.ac.uk/en/persons/marcin-mucha-kruczynski"
                        class="link person"><span>Mucha-Kruczynski, M.</span></a>, <span class="date">1 Jan 2024</span>,
                    <span class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>International
                                Journal of Forecasting.</span></a></span> <span class="volume">40</span>, <span
                        class="journalnumber">1</span>, <span class="pages">p. 324-347</span> <span
                        class="numberofpages">24 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="a7edfaf9-8c9c-448e-a496-8dfec477b0c4" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">quantiles</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="02f9bd4e-6c3f-433c-b2fd-bf037a0eb702"
                            data-rank-value="0.8655623723863912" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Conditional Quantiles</span>
                                <span class="value sr-only">86%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="c3f88b0f-ab28-495c-a448-11d784aa6b89"
                            data-rank-value="0.7872023032718303" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Extreme Value Theory</span>
                                <span class="value sr-only">78%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="876320bb-5c79-47d3-96be-9a4ef4b9026c"
                            data-rank-value="0.7269216987505984" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Forecast</span>
                                <span class="value sr-only">72%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="40fe8bb8-c773-40cd-a8a7-6158d3e0d203"
                            data-rank-value="0.7161954440170564" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">forecasting</span>
                                <span class="value sr-only">71%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">1</span>



                            <span class="label">Citation
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1016/j.ijforecast.2023.03.003"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-3">
                                                <title id="widget-plumprint-3">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.50848354948492,47.05603274763565 65.39011014278067,61.891009356402684 L 69.44022058537712,49.42605112348201 C 51.10800228184648,54.443954426344064 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.94988995594511,50.28321128340115 44.06704554940114,33.47224057556486 L 36.11455045171985,39.250066467784464 C 51.52090276926861,46.23563355045884 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1" r="8"
                                                    cx="71.77919422315901" cy="57.076489171186296"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="6.5"
                                                    cx="71.77919422315901" cy="57.076489171186296"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="6"
                                                    cx="38.067959378462795" cy="33.57695501418856"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="4.5"
                                                    cx="38.067959378462795" cy="33.57695501418856"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">8</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1016/j.ijforecast.2023.03.003"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-13">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/3d-medical-imaging-analysis-patient-specific-instrumentation-and-"
                            class="link"><span>3D medical imaging analysis, patient-specific instrumentation and
                                individualized implant design, with additive manufacturing creates a new personalized
                                high tibial osteotomy treatment option</span></a></h3><span>Belvedere, C.</span>, <a
                        rel="Person" href="https://researchportal.bath.ac.uk/en/persons/alisdair-macleod"
                        class="link person"><span>MacLeod, A.</span></a>, <span>Leardini, A.</span>, <span>Grassi,
                        A.</span>, <span>Dal Fabbro, G.</span>, <span>Zaffagnini, S.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/richie-gill" class="link person"><span>Gill,
                            H. S.</span></a>, <span class="date">1 Aug 2023</span>, <span class="journal">In: <a
                            rel="Journal" href="#" class="link" tabindex="-1"><span>Journal of Mechanics in Medicine and
                                Biology.</span></a></span> <span class="volume">23</span>, <span
                        class="journalnumber">6</span>, <span class="numberofpages">15 p.</span>, 2340041.<p
                        class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="2c0b462f-3e11-4d0f-bf50-5d4c7d6a19b1" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Medical imaging</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="74f4609b-68f1-4610-afd7-e905a2edd0a4"
                            data-rank-value="0.8913832988258193" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Surgery</span>
                                <span class="value sr-only">89%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="4a37ba08-5f35-45a7-a397-e3e7aeddc3e4"
                            data-rank-value="0.8677180010057677" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">3D printers</span>
                                <span class="value sr-only">86%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="39c03b6f-67ba-452e-a83c-422b120dd031" data-rank-value="0.611894453512337"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Selective laser sintering</span>
                                <span class="value sr-only">61%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="8cdbad78-db81-4960-b25d-c953a3e9f695" data-rank-value="0.558319811561017"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Planning</span>
                                <span class="value sr-only">55%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1142/S0219519423400419"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-4">
                                                <title id="widget-plumprint-4">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.22664833007176,47.292520576297996 64.77069451291479,60.47096670557168 L 68.10442268644938,50.21080638846693 C 51.01899685776224,54.086973168445724 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="6.584962500721156" cx="70.02967939832052" cy="56.50803734574481">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.084962500721156" cx="70.02967939832052" cy="56.50803734574481">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">3</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1142/S0219519423400419"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-14">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/3d-printed-flexible-pvdf-trfe-composites-with-aligned-bczt-nanowi"
                            class="link"><span>3D-Printed Flexible PVDF-TrFE Composites with Aligned BCZT Nanowires and
                                Interdigital Electrodes for Piezoelectric Nanogenerator Applications</span></a></h3>
                    <span>Yan, M.</span>, <span>Li, H.</span>, <span>Liu, S.</span>, <span>Xiao, Z.</span>, <span>Yuan,
                        X.</span>, <span>Zhai, D.</span>, <span>Zhou, K.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/chris-bowen" class="link person"><span>Bowen,
                            C. R.</span></a>, <span>Zhang, Y.</span> &amp; <span>Zhang, D.</span>, <span class="date">14
                        Jul 2023</span>, <span class="journal">In: <a rel="Journal" href="#" class="link"
                            tabindex="-1"><span>ACS Applied Polymer Materials.</span></a></span> <span
                        class="volume">5</span>, <span class="journalnumber">7</span>, <span class="pages">p.
                        4879-4888</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="5d1af4c4-12c1-433c-83b8-a59fbe9d4e67" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Nanogenerators</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="fb0da6b4-0bd2-4b15-a098-f93b7a1dca36"
                            data-rank-value="0.8482484229977776" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Nanowires</span>
                                <span class="value sr-only">84%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="667e3e25-8233-45a3-87a2-ff2d87462f9f"
                            data-rank-value="0.6591919684587086" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Piezoelectricity</span>
                                <span class="value sr-only">65%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="3b3a5711-ad0f-4659-ba60-15636d92258a"
                            data-rank-value="0.5937374921497979" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Nanowire</span>
                                <span class="value sr-only">59%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="daaea015-41df-4be3-af88-03a963cd3e50"
                            data-rank-value="0.5247288121433639" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Electrodes</span>
                                <span class="value sr-only">52%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">1</span>



                            <span class="label">Citation
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1021/acsapm.3c00475"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-5">
                                                <title id="widget-plumprint-5">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.373430913598796,47.169355364597216 65.09329232953279,61.21053903241416 L 68.80011950916324,49.80209804651174 C 51.065351767280674,54.27289255571802 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.20925660901267,50.26507460022768 43.83131868222497,34.54141507468958 L 37.20423943415722,39.35626998487258 C 51.42350505498047,46.47670135264621 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="7.321928094887362" cx="70.94084410812276" cy="56.80409270647189">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.821928094887362" cx="70.94084410812276" cy="56.80409270647189">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">5</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1021/acsapm.3c00475"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-15">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/3d-printed-hollow-microneedle-lateral-flow-devices-for-rapid-bloo"
                            class="link"><span>3D-Printed Hollow Microneedle-Lateral Flow Devices for Rapid Blood-Free
                                Detection of C-Reactive Protein and Procalcitonin</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/joe-turner" class="link person"><span>Turner,
                            J.</span></a>, <a rel="Person" href="https://researchportal.bath.ac.uk/en/persons/emily-lay"
                        class="link person"><span>Lay, E.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/ute-jungwirth"
                        class="link person"><span>Jungwirth, U.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/valentyna-varenko"
                        class="link person"><span>Varenko, V.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/richie-gill" class="link person"><span>Gill,
                            H. S.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/pedro-estrela"
                        class="link person"><span>Estrela, P.</span></a> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/hannah-leese"
                        class="link person"><span>Leese, H.</span></a>, <span class="date">25 Aug 2023</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>Advanced
                                Materials Technologies.</span></a></span> <span class="volume">8</span>, <span
                        class="journalnumber">16</span>, <span class="numberofpages">11 p.</span>, 2300259.<p
                        class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                    <div class="files">File</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="da3b8557-3916-4cde-8b41-ae6f8deb94d8" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Interstitial</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="a5be7154-b874-4b51-aeed-6afe1e3bb155" data-rank-value="0.879188247309058"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Blood</span>
                                <span class="value sr-only">87%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="4d0edcbb-bc92-41fb-91e1-2e4f9beafdae"
                            data-rank-value="0.8731547689597713" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Proteins</span>
                                <span class="value sr-only">87%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="dd37b4bc-bc16-45da-b8f7-9e267064f475"
                            data-rank-value="0.8497155528437754" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Hydrophilicity</span>
                                <span class="value sr-only">84%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="0d5be96f-cd40-4377-b402-247c5c44ea75"
                            data-rank-value="0.8376831506620941" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Marker</span>
                                <span class="value sr-only">83%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top ">

                        <div class="metric scopus-citations">

                            <span class="count">3</span>



                            <span class="label">Citations
                                (SciVal)</span>
                        </div>


                        <div class="metric metrics-downloads">
                            <span class="count tooltipped tooltipped-n"
                                aria-label="Total downloads for this work">7</span>
                            <span class="label">Downloads
                                (Pure)</span>
                        </div>

                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1002/admt.202300259"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-6">
                                                <title id="widget-plumprint-6">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.5423277762914,47.02763406940485 65.46449276645814,62.061535402259125 L 69.60063008690454,49.33181366362503 C 51.11869051224574,54.48682257704266 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.538803536895486,50.31195724611856 44.44066379428786,31.777639087724868 L 34.38743427710762,39.0817378757551 C 51.67527449407126,45.85355012386061 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="8.169925001442312" cx="71.98928498703314" cy="57.14475179836562">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="6.669925001442312" cx="71.98928498703314" cy="57.14475179836562">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1"
                                                    r="7.584962500721156" cx="36.856856520094155"
                                                    cy="31.910014936099007"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="6.084962500721156" cx="36.856856520094155"
                                                    cy="31.910014936099007"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">4</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">9</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1002/admt.202300259"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-16">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontobookanthology rendering_portal-short rendering_contributiontobookanthology_portal-short">
                    <h3 class="title"><a rel="ContributionToBookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/3d-printing-of-biopolymer-based-hydrogels"
                            class="link"><span>3D printing of biopolymer-based hydrogels</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/david-fengwei-xie"
                        class="link person"><span>Xie, F.</span></a>, <span class="date">31 Dec 2023</span>,
                    <em>Additive Manufacturing of Biopolymers: Handbook of Materials, Techniques, and Applications.</em>
                    <a rel="Publisher" href="#" class="link" tabindex="-1"><span>Elsevier Masson</span></a>, <span
                        class="pages">p. 65-100</span> <span class="numberofpages">36 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Chapter or section in a
                            book/report/conference proceeding<span class="type_parent_sep"> › </span></span><span
                            class="type_classification">Chapter or section</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontobookanthology rendering_publicationattacheddocumentsportalrenderer rendering_contributiontobookanthology_publicationattacheddocumentsportalrenderer">
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1700e162-e9f1-4b39-b78a-431c5ceed15e" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Biopolymers</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="e3232aeb-b8d2-4a70-998e-1609d9f3e3e4"
                            data-rank-value="0.9928562683636567" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Three-Dimensional Printing</span>
                                <span class="value sr-only">99%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="3e0aef9f-73e2-4df1-9661-5b2fcca393ad"
                            data-rank-value="0.8040507184258717" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Hydrogels</span>
                                <span class="value sr-only">80%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="43919211-25a3-49d1-91ec-96c51fb21e7b"
                            data-rank-value="0.5983680417348666" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Hydrogel</span>
                                <span class="value sr-only">59%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="270e1348-c76e-40fb-8f5b-efe12b2626ea"
                            data-rank-value="0.5965985287935015" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Biopolymer</span>
                                <span class="value sr-only">59%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1016/B978-0-323-95151-7.00004-1"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-7">
                                                <title id="widget-plumprint-7">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 34.408779197195436,62.35206603789542 C 46.40001074051801,46.9792503401265 53.22258276539442,52.01369320408618 45.90423977855504,66.13211781824477 L 54.09576022144496,66.13211781824477 C 46.77741723460558,52.01369320408618 52.910968883852114,47.55740708319115 64.07689625937145,58.88039800888424 L 66.60821528599423,51.08979911330883 C 50.91930320327874,53.68712375984879 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 48.86309961045294,54.559858405724825 30.126075155061244,49.17125831282512 Z">
                                                </path>
                                                <circle fill="#13b7ea" stroke="#6e1a62" stroke-width="1"
                                                    r="8.459431618637298" cx="27.65277671173484"
                                                    cy="57.261053002472046"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="6.959431618637298" cx="27.65277671173484"
                                                    cy="57.261053002472046"></circle>
                                                <circle fill="#f3c316" stroke="#6e1a62" stroke-width="1" r="5" cx="50"
                                                    cy="69"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5" cx="50"
                                                    cy="69"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1" r="5"
                                                    cx="68.07007380960792" cy="55.871322893124"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5"
                                                    cx="68.07007380960792" cy="55.871322893124"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-mention">
                                                <div class="ppp-title">Mentions</div>
                                                <ul>
                                                    <li class="plx-mention"><span class="ppp-label">References:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-socialMedia">
                                                <div class="ppp-title">Social Media</div>
                                                <ul>
                                                    <li class="plx-socialMedia"><span class="ppp-label">Shares, Likes
                                                            &amp; Comments: </span><span class="ppp-count">11</span>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1016/B978-0-323-95151-7.00004-1"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut"
                                data-doi="10.1016/B978-0-323-95151-7.00004-1" data-hide-no-mentions="true"
                                data-link-target="_blank" class="altmetric-embed"
                                data-uuid="be6769b0-42db-6265-216f-cdfec3d657c4"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=147370332"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=147370332&amp;tab=twitter'>
          Posted by <b>1</b> X users
      </a>
    </div>
    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #958899;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=147370332&amp;tab=wikipedia'>
          Referenced in <b>1</b> Wikipedia pages
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>3</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=147370332'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 4"
                                        src="https://badges.altmetric.com/?size=128&amp;score=4&amp;types=ttttwwww"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-17">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/3d-triangulation-of-transient-luminous-events-over-africa"
                            class="link"><span>3D triangulation of Transient Luminous Events over Africa</span></a></h3>
                    <span>Mashao, D.</span>, <span>Kosch, M.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/martin-fullekrug"
                        class="link person"><span>Fullekrug, M.</span></a> &amp; <span>Ivchenko, M.</span>, <span
                        class="date">1 Aug 2023</span>, <span class="journal">In: <a rel="Journal" href="#" class="link"
                            tabindex="-1"><span>Advances in Space Research.</span></a></span> <span
                        class="volume">72</span>, <span class="journalnumber">3</span>, <span class="pages">p.
                        686-693</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="files">File</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="f1326cb2-18c9-4e02-814d-2c0c51cdcc71" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">triangulation</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="a6602cb2-56e0-4f2a-991d-e418a2ad3c29"
                            data-rank-value="0.9074781172482478" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Triangulation</span>
                                <span class="value sr-only">90%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="e7b091d4-e107-4b2f-a2ea-244f0204d54f"
                            data-rank-value="0.8560401343585493" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">lightning</span>
                                <span class="value sr-only">85%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b094fd49-6ce9-4acc-b021-4d9d49d60121"
                            data-rank-value="0.6548907872841881" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Lightning</span>
                                <span class="value sr-only">65%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="4cc8cca8-d178-4ccf-80f4-e58d962717fb"
                            data-rank-value="0.6124508063368738" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Africa</span>
                                <span class="value sr-only">61%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top ">

                        <div class="metric scopus-citations">

                            <span class="count">2</span>



                            <span class="label">Citations
                                (SciVal)</span>
                        </div>


                        <div class="metric metrics-downloads">
                            <span class="count tooltipped tooltipped-n"
                                aria-label="Total downloads for this work">18</span>
                            <span class="label">Downloads
                                (Pure)</span>
                        </div>

                    </div>


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1016/j.asr.2022.08.057"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-8">
                                                <title id="widget-plumprint-8">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.22664833007176,47.292520576297996 64.77069451291479,60.47096670557168 L 68.10442268644938,50.21080638846693 C 51.01899685776224,54.086973168445724 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.79817018996304,50.29382056294509 44.20493692711168,32.84681358684958 L 35.477123259544996,39.187941392843214 C 51.577876779783125,46.094617926047974 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="6.584962500721156" cx="70.02967939832052" cy="56.50803734574481">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.084962500721156" cx="70.02967939832052" cy="56.50803734574481">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1"
                                                    r="6.584962500721156" cx="37.62097734807437" cy="32.96173702878644">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.084962500721156" cx="37.62097734807437" cy="32.96173702878644">
                                                </circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">2</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">3</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1016/j.asr.2022.08.057"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1016/j.asr.2022.08.057"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="497ccb06-4666-d75f-a7dc-70e266d74e31"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=136947150"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=136947150&amp;tab=twitter'>
          Posted by <b>3</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>3</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=136947150'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 2"
                                        src="https://badges.altmetric.com/?size=128&amp;score=2&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-18">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short remoteorigin">
                    <h3 class="title remoteorigin"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/3rd-palaeontological-virtual-congress-palaeontology-in-the-virtua"
                            class="link"><span>3rd Palaeontological virtual congress: Palaeontology in the virtual
                                era</span></a></h3><span>Crespo, V. D.</span>, <span>Ríos, M.</span>, <span>Martín
                        Arnal, F. A.</span>, <span>Gamonal, A.</span>, <span>Cruzado-Caballero, P.</span>,
                    <span>González-Dionis, J.</span>, <span>Vlachos, E.</span>, <span>Guerrero-Arenas, R.</span> &amp;
                    <span>Sánchez-García, A.</span>, <span class="date">14 Sept 2023</span>, <span class="journal">In:
                        <a rel="Journal" href="#" class="link" tabindex="-1"><span>Earth and Environmental Science
                                Transactions of the Royal Society of Edinburgh.</span></a></span> <span
                        class="volume">114</span>, <span class="journalnumber">1-2</span>, <span class="pages">p.
                        1-4</span> <span class="numberofpages">4 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="dbd233d3-cf96-4289-988f-5245516081d7" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">paleontology</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="2aad5282-1253-42a0-8a37-e14d03fd2c2e"
                            data-rank-value="0.9101591280721278" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">congress</span>
                                <span class="value sr-only">91%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="bcd736ef-5f9e-4930-ab56-6f0e48cf2abf"
                            data-rank-value="0.6351938480148981" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">communication</span>
                                <span class="value sr-only">63%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1b9707ed-72bf-4232-87af-c773d11d74d7"
                            data-rank-value="0.5570617313988534" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">pandemics</span>
                                <span class="value sr-only">55%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="6b21646d-bc90-4707-ab34-c4a56f6af443" data-rank-value="0.271516784481381"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">science</span>
                                <span class="value sr-only">27%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">







                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-19">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/4-steps-to-my-future-4stmf-acceptability-feasibility-and-explorat"
                            class="link"><span>4 Steps to My Future (4STMF): Acceptability, feasibility and exploratory
                                outcomes of a universal school-based mental health and well-being programme, delivered
                                to young adolescents in South Africa</span></a></h3><span>Coetzee, B.</span>, <a
                        rel="Person" href="https://researchportal.bath.ac.uk/en/persons/maria-loades"
                        class="link person"><span>Loades, M.</span></a>, <span>Human, S.</span>, <span>Gericke,
                        H.</span>, <span>Laning, G.</span>, <span>Kidd, M.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/paul-stallard"
                        class="link person"><span>Stallard, P.</span></a>, <span class="date">13 Jul 2023</span>, (E-pub
                    ahead of print) <span class="journal">In: <a rel="Journal" href="#" class="link"
                            tabindex="-1"><span>Child and Adolescent Mental Health.</span></a></span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="a58c3fa6-7f8d-4fa2-812a-581ed210a7f7" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">South Africa</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b4664f55-f5c0-4712-b513-152da0f0ea13"
                            data-rank-value="0.7435493043714396" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Mental Health</span>
                                <span class="value sr-only">74%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="48ee3b1f-42af-40bd-ba58-723f3abf6b97"
                            data-rank-value="0.21972401093994667" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Emotional Regulation</span>
                                <span class="value sr-only">21%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="40a2ffb4-66bc-4c64-bdd4-22d9845d7a71"
                            data-rank-value="0.18626352031455967" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Self Concept</span>
                                <span class="value sr-only">18%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="d5931b27-6d03-41a1-b226-100d8eafbd9f" data-rank-value="0.182613495206262"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Focus Groups</span>
                                <span class="value sr-only">18%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1111/camh.12660"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-9">
                                                <title id="widget-plumprint-9">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.42581988528269,47.1253957977795 65.2084324740512,61.47450382141116 L 69.04842445291035,49.65622372519132 C 51.081896550618154,54.33925005727748 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="7.584962500721156" cx="71.26605286950422" cy="56.90975943843224">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="6.084962500721156" cx="71.26605286950422" cy="56.90975943843224">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">6</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1111/camh.12660"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1111/camh.12660"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="66578a35-cd19-aa52-3ffa-b7ce0af062ee"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=151448832"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #FF0000;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=151448832&amp;tab=news'>
          Picked up by <b>1</b> news outlets
      </a>
    </div>
    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #ffd140;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=151448832&amp;tab=blogs'>
          Blogged by <b>1</b>
      </a>
    </div>
    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=151448832&amp;tab=twitter'>
          Posted by <b>9</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>9</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=151448832'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 22"
                                        src="https://badges.altmetric.com/?size=128&amp;score=22&amp;types=mbbttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-20">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/8-mw-wind-turbine-tower-computational-shell-buckling-benchmark-pa"
                            class="link"><span>8-MW wind turbine tower computational shell buckling benchmark. Part 1:
                                An international ‘round-robin’ exercise</span></a></h3>Sadowski, A. J., Seidel, M.,
                    Al-Lawati, H., Azizi, E., Balscheit, H., Böhm, M., Chen, L., van Dijk, I., Doerich-Stavridis, C.,
                    Fajuyitan, O. K., Filippidis, A., Fischer, A. W., Fischer, C., Gerasimidis, S., Karampour, H.,
                    Kathirkamanathan, L., Marten, F., Mihara, Y., Mishra, S., Sakharov, V., <a
                        onclick="$(this).next('span').toggleClassName('common_hidden');$(this).addClassName('common_hidden'); return pure.stopEvent(event);"
                        href="#" class="link" style="pointer-events: auto;" tabindex="-1"><span> &amp; 9
                            others</span></a><span
                        class="common_hidden publication_authors_full_inline_list"><span>Shahini, A.</span>,
                        <span>Subramanian, S.</span>, <span>Topkaya, C.</span>, <span>Wagner, H. N. R.</span>,
                        <span>Wang, J.</span>, <a rel="Person"
                            href="https://researchportal.bath.ac.uk/en/persons/jie-wang" class="link person"><span>Wang,
                                J.</span></a>, <span>Yadav, K. K.</span>, <span>Yun, X.</span> &amp; <span>Zhang,
                            P.</span></span>, <span class="date">30 Jun 2023</span>, <span class="journal">In: <a
                            rel="Journal" href="#" class="link" tabindex="-1"><span>Engineering Failure
                                Analysis.</span></a></span> <span class="volume">148</span>, 107124.<p class="type">
                        <span class="type_family">Research output<span class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Contribution to journal<span class="type_parent_sep"> ›
                            </span></span><span class="type_classification">Article</span><span
                            class="type_classification"><span class="type_parent_sep"> › </span>peer-review</span>
                    </p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="0a64905f-dd7a-4942-b3ed-62ac5ef3dae2" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Turbine</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="408ec0ac-5a0c-429a-b271-42a813a8f434"
                            data-rank-value="0.7034644004063988" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Towers</span>
                                <span class="value sr-only">70%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="3339934f-a278-409e-99c2-730a3073f2d5"
                            data-rank-value="0.6685992472646897" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Buckling</span>
                                <span class="value sr-only">66%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="59bb0aec-bfb8-4cad-b336-412271132354"
                            data-rank-value="0.6552115586637625" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Wind turbines</span>
                                <span class="value sr-only">65%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="5de8ec8c-8e52-4d97-8fa9-0cd049616175"
                            data-rank-value="0.3889722320983734" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Defects</span>
                                <span class="value sr-only">38%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">1</span>



                            <span class="label">Citation
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1016/j.engfailanal.2023.107124"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-10">
                                                <title id="widget-plumprint-10">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.4701141297074,47.088228513619455 65.3057820791392,61.6976828705037 L 69.25836329149949,49.532888743874246 C 51.0958849656137,54.395354525432005 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.94988995594511,50.28321128340115 44.06704554940114,33.47224057556486 L 36.11455045171985,39.250066467784464 C 51.52090276926861,46.23563355045884 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="7.807354922057604" cx="71.54101295943693"
                                                    cy="56.999099387329345"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="6.307354922057604" cx="71.54101295943693"
                                                    cy="56.999099387329345"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="6"
                                                    cx="38.067959378462795" cy="33.57695501418856"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="4.5"
                                                    cx="38.067959378462795" cy="33.57695501418856"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">7</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1016/j.engfailanal.2023.107124"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut"
                                data-doi="10.1016/j.engfailanal.2023.107124" data-hide-no-mentions="true"
                                data-link-target="_blank" class="altmetric-embed"
                                data-uuid="853f045a-9b68-9518-dcae-a1383a02aa13"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=142829618"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=142829618&amp;tab=twitter'>
          Posted by <b>1</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>7</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=142829618'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 1"
                                        src="https://badges.altmetric.com/?size=128&amp;score=1&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-21">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_workingpaper rendering_portal-short rendering_workingpaper_portal-short">
                    <h3 class="title"><a rel="WorkingPaper"
                            href="https://researchportal.bath.ac.uk/en/publications/a-bad-break-up-assessing-the-effects-of-the-2016-brexit-referendu"
                            class="link"><span>A Bad Break-up? Assessing the Effects of the 2016 Brexit Referendum on
                                Migration</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/joanna-clifton-sprigg"
                        class="link person"><span>Clifton-Sprigg, J.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/jonathan-james"
                        class="link person"><span>James, J.</span></a>, <span>Vujic, S.</span> &amp; <span>Homburg,
                        I.</span>, <span class="date">Sept 2023</span>, Bonn, Germany: <a rel="Publisher" href="#"
                        class="link" tabindex="-1"><span>IZA Institute for the Study of Labor</span></a>.<p
                        class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Working paper / Preprint<span
                                class="type_parent_sep"> › </span></span><span class="type_classification">Working
                            paper</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_workingpaper rendering_publicationattacheddocumentsportalrenderer rendering_workingpaper_publicationattacheddocumentsportalrenderer">
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1c7c6bd8-fe0d-4176-89a0-885ff7cea801" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">referendum</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="f93d1875-488f-40bb-81d2-14d3ae1ed9b9" data-rank-value="0.679051008103244"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">European Union</span>
                                <span class="value sr-only">67%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b6127c9a-d0e5-4565-81c2-85a919decdf5"
                            data-rank-value="0.6584154825436344" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">migration</span>
                                <span class="value sr-only">65%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="522b78c0-e805-49b1-a6c4-31c36b6cece6"
                            data-rank-value="0.5606704097242652" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">migrant</span>
                                <span class="value sr-only">56%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="7a379377-9d71-44e7-83f3-d48144aa399c"
                            data-rank-value="0.29397173870039517" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">citizenship</span>
                                <span class="value sr-only">29%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-22">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-bamboo-inspired-exoskeleton-biexo-based-on-carbon-fiber-for-sho"
                            class="link"><span>A Bamboo-inspired Exoskeleton (BiEXO) Based on Carbon Fiber for Shoulder
                                and Elbow Joints</span></a></h3><span>Zahedi, A.</span>, <span>Wang, Y.</span>,
                    <span>Lau, N.</span>, <span>Ang, W. T.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/dingguo-zhang"
                        class="link person"><span>Zhang, D.</span></a>, <span class="date">31 May 2023</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>IEEE Transactions
                                on Medical Robotics and Bionics.</span></a></span> <span class="volume">5</span>, <span
                        class="journalnumber">2</span>, <span class="pages">p. 375-386</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                    <div class="files">File</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="ddfb7c1c-e884-4013-93fa-587eb694d916" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Carbon Fiber</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="78d3c6b7-9466-4839-a42d-47fd1f6de82c"
                            data-rank-value="0.7829946284071212" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Bamboo</span>
                                <span class="value sr-only">78%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="531dc9ad-c48e-403d-b2b3-c0f03b1aaf4a"
                            data-rank-value="0.7749471112763026" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Cable</span>
                                <span class="value sr-only">77%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="e55df732-2a7f-4666-95e1-5b5bed91688a"
                            data-rank-value="0.5786126497999174" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Carbon fibers</span>
                                <span class="value sr-only">57%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="bf4ea598-07a5-4d90-a83d-a7b01d5a1bd7"
                            data-rank-value="0.4749034022833106" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Tube</span>
                                <span class="value sr-only">47%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">


                        <div class="metric metrics-downloads">
                            <span class="count tooltipped tooltipped-n"
                                aria-label="Total downloads for this work">46</span>
                            <span class="label">Downloads
                                (Pure)</span>
                        </div>

                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1109/TMRB.2023.3269863"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-11">
                                                <title id="widget-plumprint-11">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.50848354948492,47.05603274763565 65.39011014278067,61.891009356402684 L 69.44022058537712,49.42605112348201 C 51.10800228184648,54.443954426344064 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1" r="8"
                                                    cx="71.77919422315901" cy="57.076489171186296"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="6.5"
                                                    cx="71.77919422315901" cy="57.076489171186296"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">8</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1109/TMRB.2023.3269863"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-23">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-bargaining-model-for-pls-entrepreneurial-financing-a-game-theor"
                            class="link"><span>A bargaining model for PLS entrepreneurial financing: A game theoretic
                                model using agent-based simulation</span></a></h3><span>El Fakir, A.</span>, <a
                        rel="Person" href="https://researchportal.bath.ac.uk/en/persons/richard-fairchild"
                        class="link person"><span>Fairchild, R.</span></a>, <span>Tkiouat, M.</span> &amp;
                    <span>Taamouti, A.</span>, <span class="date">30 Apr 2023</span>, <span class="journal">In: <a
                            rel="Journal" href="#" class="link" tabindex="-1"><span>International Journal of Finance and
                                Economics.</span></a></span> <span class="volume">28</span>, <span
                        class="journalnumber">2</span>, <span class="pages">p. 1228-1241</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="d98482a3-9228-40bb-b77b-19ec509e0090" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Bargaining Model</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="ef437857-ea7e-4e65-8e22-f46d1180abbc" data-rank-value="0.968462723083457"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Agent-based Simulation</span>
                                <span class="value sr-only">96%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="f2d14949-90c2-4930-b6c6-7b8c0ce3c75a"
                            data-rank-value="0.9314925391707857" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Game-theoretic Models</span>
                                <span class="value sr-only">93%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1fb16f14-51ff-49d1-bd9c-8f561c3aa941"
                            data-rank-value="0.6298006367274098" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Profit Sharing</span>
                                <span class="value sr-only">62%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="6e0e6bf6-cb59-446b-9a4b-d46d491e2c82"
                            data-rank-value="0.5846285738294167" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Financing</span>
                                <span class="value sr-only">58%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">2</span>



                            <span class="label">Citations
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1002/ijfe.2472"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-12">
                                                <title id="widget-plumprint-12">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.74149933150234,46.86050929088635 65.90223072759454,63.0650725180986 L 70.54463185336552,48.77723100034942 C 51.18159020510166,54.73909946587442 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.69052330287756,50.30134796657462 44.30277241657732,32.40306607644015 L 35.02486146928248,39.143862950696345 C 51.618300483556744,45.994565748271484 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="9.169925001442312" cx="73.22565845821684" cy="57.54647389105305">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="7.669925001442312" cx="73.22565845821684" cy="57.54647389105305">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="7"
                                                    cx="37.30383855048258" cy="32.52523292150113"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="5.5"
                                                    cx="37.30383855048258" cy="32.52523292150113"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">2</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">18</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1002/ijfe.2472"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-24">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-basic-income-for-every-crisis-building-blocks-of-a-political-ec"
                            class="link"><span>A basic income for every crisis? Building blocks of a political economy
                                framework</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/joe-chrisp-2"
                        class="link person"><span>Chrisp, J.</span></a> &amp; <span>De Wispelaere, J.</span>, <span
                        class="date">21 Jun 2023</span>, (E-pub ahead of print) <span class="journal">In: <a
                            rel="Journal" href="#" class="link" tabindex="-1"><span>Journal of
                                Sociology.</span></a></span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                    <div class="files">File</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="7dd2e14d-4a46-4371-a6e7-f10ab95c08d9" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">basic income</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="c47edcd9-e81f-40d8-a770-d7fc13b17e1f"
                            data-rank-value="0.5914521311489414" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">political economy</span>
                                <span class="value sr-only">59%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="9141c353-76c9-48fc-b483-58b646b6ed0d"
                            data-rank-value="0.17753542243827553" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">incomes policy</span>
                                <span class="value sr-only">17%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="79ffdeae-d2e4-4bd6-91cb-5456567338f7"
                            data-rank-value="0.1552636447839588" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">functionalism</span>
                                <span class="value sr-only">15%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="78c3ec82-b195-4f95-b89a-6f4319be50dd"
                            data-rank-value="0.06483597475214008" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">event</span>
                                <span class="value sr-only">6%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top ">

                        <div class="metric scopus-citations">

                            <span class="count">1</span>



                            <span class="label">Citation
                                (SciVal)</span>
                        </div>


                        <div class="metric metrics-downloads">
                            <span class="count tooltipped tooltipped-n"
                                aria-label="Total downloads for this work">45</span>
                            <span class="label">Downloads
                                (Pure)</span>
                        </div>

                    </div>


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1177/14407833231181273"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-13">
                                                <title id="widget-plumprint-13">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 52.75775999522832,47.68596460512846 63.924475253123596,57.96956599135724 L 65.94953047442182,51.73708687489691 C 50.87091882415881,53.493064614593585 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.20925660901267,50.26507460022768 43.83131868222497,34.54141507468958 L 37.20423943415722,39.35626998487258 C 51.42350505498047,46.47670135264621 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="67.11901729331277" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1177/14407833231181273"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1177/14407833231181273"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="da164cd7-45fb-1f15-b935-ba278d891890"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=150485148"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=150485148&amp;tab=twitter'>
          Posted by <b>7</b> X users
      </a>
    </div>

    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=150485148'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 4"
                                        src="https://badges.altmetric.com/?size=128&amp;score=4&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-25">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontobookanthology rendering_portal-short rendering_contributiontobookanthology_portal-short">
                    <h3 class="title"><a rel="ContributionToBookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/a-battery-less-nfc-sensor-transponder-for-cattle-health-monitorin"
                            class="link"><span>A Battery-less NFC Sensor Transponder for Cattle Health
                                Monitoring</span></a></h3><span>Gawade, D. R.</span>, <span>Roy Simorangkir, B. V.
                        B.</span>, <span>Kumar, S.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/melusine-pigeon"
                        class="link person"><span>Pigeon, M.</span></a>, <span>Belcastro, M.</span>, <span>Rather,
                        N.</span>, <span>Buckley, J. L.</span> &amp; <span>O'Flynn, B.</span>, <span class="date">17 Apr
                        2023</span>, <em>APSCON 2023 - IEEE Applied Sensing Conference, Symposium Proceedings.</em> U.
                    S. A.: <a rel="Publisher" href="#" class="link" tabindex="-1"><span>IEEE</span></a>, (APSCON 2023 -
                    IEEE Applied Sensing Conference, Symposium Proceedings).<p class="type"><span
                            class="type_family">Research output<span class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Chapter or section in a book/report/conference
                            proceeding<span class="type_parent_sep"> › </span></span><span
                            class="type_classification">Chapter in a published conference proceeding</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontobookanthology rendering_publicationattacheddocumentsportalrenderer rendering_contributiontobookanthology_publicationattacheddocumentsportalrenderer">
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1de34bb6-0449-48c7-b5e9-70b2fa556bf1" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">cattle</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="e0e04057-cf11-4d9f-ae6d-da40a4838f85"
                            data-rank-value="0.8571165770545128" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">transponders</span>
                                <span class="value sr-only">85%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="38084cba-24f7-495e-a9f3-a4eb1455ae4e"
                            data-rank-value="0.7282783334169242" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Transponders</span>
                                <span class="value sr-only">72%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="9cd95917-4b05-4855-b192-dc2045d4c730" data-rank-value="0.634675784656665"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">health</span>
                                <span class="value sr-only">63%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="fd8b9c9a-02a3-4b8f-9f21-6d8bfdad8f7b"
                            data-rank-value="0.6131187587309612" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">electric batteries</span>
                                <span class="value sr-only">61%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">1</span>



                            <span class="label">Citation
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1109/APSCON56343.2023.10101019"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-14">
                                                <title id="widget-plumprint-14">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.11014043906305,47.39028230467265 64.51463422050786,59.88393512472372 L 67.55221705245519,50.53521645003322 C 50.98220289613465,53.93940064868055 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.20925660901267,50.26507460022768 43.83131868222497,34.54141507468958 L 37.20423943415722,39.35626998487258 C 51.42350505498047,46.47670135264621 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1" r="6"
                                                    cx="69.30644728079162" cy="56.27304498581143"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="4.5"
                                                    cx="69.30644728079162" cy="56.27304498581143"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">2</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1109/APSCON56343.2023.10101019"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-26">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-bayesian-adaptive-design-for-dual-agent-phase-iii-oncology-tria"
                            class="link"><span>A Bayesian adaptive design for dual-agent phase I–II oncology trials
                                integrating efficacy data across stages</span></a></h3><span>Jiménez, J. L.</span> &amp;
                    <a rel="Person" href="https://researchportal.bath.ac.uk/en/persons/haiyan-zheng"
                        class="link person"><span>Zheng, H.</span></a>, <span class="date">Oct 2023</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>Biometrical
                                Journal.</span></a></span> <span class="volume">65</span>, <span
                        class="journalnumber">7</span>, 2200288.<p class="type"><span class="type_family">Research
                            output<span class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Contribution to journal<span class="type_parent_sep"> ›
                            </span></span><span class="type_classification">Article</span><span
                            class="type_classification"><span class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b122210c-a7d8-46b8-9dd9-8efb86c4f945" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Bayesian Design</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="a5e4e013-a329-4a40-8ddd-844b371cc290"
                            data-rank-value="0.9864395047646086" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Oncology</span>
                                <span class="value sr-only">98%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="733a5d4a-5610-4aa9-a566-dff8d6dc1181"
                            data-rank-value="0.8834147482293804" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Adaptive Design</span>
                                <span class="value sr-only">88%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="7d9e4815-486a-4b3a-b7f4-69dbdb2d9a33"
                            data-rank-value="0.7313227298204225" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Efficacy</span>
                                <span class="value sr-only">73%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="07b6c635-78aa-4c52-bced-ea849ab5588b"
                            data-rank-value="0.5588278369641844" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Exchangeability</span>
                                <span class="value sr-only">55%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">







                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-27">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-bayesian-approach-to-pilot-pivotal-trials-for-bioequivalence-as"
                            class="link"><span>A Bayesian approach to pilot-pivotal trials for bioequivalence
                                assessment</span></a></h3><span>Lv, D.</span>, <span>Grayling, M. J.</span>,
                    <span>Zhang, X.</span>, <span>Zhao, Q.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/haiyan-zheng"
                        class="link person"><span>Zheng, H.</span></a>, <span class="date">19 Dec 2023</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>BMC Medical
                                Research Methodology.</span></a></span> <span class="numberofpages">15 p.</span>, 301.<p
                        class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="c4e351bb-03f5-42f3-ba3e-ec693c26b44e" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Therapeutic Equivalency</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="5931fd58-fb11-41be-8a62-59c02fc22178"
                            data-rank-value="0.9552435558713173" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Bayes Theorem</span>
                                <span class="value sr-only">95%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="69f1d8cd-b150-4d7b-a63f-ccd21dc2fde7"
                            data-rank-value="0.3222976925987528" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Decision Making</span>
                                <span class="value sr-only">32%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="d64292c3-a811-429e-974d-ea52ced41020"
                            data-rank-value="0.23175952689913257" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Sample Size</span>
                                <span class="value sr-only">23%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="5a85b802-cc48-4998-9200-2cd226c88d37"
                            data-rank-value="0.15376637337990398" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Decision Support Techniques</span>
                                <span class="value sr-only">15%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1186/s12874-023-02120-2"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="244bea72-794b-6cf2-bc93-ca81f2c8bb76"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=157680024"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=157680024&amp;tab=twitter'>
          Posted by <b>1</b> X users
      </a>
    </div>

    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=157680024'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 1"
                                        src="https://badges.altmetric.com/?size=128&amp;score=1&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-28">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontoperiodical rendering_portal-short rendering_contributiontoperiodical_portal-short">
                    <h3 class="title"><a rel="ContributionToPeriodical"
                            href="https://researchportal.bath.ac.uk/en/publications/a-better-way-to-pilot-emerging-technologies-ikea-didnt-give-up-on"
                            class="link"><span>A Better Way to Pilot Emerging Technologies IKEA didn’t give up on drones
                                for inventory management after pilots fizzled — it came up with a better approach for
                                testing new technologies</span></a></h3><span>Netland, T.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/omid-maghazei"
                        class="link person"><span>Maghazei, O.</span></a> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/michael-lewis"
                        class="link person"><span>Lewis, M.</span></a>, <span class="date">30 Jun 2023</span>, MIT Sloan
                    Management Review, 64, 4, <span class="pages">p. 4-7</span> <span class="numberofpages">4 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to specialist
                            publication<span class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontoperiodical rendering_publicationattacheddocumentsportalrenderer rendering_contributiontoperiodical_publicationattacheddocumentsportalrenderer">
                </div>






            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-29">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-bibliometric-analysis-of-psychological-contract-research-curren"
                            class="link"><span>A bibliometric analysis of psychological contract research: Current
                                status development and future research directions</span></a></h3><span>Kozhakhmet,
                        S.</span>, <a rel="Person" href="https://researchportal.bath.ac.uk/en/persons/yasin-rofcanin"
                        class="link person"><span>Rofcanin, Y.</span></a>, <span>Nurgabdeshov, A.</span> &amp; <span>Las
                        Heras, M.</span>, <span class="date">7 Mar 2023</span>, (E-pub ahead of print) <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>International
                                Journal of Manpower.</span></a></span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                    <div class="files">File</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="48becaa4-25ca-457c-8480-ab8f3b492b42" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Bibliometric Analysis</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="704d5274-4ba9-41aa-8e17-4d53e2d926a9" data-rank-value="0.928105876060572"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Psychological Contract</span>
                                <span class="value sr-only">92%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="991c8911-6456-44b1-b8a7-f6b8761b8ee0"
                            data-rank-value="0.7391269764621273" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Research Directions</span>
                                <span class="value sr-only">73%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="c496e8a1-0341-4c8a-96de-adca6d49127d"
                            data-rank-value="0.31346292244556995" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Bibliometrics</span>
                                <span class="value sr-only">31%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="54d6c7e1-820a-47f2-a012-f83b4e809eae"
                            data-rank-value="0.2451472256852201" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Data Base</span>
                                <span class="value sr-only">24%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top ">

                        <div class="metric scopus-citations">

                            <span class="count">1</span>



                            <span class="label">Citation
                                (SciVal)</span>
                        </div>


                        <div class="metric metrics-downloads">
                            <span class="count tooltipped tooltipped-n"
                                aria-label="Total downloads for this work">89</span>
                            <span class="label">Downloads
                                (Pure)</span>
                        </div>

                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1108/IJM-01-2021-0009"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-15">
                                                <title id="widget-plumprint-15">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.771774024020665,46.83510580756022 65.9687682518056,63.217613264093124 L 70.68812304208517,48.69293271996053 C 51.1911511529925,54.77744633338154 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.20925660901267,50.26507460022768 43.83131868222497,34.54141507468958 L 37.20423943415722,39.35626998487258 C 51.42350505498047,46.47670135264621 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="9.321928094887362" cx="73.41359105049015"
                                                    cy="57.607536891846756"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="7.821928094887362" cx="73.41359105049015"
                                                    cy="57.607536891846756"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">20</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1108/IJM-01-2021-0009"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-30">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontobookanthology rendering_portal-short rendering_contributiontobookanthology_portal-short">
                    <h3 class="title"><a rel="ContributionToBookAnthology"
                            href="https://researchportal.bath.ac.uk/en/publications/a-bilevel-formalism-for-the-peer-reviewing-problem"
                            class="link"><span>A Bilevel Formalism for the Peer-Reviewing Problem</span></a></h3>
                    <span>Auricchio, G.</span>, <span>Zhang, R.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/jie-zhang" class="link person"><span>Zhang,
                            J.</span></a> &amp; <span>Cai, X.</span>, <span class="date">28 Sept 2023</span>, <em>ECAI
                        2023 - 26th European Conference on Artificial Intelligence, including 12th Conference on
                        Prestigious Applications of Intelligent Systems, PAIS 2023 - Proceedings.</em> Gal, K., Gal, K.,
                    Nowe, A., Nalepa, G. J., Fairstein, R. &amp; Radulescu, R. (eds.). <a rel="Publisher" href="#"
                        class="link" tabindex="-1"><span>IOS Press BV</span></a>, <span class="pages">p. 133-140</span>
                    <span class="numberofpages">8 p.</span> (Frontiers in Artificial Intelligence and Applications; vol.
                    372).<p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Chapter or section in a
                            book/report/conference proceeding<span class="type_parent_sep"> › </span></span><span
                            class="type_classification">Chapter in a published conference proceeding</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontobookanthology rendering_publicationattacheddocumentsportalrenderer rendering_contributiontobookanthology_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>






            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">







                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-31">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-bodipy-based-probe-for-amyloid-%CE%B2-imaging-in-vivo"
                            class="link"><span>A BODIPY-based probe for amyloid-β imaging in vivo</span></a></h3>
                    <span>Zhu, M.</span>, <span>Zhang, G.</span>, <span>Hu, Z.</span>, <span>Zhu, C.</span>, <span>Chen,
                        Y.</span>, <a rel="Person" href="https://researchportal.bath.ac.uk/en/persons/tony-james"
                        class="link person"><span>James, T. D.</span></a>, <span>Ma, L.</span> &amp; <span>Wang,
                        Z.</span>, <span class="date">10 Mar 2023</span>, <span class="journal">In: <a rel="Journal"
                            href="#" class="link" tabindex="-1"><span>Organic Chemistry Frontiers.</span></a></span>
                    <span class="volume">10</span>, <span class="journalnumber">8</span>, <span class="pages">p.
                        1903-1909</span> <span class="numberofpages">7 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="4ed96d96-b750-4a90-9066-640b47acee0b" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Amino-Acid Residue</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b104be5d-75b1-4cb6-8279-a1e99c34e685"
                            data-rank-value="0.6786773433602662" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Probe</span>
                                <span class="value sr-only">67%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="7a809c48-de21-4d0f-9b9d-16ad0747d363"
                            data-rank-value="0.44379491301716006" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Oxygen Atom</span>
                                <span class="value sr-only">44%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b93119cf-6cc8-4d93-b899-11769fec15bd"
                            data-rank-value="0.3875710440644385" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Benzene</span>
                                <span class="value sr-only">38%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="66182298-1625-4c7c-be58-5034ceb93810"
                            data-rank-value="0.3198816457957992" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Fluorescence</span>
                                <span class="value sr-only">31%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">3</span>



                            <span class="label">Citations
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1039/d2qo02032g"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-16">
                                                <title id="widget-plumprint-16">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.22664833007176,47.292520576297996 64.77069451291479,60.47096670557168 L 68.10442268644938,50.21080638846693 C 51.01899685776224,54.086973168445724 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.79817018996304,50.29382056294509 44.20493692711168,32.84681358684958 L 35.477123259544996,39.187941392843214 C 51.577876779783125,46.094617926047974 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="6.584962500721156" cx="70.02967939832052" cy="56.50803734574481">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.084962500721156" cx="70.02967939832052" cy="56.50803734574481">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1"
                                                    r="6.584962500721156" cx="37.62097734807437" cy="32.96173702878644">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.084962500721156" cx="37.62097734807437" cy="32.96173702878644">
                                                </circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">3</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">3</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1039/d2qo02032g"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-32">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-branching-process-with-deletions-and-mergers-that-matches-the-t"
                            class="link"><span>A branching process with deletions and mergers that matches the threshold
                                for hypercube percolation</span></a></h3><span>Eslava, L.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/sarah-penington"
                        class="link person"><span>Penington, S.</span></a> &amp; <span>Skerman, F.</span>, <span
                        class="date">3 Jan 2023</span>, (Acceptance date) <span class="journal">In: <a rel="Journal"
                            href="#" class="link" tabindex="-1"><span>Annales de l'Institut Henri Poincare B
                                Probabilites et Statistiques.</span></a></span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>










            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-33">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-brief-online-cognitive-dissonance-based-intervention-to-reduce-"
                            class="link"><span>A Brief Online Cognitive Dissonance-Based Intervention to Reduce
                                Consideration of Cosmetic Surgery and Improve Body Image Among Chinese Women</span></a>
                    </h3><span>Wu, Y.</span>, <span>Mulkens, S.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/melissa-atkinson"
                        class="link person"><span>Atkinson, M.</span></a> &amp; <span>Alleva, J.</span>, <span
                        class="date">7 Jul 2023</span>, (E-pub ahead of print) <span class="journal">In: <a
                            rel="Journal" href="#" class="link" tabindex="-1"><span>Psychology of Women
                                Quarterly.</span></a></span> <span class="numberofpages">13 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="aade05b9-c7fa-48ba-86ae-9f4fb8cb65ca" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Cognitive Dissonance</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="929204b8-d34b-477c-ac03-44ef3e17d19e"
                            data-rank-value="0.9711931117676125" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Body Image</span>
                                <span class="value sr-only">97%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="313c6cc5-29af-4db5-9fb4-bec741fce995"
                            data-rank-value="0.8923107305317233" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Cosmetic Surgery</span>
                                <span class="value sr-only">89%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="7720603a-6e01-45b7-be12-64888712b2a1"
                            data-rank-value="0.8173725776160309" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Beauty</span>
                                <span class="value sr-only">81%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="eb7ab32d-f218-485f-8990-9bd102f7a60d"
                            data-rank-value="0.7922263921500752" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">cognitive dissonance</span>
                                <span class="value sr-only">79%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1177/03616843231183946"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-17">
                                                <title id="widget-plumprint-17">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.22258276539442,52.01369320408618 45.90423977855504,66.13211781824477 L 54.09576022144496,66.13211781824477 C 46.77741723460558,52.01369320408618 52.75775999522832,47.68596460512846 63.924475253123596,57.96956599135724 L 65.94953047442182,51.73708687489691 C 50.87091882415881,53.493064614593585 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#f3c316" stroke="#6e1a62" stroke-width="1" r="5" cx="50"
                                                    cy="69"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5" cx="50"
                                                    cy="69"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="67.11901729331277" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-mention">
                                                <div class="ppp-title">Mentions</div>
                                                <ul>
                                                    <li class="plx-mention"><span class="ppp-label">Blog Mentions:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1177/03616843231183946"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1177/03616843231183946"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="b2d34b8f-8725-9482-6f27-943a2210b48f"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=151432294"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #ffd140;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=151432294&amp;tab=blogs'>
          Blogged by <b>1</b>
      </a>
    </div>
    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=151432294&amp;tab=twitter'>
          Posted by <b>1</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>1</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=151432294'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 8"
                                        src="https://badges.altmetric.com/?size=128&amp;score=8&amp;types=bbbbtttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-34">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/academic-coloniality-in-elt-the-case-of-an-algerian-university"
                            class="link"><span>Academic Coloniality in ELT: the case of an Algerian
                                University</span></a></h3><span>Daffri, W.</span> &amp; <span>Taibi, H.</span>, <span
                        class="date">22 Mar 2023</span>, <span class="journal">In: <a rel="Journal" href="#"
                            class="link" tabindex="-1"><span>ELT Journal.</span></a></span> <span
                        class="numberofpages">9 p.</span>, ccad010.<p class="type"><span class="type_family">Research
                            output<span class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Contribution to journal<span class="type_parent_sep"> ›
                            </span></span><span class="type_classification">Article</span><span
                            class="type_classification"><span class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="9edf4363-892c-44e2-9b46-54723996671b" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Algerian</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="fba69219-35f6-4235-b9d9-d5c338f6063f"
                            data-rank-value="0.49333261282035584" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Reproduction</span>
                                <span class="value sr-only">49%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="eb960ecb-0c1e-4022-8dff-3404f11811d6"
                            data-rank-value="0.41143094224467486" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Decolonization</span>
                                <span class="value sr-only">41%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="33cb7b14-e6bb-4c0f-8a72-a265dff0f7dc"
                            data-rank-value="0.39582331201224347" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">English Learners</span>
                                <span class="value sr-only">39%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="fd84162b-b79b-410f-84be-9b9d88af8442"
                            data-rank-value="0.3826304031096538" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Critical Discourse Analysis</span>
                                <span class="value sr-only">38%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1093/elt/ccad010"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-18">
                                                <title id="widget-plumprint-18">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.11014043906305,47.39028230467265 64.51463422050786,59.88393512472372 L 67.55221705245519,50.53521645003322 C 50.98220289613465,53.93940064868055 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1" r="6"
                                                    cx="69.30644728079162" cy="56.27304498581143"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="4.5"
                                                    cx="69.30644728079162" cy="56.27304498581143"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">2</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1093/elt/ccad010"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-35">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/academic-success-in-english-medium-instruction-programmes-in-turk"
                            class="link"><span>Academic success in English Medium Instruction programmes in Turkey:
                                Exploring the effect of gender, motivation, and English language proficiency</span></a>
                    </h3><a rel="Person" href="https://researchportal.bath.ac.uk/en/persons/samantha-curle"
                        class="link person"><span>Curle, S.</span></a>, <span>Yuksel, D.</span>, <span>Aizawa,
                        I.</span>, <span>Thompson, G.</span> &amp; <span>Rakhshanderoo, M.</span>, <span class="date">31
                        Jan 2024</span>, <span class="journal">In: <a rel="Journal" href="#" class="link"
                            tabindex="-1"><span>International Journal of Educational Research.</span></a></span> <span
                        class="volume">123</span>, 102288.<p class="type"><span class="type_family">Research output<span
                                class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Contribution to journal<span class="type_parent_sep"> ›
                            </span></span><span class="type_classification">Article</span><span
                            class="type_classification"><span class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="3b63c76c-8cb7-4a24-b56a-8072daf4d060" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">academic success</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="8e09d3c1-9490-4d9d-98c8-7364d432dbd4"
                            data-rank-value="0.9068126971794725" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">European Monetary Institute</span>
                                <span class="value sr-only">90%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="53da29cb-61eb-4f17-b6aa-835da013302e"
                            data-rank-value="0.8054678262598839" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">English language</span>
                                <span class="value sr-only">80%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="bad018ec-944e-459e-9c91-777877e0cd17"
                            data-rank-value="0.7941033165461345" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Turkey</span>
                                <span class="value sr-only">79%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="ae7c05f6-0815-408e-8c56-a7aefb4c12e6"
                            data-rank-value="0.5983232266193879" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">instruction</span>
                                <span class="value sr-only">59%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1016/j.ijer.2023.102288"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="91fe21e7-7625-78de-30c6-7851edb70cc4"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=156955791"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=156955791&amp;tab=twitter'>
          Posted by <b>6</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>3</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=156955791'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 5"
                                        src="https://badges.altmetric.com/?size=128&amp;score=5&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-36">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-case-control-study-of-tackle-based-head-impact-event-hie-risk-f"
                            class="link"><span>A case-control study of tackle based head impact event (HIE) risk factors
                                from the first three seasons of the National Rugby League Women's competition</span></a>
                    </h3><span>MacLeod, S.</span>, <span>Tucker, R.</span>, <span>Edwards, S.</span>, <span>Jones,
                        B.</span>, <span>Osteoporosis, G. P. B.</span>, <span>Spiegelhalter, E.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/stephen-west" class="link person"><span>West,
                            S.</span></a>, <span>Iverson, G.</span> &amp; <span>Gardner, A.</span>, <span class="date">2
                        Jun 2023</span>, <span class="journal">In: <a rel="Journal" href="#" class="link"
                            tabindex="-1"><span>Frontiers in Sports And Active Living.</span></a></span> <span
                        class="volume">5</span>, 1080356.<p class="type"><span class="type_family">Research output<span
                                class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Contribution to journal<span class="type_parent_sep"> ›
                            </span></span><span class="type_classification">Article</span><span
                            class="type_classification"><span class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="81732454-88a6-4866-9817-1007898285fa" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Head Impact</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="923cb80f-2b27-49c0-b6e2-64f13a9828dd"
                            data-rank-value="0.6630925245728299" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Event Risk</span>
                                <span class="value sr-only">66%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="5a96252d-8da0-4112-a045-2d89dbe78987"
                            data-rank-value="0.6392404452683007" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Risk Factors</span>
                                <span class="value sr-only">63%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="32be0609-f4c0-4624-a16d-7a79897263ea"
                            data-rank-value="0.5754388437356074" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Football</span>
                                <span class="value sr-only">57%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="a89dd94c-201b-4f5d-84df-87e912dd33b6"
                            data-rank-value="0.5034220067292812" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">risk factor</span>
                                <span class="value sr-only">50%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.3389/fspor.2023.1080356"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-19">
                                                <title id="widget-plumprint-19">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.30931199427398,47.22315752615415 64.95237218164426,60.887472240563206 L 68.49621881891616,49.98063378675762 C 51.04510258899057,54.191677537512305 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1" r="7"
                                                    cx="70.54282075197531" cy="56.67476707849887"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="5.5"
                                                    cx="70.54282075197531" cy="56.67476707849887"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">4</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.3389/fspor.2023.1080356"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.3389/fspor.2023.1080356"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="6f9f069d-3e1b-b0f8-208c-f93e6d9f2341"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=148517577"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=148517577&amp;tab=twitter'>
          Posted by <b>19</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>10</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=148517577'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 12"
                                        src="https://badges.altmetric.com/?size=128&amp;score=12&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-37">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/accelerated-testing-of-soft-soldered-small-diameter-thin-walled-c"
                            class="link"><span>Accelerated testing of soft soldered, small-diameter, thin-walled CuNi
                                pipes subjected to cyclic internal pressure loading</span></a></h3><span>McNair, S. A.
                        M.</span>, <span>Cichy, K.</span>, <span>Daguin, J.</span>, <span>Onnela, A.</span> &amp; <a
                        rel="Person" href="https://researchportal.bath.ac.uk/en/persons/alexander-lunt"
                        class="link person"><span>Lunt, A. J. G.</span></a>, <span class="date">1 Jan 2024</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>Journal of
                                Materials Research and Technology.</span></a></span> <span class="volume">28</span>,
                    <span class="pages">p. 512-521</span> <span class="numberofpages">10 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="df7aad10-5da8-4e5d-ae39-04a30098de41" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Soldered joints</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="6daea288-66e3-445e-b95a-bbab2523f34a"
                            data-rank-value="0.9237036113949605" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Internal Pressure</span>
                                <span class="value sr-only">92%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1bba8437-2917-423c-a483-70f9542cef80"
                            data-rank-value="0.49588679809585523" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Pipe</span>
                                <span class="value sr-only">49%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="51b4063c-a2ce-415e-b073-07f7f4f1f42c"
                            data-rank-value="0.3814669640854373" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Porosity</span>
                                <span class="value sr-only">38%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="3015ea21-5ddd-4a85-bc80-5a9c99c354d3"
                            data-rank-value="0.3387534331929317" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Testing</span>
                                <span class="value sr-only">33%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1016/j.jmrt.2023.12.008"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="afcbc642-1711-257d-3252-bd34a3261d0d"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=157385426"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=157385426&amp;tab=twitter'>
          Posted by <b>1</b> X users
      </a>
    </div>

    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=157385426'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 1"
                                        src="https://badges.altmetric.com/?size=128&amp;score=1&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-38">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/accelerating-innovations-in-csbndh-activationfunctionalization-th"
                            class="link"><span>Accelerating innovations in C[sbnd]H activation/functionalization through
                                intricately designed magnetic nanomaterials: From genesis to applicability in
                                liquid/regio/photo catalysis</span></a></h3><span>Dutta, S.</span>, <span>Kumar,
                        P.</span>, <span>Yadav, S.</span>, <span>Sharma, R. D.</span>, <span>Shivaprasad, P.</span>,
                    <span>Vimaleswaran, K. S.</span>, <span>Srivastava, A.</span> &amp; <span>Sharma, R. K.</span>,
                    <span class="date">28 Feb 2023</span>, <span class="journal">In: <a rel="Journal" href="#"
                            class="link" tabindex="-1"><span>Catalysis Communications.</span></a></span> <span
                        class="volume">175</span>, 106615.<p class="type"><span class="type_family">Research output<span
                                class="type_family_sep">: </span></span><span
                            class="type_classification_parent">Contribution to journal<span class="type_parent_sep"> ›
                            </span></span><span class="type_classification">Review article</span><span
                            class="type_classification"><span class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="a956a1b2-1235-4e68-aba2-9080fb305ee6" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Photocatalysis</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="83e47b7d-b496-4f0d-8706-1ae79fd8fe11"
                            data-rank-value="0.7855541392268997" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Nanostructured materials</span>
                                <span class="value sr-only">78%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="8884d658-5f52-4be8-ab53-a979a92b3f76"
                            data-rank-value="0.5671440148845128" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Chemical activation</span>
                                <span class="value sr-only">56%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b311b43c-d1ea-4bb7-b722-39a7599387aa"
                            data-rank-value="0.4580691643481648" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Magnetism</span>
                                <span class="value sr-only">45%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="298bf0be-9fbe-4641-928a-36fdf65cb059"
                            data-rank-value="0.42279408092435805" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Liquids</span>
                                <span class="value sr-only">42%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">3</span>



                            <span class="label">Citations
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1016/j.catcom.2023.106615"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-20">
                                                <title id="widget-plumprint-20">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.373430913598796,47.169355364597216 65.09329232953279,61.21053903241416 L 68.80011950916324,49.80209804651174 C 51.065351767280674,54.27289255571802 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.481122358905864,50.315990707004524 44.49308766305323,31.53986278203334 L 34.14509570579973,39.058119018435434 C 51.696935007584436,45.79993847162591 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="7.321928094887362" cx="70.94084410812276" cy="56.80409270647189">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.821928094887362" cx="70.94084410812276" cy="56.80409270647189">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1"
                                                    r="7.807354922057604" cx="36.68692183896603"
                                                    cy="31.676119913333213"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="6.307354922057604" cx="36.68692183896603"
                                                    cy="31.676119913333213"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">4</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">5</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1016/j.catcom.2023.106615"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-39">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/acceleration-of-cosmic-rays-in-presence-of-magnetohydrodynamic-fl"
                            class="link"><span>Acceleration of cosmic rays in presence of magnetohydrodynamic
                                fluctuations at small scales</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/sayan-kundu" class="link person"><span>Kundu,
                            S.</span></a>, <span>Singh, N. K.</span> &amp; <span>Vaidya, B.</span>, <span class="date">1
                        Oct 2023</span>, <span class="journal">In: <a rel="Journal" href="#" class="link"
                            tabindex="-1"><span>Monthly Notices of the Royal Astronomical Society.</span></a></span>
                    <span class="volume">524</span>, <span class="journalnumber">4</span>, <span class="pages">p.
                        4950-4972</span> <span class="numberofpages">23 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                    <div class="files">File</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="2c39ce56-83e8-47cd-8a03-5514f21d7ebf" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">magnetohydrodynamics</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="acc95b52-d020-4374-88f1-78150e2148fa"
                            data-rank-value="0.8791691845448132" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">cosmic ray</span>
                                <span class="value sr-only">87%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="f4d346de-2773-43dc-a243-7c00c42db313"
                            data-rank-value="0.6913395654573679" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">cosmic rays</span>
                                <span class="value sr-only">69%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="d700e2a8-b7de-4174-bc2f-a375f8041367"
                            data-rank-value="0.4671130605320201" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">turbulence</span>
                                <span class="value sr-only">46%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="ed2c8a9e-8b6c-4b39-938d-0af8becd6752"
                            data-rank-value="0.3808106860008689" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">particle</span>
                                <span class="value sr-only">38%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">


                        <div class="metric metrics-downloads">
                            <span class="count tooltipped tooltipped-n"
                                aria-label="Total downloads for this work">5</span>
                            <span class="label">Downloads
                                (Pure)</span>
                        </div>

                    </div>


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1093/mnras/stad2098"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-21">
                                                <title id="widget-plumprint-21">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.11014043906305,47.39028230467265 64.51463422050786,59.88393512472372 L 67.55221705245519,50.53521645003322 C 50.98220289613465,53.93940064868055 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1" r="6"
                                                    cx="69.30644728079162" cy="56.27304498581143"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="4.5"
                                                    cx="69.30644728079162" cy="56.27304498581143"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">2</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1093/mnras/stad2098"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1093/mnras/stad2098"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="36ef1e7c-48e9-43fb-4fba-0cae49cda32d"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=136794224"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=136794224&amp;tab=twitter'>
          Posted by <b>1</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>2</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=136794224'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 1"
                                        src="https://badges.altmetric.com/?size=128&amp;score=1&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-40">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/acceptability-of-integrating-smoking-cessation-treatment-into-rou"
                            class="link"><span>Acceptability of integrating smoking cessation treatment into routine
                                care for people with mental illness: a qualitative study</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/katherine-sawyer"
                        class="link person"><span>Sawyer, K.</span></a>, <span>Fredman Stein, K.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/pamela-jacobsen"
                        class="link person"><span>Jacobsen, P.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/tom-freeman"
                        class="link person"><span>Freeman, T. P.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/anna-blackwell"
                        class="link person"><span>Blackwell, A. K. M.</span></a>, <span>Metcalfe, C.</span>,
                    <span>Kessler, D.</span>, <span>Munafò, M. R.</span>, <span>Aveyard, P.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/gemma-taylor"
                        class="link person"><span>Taylor, G. M. J.</span></a>, <span class="date">28 Feb 2023</span>,
                    <span class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>Health
                                Expectations.</span></a></span> <span class="volume">26</span>, <span
                        class="journalnumber">1</span>, <span class="pages">p. 108-118</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="057b213a-0b39-4d6a-a783-39b97fd0be8c" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Withholding Treatment</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="0564f3df-3192-42f7-a468-43487b731fc5"
                            data-rank-value="0.8328766863469403" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Smoking Cessation</span>
                                <span class="value sr-only">83%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="acd23f3b-c5ba-48fe-944a-c1aecb849b88"
                            data-rank-value="0.7784523307651087" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">smoking</span>
                                <span class="value sr-only">77%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="3b66a846-3aa4-4879-96e5-2273b8272de1"
                            data-rank-value="0.7617018974781918" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">mental illness</span>
                                <span class="value sr-only">76%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1fff8a1d-31fb-471e-9cbf-d083ab3e3e84"
                            data-rank-value="0.46055624438211906" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Psychology</span>
                                <span class="value sr-only">46%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1111/hex.13580"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-22">
                                                <title id="widget-plumprint-22">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.22258276539442,52.01369320408618 45.90423977855504,66.13211781824477 L 54.09576022144496,66.13211781824477 C 46.77741723460558,52.01369320408618 53.72507521481085,46.874290761144586 65.8661339097212,62.982318679693655 L 70.46678742847811,48.82296308476815 C 51.176403360553344,54.718296168654845 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#f3c316" stroke="#6e1a62" stroke-width="1" r="5" cx="50"
                                                    cy="69"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5" cx="50"
                                                    cy="69"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="9.087462841250339" cx="73.12370443097899" cy="57.5133470194932">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="7.587462841250339" cx="73.12370443097899" cy="57.5133470194932">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">17</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-mention">
                                                <div class="ppp-title">Mentions</div>
                                                <ul>
                                                    <li class="plx-mention"><span class="ppp-label">Blog Mentions:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1111/hex.13580"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1111/hex.13580"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="9d0b175d-c265-837e-58b2-46cc14030858"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=137067490"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #ffd140;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=137067490&amp;tab=blogs'>
          Blogged by <b>1</b>
      </a>
    </div>
    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=137067490&amp;tab=twitter'>
          Posted by <b>4</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>28</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=137067490'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 10"
                                        src="https://badges.altmetric.com/?size=128&amp;score=10&amp;types=bbtttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-41">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/access-to-exercise-for-people-with-visual-impairments-during-the-"
                            class="link"><span>Access to exercise for people with visual impairments during the
                                Coronavirus-19 pandemic</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/michael-richardson"
                        class="link person"><span>Richardson, M.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/karin-petrini"
                        class="link person"><span>Petrini, K.</span></a> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/michael-proulx"
                        class="link person"><span>Proulx, M. J.</span></a>, <span class="date">31 May 2023</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>British Journal
                                of Visual Impairment.</span></a></span> <span class="volume">41</span>, <span
                        class="journalnumber">2</span>, <span class="pages">p. 448-463</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="b1efd501-07aa-4d1c-98aa-60af25660d55" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Coronavirus</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="6a493f28-e08c-43e5-a881-443dff824b8e"
                            data-rank-value="0.8707913887575073" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Vision Disorders</span>
                                <span class="value sr-only">87%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1fde0f61-75db-4d0c-bb7d-a2c4ce5e548f"
                            data-rank-value="0.8461682756491286" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Pandemics</span>
                                <span class="value sr-only">84%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="6cc0dfb0-d6b3-4a32-aec7-170307432428"
                            data-rank-value="0.5495443820018665" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Blindness</span>
                                <span class="value sr-only">54%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="c1cbafc5-46e5-4a37-b4c7-efc391e46ba1"
                            data-rank-value="0.10366633928462268" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Population</span>
                                <span class="value sr-only">10%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">5</span>



                            <span class="label">Citations
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1177/02646196211067356"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-23">
                                                <title id="widget-plumprint-23">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.57205511751055,52.232067766263214 44.60591450596791,67.28347192626859 L 55.39408549403209,67.28347192626859 C 46.42794488248944,52.232067766263214 53.79916081469292,46.81212556160799 66.02895876394096,63.3556031537349 L 70.81792661139971,48.616675649549514 C 51.19980008240297,54.81213529455658 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.538803536895486,50.31195724611856 44.44066379428786,31.777639087724868 L 34.38743427710762,39.0817378757551 C 51.67527449407126,45.85355012386061 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#f3c316" stroke="#6e1a62" stroke-width="1"
                                                    r="6.584962500721156" cx="50" cy="71.0604512509375"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.084962500721156" cx="50" cy="71.0604512509375"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="9.459431618637296" cx="73.58359675944885"
                                                    cy="57.662775095159475"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="7.959431618637296" cx="73.58359675944885"
                                                    cy="57.662775095159475"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1"
                                                    r="7.584962500721156" cx="36.856856520094155"
                                                    cy="31.910014936099007"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="6.084962500721156" cx="36.856856520094155"
                                                    cy="31.910014936099007"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Policy Citations:
                                                        </span><span class="ppp-count">1</span></li>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">5</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">22</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-mention">
                                                <div class="ppp-title">Mentions</div>
                                                <ul>
                                                    <li class="plx-mention"><span class="ppp-label">Blog Mentions:
                                                        </span><span class="ppp-count">1</span></li>
                                                    <li class="plx-mention"><span class="ppp-label">News Mentions:
                                                        </span><span class="ppp-count">2</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1177/02646196211067356"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1177/02646196211067356"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="94074b38-78f2-7e1a-97e2-0a9499a6b249"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=120559552"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #FF0000;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=120559552&amp;tab=news'>
          Picked up by <b>4</b> news outlets
      </a>
    </div>
    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #ffd140;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=120559552&amp;tab=blogs'>
          Blogged by <b>1</b>
      </a>
    </div>
    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=120559552&amp;tab=twitter'>
          Posted by <b>5</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>25</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=120559552'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 44"
                                        src="https://badges.altmetric.com/?size=128&amp;score=44&amp;types=mmmbtttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-42">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/access-to-finance-for-cleantech-innovation-and-investment-evidenc"
                            class="link"><span>Access to Finance for Cleantech Innovation and Investment: Evidence from
                                U.K. Small- and Medium-Sized Enterprises</span></a></h3><span>Cowling, M.</span> &amp;
                    <a rel="Person" href="https://researchportal.bath.ac.uk/en/persons/weixi-liu"
                        class="link person"><span>Liu, W.</span></a>, <span class="date">31 Mar 2023</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>IEEE Transactions
                                on Engineering Management.</span></a></span> <span class="volume">70</span>, <span
                        class="journalnumber">3</span>, <span class="pages">p. 963 - 978</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                    <div class="files">File</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="57ab0e84-8b70-40c8-bd50-9ffb68a4ca13" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Small and Medium-sized Enterprises (SMEs)</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="88eefb5f-51ef-483c-aeb2-89353c013633"
                            data-rank-value="0.8435676069624801" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Environmental technology</span>
                                <span class="value sr-only">84%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="ed6a7bf3-caf2-41b3-9386-4d4aba7bb471"
                            data-rank-value="0.8349926073395325" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Clean Technology</span>
                                <span class="value sr-only">83%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="139ac2bb-1dbb-46c4-86e2-e075ac85e466"
                            data-rank-value="0.7909762836446327" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Access to Finance</span>
                                <span class="value sr-only">79%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="5b30a020-641a-4f2f-88de-98f3e42f20bf"
                            data-rank-value="0.7480874683823282" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Finance</span>
                                <span class="value sr-only">74%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top ">

                        <div class="metric scopus-citations">

                            <span class="count">3</span>



                            <span class="label">Citations
                                (SciVal)</span>
                        </div>


                        <div class="metric metrics-downloads">
                            <span class="count tooltipped tooltipped-n"
                                aria-label="Total downloads for this work">1</span>
                            <span class="label">Downloads
                                (Pure)</span>
                        </div>

                    </div>


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1109/TEM.2021.3066685"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-24">
                                                <title id="widget-plumprint-24">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.85800722251105,46.7627475625117 66.15829102000149,63.652104098946566 L 71.09683748735972,48.45282093878312 C 51.218384166729244,54.8866719856396 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.431156649810006,50.31948464974809 44.538499283753495,31.333891577315434 L 33.935172486845104,39.03765943360823 C 51.71569819784488,45.75349794608412 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="9.75488750216347" cx="73.94889057574576" cy="57.781466250986426">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="8.25488750216347" cx="73.94889057574576" cy="57.781466250986426">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="8"
                                                    cx="36.53971772250237" cy="31.4735108288137"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="6.5"
                                                    cx="36.53971772250237" cy="31.4735108288137"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">5</span></li>
                                                    <li class="plx-citation"><span class="ppp-label">Policy Citations:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">27</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1109/TEM.2021.3066685"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-43">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/accounting-for-resilience-the-role-of-the-accounting-professions-"
                            class="link"><span>Accounting for resilience: the role of the accounting professions in
                                promoting resilience</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/layla-branicki"
                        class="link person"><span>Branicki, L.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/steve-brammer"
                        class="link person"><span>Brammer, S.</span></a>, <span>Linnenluecke, M.</span> &amp;
                    <span>Houghton, D.</span>, <span class="date">31 Dec 2023</span>, <span class="journal">In: <a
                            rel="Journal" href="#" class="link" tabindex="-1"><span>Accounting and Business Research
                                .</span></a></span> <span class="volume">53</span>, <span
                        class="journalnumber">5</span>, <span class="pages">p. 508-536</span> <span
                        class="numberofpages">29 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="5f116a27-0fee-4a8b-b8cc-1b474ccff3bb" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Accounting Profession</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="52cba7c6-602a-46e6-b031-3355c60f4ecb" data-rank-value="0.818132674080271"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Resilience</span>
                                <span class="value sr-only">81%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="c4e0a705-bbc9-4f9b-a541-1961e2326aae"
                            data-rank-value="0.19508492059939667" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Crisis Response</span>
                                <span class="value sr-only">19%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="f1709c23-c011-4551-98b5-a768c757812f"
                            data-rank-value="0.18049080575654533" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Extreme Events</span>
                                <span class="value sr-only">18%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="270e0c38-028c-40b0-be0b-7f56a86dd2f4"
                            data-rank-value="0.17925153201052646" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Business and Society</span>
                                <span class="value sr-only">17%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1080/00014788.2023.2219148"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-25">
                                                <title id="widget-plumprint-25">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.373430913598796,47.169355364597216 65.09329232953279,61.21053903241416 L 68.80011950916324,49.80209804651174 C 51.065351767280674,54.27289255571802 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="7.321928094887362" cx="70.94084410812276" cy="56.80409270647189">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.821928094887362" cx="70.94084410812276" cy="56.80409270647189">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">5</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1080/00014788.2023.2219148"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut"
                                data-doi="10.1080/00014788.2023.2219148" data-hide-no-mentions="true"
                                data-link-target="_blank" class="altmetric-embed"
                                data-uuid="42e81f67-4f63-e245-20b2-846b80511402"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=153151631"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=153151631&amp;tab=twitter'>
          Posted by <b>2</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>12</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=153151631'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 2"
                                        src="https://badges.altmetric.com/?size=128&amp;score=2&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-44">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/accounting-infrastructures-and-the-negotiation-of-social-and-econ"
                            class="link"><span>Accounting Infrastructures and the Negotiation of Social and Economic
                                Returns under Financialization: The Case of Impact Investing</span></a></h3><a
                        rel="Person" href="https://researchportal.bath.ac.uk/en/persons/andrei-guter-sandu"
                        class="link person"><span>Guter-Sandu, A.</span></a>, <span class="date">31 Jan 2023</span>,
                    <span class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>Competition and
                                Change.</span></a></span> <span class="volume">27</span>, <span
                        class="journalnumber">1</span>, <span class="pages">p. 205-223</span> <span
                        class="numberofpages">19 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="ef333b64-0e18-469e-8ab9-be35e0edd6b3" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Impact Investing</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="6c8b510c-3b6f-44f4-a4cf-115660683842"
                            data-rank-value="0.8523195273077144" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Social Returns</span>
                                <span class="value sr-only">85%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="2f506706-a33a-42e5-89e4-acd955ac54b1"
                            data-rank-value="0.7600376819938955" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Economic Returns</span>
                                <span class="value sr-only">76%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="19654a00-cd05-4873-acd5-850a29fddb0f"
                            data-rank-value="0.7469887482881655" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Financialization</span>
                                <span class="value sr-only">74%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="6413d120-7d48-4b60-9ffc-f47ff35fe5f7"
                            data-rank-value="0.43737825325476926" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Social Values</span>
                                <span class="value sr-only">43%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">

                        <div class="metric scopus-citations">

                            <span class="count">4</span>



                            <span class="label">Citations
                                (SciVal)</span>
                        </div>


                    </div>


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1177/10245294221085636"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-26">
                                                <title id="widget-plumprint-26">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.669285684918336,46.92110373510095 65.74352004027561,62.701219986343176 L 70.20236505796046,48.978306080598635 C 51.158784658469614,54.64763141426376 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 45.60702589037821,50.30718667443623 44.378659517841115,32.05886876683478 L 34.67405997114667,39.109673054769836 C 51.649655544163906,45.91695924997462 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="8.807354922057604" cx="72.77738643062062" cy="57.40082148001677">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="7.307354922057604" cx="72.77738643062062" cy="57.40082148001677">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1"
                                                    r="7.321928094887362" cx="37.05784658806716" cy="32.18665403185132">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.821928094887362" cx="37.05784658806716" cy="32.18665403185132">
                                                </circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">4</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">14</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1177/10245294221085636"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1177/10245294221085636"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="898bf448-1918-71fd-2d98-5f1c86f079d6"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=127686398"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=127686398&amp;tab=twitter'>
          Posted by <b>1</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>19</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=127686398'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 1"
                                        src="https://badges.altmetric.com/?size=128&amp;score=1&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-45">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/accurate-and-efficient-spin-phonon-coupling-and-spin-dynamics-cal"
                            class="link"><span>Accurate and Efficient Spin-Phonon Coupling and Spin Dynamics
                                Calculations for Molecular Solids</span></a></h3><span>Nabi, R.</span>, <span>Staab, J.
                        K.</span>, <span>Mattioni, A.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/jon-kragskow"
                        class="link person"><span>Kragskow, J. G. C.</span></a>, <span>Reta, D.</span>, <span>Skelton,
                        J. M.</span> &amp; <span>Chilton, N. F.</span>, <span class="date">15 Nov 2023</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>Journal of the
                                American Chemical Society.</span></a></span> <span class="volume">145</span>, <span
                        class="journalnumber">45</span>, <span class="pages">p. 24558-24567</span> <span
                        class="numberofpages">10 p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="916b2077-8fdd-4d21-bea4-5d0838e48949" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Phonons</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="ff3d51e6-8415-49a2-9cf3-d00921f117d3"
                            data-rank-value="0.9540302150529134" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Spin dynamics</span>
                                <span class="value sr-only">95%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="e3cc3fd0-be99-409e-892a-657863d94381"
                            data-rank-value="0.5658703395423267" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Molecular Dynamics Simulation</span>
                                <span class="value sr-only">56%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="75ae6dcd-fd27-458f-a094-22a3c8129c88"
                            data-rank-value="0.42877875999156706" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Magnetic Relaxation</span>
                                <span class="value sr-only">42%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="09a51f86-90ac-4933-93cb-63e1badf0940"
                            data-rank-value="0.4210203898536769" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Electron Spin</span>
                                <span class="value sr-only">42%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom ">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1021/jacs.3c06015"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-27">
                                                <title id="widget-plumprint-27">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.05297314616313,51.90770935123954 46.72339182284403,65.70569425459581 L 53.27660817715597,65.70569425459581 C 46.94702685383687,51.90770935123954 53.59998925948199,46.9792503401265 65.59122080280456,62.35206603789542 L 69.87392484493876,49.17125831282512 C 51.136900389547066,54.55985840572482 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.40876941906463,50.25112330547885 43.419256239361054,35.3678844755018 L 38.11759284090686,39.2197684036482 C 51.348583736297286,46.662138123559565 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4" cx="50"
                                                    cy="68"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="8.459431618637298" cx="72.34722328826516"
                                                    cy="57.261053002472046"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="6.959431618637298" cx="72.34722328826516"
                                                    cy="57.261053002472046"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="39.41986545873549" cy="35.43769410125094"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">11</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank" href="https://plu.mx/plum/a/?doi=10.1021/jacs.3c06015"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1021/jacs.3c06015"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="86d4e2de-d1c7-43fb-68dc-91f8c19859d9"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=156024032"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=156024032&amp;tab=twitter'>
          Posted by <b>17</b> X users
      </a>
    </div>
    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #2445bd;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=156024032&amp;tab=facebook'>
          On <b>1</b> Facebook pages
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>12</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=156024032'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 9"
                                        src="https://badges.altmetric.com/?size=128&amp;score=9&amp;types=ttttttff"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-46">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontoconference rendering_portal-short rendering_contributiontoconference_portal-short">
                    <h3 class="title"><a rel="ContributionToConference"
                            href="https://researchportal.bath.ac.uk/en/publications/accurate-estimation-of-diffusion-coefficients-and-their-uncertain"
                            class="link"><span>Accurate Estimation of Diffusion Coefficients and their Uncertainties
                                from Computer Simulation</span></a></h3><span>Mccluskey, A.</span>, <span>Coles,
                        S.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/benjamin-morgan"
                        class="link person"><span>Morgan, B.</span></a>, <span class="date">30 Sept 2023</span>.<p
                        class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to conference<span
                                class="type_parent_sep"> › </span></span><span class="type_classification">Poster</span>
                    </p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontoconference rendering_publicationattacheddocumentsportalrenderer rendering_contributiontoconference_publicationattacheddocumentsportalrenderer">
                    <div class="files">File</div>
                </div>






            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">

                    <div class="metrics-wrap metrics-top one">


                        <div class="metric metrics-downloads">
                            <span class="count tooltipped tooltipped-n"
                                aria-label="Total downloads for this work">5</span>
                            <span class="label">Downloads
                                (Pure)</span>
                        </div>

                    </div>


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-47">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-cell-based-nasal-model-for-screening-the-biocompatibility-depos"
                            class="link"><span>A Cell-Based Nasal Model for Screening the Biocompatibility, Deposition
                                and Transport of Aerosolized Poly(Lactic-co-Glycolic acid) Nanoparticles delivered via a
                                Pressurised Metered-Dose Inhaler</span></a></h3><span>Maaz, A.</span>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/ian-blagbrough"
                        class="link person"><span>Blagbrough, I.</span></a> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/paul-de-bank" class="link person"><span>De
                            Bank, P.</span></a>, <span class="date">2023</span>, (In preparation) <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>Molecular
                                Pharmaceutics.</span></a></span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>










            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-48">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/a-chemists-guide-to-photoelectrode-development-for-water-splittin"
                            class="link"><span>A chemist's guide to photoelectrode development for water splitting – the
                                importance of molecular precursor design</span></a></h3><a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/thom-harris-lee"
                        class="link person"><span>Harris-Lee, T. R.</span></a>, <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/frank-marken"
                        class="link person"><span>Marken, F.</span></a>, <span>Bentley, C. L.</span>, <span>Zhang,
                        J.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/andrew-johnson"
                        class="link person"><span>Johnson, A. L.</span></a>, <span class="date">21 Sept 2023</span>,
                    (E-pub ahead of print) <span class="journal">In: <a rel="Journal" href="#" class="link"
                            tabindex="-1"><span>EES Catalysis.</span></a></span> <span class="numberofpages">42
                        p.</span>
                    <p class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="cd534dcf-16fb-49a7-b835-67fb954b6b44" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Photoelectrode</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="6e8c0481-8aea-4ebe-bc82-e6dd54449b91"
                            data-rank-value="0.4844913350580481" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Microelectronics</span>
                                <span class="value sr-only">48%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="875e8426-94d3-4a0c-ab7b-b8482e154f40"
                            data-rank-value="0.46878210744181376" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Deposition Technique</span>
                                <span class="value sr-only">46%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="4b325f75-9834-49d2-9a52-6520f7a7b5b3"
                            data-rank-value="0.38726104901505837" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Chemical Vapour Deposition</span>
                                <span class="value sr-only">38%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="8f436381-6b7a-47b0-8f9f-58415d8ad815" data-rank-value="0.375957528981519"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Multicomponent Reaction</span>
                                <span class="value sr-only">37%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">





                        <div class="metric metric-altmetric">

                            <div data-badge-popover="top" data-badge-type="donut" data-doi="10.1039/D3EY00176H"
                                data-hide-no-mentions="true" data-link-target="_blank" class="altmetric-embed"
                                data-uuid="867d11c6-2b31-872f-21a0-48a85133fe69"><a target="_blank"
                                    href="https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=154747899"
                                    rel="popover" data-content="<div>    <div style='padding-left: 10px; line-height:18px; border-left: 16px solid #74CFED;'>
      <a class='link-to-altmetric-details-tab' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=154747899&amp;tab=twitter'>
          Posted by <b>8</b> X users
      </a>
    </div>

    <div class='altmetric-embed readers' style='margin-top: 10px;'>
          <div class='altmetric-embed tip_mendeley'
               style='padding-left: 10px; line-height:18px; border-left: 16px solid #A60000;'>
              <b>5</b> readers on Mendeley
          </div>
    </div>
    <div style='margin-top: 10px; text-align: center;'>
        <a class='altmetric_details' target='_blank' href='https://www.altmetric.com/details.php?domain=researchportal.bath.ac.uk&amp;citation_id=154747899'>
            See more details
        </a>
    </div>
</div>" style="display:inline-block;" data-badge-popover="top">
                                    <img alt="Article has an altmetric score of 6"
                                        src="https://badges.altmetric.com/?size=128&amp;score=6&amp;types=tttttttt"
                                        width="64" height="64" style="border:0; margin:0; max-width: none;">
                                </a></div>

                        </div>

                    </div>

                </div>

            </div>


        </li>



        <li class="list-result-item list-result-item-49">




            <div class="result-container">



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_portal-short rendering_contributiontojournal rendering_portal-short rendering_contributiontojournal_portal-short">
                    <h3 class="title"><a rel="ContributionToJournal"
                            href="https://researchportal.bath.ac.uk/en/publications/achieving-a-tobacco-free-bangladesh-by-2040-a-qualitative-analysi"
                            class="link"><span>Achieving a tobacco-free Bangladesh by 2040: a qualitative analysis of
                                the tobacco advertising environment and prohibitions in Bangladesh</span></a></h3><a
                        rel="Person" href="https://researchportal.bath.ac.uk/en/persons/arsenis-tselengidis"
                        class="link person"><span>Tselengidis, A.</span></a>, <span>Adams, S.</span>, <span>Freeman,
                        B.</span>, <span>Alam, S. M.</span>, <span>Astuti, P. A. S.</span> &amp; <a rel="Person"
                        href="https://researchportal.bath.ac.uk/en/persons/jo-cranwell"
                        class="link person"><span>Cranwell, J.</span></a>, <span class="date">23 May 2023</span>, <span
                        class="journal">In: <a rel="Journal" href="#" class="link" tabindex="-1"><span>BMJ
                                Open.</span></a></span> <span class="volume">13</span>, <span
                        class="journalnumber">5</span>, <span class="numberofpages">11 p.</span>, e069620.<p
                        class="type"><span class="type_family">Research output<span class="type_family_sep">:
                            </span></span><span class="type_classification_parent">Contribution to journal<span
                                class="type_parent_sep"> › </span></span><span
                            class="type_classification">Article</span><span class="type_classification"><span
                                class="type_parent_sep"> › </span>peer-review</span></p>
                </div>



                <div
                    class="rendering rendering_researchoutput  rendering_researchoutput_publicationattacheddocumentsportalrenderer rendering_contributiontojournal rendering_publicationattacheddocumentsportalrenderer rendering_contributiontojournal_publicationattacheddocumentsportalrenderer">
                    <div class="open-access">Open Access</div>
                </div>




                <ul class="content-concept-list concept-badge-container" role="menubar">

                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="0"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="31644380-330f-4b60-b344-6dba76f79757" data-rank-value="1.0"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Bangladesh</span>
                                <span class="value sr-only">100%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="8145b63d-8d6d-4253-8013-1edf03d1f1e6"
                            data-rank-value="0.7970611986831933" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Tobacco</span>
                                <span class="value sr-only">79%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="0b888104-ce05-4ca4-90cc-85a616e2b094" data-rank-value="0.385325707266856"
                            data-summary-url="/en/concepts/summary/" data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Policy Making</span>
                                <span class="value sr-only">38%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="1cae831b-3d35-42d5-a771-a49ca26f6c4e"
                            data-rank-value="0.2944612248247855" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Tobacco Industry</span>
                                <span class="value sr-only">29%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                    <li class="concept-badge-small-container dropdown-overflow" role="none">
                        <button tabindex="-1"
                            class="concept-badge-small tooltipped tooltipped-multiline tooltipped-e dropdown-toggle"
                            role="menuitem" aria-expanded="false" aria-haspopup="true"
                            data-concept-uuid="8e7d47fd-831c-4fcd-b799-eb53759aad4b"
                            data-rank-value="0.21236620798980274" data-summary-url="/en/concepts/summary/"
                            data-loaded="true">
                            <span class="concept-wrapper">
                                <span class="rank"><canvas width="16" height="16"></canvas></span>
                                <span class="concept">Income</span>
                                <span class="value sr-only">21%</span>
                            </span>
                        </button>

                        <div class="dropdown-container"></div>
                    </li>


                </ul>



            </div>
















            <div class="publication-metrics" aria-label="Publication metrics section">

                <div class="metrics-container">


                    <div class="metrics-wrap metrics-bottom one">

                        <div class="metric metric-plum-x">
                            <div class="PlumX-Popup">
                                <div class="ppp-container ppp-large"><a target="_blank" class="plx-wrapping-print-link"
                                        href="https://plu.mx/plum/a/?doi=10.1136/bmjopen-2022-069620"
                                        title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                        rel="noopener">
                                        <div class="plx-print"><svg viewBox="0 0 100 100" width="100%" height="100%"
                                                aria-labelledby="widget-plumprint-28">
                                                <title id="widget-plumprint-28">Plum Print visual indicator of research
                                                    metrics</title>
                                                <path fill="#6e1a62" stroke="#6e1a62" stroke-width="1"
                                                    d="M 36.075524746876404,57.96956599135724 C 47.24224000477168,47.68596460512846 53.44307527039509,52.151472212786814 45.08508773426605,66.85854138189372 L 54.91491226573395,66.85854138189372 C 46.55692472960491,52.151472212786814 53.373430913598796,47.169355364597216 65.09329232953279,61.21053903241416 L 68.80011950916324,49.80209804651174 C 51.065351767280674,54.27289255571802 48.651416263702714,46.662138123559565 61.88240715909315,39.21976840364822 L 56.58074376063895,35.36788447550181 C 53.59123058093537,50.25112330547885 46.20925660901267,50.26507460022768 43.83131868222497,34.54141507468958 L 37.20423943415722,39.35626998487258 C 51.42350505498047,46.47670135264621 49.12908117584119,53.493064614593585 34.05046952557818,51.73708687489691 Z">
                                                </path>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="32.880982706687234" cy="55.56230589874905"></circle>
                                                <circle fill="#f3c316" stroke="#6e1a62" stroke-width="1" r="6" cx="50"
                                                    cy="70.3"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="4.5" cx="50"
                                                    cy="70.3"></circle>
                                                <circle fill="#c43bf3" stroke="#6e1a62" stroke-width="1"
                                                    r="7.321928094887362" cx="70.94084410812276" cy="56.80409270647189">
                                                </circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5"
                                                    r="5.821928094887362" cx="70.94084410812276" cy="56.80409270647189">
                                                </circle>
                                                <circle fill="#6e1a62" stroke="#6e1a62" stroke-width="1" r="4"
                                                    cx="60.58013454126452" cy="35.43769410125095"></circle>
                                                <circle fill="#fd5704" stroke="#6e1a62" stroke-width="1" r="5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                                <circle fill="none" stroke="#ffffff" stroke-width="1.5" r="3.5"
                                                    cx="38.83208020644301" cy="34.628677106876"></circle>
                                            </svg></div>
                                    </a>
                                    <div class="ppp-pop ppp-pop-left">
                                        <div class="ppp-branding"><img alt="plumX logo" class="plx-logo"
                                                src="//cdn.plu.mx/aa49358c1c9f6a8c537942b2f77a5c36/plumx-inverse-logo.png">
                                        </div>
                                        <ul>
                                            <li class="plx-citation">
                                                <div class="ppp-title">Citations</div>
                                                <ul>
                                                    <li class="plx-citation"><span class="ppp-label">Citation Indexes:
                                                        </span><span class="ppp-count">1</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-capture">
                                                <div class="ppp-title">Captures</div>
                                                <ul>
                                                    <li class="plx-capture"><span class="ppp-label">Readers:
                                                        </span><span class="ppp-count">5</span></li>
                                                </ul>
                                            </li>
                                            <li class="plx-mention">
                                                <div class="ppp-title">Mentions</div>
                                                <ul>
                                                    <li class="plx-mention"><span class="ppp-label">News Mentions:
                                                        </span><span class="ppp-count">2</span></li>
                                                </ul>
                                            </li>
                                        </ul><a target="_blank"
                                            href="https://plu.mx/plum/a/?doi=10.1136/bmjopen-2022-069620"
                                            title="PlumX Metrics Detail Page" aria-label="PlumX Metrics Detail Page"
                                            rel="noopener">see details</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                </div>

            </div>


        </li>


    </ul>
    <nav class="pages" aria-label="Pagination">
        <ul>
            <li><span class="currentStep" aria-label="Current page, page1">1</span></li>
            <li><a href="/en/publications/?page=1" class="step" aria-label="Goto page2">2</a></li>
            <li><a href="/en/publications/?page=2" class="step" aria-label="Goto page3">3</a></li>
            <li><a href="/en/publications/?page=3" class="step" aria-label="Goto page4">4</a></li>
            <li><a href="/en/publications/?page=4" class="step" aria-label="Goto page5">5</a></li>
            <li><a href="/en/publications/?page=5" class="step" aria-label="Goto page6">6</a></li>
            <li><a href="/en/publications/?page=6" class="step" aria-label="Goto page7">7</a></li>
            <li><a href="/en/publications/?page=7" class="step" aria-label="Goto page8">8</a></li>
            <li><a href="/en/publications/?page=8" class="step" aria-label="Goto page9">9</a></li>
            <li><a href="/en/publications/?page=9" class="step" aria-label="Goto page10">10</a></li>
            <li><span class="step gap">..</span></li>
            <li><a href="/en/publications/?page=1614" class="step" aria-label="Goto page10">1615</a></li>
            <li class="next"><a href="/en/publications/?page=1" class="nextLink" aria-label="Next page, page2">Next
                    ›</a></li>
        </ul>
    </nav>


</div>


<script>
    function plumXError(e) {
        $(e).attr("data-failed", "true");
        checkIfPlumOrAltMetricFailed(e, false);
    }
    $('div.altmetric-embed').on('altmetric:hide', function () {
        $(this).attr("data-failed", "true");
        checkIfPlumOrAltMetricFailed(this, true)
    });



    function checkIfPlumOrAltMetricFailed(e, hasAltmetricFailed) {
        $(e).closest(".metric").closest(".metrics-bottom").addClass("one");
        $(e).closest(".metric").remove();

        if (hasAltmetricFailed) {
            // If AltMetric failed, and found that PlumX also failed
            if ($(e).closest(".metric").prev().find("a").attr("data-failed")) {
                $(e).closest(".publication-metrics").find(".metrics-bottom").remove();
            }
        } else {
            // If PlumX failed, and found that AltMetric also failed
            if ($(e).closest(".metric").next().find("div.altmetric-embed").length === 1) {
                $(e).closest(".publication-metrics").find(".metrics-bottom").remove();
            }
        }
    }
</script>

<script>
    $(function () {
        $('.metrics-downloads').each(function (index) {
            if ($(this).closest('.list-result-item').find('.files').length === 0) {
                $(this).closest('.metrics-top').addClass('one');
                $(this).remove();
            }
        });
    });
</script>