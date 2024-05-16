@foreach($companies as $company)
<div class="modal fade" id="companyBonusModal{{$company->id}}" tabindex="-1" aria-labelledby="companyBonusModalLabel{{$company->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel{{$company->id}}">Bonus Bilgileri Düzenle:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-qrcode"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0">{{ $company->name }}</h6>
                                <p class="mb-0 text-muted">{{ $company->bonus_kotasi }}</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <span>{{ $company->bonus_kotasi }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-qrcode"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0">{{ $company->name }}</h6>
                                <p class="mb-0 text-muted">{{ $company->bonus_kotasi }}</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <span>{{ $company->bonus_kotasi }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-qrcode"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0">{{ $company->name }}</h6>
                                <p class="mb-0 text-muted">{{ $company->bonus_kotasi }}</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <span>{{ $company->bonus_kotasi }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-qrcode"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0">{{ $company->name }}</h6>
                                <p class="mb-0 text-muted">{{ $company->bonus_kotasi }}</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <span>{{ $company->bonus_kotasi }}</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-qrcode"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0">{{ $company->name }}</h6>
                                <p class="mb-0 text-muted">{{ $company->bonus_kotasi }}</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <span>{{ $company->bonus_kotasi }}</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>
            </div>
        </div>
    </div>
</div>

<style>
    .list-group-item {
    padding: 1rem;
    border: none;
}

.list-group-item:last-child {
    border-bottom: none;
}

.list-group-item .fa-qrcode {
    font-size: 1.5rem;
}

.modal-header {
    border-bottom: none;
}

.modal-title {
    margin-right: auto;
}

.modal-footer {
    border-top: none;
}

</style>
@endforeach
