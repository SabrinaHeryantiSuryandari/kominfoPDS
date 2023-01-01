@extends('layouts/index')
@section('content')
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
@php
    use App\Models\pejabat;
    use App\Models\Jadwal;

    $pejabat = Pejabat::all();
    $no = 1; 

    $png = $pengadaan->id;
    
    //notadinas1
    $NotaDinasdariKPAkePPK = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Nota Dinas dari KPA ke PPK')
    ->get();
    //notadinas2
    $NotaDinasdariPPKkePejabatPengadaan = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Nota Dinas dari PPK ke Pejabat Pengadaan + Lampiran OE (HPS)')
    ->get();
    $SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa')
    ->get();
    $PaktaIntegritas = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Pakta Integritas')
    ->get();
    $DaftarHadir = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Daftar Hadir Pengembalian Dokumen Prakualifikasi')
    ->get();
    $BAEvaluasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'BA. Evaluasi Dokumen Prakualifikasi')
    ->get();
    $LampiranBAEvaluasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Lampiran BA. Evaluasi Dokumen Prakualifikasi')
    ->get();
    $SuratUndanganPermintaanPenawaranHarga = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Surat Undangan Permintaan Penawaran Harga')
    ->get();
    $BAPenjelasanPekerjaan = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'BA. Penjelasan Pekerjaan')
    ->get();
