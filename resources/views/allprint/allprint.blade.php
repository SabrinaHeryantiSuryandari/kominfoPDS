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

//undangan_persiapan
$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Surat Undangan, Pengambilan Dokumen Kualifikasi dan Dokumen Pengadaan Langsung kepada Penyedia Barang/Jasa')
->get();

//pakta_integritas
$PaktaIntegritas = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Pakta Integritas')
->get();

//surat pernyataan minat
//pemasukkan dokumen

//daftar hadir
$DaftarHadir = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Daftar Hadir Pengembalian Dokumen Prakualifikasi')
->get();

//ba_evaluasi
$BAEvaluasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'BA. Evaluasi Dokumen Prakualifikasi')
->get();

//lampiran_ba_evaluasi
$LampiranBAEvaluasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Lampiran BA. Evaluasi Dokumen Prakualifikasi')
->get();

//undangan_penawaran
$SuratUndanganPermintaanPenawaranHarga = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Surat Undangan Permintaan Penawaran Harga')
->get();

//ba_pekerjaan
$BAPenjelasanPekerjaan = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'BA. Penjelasan Pekerjaan')
->get();

//Pemasukan Penawaran

//ba_penawaran
$BAPembukaanPenawaran = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'BA. Pembukaan Penawaran')
->get();

//undangan_nego
$SuratUndanganKlarifikasiNegosiasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Surat Undangan Klarifikasi/Negosiasi')
->get();

//ba_nego
$BAKlarifikasiNegosiasi = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'BA. Klarifikasi/Negosiasi')
->get();


//penetapan_penyedia
$PenetapanPenyediaJasa = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Penetapan Penyedia Jasa')
->get();

//Nota Dinas 3
$NotaDinasdariPejabatPengadaankePPK = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Nota Dinas dari Pejabat Pengadaan ke PPK')
->get();

//undangan penyedia
$PenunjukanPenyediaBarangJasa = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Penunjukan Penyedia Barang/Jasa')
->get();

//Surat Perintah Kerja
$SuratPerintahKerja = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Surat Perintah Kerja')
->get();

//Surat Perintah Mulai Kerja
$SuratPerintahMulaiKerja = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Surat Perintah Mulai Kerja (SPMK)')
->get();

//BA Serah Terima Hasil Pekerjaan
$BASerahTerimaHasilPekerjaan = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'BA. Serah Terima Hasil Pekerjaan')
->get();

//Laporan Proses Pengadaan Barang/Jasa
$LaporanProsesPengadaanBarangJasa = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Laporan Proses Pengadaan Barang/Jasa')
->get();

//BA. Penyerahan Barang/Jasa
$BAPenyerahanBarangJasa = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'BA. Penyerahan Barang/Jasa')
->get();

//BA. Hasil Pembayaran
$BAHasilPembayaran = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'BA. Hasil Pembayaran')
->get();

//Kuitansi Kontrak
$KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
->get();

//Intruksi Kepada Peserta Pengadaan (IKPP)
$IntruksiKepadaPesertaPengadaan = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Intruksi Kepada Peserta Pengadaan (IKPP)')
->get();

//Term Of Refference (TOR)
$TermOfRefference = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'Term Of Refference (TOR)')
->get();

$BeritaAcaraHasilPengadaanLangsung = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
->where('jadwals.kegiatan', '=', 'BA. Hasil Pengadaan Langsung')
->get();
@endphp

