<?php
$json = file_get_contents('portfolio_data.json');
$items = json_decode($json, true);

foreach (array_chunk($items, 4) as $row) {
    echo '<div class="row">';
    foreach ($row as $item) {
        echo '<div class="col-25 portfolio text-white text-center" id="' . htmlspecialchars($item['id']) . '">';
        echo '<a href="' . htmlspecialchars($item['url']) . '" target="_blank" class="text-white" style="text-decoration: none;">';
        echo htmlspecialchars($item['title']);
        echo '</a>';
        echo '</div>';
    }
    echo '</div>';
}