@endphp
{{-- nota dinas 1 --}}
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <div style="text-align: center">
                {{-- {{dd($NotaDinasdariKPAkePPK)}} --}}
                <font color="black" border="0" align="center" font-size="2">
                    <p align="center"><b> DINAS KOMUNIKASI DAN INFORMATIKA </b></p>
                    <p align="center"><b> PROVINSI JAWA TIMUR </b></p>
                </font>
                <hr width="630" colspan="2">
                <p align="center"><u><b> NOTA DINAS </b></u></p>
            </div>
            @foreach ($NotaDinasdariKPAkePPK as $NotaDinasdariKPAkePPK)
            <div style="font-family: Arial;">
                <table border="0" align="center" font-size="2">
                    {{-- <tr>
                        <td width="565" colspan="3"></td>
                    </tr> --}}
                    <tr>
                        {{-- <td style="text-indent: 45px;">Kepada</td> --}}
                        <td width="80" style="vertical-align:top">Kepada</td>
                        <td style="vertical-align:top">:</td>
                        <td width="480">Yth. Sdr. Pejabat Pembuat Komitmen Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
                    </tr>
        
                    <tr>
                        <td>Dari</td>
                        <td>:</td>
                        <td>Kuasa Pengguna Anggaran</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        {{-- <td>{{$jadwal}}</td> --}}
                            
                        {{-- <td>{{$NotaDinasdariKPAkePPK->tanggal}}</td> --}}
                        <td>{{$NotaDinasdariKPAkePPK->tanggal->isoFormat('D MMMM Y')}}</td>
                        {{-- <td>{{$NotaDinasdariKPAkePPK->tanggal->format('l, d F Y H:i')}}</td>
                        <td>{{date('d F Y', strtotime($NotaDinasdariKPAkePPK->tanggal))}}</td> --}}
                        
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>020/{{$NotaDinasdariKPAkePPK->nomor}}/114.6/{{$NotaDinasdariKPAkePPK->tanggal->format('Y')}}</td>
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
                        <td>Pemrosesan Administrasi Pengadaan {{ $NotaDinasdariKPAkePPK->pengadaan->jenis_pengadaan}}</td>
                    </tr>
                </table>
                <br>
            </div>
            <hr width="630" colspan="2">
            <br>
            <table border="0" font-size="2" align="center">
                <tr>
                    <td width="565" style="text-indent: 45px; text-align:justify;">Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{ $NotaDinasdariKPAkePPK->tanggal->format('Y')}}, kode rekening {{ $NotaDinasdariKPAkePPK->pengadaan->kode_rekening}} pengadaan {{ $NotaDinasdariKPAkePPK->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</td>
                </tr>
            </table>
            <br>
            <table width="565px" border="1" align="center" >
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
            <br>
            <table font-size="2" width="565" align="center">
                <tr>
                    <td style="text-indent: 45px; text-align:justify;">Sehubungan dengan hal tersebut diatas, untuk penyedia Barang/Jasa ditunjuk {{$NotaDinasdariKPAkePPK->pengadaan->pelaksana->pt_pelaksana}} {{$NotaDinasdariKPAkePPK->pengadaan->pelaksana->alamat}}, {{$NotaDinasdariKPAkePPK->pengadaan->pelaksana->kota}}. Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</td>
                </tr>
                <tr>
                    <td style="text-indent: 45px;">Demikian untuk pelaksanaannya.</td>
                </tr>
            </table>
            <br>
            <div style="text-align: center">
                <table border="0" style="text-align:center;">
                    <tr>
                        <td width="400"></td>
                        <td width="400" style="text-align:center ">KUASA PENGGUNA ANGGARAN</td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <br>
                <table style="text-align:center;">
                    @foreach ($pejabat as $pjb)
                    <tr>
                        <td width="400"></td>
                        <td width="400" style="text-align: center">
                            <!-- <u> Dra. Ec. NIRMALA DEWI, M.M</u> -->
                            <u> {{$pjb->kuasa_pengguna_anggaran}}</u>
                            <br>
                            NIP. {{$pjb->nip_kuasa_pengguna}}
        
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- nota dinas 2 --}}
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <div style="text-align: center">
                <font color="black" border="0" align="center" font-size="2">
                    <p align="center"><b> DINAS KOMUNIKASI DAN INFORMATIKA </b></p>
                    <p align="center"><b> PROVINSI JAWA TIMUR </b></p>
                </font>
                <hr width="630" colspan="2">
                <p align="center"><u><b> NOTA DINAS </b></u></p>
            </div>
            <br>
            @foreach ($NotaDinasdariPPKkePejabatPengadaan as $NotaDinasdariPPKkePejabatPengadaan)
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Kepada</td>
                    <td>:</td>
                    <td width="475">Yth. Sdr. Panitia Pengadaan Dinas Komunikasi dan</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80"> </td>
                    <td width="5"> </td>
                    <td width="475">Informatika Provinsi Jawa Timur</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Dari</td>
                    <td>:</td>
                    <td width="475">Pejabat Pembuat Komitmen</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Tanggal</td>
                    <td>:</td>
                    <td width="475">{{$NotaDinasdariPPKkePejabatPengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Nomor</td>
                    <td>:</td>
                    <td width="475">020/{{$NotaDinasdariPPKkePejabatPengadaan->nomor}}/114.6/2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Sifat</td>
                    <td>:</td>
                    <td width="475">Segera</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Lampiran</td>
                    <td>:</td>
                    <td width="475">1 (satu) berkas</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Perihal</td>
                    <td>:</td>
                    {{-- <td width="475">Pemrosesan Administrasi Pengadaan {{ $SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->tanggal }}</td> --}}
                    <td width="475">Pemrosesan Administrasi Pengadaan {{ $NotaDinasdariPPKkePejabatPengadaan->pengadaan->jenis_pengadaan }}</td>
                    {{-- <td width="475">Pemrosesan Administrasi Pengadaan {{ $jadwal->jenis_pengadaan }}</td> --}}
                </tr>
            </table>
            <hr width="630" colspan="2">
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565" style="text-indent: 45px; text-align: justify;">Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$NotaDinasdariPPKkePejabatPengadaan->tanggal->isoFormat('D MMMM Y')}}, kode rekening {{ $NotaDinasdariPPKkePejabatPengadaan->pengadaan->kode_rekening}} pengadaan {{ $NotaDinasdariPPKkePejabatPengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</td>
                </tr>
            </table>
            <br>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="50px" scope="col">id pengadaan</th>
                        {{-- <th width="50px" scope="col">No</th> --}}
                        <th width="265px" scope="col">Belanja Alat/Bahan Untuk Kegiatan Kantor </th>
                        <th width="100px" scope="col">Jumlah Barang</th>
                        <th width="100px" scope="col">Satuan</th>
                        <th width="100px" scope="col">Harga Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $brg)
                    <tr>
                        <th scope="row">{{$brg->pengadaan_id}}</th>
                        <td>{{$brg->barang}}</td>
                        <td align="center">{{$brg->jumlah_barang}}</ /td>
                        <td align="center">{{$brg->satuan}}</td>
                        <td align="center">Rp. {{number_format($brg->harga_satuan)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565" style="text-indent: 45px; text-align: justify;">Sehubungan dengan hal tersebut diatas, untuk penyedia Barang/Jasa ditunjuk {{$NotaDinasdariPPKkePejabatPengadaan->pengadaan->pelaksana->pt_pelaksana}}, {{$NotaDinasdariPPKkePejabatPengadaan->pengadaan->pelaksana->alamat}}. Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565" style="text-indent: 45px;">Demikian untuk pelaksanaannya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PEMBUAT KOMITMEN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"></td>
                    <td width="300" style="text-align: center">
                        <!-- <u> Dra. Ec. NIRMALA DEWI, M.M</u> -->
                        <u> {{$pjb->pejabat_pembuatan_komitmen}}</u>
                        <br>
                        NIP. {{$pjb->nip_pejabat_komitmen}}
                    </td>
                    <td width="50"> </td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
</div>
{{-- undangan persiapan --}}
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tr>
                    <td>
                        <img src="{{asset('img/logo_jatim.png')}}" width="70" height="70">
                    </td>
                    <td>
                        <center>
                            <font size="3"><b>PEMERINTAH PROVINSI JAWA TIMUR</b></font><br>
                            <font size="3">DINAS KOMUNIKASI DAN INFORMATIKA</font><br>
                            <font size="3">Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517</font><br>
                            <font size="3">Website : http://www.jatimprov.go.id </font><br>
                            <font size="2">Email:kominfo@jatimprov.go.id</font><br>
                            <font size="3">S U R A B A Y A-60235</font><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
            </table>
            @foreach ($SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa as $SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa)
            <table border="0" align="center">
                <tr>
                    <td width="270"> </td>
                    <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                    <td>Surabaya, {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->created_at->isoFormat('D MMMM Y')}}</td>
                    <td width="50"> </td>
                </tr>
                <tr>
                    <td width="270"> </td>
                    <td>Kepada</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="80">Nomor</td>
                    <td>:</td>
                    <!-- diubah -->
                    <td width="250">020/{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->nomor}}/114.6/{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->tanggal->isoFormat('Y')}}</td>
                    <td width="80">Yth. Sdr. </td>
                    <!-- diubah -->
                    <td width="250">{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->pelaksana->jabatan_pelaksana}} {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
                <tr>
                    <td width="80">Sifat</td>
                    <td>:</td>
                    <td width="175">Segera</td>
                    <td> </td>
                    <!-- diubah -->
                    <td>{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->pelaksana->alamat}}</td>
                </tr>
                <tr>
                    <td width="80">Lampiran</td>
                    <td>:</td>
                    <td width="175">-</td>
                    <td> </td>
                    <td>di</td>
                </tr>
                <tr>
                    <td width="80">Perihal</td>
                    <td>:</td>
                    <td width="175">Undangan Persiapan <br><u> Pengadaan Langsung</u></td>
                    <td></td>
                    <td><u><b>{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->pelaksana->kota}}</b></u></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Diberitahukan bahwa SKPD Dinas Komunikasi Dan Informatika Provinsi Jawa Timur akan melaksanakan Pengadaan Langsung, untuk :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140">Paket Pekerjaan</td>
                    <td width="10">:</td>
                    <!-- diubah -->
                    <td width="520" style="text-align: justify;">{{ $SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->jenis_pengadaan }}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140">Lingkup pekerjaan</td>
                    <td width="10">:</td>
                    <td width="520" style="text-align: justify;">PK melalui Pejabat Pengadaan mengundang Penyedia</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140"> </td>
                    <td width="10"> </td>
                    <td width="520" style="text-align: justify;"> Barang untuk menyampaikan penawaran atas paket pengadaan barang yang tercantum dalam Spesifikasi Teknis, Daftar Kuantitas dan Harga serta nomor pekerjaan yang tercantum dalam LDP. Penyedia Barang yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu dan perkiraan batas akhir waktu penyelesaian yang tercantum dalam LDP.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140">Sumber Dana</td>
                    <td width="10">:</td>
                    <td width="520" style="text-align: justify;"> APBD Provinsi Jawa Timur Tahun Anggaran 2022</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140">Nilai HPS</td>
                    <td width="10">:</td>
                    <td width="520" style="text-align: justify;">Rp. {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->total_hps}},- {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->deskripsi_hps}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="155"> </td>
                    <td> </td>
                    <!-- diubah -->
                    <td width="405"></td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Apabila saudara berminat untuk mengikuti paket pengadaan langsung tersebut diharap untuk menyerahkan formulir kualifikasi sebagaimana terlampir yang diisi dengan jelas dan benar, Formulir Kualifikasi tersebut paling lambat diserahkan pada :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140">Hari/Tanggal</td>
                    <td width="10">:</td>
                    <td width="520" style="text-align: justify;">{{ $SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->tanggal->isoFormat('dddd')}} / {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140">Jam</td>
                    <td width="10">:</td>
                    <td width="520" style="text-align: justify;">10.00 WIB</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140">Tempat</td>
                    <td width="10">:</td>
                    <td width="520" style="text-align: justify;">Ruang Argopuro lt.II Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Apabila sampai dengan jam tersebut diatas saudara tidak menyampaikan formulir prakualifikasi tersebut maka dianggap tidak berminat mengikuti pengadaan langsung. Apabila perusahaan saudara dianggap mampu maka akan diundang mengikuti proses pengadaan langsung untuk pekerjaan tersebut diatas.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-align: justify;">Demikian disampaikan atas perhatian dan partisipasi Saudara diucapkan terima kasih.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PENGADAAN</td>
                    <td width="20"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"></td>
                    <td width="300" style="text-align: center">
                        <!-- <u> Dra. Ec. NIRMALA DEWI, M.M</u> -->
                        <u> {{$pjb->pejabat_pengadaan}}</u>
                        <br>
                        NIP. {{$pjb->nip_pejabat_pengadaan}}
                    </td>
                    <td width="20"> </td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
</div>
{{-- pakta interitas --}}
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body" style="text-align:justify; vertical-align:top">
            <table border="0" align="center">
                <tr>
                    <td>
                        <center>
                            <font size="3"><b>PAKTA INTEGRITAS</b></font><br>
                    </td>
                </tr>
                {{-- <tr>
                    <td width="555" colspan="2"><hr></td>
                </tr>  --}}
            </table>
            <br>
            @foreach ($PaktaIntegritas as $PaktaIntegritas)
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="565">Saya yang bertandatangan di bawah ini, dalam rangka pengadaan {{$PaktaIntegritas->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur pada Satuan Kerja Perangkat Daerah Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$PaktaIntegritas->tanggal->isoFormat('Y')}}, dengan ini menyatakan bahwa saya :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="30" style="vertical-align:top">1.</td>
                    <td width="535">Tidak akan melakukan praktek KKN.</td>
                </tr>
                <tr>
                    <td width="30" style="vertical-align:top">2.</td>
                    <td width="535">Akan melaporkan kepada pihak yang berwajib/berwenang apabila mengetahui ada indikasi KKN di dalam proses pengadaan ini.</td>
                </tr>
                <tr>
                    <td width="30" style="vertical-align:top">3.</td>
                    <td width="535">Dalam proses pengadaan ini, berjanji akan melaksanakan tugas secara bersih, transparan, dan profesional dalam arti akan mengerahkan segala kemampuan dan sumber daya secara optimal untuk memberikan hasil kerja terbaik mulai dari penyiapan penawaran, pelaksanaan, dan penyelesaian pekerjaan/kegiatan ini.</td>
                </tr>
                <tr>
                    <td width="30" style="vertical-align:top">4.</td>
                    <td width="535">Apabila saya melanggar hal-hal yang telah saya nyatakan dalam <b>PAKTA INTEGRITAS</b> ini, saya bersedia dikenakan sanksi moral, sanksi administrasi serta dituntut ganti rugi dan pidana sesuai dengan ketentuan peraturan perundang-undangan yang berlaku.</td>
                </tr>
            </table>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>Surabaya, {{$PaktaIntegritas->tanggal->isoFormat('D MMMM Y')}}</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="25">1.</td>
                    <td width="260">{{$pjb->pejabat_pembuatan_komitmen}}</td>
                    <td>:</td>
                    <td width="280">Pengguna Barang/Jasa ..............................</td>
                </tr>
                <tr>
                    <td width="25"> </td>
                    <td width="260">Pejabat Pembuat Komitmen</td>
                    <td width="8"> </td>
                    <td width="280"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="25" >2.</td>
                    <td width="260">{{$pjb->pejabat_pengadaan}}</td>
                    {{-- <td width="260">ADI KURNIAWAN.S.Kom.,M.Kom</td> --}}
                    <td>:</td>
                    <td width="280">Pejabat Pengadaan Barang/Jasa ............</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="25">3.</td>
                    {{-- <td width="260">MANUHUTU ARMAND FX</td> --}}
                    <td width="260">{{$PaktaIntegritas->pengadaan->pelaksana->nama_pelaksana}}</td>
                    <td>:</td>
                    <td width="280">Penyedia Barang/Jasa ................................</td>
                </tr>
                <tr>
                    <td width="25"> </td>
                    <td width="260">{{$PaktaIntegritas->pengadaan->pelaksana->pt_pelaksana}}</td>
                    {{-- <td width="260">CV. PATRIA NUGRAHA</td> --}}
                    <td width="8"> </td>
                    <td width="280"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            @endforeach
        </div>
    </div>
</div>
{{-- daftar hadir --}}
<div class="col-21 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <center>
                <font size="3"><b>PEJABAT PENGADAAN BARANG/JASA DILINGKUNGAN</b></font><br>
                <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</b></font><br>
                <font size="3"><b>PROVINSI JAWA TIMUR</b></font><br>
            </center>
            <hr width="650" colspan="3">
            <br>
            <br>
            {{-- <table border="1" align="center">
                <tr>
                    <td> --}}
                        <center>
                            <font size="3"><b>DAFTAR HADIR</b></font><br><br>
                            @foreach ($DaftarHadir as $DaftarHadir)
                            <font size="3"><b>PENGEMBALIAN DOKUMEN PRAKUALIFIKASI</b></font><br>
                            <font size="2"><b>{{$DaftarHadir->pengadaan->jenis_pengadaan}}</b></font><br>
                            <!-- <font size="2"><b>Statistik Sektoral Toner Printer</b></font><br> -->
                        </center>
                    {{-- </td>
                </tr>
            </table> --}}
            <br>
            <br>
            <table width="685" border="1" align="center" >
                <thead style="background-color: lightgrey;">
                    <tr align="center">
                        <th width="30px" scope="col">No</th>
                        <th width="121" scope="col">Nama Perusahaan</th>
                        <th width="160" scope="col">Alamat dan No.Telepon</th>
                        <th width="121" scope="col">Tanggal</th>
                        <th width="111" scope="col">Tanda Tangan</th>
                    </tr>
                    <tr align="center">
                        <th scope="col">1</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                        <th scope="col">4</th>
                        <th scope="col">5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td height="15"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr height="100">
                        <td >1</td>
                        <td>{{$DaftarHadir->pengadaan->pelaksana->pt_pelaksana}}</td>
                        <td>{{$DaftarHadir->pengadaan->pelaksana->alamat}}</td>
                        <td>{{$DaftarHadir->tanggal->isoFormat('D MMMM Y')}}</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td height="15"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>Surabaya, {{$DaftarHadir->tanggal->isoFormat('D MMMM Y')}}</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PENGADAAN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"></td>
                    <td width="300" style="text-align: center">
                        <!-- <u> Dra. Ec. NIRMALA DEWI, M.M</u> -->
                        <u> {{$pjb->pejabat_pengadaan}}</u>
                        <br>
                        NIP. {{$pjb->nip_pejabat_pengadaan}}
                    </td>
                    <td width="20"> </td>
                </tr>
            </table>
            <br>
            @endforeach
        </div>
    </div>
</div>
{{-- ba evaluasi --}}
<div class="col-21 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tr>
                    <td>
                        <img src="{{asset('img/logo_jatim.png')}}" width="70" height="70">
                    </td>
                    <td>
                        <center>
                            <font size="3"><b>PEMERINTAH PROVINSI JAWA TIMUR</b></font><br>
                            <font size="3">DINAS KOMUNIKASI DAN INFORMATIKA</font><br>
                            <font size="3">Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517</font><br>
                            <font size="3">Website : http://www.jatimprov.go.id </font><br>
                            <font size="2">Email:kominfo@jatimprov.go.id</font><br>
                            <font size="3">S U R A B A Y A-60235</font><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr width="630" colspan="2">
                    </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b><u>BERITA ACARA EVALUASI DOKUMEN PRAKUALIFIKASI</u></b>
                    </td>
                <tr>
            </table>
            @foreach ($BAEvaluasi as $BAEvaluasi)
            <table border="0" align="center">
                <tr>
                    <td width="50">
                        <center>
                            <font size="2">Nomor</font>
                    </td>
                    <td>
                        <center>
                            <font size="2">:</font>
                    </td>
                    <td width="150">
                        <center>
                            <font size="2">020/{{$BAEvaluasi->nomor}}/114.6/{{$BAEvaluasi->tanggal->isoFormat('Y')}}</font>
                    </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Pada hari ini {{$BAEvaluasi->tanggal->isoFormat('dddd')}} Tanggal {{$BAEvaluasi->deskripsi_tgl}}, dimulai pukul 10.00 WIB sampai dengan selesai, Pejabat Pengadaan di Lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur tanggal {{$BAEvaluasi->tanggal->isoFormat('D MMMM Y')}} Nomor : 188/19/114.1/2022, telah mengadakan rapat penjelasan untuk pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="250">NAMA PERUSAHAAN</td>
                    <td width="10">:</td>
                    <td width="410" style="text-align: justify;">{{$BAEvaluasi->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="250">ALAMAT</td>
                    <td width="10">:</td>
                    <td width="410" style="text-align: justify;">{{$BAEvaluasi->pengadaan->pelaksana->alamat}}, {{$BAEvaluasi->pengadaan->pelaksana->kota}}</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="250">NOMOR POKOK WAJIB PAJAK</td>
                    <td width="10">:</td>
                    <td width="410" style="text-align: justify;">{{$BAEvaluasi->pengadaan->pelaksana->npwp}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670">Dengan hasil sebagai berikut :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-align: justify;">Setelah mengadakan penelitian dan penilaian secara seksama terhadap dokumen prakualifikasi yang diserahkan penyedia barang/jasa, maka Pejabat Pengadaan Barang/Jasa di Lingkungan Dinas Komunikasi dan Informatika provinsi Jawa Timur memutuskan bahwa calon penyedia barang/jasa tersebut memenuhi syarat untuk melanjutkan kegiatan penunjukan langsung selanjutnya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-align: justify;">Demikian Berita Acara evaluasi dokumen prakualifikasi ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan selanjutnya.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="480"> </td>
                    <td>PEJABAT PENGADAAN</td>
                    <td width="50"> </td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="300"></td>
                    <td width="300" style="text-align: center">
                        {{-- <!-- <u> Dra. Ec. NIRMALA DEWI, M.M</u> --> --}}
                        <u> {{$pjb->pejabat_pengadaan}}</u>
                        <br>
                        NIP. {{$pjb->nip_pejabat_pengadaan}}
                    </td>
                    <td width="20"> </td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
</div>
{{-- lampiran ba evaluasi --}}
<div class="col-21 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body ">
            <table border="0">
                <tr>
                    <td width="20"></td>
                    <td width="150">DAFTAR</td>
                    <td>:</td>
                    <td width="560">Evaluasi Dokumen Prakualifikasi</td>
                </tr>
            </table>
            @foreach ($LampiranBAEvaluasi as $LampiranBAEvaluasi)
            <table border="0">
                <tr>
                    <td width="20"></td>
                    <td width="100">PEKERJAAN</td>
                    <td width="30">:</td>
                    <td width="430">{{$LampiranBAEvaluasi->pengadaan->jenis_pengadaan}}</td>
                </tr>
                <tr>
                    <td width="20"></td>
                    <td width="100">KEPERLUAN</td>
                    <td width="30">:</td>
                    <td width="430">Dinas Komunikasi Dan Informatika Profinsi Jawa Timur</td>
                </tr>
                <tr>
                    <td width="20"></td>
                    <td width="100">Tanggal</td>
                    <td width="30">:</td>
                    <td width="430">{{$LampiranBAEvaluasi->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
            <br>
            <table style="width:100%; text-align: center" border="1" font-size="0">
                <tr>
                    <td rowspan="3" > NO </td>
                    <td rowspan="3" > Nama Perusahaan </td>
                    <td rowspan="3" > Surat Pernyataan Minat </td>
                    <td rowspan="3" > Pakta Integritas </td>
                    <td colspan="8" > Formulir Isian Penilaian Kualifikasi </td>
                    <td rowspan="3" > Keterangan </td>
                </tr>
                <tr>
                    <td rowspan="2" > Data Administras </td>
                    <td rowspan="2" > Ijin Usaha </td>
                    <td rowspan="2" > Landasan Hukum Pendirian BU </td>
                    <td rowspan="2" > Pengurus </td>
                    <td colspan="4" > P a j a k </td>
                </tr>
                <tr>
                    <td> NPWP dan PKP </td>
                    <td> Bukti Pelunasan Pajak Tahun Terakhir </td>
                    <td> Laporan Bulanan PPh/PPN 3 Bulan Terakhir </td>
                    <td> Data Pengalaman Kerja </td>
                </tr>
                <tr>
                    <td> 1 </td>
                    <td> 2 </td>
                    <td> 3 </td>
                    <td> 4 </td>
                    <td> 5 </td>
                    <td> 6 </td>
                    <td> 7 </td>
                    <td> 8 </td>
                    <td> 9 </td>
                    <td> 10 </td>
                    <td> 11 </td>
                    <td> 12 </td>
                    <td> 13 </td>
                </tr>
                <tr>
                    <td rowspan="2" > 1 </td>
                    <td rowspan="2" > {{$LampiranBAEvaluasi->pengadaan->pelaksana->pt_pelaksana}} </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a> </td>
                    <td rowspan="2" > LULUS </td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td><b><u>Keterangan</u></b></td>
                    <td><b>:</b></td>
                </tr>
                <tr>
                    <td><a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check'/></a></td>
                    <td>.............</td>
                    <td>Persyaratan dipenuhi</td>
                </tr>
                <tr>
                    <td><a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/3JTQq0gH/minus.jpg' width="50" height="30" border='0' alt='minus'/></a></td>
                    <td>.............</td>
                    <td>Persyaratan belum dipenuhi</td>
                </tr>
            </table>
            <br>
            <br><br><br>
                <table border="0" >
                    <tr>
                        <td width="600"></td>
                        <td width="600" style="text-align:center ">PEJABAT PENGADAAN</td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <br>
                <table style="text-align:center;">
                    <tr>
                        <td width="600"></td>
                        <td width="600" style="text-align: center">
                            <!-- <u> Dra. Ec. NIRMALA DEWI, M.M</u> -->
                            <u> {{$pjb->pejabat_pengadaan}}</u>
                            <br>
                            NIP. {{$pjb->nip_pejabat_pengadaan}}
                        </td>
                    </tr>
                </table>
            @endforeach
        </div>
    </div>
</div>
{{-- undangan_penawaran --}}
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tr>
                    <td>
                        <img src="{{asset('img/logo_jatim.png')}}" width="70" height="70">
                    </td>
                    <td>
                        <center>
                            <font size="3"><b>PEMERINTAH PROVINSI JAWA TIMUR</b></font><br>
                            <font size="3">DINAS KOMUNIKASI DAN INFORMATIKA</font><br>
                            <font size="3">Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517</font><br>
                            <font size="3">Website : http://www.jatimprov.go.id </font><br>
                            <font size="2">Email:kominfo@jatimprov.go.id</font><br>
                            <font size="3">S U R A B A Y A-60235</font><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
            </table>
                @foreach ($SuratUndanganPermintaanPenawaranHarga as $SuratUndanganPermintaanPenawaranHarga)
                <table border="0" align="center">
                    <tr>
                        <td width="270"> </td>
                        <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                        <td>Surabaya, {{$SuratUndanganPermintaanPenawaranHarga->tanggal->isoFormat('D MMMM Y')}}</td>
                        <td width="50"> </td>
                    </tr>
                    <tr>
                        <td width="270"> </td>
                        <td>Kepada</td>
                        <td width="50"> </td>
                    </tr>
                </table>
                <br>
                <table border="0" align="center" font-size="2">
                    <tr>
                        <td width="80">Nomor</td>
                        <td>:</td>
                        <!-- diubah -->
                        <td width="250">020/{{$SuratUndanganPermintaanPenawaranHarga->nomor}}/114.6/{{$SuratUndanganPermintaanPenawaranHarga->tanggal->isoFormat('Y')}}</td>
                        <td width="80">Yth. Sdr. </td>
                        <!-- diubah -->
                        <td width="250">{{$SuratUndanganPermintaanPenawaranHarga->pengadaan->pelaksana->jabatan_pelaksana}} {{$SuratUndanganPermintaanPenawaranHarga->pengadaan->pelaksana->pt_pelaksana}}</td>
                    </tr>
                    <tr>
                        <td width="80">Sifat</td>
                        <td>:</td>
                        <td width="175">Segera</td>
                        <td> </td>
                        <!-- diubah -->
                        <td>{{$SuratUndanganPermintaanPenawaranHarga->pengadaan->pelaksana->alamat}}</td>
                    </tr>
                    <tr>
                        <td width="80">Lampiran</td>
                        <td>:</td>
                        <td width="175">-</td>
                        <td> </td>
                        <td>di</td>
                    </tr>
                    <tr>
                        <td width="80">Perihal</td>
                        <td>:</td>
                        <td width="175">Undangan Permintaan <br><u> Penawaran Harga</u>
                        </td>
                        <td></td>
                        <td><u><b>{{$SuratUndanganPermintaanPenawaranHarga->pengadaan->pelaksana->kota}}</b></u></td>
                    </tr>
                </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Bahwa dalam rangka pelaksanaan proses pengadaan langsung, untuk :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Paket Pekerjaan</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <!-- diubah -->
                    <td width="520" style="text-align: justify;">{{ $SuratUndanganPermintaanPenawaranHarga->pengadaan->jenis_pengadaan }}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Lingkup pekerjaan</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">PK melalui Pejabat Pengadaan mengundang Penyedia Barang untuk menyampaikan penawaran atas paket pengadaan barang yang tercantum dalam Spesifikasi Teknis, Daftar Kuantitas dan Harga serta nomor pekerjaan yang tercantum dalam LDP. Penyedia Barang yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu dan perkiraan batas akhir waktu penyelesaian yang tercantum dalam LDP.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Sumber Dana</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;"> APBD Provinsi Jawa Timur Tahun Anggaran {{$SuratUndanganPermintaanPenawaranHarga->tanggal->isoFormat('Y')}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Nilai HPS</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">Rp. {{$SuratUndanganPermintaanPenawaranHarga->pengadaan->total_hps}},- {{$SuratUndanganPermintaanPenawaranHarga->pengadaan->deskripsi_hps}}</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-align: justify; text-indent: 45px;">Diharap saudara untuk menyampaikan dokumen penawaran paling lambat pada :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Hari/Tanggal</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">{{ $SuratUndanganPermintaanPenawaranHarga->tanggal->isoFormat('dddd')}} / {{$SuratUndanganPermintaanPenawaranHarga->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Jam</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">10.00 WIB</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="140" style="vertical-align:top">Tempat</td>
                    <td width="10" style="vertical-align:top">:</td>
                    <td width="520" style="text-align: justify;">Ruang Argopuro lt.II Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style=" text-align: justify;">Sebelum batas waktu penyampaian dokumen penawaran apabila dalam dokumen Pengadaan Langsung sebagaimana terlampir terdapat hal yang tidak jelas atau perlu penjelasan maka dapat ditanyakan kepada Pejabat Pengadaan.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Demikian disampaikan atas perhatian dan partisipasi Saudara diucapkan terima kasih.</td>
                </tr>
            </table>
            <br>
            <div class="center">
                <table border="0" align="center" width="650">
                    <tr>
                        <td width="325"> </td>
                        <td width="325" align="center">PEJABAT PENGADAAN</td>
                        {{-- <td width="50"> </td> --}}
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <table border="0" align="center" width="650">
                    <tr>
                        <td  width="325"> </td>
                        <td  width="325" align="center"><u>{{$pjb->pejabat_pengadaan}}</u></td>
                    </tr>
                    <tr>
                        <td  width="325"> </td>
                        <td  width="325" align="center">NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- ba_pekerjaan --}}
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tbody>
                    <tr>
                        <td>
                            <center>
                                <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                                <font size="3"><b>PROVINSI JAWA TIMUR<b /></font><br>
                        </td>
                    </tr>
                    <tr>
                        <td width="555" colspan="2">
                            <hr>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b><u>BERITA ACARA PENJELASAN PEKERJAAN</u></b>
                    </td>
                <tr>
            </table>
            @foreach ($BAPenjelasanPekerjaan as $BAPenjelasanPekerjaan)
            <table border="0" align="center">
                <tr>
                    <td width="50">
                        <center>
                            <font size="2">Nomor</font>
                    </td>
                    <td>
                        <center>
                            <font size="2">:</font>
                    </td>
                    <td width="150">
                        <center>
                            <font size="2">020/{{$BAPenjelasanPekerjaan->nomor}}/114.6/{{$BAPenjelasanPekerjaan->tanggal->isoFormat('Y')}}</font>
                    </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Pada hari ini {{$BAPenjelasanPekerjaan->tanggal->isoFormat('dddd')}} Tanggal {{$BAPenjelasanPekerjaan->deskripsi_tgl}}, dimulai pukul 10.00 WIB sampai dengan selesai, Pejabat Pengadaan di Lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur tanggal @foreach ($pejabat as $pejabat) {{$pejabat->tanggal_sk->isoFormat('D MMMM Y')}} Nomor : {{$pejabat->nomor_sk}}@endforeach , telah mengadakan rapat penjelasan untuk pengadaan {{$BAPenjelasanPekerjaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670">Dalam rapat penjelasan tersebut tersusun pokok acara sebagai berikut :</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td>1.</td>
                    <td width="13"></td>
                    <td width="640" style="text-align: justify;">Pembukaan oleh Pejabat Pengadaan kepada semua yang hadir.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td>2.</td>
                    <td width="13"></td>
                    <td width="640" style="text-align: justify;">Penjelasan seluruh isi Dokumen Pengadaan Langsung.</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td>3.</td>
                    <td width="13"></td>
                    <td width="640" style="text-align: justify;">Nilai HPS/OE untuk pekerjaan ini adalah Rp. {{number_format($BAPenjelasanPekerjaan->pengadaan->total_hps)}},- {{$BAPenjelasanPekerjaan->pengadaan->deskripsi_hps}}).</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="670">Pokok-Pokok Penjelasan lainnya antara lain sebagai berikut :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>DOKUMEN PENGADAAN</b>
                    </td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>BAB I INSTRUKSI KEPADA PESERTA PENGADAAN (LKPP)</b>
                    </td>
                <tr>
            </table>
            <!-- A -->
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="8"><b>A.</b></td>
                    <td colspan="2"><b>UMUM</b></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Lingkup Pekerjaan.....................................................................................................................................</td>
                    <td width="5">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Sumber Dana..............................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Peserta Pengadaan...................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Larangan Korupsi, Kolusi, dan Nepotisme (KKN) serta Penipuan..............................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Larangan Pertentangan Kepentingan.................................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>

            <!-- B -->
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="8"><b>B.</b></td>
                    <td colspan="2"><b>DOKUMEN PENGADAAN</b></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Dokumen Penawaran...............................................................................................................................</td>
                    <td width="5">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Harga Penawaran......................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Mata Uang Penawaran dan Cara Pembayaran.................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Masa Berlaku Penawaran dan Jangka Waktu Pelaksanaan.........................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Pakta Integritas...........................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Bentuk Dokumen Penawaran.................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>

            <!-- C -->
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="8"><b>C.</b></td>
                    <td colspan="2"><b>PEMASUKAN DOKUMEN PENAWARAN</b></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Penyampulan dan Penandaan Sampul Penawaran........................................................................</td>
                    <td width="5">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Penyampaian Dokumen Penawaran.....................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Batas Akhir Waktu Pemasukan Penawaran.......................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>

            <!-- D -->
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="8"><b>D.</b></td>
                    <td colspan="2"><b>PEMBUKAAN DAN EVALUASI PENAWARAN</b></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Pembukaan Penawaran............................................................................................................................</td>
                    <td width="5">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Evaluasi Penawaran...................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>
            <br>
        </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <table border="0" align="center">
                <tr>
                    <td width="670" style="text-indent: 45px; text-align: justify;">Demikian Berita Acara Penjelasan dalam rangka Pengadaan Langsung untuk pengadaan {{ $BAPenjelasanPekerjaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya, dibuat dengan sesungguhnya sebagai pertemuan Pejabat Pengadaan dengan peserta Pengadaan Langsung dan merupakan kelengkapan yang tidak terpisahkan dari Dokumen Pengadaan pekerjaan ini.</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>PIHAK PEJABAT PEMBUAT KOMITMEN</b>
                    </td>
                <tr>
            </table>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th style="background-color: lightgrey;" width="50px" scope="col">No</th>
                        <th style="background-color: lightgrey;" width="200px" scope="col">Nama</th>
                        <th style="background-color: lightgrey;" width="165px" scope="col">Jabatan</th>
                        <th style="background-color: lightgrey;" width="100px" scope="col">Tanda Tangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center" height="100">
                        <th scope="row">1</th>
                        <td>{{$pjb->pejabat_pembuatan_komitmen}}</td>
                        <td>Pejabat Pembuat Komitmen</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>PIHAK PEJABAT PENGADAAN</b>
                    </td>
                <tr>
            </table>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th style="background-color: lightgrey;" width="50px" scope="col">No</th>
                        <th style="background-color: lightgrey;" width="200px" scope="col">Nama</th>
                        <th style="background-color: lightgrey;" width="165px" scope="col">Jabatan</th>
                        <th style="background-color: lightgrey;" width="100px" scope="col">Tanda Tangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center" height="100">
                        <th scope="row">1</th>
                        <td>{{$pjb->pejabat_pengadaan}}</td>
                        <td>Pejabat Pengadaan</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>PIHAK PENYEDIA BARANG/JASA</b>
                    </td>
                <tr>
            </table>
            <table width="565px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th style="background-color: lightgrey;" width="50px" scope="col">No</th>
                        <th style="background-color: lightgrey;" width="200px" scope="col">Nama</th>
                        <th style="background-color: lightgrey;" width="165px" scope="col">Jabatan</th>
                        <th style="background-color: lightgrey;" width="100px" scope="col">Tanda Tangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center" height="100">
                        <th scope="row">1</th>
                        <td>{{$BAPenjelasanPekerjaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                        <td>{{$BAPenjelasanPekerjaan->pengadaan->pelaksana->jabatan_pelaksana}} {{$BAPenjelasanPekerjaan->pengadaan->pelaksana->pt_prlaksana}}</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <br>
            @endforeach
        </div>
    </div>
</div>
{{-- ba penawaran --}}

{{-- undagan_nego --}}

{{-- ba_nego.blade --}}

{{-- penetapan_penyedia --}}

{{-- nota_dinas3 --}}

{{-- undangan_penyedia --}}

{{-- surat_perintah_kerja --}}

{{-- surat_perintah_mulai_kerja --}}

{{-- ba_serah_terima --}}

{{-- ba_peny_barang --}}


{{-- keluar --}}
<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
    </div>
</div>




@endsection