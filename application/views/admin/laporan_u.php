<HTML>

<head>
    <style>
        /* @page {
            background-image: url("<?= base_url() ?>assets/img/bg.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        } */
        body {
            margin: 100px 0px 0px 0px;
            width: 100%;
            /* background-image: url("<?= base_url() ?>assets/img/bg.jpeg");
            background-repeat: no-repeat;
            background-size: cover; */
        }

        .container p {
            text-transform: capitalize;
        }

        .icon {
            max-width: 70px;
        }

        #t-namap {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        @media screen and (min-device-width: 481px) and (max-device-width: 768px) {
            body {
                margin: 70px 0px 0px 0px;
                width: 100%;
                background-image: url("<?= base_url() ?>assets/img/bg.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            #t-namap {
                padding-top: 0px;
                padding-bottom: 0px;
            }

        }

        @media only screen and (max-device-width: 480px) {
            body {
                margin: 70px 0px 0px 0px;
                width: 100%;
                background-image: url("<?= base_url() ?>assets/img/bg.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            #t-namap {
                padding-top: 0px;
                padding-bottom: 0px;
            }

        }
    </style>
</head>
<?php
foreach ($diagnosa as $dat) {
?>

    <body>
        <h2 style="text-align:center">Laporan Pemeriksaan <?php echo $dat['nama_pasien']; ?></h2>
        <table border='1' class='table' width="90%" align="center">
            <tr>
                <th width="90">Nama Pemilik</th>
                <th width="100">Gejala</th>
                <th width="100">Penyakit</th>

            </tr>
            <tr>
                <td>&nbsp;&nbsp;<?php echo $dat['nama_pasien']; ?></td>
                <td><?php
                    $i = 0;
                    $a = $dat['input_gejala'];
                    $data['ex'] = explode(",", $a);
                    foreach ($data['ex'] as $d) {
                        $i++;
                        // $r = $this->Admin_model->ingjl($g);
                        echo $i . '. ' . $this->Admin_model->ingjl($d) . '<br>';
                        // var_dump($data['ex']);
                        // echo $c;
                        // die;
                    ?>
                    <?php
                    } ?></td>
                <td>
                    <?php
                    $d = $dat['penyakit_lain'];
                    $f = json_decode($d, true);
                    $a = 0;
                    $t = count($f);
                    for ($i = 0; $i < $t; $i++) {
                        # code...
                        $data['2']  = array_slice($f, $i);
                        $data['nilai']  = max($data['2']);
                        $data['index']  = array_search($data['nilai'], $f);
                        $data['detail'] = $this->Admin_model->getpenyakit($data['index']);
                        $np[] = $data['detail'];
                    }
                    $i = 0;
                    foreach ($f as $c) {
                        $i++;
                        echo $i . '. ' . $np[$a][0]['nama_penyakit'] . ' = ' . $c . ' <br> ';
                        $a++;
                    }
                    // return $data;
                    ?></td>
                <!-- <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning<?= $dat['id'] ?>">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger<?= $dat['id'] ?>">
                                                    Hapus
                                                </button>
                                            </td> -->
                <!-- <td>11-7-2014</td>
                                        <td><span class="label label-success">Approved</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
            </tr>
        <?php
    } ?>
        </table>
        <small>*Tulisan Disini</small>
        <div>
            <table width="450" align="right">
                <tr>
                    <td width="100px" style="padding:20px 20px 20px 20px;" align="center">
                        <strong>Admin <?= ucwords($this->session->userdata('name')); ?>,</strong>
                        <br><br><br><br>
                        <strong><u>TTD</u><br></strong><small></small>
                    </td>
                </tr>
            </table>
        </div>
    </body>
    <footer>
    </footer>

</HTML>