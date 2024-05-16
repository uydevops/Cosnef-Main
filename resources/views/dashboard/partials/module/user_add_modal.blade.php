<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Kullanıcı Düzenle:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="userInfoTab" data-bs-toggle="tab" data-bs-target="#userInfo" type="button" role="tab" aria-controls="userInfo" aria-selected="true"><i class="fas fa-user"></i> Kullanıcı Bilgileri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contactInfoTab" data-bs-toggle="tab" data-bs-target="#contactInfo" type="button" role="tab" aria-controls="contactInfo" aria-selected="false"><i class="fas fa-phone"></i> İletişim Bilgileri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="changePasswordTab" data-bs-toggle="tab" data-bs-target="#changePassword" type="button" role="tab" aria-controls="changePassword" aria-selected="false"><i class="fas fa-key"></i> Şifre Değiştir</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="userInfo" role="tabpanel" aria-labelledby="userInfoTab">
                        <div class="container">
                            <form action="{{ route('users.add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <br>
                                <input type="hidden" name="id">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Adı</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Kullanıcı Adı</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-posta</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">Profil Resmi</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contactInfo" role="tabpanel" aria-labelledby="contactInfoTab">
                        <div class="container">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefon</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Adres</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">Şehir</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Ülke</label>
                                <input type="text" class="form-control" id="country" name="country">
                            </div>
                            <div class="mb-3">
                                <label for="postal_code" class="form-label">Posta Kodu</label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="changePassword" role="tabpanel" aria-labelledby="changePasswordTab">
                        <div class="container">
                            <div class="mb-3">
                                <label for="password" class="form-label">Şifre</label>
                                <input type="password" class="form-control" id="password" name="password">
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