<!-- jQuery -->
<script src="admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="admin_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin_assets/js/adminlte.js"></script>
<!-- ChartJS -->
<script src="admin_assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="admin_assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="admin_assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="admin_assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="admin_assets/plugins/moment/moment.min.js"></script>
<script src="admin_assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="admin_assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin_assets/js/pages/dashboard.js"></script>
<!--- select 2 ---->
<script src="admin_assets/plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="admin_assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="admin_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="admin_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="admin_assets/plugins/jszip/jszip.min.js"></script>
<script src="admin_assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="admin_assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="admin_assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="admin_assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="admin_assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="admin_assets/js/adminlte.min.js"></script>
<script src="admin_assets/js/adminlte.js"></script>
<script src="admin_assets/js/pages/dashboard3.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="admin_assets/js/demo.js"></script> -->
<!-- Page specific script -->


<!-- Ekko Lightbox -->
<script src="admin_assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<!-- Filterizr-->
<script src="admin_assets/plugins/filterizr/jquery.filterizr.min.js"></script>


<!-- AdminLTE App -->
<!-- <script src="admin_assets/js/adminlte.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="admin_assets/js/demo.js"></script> -->
<!-- DataTables -->
<!-- <script src="admin_assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script> -->
<!-- <script src="admin_assets/plugins/jquery/jquery.min.js"></script> -->

<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
<!--- pre loader -->
<script>
  var myVar;
  function myFunction() {
    myVar = setTimeout(showPage, 5);
  }
  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("wrapper").style.display = "block";
  }
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script>
  $(function () {
    $(".example3").DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": true,
      //"responsive": true,
      // "buttons": ["copy", "excel", "pdf", "print", "csv", "colvis"]
      "buttons": ["excel", "pdf", "print", "csv", "colvis"]
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');    
  });
</script>

<script>
  $(function () {
    $(".example4").DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": true,
      //"responsive": true,
      // "buttons": ["copy", "excel", "pdf", "print", "csv", "colvis"]
      "buttons": ["excel", "pdf", "print", "csv", "colvis"]
    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');    
  });
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });
</script>


 <!--
            The "super-build" of CKEditor 5 served via CDN contains a large set of plugins and multiple editor types.
            See https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/quick-start.html#running-a-full-featured-editor-from-cdn
          -->
          <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/ckeditor.js"></script>
        <!--
            Uncomment to load the Spanish translation
            <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/translations/es.js"></script>
          -->
          <script>
            // This sample still does not showcase all CKEditor 5 features (!)
            // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
            CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
              toolbar: {
                items: [
                  'exportPDF','exportWord', '|',
                  'findAndReplace', 'selectAll', '|',
                  'heading', '|',
                  'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                  'bulletedList', 'numberedList', 'todoList', '|',
                  'outdent', 'indent', '|',
                  'undo', 'redo',
                  '-',
                  'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                  'alignment', '|',
                  'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                  'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                  'textPartLanguage', '|',
                  'sourceEditing'
                  ],
                shouldNotGroupWhenFull: true
              },
                // Changing the language of the interface requires loading the language file using the <script> tag.
                // language: 'es',
              list: {
                properties: {
                  styles: true,
                  startIndex: true,
                  reversed: true
                }
              },
                // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
              heading: {
                options: [
                  { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                  { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                  { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                  { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                  { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                  { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                  { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                  ]
              },
                // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
              placeholder: 'Detail',
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
              fontFamily: {
                options: [
                  'default',
                  'Arial, Helvetica, sans-serif',
                  'Courier New, Courier, monospace',
                  'Georgia, serif',
                  'Lucida Sans Unicode, Lucida Grande, sans-serif',
                  'Tahoma, Geneva, sans-serif',
                  'Times New Roman, Times, serif',
                  'Trebuchet MS, Helvetica, sans-serif',
                  'Verdana, Geneva, sans-serif'
                  ],
                supportAllValues: true
              },
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
              fontSize: {
                options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                supportAllValues: true
              },
                // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
              htmlSupport: {
                allow: [
                {
                    name: /.*/,
                  attributes: true,
                  classes: true,
                  styles: true
                }
                ]
              },
                // Be careful with enabling previews
                // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
              htmlEmbed: {
                showPreviews: true
              },
                // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
              link: {
                decorators: {
                  addTargetToExternalLinks: true,
                  defaultProtocol: 'https://',
                  toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                      download: 'file'
                    }
                  }
                }
              },
                // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
              mention: {
                feeds: [
                {
                  marker: '@',
                  feed: [
                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                    '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                  minimumCharacters: 1
                }
                ]
              },
                // The "super-build" contains more premium features that require additional configuration, disable them below.
                // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
              removePlugins: [
                    // These two are commercial, but you can try them out without registering to a trial.
                    // 'ExportPdf',
                    // 'ExportWord',
                'CKBox',
                'CKFinder',
                'EasyImage',
                    // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // Storing images as Base64 is usually a very bad idea.
                    // Replace it on production website with other solutions:
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                    // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                    // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                'MathType',
                    // The following features are part of the Productivity Pack and require additional license.
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents'
                ]
            });
          </script>