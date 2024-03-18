<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Styling Array</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        .list-item {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .list-item li {
            margin-bottom: 5px;
        }
        .list-item li span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Informasi Dosen</h2>
        <?php 
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            echo "<ul class='list-item'>";
            echo "<li><span>Nama :</span> {$Dosen['nama']}</li>";
            echo "<li><span>Domisili :</span> {$Dosen['domisili']}</li>";
            echo "<li><span>Jenis Kelamin :</span> {$Dosen['jenis_kelamin']}</li>";
            echo "</ul>";
        ?>
    </div>
</body>
</html>
