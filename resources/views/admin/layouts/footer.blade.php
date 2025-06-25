<!-- Country-selector modal-->
<div class="modal fade" id="country-selector">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <ul class="row p-3">
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                            <span class="country-selector"><img alt="" src="../assets/backend/assets/images/flags/us_flag.jpg"
                                    class="me-3 language"></span>USA
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/backend/assets/images/flags/italy_flag.jpg" class="me-3 language"></span>Italy
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/backend/assets/images/flags/spain_flag.jpg" class="me-3 language"></span>Spain
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/backend/assets/images/flags/india_flag.jpg" class="me-3 language"></span>India
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/backend/assets/images/flags/french_flag.jpg" class="me-3 language"></span>French
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/backend/assets/images/flags/russia_flag.jpg" class="me-3 language"></span>Russia
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/backend/assets/images/flags/germany_flag.jpg" class="me-3 language"></span>Germany
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/backend/assets/images/flags/argentina.jpg" class="me-3 language"></span>Argentina
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt="" src="../assets/backend/assets/images/flags/malaysia.jpg"
                                    class="me-3 language"></span>Malaysia
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt="" src="../assets/backend/assets/images/flags/turkey.jpg"
                                    class="me-3 language"></span>Turkey
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Country-selector modal-->






<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © <span id="year"></span> <a href="javascript:void(0)"> {{ env('APP_NAME') }} </a>.
                Designed
                with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Muba Khan
                </a> All rights reserved.
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER CLOSED -->
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>



<script src="{{ asset('../assets/backend/assets/js/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('../assets/backend/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>


<!-- SPARKLINE JS-->
<script src="{{ asset('../assets/backend/assets/js/jquery.sparkline.min.js') }}"></script>

<!-- Sticky js -->
<script src="{{ asset('../assets/backend/assets/js/sticky.js') }}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('../assets/backend/assets/js/circle-progress.min.js') }}"></script>

<!-- PIETY CHART JS-->
<script src="{{ asset('../assets/backend/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/peitychart/peitychart.init.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('../assets/backend/assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('../assets/backend/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="{{ asset('../assets/backend/assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/chart/rounded-barchart.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/chart/utils.js') }}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('../assets/backend/assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/js/select2.js') }}"></script>

<!-- INTERNAL Data tables js-->
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="{{ asset('../assets/backend/assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/apexchart/irregular-data-series.js') }}"></script>

<!-- INTERNAL Flot JS -->
<script src="{{ asset('../assets/backend/assets/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/flot/dashboard.sampledata.js') }}"></script>

<!-- INTERNAL Vector js -->
<script src="{{ asset('../assets/backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('../assets/backend/assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- TypeHead js -->
<script src="{{ asset('../assets/backend/assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/js/typehead.js') }}"></script>

<!-- INTERNAL INDEX JS -->
<script src="{{ asset('../assets/backend/assets/js/index1.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('../assets/backend/assets/js/themeColors.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('../assets/backend/assets/js/custom.js') }}"></script>

<!-- FORMVALIDATION JS -->
<script src="{{ asset('../assets/backend/assets/js/form-validation.js') }}"></script>

<!-- INTERNAL Notifications js -->
<script src="{{ asset('../assets/backend/assets/plugins/notify/js/jquery.growl.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/notify/js/sample.js') }}"></script>

{{-- Chat JS --}}
<script src="{{ asset('../assets/backend/assets/js/chat.js') }}"></script>

<!-- Internal Dtree Treeview js -->
<script src="{{ asset('../assets/backend/assets/plugins/dtree/dtree.js') }}"></script>


<!-- FULL CALENDAR JS -->
<script src='{{ asset('../assets/backend/assets/plugins/fullcalendar/moment.min.js') }}'></script>
<script src='{{ asset('../assets/backend/assets/plugins/fullcalendar/fullcalendar.min.js') }}'></script>
<script src='{{ asset('../assets/backend/assets/js/fullcalendar.js') }}'></script>

<!-- FORMELEMENTS JS -->
<script src="{{ asset('../assets/backend/assets/js/formelementadvnced.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/js/form-elements.js') }}"></script>




<!-- INTERNAL File-Uploads Js-->
<script src="{{ asset('../assets/backend/assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

<!-- INTERNAL Accordion-Wizard-Form js-->
<script src="{{ asset('../assets/backend/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/js/form-wizard.js') }}"></script>


<script src="{{ asset('../assets/backend/assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

<!-- FILE UPLOADES JS -->
<script src="{{ asset('../assets/backend/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/fileuploads/js/file-upload.js') }}"></script>

<script src="{{ asset('../assets/backend/assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/tabs/tab-content.js') }}"></script>

<!-- FORM WIZARD JS-->
<script src="{{ asset('../assets/backend/assets/plugins/formwizard/jquery.smartWizard.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/formwizard/fromwizard.js') }}"></script>

<!-- INTERNAl Jquery.steps js -->
<script src="{{ asset('../assets/backend/assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/parsleyjs/parsley.min.js') }}"></script>


<!-- Tooltip and Popover JS -->
<script src="{{ asset('../assets/backend/assets/js/tooltip&popover.js') }}"></script>

<!-- TypeHead js -->
<script src="{{ asset('../assets/backend/assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/js/typehead.js') }}"></script>

<!-- INTERNAL SUMMERNOTE Editor JS -->
<script src="{{ asset('../assets/backend/assets/plugins/summernote/summernote1.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/js/summernote.js') }}"></script>


{{-- Data Tables --}}
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('../assets/backend/assets/js/table-data.js') }}"></script>


</body>

</html>
