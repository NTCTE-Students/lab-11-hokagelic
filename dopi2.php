<?php

$pattern = "/<[^>]+>/";
$html = "<p>Привет, <b>мир</b>!</p>";
preg_match_all($pattern, $html, $tags);
print('Найдены HTML-теги: ' . implode(', ', $tags[0]) . '<br>');