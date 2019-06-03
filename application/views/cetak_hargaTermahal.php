<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link href="<?php echo base_url(); ?>css/Struk.css" rel="stylesheet"> -->

    <title>Cetak</title>
</head>

<!-- Header -->
<style>
    @media print {
        #btn-print {
            display: none
        }
    }
</style>

<body>


    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h5>Riwayat Setoran Data Ikan</h5>
                <p class="card-text "><?= "Profil User: " . $users['username']; ?></p>
            </div>
            <div class="">

                <?php if (!empty($setor)) : ?>
                    <table class="table text-black table-bordered">
                        <thead>

                            <tr>

                                <th scope="col">No</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu (WIB)</th>

                            </tr>
                        </thead>
                    <?php endif; ?>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($setor as $item) {
                            ?>
                            <tr>
                                <th><?= $i++; ?></th>
                                <td><?= ucfirst($item['jenis']); ?></td>
                                <td><?= number_format($item['berat'], 0, ",", ".")  . " kg"; ?></td>
                                <td><?= "Rp. " . number_format($item['harga'], 0, ",", "."); ?></td>
                                <td><?= date('d F Y', strtotime($item['tanggal'])); ?></td>
                                <td><?= $item['waktu']; ?></td>


                            </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        <input type="button" onclick="window.print()" value="Simpan & Cetak" class="btn btn-block btn-primary" id="btn-print" />

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>