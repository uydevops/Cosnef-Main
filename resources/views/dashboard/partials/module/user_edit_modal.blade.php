@foreach($users as $user)
<div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $user->id }}">Kullanıcı Düzenle: {{ $user->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="userInfoTab{{ $user->id }}" data-bs-toggle="tab" data-bs-target="#userInfo{{ $user->id }}" type="button" role="tab" aria-controls="userInfo{{ $user->id }}" aria-selected="true"><i class="fas fa-user"></i> Kullanıcı Bilgileri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contactInfoTab{{ $user->id }}" data-bs-toggle="tab" data-bs-target="#contactInfo{{ $user->id }}" type="button" role="tab" aria-controls="contactInfo{{ $user->id }}" aria-selected="false"><i class="fas fa-phone"></i> İletişim Bilgileri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="changePasswordTab{{ $user->id }}" data-bs-toggle="tab" data-bs-target="#changePassword{{ $user->id }}" type="button" role="tab" aria-controls="changePassword{{ $user->id }}" aria-selected="false"><i class="fas fa-key"></i> Şifre Değiştir</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="userInfo{{ $user->id }}" role="tabpanel" aria-labelledby="userInfoTab{{ $user->id }}">
                        <div class="container">
                            <form action="{{ route('users.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <br>

                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="mb-3 text-center">
                                    <img src="{{ asset($user->image)}}" alt="user-image" class="rounded-circle" height="64" width="64">
                                </div>
                                <div class="mb-3">
                                    <label for="name{{ $user->id }}" class="form-label">Adı</label>
                                    <input type="text" class="form-control" id="name{{ $user->id }}" value="{{ $user->name }}" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="username{{ $user->id }}" class="form-label">Kullanıcı Adı</label>
                                    <input type="text" class="form-control" id="username{{ $user->id }}" value="{{ $user->username }}" name="username">
                                </div>
                                <div class="mb-3">
                                    <label for="email{{ $user->id }}" class="form-label">E-posta</label>
                                    <input type="email" class="form-control" id="email{{ $user->id }}" value="{{ $user->email }}" name="email">
                                </div>
                                <div  class="mb-3">
                                    <label for="role{{ $user->id }}" class="form-label">Profil Resmi</label>
                                    <input type="file" class="form-control" id="image{{ $user->id }}" name="image">
                                </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contactInfo{{ $user->id }}" role="tabpanel" aria-labelledby="contactInfoTab{{ $user->id }}">
                        <div class="container">
                            <div class="mb-3">
                                <label for="phone{{ $user->id }}" class="form-label">Telefon</label>
                                <input type="text" class="form-control" id="phone{{ $user->id }}" value="{{ $user->phone }}" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="address{{ $user->id }}" class="form-label">Adres</label>
                                <input type="text" class="form-control" id="address{{ $user->id }}" value="{{ $user->address }}" name="address">
                            </div>
                            <div class="mb-3">
                                <label for="city{{ $user->id }}" class="form-label">Şehir</label>
                                <input type="text" class="form-control" id="city{{ $user->id }}" value="{{ $user->city }}" name="city">
                            </div>
                            <div class="mb-3">
                                <label for="country{{ $user->id }}" class="form-label">Ülke</label>
                                <input type="text" class="form-control" id="country{{ $user->id }}" value="{{ $user->country }}" name="country">
                            </div>
                            <div class="mb-3">
                                <label for="postal_code{{ $user->id }}" class="form-label">Posta Kodu</label>
                                <input type="text" class="form-control" id="postal_code{{ $user->id }}" value="{{ $user->postal_code }}" name="postal_code">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="changePassword{{ $user->id }}" role="tabpanel" aria-labelledby="changePasswordTab{{ $user->id }}">
                        <div class="container">
                            <div class="mb-3">
                                <label for="password{{ $user->id }}" class="form-label">Şifre</label>
                                <input type="password" class="form-control" id="password{{ $user->id }}" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation{{ $user->id }}" class="form-label">Şifre Tekrar</label>
                                <input type="password" class="form-control" id="password_confirmation{{ $user->id }}" name="password_confirmation">
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
