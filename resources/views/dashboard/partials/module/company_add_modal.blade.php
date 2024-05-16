<div class="modal fade" id="companyAddModal" tabindex="-1" aria-labelledby="companyAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Şirket Ekle:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="companyInfoTab" data-bs-toggle="tab" data-bs-target="#companyInfo" type="button" role="tab" aria-controls="companyInfo" aria-selected="true"><i class="fas fa-building"></i> Şirket Bilgileri</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="companyInfo" role="tabpanel" aria-labelledby="companyInfoTab">
                        <div class="container">
                            <br>
                          
                            <form action="{{ route('companies.add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="group" class="form-label">Müşteri Grubu</label>
                                    <select class="form-select" id="group" name="customer_group_name">
                                       @foreach($groups as $customer_group)
                                        <option value="{{ $customer_group->name }}">{{ $customer_group->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Müşteri Adı</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="company" class="form-label">Şirket Adı</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Telefon</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="phone2" class="form-label">Telefon 2</label>
                                    <input type="text" class="form-control" id="phone2" name="phone2">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-Posta</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label">Ülke</label>
                                    <input type="text" class="form-control" id="country" name="country">
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label">Şehir</label>
                                    <input type="text" class="form-control" id="city" name="city">
                                </div>
                                <div class="mb-3">
                                    <label for="state" class="form-label">İlçe</label>
                                    <input type="text" class="form-control" id="state" name="state">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Adres</label>
                                    <input type="text" class="form-control" id="address" name="address">
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
