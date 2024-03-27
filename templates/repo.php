<?php function repo($username, $repo_name, $accent_color, $width = 278) { ?>
<?php start_minimize() ?>
    <?php global $theme; ?>

    <?php 
        $img = "https://github-readme-stats.vercel.app/api/pin/" . 
            "?username=$username&repo=$repo_name" . 
            "&hide_border=false&show_icons=true" . 
            "&bg_color=00000000&title_color=$accent_color&text_color=999999" . 
            "&icon_color={$accent_color}ff&border_color=99999960";
        ?>

    <a href="https://github.com/<?= $username ?>/<?= $repo_name ?>" alt="Repo">
        <img width="<?= $width ?>" src="<?= $img ?>" alt="<?= $repo_name ?>" />
    </a>

<?php end_minimize() ?>
<?php } ?>