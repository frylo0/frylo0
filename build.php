<?php
ob_start();
include __DIR__ . '/README.php';
$content = ob_get_clean();

file_put_contents(__DIR__ . '/README.md', $content);

echo 'readme.md file generated successfully!';
