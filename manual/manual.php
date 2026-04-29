<?php

$content = file_get_contents('manual.html');
$content = preg_replace('#file:[^"]+/manual.css#', 'manual.css', $content);
$content = str_replace('<title>manual.md</title>', '<title>PDF24 Creator Manual</title>', $content);
echo $content;

?>
