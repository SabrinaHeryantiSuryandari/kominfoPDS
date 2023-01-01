@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="col-12 grid-margin stretch-card">
    <div style="text-align: center">
        <font color="black">
            <p align="center"><b> DINAS KOMUNIKASI DAN INFORMATIKA </b></p>
            <p align="center"><b> PROVINSI JAWA TIMUR </b></p>
        </font>
        <hr>
        <p align="center"><u><b> NOTA DINAS </b></u></p>
    </div>
    <div class="row" style="font-family: Arial;">
        <table>
            <tr>
                {{-- <td style="text-indent: 45px;">Kepada</td> --}}
                <td>Kepada</td>
                <td>:</td>
                <td>Yth. Sdr. Pejabat Pembuat Komitmen Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
            </tr>

            <tr>
                <td>Dari</td>
                <td>:</td>
                <td>Kuasa Pengguna Anggaran</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>

            </tr>
            <tr>
                <td>Nomor</td>
                <td>:</td>
                <td>020/{{$pengadaan->nomor}}/114.6/{{$pengadaan->tanggal->format('Y')}}</td>
            </tr>
            <tr>
                <td>Sifat</td>
                <td>:</td>
                <td>Segera</td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td>1 (satu) berkas</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>:</td>
                <td>Pemrosesan Administrasi Pengadaan {{ $pengadaan->pengadaan->jenis_pengadaan}}</td>
            </tr>
        </table>
        <br>
    </div>
    <hr>
    <div class="row">
        <br>
        <table font-size="2">
            <tr>
                <td style="text-indent: 45px; text-align:justify;">Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{ $pengadaan->tanggal->format('Y')}}, kode rekening {{ $pengadaan->pengadaan->kode_rekening}} pengadaan {{ $pengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table width="565px" border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;">
            <thead>
                <tr align="center">
                    {{-- <th width="50px" scope="col">id pengadaan</th> --}}
                    <th width="50px" scope="col">No</th>
                    <th width="265px" scope="col">Belanja Alat/Bahan Untuk Kegiatan Kantor </th>
                    <th width="100px" scope="col">Jumlah Barang</th>
                    <th width="100px" scope="col">Satuan</th>
                    <th width="100px" scope="col">Harga Satuan</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($barang as $brg)

                <tr>
                    <th>{{$no++}}</th>
                    <!-- <th scope="row">{{$brg->pengadaan_id}}</th> -->
                    <td>{{$brg->barang}}</td>
                    <td align="center">{{$brg->jumlah_barang}}</td>
                    <td align="center">{{$brg->satuan}}</td>
                    <td align="center">Rp. {{number_format($brg->harga_satuan)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div>
        <table font-size="2">
            <tr>
                <td style="text-indent: 45px; text-align:justify;">Sehubungan dengan hal tersebut diatas, untuk penyedia Barang/Jasa ditunjuk {{$pengadaan->pengadaan->pelaksana->pt_pelaksana}} {{$pengadaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}. Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</td>
            </tr>
            <tr>
                <td style="text-indent: 45px;">Demikian untuk pelaksanaannya.</td>
            </tr>
        </table>
    </div>
    @php
    use App\Models\pejabat;
    $pejabat = Pejabat::all();
    @endphp
    <br>
    <br>
    <div style="text-align: center">
        <table style="width: 50%; text-align: left; float: right;">
            <tr>
                <td style="text-align: center">KUASA PENGGUNA ANGGARAN</td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <br>
        <table style="width: 50%; text-align: left; float: right;">
            @foreach ($pejabat as $pjb)
            <tr>
                <td style="text-align: center">
                    <!-- <u> Dra. Ec. NIRMALA DEWI, M.M</u> -->
                    <u> {{$pjb->kuasa_pengguna_anggaran}}</u>
                    <br>
                    NIP. {{$pjb->nip_kuasa_pengguna}}

                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>