@extends('layouts/index')
{{-- @section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active') --}}
@section('content')

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
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <h3>Data Pengadaan <i class="fa-solid fa-less-than-equal "></i> 50 juta</h3>
                <br>
                {{-- <div class="row"> --}}
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <p style="color: rgb(236, 109, 130)">Note: Pastikan Semua Kegiatan Jadwal Terinput</p>
                {{-- <div class="mb-4"> --}}
                    <table id="data1" class="table table-bordered" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Pelaksana/Nama Perusahaan</th>
                            <th>Jenis Pengadaan</th>
                            <th>Nilai Negosiasi</th>
                            <th> Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($pengadaan as $p)
                          <tr>
                            <td>{{ $p->pelaksana->pt_pelaksana }}</td>
                            <td>{{ $p->jenis_pengadaan }}</td>
                            <td>Rp. {{number_format($p->nilai_negosiasi)}}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('allpengadaan1.show',$p->id) }}">Detail</a>
                                <a class="btn btn-danger " href="{{route('allpengadaan1.print',$p->id)}}">Cetak PDF <i class="fa fa-save"></i></a>

                              {{-- <form action="{{ route('pengadaan.destroy',$p->id) }}" method="POST">
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalDetailPengadaan{{$p->id}}">
                                  Detail
                                </button>
              
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditPengadaan{{$p->id}}">
                                  Edit
                                </button>
              
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-lg">
                                  Hapus
                                </button>
                              </form> --}}
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
            </div>
        </div>
    </div>

    @endsection