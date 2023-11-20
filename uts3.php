<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$Dicount = [
    [
        "tanggal" => "20 november 2023", 
        "product" => [
            "baju bayi" => 35500,
            "diapers" => 51000,
            "bedak" => 15000,
            "minyak telon" => 30000,
            "baby oil" => 16000
        ],
    ]
];
?>
<div style="border: 1px solid #000;padding: 3px; width:fit-content">
<?php
foreach ($Dicount as $discountTotal) {
    $total = $discountTotal["product"]["baju bayi"]
    +$discountTotal["product"]["diapers"]
    +$discountTotal["product"]["bedak"]
    +$discountTotal["product"]["minyak telon"]
    +$discountTotal["product"]["baby oil"];

    if ($total >= 50000 ) {
        $discount=(($total*10)/100);
        $total_bayar=($total-$discount);
    }else if ($total >= 100000) {
        $discount=(($total*20)/100);
        $total_bayar=($total-$discount);
    }

    echo "<p>"."Tanggal Produksi    :".$discountTotal["tanggal"]."</p>";
    echo "<p>"."Product             :"."</p>";
    echo "<p>"."baju bayi(3X35.500) :"."Rp.".$discountTotal["product"]["baju bayi"]."</p>";
    echo "<p>"."diapers(5X51.000)     :"."Rp.".$discountTotal["product"]["diapers"]."</p>";
    echo "<p>"."bedak(1X16.000)      :"."Rp.".$discountTotal["product"]["bedak"]."</p>";
    echo "<p>"."minyak telon(2X30.000)      :"."Rp.".$discountTotal["product"]["minyak telon"]."</p>";
    echo "<p>"."baby oil(3X16.000)      :"."Rp.".$discountTotal["product"]["baby oil"]."</p>";
    echo "<p>"."Total               :"."Rp.".$total."</p>";
    echo "<p>"."Discount            :"."Rp.".$discount."</p>";
    echo "<p>"."Total Pembayaran    :"."Rp.".$total_bayar."</p>";
}
?>
</div>
</div>
</body>
</html>