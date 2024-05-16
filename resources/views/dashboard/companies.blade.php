@include('dashboard.partials.header')
@include('dashboard.partials.module.company_add_modal')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href={{route('companies')}}>Müsteriler</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Müsteriler</h5>
                            <p class="card-title-desc">
                                Müsterilerinizi buradan yönetebilirsiniz.
                            </p>
                            <div class="row mb-4 justify-content-end">
                                <div class="col-sm-4 text-end">
                                    <button class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#companyAddModal"><i class="fas fa-plus"></i> Yeni Müsteri Ekle</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>Müsteri Adı</th>
                                            <th>Şirket Adı</th>
                                            <th>Telefon</th>
                                            <th>Ülke</th>
                                            <th>Şehir</th>
                                            <th>İlçe</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($companies as $company)
                                        <tr>
                                            <td>{{ $company->name }}</td>
                                            <td>{{ $company->company }}</td>
                                            <td>{{ $company->phone }}</td>
                                            <td>{{ $company->country }}</td>
                                            <td>{{ $company->city }}</td>
                                            <td>{{ $company->state }}</td>
                                            <td>
                                                <a href="{{ route('companies.delete', $company->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#companyEditModal{{$company->id}}"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#companyBonusModal{{$company->id}}"><i class="fas fa-gift"></i></a>
                                                <a href="" class="btn btn-success btn-sm"><i class="fas fa-shopping-cart"></i></a>
                                            </td>
                                        </tr>
                                        @include('dashboard.partials.module.company_edit_modal', ['company' => $company])
                                        @include('dashboard.partials.module.company_bonus_modal', ['company' => $company])
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            @include('dashboard.partials.footer')
            @include('dashboard.partials.datatable')