<?php

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
                    $akhir[] .= 0.4;
                    break;
                case 'G08':
                    $akhir[] .= 0.6;
                    break;
                case 'G13':
                    $akhir[] .= 0.6;
                    break;
                case 'G14':
                    $akhir[] .= 0.4;
                    break;
                case 'G16':
                    $akhir[] .= 0.4;
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
                    $akhir[] .= 0.6;
                    break;
                case 'G02':
                    $akhir[] .= 0.6;
                    break;
                case 'G04':
                    $akhir[] .= 0.4;
                    break;
                case 'G05':
                    $akhir[] .= 0.4;
                    break;
                case 'G06':
                    $akhir[] .= 0.4;
                    break;
                case 'G14':
                    $akhir[] .= 0.4;
                    break;
                case 'G17':
                    $akhir[] .= 0.6;
                    break;
            }
        }
        return $akhir;
    }

    // penyakit ke-3
    if ($bp == '3') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G03':
                    $akhir[] .= 0.4;
                    break;
                case 'G04':
                    $akhir[] .= 0.4;
                    break;
                case 'G07':
                    $akhir[] .= 0.6;
                    break;
                case 'G08':
                    $akhir[] .= 0.6;
                    break;
                case 'G11':
                    $akhir[] .= 0.2;
                    break;
                case 'G12':
                    $akhir[] .= 0.6;
                    break;
                case 'G16':
                    $akhir[] .= 0.4;
                    break;
            }
        }
        return $akhir;
    }

    // Penyakit ke-4
    if ($bp == '4') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G01':
                    $akhir[] .= 0.4;
                    break;
                case 'G02':
                    $akhir[] .= 0.4;
                    break;
                case 'G04':
                    $akhir[] .= 0.2;
                    break;
                case 'G09':
                    $akhir[] .= 0.2;
                    break;
                case 'G10':
                    $akhir[] .= 0.6;
                    break;
                case 'G12':
                    $akhir[] .= 0.6;
                    break;
                case 'G16':
                    $akhir[] .= 0.4;
                    break;
                case 'G17':
                    $akhir[] .= 0.4;
                    break;
            }
        }
        return $akhir;
    }

    // Penyakit ke-5
    if ($bp == '5') {
        foreach ($gj as $key) {
            switch ($key) {
                case 'G01':
                    $akhir[] .= 0.6;
                    break;
                case 'G03':
                    $akhir[] .= 0.4;
                    break;
                case 'G04':
                    $akhir[] .= 0.4;
                    break;
                case 'G06':
                    $akhir[] .= 0.2;
                    break;
                case 'G09':
                    $akhir[] .= 0.2;
                    break;
                case 'G10':
                    $akhir[] .= 0.4;
                    break;
                case 'G12':
                    $akhir[] .= 0.4;
                    break;
                case 'G16':
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
                case 'G02':
                    $akhir[] .= 0.4;
                    break;
                case 'G04':
                    $akhir[] .= 0.2;
                    break;
                case 'G07':
                    $akhir[] .= 0.4;
                    break;
                case 'G12':
                    $akhir[] .= 0.6;
                    break;
                case 'G13':
                    $akhir[] .= 0.6;
                    break;
                case 'G14':
                    $akhir[] .= 0.4;
                    break;
                case 'G16':
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
                case 'G01':
                    $akhir[] .= 0.6;
                    break;
                case 'G02':
                    $akhir[] .= 0.4;
                    break;
                case 'G03':
                    $akhir[] .= 0.6;
                    break;
                case 'G04':
                    $akhir[] .= 0.6;
                    break;
                case 'G08':
                    $akhir[] .= 0.6;
                    break;
                case 'G11':
                    $akhir[] .= 0.4;
                    break;
                case 'G15':
                    $akhir[] .= 0.8;
                    break;
                case 'G17':
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
    $data['nilai']  = max($nilai);
    $data['index']  = array_search($data['nilai'], $nilai);
    return $data;
}
function dua($nilai)
{
    $data['nilai']  = array_slice($nilai, 1);
    $data['a']  = max($data['nilai']);
    $data['index']  = array_search($data['a'], $nilai);
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
