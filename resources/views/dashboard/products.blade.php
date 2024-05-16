@include('dashboard.partials.header')
@include('dashboard.partials.module.products_add_modal')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href={{route('products')}}>Ürünler</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ürünler</h5>
                            <p class="card-title-desc">
                                Sistemde kayıtlı olan ürünlerin listesi aşağıda yer almaktadır.
                            </p>
                            <div class="row mb-4 justify-content-end">
                                <div class="col-sm-4 text-end">
                                    <button class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#addProductModal"><i class="fas fa-plus"></i> Yeni Ürün Ekle</button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>Ürün Fotografi</th>
                                            <th>Ürün Adı</th>
                                            <th>Ürün Detayı</th>
                                            <th>Ürün Fiyatı</th>
                                            <th>Üretilen Barkod</th>
                                            <th>Görünürlük Durumu</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td><img src="{{asset('images/'.$product->image)}}" alt="Product Image" class="img-thumbnail" style="width: 100px; height: 100px;"></td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->product_details}}</td>
                                            <td>{{number_format($product->price, 2)}} ₺</td>
                                            <td>{{ number_format($product->urun_takips_count) }}</td>
                                            <td>
                                                @if($product->active=='1')
                                                <i class="mdi mdi-eye text-success" title="Ürün aktif"></i>
                                            @else
                                                <i class="mdi mdi-eye-off text-danger" title="Ürün pasif"></i>
                                            @endif
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{$product->id}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('products.delete', $product->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Ürünü silmek istediğinize emin misiniz?')"><i class="fas fa-trash"></i></a>

                                            </td>
                                        </tr>
                                        @include('dashboard.partials.module.products_edit_modal', ['products' => $products])
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