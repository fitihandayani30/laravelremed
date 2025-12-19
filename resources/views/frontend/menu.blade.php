@extends('frontend.layout')

@section('content')
<h3 style="margin-bottom:20px;">Menu Catering</h3>

<div style="
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 18px;
">
    @foreach ($menus as $menu)
        <div class="card" style="
            padding:16px;
            border-radius:10px;
            background:#fff;
            box-shadow:0 6px 15px rgba(0,0,0,0.06);
        ">
            <strong style="font-size:16px; color:#2c3e50;">
                {{ $menu->nama_menu }}
            </strong>

            <div style="font-size:14px; margin-top:6px; color:#555;">
                Jenis: {{ $menu->jenis_menu }}
            </div>

            <div style="
                margin-top:10px;
                font-weight:600;
                color:#e67e22;
            ">
                Rp {{ number_format($menu->harga) }}
            </div>
        </div>
    @endforeach
</div>
@endsection
