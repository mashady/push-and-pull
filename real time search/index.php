<?php
$items = ["Apple", "Banana", "Cherry", "Date", "Elderberry", "Fig", "Grape"];

$q = $_GET['q'] ?? '';

$results = array_filter($items, function($item) use ($q) {
    return stripos($item, $q) !== false;
});

foreach ($results as $item) {
    echo "<div>$item</div>";
}
?>