<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0-rc
    </div>
    <strong>Copyright &copy; 2021 <a href="{{ url('/') }}">OSPOS</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Application script -->
<script src="{{ asset('assets/js/app.js') }}"></script>
{{-- Custom script --}}
@yield('script')
</body>

</html>
