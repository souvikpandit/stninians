<footer class="footer">{{ trans('admininfo.admin_copy_right') }} {{ trans('admininfo.company_name') }}</footer>

<!--Image Info Modal -->
<div class="modal fade" id="ImgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Image</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group"><input type="text" class="form-control" placeholder="Image Title" /></div>
                    <div class="form-group"><input type="text" class="form-control" placeholder="Image Alt Title" /></div>
                    <div class="form-group"><textarea type="text" class="form-control" placeholder="Image Description"></textarea></div>
                    <div class="text-right"><input type="submit" class="btn btn-primary" value="Save Changes" /></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Image Info Modal -->

<!--Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span></button>
                <h4 class="modal-title" id="myModalLabel">Insert Media</h4>
            </div>
            <div class="modal-body">
                <h5 class="modal-subtitle">Media Library</h5>
                <div id="content-scroll" class="content">
                    <label>Multiple Selection With Checkbox</label>
                    <ul class="img-gallery-thumb">
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c1" name="cc1" /><label for="c1"><span></span><img src="{{ asset('admin-assets/images/thumb-1.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c2" name="cc2" /><label for="c2"><span></span><img src="{{ asset('admin-assets/images/thumb-2.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c3" name="cc3" /><label for="c3"><span></span><img src="{{ asset('admin-assets/images/thumb-3.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c4" name="cc4" /><label for="c4"><span></span><img src="{{ asset('admin-assets/images/thumb-4.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c5" name="cc5" /><label for="c5"><span></span><img src="{{ asset('admin-assets/images/thumb-5.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="checkbox" id="c6" name="cc6" /><label for="c6"><span></span><img src="{{ asset('admin-assets/images/thumb-6.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                    </ul>
                    <label>Single Selection With Radio</label>
                    <ul class="img-gallery-thumb">
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r4" name="rr1" /><label for="r4"><span></span><img src="{{ asset('admin-assets/images/thumb-1.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r5" name="rr1" /><label for="r5"><span></span><img src="{{ asset('admin-assets/images/thumb-2.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r6" name="rr1" /><label for="r6"><span></span><img src="{{ asset('admin-assets/images/thumb-3.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r7" name="rr1" /><label for="r7"><span></span><img src="{{ asset('admin-assets/images/thumb-4.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r8" name="rr1" /><label for="r8"><span></span><img src="{{ asset('admin-assets/images/thumb-5.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-check">
                                <input type="radio" id="r9" name="rr1" /><label for="r9"><span></span><img src="{{ asset('admin-assets/images/thumb-6.jpg') }}" alt="" /></label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-2 col-md-offset-10 col-sm-3 col-sm-offset-9 col-xs-6 col-xs-offset-6">
                        <input type="button" class="btn btn-primary btn-block" value="Inset to Post" />
                    </div>
                </div>
            </div>
            <div class="modal-footer text-left">
                <h5 class="modal-subtitle">Upload Files</h5>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" method="post" enctype="">
                            <input type="file" name="files[]" id="filer_input" multiple="multiple" />
                            <div class="row">
                                <div class="col-md-2 col-md-offset-10 col-sm-3 col-sm-offset-9 col-xs-6 col-xs-offset-6">
                                    <input type="submit" class="btn btn-primary btn-block" value="Upload" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Gallery Modal -->

    <!-- Bootstrap core JavaScript================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin-assets/js/jquery.filer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/js/jquery.validationEngine-en.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('admin-assets/js/jquery.validationEngine.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('admin-assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('admin-assets/js/hideShowPassword.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/jquery.pwdMeter.js') }}" language="javascript"></script>
    <script src="{{ asset('admin-assets/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/trigger.js') }}"></script>
    {{-- <script src="{{ asset('admin-assets/js/ckeditor.js') }}"></script> --}}
    <script src="{{ asset('admin-assets/js/jquery-ui.js') }}" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.13.0/full-all/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    {{-- <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script> --}}
    <script src="{{ asset('admin-assets/js/dataTable.buttons.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/jszip.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin-assets/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/buttons.print.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable( {
                dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Enquires of ST NINIANS HIGH SCHOOL'
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Enquires of ST NINIANS HIGH SCHOOL'
                    },
                    'copy', 'csv', 'print'

                ]
            } );
        } );
        $(document).ready(function() {
            $('#banner').DataTable( {
                dom: 'lfrtip',
                "order": [ 0, 'desc' ],
                "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 1,2,3,4,5,6,7,8 ] }
                ]
            } );
        } );
        $(document).ready(function() {
            $('#admission_table').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Enquires of ST NINIANS HIGH SCHOOL'
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Enquires of ST NINIANS HIGH SCHOOL'
                    },
                    'copy', 'csv', 'print'

                ]
            } );
        } );
        $(document).ready(function() {
            $('#admission_detail').DataTable( {
                dom: 'B',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Enquires of ST NINIANS HIGH SCHOOL'
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Enquires of ST NINIANS HIGH SCHOOL'
                    },
                    'copy', 'csv', 'print'

                ],
                "aaSorting": [],

                "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 0,1] }
                ],
                "pageLength": 50,
            } );
        } );
    </script>

    <script>
        $("#password-1").hidePassword(true);
        $("#password-2").hidePassword(true);
        $("#password-3").showPassword("focus", {
            toggle: { className: "my-toggle" },
        });
        $("#show-password").change(function () {
            $("#password-4").hideShowPassword($(this).prop("checked"));
        });
        var clipboard = new Clipboard(".btn");
        clipboard.on("success", function (e) {
            console.log(e);
        });
        clipboard.on("error", function (e) {
            console.log(e);
        });
    </script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    <script>
    //Make the DIV element draggagle:
    dragElement(document.getElementById("mydiv"));

    function dragElement(elmnt) {
    var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    if (document.getElementById(elmnt.id + "header")) {
        /* if present, the header is where you move the DIV from:*/
        document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
    } else {
        /* otherwise, move the DIV from anywhere inside the DIV:*/
        elmnt.onmousedown = dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        /* stop moving when mouse button is released:*/
        document.onmouseup = null;
        document.onmousemove = null;
    }
    }
    </script>
    <script>
    setTimeout(fade_out, 5000);

    function fade_out() {
    $(".message").fadeOut().empty();
    }
    </script>
