<style>
    tbody > tr > td{
        border-color: #3d3939;
        border-style:solid;
        border-width: thin;
    }
</style>
<table style="width: 100%">
    <thead>
    <tr>
        <td COLSPAN="4" style="text-align: center">LAPORAN RUAS JALAN</td>
    </tr>

    </thead>
    <tbody>
    <tr style="text-align: center">
        <td>No. Urut</td>
        <td>
            Nomor Ruas
        </td>
        <td>
            Nama Ruas
        </td>
        <td>
            Panjang Ruas (KM)
        </td>
    </tr>
    @foreach($jalan as $j)
       <tr style="text-align: center">
           <td>{{$loop->index+1}}</td>
           <td>{{$j->nomor_ruas}}</td>
           <td>{{$j->nama_ruas}}</td>
           <td>{{$j->panjang_label}}</td>
       </tr>
    @endforeach
        <tr>
            <td colspan="3" style="text-align: center">TOTAL</td>
            <td colspan="1" style="text-align: center">{{$j->sum('panjang')}} KM</td>
        </tr>
    </tbody>
</table>
