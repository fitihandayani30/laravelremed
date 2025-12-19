<h2 style="margin-bottom:10px;">Detail Pesanan</h2>

<div style="
    background:#ffffff;
    padding:15px 20px;
    border-radius:8px;
    border:1px solid #eee;
    margin-bottom:20px;
    max-width:600px;
">
    <p style="margin:4px 0;">
        <strong>Nama Pelanggan:</strong> {{ $pemesanan->pelanggan->nama }}
    </p>
    <p style="margin:4px 0;">
        <strong>Tanggal Acara:</strong> {{ $pemesanan->tanggal_acara }}
    </p>
</div>

<table style="
    width:100%;
    border-collapse:collapse;
    background:#ffffff;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 4px 10px rgba(0,0,0,0.08);
">
    <thead style="background:#f4f6f8;">
        <tr>
            <th style="padding:12px; text-align:left;">Menu</th>
            <th style="padding:12px; text-align:center;">Jumlah</th>
            <th style="padding:12px; text-align:right;">Harga</th>
            <th style="padding:12px; text-align:right;">Subtotal</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pemesanan->details as $detail)
        <tr style="border-top:1px solid #eee;">
            <td style="padding:10px;">
                {{ $detail->menu->nama_menu }}
            </td>
            <td style="padding:10px; text-align:center;">
                {{ $detail->jumlah }}
            </td>
            <td style="padding:10px; text-align:right;">
                Rp {{ number_format($detail->menu->harga) }}
            </td>
            <td style="padding:10px; text-align:right;">
                Rp {{ number_format($detail->subtotal) }}
            </td>
        </tr>
        @endforeach
    </tbody>

    <tfoot style="background:#fafafa;">
        <tr>
            <th colspan="3" style="padding:12px; text-align:right;">
                Total
            </th>
            <th style="padding:12px; text-align:right; color:#e67e22;">
                Rp {{ number_format($pemesanan->details->sum('subtotal')) }}
            </th>
        </tr>
    </tfoot>
</table>
