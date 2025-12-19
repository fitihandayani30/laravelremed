@extends('frontend.layout')

@section('content')
<div style="padding:20px;">

    <h3 style="
        margin-bottom:8px;
        font-size:26px;
        color:#2c3e50;
        font-weight:600;
    ">
        Welcome to FitriCatering
    </h3>

    <p style="
        margin-bottom:25px;
        color:#666;
        max-width:600px;
        line-height:1.6;
    ">
        Kami menyediakan berbagai pilihan menu catering berkualitas untuk berbagai acara Anda. Jelajahi menu kami dan temukan hidangan lezat yang sesuai dengan selera Anda.
    </p>

    @foreach ($menus as $jenis => $items)
        <h4 style="
            margin-top:30px;
            margin-bottom:15px;
            color:#34495e;
            font-size:20px;
            border-left:4px solid #e67e22;
            padding-left:10px;
        ">
            {{ $jenis }}
        </h4>

        <div style="
            display:flex;
            flex-wrap:wrap;
            gap:16px;
        ">
            @foreach ($items as $menu)
                <div class="card" style="
                    width:220px;
                    padding:14px;
                    border-radius:10px;
                    border:1px solid #eee;
                    background:#fff;
                    transition:0.3s;
                ">
                    <strong style="
                        display:block;
                        margin-bottom:6px;
                        color:#333;
                        font-size:15px;
                    ">
                        {{ $menu->nama_menu }}
                    </strong>

                    <span style="
                        color:#e67e22;
                        font-weight:600;
                        font-size:14px;
                    ">
                        Rp {{ number_format($menu->harga) }}
                    </span>
                </div>
            @endforeach
        </div>

        <a href="{{ route('pemesanan.detail', 1) }}"
           style="
                display:inline-block;
                margin-top:18px;
                padding:10px 18px;
                background:#e67e22;
                color:#fff;
                text-decoration:none;
                border-radius:20px;
                font-size:14px;
                font-weight:500;
           ">
            Lihat Detail Pesanan →
        </a>
    @endforeach

</div>
@endsection
