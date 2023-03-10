@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
@section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection -->

<!-- Content Row -->

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
    <div class="card shadow">
        <div class="card-body">
            <table align="center" border="0">
                <tr>
                    <td style="vertical-align:top; text-align: center">
                        <u><b>LAPORAN PROSES PENGADAAN BARANG/JASA</b></u>
                    </td>
                <tr>
            </table>
            @php
                use App\Models\Jadwal;
                use App\Models\pejabat;
            
                $png = $pengadaan->pengadaan_id;
            
                $KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
                ->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
                ->get();
                $pejabat = Pejabat::all();
            
            @endphp
            
            <table align="center" border="0">
                <tr>
                    <td style="vertical-align:top; text-align: center">
                        <font size="3">Nomor</font>
                    </td>
                    <td style="vertical-align:top; text-align: center">
                        <font size="3">:</font>
                    </td>
                    <td style="vertical-align:top; text-align: center">
                        <font size="3">020/{{$pengadaan->nomor}} /114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</font>
                    </td>
                <tr>
            </table>
            
                <br>
                <div class="row">
                    <table width="700" align="center">
                        <tr>
                            <td style="vertical-align:top" width="8"></td>
                            <td style="vertical-align:top; text-align: justify; text-indent: 45px;">Pada hari ini {{$pengadaan->tanggal->isoFormat('dddd')}}, Tanggal {{$pengadaan->deskripsi_tgl}} Kami yang bertanda tangan dibawah ini :</td>
                        </tr>
                    </table>
                </div>
            
                @foreach ($pejabat as $pjb)
                <div>
                    <table width="700" align="center" border="0" align="">
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15">I.</td>
                            <td style="vertical-align:top" width="100">Nama</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="100">NIP</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370">{{$pjb->nip_pejabat_komitmen}}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="100">Jabatan</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370">Pejabat Pembuat Komitmen</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="100">Alamat</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370">Jl. A. Yani No. 242-244 Surabaya</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="470" colspan="3">Yang selanjutnya disebut <b>PIHAK KESATU</b> </td>
                        </tr>
                        <tr>
                            <td height="20"></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15">II.</td>
                            <td style="vertical-align:top" width="100">Nama</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370">{{$pjb->kuasa_pengguna_anggaran}}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="100">NIP</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370">{{$pjb->nip_kuasa_pengguna}}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="100">Jabatan</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370">Kuasa Pengguna Anggaran</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="100">Alamat</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370">Jl. Ahmad Yani 242 - 244 Surabaya</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="470" colspan="3">Yang selanjutnya disebut <b>PIHAK KEDUA</b> </td>
                    </table>
                </div>
                @endforeach
                <br>
                <div>
                    <table width="700" align="center" border="0" align="">
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="160" colspan="4">Dengan ini menyatakan bahwa :</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15">1.</td>
                            <td style="vertical-align:top" width="370" colspan="3"> <b>PIHAK KESATU</b> telah melaporkan pekerjaan sesuai dengan :</td>
                        </tr>
                @foreach ($KuitansiKontrak as $kk)
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="120">Kuitansi Kontrak nomor</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370"> 020/{{$kk->nomor}}/114.6/{{$kk->tanggal->format('Y')}}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="120">Tanggal</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370"> {{$kk->tanggal->isoFormat('D MMMM Y')}}</td>
                        </tr>
                @endforeach
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top" width="120">Pekerjaan</td>
                            <td style="vertical-align:top" width="5">:</td>
                            <td style="vertical-align:top" width="370"> {{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                        </tr>
                        <tr>
                            <td height="20"></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15; vertical-align: top;">2.</td>
                            <td style="vertical-align:top; text-align::right ;text-align: justify;" colspan="3"><b>PIHAK KEDUA</b> telah memeriksa dan menerima dengan baik kemajuan hasil pekerjaan tersebut, dengan rincian jumlah, jenis dan spesifikasi barang/jasa sebagaimana daftar terlampir.</td>
                        </tr>
                    </table>
                </div>
            
                <br>
                <div>
                    <table width="700" align="center" border="0" align="">
                        <tr>
                            <td style="vertical-align:top" width="25"></td>
                            <td style="vertical-align:top" width="15"></td>
                            <td style="vertical-align:top; text-align::right ;text-align: justify;">Demikian Berita Acara ini dibuat untuk dipergunakan seperlunya.
                            </td>
                        </tr>
                    </table>
                </div>
            
                <br>
                <div>
                    <table width="700" align="center" border="0" font-size="0">
                        <tr>
                            <td style="vertical-align:top" width="380"> </td>
                            <td style="vertical-align:top">Surabaya, {{$pengadaan->created_at->isoFormat('D MMMM Y')}}</td>
                            {{-- <td style="vertical-align:top" width="50"> </td> --}}
                        </tr>
                    </table>
                </div>
            
                <br>
                @foreach ($pejabat as $pjb)
                <div style="text-align:center ;">
                    <table width="700" align="center; text-align: center" border="0" font-size="0">
                        <tr>
                            <td style="vertical-align:top" width="20"> </td>
                            <td style="vertical-align:top" width="250"><b>PIHAK KEDUA</b></td>
                            <td style="vertical-align:top" width="250"><b>PIHAK KESATU</b></td>
                            <td style="vertical-align:top" width="20"> </td>
                        </tr>
                    </table>
                </div>
                <br><br><br><br>
                <div style="text-align:center ;">
                    <table width="700" align="center; text-align: center" border="0" font-size="0">
                        <tr>
                            <td style="vertical-align:top" width="20"> </td>
                            <td style="vertical-align:top" width="250"><u>{{$pjb->kuasa_pengguna_anggaran}}</u></td>
                            <td style="vertical-align:top" width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                            <td style="vertical-align:top" width="20"> </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="20"> </td>
                            <td style="vertical-align:top" width="250">NIP. {{$pjb->nip_kuasa_pengguna}} </td>
                            <td style="vertical-align:top" width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                            <td style="vertical-align:top" width="20"> </td>
                        </tr>
                    </table>
                </div>
                @endforeach
        </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
                <div >
                    <table width="700" align="center" border="0" font-size="0">
                        <tr>
                            <td width="8"></td>
                            <td colspan="3">Lampiran Laporan Proses Pengadaan Barang/Jasa</td>
                        </tr>
                        <tr>
                            <td width="8"></td>
                            <td width="30">Nomor</td>
                            <td width="10">:</td>
                            <td width="250">020/{{$pengadaan->nomor}} /114.6/{{$pengadaan->tanggal->isoFormat('Y')}}</td>
                        </tr>
                        <tr>
                            <td width="8"></td>
                            <td>Tanggal</td>
                            <td width="10">:</td>
                            <td width="250">{{$pengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="center">
                    <table width="700" border="1" align="center" style="color: #000000; border-color: #000000; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td style="vertical-align:top">
                                    <center><b>NO.</b></center>
                                </td>
                                <td style="vertical-align:top">
                                    <center><b>PEKERJAAN</b> </center>
                                </td>
                                <td style="vertical-align:top">
                                    <center><b>KUANTITAS</b> </center>
                                </td>
                                <td style="vertical-align:top">
                                    <center><b>SATUAN</b> </center>
                                </td>
                                <td style="vertical-align:top">
                                    <center><b>HARGA SATUAN</b> </center>
                                </td>
                                <td style="vertical-align:top">
                                    <center><b>JUMLAH HARGA</b> </center>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top; background-color: lightgrey;">
                                    <center><b>1</b></center>
                                </td>
                                <td style="vertical-align:top; background-color: lightgrey;">
                                    <center><b>2</b></center>
                                </td>
                                <td style="vertical-align:top; background-color: lightgrey;">
                                    <center><b>3</b></center>
                                </td>
                                <td style="vertical-align:top; background-color: lightgrey;">
                                    <center><b>4</b></center>
                                </td>
                                <td style="vertical-align:top; background-color: lightgrey;">
                                    <center><b>5</b></center>
                                </td>
                                <td style="vertical-align:top; background-color: lightgrey;">
                                    <center><b>6</b></center>
                                </td>
                            </tr>
                        </thead>
                        <tr>
                            <td style="vertical-align:top" height="20"></td>
                            <td style="vertical-align:top" height="20"></td>
                            <td style="vertical-align:top" height="20"></td>
                            <td style="vertical-align:top" height="20"></td>
                            <td style="vertical-align:top" height="20"></td>
                            <td style="vertical-align:top" height="20"></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">1</td>
                            <td style="vertical-align:top">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                        </tr>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($barang as $brg)
                            <tr>
                                <td style="vertical-align:top"></td>
                                <td style="vertical-align:top">{{$brg->barang}}</td>
                                <td style="vertical-align:top">{{$brg->jumlah_barang}}</td>
                                <td style="vertical-align:top">{{$brg->satuan}}</td>
                                <td style="vertical-align:top">Rp. {{number_format($brg->harga_satuan)}}</td>
                                <td style="vertical-align:top">Rp. {{number_format($brg->jumlah_harga)}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td style="vertical-align:top; text-align:right" colspan="5"><b>Total</b></td>
                                @php
                                $png = $pengadaan->pengadaan_id;
                                $sum = DB::table('barangs')
                                ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                                ->sum('jumlah_harga');
                                $ppn = $sum * 0.11;
                                @endphp
                                <td style="vertical-align:top">Rp. {{number_format($sum)}}</td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top; text-align:right" colspan="5"><b>PPN 11%</b></td>
                                <td style="vertical-align:top">Rp. {{number_format($ppn)}}</td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top; text-align:right" colspan="5"><b> Jumlah Total</b></td>
                                <td style="vertical-align:top">Rp. {{number_format($pengadaan->pengadaan->nilai_negosiasi)}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
                <br>
                @foreach ($pejabat as $pjb)
                <div style="text-align:center ;">
                    <table width="700" align="center" style="text-align: center" border="0" font-size="0">
                        <tr>
                            <td style="vertical-align:top" width="20"> </td>
                            <td style="vertical-align:top" width="250"><b>PIHAK KEDUA</b></td>
                            <td style="vertical-align:top" width="250"><b>PIHAK KESATU</b></td>
                            <td style="vertical-align:top" width="20"> </td>
                        </tr>
                    </table>
                </div>
                <br><br><br><br>
                <div style="text-align:center ;">
                    <table width="700" align="center" style="text-align: center" border="0" font-size="0">
                        <tr>
                            <td style="vertical-align:top" width="20"> </td>
                            <td style="vertical-align:top" width="250"><u>{{$pjb->kuasa_pengguna_anggaran}}</u></td>
                            <td style="vertical-align:top" width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                            <td style="vertical-align:top" width="20"> </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top" width="20"> </td>
                            <td style="vertical-align:top" width="250">NIP. {{$pjb->nip_kuasa_pengguna}} </td>
                            <td style="vertical-align:top" width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                            <td style="vertical-align:top" width="20"> </td>
                        </tr>
                    </table>
                </div>
                @endforeach
        </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
    <div class="modal-footer mt-3">
        <button onclick="history.back()" type="back" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
    </div>
</div>
@endsection