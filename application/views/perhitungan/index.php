<div class="container pt-5 mt-5 ">

    <div class="row">

        <div class="col-md-6 mb-4">
            <h3>Perhitungan Fuzzy Tsukamoto</h3>
        </div>
    </div>
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header">Data Bobot Nasabah</div>
        <div class="card-body">
            <table class="table table-secondary table-hover ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Penghasilan</th>
                        <th>Lama Menjadi Anggota</th>
                        <th>Sisa Pinjaman</th>
                        <th>Jumlah Pinjaman</th>
                        <th>Banyak Angsuran</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($perhitungan as $per) : ?>
                        <tr>

                            <td><?= $per['id']; ?></td>
                            <td><?= $per['nama']; ?></td>
                            <td><?= $per['c1']; ?></td>
                            <td><?= $per['c2']; ?></td>
                            <td><?= $per['c3']; ?></td>
                            <td><?= $per['c4']; ?></td>
                            <td><?= $per['c5']; ?></td>


                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header">Nilai Fuzzyfikasi</div>
        <div class="card-body">
            <table class="table table-responsive table-secondary table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th rowspan="3"></th>
                        <th colspan="3">Penghasilan</th>
                        <th colspan="3">Lama Menjadi Anggota</th>
                        <th colspan="3">Sisa Pinjaman</th>
                        <th colspan="3">Jumlah Pinjaman</th>
                        <th colspan="3">Banyak Angsuran</th>
                    </tr>
                    <tr class="text-center">

                        <th>rendah</th>
                        <th>sedang</th>
                        <th>tinggi</th>
                        <th>baru</th>
                        <th>sedang</th>
                        <th>lama</th>
                        <th>sedikit</th>
                        <th>sedang</th>
                        <th>banyak</th>
                        <th>sedikit</th>
                        <th>sedang</th>
                        <th>banyak</th>
                        <th>cepat</th>
                        <th>sedang</th>
                        <th>lama</th>


                    </tr>
                    <tr class="text-center">
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    function fuzzyfikasi($bb, $bt, $ba, $input)
                    {

                        // fuzzyfikasi bawah
                        if ($input <= $bb) {
                            $bawah = 1;
                        } else if ($input >= $bb && $input <= $bt) {
                            $bawah = ($bt - $input) / ($bt - $bb);
                        } elseif ($input >= $bt) {
                            $bawah = 0;
                        }

                        // fuzzyfikasi tengah
                        if ($input <= $bb || $input >= $ba) {
                            $tengah = 0;
                        } else if ($input >= $bb && $input <= $bt) {
                            $tengah = ($input - $bb) / ($bt - $bb);
                        } elseif ($input >= $bt && $input <= $ba) {
                            $tengah = ($ba - $input) / ($ba - $bt);
                        }

                        // fuzzyfikasi atas
                        if ($input >= $ba) {
                            $atas = 1;
                        } elseif ($input <= $bt) {
                            $atas = 0;
                        } elseif ($input >= $bt && $input <= $ba) {
                            $atas = ($input - $bt) / ($ba - $bt);
                        }
                        return array($bawah, $tengah, $atas);
                    }
                    function layak($alpha, $atas, $bawah)
                    {
                        $zi = ($alpha * ($atas - $bawah)) + $bawah;
                        return $zi;
                    }
                    function tidaklayak($alpha, $atas, $bawah)
                    {
                        $zi = $atas - ($alpha * ($atas - $bawah));
                        return $zi;
                    }
                    $id = 0;
                    $fuzzifikasi = [];
                    ?>
                    <?php foreach ($perhitungan as $per) : ?>
                        <?php
                        $id++;
                        $penghasilan = fuzzyfikasi($kriteria_penghasilan['batasb'], $kriteria_penghasilan['batast'], $kriteria_penghasilan['batasa'], $per['c1']);
                        $lamaanggota = fuzzyfikasi($kriteria_lama['batasb'], $kriteria_lama['batast'], $kriteria_lama['batasa'], $per['c2']);
                        $sisapinjaman = fuzzyfikasi($kriteria_sisa['batasb'], $kriteria_sisa['batast'], $kriteria_sisa['batasa'], $per['c3']);
                        $jumlahpinjaman = fuzzyfikasi($kriteria_jumlah['batasb'], $kriteria_jumlah['batast'], $kriteria_jumlah['batasa'], $per['c4']);
                        $banyakangsuran = fuzzyfikasi($kriteria_angsuran['batasb'], $kriteria_angsuran['batast'], $kriteria_angsuran['batasa'], $per['c5']);
                        $temp = array_merge($penghasilan, $lamaanggota, $sisapinjaman, $jumlahpinjaman, $banyakangsuran);
                        $fuzzifikasi[] = $temp;
                        ?>


                        <tr>

                            <td><?= $per['nama'] ?></td>

                            <td><?= round($penghasilan[0], 4); ?></td>
                            <td><?= round($penghasilan[1], 4); ?></td>
                            <td><?= round($penghasilan[2], 4); ?></td>
                            <td><?= round($lamaanggota[0], 4); ?></td>
                            <td><?= round($lamaanggota[1], 4); ?></td>
                            <td><?= round($lamaanggota[2], 4); ?></td>
                            <td><?= round($sisapinjaman[0], 4); ?></td>
                            <td><?= round($sisapinjaman[1], 4); ?></td>
                            <td><?= round($sisapinjaman[2], 4); ?></td>
                            <td><?= round($jumlahpinjaman[0], 4); ?></td>
                            <td><?= round($jumlahpinjaman[1], 4); ?></td>
                            <td><?= round($jumlahpinjaman[2], 4); ?></td>
                            <td><?= round($banyakangsuran[0], 4); ?></td>
                            <td><?= round($banyakangsuran[1], 4); ?></td>
                            <td><?= round($banyakangsuran[2], 4); ?></td>

                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="card text-white bg-secondary mb-3" style="height : 2000px">
        <div class="card-header">Nilai Min (Implikasi)</div>

        <div class="card-body -0">

            <table style="height: 1880px; overflow-y: scroll" class=" -0 table table-sm table-secondary table-responsive table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Penghasilan</th>
                        <th>Lama menjadi Anggota</th>
                        <th>Sisa Pinjaman</th>
                        <th>Jumlah Pinjaman</th>
                        <th>Banyak Angsuran</th>
                        <th>Hasil</th>

                        <?php foreach ($alternatif as $al) : ?>
                            <th><?= $al['id'] ?>(a)</th>
                            <th><?= $al['id'] ?>(Zi)</th>

                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    function cek($a, $nilai, $bawah, $atas, $naik)
                    {
                        if ($nilai == "0")
                            return ($naik) ? $a[$bawah] : $a[$atas];
                        else if ($nilai == "1")
                            return $a[$bawah + 1];
                        else if ($nilai == "2")
                            return ($naik) ? $a[$atas] : $a[$bawah];
                    }
                    $nilai_rule = [];
                    $nilai_rule_min = [];
                    $z = [];
                    $i = 0;

                    $temp_zi = [];

                    ?>
                    <?php foreach ($rule_angka as $rul) : ?>
                        <tr>
                            <td><?= $rul['id']; ?></td>
                            <td><?= $rul['penghasilan']; ?></td>
                            <td><?= $rul['lama_menjadi_anggota']; ?></td>
                            <td><?= $rul['sisa_pinjaman']; ?></td>
                            <td><?= $rul['jumlah_pinjaman']; ?></td>
                            <td><?= $rul['banyak_angsuran']; ?></td>
                            <td><?= $rul['hasil'];
                                $hasil[] = $rul['hasil'];
                                ?></td>

                            <?php
                            $aa = 0;
                            $lokal = []; ?>
                            <?php foreach ($fuzzifikasi as $key => $value) : ?>
                                <?php
                                $j = 0;
                                $nilai = [];
                                $nilai[] = cek($value, $rul['penghasilan_a'], 0, 2, false);
                                $nilai[] = cek($value, $rul['lama_menjadi_anggota_a'], 3, 5, false);
                                $nilai[] = cek($value, $rul['sisa_pinjaman_a'], 6, 8, true);
                                $nilai[] = cek($value, $rul['jumlah_pinjaman_a'], 9, 11, true);
                                $nilai[] = cek($value, $rul['banyak_angsuran_a'], 12, 14, true);
                                $lokal[] = $nilai;
                                ?>
                            <?php endforeach; ?>
                            <?php
                            $min = [];
                            $zi = [];

                            $b = "";

                            ?>
                            <?php foreach ($lokal as $key => $value1) : ?>

                                <?php
                                $zitampil = 0;
                                $a = min($value1);
                                if ($hasil[$i] == 'tidak layak') {
                                    $zitampil = tidaklayak($a, 60, 40);
                                } else {
                                    $zitampil = layak($a, 60, 40);
                                }
                                $zi[] = $zitampil;
                                $min[] = $a;
                                $b = ($a > 0) ? "<b>" . round($a, 4) . "<b>" : $a;
                                // print_r($value1);


                                ?>
                                <td><?= $b ?></td>
                                <td><?= round($zitampil) ?></td>

                            <?php endforeach; ?>

                            <?php

                            $temp_zi[] = $zi;
                            $nilai_rule_min[] = $min;
                            // print_r($temp_zi[$i][2]);
                            ?>
                        </tr>
                        <?php
                        $nilai_rule[] = $lokal;
                        $i++;

                        ?>

                    <?php endforeach; ?>



                </tbody>
            </table>

        </div>

    </div>
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header">Hasil Akhir</div>
        <div class="card-body">
            <table class="table table-secondary table-hover ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $m = 0;
                    ?>
                    <?php foreach ($perhitungan as $per) : ?>
                        <?php
                        $axz = 0;
                        $sum_min = 0;
                        $n = 0;
                        ?>
                        <?php foreach ($nilai_rule_min as $key => $value) : ?>
                            <?php
                            $axz = $axz +  $temp_zi[$n][$m] * $nilai_rule_min[$n][$m];
                            $sum_min += $value[$m];
                            $n++;
                            ?>
                        <?php endforeach; ?>
                        <?php
                        $hasilakhir[$m] = $axz / $sum_min;
                        $sorting_total[$m] = array($per['id'], $per['nama'], $hasilakhir[$m]);
                        array_multisort($hasilakhir, SORT_DESC, SORT_STRING, $sorting_total);
                        ?>
                        <?php
                        $m++;
                        ?>
                    <?php endforeach; ?>
                    <?php $co = 0; ?>
                    <?php foreach ($perhitungan as $per) : ?>
                        <tr>
                            <td><?= $sorting_total[$co][0]; ?></td>
                            <td><?= $sorting_total[$co][1]; ?></td>
                            <td><?= $sorting_total[$co][2]; ?></td>
                        </tr>
                        <?php
                        $co++;
                        ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>