<!-- nota dinas 1 -->
<div class="col-12 grid-margin stretch-card">
    <div style="text-align: center">
        <font color="black">
            <p align="center"><b> DINAS KOMUNIKASI DAN INFORMATIKA </b></p>
            <p align="center"><b> PROVINSI JAWA TIMUR </b></p>
        </font>
        <hr>
        <p align="center"><u><b> NOTA DINAS </b></u></p>
    </div>
    @foreach ($NotaDinasdariKPAkePPK as $NotaDinasdariKPAkePPK)
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
                <td>{{$NotaDinasdariKPAkePPK->tanggal->isoFormat('D MMMM Y')}}</td>

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
    <hr>
    <div class="row">
        <br>
        <table font-size="2">
            <tr>
                <td style="text-indent: 45px; text-align:justify;">Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{ $NotaDinasdariKPAkePPK->tanggal->format('Y')}}, kode rekening {{ $NotaDinasdariKPAkePPK->pengadaan->kode_rekening}} pengadaan {{ $NotaDinasdariKPAkePPK->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table width="565px" border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;">
            <thead>
                <tr align="center">
                    {{-- <th width="50px" scope="col">id NotaDinasdariKPAkePPK</th> --}}
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
                    {{-- <!-- <th scope="row">{{$brg->pengadaan_id}}</th> --> --}}
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
                <td style="text-indent: 45px; text-align:justify;">Sehubungan dengan hal tersebut diatas, untuk penyedia Barang/Jasa ditunjuk {{$NotaDinasdariKPAkePPK->pengadaan->pelaksana->pt_pelaksana}} {{$NotaDinasdariKPAkePPK->pengadaan->pelaksana->alamat}}, {{$NotaDinasdariKPAkePPK->pengadaan->pelaksana->kota}}. Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</td>
            </tr>
            <tr>
                <td style="text-indent: 45px;">Demikian untuk pelaksanaannya.</td>
            </tr>
        </table>
    </div>

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
@endforeach


<!-- nota dinas 2 -->
<div style="page-break-before: always;">
    <div class="col-12 grid-margin stretch-card">
        <div style="text-align: center">
            <font color="black">
                <p align="center"><b> DINAS KOMUNIKASI DAN INFORMATIKA </b></p>
                <p align="center"><b> PROVINSI JAWA TIMUR </b></p>
            </font>
            <hr>
            <p align="center"><u><b> NOTA DINAS </b></u></p>
        </div>
        @foreach ($NotaDinasdariPPKkePejabatPengadaan as $NotaDinasdariPPKkePejabatPengadaan)
        <div class="row" style="font-family: Arial;">
            <table>
                <tr>
                    <td>Kepada</td>
                    <td>:</td>
                    <td>Yth. Sdr. Panitia Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
                </tr>

                <tr>
                    <td>Dari</td>
                    <td>:</td>
                    <td>Pejabat Pembuat Komitmen</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{$NotaDinasdariPPKkePejabatPengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
                <tr>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>020/{{$NotaDinasdariPPKkePejabatPengadaan->nomor}}/114.6/{{$NotaDinasdariPPKkePejabatPengadaan->tanggal->isoFormat('Y')}}</td>
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
                    <td>Pemrosesan Administrasi Pengadaan {{ $NotaDinasdariPPKkePejabatPengadaan->pengadaan->jenis_pengadaan}}</td>
                </tr>
            </table>
            <br>
        </div>
        <hr>
        <div class="row">
            <br>
            <table font-size="2">
                <tr>
                    <td style="text-indent: 45px; text-align:justify;">Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$NotaDinasdariPPKkePejabatPengadaan->tanggal->isoFormat('Y')}}, kode rekening {{ $NotaDinasdariPPKkePejabatPengadaan->pengadaan->kode_rekening}} pengadaan {{ $NotaDinasdariPPKkePejabatPengadaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</td>
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
                    @php $no = 1; @endphp
                    @foreach ($barang as $brg)

                    <tr>
                        <th>{{$no++}}</th>
                        {{-- <th scope="row">{{$brg->pengadaan_id}}</th> --}}
                        <td>{{$brg->barang}}</td>
                        <td align="center">{{$brg->jumlah_barang}}</ /td>
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
                    <td style="text-indent: 45px; text-align:justify">Sehubungan dengan hal tersebut diatas, untuk penyedia Barang/Jasa ditunjuk {{$NotaDinasdariPPKkePejabatPengadaan->pengadaan->pelaksana->pt_pelaksana}}, {{$NotaDinasdariPPKkePejabatPengadaan->pengadaan->pelaksana->alamat}}. Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</td>
                </tr>
                <tr>
                    <td style="text-indent: 45px;">Demikian untuk pelaksanaannya.</td>
                </tr>
            </table>
            <br>
        </div>

        <div style="text-align: center">
            <table style="width: 50%; text-align: left; float: right;">
                <tr>
                    <td>PEJABAT PEMBUAT KOMITMEN</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <table style="width: 50%; text-align: left; float: right;">
                @foreach ($pejabat as $pjb)
                <tr>
                    <td>
                        <u>{{$pjb->pejabat_pembuatan_komitmen}}</u>
                        <br>
                        NIP. {{$pjb->nip_pejabat_komitmen}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        @endforeach
    </div>
</div>

<!-- undangan persiapan -->
<div style="page-break-before: always;">
    {{-- //kopsurat --}}
    <div>
        <table class="table" border="0" align="center">
            <tr>
                <td>
                    <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                </td>
                <td width="40"> </td>
                <td style="text-align: center" width="500px">
                    <font color="black">
                        <p align="center">
                            <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                            <br> DINAS KOMUNIKASI DAN INFORMATIKA
                            <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                            <br> Website : http://www.jatimprov.go.id
                            <br> Email:kominfo@jatimprov.go.id
                            <br> S U R A B A Y A-60235
                        </p>
                    </font>
                </td>
            </tr>
        </table>
        <hr>
    </div>

    @foreach ($SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa as $SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa)
    <div>
        <table>
            <tr>
                <td width="280"> </td>
                <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                <td>Surabaya, {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->created_at->isoFormat('D MMMM Y')}}</td>
                <td width="50"> </td>
            </tr>
            <tr>
                <td width="280"> </td>
                <td>Kepada</td>
                <td width="50"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="80">Nomor</td>
                <td>:</td>
                <!-- diubah -->
                <td width="175">020/{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->nomor}}/114.6/{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->tanggal->isoFormat('Y')}}</td>
                <td width="50">Yth. Sdr. </td>
                <!-- diubah -->
                <td width="175">{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->pelaksana->jabatan_pelaksana}} {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->pelaksana->pt_pelaksana}}</td>
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
                <td style="text-transform: uppercase; letter-spacing: 3px;"><b><u>{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->pelaksana->kota}}</u></b></td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ; ">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Diberitahukan bahwa SKPD Dinas Komunikasi Dan Informatika Provinsi Jawa Timur akan melaksanakan Pengadaan Langsung, untuk :</td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td width="100">Paket Pekerjaan</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->jenis_pengadaan }}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50">Lingkup pekerjaan</td>
                <td>:</td>
                <td>PK melalui Pejabat Pengadaan mengundang Penyedia</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50"> </td>
                <td> </td>
                <td style="text-align: justify;"> Barang untuk menyampaikan penawaran atas paket pengadaan barang yang tercantum dalam Spesifikasi Teknis, Daftar Kuantitas dan Harga serta nomor pekerjaan yang tercantum dalam LDP. Penyedia Barang yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu dan perkiraan batas akhir waktu penyelesaian yang tercantum dalam LDP.</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50">Sumber Dana</td>
                <td>:</td>
                <td>APBD Provinsi Jawa Timur Tahun Anggaran {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->tanggal->isoFormat('Y')}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50">Nilai HPS</td>
                <td>:</td>
                <!-- diubah -->
                <td>Rp. {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->total_hps}},- ({{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->pengadaan->deskripsi_hps}})</td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ; text-align: justify; text-indent: 45px;">Apabila saudara berminat untuk mengikuti paket pengadaan langsung tersebut diharap untuk menyerahkan formulir kualifikasi sebagaimana terlampir yang diisi dengan jelas dan benar, Formulir Kualifikasi tersebut paling lambat diserahkan pada :</td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td width="100">Hari/Tanggal</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->tanggal->isoFormat('dddd')}} / {{$SuratUndanganPengambilanDokumenKualifikasidanDokumenPengadaanLangsungkepadaPenyediaBarangJasa->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="100">Jam</td>
                <td>:</td>
                <td>10.00 WIB</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="100">Tempat</td>
                <td>:</td>
                <td>Ruang Argopuro lt.II Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
            </tr>
        </table>
        <table border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ; text-align: justify; text-indent: 45px;">Apabila sampai dengan jam tersebut diatas saudara tidak menyampaikan formulir prakualifikasi tersebut maka dianggap tidak berminat mengikuti pengadaan langsung. Apabila perusahaan saudara dianggap mampu maka akan diundang mengikuti proses pengadaan langsung untuk pekerjaan tersebut diatas.</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ; text-align: justify;">Demikian disampaikan atas perhatian dan partisipasi Saudara diucapkan terima kasih.</td>
            </tr>
        </table>
    </div>


    {{-- //ttd pejabat --}}
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            @foreach ($pejabat as $pjb)
            <tr>
                <td width="300"> </td>
                <td>PEJABAT PENGADAAN</td>
            </tr>
            <br>
            <br>
            <br>
            <tr>
                <td width="300"> </td>
                <td width="250"><u>{{$pjb->pejabat_pengadaan}}</u></td>
            </tr>
            <tr>
                <td width="300"> </td>
                <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    @endforeach
</div>

<!-- pakta integritas -->
<div style="page-break-before: always;">
    <div class="col-12 grid-margin stretch-card">
        <div style="text-align: center">
            <font color="black" size="5">
                <p align="center"><b>PAKTA INTEGRITAS</b></u></p>
            </font>
        </div>

        @foreach ($PaktaIntegritas as $PaktaIntegritas)
        <div class="row">
            <br>
            <table font-size="2">
                <tr>
                    <td style="text-align: justify;">Saya yang bertandatangan di bawah ini, dalam rangka pengadaan {{$PaktaIntegritas->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur pada Satuan Kerja Perangkat Daerah Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$PaktaIntegritas->tanggal->isoFormat('Y')}}, dengan ini menyatakan bahwa saya :</td>
                </tr>
            </table>
        </div>

        <div class="row">
            <br>
            <table font-size="2">
                <tr>
                    <td width="20" style="vertical-align:top">1.</td>
                    <td style="text-align: justify;">Tidak akan melakukan praktek KKN.</td>
                </tr>
            </table>
        </div>

        <div class="row">
            <br>
            <table font-size="2">
                <tr>
                    <td width="20" style="vertical-align:top">2.</td>
                    <td style="text-align: justify;">Akan melaporkan kepada pihak yang berwajib/berwenang apabila mengetahui ada indikasi KKN di dalam proses pengadaan ini.</td>
                </tr>
            </table>
        </div>

        <div class="row">
            <br>
            <table font-size="2">
                <tr>
                    <td width="20" style="vertical-align:top">3.</td>
                    <td style="text-align: justify;">Dalam proses pengadaan ini, berjanji akan melaksanakan tugas secara bersih, transparan, dan profesional dalam arti akan mengerahkan segala kemampuan dan sumber daya secara optimal untuk memberikan hasil kerja terbaik mulai dari penyiapan penawaran, pelaksanaan, dan penyelesaian pekerjaan/kegiatan ini.</td>
                </tr>
            </table>
        </div>

        <div class="row">
            <br>
            <table font-size="2">
                <tr>
                    <td width="20" style="vertical-align:top">4.</td>
                    <td style="text-align: justify;">Apabila saya melanggar hal-hal yang telah saya nyatakan dalam <b>PAKTA INTEGRITAS</b> ini, saya bersedia dikenakan sanksi moral, sanksi administrasi serta dituntut ganti rugi dan pidana sesuai dengan ketentuan peraturan perundang-undangan yang berlaku.</td>
                </tr>
            </table>
        </div>

        <br><br><br><br>
        <div class="row">
            <div style="text-align: center">
                <table font-size="3">
                    <tr>
                        <td width="300"></td>
                        <td>Surabaya, {{$PaktaIntegritas->tanggal->isoFormat('D MMMM Y')}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <br><br><br>
        <div class="row">
            <table font-size="3">
                <tr>
                    <td width="13"> </td>
                    <td width="10">1.</td>
                    <td width="260">{{$pjb->pejabat_pembuatan_komitmen}}</td>
                    <td>:</td>
                    <td width="280">Pengguna Barang/Jasa ............................................</td>
                </tr>
            </table>
            <table font-size="3">
                <tr>
                    <td width="25"> </td>
                    <td width="260">Pejabat Pembuat Komitmen</td>
                    <td width="8"> </td>
                    <td width="280"> </td>
                </tr>
            </table>
        </div>

        <br><br><br><br>
        <div class="row">
            <table font-size="3">
                <tr>
                    <td width="13"> </td>
                    <td width="10">2.</td>
                    <td width="260">{{$pjb->pejabat_pengadaan}}</td>
                    <td>:</td>
                    <td width="280">Pejabat Pengadaan Barang/Jasa ...............................</td>
                </tr>
            </table>
        </div>

        <br><br><br><br><br>
        <div class="row">
            <table font-size="3">
                <tr>
                    <td width="13"> </td>
                    <td width="10">3.</td>
                    <td width="260">{{$PaktaIntegritas->pengadaan->pelaksana->nama_pelaksana}}</td>
                    <td>:</td>
                    <td width="280">Penyedia Barang/Jasa ..............................................</td>
                </tr>
            </table>
            <table font-size="3">
                <tr>
                    <td width="25"> </td>
                    <td width="260">{{$PaktaIntegritas->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td width="8"> </td>
                    <td width="280"> </td>
                </tr>
            </table>
        </div>
        @endforeach
    </div>
</div>

<!-- Daftar Hadir   -->
<div style="page-break-before: always;">
    <div class="col-12 grid-margin stretch-card">
        <div style="text-align: center">
            <font color="black">
                <font size="3"><b>PEJABAT PENGADAAN BARANG/JASA DILINGKUNGAN</b></font><br>
                <font size="3"><b>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</b></font><br>
                <font size="3"><b>PROVINSI JAWA TIMUR</b></font><br>
            </font>
            <hr>
        </div>

        @foreach ($DaftarHadir as $DaftarHadir)
        <br><br><br>
        <div class="row">
            <table border="0" align="center">
                <tr>
                    <td>
                        <center>
                            <font size="4"><b>DAFTAR HADIR</b></font><br><br>
                            <font size="3"><b>PENGEMBALIAN DOKUMEN PRAKUALIFIKASI</b></font><br>
                            <font size="3" style="text-transform: uppercase;"><b>{{$DaftarHadir->pengadaan->jenis_pengadaan}}</b></font><br>
                    </td>
                </tr>
            </table>
        </div>

        <br><br>
        <div class="row">
            <table width="565px" border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                <thead style="background-color: lightgrey;">
                    <tr align="center">
                        <th width="30px" scope="col">No</th>
                        <th width="121" scope="col">Nama Perusahaan</th>
                        <th width="130" scope="col">Alamat dan No.Telepon</th>
                        <th width="115" scope="col">Tanggal</th>
                        <th width="121" scope="col">Tanda Tangan</th>
                    </tr>
                    <tr align="center">
                        <th width="30px" scope="col">1</th>
                        <th width="121" scope="col">2</th>
                        <th width="121" scope="col">3</th>
                        <th width="121" scope="col">4</th>
                        <th width="121" scope="col">5</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <td height="10"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        {{-- <tr style="vertical-align:top"> --}}
                        <th height="50" scope="row">1</th>
                        <td>{{$DaftarHadir->pengadaan->pelaksana->pt_pelaksana}}</td>
                        <td>{{$DaftarHadir->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
                        <td>{{$DaftarHadir->tanggal->isoFormat('D MMMM Y')}}</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br><br><br>
        <div class="row">
            <div style="text-align: center">
                <table font-size="3" style="width: 36%; text-align: left; float: right;">
                    <tr>
                        <td>Surabaya, {{$DaftarHadir->created_at->isoFormat('D MMMM Y')}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <br><br>
        @foreach ($pejabat as $pjb)
        <table border="0" align="center">
            <tr>
                <td width="290"> </td>
                <td>PEJABAT PENGADAAN</td>
            </tr>
        </table>

        <br><br><br><br><br><br><br>

        <table border="0" align="center">
            <tr>
                <td width="290"> </td>
                <td><u>{{$pjb->pejabat_pengadaan}}</u></td>
            </tr>
        </table>
        <table border="0" align="center">
            <tr>
                <td width="290"> </td>
                <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
            </tr>

        </table>
        @endforeach
        @endforeach
    </div>
</div>

<!-- Berita acara evaluasi -->
<div style="page-break-before: always;">
    <!-- Kop Surat -->
    <div>
        <table class="table" border="0" align="center">
            <tr>
                <td>
                    <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                </td>
                <td width="40"> </td>
                <td style="text-align: center" width="500px">
                    <font color="black">
                        <p align="center">
                            <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                            <br> DINAS KOMUNIKASI DAN INFORMATIKA
                            <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                            <br> Website : http://www.jatimprov.go.id
                            <br> Email:kominfo@jatimprov.go.id
                            <br> S U R A B A Y A-60235
                        </p>
                    </font>
                </td>
            </tr>
        </table>
        <hr>
    </div>

    @foreach ($BAEvaluasi as $BAEvaluasi)
    <div class="row">
        <br>
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <u><b>BERITA ACARA EVALUASI DOKUMEN PRAKUALIFIKASI</b></u>
                </td>
            <tr>
        </table>
    </div>

    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <font size="3">Nomor</font>
                </td>
                <td style="text-align: center">
                    <font size="3">:</font>
                </td>
                <td style="text-align: center">
                    <font size="3">020/{{$BAEvaluasi->nomor}}/114.6/{{$BAEvaluasi->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    </div>

    <br><br>
    <div class="row">
        <table>
            @foreach ($pejabat as $pjb)
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$BAEvaluasi->tanggal->isoFormat('dddd')}} Tanggal {{$BAEvaluasi->deskripsi_tgl}}, bertempat di Ruang Argopuro Dinas Komunikasi Dan Informatika Provinsi Jawa Timur, kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$BAEvaluasi->tanggal->isoFormat('Y')}} yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur tanggal {{date('D MMM Y', strtotime($pjb->tanggal_sk))}} Nomor : {{$pjb->nomor_sk}}, telah melakukan penilaian dokumen prakualifikasi penunjukan langsung Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer , dibiayai dari dana APBD Tahun Anggaran {{date('Y', strtotime($pjb->tanggal_sk))}} pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening {{$BAEvaluasi->pengadaan->pelaksana->kode_rekening}} yang telah diserahkan oleh :</td>
            </tr>
        </table>
        @endforeach
    </div>

    <br>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">NAMA PERUSAHAAN</td>
                <td width="10">:</td>
                <td width="370">{{$BAEvaluasi->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">ALAMAT</td>
                <td width="10">:</td>
                <td width="370">{{$BAEvaluasi->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
            </tr>
        </table>
    </div>

    <div>
        <table border="0" align="center">
            <tr>
                <td width="8"></td>
                <td width="180">NOMOR POKOK WAJIB PAJAK</td>
                <td width="10">:</td>
                <td width="370">{{$BAEvaluasi->pengadaan->pelaksana->npwp}}</td>
            </tr>
        </table>
    </div>

    <br><br>
    <div>
        <table border="0" align="center" font-size="2">
            <tr>
                <td width="8"></td>
                <td width="560">Dengan hasil sebagai berikut :</td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Setelah mengadakan penelitian dan penilaian secara seksama terhadap dokumen prakualifikasi yang diserahkan penyedia barang/jasa, maka Pejabat Pengadaan Barang/Jasa di Lingkungan Dinas Komunikasi dan Informatika provinsi Jawa Timur memutuskan bahwa calon penyedia barang/jasa tersebut memenuhi syarat untuk melanjutkan kegiatan penunjukan langsung selanjutnya.</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Berita Acara evaluasi dokumen prakualifikasi ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan selanjutnya.</td>
            </tr>
        </table>
    </div>

    <br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            @foreach ($pejabat as $pjb)
            <tr>
                <td width="300"> </td>
                <td>PEJABAT PENGADAAN</td>
            </tr>
            <br>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td width="300"> </td>
                <td width="250"><u>{{$pjb->pejabat_pengadaan}}</u></td>
            </tr>
            <tr>
                <td width="300"> </td>
                <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    @endforeach
</div>

<!-- Lampiran Berita Acara Evaluasi -->
<div style="page-break-before: always;">
    <div class="col-12 grid-margin stretch-card">
        @foreach ($LampiranBAEvaluasi as $LampiranBAEvaluasi)
        <div>
            <table border="0" align="center">
                <tr>
                    <td width="100">DAFTAR</td>
                    <td>:</td>
                    <td width="560">Evaluasi Dokumen Prakualifikasi</td>
                <tr>
                <tr>
                    <td width="100">PEKERJAAN</td>
                    <td width="30">:</td>
                    <td width="430">{{$LampiranBAEvaluasi->pengadaan->jenis_pengadaan}}</td>
                <tr>
                <tr>
                    <td width="100">KEPERLUAN</td>
                    <td width="30">:</td>
                    <td width="430">Dinas Komunikasi Dan Informatika Profinsi Jawa Timur</td>
                <tr>
                <tr>
                    <td width="100">Tanggal</td>
                    <td width="30">:</td>
                    <td width="430">{{$LampiranBAEvaluasi->tanggal->isoFormat('D MMMM Y')}}</td>
                <tr>
            </table>
        </div>
        <br>
        <div class="center">
            <table width="auto" border="1" font-size="1" style="text-align: center;
        color: #333333;border-color: #333333;border-collapse: collapse;
        ">
                <thead style="background-color: lightgrey;">
                    <tr>
                        <td rowspan="3"> NO </td>
                        <td rowspan="3"> Nama Perusahaan </td>
                        <td rowspan="3"> Surat Pernyataan Minat </td>
                        <td rowspan="3"> Pakta Integritas </td>
                        <td colspan="8"> Formulir Isian Penilaian Kualifikasi </td>
                        <td rowspan="3"> Keterangan </td>
                    </tr>
                    <tr>
                        <td rowspan="2"> Data Administras </td>
                        <td rowspan="2"> Ijin Usaha </td>
                        <td rowspan="2"> Landasan Hukum Pendirian BU </td>
                        <td rowspan="2"> Pengurus </td>
                        <td colspan="4"> P a j a k </td>
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
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> {{$LampiranBAEvaluasi->pengadaan->pelaksana->pt_pelaksana}} </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a> </td>
                        <td> LULUS </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <div>
            <table>
                <tr>
                    <td><b><u>Keterangan</u></b></td>
                    <td><b>:</b></td>
                </tr>
                <tr>
                    <td><a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/tCSLJGtT/check.jpg' width="50" height="30" border='0' alt='check' /></a></td>
                    <td>.............</td>
                    <td>Persyaratan dipenuhi</td>
                </tr>
                <tr>
                    <td><a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/3JTQq0gH/minus.jpg' width="50" height="30" border='0' alt='minus' /></a></td>
                    <td>.............</td>
                    <td>Persyaratan belum dipenuhi</td>
                </tr>
            </table>
        </div>
        <br>

        <div>
            <table style="text-align: center;" border="0" font-size="0">
                @foreach ($pejabat as $pjb)
                <tr>
                    <td width="400"> </td>
                    <td style="text-indent: 45px;">PEJABAT PENGADAAN</td>
                </tr>
                <br>
                <br>
                <br>
                <br>
                <br>
                <tr>
                    <td width="400"> </td>
                    <td width="250" style="text-indent: 45px;"><u>{{$pjb->pejabat_pengadaan}}</u></td>
                </tr>
                <tr>
                    <td width="450"> </td>
                    <td style="text-indent: 45px;">NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        @endforeach
    </div>
</div>

<!-- Undangan penawaran -->
<div style="page-break-before: always;">
    {{-- //kopsurat --}}
    <div>
        <table class="table" border="0" align="center">
            <tr>
                <td>
                    <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                </td>
                <td width="40"> </td>
                <td style="text-align: center" width="500px">
                    <font color="black">
                        <p align="center">
                            <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                            <br> DINAS KOMUNIKASI DAN INFORMATIKA
                            <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                            <br> Website : http://www.jatimprov.go.id
                            <br> Email:kominfo@jatimprov.go.id
                            <br> S U R A B A Y A-60235
                        </p>
                    </font>
                </td>
            </tr>
        </table>
        <hr>
    </div>

    @foreach ($SuratUndanganPermintaanPenawaranHarga as $SuratUndanganPermintaanPenawaranHarga)
    <div>
        <table>
            <tr>
                <td width="280"> </td>
                <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                <td>Surabaya, {{$SuratUndanganPermintaanPenawaranHarga->created_at->isoFormat('D MMMM Y')}}</td>
                <td width="50"> </td>
            </tr>
            <tr>
                <td width="280"> </td>
                <td>Kepada</td>
                <td width="50"> </td>
            </tr>
        </table>
    </div>

    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="80">Nomor</td>
                <td>:</td>
                <!-- diubah -->
                <td width="175">020/{{$SuratUndanganPermintaanPenawaranHarga->nomor}}/114.6/{{$SuratUndanganPermintaanPenawaranHarga->tanggal->isoFormat('Y')}}</td>
                <td width="50">Yth. Sdr. </td>
                <!-- diubah -->
                <td width="175">{{$SuratUndanganPermintaanPenawaranHarga->pengadaan->pelaksana->jabatan_pelaksana}} {{$SuratUndanganPermintaanPenawaranHarga->pengadaan->pelaksana->pt_pelaksana}}</td>
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
                <td width="175">Undangan Permintaan <br><u> Penawaran Harga</u></td>
                <td></td>
                <td style="text-transform: uppercase; letter-spacing: 3px;"><u>{{$SuratUndanganPermintaanPenawaranHarga->pengadaan->pelaksana->kota}}</u></td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Bahwa dalam rangka pelaksanaan proses pengadaan langsung, untuk :</td>

            </tr>
        </table>
    </div>

    <div style="text-align:center ;">
        @foreach ($pejabat as $pjb)
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td width="100">Paket Pekerjaan</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $SuratUndanganPermintaanPenawaranHarga->pengadaan->jenis_pengadaan }}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50" style="vertical-align: top;">Lingkup pekerjaan</td>
                <td>:</td>
                <td style="text-align: justify;">PK melalui Pejabat Pengadaan mengundang Penyedia Barang untuk menyampaikan penawaran atas paket pengadaan barang yang tercantum dalam Spesifikasi Teknis, Daftar Kuantitas dan Harga serta nomor pekerjaan yang tercantum dalam LDP. Penyedia Barang yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu dan perkiraan batas akhir waktu penyelesaian yang tercantum dalam LDP.</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50">Sumber Dana</td>
                <td>:</td>
                <td>APBD Provinsi Jawa Timur Tahun Anggaran {{date('Y', strtotime($pjb->tanggal_sk))}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="50">Nilai HPS</td>
                <td>:</td>
                <!-- diubah -->
                <td>Rp. {{$SuratUndanganPermintaanPenawaranHarga->pengadaan->total_hps}},- ({{$SuratUndanganPermintaanPenawaranHarga->pengadaan->deskripsi_hps}})</td>
            </tr>
        </table>
        @endforeach
    </div>
    <div>
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ; text-align: justify;">Diharap saudara untuk menyampaikan dokumen penawaran paling lambat pada :</td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td width="100">Hari/Tanggal</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{$SuratUndanganPermintaanPenawaranHarga->tanggal->isoFormat('dddd')}} / {{$SuratUndanganPermintaanPenawaranHarga->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="100">Jam</td>
                <td>:</td>
                <td>10.00 WIB</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="100">Tempat</td>
                <td>:</td>
                <td>Ruang Argopuro lt.II Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
            </tr>
        </table>
        <table border="0" align="center" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ; text-align: justify;">Sebelum batas waktu penyampaian dokumen penawaran apabila dalam dokumen Pengadaan Langsung sebagaimana terlampir terdapat hal yang tidak jelas atau perlu penjelasan maka dapat ditanyakan kepada Pejabat Pengadaan.</td>
            </tr>
            <br>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ; text-align: justify; text-indent: 45px; ">Demikian disampaikan atas perhatian dan partisipasi Saudara diucapkan terima kasih.</td>
            </tr>
        </table>
    </div>
    <br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            @foreach ($pejabat as $pjb)
            <tr>
                <td width="300"> </td>
                <td>PEJABAT PENGADAAN</td>
            </tr>
            <br>
            <br>
            <br>
            <tr>
                <td width="300"> </td>
                <td width="250"><u>{{$pjb->pejabat_pengadaan}}</u></td>
            </tr>
            <tr>
                <td width="300"> </td>
                <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    @endforeach
</div>

<!-- Berita acara pekerjaan -->
<div style="page-break-before: always;">
    {{-- /BA/BERITA ACARA --}}
    <div style="text-align: center;">
        {{-- //kopsurat --}}
        <div>
            <table class="table" border="0" align="center">
                <tr>
                    <td>
                        <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                    </td>
                    <td width="40"> </td>
                    <td style="text-align: center" width="500px">
                        <font color="black">
                            <p align="center">
                                <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                                <br> DINAS KOMUNIKASI DAN INFORMATIKA
                                <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                                <br> Website : http://www.jatimprov.go.id
                                <br> Email:kominfo@jatimprov.go.id
                                <br> S U R A B A Y A-60235
                            </p>
                        </font>
                    </td>
                </tr>
            </table>
            <hr>
        </div>

        @foreach ($BAPenjelasanPekerjaan as $BAPenjelasanPekerjaan)
        {{-- judul --}}
        <div style="text-align: center">
            <p align="center"><u><b> BERITA ACARA PENJELASAN PEKERJAAN </b></u> <br>
                Nomor : 020/{{$BAPenjelasanPekerjaan->nomor}}/114.6/{{$BAPenjelasanPekerjaan->tanggal->isoFormat('Y')}} </p>
        </div>
    </div>


    {{-- isi --}}
    <div style="text-align: center;">
        <div>
            <table font-size="1">
                @foreach ($pejabat as $pjb)
                <tr>
                    <td style="text-indent: 45px;  text-align:justify">
                        Pada hari ini {{$BAPenjelasanPekerjaan->tanggal->isoFormat('dddd')}} Tanggal {{$BAPenjelasanPekerjaan->deskripsi_tgl}}, dimulai pukul 10.00 WIB sampai dengan selesai, Pejabat Pengadaan di Lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur
                        {{-- dari tabel pejabat --}}
                        tanggal {{date('D Y', strtotime($pjb->tanggal_sk))}} Nomor : {{$pjb->nomor_sk}},
                        telah mengadakan rapat penjelasan untuk pengadaan {{$BAPenjelasanPekerjaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <br>
        <div>
            <table style="text-align:justify;" border="0" font-size="0">
                <tr>
                    <td colspan="2">Dalam rapat penjelasan tersebut tersusun pokok acara sebagai berikut :</td>
                </tr>
                <tr>
                    <td width="25">1.</td>
                    <td width="510">Pembukaan oleh Pejabat Pengadaan kepada semua yang hadir.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Penjelasan seluruh isi Dokumen Pengadaan Langsung.</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">3.</td>
                    <td>Nilai HPS/OE untuk pekerjaan ini adalah Rp. {{$BAPenjelasanPekerjaan->pengadaan->total_hps}},- ({{$BAPenjelasanPekerjaan->pengadaan->deskripsi_hps}}).</td>
                </tr>
                <tr>
                    <td colspan="2">Pokok-Pokok Penjelasan lainnya antara lain sebagai berikut :</td>
                </tr>
            </table>
        </div>
        <br>
        <div style="text-align: center;">
            <table border="0">
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <font color="black">
                            <b> DOKUMEN PENGADAAN <br>BAB I INSTRUKSI KEPADA PESERTA PENGADAAN (LKPP) </b>
                        </font>
                    </td>
                </tr>
                <br>

                {{-- A --}}
                <tr>
                    <td width="8">A.</td>
                    <td colspan="2">UMUM</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Lingkup Pekerjaan.....................................................................................................................................</td>
                    <td width="10">Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Sumber Dana.............................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Peserta Pengadaan.....................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Larangan Korupsi, Kolusi, dan Nepotisme (KKN) serta Penipuan...........................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Larangan Pertentangan Kepentingan........................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                {{-- B --}}
                <tr>
                    <td>B.</td>
                    <td colspan="2">DOKUMEN PENGADAAN</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Dokumen Penawaran.................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Harga Penawaran.......................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Mata Uang Penawaran dan Cara Pembayaran...........................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Masa Berlaku Penawaran dan Jangka Waktu Pelaksanaan....................................................................... </td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Pakta Integritas...........................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Bentuk Dokumen Penawaran....................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                {{-- C --}}
                <tr>
                    <td>C.</td>
                    <td colspan="2">PEMASUKAN DOKUMEN PENAWARAN</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Penyampulan dan Penandaan Sampul Penawaran.....................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Penyampaian Dokumen Penawaran...........................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Batas Akhir Waktu Pemasukan Penawaran............................................................................................... </td>
                    <td>Jelas</td>
                </tr>
                {{-- D --}}
                <tr>
                    <td>D.</td>
                    <td colspan="2">PEMBUKAAN DAN EVALUASI PENAWARAN</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Pembukaan Penawaran..............................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Evaluasi Penawaran...................................................................................................................................</td>
                    <td>Jelas</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="0">
                <tr>
                    <td style="text-align: justify; text-indent: 45px;">Demikian Berita Acara Penjelasan dalam rangka Pengadaan Langsung untuk pengadaan {{$BAPenjelasanPekerjaan->pengadaan->jenis_pengadaan}} keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya, dibuat dengan sesungguhnya sebagai pertemuan Pejabat Pengadaan dengan peserta Pengadaan Langsung dan merupakan kelengkapan yang tidak terpisahkan dari Dokumen Pengadaan pekerjaan ini</td>
                </tr>
            </table>
        </div>
        <br>
        {{-- Pejabat 1 --}}
        <div>
            <table>
                @foreach ($pejabat as $pjb)
                <tr style="text-align: center;">
                    <td width="550">
                        <b> PIHAK PEJABAT PEMBUAT KOMITMEN </b>
                    </td>
                </tr>
            </table>
            <table border="1" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                <tr style="text-align: center;">
                    <td>NO</td>
                    <td width="200">Nama</td>
                    <td width="175">Jabatan</td>
                    <td width="150">Tanda Tangan</td>
                </tr>
                <tr>
                    <td height="100">1</td>
                    <td>{{$pjb->pejabat_pembuatan_komitmen}}</td>
                    <td>Pejabat Pembuat Komitmen</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br>
        {{-- Pejabat 2 --}}
        <div>
            <table>
                <tr style="text-align: center;">
                    <td width="550">
                        <b> PIHAK PEJABAT PEMBUAT KOMITMEN </b>
                    </td>
                </tr>
            </table>
            <table border="1" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                <tr style="text-align: center;">
                    <td>NO</td>
                    <td width="200">Nama</td>
                    <td width="175">Jabatan</td>
                    <td width="150">Tanda Tangan</td>
                </tr>
                <tr>
                    <td height="100">1</td>
                    <td>{{$pjb->pejabat_pengadaan}}</td>
                    <td>Pejabat Pengadaan</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <br>
        {{-- Pejabat 3 --}}
        <div>
            <table>
                <tr style="text-align: center;">
                    <td width="550">
                        <b> PIHAK PENYEDIA BARANG/JASA </b>
                    </td>
                </tr>
            </table>
            <table border="1" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                <tr style="text-align: center;">
                    <td>NO</td>
                    <td width="200">Nama</td>
                    <td width="175">Jabatan</td>
                    <td width="150">Tanda Tangan</td>
                </tr>
                <tr>
                    <td height="100">1</td>
                    <td>{{$BAPenjelasanPekerjaan->pengadaan->pelaksana->nama_pelaksana}}</td>
                    <td>{{$BAPenjelasanPekerjaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
        @endforeach
    </div>
</div>

<!-- Berita acara penawaran -->
<div style="page-break-before: always;">
    {{-- /BA/BERITA ACARA --}}
    <div style="text-align: center;">
        {{-- //kopsurat --}}
        <div>
            <table class="table" border="0" align="center">
                <tr>
                    <td>
                        <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                    </td>
                    <td width="40"> </td>
                    <td style="text-align: center" width="500px">
                        <font color="black">
                            <p align="center">
                                <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                                <br> DINAS KOMUNIKASI DAN INFORMATIKA
                                <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                                <br> Website : http://www.jatimprov.go.id
                                <br> Email:kominfo@jatimprov.go.id
                                <br> S U R A B A Y A-60210
                            </p>
                        </font>
                    </td>
                </tr>
            </table>

            @foreach ($BAPembukaanPenawaran as $BAPembukaanPenawaran)
            <hr>
            {{-- judul --}}
            <p align="center"><u><b> BERITA ACARA PEMBUKAAN PENAWARAN </b></u> <br>
                Nomor : 020/{{$BAPembukaanPenawaran->nomor}}/114.6/{{$BAPembukaanPenawaran->tanggal->isoFormat('Y')}} </p>
        </div>
    </div>

    {{-- isi --}}

    <div style="text-align: center;">
        @foreach ($pejabat as $pjb)
        <div>
            <table font-size="1">
                <tr>
                    <td style="text-indent: 45px;  text-align:justify">
                        Pada hari ini {{$BAPembukaanPenawaran->tanggal->isoFormat('dddd')}}, Tanggal {{$BAPembukaanPenawaran->deskripsi_tgl}} kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal tanggal {{date('D Y', strtotime($pjb->tanggal_sk))}} Nomor : {{$pjb->nomor_sk}}, melaksanakan Pembukaan Penawaran untuk pelaksanaan {{$BAPembukaanPenawaran->pengadaan->jenis_pengadaan}} , dibiayai dari dana APBD Tahun Anggaran {{$BAPembukaanPenawaran->tanggal->isoFormat('Y')}} pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening {{$BAPembukaanPenawaran->pengadaan->pelaksana->kode_rekening}} dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. {{$BAPembukaanPenawaran->pengadaan->total_hps}},- ({{$BAPembukaanPenawaran->pengadaan->deskripsi_hps}}).
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="0" align="center">
                <tr>
                    <td width="10" style="vertical-align:top"><b>I.</b></td>
                    <td colspan="4" style="vertical-align:top"><b>Personalia dan organisasi rapat :</b></td>
                <tr>
                <tr>
                    <td width="10" style="vertical-align:top"> </td>
                    <td width="200" style="vertical-align:top" colspan="2">Rapat dipimpin oleh</td>
                    <td style="vertical-align:top">:</td>
                    <td width="290" style="vertical-align:top">@foreach ($pejabat as $pejabat){{$pejabat->pejabat_pengadaan}}@endforeach</td>
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="200" style="vertical-align:top" colspan="2">Jabatan</td>
                    <td style="vertical-align:top">:</td>
                    <td width="290" style="vertical-align:top; text-align: justify; ">Pejabat Pengadaan Barang/Jasa di lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$BAPembukaanPenawaran->tanggal->isoFormat('Y')}}</td>
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="110" colspan="4">dan dihadiri oleh:</td>
                    {{-- <td width="540"> </td> --}}
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="10">A.</td>
                    <td colspan="3">PPK:</td>
                    {{-- <td width="602"> </td> --}}
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="10"> </td>
                    <td width="200" style="vertical-align:top">I WAYAN RUDY ARTHA, S.Kom</td>
                    <td style="vertical-align:top">:</td>
                    <td width="290" style="text-align: justify; vertical-align:top">Pejabat Pembuat Komitmen di lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$BAPembukaanPenawaran->tanggal->isoFormat('Y')}}</td>
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="10" style="vertical-align:top">B.</td>
                    <td style="vertical-align:top" colspan="3">Penyedia Barang/Jasa:</td>
                    {{-- <td width="480"> </td> --}}
                </tr>
                <tr>
                    <td width="10"> </td>
                    <td width="10">1.</td>
                    <td width="200">{{$BAPembukaanPenawaran->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td style="text-align: justify; vertical-align:top">:</td>
                    <td width="290">{{$BAPembukaanPenawaran->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
            </table>
        </div>
        <div>
            <table align="center">
                <tr>
                    <td width="10"><b>II.</b></td>
                    <td width="520"><b>Hasil Pembukaan Penawaran sebagai berikut :</b></td>
                <tr>
                <tr>
                    <td width="10"></td>
                    <td>
                        {{-- Garis Tabel --}}
                        <table width="520" border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                            <thead style="background-color: lightgrey;">
                                <tr align="center">
                                    <th width="30px" scope="col">No</th>
                                    <th width="350px" scope="col">Nama Perusahaan</th>
                                    <th width="95px" scope="col">Surat Penawaran</th>
                                    <th width="95px" scope="col">Dokumen Teknis</th>
                                    <th width="95px" scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr align="center" height="100">
                                    <td scope="row">1</td>
                                    <td>{{$BAPembukaanPenawaran->pengadaan->pelaksana->pt_pelaksana}}</td>
                                    <td>Ada</td>
                                    <td>Ada</td>
                                    <td>Lengkap</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table>
                <tr>
                    <td style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Berita Acara ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan Pengadaan Langsung.</td>
                </tr>
            </table>
        </div>
        <div>

            <table border="0" align="center">
                <tr>
                    <td width="290"> </td>
                    <td>PEJABAT PENGADAAN</td>
                </tr>
            </table>

            <br><br><br>

            <table border="0" align="center">
                <tr>
                    <td width="290"> </td>
                    <td><u>{{$pjb->pejabat_pengadaan}}</u></td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="290"> </td>
                    <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                </tr>
            </table>
        </div>
        @endforeach
    </div>
    @endforeach
</div>

<!-- Undangan nego -->
<div style="page-break-before: always;">
    {{-- //kopsurat --}}
    <div>
        <table class="table" border="0" align="center">
            <tr>
                <td>
                    <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                </td>
                <td width="40"> </td>
                <td style="text-align: center" width="500px">
                    <font color="black">
                        <p align="center">
                            <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                            <br> DINAS KOMUNIKASI DAN INFORMATIKA
                            <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                            <br> Website : http://www.jatimprov.go.id
                            <br> Email:kominfo@jatimprov.go.id
                            <br> S U R A B A Y A-60235
                        </p>
                    </font>
                </td>
            </tr>
        </table>
        <hr>
    </div>

    <div>
        @foreach ($SuratUndanganKlarifikasiNegosiasi as $SuratUndanganKlarifikasiNegosiasi)
        <table>
            <tr>
                <td width="280"> </td>
                <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                <td>Surabaya, {{$SuratUndanganKlarifikasiNegosiasi->created_at->isoFormat('D MMMM Y')}}</td>
                <td width="50"> </td>
            </tr>
            <tr>
                <td width="280"> </td>
                <td>Kepada</td>
                <td width="50"> </td>
            </tr>
        </table>
    </div>
    <br>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="80">Nomor</td>
                <td>:</td>
                <!-- diubah -->
                <td width="175">020/{{$SuratUndanganKlarifikasiNegosiasi->nomor}}/114.6/{{$SuratUndanganKlarifikasiNegosiasi->tanggal->isoFormat('Y')}}</td>
                <td width="50">Yth. Sdr. </td>
                <!-- diubah -->
                <td width="175">{{$SuratUndanganKlarifikasiNegosiasi->pengadaan->pelaksana->jabatan_pelaksana}} {{$SuratUndanganKlarifikasiNegosiasi->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
            <tr>
                <td width="80">Sifat</td>
                <td>:</td>
                <td width="175">Penting</td>
                <td> </td>
                <!-- diubah -->
                <td>{{$SuratUndanganKlarifikasiNegosiasi->pengadaan->pelaksana->alamat}}</td>
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
                <td width="175">Undangan <br><u> Klarifikasi/Negosiasi</u></td>
                <td></td>
                <td style="text-transform: uppercase; letter-spacing: 3px;"><b><u>{{$SuratUndanganKlarifikasiNegosiasi->pengadaan->pelaksana->kota}}</u></b></td>
            </tr>
        </table>
    </div>

    <br><br><br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Mengharap dengan hormat kehadiran Saudara dalam acara Klarifikasi dan Negosiasi pengadaan {{$SuratUndanganKlarifikasiNegosiasi->pengadaan->jenis_pengadaan}} yang akan diadakan pada :</td>

            </tr>
        </table>
    </div>
    <br><br>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="60"></td>
                <td width="70">Hari</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{$SuratUndanganKlarifikasiNegosiasi->tanggal->isoFormat('dddd')}}</td>
            </tr>
            <tr>
                <td width="60"></td>
                <td width="70">Tanggal</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{$SuratUndanganKlarifikasiNegosiasi->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td width="60"></td>
                <td width="70">Pukul</td>
                <td>:</td>
                <td>10.00 WIB</td>
            </tr>
            <tr>
                <td width="60"></td>
                <td width="70" style="vertical-align: top;">Tempat</td>
                <td style="vertical-align: top;">:</td>
                <td>Ruang Argopuro lt.II Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Jl. Ahmad Yani 242 - 244 Surabaya</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="42"></td>
                <td>Demikian untuk menjadikan periksa.</td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    @php
    $pejabat = Pejabat::all();
    @endphp
    <div style="text-align:center ;">
        @foreach ($pejabat as $pjb)
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="300"> </td>
                <td>PEJABAT PENGADAAN</td>
            </tr>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td width="300"> </td>
                <td width="250">{{$pjb->pejabat_pengadaan}}</td>
            </tr>
            <tr>
                <td width="300"> </td>
                <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
            </tr>
        </table>
        @endforeach
    </div>
    @endforeach
</div>

<!-- Berita acara nego -->
<div style="page-break-before: always;">
    <div style="color: #333333;border-color: #333333;border-collapse: collapse;">
        <!-- Kop Surat -->
        <div>
            <table class="table" border="0" align="center">
                <tr>
                    <td>
                        <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                    </td>
                    <td width="40"> </td>
                    <td style="text-align: center" width="500px">
                        <font color="black">
                            <p align="center">
                                <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                                <br> DINAS KOMUNIKASI DAN INFORMATIKA
                                <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                                <br> Website : http://www.jatimprov.go.id
                                <br> Email:kominfo@jatimprov.go.id
                                <br> S U R A B A Y A-60235
                            </p>
                        </font>
                    </td>
                </tr>
            </table>
            <hr>
        </div>

        @foreach ($BAKlarifikasiNegosiasi as $BAKlarifikasiNegosiasi)
        <div class="row">
            @php

            $pejabat = Pejabat::all();
            @endphp
            <table border="0" align="center">
                @foreach ($pejabat as $pjb)
                <tr>
                    <td style="text-align: center">
                        <u><b> BERITA ACARA KLARIFIKASI / NEGOSIASI</b></u>
                    </td>
                <tr>
            </table>
        </div>

        <div class="row">
            <table border="0" align="center">
                <tr>
                    <td style="text-align: center">
                        <font size="3">Nomor</font>
                    </td>
                    <td style="text-align: center">
                        <font size="3">:</font>
                    </td>
                    <td style="text-align: center">
                        <font size="3">020/654.{{$BAKlarifikasiNegosiasi->nomor}} /114.6/{{$BAKlarifikasiNegosiasi->tanggal->isoFormat('Y')}}</font>
                    </td>
                    </td>
                <tr>
            </table>
        </div>

        <br>
        <div class="row">
            <table border="0" width="535">
                <tr>
                    <td width="8"></td>
                    <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$BAKlarifikasiNegosiasi->tanggal->isoFormat('dddd')}}, Tanggal {{$BAKlarifikasiNegosiasi->deskripsi_tgl}} kami yang bertanda tangan dibawah ini adalah Pejabat Pengadaan di Lingkungan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur selaku Pengguna Anggaran tanggal {{date('D Y', strtotime($pjb->tanggal_sk))}} Nomor : {{$pjb->nomor_sk}}, melaksanakan klarifikasi dan negosiasi untuk pelaksanaan {{$BAKlarifikasiNegosiasi->pengadaan->jenis_pengadaan}}, dibiayai dari dana APBD Tahun Anggaran {{$BAKlarifikasiNegosiasi->tanggal->isoFormat('Y')}} pada DPA Dinas Komunikasi dan Informatika Provinsi Jawa Timur Kode Rekening 2.20.02.1.01.5.1.02.01.01.0029 dengan Harga Perkiraan Sendiri (HPS) sebesar Rp. {{$BAKlarifikasiNegosiasi->pengadaan->total_hps}},- ({{$BAKlarifikasiNegosiasi->pengadaan->deskripsi_hps}}).</td>
                </tr>
            </table>
        </div>

        <br>
        {{-- <div class="row"> --}}
        <table border="0" width="535">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Melakukan klarifikasi dan negosiasi terhadap penawaran yang diajukan oleh : {{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->pt_pelaksana}} {{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->alamat}} {{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->kota}} dengan hasil terlampir.</td>
            </tr>
        </table>
        {{-- </div> --}}

        <br>
        {{-- <div class="row"> --}}
        <table border="0" width="535">
            <tr>
                <td width="8"></td>
                <td style="text-indent: 45px; text-align: justify;">Dari hasil klarifikasi dan negosiasi harga, ditetapkan sebagai penyedia yaitu :</td>
            </tr>
        </table>
        {{-- </div> --}}

        {{-- <div> --}}
        <table border="0" width="535">
            <tr>
                <td width="8" rowspan="6"></td>
                <td width="180">Nama Perusahaan</td>
                <td width="5">:</td>
                <td>{{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
            <tr>
                <td width="180">Nama Penanggung Jawab</td>
                <td>:</td>
                <td>{{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
            <tr>
                <td width="180">Alamat Perusahaan</td>
                <td>:</td>
                <td>{{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->alamat}}, {{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->kota}}</td>
            </tr>
            <tr>
                <td width="180">Nomomr Pokok Wajib Pajak</td>
                <td>:</td>
                <td>{{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->npwp}}</td>
            </tr>
            <tr>
                <td width="180" style="vertical-align: top;">Pekerjaan</td>
                <td style="vertical-align: top;">:</td>
                <td style="text-align: justify;">{{$BAKlarifikasiNegosiasi->pengadaan->jenis_pengadaan}}</td>
            </tr>
            <tr>
                <td width="180">Dengan Harga</td>
                <td>:</td>
                <td>RP. {{number_format($BAKlarifikasiNegosiasi->pengadaan->nilai_negosiasi)}},- ({{$BAKlarifikasiNegosiasi->pengadaan->deskripsi_negosiasi}})</td>
            </tr>
        </table>
        {{-- </div> --}}

        {{-- <div class="row"> --}}
        <table border="0" width="535">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify;">Dengan pertimbangan bahwa spesifikasi teknis sesuai dengan ketentuan dan harga dapat dipertanggungjawabkan dan menguntungkan Pemerintah Provinsi Jawa Timur.</td>
            </tr>
            <tr>
                <td hidden="10"></td>
            </tr>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Berita Acara ini dibuat untuk dipergunakan sebagai bahan pertimbangan dalam pelaksanaan pengadaan langsung.</td>
            </tr>
        </table>
    </div>

    <br>
    <div style="text-align:center ;">
        <table width="535" style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">Direktur</td>
                <td width="250">PEJABAT PENGADAAN</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">{{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->pt_pelaksana}}</td>
                <td width="250"> </td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <br><br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><u>{{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                <td width="250"><u>{{$pjb->pejabat_pengadaan}}</u></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"> </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    @endforeach
</div>

<div class="card-body">
    <table width="535" border="1" align="center" style="color: #333333;border-width: 1px;border-color: #333333;border-collapse: collapse;">
        <thead>
            <tr align="center">
                <th colspan="2" scope="col">BERITA ACARA HASIL PENGADAAN BARANG</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">PEKERJAAN : <br>{{ $BAKlarifikasiNegosiasi->pengadaan->jenis_pengadaan}}</td>
                <td scope="col">Nomor : 020/{{$BAKlarifikasiNegosiasi->nomor}}/114.6/2022 <br>Tanggal : {{$BAKlarifikasiNegosiasi->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="535" border="0" align="center" font-size="2">
        <tr>
            <td style="text-align:justify;">Pada hari ini {{$BAKlarifikasiNegosiasi->deskripsi_tgl}}, dimulai pukul 10.00 WIB sampai dengan selesai, dengan mengambil tempat di Ruang Argopuro Dinas Komunikasi Dan Informatika Provinsi Jawa Timur telah disusun Berita Acara Hasil Pengadaan Langsung untuk Pekerjaan tersebut diatas.</td>
        </tr>
    </table>
    <br>
    <table width="535" align="center">
        <tr>
            <td width="10" style="vertical-align:top">I.</td>
            <td width="510" style="vertical-align:top; text-align:justify;" colspan="3">Bahwa dalam proses Pengadaan Langsung pengadaan {{ $BAKlarifikasiNegosiasi->pengadaan->jenis_pengadaan}} telah diundang calon penyedia yaitu :</td>
        <tr>
        <tr>
            <td width="10"> </td>
            <td style="vertical-align:top; text-align:justify;">Nama Perusahaan</td>
            <td width="5">:</td>
            <td style="vertical-align:top; text-align:justify;">{{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->pt_pelaksana}}</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$BAKlarifikasiNegosiasi->pengadaan->pelaksana->alamat}}</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td style="vertical-align:top; text-align:justify;" colspan="3">Setelah dilakukan penilaian kualifikasi/kompetensi badan usaha maka penyedia tersebut dianggap mampu untuk melaksanakan pekerjaan pengadaan langsung tersebut.</td>
        <tr>
    </table>
    <br>
    <table align="center" width="535" style="color: #333333;border-color: #333333;border-collapse: collapse;">
        <tr>
            <td width="10" style="vertical-align:top; text-align:justify;">II.</td>
            <td style="vertical-align:top; text-align:justify;" colspan="4">Setelah Penyedia menyampaikan penawaran (administrasi, teknis dan harga) maka dilakukan pembukaan penawaran. Dalam pembukaan penawaran diperoleh hasil sebagai berikut :</td>
        <tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top;">1.</td>
            <td colspan="3">
                <table width="500" border="1" font-size="2" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                    <thead style="text-align: center; background-color: lightgrey;">
                        <tr>
                            <th colspan="3">PENAWARAN</th>
                            <th rowspan="2">KETERANGAN</th>
                        </tr>
                        <tr>
                            <th>Administrasi</th>
                            <th>Teknis</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ada</td>
                            <td>Ada</td>
                            <td>Ada</td>
                            <td>Lengkap</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top; text-align:justify;">2.</td>
            <td style="vertical-align:top; text-align:justify;">Harga Penawaran</td>
            <td style="vertical-align:top; text-align:justify;">:</td>
            <td style="vertical-align:top; text-align:justify;">Rp. {{number_format($BAKlarifikasiNegosiasi->pengadaan->harga_penawaran)}},- <br>{{$BAKlarifikasiNegosiasi->pengadaan->deskripsi_penawaran}}</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td style="vertical-align:top; text-align:justify;">Harga Penawaran setelah Koreksi Aritmatik</td>
            <td style="vertical-align:top; " width="5">:</td>
            <td style="vertical-align:top; text-align:justify;">Rp. {{number_format($BAKlarifikasiNegosiasi->pengadaan->harga_penawaran)}},- <br>{{$BAKlarifikasiNegosiasi->pengadaan->deskripsi_penawaran}}</td>
        </tr>
        <tr>
            <td width="5"></td>
            <td colspan="4">Selanjutnya dilakukan evaluasi dengan unsur-unsur evaluasi sebagai berikut :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top; ">1.</td>
            <td style="vertical-align:top; " colspan="3">Evaluasi Administrasi</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top; text-align:justify;">2.</td>
            <td style="vertical-align:top; text-align:justify;" colspan="3">Evaluasi Teknis</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5">3.</td>
            <td colspan="3">Evaluasi Kewajaran Harga</td>
        </tr>
    </table>
    <table align="center" width="535">
        <tr>
            <td width="5"> </td>
            <td width="510" colspan="4">Unsur – unsur selengkapnya sebagai berikut :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5">1.</td>
            <td colspan="3">Evaluasi Administrasi</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td colspan="3">Evaluasi Administrasi meliputi :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td width="5">a.</td>
            <td colspan="2"><b>Surat Penawaran</b></td>
        </tr>
        <tr>
            <td width="10"></td>
            <td width="5"> </td>
            <td> </td>
            <td colspan="2">
                <table width="490" border="1" align="center" font-size="2" style="vertical-align:top; text-align:justify; color: #333333;border-color: #333333;border-collapse: collapse;">
                    <thead style="text-align: center; background-color: lightgrey;">
                        <tr>
                            <th width="5">NO</th>
                            <th width="210">UNSUR YANG DIEVALUASI</th>
                            <th width="100">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Syarat-syarat substansial yang diminta berdasarkan Dokumen Pemilihan dipenuhi/dilengkapi</td>
                            <td style="text-align: center;">Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Surat Penawaran</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <ul>
                                    <li>Ditandatangani oleh yang berhak</li>
                                    <li>Jangka waktu berlakunya surat penawaran</li>
                                    <li>Jangka Waktu Pelaksanaan</li>
                                    <li>Bertanggal</li>
                                </ul>
                            </td>
                            <td style="text-align: center;">Memenuhi Syarat <br> Memenuhi Syarat <br> Memenuhi Syarat <br> Memenuhi Syarat</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <table align="center" font-size="2" width="535">
        <tr>
            <td width="10"> </td>
            <td width="5">2.</td>
            <td>Evaluasi Teknis</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"></td>
            <td>Apabila penawaran memenuhi syarat administrasi tersebut diatas dilakukan evaluasi teknis, unsur evaluasi teknis meliputi :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"></td>
            <td>
                <table width="500" border="1" align="center" font-size="2" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                    <thead style="text-align: center; background-color: lightgrey;">
                        <tr>
                            <th width="5">NO</th>
                            <th width="210">UNSUR YANG DIEVALUASI</th>
                            <th width="125">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Metode pelaksanaan pekerjaan</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jadwal waktu pelaksanaan pekerjaan</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Jenis, kapasitas, komposisi dan jumlah peralatan</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Spesifikasi teknis</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Personil Inti</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <table align="center" font-size="2" width="535">
        <tr>
            <td width="10"> </td>
            <td width="10">3.</td>
            <td>Evaluasi Kewajaran Harga</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td>Penawaran yang telah lulus evaluasi teknis dilakukan Evaluasi Kewajaran Harga, yang meliputi :</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5"> </td>
            <td>
                <table width="500" border="1" align="center" font-size="2" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                    <thead style="text-align: center; background-color: lightgrey;">
                        <tr>
                            <th width="5">NO</th>
                            <th width="210">DIEVALUASI</th>
                            <th width="125">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Total harga penawaran tidak melebihi HPS</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Harga satuan timpang</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kewajaran harga</td>
                            <td>Memenuhi Syarat</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center" width="535">
        <tr>
            <td width="10" style="vertical-align:top;">III.</td>
            <td style="vertical-align:top;" colspan="4">Setelah evaluasi dinyatakan memenuhi syarat maka dilakukan proses Klarifikasi Teknis dan Negosiasi Harga. Dari Hasil Negosiasi harga diperoleh hasil sebagai berikut :</td>
        <tr>
        <tr>
            <td width="10"> </td>
            <td width="5" style="vertical-align:top;">-</td>
            <td style="vertical-align:top;">Harga Penawaran</td>
            <td width="5" style="vertical-align:top;">:</td>
            <td style="vertical-align:top;">Rp. Rp. {{number_format($BAKlarifikasiNegosiasi->pengadaan->harga_penawaran)}},-({{$BAKlarifikasiNegosiasi->pengadaan->deskripsi_penawaran}})</td>
        </tr>
        <tr>
            <td width="10"> </td>
            <td width="5">-</td>
            <td style="vertical-align:top;">Harga Penawaran setelah Negosiasi</td>
            <td width="5" style="vertical-align:top;">:</td>
            <td style="vertical-align:top;">Rp. {{number_format($BAKlarifikasiNegosiasi->pengadaan->nilai_negosiasi)}},-({{$BAKlarifikasiNegosiasi->pengadaan->deskripsi_negosiasi}})</td>
        </tr>
    </table>
    <br>
    <table border="0" align="center" font-size="2" width="535">
        <tr>
            <td width="535">Untuk selanjutnya Berita Acara Hasil Pengadaan Langsung ini akan disampaikan kepada Pejabat Pembuat Komitmen untuk proses pengadaan langsung selanjutnya.</td>
        </tr>
    </table>
    <br>
    <table border="0" align="center" font-size="2" width="535">
        <tr>
            <td width="535">Demikian Berita Acara Hasil Pengadaan dibuat dengan sebenarnya oleh Pejabat Pengadaan untuk dipergunakan sebagaimana mestinya.</td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                <center><b>PEJABAT PENGADAAN DI LINGKUNGAN</b><br>
                    <b>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA TIMUR</b><br>
            </td>
        </tr>
    </table>
    <br>
    <table width="535" border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;">
        <thead style="text-align: center; background-color: lightgrey;">
            <tr align="center">
                <th width="10px" scope="col">No</th>
                <th width="240" scope="col">Nama</th>
                <th width="145px" scope="col">Jabatan</th>
                <th width="100px" scope="col">Tanda Tangan</th>
            </tr>
        </thead>
        <tbody>
            <tr align="center" height="100">
                <th scope="row">1</th>
                @foreach ($pejabat as $pjb)
                <td>{{$pjb->pejabat_pengadaan}}</td>
                @endforeach
                <td>Pejabat Pengadaan</td>
                <td height="50"> </td>
            </tr>
        </tbody>
    </table>
    @endforeach
</div>
</div>

<!-- Nota Dinas dari Pejabat Pengadaan ke PPK -->
<div style="page-break-before: always;">
    <div class="col-12 grid-margin stretch-card">
        <div style="text-align: center">
            <font color="black">
                <p align="center"><b> DINAS KOMUNIKASI DAN INFORMATIKA </b></p>
                <p align="center"><b> PROVINSI JAWA TIMUR </b></p>
            </font>
            <hr>
            <p align="center"><u><b> NOTA DINAS </b></u></p>
        </div>

        @foreach ($NotaDinasdariPejabatPengadaankePPK as $NotaDinasdariPejabatPengadaankePPK)
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
                    <td>Pejabat Pengadaan</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{$NotaDinasdariPejabatPengadaankePPK->created_at->isoFormat('D MMMM Y')}}</td>
                </tr>
                <tr>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>020/654.{{$NotaDinasdariPejabatPengadaankePPK->nomor}}/114.6/{{$NotaDinasdariPejabatPengadaankePPK->tanggal->isoFormat('Y')}}</td>
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
                    <td>Penyampaian Berita Acara Proses Pengadaan Langsung</td>
                </tr>
            </table>
            <br>
        </div>
        <hr>

        @php
        $pejabat = Pejabat::all();
        @endphp

        <br>
        <div class="row">
            <table>
                <tr>
                    <td width="8"></td>
                    <td style="text-align: left ;text-align: justify; text-indent: 45px;"> Sesuai dengan Berita Acara Hasil Pengadaan Langsung Nomor : 020/{{$BAKlarifikasiNegosiasi->nomor}}/114.6/{{$BAKlarifikasiNegosiasi->tanggal->format('Y')}} Tanggal {{$BAKlarifikasiNegosiasi->tanggal->isoFormat('D MMMM Y')}} untuk pengadaan{{$NotaDinasdariPejabatPengadaankePPK->pengadaan->jenis_pengadaan}} Printer maka bersama ini kami sampaikan administrasi proses pengadaan langsung yang telah selesai dilaksanakan terhadap :</td>
                </tr>
            </table>
        </div>

        <br>
        <div style="text-align:center ;">
            <table class="table" border="0" align="center" font-size="1">
                <tr>
                    <td width="120">Nama Perusahaan</td>
                    <td>:</td>
                    <!-- diubah -->
                    <td>{{ $NotaDinasdariPejabatPengadaankePPK->pengadaan->pelaksana->pt_pelaksana }}</td>
                </tr>
                <tr>
                    <td width="120">Alamat</td>
                    <td>:</td>
                    <td>{{ $NotaDinasdariPejabatPengadaankePPK->pengadaan->pelaksana->alamat }}, {{ $NotaDinasdariPejabatPengadaankePPK->pengadaan->pelaksana->kota }}</td>
                </tr>
                <tr>
                    <td width="120">NPWP</td>
                    <td>:</td>
                    <td>{{ $NotaDinasdariPejabatPengadaankePPK->pengadaan->pelaksana->npwp }}</td>
                </tr>
                <tr>
                    <td width="120">Harga Penawaran Setelah Negosiasi</td>
                    <td>:</td>
                    <td>Rp. {{ number_format($NotaDinasdariPejabatPengadaankePPK->pengadaan->nilai_negosiasi)}},-({{ $NotaDinasdariPejabatPengadaankePPK->pengadaan->deskripsi_negosiasi}})</td>
                </tr>
            </table>
        </div>

        <br>
        <div class="row">
            <table class="table" border="0" align="" font-size="1">
                <tr>
                    <td width="42"></td>
                    <td>Demikian atas perhatiannya diucapkan terima kasih.</td>
                </tr>
            </table>
        </div>

        <br>
        <br><br>
        @foreach ($pejabat as $pjb)
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PENGADAAN</td>
                </tr>
                <br>
                <br>
                <br>
                <br>
                <tr>
                    <td width="300"> </td>
                    <td width="250"><u>{{$pjb->pejabat_pengadaan}}</u></td>
                </tr>
                <tr>
                    <td width="300"> </td>
                    <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
                </tr>
            </table>
        </div>
        @endforeach
    </div>
    @endforeach
</div>

<!-- Penetapan Penyedia Barang/Jasa -->
<div style="page-break-before: always;">
    <!-- Kop Surat -->
    <div>
        <table class="table" border="0" align="center">
            <tr>
                <td>
                    <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                </td>
                <td width="40"> </td>
                <td style="text-align: center" width="500px">
                    <font color="black">
                        <p align="center">
                            <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                            <br> DINAS KOMUNIKASI DAN INFORMATIKA
                            <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                            <br> Website : http://www.jatimprov.go.id
                            <br> Email:kominfo@jatimprov.go.id
                            <br> S U R A B A Y A-60235
                        </p>
                    </font>
                </td>
            </tr>
        </table>
        <hr>
    </div>

    @foreach ($PenetapanPenyediaJasa as $PenetapanPenyediaJasa)
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <u><b> PENETAPAN PENYEDIA BARANG / JASA</b></u>
                </td>
            <tr>
        </table>
    </div>

    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <font size="3">Nomor</font>
                </td>
                <td style="text-align: center">
                    <font size="3">:</font>
                </td>
                <td style="text-align: center">
                    <font size="3">020/654.{{$PenetapanPenyediaJasa->nomor}}/114.6/{{$PenetapanPenyediaJasa->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;"> Berdasarkan Berita Acara Evaluasi Dokumen Prakualifikasi Tanggal {{$BAEvaluasi->tanggal->isoFormat('D MMMM Y')}} Nomor : 020/{{$BAEvaluasi->nomor}}/114.6/{{$BAEvaluasi->tanggal->format('Y')}} dan Berita Acara Klarifikasi/Negosiasi Penawaran Tanggal {{$BAKlarifikasiNegosiasi->tanggal->isoFormat('D MMMM Y')}} Nomor : 020/{{$BAKlarifikasiNegosiasi->nomor}}/114.6/{{$BAKlarifikasiNegosiasi->tanggal->format('Y')}}, Pekerjaan Pengadaan {{$PenetapanPenyediaJasa->pengadaan->jenis_pengadaan}} , dengan ini Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur menetapkan penyedia jasa tersebut di bawah ini untuk sebagai Penyedia Barang/Jasa dengan nilai HPS sebesar Rp. {{$PenetapanPenyediaJasa->pengadaan->total_hps}},- ({{$PenetapanPenyediaJasa->pengadaan->deskripsi_hps}}) :</td>
            </tr>
        </table>
    </div>

    <br>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>

                <td width="200">Nama Perusahaan</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $PenetapanPenyediaJasa->pengadaan->pelaksana->pt_pelaksana }}</td>
            </tr>
            <tr>

                <td width="200">Nama Penanggung Jawab</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $PenetapanPenyediaJasa->pengadaan->pelaksana->nama_pelaksana }}</td>
            </tr>
            <tr>

                <td width="200">Alamat</td>
                <td>:</td>
                <td>{{ $PenetapanPenyediaJasa->pengadaan->pelaksana->alamat }}, {{ $PenetapanPenyediaJasa->pengadaan->pelaksana->kota }}</td>
            </tr>
            <tr>

                <td width="200">NPWP</td>
                <td>:</td>
                <td>{{ $PenetapanPenyediaJasa->pengadaan->pelaksana->npwp }}</td>
            </tr>
            <tr>

                <td width="200">Harga Penawaran Setelah Negosiasi</td>
                <td>:</td>
                <td>Rp. {{number_format($PenetapanPenyediaJasa->pengadaan->nilai_negosiasi)}},-({{ $PenetapanPenyediaJasa->pengadaan->deskripsi_negosiasi}})</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="42"></td>
                <td>Demikian atas perhatiannya diucapkan terima kasih.</td>
            </tr>
        </table>
    </div>

    <br><br><br>
    <div class="row">
        <div style="text-align: center">
            <table font-size="3" style="width: 36%; text-align: left; float: right;">
                <tr>
                    <td>Surabaya, {{$PenetapanPenyediaJasa->created_at->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
        </div>
    </div>

    <br><br>
    <table border="0" align="center">
        <tr>
            <td width="290"> </td>
            <td>PEJABAT PENGADAAN</td>
        </tr>
    </table>

    <br><br><br><br><br><br>

    <table border="0" align="center">
        @foreach ($pejabat as $pjb)
        <tr>
            <td width="290"> </td>
            <td><u>{{$pjb->pejabat_pengadaan}}</u></td>
        </tr>
    </table>
    <table border="0" align="center">
        <tr>
            <td width="290"> </td>
            <td>NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
        </tr>
        @endforeach
    </table>
    @endforeach
</div>

<!-- Undangan Penyedia -->
<div style="page-break-before: always;">
    {{-- //kopsurat --}}
    <div>
        <table class="table" border="0" align="center">
            <tr>
                <td>
                    <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                </td>
                <td width="40"> </td>
                <td style="text-align: center" width="500px">
                    <font color="black">
                        <p align="center">
                            <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                            <br> DINAS KOMUNIKASI DAN INFORMATIKA
                            <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                            <br> Website : http://www.jatimprov.go.id
                            <br> Email:kominfo@jatimprov.go.id
                            <br> S U R A B A Y A-60235
                        </p>
                    </font>
                </td>
            </tr>
        </table>
        <hr>
    </div>

    @foreach ($PenunjukanPenyediaBarangJasa as $PenunjukanPenyediaBarangJasa)
    <div>
        <table>
            <tr>
                <td width="280"> </td>
                <!-- diubah. menggunakan kolom craete at tapi aku blm bisa ngubahnya -->
                <td>Surabaya, {{$PenunjukanPenyediaBarangJasa->created_at->isoFormat('D MMMM Y')}}</td>
                <td width="50"> </td>
            </tr>
            <tr>
                <td width="280"> </td>
                <td>Kepada</td>
                <td width="50"> </td>
            </tr>
        </table>
    </div>
    {{-- <br> --}}
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="80">Nomor</td>
                <td>:</td>
                <!-- diubah -->
                <td width="175">020/{{$PenunjukanPenyediaBarangJasa->nomor}}/114.6/{{$PenunjukanPenyediaBarangJasa->created_at->isoFormat('Y')}}</td>
                <td width="50">Yth. Sdr. </td>
                <!-- diubah -->
                <td width="175">{{$PenunjukanPenyediaBarangJasa->pengadaan->pelaksana->jabatan_pelaksana}} {{$PenunjukanPenyediaBarangJasa->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
            <tr>
                <td width="80">Sifat</td>
                <td>:</td>
                <td width="175">Segera</td>
                <td> </td>
                <!-- diubah -->
                <td>{{$PenunjukanPenyediaBarangJasa->pengadaan->pelaksana->alamat}}</td>
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
                <td width="175">Penunjukan Penyedia <br><u> Barang/Jasa</u></td>
                <td></td>
                <td style="text-transform: uppercase; letter-spacing: 3px;"><b><u>{{$PenunjukanPenyediaBarangJasa->pengadaan->pelaksana->kota}}</u></b></td>
            </tr>
        </table>
    </div>

    <br><br><br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Sesuai dengan Surat Penawaran Saudara tanggal 24 Agustus 2022 Nomor : 233/PEN/PN/IX/2022 dan Nota Dinas tanggal {{$NotaDinasdariPejabatPengadaankePPK->tanggal->isoFormat('D MMMM Y')}} Nomor : 020/{{$NotaDinasdariPejabatPengadaankePPK->nomor}}/114.6/{{$NotaDinasdariPejabatPengadaankePPK->tanggal->format('Y')}} perihal Penyampaian Berita Acara Proses Pengadaan Langsung maka Pekerjaan Pengadaan {{$PenunjukanPenyediaBarangJasa->pengadaan->jenis_pengadaan}} kami menunjuk:</td>

            </tr>
        </table>
    </div>
    <br>
    <div style="text-align:center ;">
        <table class="table" border="0" align="center" font-size="1">
            <tr>
                <td width="30"></td>
                <td width="70">Nama Perusahaan</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $PenunjukanPenyediaBarangJasa->pengadaan->pelaksana->pt_pelaksana }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">Nama Penanggung Jawab</td>
                <td>:</td>
                <!-- diubah -->
                <td>{{ $PenunjukanPenyediaBarangJasa->pengadaan->pelaksana->nama_pelaksana }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">Alamat</td>
                <td>:</td>
                <td>{{ $PenunjukanPenyediaBarangJasa->pengadaan->pelaksana->alamat }}, {{ $PenunjukanPenyediaBarangJasa->pengadaan->pelaksana->kota }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">NPWP</td>
                <td>:</td>
                <td>{{ $PenunjukanPenyediaBarangJasa->pengadaan->pelaksana->npwp }}</td>
            </tr>
            <tr>
                <td width="30"></td>
                <td width="120">Harga Penawaran Setelah Negosiasi</td>
                <td>:</td>
                <td>Rp. {{ number_format($PenunjukanPenyediaBarangJasa->pengadaan->nilai_negosiasi)}},-({{ $PenunjukanPenyediaBarangJasa->pengadaan->deskripsi_negosiasi}})</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Dengan ketentuan bahwa, pekerjaan dimaksud dilaksanakan terhitung sejak ditandatangani Surat Perintah Mulai Kerja.</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table class="table" border="0" align="" font-size="1">
            <tr>
                <td width="42"></td>
                <td>Demikian untuk menjadi maklum.
                </td>
            </tr>
        </table>
    </div>

    <br>
    <br>
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="300"> </td>
                <td>PEJABAT PEMBUAT KOMITMEN</td>
            </tr>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td width="300"> </td>
                <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
            </tr>
            <tr>
                <td width="300"> </td>
                <td>NIP. {{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
        </table>
        @endforeach
    </div>
    @endforeach
</div>

<!-- Kuitansi Kontrak -->
<div style="page-break-before: always;">
    {{-- /BA/BERITA ACARA --}}
    <div style="text-align: center;">
        {{-- //kopsurat --}}
        <div>
            <table class="table" border="0" align="center">
                <tr>
                    <td>
                        <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                    </td>
                    <td width="40"> </td>
                    <td style="text-align: center" width="500px">
                        <font color="black">
                            <p align="center">
                                <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                                <br> DINAS KOMUNIKASI DAN INFORMATIKA
                                <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                                <br> Website : http://www.jatimprov.go.id
                                <br> Email:kominfo@jatimprov.go.id
                                <br> S U R A B A Y A-60235
                            </p>
                        </font>
                    </td>
                </tr>
            </table>
            <hr>
        </div>
        <br>
        @foreach ($KuitansiKontrak as $KuitansiKontrak)
        <table border="0">
            <tr>
                <td width="180"></td>
                <td width="150">Tahun Anggaran</td>
                <td wi width="10" dth="5">:</td>
                <td width="200">{{$KuitansiKontrak->tanggal->isoFormat('Y')}}</td>
            </tr>
            <tr>
                <td width="180"></td>
                <td width="150">Nomor Bukti</td>
                <td wi width="10" dth="5">:</td>
                <td width="200">020/{{$KuitansiKontrak->nomor}}/114.6/{{$KuitansiKontrak->tanggal->isoFormat('Y')}}</td>
            </tr>
            <tr>
                <td width="180"></td>
                <td width="150">Mata Anggaran</td>
                <td wi width="10" dth="5">:</td>
                <td width="200">{{$KuitansiKontrak->pengadaan->kode_rekening}}</td>
            </tr>
        </table>
        {{-- judul --}}


        <div style="text-align: center">
            {{-- <font color="black">  --}}
            <p align="center"><b> KUITANSI KONTRAK </b></p>
        </div>
    </div>

    {{-- isi --}}
    <div>
        <div>
            <table border="0">
                <tr>
                    <td width="150">Sudah Terima Dari</td>
                    <td width="10">:</td>
                    <td width="420">Pejabat Pembuat Komitmen Diskominfo Prov. Jatim</td>
                </tr>
                <tr>
                    <td width="150">Jumlah Uang</td>
                    <td width="10">:</td>
                    <td width="420">Rp. {{number_format($KuitansiKontrak->pengadaan->nilai_negosiasi)}}</td>
                </tr>
                <tr>
                    <td width="150">Terbilang</td>
                    <td width="10">:</td>
                    <td width="420">({{$KuitansiKontrak->pengadaan->deskripsi_negosiasi}})</td>
                </tr>
                <tr>
                    <td width="150">Untuk Pembayaran</td>
                    <td width="10">:</td>
                    <td width="420">{{$KuitansiKontrak->pengadaan->jenis_pengadaan}}</td>
                </tr>
            </table>
        </div>

        <br>
        <div>
            <table border="0">
                <tr>
                    <td width="530">Lingkup Pekerjaan /Pengadaan barang / jasa :</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="1" align="center" style="color: #000000; border-color: #000000; border-collapse: collapse;">
                <thead>
                    <tr>
                        <td>
                            <center><b>NO.</b></center>
                        </td>
                        <td>
                            <center><b>JENIS BARANG / PEKERJAAN</b> </center>
                        </td>
                        <td>
                            <center><b>KUANTITAS</b> </center>
                        </td>
                        <td>
                            <center><b>SATUAN</b> </center>
                        </td>
                        <td>
                            <center><b>HARGA SATUAN (Rp.)</b> </center>
                        </td>
                        <td>
                            <center><b>JUMLAH HARGA (Rp.)</b> </center>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: lightgrey;">
                            <center><b>1</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>2</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>3</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>4</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>5</b></center>
                        </td>
                        <td style="background-color: lightgrey;">
                            <center><b>6</b></center>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td colspan="5">PENGADAAN BELANJA ALAT/BAHAN UNTUK KEGIATAN KANTOR</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5">{{$KuitansiKontrak->pengadaan->jenis_pengadaan}}</td>
                    </tr>
                    @php $no = 1; @endphp
                    @foreach ($barang as $brg)
                    <tr>
                        <td>1</td>
                        <td>{{$brg->barang}}</td>
                        <td>{{$brg->jumlah_barang}}</td>
                        <td>{{$brg->satuan}}</td>
                        <td>Rp. {{number_format($brg->harga_satuan)}}</td>
                        <td>Rp. {{number_format($brg->jumlah_harga)}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td style="text-align:right" colspan="5"><b>Total</b></td>
                        @php
                        $png = $pengadaan->id;
                        $sum = DB::table('barangs')
                        ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                        ->sum('jumlah_harga');
                        $ppn = $sum * 0.11;
                        @endphp
                        <td>Rp. {{number_format($sum)}}</td>
                    </tr>
                    <tr>
                        <td style="text-align:right" colspan="5"><b>PPN 11%</b></td>
                        <td>Rp. {{number_format($ppn)}}</td>
                    </tr>
                    <tr>
                        <td style="text-align:right" colspan="5"><b> Jumlah Total</b></td>
                        <td>Rp. {{number_format($KuitansiKontrak->pengadaan->nilai_negosiasi)}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table border="0">
                <tr>
                    <td style="vertical-align: top;">1.</td>
                    <td width="5"></td>
                    <td style="text-align: justify;">Pembayaran dengan Sumber Dana APBD Provinsi Jawa Timur Tahun Anggaran {{$KuitansiKontrak->tanggal->isoFormat('Y')}}, dibebankan pada DP A - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{$KuitansiKontrak->tanggal->isoFormat('Y')}} Kode Rekening {{$KuitansiKontrak->pengadaan->kode_rekening}}
                    </td>
                </tr>

                <br>
                <tr>
                    <td style="vertical-align: top;">2.</td>
                    <td width="5"></td>
                    <td style="text-align: justify;">Jangka Waktu Pelaksanaan {{$KuitansiKontrak->alokasi}} hari kalender, tanggal pelaksanaan yaitu Tanggal 13 September – 20 September 2022
                    </td>
                </tr>
            </table>
            <br>
            <table border="0">
                <tr>
                    <td style="text-align: justify; text-indent: 45px;">Demikian Surat Perintah Kerja ini dibuat dengan sebenarnya pada hari, tanggal dan bulan tersebut diatas dalam rangkap 4 (empat), 2 lembar dibubuhi materai yang cukup dan mempunyai kekuatan hukum yang sama.
                    </td>
                </tr>
            </table>
        </div>

        <br>
        <br>
        {{-- Pejabat --}}
        <div style="text-align:center ;">
            @foreach ($pejabat as $pjb)
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td width="20"> </td>
                    <td width="250">{{$pengadaan->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td width="250">PEJABAT PENGADAAN</td>
                    <td width="20"> </td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td width="20"> </td>
                    <td width="250"><u>{{$KuitansiKontrak->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                    <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                    <td width="20"> </td>
                </tr>
                <tr>
                    <td width="20"> </td>
                    <td width="250">{{$KuitansiKontrak->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                    <td width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                    <td width="20"> </td>
                </tr>
            </table>
            @endforeach
        </div>
        @endforeach
    </div>
</div>

<!-- surat perintah kerja -->
<div style="page-break-before: always;">
    {{-- /BA/BERITA ACARA --}}
    <div style="text-align: center;">
        {{-- //kopsurat --}}
        <div>
            <table class="table" border="0" align="center">
                <tr>
                    <td>
                        <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                    </td>
                    <td width="40"> </td>
                    <td style="text-align: center" width="500px">
                        <font color="black">
                            <p align="center">
                                <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                                <br> DINAS KOMUNIKASI DAN INFORMATIKA
                                <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                                <br> Website : http://www.jatimprov.go.id
                                <br> Email:kominfo@jatimprov.go.id
                                <br> S U R A B A Y A-60235
                            </p>
                        </font>
                    </td>
                </tr>
            </table>
            <hr>
        </div>

        @foreach ($SuratPerintahKerja as $SuratPerintahKerja)
        <div style="text-align: center">
            <p align="center"><u><b> SURAT PERINTAH KERJA </b></u> <br>
                Nomor : 020/654.{{$SuratPerintahKerja->nomor}}/114.6/{{$SuratPerintahKerja->tanggal->format('Y')}} </p>
        </div>
    </div>

    {{-- isi --}}
    <div>
        @foreach ($pejabat as $pj)
        <div>
            <table font-size="1" border="0">
                <tr>
                    <td style="text-indent: 45px; ">Pada hari ini {{$SuratPerintahKerja->created_at->isoFormat('dddd')}} {{$SuratPerintahKerja->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="0">
                <tr>
                    <td>1.</td>
                    <td>Nama</td>
                    <td>:</td>
                    {{-- Ambil dari tabel pejabat --}}
                    <td>{{$pj->pejabat_pembuatan_komitmen}}</td>
                    <td>NIP. {{$pj->nip_pejabat_komitmen}}</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Jabatan</td>
                    <td width="3">:</td>
                    <td colspan="2">Pejabat Pembuat Komitmen Dinas Komunikasi Dan Informatika Provinsi Jawa Timur</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Alamat Kantor</td>
                    <td>:</td>
                    <td colspan="2">Jl. Ahmad Yani 242 - 244 Surabaya</td>
                </tr>
                <tr>
                    <td colspan="5">Bertindak untuk dan atas nama Pemerintah Provinsi Jawa Timur, selanjutnya disebut <b>PIHAK KESATU</b></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Nama</td>
                    <td>:</td>
                    <td colspan="2">{{$SuratPerintahKerja->pengadaan->pelaksana->nama_pelaksana}}</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Jabatan</td>
                    <td width="3">:</td>
                    <td colspan="2">{{$SuratPerintahKerja->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Nama Perusahaan</td>
                    <td width="3">:</td>
                    <td colspan="2">{{$SuratPerintahKerja->pengadaan->pelaksana->pt_pelaksana}}</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>Alamat Kantor</td>
                    <td>:</td>
                    <td colspan="2">{{$SuratPerintahKerja->pengadaan->pelaksana->alamat}} {{$SuratPerintahKerja->pengadaan->pelaksana->kota}}</td>
                </tr>
                <tr>
                    <td colspan="5">Bertindak untuk dan atas nama Pemerintah Provinsi Jawa Timur, selanjutnya disebut <b>PIHAK KEDUA</b></td>
                </tr>
            </table>
        </div>
        <div>
            <table border="0">
                <tr>
                    <td colspan="2">Berdasarkan :</td>
                </tr>
                <tr>
                    <td width="3">1.</td>
                    <td>Surat Permintaan Penawaran Nomor :
                        020/{{$SuratUndanganPermintaanPenawaranHarga->nomor}}/114.6/{{$SuratUndanganPermintaanPenawaranHarga->tanggal->format('Y')}} Tanggal {{$SuratUndanganPermintaanPenawaranHarga->tanggal->isoFormat('D MMMM Y')}}
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Surat Penawaran Harga Nomor :
                        233/PEN/PN/IX/2022 Tanggal 24 Agustus 2022
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Berita Acara Hasil Klarifikasi dan Negosiasi Nomor :
                        020/{{$BAKlarifikasiNegosiasi->nomor}}/114.6/{{$BAKlarifikasiNegosiasi->tanggal->format('Y')}} Tanggal {{$BAKlarifikasiNegosiasi->tanggal->isoFormat('D MMMM Y')}}
                    </td>
                </tr>
                <tr>
                    <!-- Dibenahi -->
                    <td>4.</td>
                    <td>Berita Acara Hasil Pengadaan Langsung Nomor :
                        020/{{$BAKlarifikasiNegosiasi->nomor}}/114.6/{{$BAKlarifikasiNegosiasi->tanggal->format('Y')}} Tanggal {{$BAKlarifikasiNegosiasi->tanggal->isoFormat('D MMMM Y')}}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Maka PIHAK KESATU menerbitkan Surat Perintah Kerja, dengan ketentuan </td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Lingkup Pekerjaan :</td>
                </tr>
            </table>
            <table border="1" align="center" style="color: #333333;border-color: #333333;border-collapse: collapse;">
                <thead>
                    <tr>
                        <td>NO</td>
                        <td>JENIS BARANG / PEKERJAAN</td>
                        <td>SPESIFIKASI</td>
                        <td>KUANTITAS</td>
                        <td>SATUAN</td>
                        <td>HARGA SATUAN (Rp.)</td>
                        <td>JUMLAH HARGA (Rp.)</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                    </tr>
                    <tr colspan="7">PENGADAAN BELANJA ALAT/BAHAN UNTUK KEGIATAN KANTOR</tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>{{$SuratPerintahKerja->pengadaan->jenis_pengadaan}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($barang as $brg)
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{{$brg->barang}}</td>
                        <td>{{$brg->jumlah_barang}}</td>
                        <td>{{$brg->satuan}}</td>
                        <td>{{$brg->harga_satuan}}</td>
                        {{-- @php
                        // $jumlahbarang = $barang["jumlah_barang"];
                        $jumlahbarang = $brg->jumlah_barang;
                        $hargabarang = $brg->harga_satuan;
                        // $hargabarang = $barang["harga_barang"];

                        $jumlah_harga = $jumlahbarang * $hargabarang;
                        @endphp --}}
                        <td>{{$brg->jumlah_harga}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td style="text-align:right" colspan="6">Total</td>
                        @php
                        $png = $pengadaan->id;
                        $sum = DB::table('barangs')
                        ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                        ->sum('jumlah_harga');
                        $ppn = $sum * 0.11;
                        @endphp
                        <td>{{$sum}}</td>
                    </tr>
                    <tr>
                        <td style="text-align:right" colspan="6">PPN 11%</td>
                        <td>{{$ppn}}</td>
                    </tr>
                    <tr>
                        <td style="text-align:right" colspan="6">Jumlah Total</td>
                        <td>{{$SuratPerintahKerja->pengadaan->nilai_negosiasi}}</td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tr>
                    <td>6.</td>
                    <td colspan="2">Pembayaran dengan Sumber Dana APBD Provinsi Jawa Timur Tahun Anggaran {{date('Y', strtotime($pj->tanggal_sk))}}, dibebankan pada DPA - SKPD Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran {{date('Y', strtotime($pj->tanggal_sk))}}, Kode Rekening {{$SuratPerintahKerja->pengadaan->pelaksana->kode_rekening}}
                    </td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td colspan="2">Jangka Waktu Pelaksanaan
                        @foreach ($SuratPerintahMulaiKerja as $SuratPerintahMulaiKerja)
                        {{$SuratPerintahMulaiKerja->alokasi}} hari kalender, tanggal pelaksanaan yaitu Tanggal {{$SuratPerintahMulaiKerja->tanggal->isoFormat('D MMMM Y')}}
                        @endforeach -
                        @foreach ($BASerahTerimaHasilPekerjaan as $BASerahTerimaHasilPekerjaan)
                        {{$BASerahTerimaHasilPekerjaan->tanggal->isoFormat('D MMMM Y')}}
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td colspan="2">Instruksi kepada PIHAK KEDUA :</td>
                </tr>
                <tr>
                    <td rowspan="3"> </td>
                    <td width="3">A.</td>
                    <td>Penagihan hanya dapat dilakukan setelah penyelesaian pekerjaan yang diperintahkan dalam SPK ini dan dibuktikan dengan Berita Acara Serah Terima.</td>
                </tr>
                <tr>
                    <td>B.</td>
                    <td>Jika pekerjaan tidak dapat diselesaikan dalam jangka waktu pelaksanaan pekerjaan karena kesalahan atau kelalaian penyedia maka penyedia berkewajiban untuk membayar denda kepada PPK sebesar 1/1000 (satu per seribu) dari nilai SPK sebelum PPn setiap hari kalender keterlambatan.</td>
                </tr>
                <tr>
                    <td>C.</td>
                    <td>Selain tunduk kepada ketentuan dalam SPK ini, penyedia berkewajiban untuk mematuhi Standar Ketentuan dan Syarat Umum SPK terlampir.</td>
                </tr>
                <br>
                <tr>
                    <td colspan="3" style="text-align: left ;text-align: justify; text-indent: 45px;">Demikian Surat Perintah Kerja ini dibuat dengan sebenarnya pada hari, tanggal dan bulan tersebut diatas dalam rangkap 4 (empat), 2 lembar dibubuhi materai yang cukup dan mempunyai kekuatan hukum yang sama.</td>
                </tr>
            </table>
        </div>
        <br>
        {{-- Pejabat --}}
        <div>
            <table border="0" style="text-align: center;">
                <tr>
                    <td colspan="3" width=525></td>
                </tr>
                <tr>
                    <td width="180">PIHAK KEDUA</td>
                    <td width="165"></td>
                    <td width="180">Menyetujui :</td>
                </tr>
                <tr>
                    <td width="180">Penyedia Barang/Jasa</td>
                    <td width="165"></td>
                    <td width="180">PIHAK KESATU</td>
                </tr>
                <tr>
                    <td width="180">{{$SuratPerintahKerja->pengadaan->pelaksana->pt_pelaksana}}</td>
                    <td width="165"></td>
                    <td width="180">PEJABAT PEMBUAT KOMITMEN</td>
                </tr>
                <br><br><br><br><br>
                <tr>
                    <td width="180"><u>{{$SuratPerintahKerja->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                    <td width="165"></td>
                    <td width="180"><u>{{$pj->pejabat_pembuatan_komitmen}}</u></td>
                </tr>
                <tr>
                    <td width="180">NIP. {{$SuratPerintahKerja->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                    <td width="165"></td>
                    <td width="180">NIP. {{$pj->nip_pejabat_komitmen}}</td>
                </tr>
            </table>
            <table style="text-align: center;" border="0">
                <tr>
                    <td width="160"></td>
                    <td width="195">Mengetahui:</td>
                    <td width="160"></td>
                </tr>
                <tr>
                    <td width="160"></td>
                    <td width="195">KUASA PENGGUNA ANGGARAN</td>
                    <td width="160"></td>
                </tr>
                <br><br><br><br><br>
                <tr>
                    <td width="160"></td>
                    <td width="195"><u>{{$pj->kuasa_pengguna_anggaran}}</u></td>
                    <td width="160"></td>
                </tr>
                <tr>
                    <td width="160"></td>
                    <td width="195">NIP. {{$pj->nip_kuasa_pengguna}}</td>
                    <td width="160"></td>
                </tr>
                @endforeach
            </table>
        </div>
        @endforeach
    </div>
</div>

<!-- surat perintah mulai kerja -->
<div style="page-break-before: always;">
    <!-- Kop Surat -->
    <div>
        <table class="table" border="0" align="center">
            <tr>
                <td style="vertical-align:top; text-align: justify;">
                    <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/J4hg9c94/logo-jatim.jpg' width="90" height="110" alt='' /></a>
                </td>
                <td style="vertical-align:top; text-align: justify;" width="40"> </td>
                <td style="vertical-align:top; text-align: justify;" style; width="500px">
                    <font color="black">
                        <p align="center">
                            <b>PEMERINTAH PROVINSI JAWA TIMUR</b>
                            <br> DINAS KOMUNIKASI DAN INFORMATIKA
                            <br> Jl. Ahmad Yani 242-244 Telp. (031) 8294608 Fax. (031) 8294517
                            <br> Website : http://www.jatimprov.go.id
                            <br> Email:kominfo@jatimprov.go.id
                            <br> S U R A B A Y A-60235
                        </p>
                    </font>
                </td>
            </tr>
        </table>
        <hr>
    </div>

    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="vertical-align:top; text-align: justify;" style; <u><b> SURAT PERINTAH MULAI KERJA (SPMK)</b></u>
                </td>
            <tr>
        </table>
    </div>

    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="vertical-align:top; text-align: justify;" style; <font size="3">Nomor</font>
                </td>
                <td style="vertical-align:top; text-align: justify;" style; <font size="3">:</font>
                </td>
                <td style="vertical-align:top; text-align: justify;" style; <font size="3">020/654.{{$SuratPerintahMulaiKerja->nomor}} /114.6/{{$SuratPerintahMulaiKerja->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    </div>

    <div class="row">
        <table>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify; text-indent: 45px;">Pada hari ini {{$SuratPerintahMulaiKerja->tanggal->isoFormat('dddd')}}, Tanggal {{$SuratPerintahMulaiKerja->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>

    @foreach ($pejabat as $pjb)
    <div>
        <table border="0" align="1" width="565">
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify;" width="90">Nama</td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify;" width="90">NIP</td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">{{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify;" width="90">Jabatan</td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; " width="370">Pejabat Pembuat Komitmen Dinas Komunikasi Dan Informatika Provinsi Jawa Timur</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify;" width="90">Alamat Kantor</td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">Jl. A. Yani No. 242-244 Surabaya</td>
            </tr>
        </table>
    </div>
    @endforeach

    <div class="row">
        <table>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify; text-indent: 45px;">Yang Bertindak untuk dan atas nama Dinas Komunikasi dan Infromatika Provinsi Jawa Timur, yang selanjutnya disebut <b> PIHAK KESATU</b>, memberikan perintah kerja kepada :
                </td>
            </tr>
        </table>
    </div>
    <div class="row">
        <table>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify;">Berdasarkan Kwitansi Kontrak Nomor : 020/020/{{$KuitansiKontrak->nomor}}/114.6/{{$KuitansiKontrak->tanggal->format('Y')}} tanggal {{$KuitansiKontrak->deskripsi_tgl}} Tahun {{$KuitansiKontrak->tanggal->format('Y')}} dengan ini:
                </td>
            </tr>
        </table>
    </div>

    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="vertical-align:top; text-align: justify;" style; font-size="1">
                    <b> MEMERINTAHKAN :</b>
                </td>
            <tr>
        </table>
    </div>

    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify;" width="90">Nama</td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="400"> {{$SuratPerintahMulaiKerja->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify;" width="90">Jabatan</td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">{{$SuratPerintahMulaiKerja->pengadaan->pelaksana->jabatan_pelaksana}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify;" width="90">Nama Perusahaan</td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">{{$SuratPerintahMulaiKerja->pengadaan->pelaksana->pt_pelaksana}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify;" width="90">Alamat Kantor</td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">{{$SuratPerintahMulaiKerja->pengadaan->pelaksana->alamat}}, {{$SuratPerintahMulaiKerja->pengadaan->pelaksana->kota}}</td>
            </tr>
        </table>
    </div>

    <div class="row">
        <table>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"></td>
                <td style="vertical-align:top; text-align: justify; text-indent: 45px;">Yang bertindak untuk dan atas nama Perusahaan {{$SuratPerintahMulaiKerja->pengadaan->pelaksana->pt_pelaksana}}, yang selanjutnya disebut <b>PIHAK KEDUA</b> Untuk segera memulai pelaksanaan pekerjaan dengan memperhatikan ketentuan-ketentuan sebagaI berikut :
                </td>
            </tr>
        </table>
    </div>

    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"> </td>
                <td style="vertical-align:top; text-align: justify;" width="15">1.</td>
                <td style="vertical-align:top; text-align: justify;" width="130">Pekerjaan</td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">{{$SuratPerintahMulaiKerja->pengadaan->jenis_pengadaan}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"> </td>
                <td style="vertical-align:top; text-align: justify;" width="15">2.</td>
                <td style="vertical-align:top; text-align: justify;" width="130">Tanggal Mulai Kerja </td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">{{$SuratPerintahMulaiKerja->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"> </td>
                <td style="vertical-align:top; text-align: justify;" width="15">3.</td>
                <td style="vertical-align:top; text-align: justify;" width="130">Syarat-syarat pekerjaan </td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">Sesuai dengan persyaratan dan ketentuan kontrak</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"> </td>
                <td style="vertical-align:top; text-align: justify;" width="15">4.</td>
                <td style="vertical-align:top; text-align: justify;" width="130">Waktu penyelesaian </td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">Selama {{$SuratPerintahMulaiKerja->alokasi}} hari kalender dan pekerjaan harus sudah selesai pada tanggal{{$BASerahTerimaHasilPekerjaan->tanggal->isoformat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top; text-align: justify;" width="8"> </td>
                <td style="vertical-align:top; text-align: justify;" width="15">5.</td>
                <td style="vertical-align:top; text-align: justify;" width="130">Sanksi </td>
                <td style="vertical-align:top; text-align: justify;" width="5">:</td>
                <td style="vertical-align:top; text-align: justify;" width="370">Terhadap keterlambatan penyerahan hasil kerja dikenakan sanksi dan denda sesuai dengan ketentuan kontrak</td>
            </tr>
        </table>
    </div>
    <div>
        <table align="center" border="0" font-size="0" width="565">
            <tr>
                <td></td>
                <td align="center" style="vertical-align:top; ">Ditetapkan di : Surabaya </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">Pada tanggal : {{$SuratPerintahMulaiKerja->created_at->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>

                <td style="vertical-align:top; " align="center">MENERIMA DAN MENYETUJUI <br> PIHAK KEDUA</td>


                <td style="vertical-align:top;" width="225" align="center">PIHAK KESATU <br> PEJABAT PEMBUAT KOMITMEN</td <td style="vertical-align:top; text-align: justify;" width="20">
                </td>
            </tr>
            <tr>

                <td style="vertical-align:top; " width="225" align="center">{{$SuratPerintahMulaiKerja->pengadaan->pelaksana->pt_pelaksana}}</td>
                <td style="vertical-align:top; " width="225" align="center">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
            </tr>
        </table>
    </div>
    @foreach ($pejabat as $pjb)
    <br><br><br>
    <div style="text-align:center ;">
        <table style; border="0" font-size="0" width="565">
            <tr>
                <td style="vertical-align:top; " width="225" align="center"><u>{{$SuratPerintahMulaiKerja->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                <td style="vertical-align:top; " width="225" align="center"><u>{{$pjb->pejabat_pengadaan}}</u></td>
            </tr>
            <tr>
                <td style="vertical-align:top;" width="225" align="center">{{$SuratPerintahMulaiKerja->pengadaan->pelaksana->jabatan_pelaksana}} </td>
                <td style="vertical-align:top;" width="225" align="center">NIP. {{$pjb->nip_pejabat_pengadaan}}</td>
            </tr>
        </table>
        @endforeach
    </div>
</div>

<!-- BA Serah Terima -->
<div style="page-break-before: always;">
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <u><b>BERITA ACARA SERAH TERIMA HASIL PEKERJAAN</b></u>
                </td>
            <tr>
        </table>
    </div>


    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="text-align: center">
                    <font size="3">Nomor</font>
                </td>
                <td style="text-align: center">
                    <font size="3">:</font>
                </td>
                <td style="text-align: center">
                    <font size="3">020/654.{{$BASerahTerimaHasilPekerjaan->nomor}} /114.6/{{$BASerahTerimaHasilPekerjaan->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td width="8"></td>
                <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$BASerahTerimaHasilPekerjaan->tanggal->isoFormat('dddd')}}, Tanggal {{$BASerahTerimaHasilPekerjaan->deskripsi_tgl}} Kami yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>
    <br>
    @foreach ($pejabat as $pjb)
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="5">I.</td>
                <td width="100">Nama</td>
                <td>:</td>
                <td width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="100">NIP</td>
                <td>:</td>
                <td width="370">{{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">Pejabat Pembuat Komitmen</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="100">Alamat</td>
                <td>:</td>
                <td width="370">Jl. A. Yani No. 242-244 Surabaya</td>
            </tr>
        </table>
    </div>
    @endforeach
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="470" colspan="4">Yang selanjutnya disebut <b>PIHAK KESATU</b> </td>
            </tr>
            <tr><br></tr>
            <tr>
                <td width="8"></td>
                <td width="5">II.</td>
                <td width="100">Nama</td>
                <td width="5">:</td>
                <td width="370">{{$BASerahTerimaHasilPekerjaan->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="100">Jabatan</td>
                <td>:</td>
                <td width="370">{{$BASerahTerimaHasilPekerjaan->pengadaan->pelaksana->jabatan_pelaksana}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="100">Alamat</td>
                <td>:</td>
                <td width="370">{{$BASerahTerimaHasilPekerjaan->pengadaan->pelaksana->alamat}}, {{$pengadaan->pengadaan->pelaksana->kota}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="470" colspan="4">Yang selanjutnya disebut <b>PIHAK KEDUA</b> </td>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="160">Dengan ini menyatakan bahwa :</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="5">1.</td>
                <td width="370" colspan="3"> <b>PIHAK KEDUA</b> telah menyerahkan pekerjaan sesuai dengan :</td>
            </tr>

            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="120">Kuitansi Kontrak nomor</td>
                <td width="5">:</td>
                <td width="370"> 020/{{$KuitansiKontrak->nomor}}/114.6/{{$KuitansiKontrak->tanggal->format('Y')}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="120">Tanggal</td>
                <td width="5">:</td>
                <td width="370"> {{$KuitansiKontrak->tanggal->format('d F Y')}}</td>
            </tr>

            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="5"></td>
                <td width="100">Pekerjaan</td>
                <td width="5">:</td>
                <td width="370"> {{$BASerahTerimaHasilPekerjaan->pengadaan->jenis_pengadaan}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="5" style="vertical-align:top">2.</td>
                <td style="text-align: left ;text-align: justify;" colspan="3"><b>PIHAK KESATU</b> telah memeriksa dan menerima dengan baik kemajuan hasil pekerjaan tersebut, dengan rincian jumlah, jenis dan spesifikasi barang/jasa sebagaimana daftar terlampir.</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="5" style="vertical-align:top">3.</td>
                <td style="text-align: left ;text-align: justify;" colspan="3">Apabila dikemudian hari berdasarkan hasil audit terjadi :</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="5"></td>
                <td width="5" style="vertical-align:top; text-align: left ;text-align: justify;" colspan="3">a. Ketidaksesuaian perhitungan volume hasil pekerjaan dengan kontrak; dan/atau</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td width="5"></td>
                <td width="5" style="vertical-align:top; text-align: left ;text-align: justify;" colspan="3">b. Penyerahan barang/jasa yang kualitasnya tidak sesuai dengan kontrak;</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="5"></td>
                <td style="text-align: left ;text-align: justify;">Maka penyedia dikenakan ganti kerugian sebesar nilai kerugian yang ditimbulkan .</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td width="8"></td>
                <td width="25"></td>
                <td width="5"></td>
                <td style="text-align: left ;text-align: justify;">Demikian Berita Acara ini dibuat untuk dipergunakan seperlunya.</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" font-size="0">
            <tr>
                <td width="340"> </td>
                <td>Surabaya, {{$BASerahTerimaHasilPekerjaan->created_at->isoFormat('D MMMM Y')}}</td>
                {{-- <td width="50"> </td> --}}
            </tr>
        </table>
    </div>

    <br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><b>PIHAK KEDUA</b></td>
                <td width="250"><b>PIHAK KESATU</b></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>

    <br><br><br><br><br>
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><u>{{$BASerahTerimaHasilPekerjaan->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">{{$BASerahTerimaHasilPekerjaan->pengadaan->pelaksana->jabatan_pelaksana}} </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>


    <br><br>

    <!-- lampiran -->
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="8"></td>
                <td>Lampiran Berita Acara Serah Terima Hasil Pekerjaan</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" font-size="0">
            <tr>
                <td width="8"></td>
                <td>Nomor</td>
                <td width="10">:</td>
                <td width="250">020/{{$BASerahTerimaHasilPekerjaan->nomor}} /114.6/{{$BASerahTerimaHasilPekerjaan->tanggal->isoFormat('Y')}}</td>
            </tr>
            <tr>
                <td width="8"></td>
                <td>Tanggal</td>
                <td width="10">:</td>
                <td width="250">{{$BASerahTerimaHasilPekerjaan->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <table border="1" align="center" style="color: #000000; border-color: #000000; border-collapse: collapse;" width="555">
            <thead>
                <tr>
                    <th><b>NO.</b></th>
                    <th colspan="2"><b>Banyaknya</b></th>
                    <th><b>Uraian dan Spesifikasi</b></th>
                    <th><b>HARGA SATUAN (Rp.)</b></th>
                    <th><b>JUMLAH HARGA (Rp.)</b></th>
                </tr>
                <tr>
                    <td height="20"></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr colspan="7">PENGADAAN BELANJA ALAT/BAHAN UNTUK KEGIATAN KANTOR</tr>
            </thead>
            <tr>
                <td>1</td>
                <td colspan="5">{{$BASerahTerimaHasilPekerjaan->pengadaan->jenis_pengadaan}}</td>
            </tr>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($barang as $brg)
                <tr>
                    <td></td>
                    <td align="center">{{$brg->jumlah_barang}}</td>
                    <td align="center">{{$brg->satuan}}</td>
                    <td align="center">{{$brg->barang}}</td>
                    <td align="center">Rp. {{number_format($brg->harga_satuan)}},-</td>
                    <td>Rp. {{number_format($brg->jumlah_harga)}},-</td>
                </tr>
                @endforeach
                <tr>
                    <td style="text-align:right" colspan="5"><b>Total</b></td>
                    @php
                    $png = $pengadaan->id;
                    $sum = DB::table('barangs')
                    ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                    ->sum('jumlah_harga');
                    $ppn = $sum * 0.11;
                    @endphp
                    <td>Rp. {{number_format($sum)}},-</td>
                </tr>
                <tr>
                    <td style="text-align:right" colspan="5"><b>PPN 11%</b></td>
                    <td>Rp. {{number_format($ppn)}},-</td>
                </tr>
                <tr>
                    <td style="text-align:right" colspan="5"><b> Jumlah Total</b></td>
                    <td>Rp. {{number_format($BASerahTerimaHasilPekerjaan->pengadaan->nilai_negosiasi)}},-</td>
                </tr>
                <tr>
                    <td colspan="6">Terbilang : =={{$BASerahTerimaHasilPekerjaan->pengadaan->deskripsi_negosiasi}}==</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br>
    <br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><b>PIHAK KEDUA</b></td>
                <td width="250"><b>PIHAK KESATU</b></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <br><br><br><br>
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250"><u>{{$BASerahTerimaHasilPekerjaan->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                <td width="20"> </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td width="20"> </td>
                <td width="250">{{$BASerahTerimaHasilPekerjaan->pengadaan->pelaksana->jabatan_pelaksana}} </td>
                <td width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                <td width="20"> </td>
            </tr>
        </table>
        @endforeach
    </div>
    @endforeach



</div>

<!-- Laporan Proses-->
<div style="page-break-before: always;">
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="vertical-align:top" style="text-align: center">
                    <u><b>LAPORAN PROSES PENGADAAN BARANG/JASA</b></u>
                </td>
            <tr>
        </table>
    </div>

    @foreach ($LaporanProsesPengadaanBarangJasa as $LaporanProsesPengadaanBarangJasa)
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td style="vertical-align:top" style="text-align: center">
                    <font size="3">Nomor</font>
                </td>
                <td style="vertical-align:top" style="text-align: center">
                    <font size="3">:</font>
                </td>
                <td style="vertical-align:top" style="text-align: center">
                    <font size="3">020/{{$LaporanProsesPengadaanBarangJasa->nomor}} /114.6/{{$LaporanProsesPengadaanBarangJasa->tanggal->isoFormat('Y')}}</font>
                </td>
                </td>
            <tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table>
            <tr>
                <td style="vertical-align:top" width="8"></td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$LaporanProsesPengadaanBarangJasa->tanggal->isoFormat('dddd')}}, Tanggal {{$LaporanProsesPengadaanBarangJasa->deskripsi_tgl}} Kami yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>

    @foreach ($pejabat as $pjb)
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="25"></td>
                <td style="vertical-align:top" width="15">I.</td>
                <td style="vertical-align:top" width="100">Nama</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="100">NIP</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370">{{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="100">Jabatan</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370">Pejabat Pembuat Komitmen</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="100">Alamat</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370">Jl. A. Yani No. 242-244 Surabaya</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="470">Yang selanjutnya disebut <b>PIHAK KESATU</b> </td>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="25"></td>
                <td style="vertical-align:top" width="15">II.</td>
                <td style="vertical-align:top" width="100">Nama</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370">{{$pjb->kuasa_pengguna_anggaran}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="100">NIP</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370">{{$pjb->nip_kuasa_pengguna}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="100">Jabatan</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370">Kuasa Pengguna Anggaran</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="100">Alamat</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370">Jl. Ahmad Yani 242 - 244 Surabaya</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="470">Yang selanjutnya disebut <b>PIHAK KEDUA</b> </td>
        </table>
    </div>
    @endforeach


    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="25"></td>
                <td style="vertical-align:top" width="160">Dengan ini menyatakan bahwa :</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="25"></td>
                <td style="vertical-align:top" width="15">1.</td>
                <td style="vertical-align:top" width="370"> <b>PIHAK KESATU</b> telah melaporkan pekerjaan sesuai dengan :</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="120">Kuitansi Kontrak nomor</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370"> 020/{{$KuitansiKontrak->nomor}}/114.6/{{$KuitansiKontrak->tanggal->format('Y')}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="120">Tanggal</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370"> {{$KuitansiKontrak->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="43"></td>
                <td style="vertical-align:top" width="120">Pekerjaan</td>
                <td style="vertical-align:top">:</td>
                <td style="vertical-align:top" width="370"> {{$LaporanProsesPengadaanBarangJasa->pengadaan->jenis_pengadaan}}</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="25"></td>
                <td style="vertical-align:top" width="15" style="vertical-align: top;">2.</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;"><b>PIHAK KEDUA</b> telah memeriksa dan menerima dengan baik kemajuan hasil pekerjaan tersebut, dengan rincian jumlah, jenis dan spesifikasi barang/jasa sebagaimana daftar terlampir.</td>
            </tr>
        </table>
    </div>

    <br>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="25"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Demikian Berita Acara ini dibuat untuk dipergunakan seperlunya.
                </td>
            </tr>
        </table>
    </div>

    <br>
    <br>
    <br>
    <div>
        <table border="0" font-size="0">
            <tr>
                <td style="vertical-align:top" width="340"> </td>
                <td style="vertical-align:top">Surabaya, {{$LaporanProsesPengadaanBarangJasa->created_at->isoFormat('D MMMM Y')}}</td>
                {{-- <td style="vertical-align:top" width="50"> </td> --}}
            </tr>
        </table>
    </div>

    <br>
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
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
        <table style="text-align: center" border="0" font-size="0">
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
    <br><br><br><br><br>
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
            <tr>
                <td style="vertical-align:top" width="8"></td>
                <td style="vertical-align:top">Lampiran Laporan Proses Pengadaan Barang/Jasa</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" font-size="0">
            <tr>
                <td style="vertical-align:top" width="8"></td>
                <td style="vertical-align:top">Nomor</td>
                <td style="vertical-align:top" width="10">:</td>
                <td style="vertical-align:top" width="250">020/{{$LaporanProsesPengadaanBarangJasa->nomor}} /114.6/{{$LaporanProsesPengadaanBarangJasa->tanggal->isoFormat('Y')}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="8"></td>
                <td style="vertical-align:top">Tanggal</td>
                <td style="vertical-align:top" width="10">:</td>
                <td style="vertical-align:top" width="250">{{$LaporanProsesPengadaanBarangJasa->tanggal->isoFormat('D MMMM Y')}}</td>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <table border="1" align="center" style="color: #000000; border-color: #000000; border-collapse: collapse;">
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
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>1</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>2</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>3</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>4</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>5</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
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
                <td style="vertical-align:top" colspan="5">{{$pengadaan->pengadaan->jenis_pengadaan}}</td>
            </tr>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($barang as $brg)
                <tr>
                    <td></td>
                    <td style="vertical-align:top">{{$brg->barang}}</td>
                    <td style="vertical-align:top">{{$brg->jumlah_barang}}</td>
                    <td style="vertical-align:top">{{$brg->satuan}}</td>
                    <td style="vertical-align:top">Rp. {{number_format($brg->harga_satuan)}}</td>
                    <td style="vertical-align:top">Rp. {{number_format($brg->jumlah_harga)}}</td>
                </tr>
                @endforeach
                <tr>
                    <td style="vertical-align:top" style="text-align:right" colspan="5"><b>Total</b></td>
                    @php
                    $png = $pengadaan->id;
                    $sum = DB::table('barangs')
                    ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                    ->sum('jumlah_harga');
                    $ppn = $sum * 0.11;
                    @endphp
                    <td style="vertical-align:top">Rp. {{number_format($sum)}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="text-align:right" colspan="5"><b>PPN 11%</b></td>
                    <td style="vertical-align:top">Rp. {{number_format($ppn)}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="text-align:right" colspan="5"><b> Jumlah Total</b></td>
                    <td style="vertical-align:top">Rp. {{number_format($LaporanProsesPengadaanBarangJasa->pengadaan->nilai_negosiasi)}}</td>
                </tr>
            </tbody>
        </table>
        <br>
    </div>
    <br>
    @foreach ($pejabat as $pjb)
    <div style="text-align:center ;">
        <table style="text-align: center" border="0" font-size="0">
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
        <table style="text-align: center" border="0" font-size="0">
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
        @endforeach
    </div>
    @endforeach



</div>

<!-- BA Penyerahan Barang -->
<div style="page-break-before: always;">
    <div class="card-body">
        <div class="row">
            <table border="0" align="center">
                <tr>
                    <td style="text-align: center">
                        <u><b>BERITA ACARA PENYERAHAN BARANG/JASA</b></u>
                    </td>
                <tr>
            </table>
        </div>

        @foreach ($BAPenyerahanBarangJasa as $BAPenyerahanBarangJasa)
        <div class="row">
            <table border="0" align="center">
                <tr>
                    <td style="text-align: center">
                        <font size="3">Nomor</font>
                    </td>
                    <td style="text-align: center">
                        <font size="3">:</font>
                    </td>
                    <td style="text-align: center">
                        <font size="3">020/654.{{$BAPenyerahanBarangJasa->nomor}}/114.6/{{$BAPenyerahanBarangJasa->tanggal->isoFormat('Y')}}</font>
                    </td>
                    </td>
                <tr>
            </table>
        </div>
        <br>
        <div class="row">
            <table>
                <tr>
                    <td width="8"></td>
                    <td style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$BAPenyerahanBarangJasa->tanggal->isoFormat('dddd')}}, Tanggal {{$BAPenyerahanBarangJasa->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="0">
                <tr>
                    <td width="10"></td>
                    <td width="15">I.</td>
                    <td width="100">Nama</td>
                    <td width="5">:</td>
                    <td width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">NIP</td>
                    <td>:</td>
                    <td width="370">{{$pjb->nip_pejabat_komitmen}}</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">Jabatan</td>
                    <td>:</td>
                    <td width="370">Pejabat Pembuat Komitmen</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">Alamat</td>
                    <td>:</td>
                    <td width="370">Jl. A. Yani No. 242-244 Surabaya</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="470" colspan="3">Yang selanjutnya disebut <b>PIHAK KESATU</b> </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15">II.</td>
                    <td width="100">Nama</td>
                    <td>:</td>
                    <td width="370">{{$pjb->pengurus_barang}}</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">NIP</td>
                    <td>:</td>
                    <td width="370">{{$pjb->nip_pengurus_barang}}</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="100">Jabatan</td>
                    <td>:</td>
                    <td width="370">Pengurus Barang Persediaan</td>
                </tr>
                <tr>
                    <td width="10"></td>
                    <td width="15"></td>
                    <td width="470" colspan="3">Yang selanjutnya disebut <b>PIHAK KEDUA</b> </td>
                </tr>
            </table>
        </div>

        <br>
        <div>
            <table border="0">
                <tr>
                    <td width="30"></td>
                    <td style="vertical-align:top" width="15">1.</td>
                    <td style="vertical-align:top" style="text-align: left ;text-align: justify;"><b>PIHAK KESATU</b> telah menyerahkan barang/jasa hasil pekerjaan pengadaan {{$BAPenyerahanBarangJasa->pengadaan->jenis_pengadaan}} hasil pekerjaan sesuai dengan Kwitansi Kontrak nomor : 020/{{$KuitansiKontrak->nomor}}/114.6/{{$KuitansiKontrak->tanggal->format('Y')}}, Tanggal {{$KuitansiKontrak->tanggal->format('d F Y')}};</td>
                </tr>
                <tr>
                    <td width="30"></td>
                    <td style="vertical-align:top" width="15">2.</td>
                    <td style="vertical-align:top" style="text-align: left ;text-align: justify;"><b>PIHAK KEDUA</b> telah menerima dengan baik penyerahan barang/jasa tersebut sebagaimana daftar terlampir.</td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td width="30"></td>
                    <td colspan="2" style="vertical-align:top; text-align: left ;text-align: justify;">Demikian Berita Acara ini dibuat untuk dipergunakan seperlunya.</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table border="0" font-size="0">
                <tr>
                    <td style="vertical-align:top" width="340"> </td>
                    <td style="vertical-align:top">Surabaya, {{$BAPenyerahanBarangJasa->created_at->isoFormat('D MMMM Y')}}</td>
                    {{-- <td style="vertical-align:top" width="50"> </td> --}}
                </tr>
            </table>
        </div>

        <br>
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td style="vertical-align:top" width="20"> </td>
                    <td style="vertical-align:top" width="250"><b>PIHAK KEDUA</b></td>
                    <td style="vertical-align:top" width="250"><b>PIHAK KESATU</b></td>
                    <td style="vertical-align:top" width="20"> </td>
                </tr>
                <tr>
                    <td style="vertical-align:top" width="20"> </td>
                    <td style="vertical-align:top" width="250">PENGURUS BARANG PERSEDIAAN</td>
                    <td style="vertical-align:top" width="250">PEJABAT PEMBUAT KOMITMEN</td>
                    <td style="vertical-align:top" width="20"> </td>
                </tr>
            </table>
        </div>
        <br><br><br><br>
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td style="vertical-align:top" width="20"> </td>
                    <td style="vertical-align:top" width="250"><u>{{$pjb->pengurus_barang}}</u></td>
                    <td style="vertical-align:top" width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                    <td style="vertical-align:top" width="20"> </td>
                </tr>
                <tr>
                    <td style="vertical-align:top" width="20"> </td>
                    <td style="vertical-align:top" width="250">NIP. {{$pjb->nip_pengurus_barang}} </td>
                    <td style="vertical-align:top" width="250">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                    <td style="vertical-align:top" width="20"> </td>
                </tr>
            </table>
        </div>
        @endforeach
    </div>
</div>

<!-- BA Pembayaran -->
<div style="page-break-before: always;">
    {{-- <div class="row"> --}}
    <table border="0" align="center">
        <tr>
            <td style="vertical-align:top" style="text-align: center">
                <u><b>BERITA ACARA PEMBAYARAN</b></u>
            </td>
        <tr>
    </table>
    @foreach ($BAHasilPembayaran as $BAHasilPembayaran)
    <table border="0" align="center">
        <tr>
            <td style="vertical-align:top" style="text-align: center">
                <font size="3">Nomor</font>
            </td>
            <td style="vertical-align:top" style="text-align: center">
                <font size="3">:</font>
            </td>
            <td style="vertical-align:top" style="text-align: center">
                <font size="3">020/654.{{$BAHasilPembayaran->nomor}} /114.6/{{$BAHasilPembayaran->tanggal->isoFormat('Y')}}</font>
            </td>
            </td>
        <tr>
    </table>
    {{-- </div> --}}

    <div class="row">
        <table>
            <tr>
                <td style="vertical-align:top" width="8"></td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify; text-indent: 45px;">Pada hari ini {{$BAHasilPembayaran->tanggal->isoFormat('dddd')}}, Tanggal {{$BAHasilPembayaran->deskripsi_tgl}}. Kami yang bertanda tangan dibawah ini :</td>
            </tr>
        </table>
    </div>
    @foreach ($pejabat as $pjb)
    <div>
        <table border="0" align="" font-size="1">
            <tr>
                <td style="vertical-align:top" width="15" rowspan="5"></td>
                <td style="vertical-align:top" width="15">I.</td>
                <td style="vertical-align:top" width="180">Nama</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$pjb->pejabat_pembuatan_komitmen}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">NIP</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">Jabatan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">Pejabat Pembuat Komitmen</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">Alamat</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">Jl. A. Yani No. 242-244 Surabaya</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" colspan="3">Yang selanjutnya disebut <b>PIHAK KESATU</b> </td>
            </tr>
            @endforeach
            {{-- <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" height="15" colspan="4"></td>
            </tr> --}}
            <tr>
                <td style="vertical-align:top" width="15" rowspan="4"></td>
                <td style="vertical-align:top" width="15">II.</td>
                <td style="vertical-align:top" width="180">Nama</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$BAHasilPembayaran->pengadaan->pelaksana->nama_pelaksana}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">Jabatan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$BAHasilPembayaran->pengadaan->pelaksana->jabatan_pelaksana}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="180">Alamat</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" width="370">{{$BAHasilPembayaran->pengadaan->pelaksana->alamat}}, {{$BAHasilPembayaran->pengadaan->pelaksana->kota}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="470" colspan="3">Yang selanjutnya disebut <b>PIHAK KEDUA</b> </td>
            </tr>
        </table>
    </div>
    <div>
        <table border="0" align="">
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" colspan="5">Dengan ini menyatakan bahwa :</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">1.</td>
                <td style="vertical-align:top" colspan="4"> Telah Melaksanakan Pekerjaan :</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">a.</td>
                <td style="vertical-align:top" width="180">Pekerjaan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">{{$BAHasilPembayaran->pengadaan->jenis_pengadaan}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">b.</td>
                <td style="vertical-align:top" width="180">Lokasi</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">{{$BAHasilPembayaran->pengadaan->pelaksana->kota}}</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">c.</td>
                <td style="vertical-align:top" width="180">Departemen/Lembaga</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">d.</td>
                <td style="vertical-align:top" width="180">Sumber Dana</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">APBD</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">e.</td>
                <td style="vertical-align:top" width="180">Pelaksanaan Pekerjaan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">{{$BAHasilPembayaran->alokasi}} hari Kalender</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">f.</td>
                <td style="vertical-align:top" width="180">Kwitansi Kontrak</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">
                    Nomor : 020/{{$KuitansiKontrak->nomor}}/114.6/{{$KuitansiKontrak->tanggal->format('Y')}}
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">g.</td>
                <td style="vertical-align:top" width="180">Nilai Kontrak</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">
                    Rp.
                    {{number_format($BAHasilPembayaran->pengadaan->nilai_negosiasi)}},-
                </td>
            </tr>
            {{-- <tr>
                <td style="vertical-align:top" width="15" ></td>
                <td style="vertical-align:top" height="20" colspan="5"></td>
            </tr> --}}
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">2.</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;" colspan="4">PIHAK KEDUA telah mencapai kemajuan Hasil Belanja {{$BAHasilPembayaran->pengadaan->jenis_pengadaan}} , dengan perhitungan nilai kontrak sebagai berikut :</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">a.</td>
                <td style="vertical-align:top" width="180">Nilai Kontrak Pekerjaan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp.
                    {{number_format($BAHasilPembayaran->pengadaan->nilai_negosiasi)}},-
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">b.</td>
                <td style="vertical-align:top" width="180">Jumlah yang telah dibayarkan</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp. ,-
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">c.</td>
                <td style="vertical-align:top" width="180">Nilai kontrak yang masih tersedia</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp. ,-</td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">d.</td>
                <td style="vertical-align:top" width="180">Pembayaran termin saat ini</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp.
                    {{number_format($BAHasilPembayaran->pengadaan->nilai_negosiasi)}},-
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15"></td>
                <td style="vertical-align:top" width="15">e.</td>
                <td style="vertical-align:top" width="180">Sisa nilai kontrak s/d saat ini</td>
                <td style="vertical-align:top" width="5">:</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;">Rp. ,-</td>
            </tr>
            {{-- <tr>
                <td style="vertical-align:top" width="15" ></td>
                <td style="vertical-align:top" height="20" colspan="5"></td>
            </tr> --}}
            <tr>
                <td style="vertical-align:top" width="25"></td>
                <td style="vertical-align:top" width="15">3.</td>
                <td style="vertical-align:top" style="text-align: left ;text-align: justify;" colspan="4">Pada pembayaran ini PIHAK KEDUA berhak dibayarkan sebesar Rp.
                    {{number_format($BAHasilPembayaran->pengadaan->nilai_negosiasi)}},- (Terbilang : {{$BAHasilPembayaran->pengadaan->deskripsi_negosiasi}} )
                </td>
            </tr>
        </table>
    </div>
    @foreach ($pejabat as $pjb)
    <div>
        <table border="0" style="text-align: center;">
            <tr>
                <td style="vertical-align:top" colspan="3" width=525></td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="180"><b>PIHAK KEDUA</b></td>
                <td style="vertical-align:top" width="165"></td>
                <td style="vertical-align:top" width="180"><b>PIHAK KESATU</b></td>
            </tr>
            <br><br><br>
            <tr>
                <td style="vertical-align:top" width="180"><u>{{$BAHasilPembayaran->pengadaan->pelaksana->nama_pelaksana}}</u></td>
                <td style="vertical-align:top" width="165"></td>
                <td style="vertical-align:top" width="180"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="180">{{$BAHasilPembayaran->pengadaan->pelaksana->jabatan_pelaksana}}</td>
                <td style="vertical-align:top" width="165">Menyetujui</td>
                <td style="vertical-align:top" width="180">NIP. {{$pjb->nip_pejabat_komitmen}}</td>
            </tr>
        </table>
        <table style="text-align: center;" border="0">
            {{-- <tr>
                <td style="vertical-align:top" width="160"></td>
                <td style="vertical-align:top" width="195">Menyetujui</td>
                <td style="vertical-align:top" width="160"></td>
            </tr> --}}
            <tr>
                <td style="vertical-align:top" width="160"></td>
                <td style="vertical-align:top" width="195">KUASA PENGGUNA ANGGARAN</td>
                <td style="vertical-align:top" width="160"></td>
            </tr>
            <br><br><br>
            <tr>
                <td style="vertical-align:top" width="160"></td>
                <td style="vertical-align:top" width="195"><u>{{$pjb->kuasa_pengguna_anggaran}}</u></td>
                <td style="vertical-align:top" width="160"></td>
            </tr>
            <tr>
                <td style="vertical-align:top" width="160"></td>
                <td style="vertical-align:top" width="195">NIP. {{$pjb->nip_kuasa_pengguna}}</td>
                <td style="vertical-align:top" width="160"></td>
            </tr>
        </table>
        @endforeach
    </div>
    @endforeach



</div>

<!-- IKPP -->
<div style="page-break-before: always;">
    <table border="0" align="center">
        <tr>
            <td style="vertical-align:top" style="text-align: center">
                <b>INSTRUKSI KEPADA PESERTA PENGADAAN (IKPP)</b>
            </td>
        <tr>
    </table>

    {{-- @foreach ($IntruksiKepadaPesertaPengadaan as $IntruksiKepadaPesertaPengadaan) --}}
    <!-- Section A -->
    <br>
    <table border="0">
        <tr>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>a.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="510" style="vertical-align:top; text-transform: uppercase;">
                <b>umum</b>
            </td>
        <tr>
    </table>

    <!-- A1 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>1.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Lingkup Pekerjaan</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pejabat Pengadaan mengundang peserta yang dianggap mampu untuk menyampaikan penawaran atas pengadaan {{$pengadaan->jenis_pengadaan}}
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Lingkup pekerjaan PPK melalui Pejabat Pengadaan mengundang Penyedia Barang untuk menyampaikan penawaran atas paket pengadaan barang yang tercantum dalam Spesifikasi Teknis, Daftar Kuantitas dan Harga serta nomor pekerjaan yang tercantum dalam LDP. Penyedia Barang yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu dan perkiraan batas akhir waktu penyelesaian yang tercantum dalam LDP.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Penyedia yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu yang ditentukan, berdasarkan Standar Ketentuan dan Syarat Umum dengan mutu sesuai spesifikasi teknis dan harga sesuai Surat Perintah Kerja.
            </td>
        <tr>
    </table>

    <!-- A2 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>2.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top; text-align:justify">
                <b>Sumber Dana</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="359" style="vertical-align:top; text-align:justify">
                Pejabat Pengadaan mengundang peserta yang dianggap mampu untuk menyampaikan penawaran atas pengadaan {{$pengadaan->jenis_pengadaan}}
            </td>
        <tr>
    </table>

    <!-- A3 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>3.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Peserta Pengadaan</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                3.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pengadaan Barang / Jasa ini diikuti oleh Penyedia Barang/Jasa yang telah diundang dan telah dinilai mampu untuk melaksanakan pekerjaan.
            </td>
        <tr>
    </table>

    <!-- A4 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>4.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Larangan Korupsi, Kolusi, dan Nepotisme (KKN) serta Penipuan</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Peserta dan pihak yang terkait dengan pengadaan ini berkewajiban untuk mematuhi etika pengadaan dengan tidak melakukan tindakan sebagai berikut :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Berusaha mempengaruhi anggota Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dalam bentuk dan cara apapun, untuk memenuhi keinginan peserta yang bertentangan dengan Dokumen Pengadaan dan /atau peraturan perundang-undangan ;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Membuat dan/atau menyampaikan dokumen dan/atau keterangan lain yang tidak benar untuk memenuhi persyaratan dalam Dokumen Pengadaan, termasuk di antaranya Non-Usaha Kecil yang menyalah gunakan kesempatan dan/atau kemudahan yang diperuntukkan bagi Usaha Kecil termasuk Koperasi Kecil.
            </td>
        <tr>

    </table>
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Peserta yang menurut penilaian Panitia Pengadaan/ Pejabat Pengadaan terbukti melakukan tindakan sebagaimana dimaksud dalam angka 4.1 dikenakan sanksi sebagai berikut :
            </td>
        <tr>

    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Sanksi administratif, seperti digugurkan dari proses pengadaan langsung atau pembatalan penetapan penyedia barang/jasa;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Sanksi pencatuman dalam Daftar Hitam;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (c)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Gugatan secara perdata; dan/atau
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (d)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Pelaporan secara pidana kepada pihak berwenang.
            </td>
        <tr>

    </table>
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pengenalan sanksi dilaporkan oleh Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.
            </td>
        <tr>

    </table>

    <!-- A5 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>5.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Larangan Pertentangan Kepentingan</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Para pihak dalam melaksanakan tugas, fungsi dan perannya dilarang memiliki/melakukan peran ganda atau terafiliasi.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Peran ganda sebagaimana dimaksud pada angka 5.1 antara lain meliputi :
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">

            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pengurus koperasi pegawai dalam suatu K/L/D/I atau anak perusahaan pada BUMN/BUMD yang mengikuti pengadaan dan bersaing dengan lainnya merangkap sebagai anggota Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Keterkaitan hubungan, baik antar peserta maupun antara peserta dengan PPK dan/atau anggota Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur yang antara lain meliputi :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Hubungan keluarga karena perkawinan dan keturunan sampai dengan derjat kedua, baik secara horizontal maupun vertical;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                PPK dan/atau anggota, baik langsung maupun tidak langsung mengendalikan atau menjalankan perusahaan peserta;
            </td>
        <tr>

    </table>
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.4
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pegawai K/L/D/I dilarang menjadi peserta kecuali dari luar tanggungan K/L/D/I.
            </td>
        <tr>
    </table>

    <!-- Section B -->
    <br><br>
    <table border="0">
        <tr>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>b.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="510" style="vertical-align:top; text-transform: uppercase;">
                <b>DOKUMEN PENGADAAN</b>
            </td>
        <tr>
    </table>

    <!-- B1 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>1.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Pembukaan Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Dokumen Penawaran meliputi :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Surat penawaran yang didalamnya mencantumkan :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Tanggal ;
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Masa berlaku penawaran;
            </td>
        </tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                3)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Harga penawaran;
            </td>

        </tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Jangka waktu pelaksanaan pekerjaan; dan
            </td>

        </tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Tanda tangan:
            </td>
        </tr>
    </table>
    <table border="0">
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Direktur utama / pimpinan perusahaan;
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Penerima kuasa dari direktur utama/pimpinan perusahaan yang penerima kuasanya tercantum dalam akte pendirian atau perubahannya;
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (c)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Kepala cabang perusahaan yang diangkat oleh kantor pusat yang dibuktikan dengan dokumen otentik;
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (d)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Pejabat yang menurut perjanjian kerjasama bentuk mewakili perusahaan yang bekerjasama; atau
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (e)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Peserta perorangan.
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Daftar kuantitas dan harga
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (c)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Dokumen penawaran teknis yang terdiri dari :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Spesifikasi teknis yang ditawarkan berdasarkan contoh, brosur dan gambar gambar;
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Jadwal waktu penyerahan/pengiriman barang;
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                3)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Identitas (jenis, tipe dan merk) yang ditawarkan tercantum dengan lengkap dan jelas (apabila dipersyaratkan)
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Jaminan purna jual (apabila dipersyaratkan);
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Asuransi (apabila dipersyaratkan);
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                6)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Tenaga teknis (apabila dipersyaratkan)
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                7)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Bagian pekerjaan yang akan disubkontrakkan.
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (d)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Dokumen lain yang dipersyaratkan
            </td>
        <tr>
    </table>

    <!-- B2 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>2.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Harga Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Harga penawaran ditulis dengan jelas dalam angka dan huruf.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Untuk kontrak harga satuan seerta kontrak gabungan harga satuan dan lump sum, peserta mencantumkan harga satuan dan harga total untuk tiap mata pembayaran/pekerjaan dalam Daftar Kuantitas dan Harga. Jika harga satuan ditulis nol atau tidak dicantumkan maka pekerjaan dalam mata pembayaran tersebut dianggap telah termasuk dalam harga satuan pekerjaan yang lain dan pekerjaan tersebut tetap harus dilaksanakan. <i>(untuk kontrak lump sum, peserta mencantumkan harga satuan untuk tiap mata pembayaran/pekerjaan Dalam Daftar Kuantitas dan Harga, apabila dipersyaratkan)</i>
            </td>
        <tr>
    </table>

    <!-- B3 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>3.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Mata Uang Penawaran dan Cara Pembayaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                3.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Semua harga dalam penawaran harus dalam bentuk mata uang rupiah.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                3.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pembayaran atas pelaksanaan pengadaan barang ini dilakukan sesuai dengan cara yang ditetapkan dalam LDP dan diuraikan dalam Syarat-syarat Umum/Khusus Kontrak.
            </td>
        <tr>
    </table>

    <!-- B4 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>4.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Masa Berlaku Penawaran dan Jangka Waktu Pelaksanaan</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Masa berlaku penawaran sesuai dengan ketentuan dalam LDP.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Apabila evaluasi belum selesai dilaksanakan, sebelum akhir masa berlakunya penawaran, Panitia Penagadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dapat meminta kepada seluruh peserta secara tertulis untuk memperpanjang masa berlakunya penawaran tersebut dalam jangka waktu tertentu.
            </td>
        <tr>
    </table>

    <!-- B5 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>5.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Pakta Integritas</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pakti integritas berisi ikrar untuk mencegah dan tidak melakukan dan akan melaporkan terjadinya kolusi, korupsi dan nepotisme (KKN) dalam pengadaan barang.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pakta integritas dimasukkan dalam Dokumen Penawaran.
            </td>
        <tr>
    </table>

    <!-- B6 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>6.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top; text-align:justify">
                <b>Bentuk Dokumen Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="359" style="vertical-align:top; text-align:justify">
                Dokumen Penawaran disampaikan sebanyak 2 (dua) rangkap, yang terdiri dari dokumen asli 1 (satu) rangkap dan salinannya 1 (satu) rangkap serta dio tandai <b>“ASLI”</b> dan <b>“REKAMAN”</b>. Jika terdapat ketidaksesuaian antara dokumen asli dan rekaman, maka dokumen asli yang berlaku.
            </td>
        <tr>
    </table>

    <!-- Section C -->
    <br><br>
    <table border="0">
        <tr>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>c.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="510" style="vertical-align:top; text-transform: uppercase;">
                <b>PEMASUKAN DOKUMEN PENAWARAN</b>
            </td>
        <tr>
    </table>

    <!-- C1 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>1.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Penyampulan dan Penandaan Sampul Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Penyampulan Dokumen Penawaran dengan menggunakan metode 1 (satu) sampul.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Dokumen penawaran terdiri dari ;
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Surat Penawaran;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Daftar Kuantitas,
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (c)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Penawaran Teknis; dan
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (d)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Syarat lain yang dipersyaratkan.
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Peserta memasukkan Dokumen Penawaran asli dan salinannya ke dalam 2 (dua) sampul yang masing masing ditandai <b>“ASLI”</b> dan <b>“REKAMAN”</b>, kemudian kedua sampul tersebut dimasukkan ke dalam 1 (satu) sampul untuk mendapat kerahasiaannya.
            </td>
        <tr>
    </table>

    <!-- C2 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>2.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top; text-align:justify">
                <b>Penyampaian Dokumen Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="359" style="vertical-align:top; text-align:justify">
                Peserta menyampaikan langsung Dokumen Penawaran kepada Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur sesuai jadwal yang ditentukan dalam undangan.
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>3.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Batas Akhir Waktu Pemasukan Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="359" style="vertical-align:top; text-align:justify">
                Penawaran harus disampaikan kepada atau harus sudah diterima oleh Panitia Pengadaan/Pejabat Pengadaan paling lambat ditempat dan pada waktu yang ditentukan dalam undangan
            </td>
        <tr>
    </table>

    <!-- Section D -->
    <br><br>
    <table border="0">
        <tr>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>d.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="510" style="vertical-align:top; text-transform: uppercase;">
                <b>PEMBUKAAN DAN EVALUASI PENAWARAN</b>
            </td>
        <tr>
    </table>

    <!-- D1 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>1.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Pembukaan Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pembukaan Dokumen Penawaran dilakukan pada hari yang sama setelah batas akhir pemasukan penawaran.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur membuka Dokumen Penawaran di hadapan peserta kemudian dijadikan lampiran Berita Acara Pembukaan Dokumen Penawaran.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur memeriksa dan menunjukkan dihadapan peserta mengenai kelengkapan Dokumen Penawaran yang meliputi :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Surat penawaran yang didalamnya tercantum masa berlaku penawaran dan harga penawaran;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Daftar kuantitas dan harga;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (c)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Surat kuasa dari direktur utama/pimpinan perusahaan kepada penerima kuasa yang namanya tercantum dalam akta pendirian atau perubahannya (apabila dikuasakan);
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (d)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Dokumen lain yang dipersyaratkan.
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.4
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur membuat Berita Acara Pembukaan Penawaran.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.5
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Setelah dibacakan dengan jelas, Berita Acara ditandatangani Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.
            </td>
        <tr>
    </table>

    <!-- D2 -->
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>2.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Evaluasi Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Evaluasi penawaran dilakukan dengan metode evaluasi sistem gugur.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Penawaran setelah koreksi aritmatika yang melebihi nilai total HPS dinyatakan.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Anggota Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur melakukan evaluasi penawaran yang meliputi :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Evaluasi administrasi;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Evaluasi teknis; dan
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (c)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Evaluasi harga.
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.4
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Ketentuan umum dalam melakukan evaluasi sebagai berikut :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                a.
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Anggota Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dilarang mSembilanbah, mengurangi, mengganti dan-/atau mengubah isi Dokumen Pengadaan ini.
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                b.
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Penawaran yang memenuhi syarat adalah penawaran sesuai dengan ketentuan, syarat-syarat dan spesifikasi teknis yang ditetapkan dalam Dokumen Pengadaan ini, tanpa ada penyimpangan yang bersifat penting/pokok atau penawaran bersyarat;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                c.
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Penyimpangan yang bersifat penting/pokok atau penawaran bersyarat adalah :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Penyimpangan dari Dokumen Pengadaan ini yang mempengaruhi lingkup, kualitas dan hasil/kinerja pekerjaan; dan/atau
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Penawaran dari peserta dengan persyaratan tambahan yang akan menimbulkan persaingan usaha tidak sehat dan/atau tidak adil diantara peserta yang memenuhi syarat.
            </td>
        </tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                d.
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Para pihak dilarang mempengaruhi atau melakukan intervensi kepada Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur selama proses evaluasi.
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                e.
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Anggota Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dilarang menggugurkan penawaran dengan alasan :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Ketidakhadiran dalam pembukaan penawaran; dan/atau
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Kesalahan yang tidak substansial, misalnya warna sampul dan/atau surat penawaran tidak berkop perusahaan.
            </td>
        </tr>
    </table>
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.5
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Apabila peserta tidak memenuhi persyaratan evaluasi, maka pengadaan langsung dinyatakan gagal dan akan dikembalikan ke Pejabat Pembuat Komitmen untuk mengajukan Penyedia Barang/Jasa yang lainnya.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.6
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Evaluasi Teknis
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                a.
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Unsur-unsur yang dievaluasi sesuai dengan yang ditetapkan;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                b.
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Evaluasi teknis dilakukan dengan sistem gugur, dengan ketentuan:
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Paniatia Pengadaan/Pejabat Pengadaan menilai persyaratan teknis dengan membandingkan pemenuhan persyaratan teknis sebagaimana yang ditetapkan dalam Pengadaan Langsung.
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Penilaian syarat teknis minimal dilakukan terhadap :
            </td>
        </tr>
    </table>
    <table border="0">
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Spesifikasi teknis barang yang ditawarkan berdasarkan contoh, brosur dan gambar-gambar sebagaimana ditetapkan dalam Dokumen Pengadaan ini;
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Jadwal waktu penyerahan sebagai-mana ditetapkan dalam Pengadaan Langsung;
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                c)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Identitas (jenis, tipe dan merek) yang ditawarkan tercantum dengan lengkap dan jelas (apabila dipersyaratkan);
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                d)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Apabila ada evaluasi teknis terdapat hal-hal yang kurang jelas atau meragukan, Panitia Pengadaan-/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur melakukan klarifikasi dengan peserta. Dalam klarifikasi, peserta tidak diperkenankan mengubah substansi penawaran. Hasil klarifikasi dapat menggugurkan penawaran.
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.7
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Evaluasi Harga
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                a.
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Unsur-unsur yang perlu dievaluasi adalah hal-hal yang pokok atau penting, dengan
                ketentuan :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Total harga penawaran dibandingkan terhadap nilai total HPS :
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Apabila total harga penawaran atau penawaran terkoreksi melebihi nilai total HPS, dinyatakan gugur; dan
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Apabila harga penawaran atau harga penawaran terkoreksi diatas nilai total HPS, pengadaan dinyatakan gagal.
            </td>
        <tr>
    </table>
    <table border="0">
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Harga satuan yang lainnya legih besar dari 110 % (seratus sepuluh persen) dari harga satuan yang tercantum dalam HPS, dilakukan klarifikasi. Harga satuan penawaran tersebut dinyatakan timpang dan hanya berlaku untuk volume sesuai dengan Daftar Kuantitas dan Harga.
            </td>
        <tr>
    </table>
    {{-- @endforeach --}}
</div>

<!-- TOR -->
<div style="page-break-before: always;">
    <table border="0" align="center">
        <tr>
            <td style="vertical-align:top" style="text-align: center">
                <b>TERM OF REFFERENCE <br>(TOR)</b>
            </td>
        <tr>
    </table>
    {{-- @foreach ($TermOfRefference as $TermOfRefference) --}}
    <table border="0" align="center">
        <tr>
            <td style="vertical-align:top" style="text-align: center; text-transform: uppercase;">
                <b>Kegiatan Pengadaan Belanja {{$pengadaan->jenis_pengadaan}}</b>
            </td>
        <tr>
    </table>

    <br>
    <div class="row">
        <table border="0">
            <tr>
                <td style="text-transform: uppercase;" width="540"><b>Latar Belakang </b></td>
            </tr>
            <tr>
                <td style="text-align:justify;" width="540">Alat Tulis Kantor (ATK) adalah sarana penunjang yang mempunyai peranan penting dalam menjalankan fungsi kegiatan pelayanan, tugas dan administrasi sebuah organisasi khususnya di Dinas Komunikasi dan Informatika Provinsi Jawa Timur. Untuk memenuhi kebutuhan administrasi sehari - hari maka, ATK toner Printer ini telah dianggarkan pada kegiatan Peningkatan Kapasitas Kelembagaan Statistik Sektoral Sub Belanja Alat/ Bahan Untuk Kegiatan Kantor.</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table border="0">
            <tr>
                <td style="text-transform: uppercase;" width="540"><b>Tujuan</b></td>
            </tr>
            <tr>
                <td style="text-align:justify;" width="540">Tujuan Penyediaan Alat Tulis Kantor adalah untuk menunjang kebutuhan kerja Dinas Komunikasi dan Informatika Provinsi Jawa Timur dan harapannya agar dapat meningkatkan kinerja pegawai sehingga dapat memenuhi target kinerja organisasi yang sudah ditetapkan.</td>
            </tr>
        </table>
    </div>

    <br>
    <div class="row">
        <table border="0">
            <tr>
                <td style="text-transform: uppercase;" width="540"><b>Nama Kegiatan</b></td>
            </tr>
            <tr>
                <td style="text-align:justify;" width="540">"{{$pengadaan->jenis_pengadaan}}"</td>
            </tr>
        </table>
    </div>
    <div>
        <table border="1" align="center" style="color: #000000; border-color: #000000; border-collapse: collapse;">
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
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>1</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>2</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>3</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>4</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
                        <center><b>5</b></center>
                    </td>
                    <td style="vertical-align:top" style="background-color: lightgrey;">
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
                <td style="vertical-align:top" colspan="5">{{$pengadaan->jenis_pengadaan}}</td>
            </tr>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($barang as $brg)
                <tr>
                    <td></td>
                    <td style="vertical-align:top">{{$brg->barang}}</td>
                    <td style="vertical-align:top">{{$brg->jumlah_barang}}</td>
                    <td style="vertical-align:top">{{$brg->satuan}}</td>
                    <td style="vertical-align:top">Rp. {{number_format($brg->harga_satuan)}}</td>
                    <td style="vertical-align:top">Rp. {{number_format($brg->jumlah_harga)}}</td>
                </tr>
                @endforeach
                <tr>
                    <td style="vertical-align:top" style="text-align:right" colspan="5"><b>Total</b></td>
                    @php
                    $png = $pengadaan->id;
                    $sum = DB::table('barangs')
                    ->where('barangs.pengadaan_id', 'like', "%" . $png . "%")
                    ->sum('jumlah_harga');
                    $ppn = $sum * 0.11;
                    @endphp
                    <td style="vertical-align:top">Rp. {{number_format($sum)}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="text-align:right" colspan="5"><b>PPN 11%</b></td>
                    <td style="vertical-align:top">Rp. {{number_format($ppn)}}</td>
                </tr>
                <tr>
                    <td style="vertical-align:top" style="text-align:right" colspan="5"><b> Jumlah Total</b></td>
                    <td style="vertical-align:top">Rp. {{number_format($pengadaan->nilai_negosiasi)}}</td>
                </tr>
            </tbody>
        </table>
        <br>
    </div>

    <div style="page-break-before: always;">
        <div class="row">
            <table border="0">
                <tr>
                    <td style="text-transform: uppercase;" width="540"><b>Pelaksanaan</b></td>
                </tr>
            </table>
        </div>
        <div class="row">
            <table border="0">
                <tr>
                    <td width="50">Hari</td>
                    <td width="10">:</td>
                    <td width="470">{{$NotaDinasdariPPKkePejabatPengadaan->tanggal->isoFormat('dddd')}}</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <table border="0">
                <tr>
                    <td width="50">Tanggal</td>
                    <td width="10">:</td>
                    <td width="470">{{$NotaDinasdariPPKkePejabatPengadaan->tanggal->isoFormat('D MMMM Y')}}</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <table border="0">
                <tr>
                    <td width="50">Tempat</td>
                    <td width="10">:</td>
                    <td width="470">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
                </tr>
            </table>
        </div>
        <br>
        <div class="row">
            <table border="0">
                <tr>
                    <td style="text-transform: uppercase;" width="540"><b>OUTPUT KEGIATAN</b></td>
                </tr>
                <tr>
                    <td width="540">Tersedianya {{$pengadaan->jenis_pengadaan}} tepat waktu sesuai jadwal yang ada
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div class="row">
            <table border="0">
                <tr>
                    <td style="text-transform: uppercase;" width="540"><b>METODE KEGIATAN</b></td>
                </tr>
            </table>
        </div>
        <div class="row">
            <table border="0">
                <tr>
                <tr>
                    <td width="20">1.</td>
                    <td width="470">Dinas Komunikasi dan Informatika Provinsi Jawa Timur</td>
                </tr>
                </tr>
            </table>
        </div>
        <br>
        <div class="row">
            <table border="0">
                <tr>
                    <td style="text-transform: uppercase;" width="540"><u><i><b>RINCIAN RENCANA ANGGARAN BIAYA</b></i></u></td>
                </tr>
                <tr>
                    <td width="540">Dari dana APBD Dinas Kominfo Prov. Jawa Timur Tahun {{$NotaDinasdariPPKkePejabatPengadaan->tanggal->isoFormat('Y')}} dengan kode rekening {{$pengadaan->kode_rekening}}
                    </td>
                </tr>
            </table>
        </div>

        <br>
        <br>
        @foreach ($pejabat as $pjb)
        <div style="text-align:center ;">
            <table style="text-align: center" border="0" font-size="0">
                <tr>
                    <td width="300"> </td>
                    <td>PEJABAT PEMBUAT KOMITMEN</td>
                </tr>
                <br>
                <br>
                <br>
                <br>
                <tr>
                    <td width="300"> </td>
                    <td width="250"><u>{{$pjb->pejabat_pembuatan_komitmen}}</u></td>
                </tr>
                <tr>
                    <td width="300"> </td>
                    <td>NIP. {{$pjb->nip_pejabat_komitmen}}</td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
    {{-- @endforeach --}}




</div>