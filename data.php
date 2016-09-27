<?php
  $data = array(
    'title' => 'Service Desk Stats',
    'headers' => ['Last 90 Days', 'Last Month', 'Last Week', 'Yesterday', 'Today'],
    'data' => [
      [
        'name' => 'Same Day Close',
        'color' => '#00FF00',
        'values' => [51, 45, 49, 50, 36]
      ],
      [
        'name' => 'First Response',
        'color' => '#FF0000',
        'values' => [95, 93, 96, 85, 64]
      ]
    ]
  );
  header('Content-Type: application/json');
  echo json_encode($data);
