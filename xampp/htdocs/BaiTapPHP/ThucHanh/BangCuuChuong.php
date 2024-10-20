<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .outer-table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        .inner-table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }

        .outer-table th, .outer-table td {
            border: 1px solid #007BFF;
            padding: 15px;
            text-align: center;
            transition: background-color 0.3s;
            background-color: white;
        }

        .outer-table th {
            background-color: #007BFF;
            color: white;
        }

        .inner-table th, .inner-table td {
            border: 1px solid #007BFF;
            padding: 10px;
            text-align: center;
            background-color: #e7f4fc;
        }

        .inner-table td:hover {
            background-color: #d0e4f0;
        }
    </style>
</head>

<body>
    <h1>BẢNG CỬU CHƯƠNG</h1>
    <table class="outer-table">
        <tr>
            <?php
                for ($n = 1; $n <= 10; $n++) {
                    echo "<th>Bảng $n</th>";
                }
            ?>
        </tr>
        <tr>
            <?php
                for ($n = 1; $n <= 10; $n++) {
                    echo "<td>";
                    // Tạo bảng cửu chương cho số n
                    echo "<table class='inner-table'>";
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<tr><td>$n x $i = " . ($n * $i) . "</td></tr>";
                    }
                    echo "</table>";
                    echo "</td>";
                }
            ?>
        </tr>
    </table>
</body>
</html>
