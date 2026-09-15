<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra số N</title>
</head>
<body>

<?php
    function KTNguyenTo($n) {
        if ($n < 2) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    function UocSo($n) {
        $uocSo = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                $uocSo[] = $i;
            }
        }
        return $uocSo;
    }


    function TongSoNT($n) {
        $tong = 0;
        $nguyenTo = [];
        for ($i = 2; $i < $n; $i++) {
            if (KTNguyenTo($i)) {
                $tong += $i;
                $nguyenTo[] = $i;
            }
        }
        return ['sum' => $tong, 'list' => $nguyenTo];
    }


    function SoChinhPhuong($n) {
        if ($n < 1) return false;
        $sqrt = (int)sqrt($n);
        return $sqrt * $sqrt == $n;
    }

    $N = rand(-100, 100);

    echo "<h2>Kiểm tra số ngẫu nhiên N</h2>";
    echo "<p>Số ngẫu nhiên N được sinh ra: <b>$N</b></p>";


    if ($N > 0) {

        echo "<p>N = $N là <b>số dương</b>. Thực hiện kiểm tra:</p>";

        $uocSo = UocSo($N);
        echo "<h3>1. Các ước số của $N:</h3>";
        echo "<ul>";
        foreach ($uocSo as $d) {
            echo "<li>$d</li>";
        }
        echo "</ul>";
        echo "<p>Tổng cộng: " . count($uocSo) . " ước số.</p>";

        echo "<h3>2. Kiểm tra số nguyên tố:</h3>";
        if (KTNguyenTo($N)) {
            echo "<p>$N LÀ số nguyên tố.</p>";
        } else {
            echo "<p>$N KHÔNG phải số nguyên tố.</p>";
        }

        $kq = TongSoNT($N);
        echo "<h3>3. Tổng các số nguyên tố &lt; $N:</h3>";
        if ($kq['sum'] == 0) {
            echo "<p>Không có số nguyên tố nào nhỏ hơn $N. Tổng = 0</p>";
        } else {
            echo "<p>Các số nguyên tố: " . implode(", ", $kq['list']) . "</p>";
            echo "<p>Tổng = <b>" . $kq['sum'] . "</b></p>";
        }

        echo "<h3>4. Kiểm tra số chính phương:</h3>";
        if (SoChinhPhuong($N)) {
            echo "<p>$N LÀ số chính phương (vì " . (int)sqrt($N) . "<sup>2</sup> = $N).</p>";
        } else {
            echo "<p>$N KHÔNG phải số chính phương.</p>";
        }

    } else {
        if ($N == 0) {
            echo "<p>N = 0, không phải số dương. Không thực hiện kiểm tra.</p>";
        } else {
            echo "<p>N = $N là số âm, không phải số dương. Không thực hiện kiểm tra.</p>";
        }
    }
?>
</body>
</html>