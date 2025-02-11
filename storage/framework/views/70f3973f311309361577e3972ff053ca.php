</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">

    </div>
    <strong> &copy; <a href="https://www.instagram.com/_diii1410">Ardi Firmansyah</a></strong>
</footer> -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/vendor/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/vendor/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/vendor/admin/dist/js/adminlte.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('[data-widget="pushmenu"]');
        const sidebar = document.getElementById('mainSidebar');
        const contentWrapper = document.querySelector('.content-wrapper');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-collapsed');
            contentWrapper.classList.toggle('sidebar-collapsed');
        });
    });
</script>


</body>

</html><?php /**PATH F:\Absensi App\AbsensiApp\resources\views/hrd/layouts/footer.blade.php ENDPATH**/ ?>