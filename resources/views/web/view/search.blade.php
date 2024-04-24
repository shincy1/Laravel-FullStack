@extends('layouts.app')

@auth
    @php $userRole = Auth::user()->user_level; @endphp
@endauth

@section('title', 'Dashboard')

@section('header')
    <style>
        body {
            background-color: white;
            width: 100vw;
            height: 100vh;
        }

        ::-webkit-scrollbar {
            width: 0px;
        }
    </style>
@endsection

@section('main')
    @include('layouts.nav')
    <div class="container-fluid text-center mt-5">
        <h3 class="text-light">Hasil Pencarian : {{ $search }}</h3>
        <div class="d-flex flex-wrap justify-content-evenly mt-5">
            @foreach ($data_pakaian as $items)
                @php
                    $kategori = \App\Models\Kategori_Pakaian::find($items->pakaian_kategori_pakaian_id);
                    $pakaianStok = $items->pakaian_stok;
                    $kategoriStatus = $kategori->kategori_pakaian_status;
                @endphp
                @if ($pakaianStok > 0 && $kategoriStatus > 0)
                    @if (empty($search) || Str::contains(strtolower($items->pakaian_nama), strtolower($search)))
                        <div class="card text m-2" style="width: 18rem; background-color:white; color:black; box-shadow:2px 2px 4px #A6A6A6; border:1px solid #ccc; border-radius:16px;>
                            @if ($items->pakaian_gambar_url === '' || $items->pakaian_gambar_url === null)
                                <img width="100%" height="100%" src="{{ asset('img/clothes.png') }}" class="card-img-top"
                                    alt="...">
                            @else
                                <img width="100%" height="100%"
                                    src="{{ asset('storage/pakaian/gambar/' . basename($items->pakaian_gambar_url)) }}"
                                    class="card-img-top" alt="...">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $items->pakaian_nama }}</h5>
                                <p class="card-text">Rp. {{ $items->pakaian_harga }}</p>
                                <a href="{{ route('detail', ['pakaian_id' => $items->pakaian_id]) }}"
                                    class="btn btn-primary" style="background-color: #E48F45">Get Detail</a>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
    </div>
@endsection

@section('footer')
    <div class="container-flex text-center p-4" style="background: #E48F45">
        <div class="card text-center" style="background: #E48F45">
            <div class="card-header" style="background: #E48F45; border:none">
            </div>
            <div class="card-body">
                <h5 class="card-title">Thrift Shop</h5>
                <p class="card-text">Temukan Style Kamu</p>
                <a href="#" class="btn btn-primary" style="background: #FFA000">Fashion Kekinian Dengan Harga Meyakinkan</a>
            </div>
            <div class="card-footer text-body-secondary" style="background: #E48F45">
                Copyright &copy; Thrift Shop 2023
            </div>
        </div>
    </div>
@endsection
