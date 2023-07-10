<style>
    tbody > tr > td{
        border-color: #3d3939;
        border-style:solid;
        border-width: thin;
    }
</style>
<table class="table-responsive">
    <thead>
    <tr class="title">
        <td colspan="7" style="text-align: center">DAERAH IRIGASI DAN AREAL SAWAH TANDAH HUJAN</td>
    </tr>
    <tr class="title">
        <td colspan="7" style="text-align: center">UPTD PEKERJAAN UMUM DAN TATA RUANG</td>
    </tr>

    </thead>
    <tbody>
    <tr style="text-align: center">
        <td rowspan="2">No.</td>
        <td rowspan="2">Nama Daerah Irigasi</td>
        <td rowspan="2">Luas Areal Pemanfaatan (Ha)</td>
        <td colspan="2" style="text-align: center;">Volume</td>
        <td rowspan="2">Lokasi Desa/Kelurahan</td>
        <td rowspan="2">Keterangan</td>
    </tr>
    <tr style="text-align: center">
        <td>Panjang (m)</td>
        <td>Lebar (m)</td>
    </tr>
    @foreach($irigasi as $i)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$i->nama_daerah}}</td>
            <td style="text-align: right">{{$i->luas_area_label}}</td>
            <td style="text-align: right">{{$i->panjang_label}}</td>
            <td style="text-align: right">{{$i->lebar_label}}</td>
            <td>{{$i->desa}}</td>
            <td>{{$i->keterangan}}</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="2" style="text-align: center">JUMLAH</td>
        <td colspan="1" style="text-align: right">{{$i->sum('luas_area')}} Ha</td>
        <td colspan="1" style="text-align: right">{{$i->sum('panjang')}}m</td>
        <td colspan="1" style="text-align: right">{{$i->sum('lebar')}}m</td>
        <td colspan="1" style="text-align: right"></td>
        <td colspan="1" style="text-align: right"></td>
    </tr>
    </tbody>
</table>
