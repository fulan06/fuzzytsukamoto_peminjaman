<div class="container">

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
                    $id = 0;
                    foreach ($perhitungan as $per) {
                        $id++;
                        $penghasilan = fuzzyfikasi(500000, 1500000, 2500000, $per['c1']);
                        $lamaanggota = fuzzyfikasi(1, 5, 15, $per['c2']);
                        $sisapinjaman = fuzzyfikasi(500000, 15000000, 20000000, $per['c3']);
                        $jumlahpinjaman = fuzzyfikasi(500000, 18000000, 25000000, $per['c4']);
                        $banyakangsuran = fuzzyfikasi(1, 20, 40, $per['c5']);

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
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="card text-white bg-secondary mb-3" style="height : 2000px">
        <div class="card-header">Nilai Masing Masing Rule</div>

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
                        <th><?= $al['id'] ?>(z)</th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rules as $rul) : ?>
                        <tr>
                            <td><?= $rul['id']; ?></td>
                            <td><?= $rul['penghasilan']; ?></td>
                            <td><?= $rul['lama_menjadi_anggota']; ?></td>
                            <td><?= $rul['sisa_pinjaman']; ?></td>
                            <td><?= $rul['jumlah_pinjaman']; ?></td>
                            <td><?= $rul['banyak_angsuran']; ?></td>
                            <td><?= $rul['z'] ?></td>
                            <td><?= min($penghasilan[1],$lamaanggota[2],$jumlahpinjaman[1],$banyakangsuran[1]); ?></td>
                            <td></td>
                            
                        </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>

        </div>

    </div>
</div>