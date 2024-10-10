<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In ra số chẵn từ 1 đến N</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #e7f4fc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #007BFF;
        }

        th {
            background-color: #007BFF;
            color: white;
            padding: 15px;
        }

        td {
            padding: 10px;
            text-align: center;
            background-color: #ffffff;
            transition: background-color 0.3s;
        }

        td:hover {
            background-color: #d9e9ff;
        }

        .random-value {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h1>Số chẵn từ 1 đến N</h1>

    <div class="random-value">
        <?php
            // Tạo một số ngẫu nhiên n từ 1 đến 100
            $n = rand(1, 100);
            echo "Giá trị được tạo ra là: <span style='color: #007BFF;'>$n</span>";
        ?>
    </div>

    <table>
        <tr>
            <th>Số chẵn</th>
        </tr>
        <?php
            // Lặp qua từ 1 đến N và in ra các số chẵn
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 == 0) {
                    echo "<tr><td>$i</td></tr>";
                }
            }
        ?>
    </table>

</body>
</html>
