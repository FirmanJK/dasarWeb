<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Daftar Dosen</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Dosen</th>
        </tr>
        <?php
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        $jumlahDosen = count($Listdosen);

        for ($i = 0; $i < $jumlahDosen; $i++) {
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>" . $Listdosen[$i] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>