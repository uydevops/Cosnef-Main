@include('dashboard.partials.header')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Altf4 Yazılım | Cosneff </a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Analiz</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row" style="display: none;">

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <span class="float-end text-muted font-size-13">Last 3 month</span>
                            <h5 class="card-title mb-3">Workload</h5>
                            <div id="donut-example" class="morris-charts workloed-chart" dir="ltr"></div>
                            <ul class="list-unstyled text-center text-muted mb-0">
                                <li class="list-inline-item font-size-13"><i class="mdi mdi-album font-size-16 align-middle text-purple me-2"></i>External
                                </li>
                                <li class="list-inline-item font-size-13"><i class="mdi mdi-album font-size-16 align-middle text-pink me-2"></i>Internal</li>
                                <li class="list-inline-item font-size-13"><i class="mdi mdi-album font-size-16 align-middle text-light me-2"></i>Other</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Budget Details</h5>
                            <div id="morris-bar-chart" class="morris-charts project-budget-detail-chart" dir="ltr">
                            </div>
                            <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                                <li class="list-inline-item font-size-13"><i class="mdi mdi-album font-size-16 align-middle text-primary me-2"></i>Total
                                    Budget</li>
                                <li class="list-inline-item font-size-13"><i class="mdi mdi-album font-size-16 align-middle text-success me-2"></i>Amount
                                    Used</li>
                                <li class="list-inline-item font-size-13"><i class="mdi mdi-album font-size-16 align-middle text-secondary me-2"></i>Target
                                    Amount</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Project Budget</h5>
                            <div class="row justify-content-end">
                                <div class="col-xl-12 align-self-center">
                                    <ul class="list-unstyled list-inline float-end">
                                        <li class="list-inline-item px-3">
                                            <h5>$ 42,000 </h5>
                                            <small class="font-size-14 text-muted">Total Budget</small>
                                        </li>
                                        <li class="list-inline-item px-3">
                                            <h5 class="mb-2">$ 7,200 </h5>
                                            <small class="font-size-14 text-muted">Remaining</small>
                                        </li>
                                        <li class="list-inline-item px-3">
                                            <h5 class="text-danger mb-2"><i class="mdi mdi-arrow-down-bold font-size-14 text-danger"></i>
                                                7.9% </h5>
                                            <span class="font-size-14 text-danger">Over Target Currently</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="extra-area-chart" class="morris-charts project-budget-chart" dir="ltr"></div>
                            <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                                <li class="list-inline-item font-size-13"><i class="mdi mdi-album font-size-16 align-middle text-primary me-2"></i>Total
                                    Budget
                                </li>
                                <li class="list-inline-item font-size-13"><i class="mdi mdi-album font-size-16 align-middle text-success me-2"></i>Amount
                                    Used
                                </li>
                                <li class="list-inline-item font-size-13"><i class="mdi mdi-album font-size-16 align-middle text-secondary me-2"></i>Target
                                    Amount
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Son Eklenen Müsteriler</h5>
                            <div class="row">
                                <div class="col-sm-6 align-self-center">
                                    <div class="live-tile text-center" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="10">

                                        @foreach($companiesRegInfo as $companiesRegInformation)
                                        <div class="mt-2">
                                            <h5 class="text-primary pt-2">{{ $companiesRegInformation->company }}</h5>
                                            <small class="text-muted">{{ $companiesRegInformation->name }}</small>
                                            <h3 class="text-dark mt-1">{{ $companiesRegInformation->bonus_kotasi }}</h3>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-center knob-Prosess mt-4 mt-sm-0" dir="ltr">
                                        <input class="knob animated" value="0" rel="{{$activeCompaniesCount}}" data-width="120" data-height="120" data-linecap=round data-fgColor="#44a2d2" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                        <div class="text-center knob-prosess-btn">
                                            <a class="btn btn-sm  btn-primary text-white px-3 mt-2 mb-0">Yenile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i class="mdi mdi-cube text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 align-self-center text-center">
                                            <div class="ms-2 text-end">
                                                <p class="mb-1 text-muted font-size-13">Ürün Sayısı</p>
                                                <h4 class="mb-1 font-size-20">{{ $productCount }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar progress-animated  bg-warning" role="progressbar" style="max-width: {{ $productCount }}%" aria-valuenow="{{ $productCount }}" aria-valuemin="0" aria-valuemax="100"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i class="mdi mdi-account-multiple text-purple"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 align-self-center text-center">
                                            <div class="ms-2 text-end">
                                                <p class="mb-1 text-muted font-size-13">Kullanıcılar</p>
                                                <h4 class="mb-1 font-size-20">{{ $activeCompaniesCount }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar progress-animated  bg-purple" role="progressbar" style="max-width: {{ $activeCompaniesCount }}%" aria-valuenow="{{ $activeCompaniesCount }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info">
                                                <i class="mdi mdi-playlist-check text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 align-self-center text-center">
                                            <div class="ms-2 text-end">
                                                <p class="mb-1 text-muted font-size-11">Tamamlanan Görevler</p>
                                                <h4 class="mb-1 font-size-20">{{ $completedTasksCount }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar progress-animated  bg-success" role="progressbar" style="max-width:{{ $completedTasksCount }}%" aria-valuenow="{{ $completedTasksCount }}" aria-valuemax="100"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                        <div class="col-md-6 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 col-4 align-self-center">
                                            <div class="icon-info">
                                                <i class="mdi mdi-cart text-pink"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-8 align-self-center text-center">
                                            <!----Orders---->
                                            <div class="ms-2 text-end">
                                                <p class="mb-1 text-muted font-size-13">Aktif Sipariş</p>
                                                <h4 class="mb-1 font-size-20">18090</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar progress-animated  bg-pink" role="progressbar" style="max-width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Onay Bekleyen Müsteriler</h5>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Ad Soyad</th>
                                                    <th scope="col">Telefon</th>
                                                    <th scope="col">E-Posta</th>
                                                    <th scope="col">İşlem</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($pendingCompanies as $pendingCompany)
                                         
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1">
                                                            @if (!empty($pendingCompany->name))
                                                            {{ $pendingCompany->name }}
                                                            @else
                                                            {{ $pendingCompany->company }}
                                                            @endif
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        <a href="tel:{{ $pendingCompany->phone }}" class="text-muted">{{ $pendingCompany->phone }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="mailto:{{ $pendingCompany->email }}" class="text-muted">{{ $pendingCompany->email }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('dashboard.approved-companies', ['id' => $pendingCompany->id]) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-check"></i> </a>
                                                        <a href="{{ route('dashboard.rejected-companies', ['id' => $pendingCompany->id]) }}" class="btn btn-danger btn-sm"><i class="mdi mdi-close"></i> </a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end table-responsive-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <!-- end col -->
            </div>

            <!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Aktif Görevler Listesi</h5>
                            <div data-simplebar style="max-height: 260px;">
                                <div class="todo-list">

                                    @foreach ($tasks as $task)
                                    <div class="todo-box">
                                        <button type="button" id="task_{{ $task->id }}" class="btn btn-link remove">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        <div class="todo-task">
                                            <label class="ckbox">
                                                <input type="checkbox" id="task_{{ $task->id }}" {{ $task->completed ? 'checked' : '' }}><span>{{ $task->description }}</span>
                                            </label>

                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>

                            <div class="input-group custom-input">
                                <input type="text" class="form-control todo-list-input" placeholder="Görev ekle" id="task-add">
                                <button id="addTask" class="btn btn-primary add-new-todo-btn">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->


                    <script></script>


                </div>
            </div>

            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <script src="{{ asset('assets/js/task.js') }}"></script>

    @include('dashboard.partials.footer')