<?php function repo($username, $repo_name, $accent_color, $width = 278) { ?>
<?php start_minimize() ?>
    <?php global $theme; ?>

    <?php 
        $img = "https://github-readme-stats.vercel.app/api/pin/" . 
            "?username=$username&repo=$repo_name" . 
            //"&theme=$theme" . 
            "&bg_color={$accent_color}20&title_color=$accent_color&text_color={$accent_color}a0&icon_color={$accent_color}c0&border_color=$accent_color" . 
            "&hide_border=false&show_icons=true"; 
        ?>

    <a href="https://github.com/<?= $username ?>/<?= $repo_name ?>" alt="Repo">
        <img width="<?= $width ?>" src="<?= $img ?>" alt="<?= $repo_name ?>" />
    </a>

<?php end_minimize() ?>
<?php } ?>