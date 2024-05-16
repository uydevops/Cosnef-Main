@foreach($companies as $company)
<div class="modal fade" id="companyEditModal{{$company->id}}" tabindex="-1" aria-labelledby="companyEditModalLabel{{$company->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel{{$company->id}}">Şirket Düzenle:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="companyInfoTab{{$company->id}}" data-bs-toggle="tab" data-bs-target="#companyInfo{{$company->id}}" type="button" role="tab" aria-controls="companyInfo{{$company->id}}" aria-selected="true"><i class="fas fa-building"></i> Şirket Bilgileri</button>
                    </li>
                    <!-- Diğer tab butonları buraya eklenmeli -->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="companyInfo{{$company->id}}" role="tabpanel" aria-labelledby="companyInfoTab{{$company->id}}">
                        <div class="container">
                            <br>
                            <div class="mb-3 text-center">
                                <img src="{{ asset('images/'.$company->logo)}}" alt="user-image" class="rounded-circle" height="64" width="64">
                            </div>
                            <form action="{{ route('companies.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $company->id }}">
                            <div class="mb-3">
                                <label for="name" class="form-label">Müşteri Grubu</label>
                                <select class="form-select" id="group" name="customer_group_name">
                                    @foreach($groups as $group)
                                    <option value="{{$group->name}}" @if($group->name == $company->customer_group_name) selected @endif>{{$group->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Müşteri Adı</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$company->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label">Şirket Adı</label>
                                <input type="text" class="form-control" id="company" name="company" value="{{$company->company}}">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefon</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$company->phone}}">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefon 2</label>
                                <input type="text" class="form-control" id="phone" name="phone2" value="{{$company->phone2}}">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-Posta</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$company->email}}">
                            </div>

                            <div class="mb-3">
                                <label for="country" class="form-label">Ülke</label>
                                <input type="text" class="form-control" id="country" name="country" value="{{$company->country}}">
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">Şehir</label>
                                <input type="text" class="form-control" id="city" name="city" value="{{$company->city}}">
                            </div>

                            <div class="mb-3">
                                <label for="district" class="form-label">İlçe</label>
                                <input type="text" class="form-control" id="state" name="state" value="{{$company->state}}">
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Adres</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{$company->address}}">
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach