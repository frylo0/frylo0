<?php function repo($username, $repo_name, $width = 278) { ?>
<?php start_minimize() ?>
    <?php global $theme; ?>

    <?php 
        $img = "https://github-readme-stats.vercel.app/api/pin/" . 
            "?username=$username&repo=$repo_name" . 
            //"&bg_color=1F222E&title_color=F85D7F&icon_color=F8D866" . 
            "&theme=$theme" . 
            "&hide_border=true&show_icons=false"; 
        ?>

    <a href="https://github.com/<?= $username ?>/<?= $repo_name ?>" alt="Repo">
        <img width="<?= $width ?>" src="<?= $img ?>" alt="<?= $repo_name ?>" />
    </a>

<?php end_minimize() ?>
<?php } ?>