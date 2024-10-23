<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Exception;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class ModellingController extends Controller
{

    public function index($individual, $partner) {
        /*
            Rumus utility

            Ui(Ai) = (Cout - Cmin) / (Cmax - Cmin)

            Cout: nilai kriteria ke - i
            Cmax: nilai kriteria maksimal
            Cmin: nilai kriteria minimal
        */

        $modellingController= new ModellingController();

        $individualScore = $modellingController->calculateScore($individual);
        $partnerScore = $modellingController->calculateScore($partner);

        
        $c1_a1 = $this->hitungUtility('tingkat_pendidikan', $individualScore, $partnerScore);
        $c1_a2 = $this->hitungUtility('tingkat_pendidikan', $partnerScore, $individualScore);

        $c2_a1 = $this->hitungUtility('jumlah_penghasilan', $individualScore, $partnerScore);
        $c2_a2 = $this->hitungUtility('jumlah_penghasilan', $partnerScore, $individualScore);
        
        $c3_a1 = $this->hitungUtility('jumlah_tabungan', $individualScore, $partnerScore);
        $c3_a2 = $this->hitungUtility('jumlah_tabungan', $partnerScore, $individualScore);
        
        $c4_a1 = $this->hitungUtility('usia', $individualScore, $partnerScore);
        $c4_a2 = $this->hitungUtility('usia', $partnerScore, $individualScore);
        
        $c5_a1 = $this->hitungUtility('tempat_tinggal', $individualScore, $partnerScore);
        $c5_a2 = $this->hitungUtility('tempat_tinggal', $partnerScore, $individualScore);

        $total_alternatif_individual = $this->hitungTotalKriteria($c1_a1, $c2_a1, $c3_a1, $c4_a1, $c5_a1);
        $total_alternatif_partner = $this->hitungTotalKriteria($c1_a2, $c2_a2, $c3_a2, $c4_a2, $c5_a2);

        return view('results.show', [
            'total_alternatif_individual' => round($total_alternatif_individual, 2),
            'total_alternatif_partner' => round($total_alternatif_partner, 2),
            'individual' => $individual,
            'partner' => $partner
        ]);
    }

    public function calculateScore($data) { 
        return [
            'tingkat_pendidikan' => 
                ($data['tingkat_pendidikan'] === 'S2/S3' ? 4 :
                ($data['tingkat_pendidikan'] === 'D1/S1' ? 3 :
                ($data['tingkat_pendidikan']=== 'SMA/SMK' ? 2 : 1))),
            'jumlah_penghasilan' => 
                ($data['jumlah_penghasilan'] === '> 7.000.000' ? 4 :
                ($data['jumlah_penghasilan'] === '> 4.000.000 s.d. 7.000.000' ? 3 :
                ($data['jumlah_penghasilan'] === '> 2.000.000 s.d. 4.000.000' ? 2 : 1))),
            'jumlah_tabungan' => 
                ($data['jumlah_tabungan'] === '> 35.000.000' ? 4 :
                ($data['jumlah_tabungan'] === '> 15.000.000 s.d. 35.000.000' ? 3 :
                ($data['jumlah_tabungan'] === '< 15.000.000' ? 2 : 1))),
            'usia' => 
                ($data['usia'] === '> 30' ? 4 :
                ($data['usia'] === '25 - 30' ? 3 :
                ($data['usia'] === '20 - 24' ? 2 : 1))),
            'tempat_tinggal' => 
                ($data['tempat_tinggal']  === 'Rumah sendiri' ? 4 :
                ($data['tempat_tinggal']  === 'Kontrakan/Apartemen' ? 3 :
                ($data['tempat_tinggal'] === 'Kos' ? 2 : 1))),
        ];
    }

    public function hitungUtility($criteria, $individualScore, $partnerScore) {
        if ($individualScore[$criteria] == $partnerScore[$criteria]) {
            return 1;
        }
        $maxPossibleScore = 4;
        $minPossibleScore = 1;

        // (Cout - Cmin) / (Cmax - Cmin)
        return ($individualScore[$criteria] - $minPossibleScore) / ($maxPossibleScore - $minPossibleScore);
    }
        

    public function hitungTotalKriteria($c1, $c2, $c3, $c4, $c5) { 
        return ($c1 * 0.35) + ($c2 * 0.2) + ($c3 * 0.15) + ($c4 * 0.1) + ($c5 * 0.2); 
    }
}
