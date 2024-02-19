@php
$totalUsers = App\Models\User::count();
 $totalProduk = App\Models\Produk::count();
$totalKategori = App\Models\Kategori::count();

$totalPenjualan = App\Models\Transaksi::count();
@endphp
<div class="row">
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box">
<span class="info-box-icon bg-info elevation-1"><i class="nav-icon fas fa-users"></i></span>
<div class="info-box-content">
<span class="info-box-text">User</span>
<span class="info-box-number">
{{$totalUsers}}
<small>%</small>
</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-danger elevation-1"><i class="nav-icon fas fa-list"></i></span>
<div class="info-box-content">
<span class="info-box-text">kategori</span>
<span class="info-box-number">{{$totalKategori}}</span>
</div>

</div>

</div>


<div class="clearfix hidden-md-up"></div>
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-success elevation-1"><i class="nav-icon fas fa-table"></i></span>
<div class="info-box-content">
<span class="info-box-text">produk</span>
<span class="info-box-number">{{$totalProduk}}</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-warning elevation-1"><i class="nav-icon fas fa-exchange-alt"></i></span>
<div class="info-box-content">
<span class="info-box-text">transaksi</span>
<span class="info-box-number">{{$totalPenjualan}}</span>
</div>

</div>

</div>

</div>



                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Transaksi</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/kasir/transaksi">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Produk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/admin/produk">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/admin/kategori">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
             <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
            <div class="card-body">User</div>
             <div class="card-footer d-flex align-items-center justify-content-between">
                 <a class="small text-white stretched-link" href="/admin/user">View Details</a>
             <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
            </div>
        </div>
     </div>
