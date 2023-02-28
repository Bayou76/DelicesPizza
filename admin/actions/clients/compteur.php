<?php
function incrementVisitorsCount() {
    $file = '../../admin/assets/fichiers/compteur.txt';
    $count = 0;
    if (file_exists($file)) {
      $count = (int)file_get_contents($file);
    }
    $count++;
    file_put_contents($file, $count);
  }
  