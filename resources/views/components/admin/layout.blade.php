<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/admin/css/ckeditor.css">
    <link rel="stylesheet" href="/assets/admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/assets/admin/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <x-admin.navbar />
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <x-admin.sidebar />
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    {{ $slot }}
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <x-admin.footer />
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <script src="/assets/admin/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="/assets/admin/js/off-canvas.js"></script>
    <script src="/assets/admin/js/misc.js"></script>
    <script src="/assets/admin/js/file-upload.js"></script>
    <!-- endinject -->
    {{-- CKeditor --}}
    {{-- <script src="https://cdn.ckbox.io/CKBox/1.5.1/ckbox.js"></script> --}}
    <script src="/assets/admin/js/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.editor'), {
                licenseKey: '',
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error(
                    'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                );
                console.warn('Build id: njccoxa0denc-2390dkkgv8n8');
                console.error(error);
            });
    </script>
</body>

</html>
