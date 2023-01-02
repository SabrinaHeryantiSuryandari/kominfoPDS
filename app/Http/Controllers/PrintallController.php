<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use App\Models\pelaksana;
use App\Models\barang;
use App\Models\jadwal;
use App\Models\Pejabat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

class PrintallController extends Controller
{
    public function printall_1()
    {
        // $pengadaan = DB::table('pengadaans')
        //     // ->join('pelaksanas', 'pelaksana_id', '=', 'pelaksanas.id')
        //     ->where('nilai_negosiasi', '<=', 50000000)
        // ->get();
        $pengadaan = Pengadaan::where('nilai_negosiasi', '<=', 50000000)
        ->get();
        $pelaksana = Pelaksana::all();

        return view(
            'admin.printall_1',
            ['pelaksana' => $pelaksana],
            ['pengadaan' => $pengadaan],
        );
    }
    public function printall_2()
    {
        $pengadaan = Pengadaan::where('nilai_negosiasi', '>', 50000000)
        ->get();
        $pelaksana = Pelaksana::all();

        return view(
            'admin.printall_2',
            ['pengadaan' => $pengadaan],
        );
    }
    // printall
    public function showall($id)
    // public function show(Request $request,$id)
    {
        $pengadaan = Pengadaan::find($id);
        // $jadwal = DB::table('jadwals')
        //     ->where('jadwals.pengadaan_id', 'like', "%" . $pengadaan->id . "%")
        //     ->get();
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();


        return view(
            'allprint.alldetail',
            ['pengadaan' => $pengadaan],
            // ['jadwal' => $jadwal],
            ['barang' => $barang],
            ['pejabat' => $pejabat],
        );
        // dd($pengadaan, $barang, $pejabat, );
    }

    //print
    public function print_all(Request $request, $id)
    {
        $pengadaan = Jadwal::find($id);
        $barang = DB::table('barangs')
            ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
            ->get();
        $pejabat = DB::table('pejabats')
            ->where('id', '=', 1)
            ->get();

        // $pejabat = Pejabat::all();

        // dd($pengadaan, $barang );
        $pdf = PDF::loadview(
            // $pdf = word::loadview(
            'allprint/allprint',
            ['pengadaan' => $pengadaan],
            ['barang' => $barang],
            // ['pejabat' => $pejabat],
            // );
        )->setPaper('f4', 'potrait');
        return $pdf->download('ALL.pdf');
        // dd($pdf);
    }
    // public function print_all(Request $request)
    // // public function print_all()
    // {
    //     $getid = $request->segments(3);

    //     $pengadaan = Jadwal::find($getid);
    //     // $barang = DB::table('barangs')
    //     //     ->where('barangs.pengadaan_id', 'like', "%" . $pengadaan->pengadaan_id . "%")
    //     //     ->get();

    //         $pdf = PDF::loadview(
    //             // $pdf = word::loadview(
    //             'allprint/allprint',
    //             ['pengadaan' => $pengadaan],
    //             ['barang' => $barang],
    //             // ['pejabat' => $pejabat],
    //             // );
    //         )->setPaper('f4', 'potrait');
    //         return $pdf->download('ALL.pdf');
    //     // dd($getid);
    // }
}
