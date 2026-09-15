<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng cửu chương</title>
    <style>
        div.tablecontainer {
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Bảng Cửu Chương Từ 1 đến 10</h2>
    <div class="table-container">
        <table>
            <tr>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <th>Chương <?= $i ?></th>
                <?php endfor; ?>
            </tr>
            <?php for ($j = 1; $j <= 10; $j++): ?>
                <tr>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <td><?= $i ?> x <?= $j ?> = <?= $i * $j ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </div>

</body>
</html>