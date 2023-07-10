@extends(backpack_view('blank'))
@section('header')
    <div class="container">
        <div class="row">
           <div class="col">
               <h1><i class="la la-home"></i> Dasboard</h1>
           </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="card-title">
                            Jumlah Data Jalan
                        </div>
                        <a href="{{route('jalan.index')}}" class="text-white">
                            <h3> {{$jalan->count()}} Ruas Jalan</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success">
                    <div class="card-body">
                        <div class="card-title">
                            Jumlah Data Irigasi
                        </div>
                        <a href="{{route('irigasi.index')}}" class="text-white">
                            <h3> {{$irigasi->count()}} Data Irigasi</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning">
                    <div class="card-body">
                        <div class="card-title">
                            Jumlah Data Pengguna
                        </div>
                        <a href="{{route('user.index')}}" class="text-white">
                        <h3> {{$user->count()}} Pengguna</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                   <div class="card-body ">
                       <h3>Info Jalan</h3>
                       <ul>
                           <li>Jumlah Panjang Jalan {{$jalan->sum('panjang')}} KM</li>
                       </ul>
                   </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3>Info Irigasi</h3>
                        <ul>
                            <li>Jumlah Luas Irigasi {{$irigasi->sum('lebar')}} Ha</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
