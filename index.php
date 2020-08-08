<?php

$arr = [
    [
        'title' => 'FREE',
        'price' => '$0/month',
        'capacity' => '1 Workspaces'
    ],
    [
        'title' => 'RECOMMENDED',
        'price' => '$29/month',
        'capacity' => '1 Workspaces'
    ],
    [
        'title' => 'PREMIUM',
        'price' => '$99/month',
        'capacity' => '1 Workspaces'
    ],
];

$html = '<table border="1">';
$html .= '<thead>';
$html .= '<th>FREE</th>';
$html .= '<th>RECOMMENDED</th>';
$html .= '<th>PREMIUM</th>';
$html .= '</thead>';
$html .= '<tbody>';

foreach ($arr as $user) {
    $html .= "<tr><td{$user['title']}</td><td{$user['price']}</td><td{$user['capacity']}</td></tr>";
}

$html .= '</tbody>';
$html .= '</html>';

echo $html;