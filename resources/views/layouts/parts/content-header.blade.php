            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            @hasSection('page-title')
                                <h2 class="mb-0">@yield('page-title')</h2>
                            @endif
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('page-title')</li>
                            </ol>

                        </div>
                        <div class="col-sm-6 text-end">
                            @yield("page-actions")
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
