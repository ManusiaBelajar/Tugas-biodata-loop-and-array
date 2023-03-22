<?php
// RUMUS USIA BERDASARKAN TGL LAHIR DAN TGL SEKARANG
$tgl_lahir = '2003-01-21';
$tgl_sekarang = new DateTime();
$tgl_lahir = new DateTime($tgl_lahir);
$usia = $tgl_sekarang->diff($tgl_lahir)->y;
// ARRAY BIODATA
$biodata = array(
    'nama' => ' Muhammad Yustaf Lana Badriul Hegar',
    'TL' => ' Klaten 21 Januari 2003',
    'usia' => $usia,
    'alamat' => 'Kecamatan Kanor, Kabupaten Bojonegoro',
    'email' => 'myustaflana151@gmail.com',
    'nohp' => '085748352849',
    'pendidikan' => array(
        'MI' => ' MI ISLAMIYAH PESEN',
        'SMP' => ' SMP NEGERI 1 SUMBERREJO',
        'SMA' => ' SMA NEGERI 1 BALEN',
        'UNIV' => ' UNIVERSITAS PEMBANGUNAN NASIONAL VETERAN JAWA TIMUR'
    )
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atribut.css">
    <title>Biodata</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1 style="font-size: 50px;">BIODATA</h1>
            <center>
                <img src="fotosaya.jpeg" alt="Foto diri" class="lingkaran">
            </center>
            <br>
            <br>
            <center><table style="text-align: left; height: 140px;" >
                <tr>
                    <td>Nama</td>
                    <td> : <?php echo $biodata['nama']; ?></td>
                </tr>
                <tr>
                    <td>Tempat / Tanggal Lahir</td>
                    <td> : <?php echo $biodata['TL']?></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td> : <?php echo $biodata['usia']?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> : <?php echo $biodata['alamat']?></td>    
                </tr>
                <tr>
                    <td>Email</td>
                    <td> : <?php echo $biodata['email'] ?></td>
                </tr>
                <tr>
                    <td>No.Handphone</td>
                    <td> : <?php echo $biodata['nohp'] ?></td>
                </tr>
            </table></center>
            <p style="font-size:30px;">PENDIDIKAN</p>
            <table style="text-align: left; height: 130px;" >
                <tr>
                    <td><?php echo $biodata['pendidikan']['MI'] ?></td>
                </tr>
                <tr>
                <td><?php echo $biodata['pendidikan']['SMP'] ?></td>
                </tr>
                <tr>
                <td><?php echo $biodata['pendidikan']['SMA'] ?></td>
                </tr>
                <tr>
                <td><?php echo $biodata['pendidikan']['UNIV'] ?></td>
                </tr>
            </table>
        </div>
    </div>
   
    
    </body>
    </html>