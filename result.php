<?php
$nama = $_POST["nama"];
$age = $_POST["currentAge"];
$retireAge = $_POST["retireAge"];
$expands = $_POST["expands"];

$restLife = 75 - $retireAge;
$totalMoney = 12 * $expands * $restLife;

$time = $retireAge - $age;
floor($monthSaving = $totalMoney / $time / 12);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <link href="dist/output.css" rel="stylesheet">
</head>

<body class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">


    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hi, <?= $nama; ?></h5>

        <table class="border">
            <thead class="border">
                <th class="border p-1">Nama</th>
                <th class="border p-1">Umur</th>
                <th class="border p-1">Umur Pensiun</th>
                <th class="border p-1">Pengeluaran</th>
            </thead>
            <tbody class="border">
                <tr>
                    <td class="border text-center">
                        <?= $nama; ?>
                    </td>
                    <td class="border text-center">
                        <?= $age; ?>
                    </td>
                    <td class="border text-center">
                        <?= $retireAge; ?>
                    </td>
                    <td class="border text-center">
                        <?= $expands; ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <h1>Total Tabungan Bulanan anda sebesar : <br> Rp. <?= floor($monthSaving); ?></h1>
    </a>


</body>

</html>