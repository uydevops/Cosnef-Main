@include('dashboard.partials.header')
@include('dashboard.partials.module.user_edit_modal')
@include('dashboard.partials.module.user_add_modal')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Kullanıcı Ayarları</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Analiz</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Kullanıcı Ayarlari</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kullanıcılar</h5>
                            <p class="card-title-desc">
                                Kullanıcılarınızı buradan yönetebilirsiniz.
                            </p>


                            <div class="row mb-4 justify-content-end">
                                <div class="col-sm-4 text-end">
                                    <button class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#addModal"><i class="fas fa-plus"></i> Yeni Kullanıcı Ekle</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>Fotograf</th>
                                            <th>Adı</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>Kayit</th>
                                            <th>Görev</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td><img src="{{asset($user->image) }}" alt="{{ $user->name }}" class="rounded-circle" height="48"></td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->created_at->locale('tr')->diffForHumans() }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $user->id }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        @include('dashboard.partials.module.user_edit_modal', ['user' => $user])

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