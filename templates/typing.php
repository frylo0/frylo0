<?php function typing(array $lines, string $color) { ?>

<?php $lines_str = implode(';', array_map(fn ($line) => urlencode($line), $lines)); ?>

<h1 align="center">
    <a href="https://git.io/typing-svg">
        <img src="https://readme-typing-svg.herokuapp.com/?lines=<?= $lines_str ?>&center=true&size=30&color=<?= $color ?>">
    </a>
</h1>

<?php } ?>