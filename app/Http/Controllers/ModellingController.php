<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class ModellingController extends Controller
{
    public function index(Individual $individual) {
        // $individuals = Individual::with('partner')->get();
        // dd($individuals->partner());
        $individual = Individual::find(8);
        $partner = $individual->getPartner();
        
        $calculateScore = function ($data) {
            return [
                'tingkat_pendidikan' => 
                    ($data->tingkat_pendidikan === 'S2/S3' ? 4 :
                    ($data->tingkat_pendidikan === 'D1/S1' ? 3 :
                    ($data->tingkat_pendidikan === 'SMA/SMK' ? 2 : 1))),
                'jumlah_penghasilan' => 
                    ($data->jumlah_penghasilan === '> 7.000.000' ? 4 :
                    ($data->jumlah_penghasilan === '> 4.000.000 s.d. 7.000.000' ? 3 :
                    ($data->jumlah_penghasilan === '> 2.000.000 s.d. 4.000.000' ? 2 : 1))),
                'jumlah_tabungan' => 
                    ($data->jumlah_tabungan === '> 35.000.000' ? 4 :
                    ($data->jumlah_tabungan === '> 15.000.000 s.d. 35.000.000' ? 3 :
                    ($data->jumlah_tabungan === '< 15.000.000' ? 2 : 1))),
                'usia' => 
                    ($data->usia === '> 30' ? 4 :
                    ($data->usia === '25 - 30' ? 3 :
                    ($data->usia === '20 - 24' ? 2 : 1))),
                'tempat_tinggal' => 
                    ($data->tempat_tinggal === 'Rumah sendiri' ? 4 :
                    ($data->tempat_tinggal === 'Kontrakan/Apartemen' ? 3 :
                    ($data->tempat_tinggal === 'Kos' ? 2 : 1))),
            ];
        };

        $individualScore = $calculateScore($individual);
        $partnerScore = $calculateScore($partner);

        // dd([
        //     'individualScore' => $individualScore,
        //     'partnerScore' => $partnerScore
        // ]);

        // BELUM SELESAI

        /*
            Rumus

            Ui(Ai) = (Cout - Cmin) / (Cmax - Cmin)

            Cout: nilai kriteria ke - i
            Cmax: nilai kriteria maksimal
            Cmin: nilai kriteria minimal
        */

        $c1_a1 = ($individualScore['tingkat_pendidikan'] - min($individualScore['tingkat_pendidikan'], $partnerScore['tingkat_pendidikan'])) / (max($individualScore['tingkat_pendidikan'], $partnerScore['tingkat_pendidikan']) - min($individualScore['tingkat_pendidikan'], $partnerScore['tingkat_pendidikan']));
        dd($c1_a1);
    }

    /*
        Form fields name
        pendidikan
        penghasilan
        tabungan
        usia
        tempattinggal
    */
    // Mendapatkan nilai utiliti
    public function getUtilityResult() {
        
    }
}
