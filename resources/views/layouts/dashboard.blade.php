@include('shared.header')
@include('shared.navbar')
@include('shared.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper my-4">
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">@yield('content-title')</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                @yield('content')
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('shared.footer')
