<?php

function show_bobot($bp, $key)
{
    // penyakit ke-1
    if ($bp == '1') {

        switch ($key) {
            case 'G01':
                return 0.6;
                break;
            case 'G02':
                return 0.4;
                break;
            case 'G03':
                return 0.4;
                break;
            case 'G04':
                return 0.2;
                break;
            case 'G05':
                return 0.2;
                break;
            default:
                return "0";
                break;
        }

    }

    // penyakit ke-2
    if ($bp == '2') {

        switch ($key) {
            case 'G01':
                return 0.4;
                break;
            case 'G06':
                return 0.4;
                break;
            case 'G07':
                return 0.4;
                break;
            case 'G08':
                return 0.4;
                break;
            case 'G09':
                return 0.2;
                break;
            default:
                return "0";
                break;
        }
    }

    // penyakit ke-3
    if ($bp == '3') {

        switch ($key) {
            case 'G06':
                return 0.2;
                break;
            case 'G07':
                return 0.2;
                break;
            case 'G08':
                return 0.6;
                break;
            case 'G10':
                return 0.4;
                break;
            case 'G11':
                return 0.2;
                break;
            case 'G12':
                return 0.2;
                break;
            default:
                return "0";
                break;
        }

    }

    // Penyakit ke-4
    if ($bp == '4') {

        switch ($key) {
            case 'G06':
                return 0.4;
                break;
            case 'G13':
                return 0.2;
                break;
            case 'G14':
                return 0.4;
                break;
            case 'G20':
                return 0.2;
                break;
            default:
                return "0";
                break;
        }

    }

    // Penyakit ke-5
    if ($bp == '5') {

        switch ($key) {
            case 'G03':
                return 0.6;
                break;
            case 'G15':
                return 0.2;
                break;
            case 'G16':
                return 0.2;
                break;
            case 'G17':
                return 0.6;
                break;
            case 'G18':
                return 0.4;
                break;
            default:
                return "0";
                break;
        }

    }

    // Penyakit ke-6
    if ($bp == '6') {

        switch ($key) {
            case 'G05':
                return 0.4;
                break;
            case 'G07':
                return 0.4;
                break;
            case 'G21':
                return 0.2;
                break;
            default:
                return "0";
                break;
        }

    }

    // Penyakit ke-7
    if ($bp == '7') {

        switch ($key) {
            case 'G07':
                return 0.4;
                break;
            case 'G19':
                return 0.2;
                break;
            case 'G22':
                return 0.6;
                break;
            default:
                return "0";
                break;

        }
    }
}

function nama_penyakit($n)
{

    if ($n == '1') {
        return "Busuk Pangkal Batang";
    }
    if ($n == '2') {
        return "Busuk Bakteri";
    }
    if ($n == '3') {
        return "Fussarium";
    }
    if ($n == '4') {
        return "Penyakit Hama Kutu Daun";
    }
    if ($n == '5') {
        return "Penyakit Antraknosa";
    }
    if ($n == '6') {
        return "Penyakit Hama Kutu Kebul";
    }
    if ($n == '7') {
        return "Penyakit Hama Tungau";
    }

}

function persentase($np, $nama)
{

    if ($nama == "Busuk Pangkal Batang") {
        $na = 1.8;
    }
    if ($nama == "Busuk Bakteri") {
        $na = 1.4;
    }
    if ($nama == "Fussarium") {
        $na = 1.8;
    }
    if ($nama == "Penyakit Hama Kutu Daun") {
        $na = 1.4;
    }
    if ($nama == "Penyakit Antraknosa") {
        $na = 2;
    }
    if ($nama == "Penyakit Hama Kutu Kebul") {
        $na = 1;
    }
    if ($nama == "Penyakit Hama Tungau") {
        $na = 1.2;
    }
    return round(($np / $na) * 100, 2);
}

function pembobot($bp, $gj)
{
    $akhir[] = '';

    // penyakit ke-1
    if ($bp == '1') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G01':
                    $akhir[] .= 0.6;
                    break;
                case 'G02':
                    $akhir[] .= 0.4;
                    break;
                case 'G03':
                    $akhir[] .= 0.4;
                    break;
                case 'G04':
                    $akhir[] .= 0.2;
                    break;
                case 'G05':
                    $akhir[] .= 0.2;
                    break;
            }
        }
        return $akhir;
    }

    // penyakit ke-2
    if ($bp == '2') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G01':
                    $akhir[] .= 0.4;
                    break;
                case 'G06':
                    $akhir[] .= 0.4;
                    break;
                case 'G07':
                    $akhir[] .= 0.4;
                    break;
                case 'G08':
                    $akhir[] .= 0.4;
                    break;
                case 'G09':
                    $akhir[] .= 0.2;
                    break;
            }
        }
        return $akhir;
    }

    // penyakit ke-3
    if ($bp == '3') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G06':
                    $akhir[] .= 0.2;
                    break;
                case 'G07':
                    $akhir[] .= 0.2;
                    break;
                case 'G08':
                    $akhir[] .= 0.6;
                    break;
                case 'G10':
                    $akhir[] .= 0.4;
                    break;
                case 'G11':
                    $akhir[] .= 0.2;
                    break;
                case 'G12':
                    $akhir[] .= 0.2;
                    break;
            }
        }
        return $akhir;
    }

    // Penyakit ke-4
    if ($bp == '4') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G06':
                    $akhir[] .= 0.4;
                    break;
                case 'G13':
                    $akhir[] .= 0.2;
                    break;
                case 'G14':
                    $akhir[] .= 0.4;
                    break;
                case 'G20':
                    $akhir[] .= 0.2;
                    break;
            }
        }
        return $akhir;
    }

    // Penyakit ke-5
    if ($bp == '5') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G03':
                    $akhir[] .= 0.6;
                    break;
                case 'G15':
                    $akhir[] .= 0.2;
                    break;
                case 'G16':
                    $akhir[] .= 0.2;
                    break;
                case 'G17':
                    $akhir[] .= 0.6;
                    break;
                case 'G18':
                    $akhir[] .= 0.4;
                    break;
            }
        }
        return $akhir;
    }

    // Penyakit ke-6
    if ($bp == '6') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G05':
                    $akhir[] .= 0.4;
                    break;
                case 'G07':
                    $akhir[] .= 0.4;
                    break;
                case 'G21':
                    $akhir[] .= 0.2;
                    break;
            }
        }
        return $akhir;
    }

    // Penyakit ke-7
    if ($bp == '7') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G07':
                    $akhir[] .= 0.4;
                    break;
                case 'G19':
                    $akhir[] .= 0.2;
                    break;
                case 'G22':
                    $akhir[] .= 0.6;
                    break;
            }
        }
        return $akhir;
    }

    return $akhir[] = 0;
}

function nilai_gejala($bobot)
{
    $nilai = array_sum($bobot);
    return $nilai;
}

function besar($nilai)
{
    $data['nilai'] = max($nilai);
    $data['index'] = array_search($data['nilai'], $nilai);
    return $data;
}
function dua($nilai)
{
    $data['nilai'] = array_slice($nilai, 1);
    $data['a'] = max($data['nilai']);
    $data['index'] = array_search($data['a'], $nilai);
    return $data;
}

function namabp($idx)
{
    $ci = &get_instance();
    $idx = substr($idx, -1);
    $nama = $ci->db->where('id', $idx)
        ->join('tb_detail_penyakit b', 'a.kode_penyakit=b.kode_penyakit', 'left')
        ->select('nama_penyakit, penjelasan, pencegahan')
        ->get('tb_penyakit a');

    return $nama->result_array();
    // return $ci->db->last_query();
}
