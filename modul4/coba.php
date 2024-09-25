<style>
    .table-container {
        display: flex;
        justify-content: space-around;
    }

    table {
        border-collapse: collapse;
        margin: 10px;
        display: inline-block;
    }

    th, td {
        padding: 8px;
        text-align: center;
    }
</style>

<div class="table-container">
<?php
$brush_price = 5;
echo "<table border=\"1\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
for ($counter = 10; $counter <= 100; $counter += 5) {
    echo "<tr><td>";
    echo $counter;
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";
}
echo "</table>";

$brush_price = 5;
echo "<table border=\"1\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
$counter = 10;
while ($counter <= 100) {
    echo "<tr><td>";
    echo $counter;
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";
    $counter += 5;
}
echo "</table>";

$brush_price = 5;
echo "<table border=\"1\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
$counter = 10;
do {
    echo "<tr><td>";
    echo $counter;
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";
    $counter += 5;
} while ($counter <= 100);
echo "</table>";
?>
</div>
