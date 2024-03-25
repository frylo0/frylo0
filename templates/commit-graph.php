<?php function commit_graph($username, $accent_color) { ?>
<?php start_minimize() ?>

    <?php 
        $url = 'https://github-readme-activity-graph.vercel.app/graph' . 
            "?username=$username&theme=xcode" . 
            "&point=$accent_color&line=$accent_color" . 
            "&hide_border=true&area=true"; 
    ?>

    <img src="<?= $url ?>" width="100%" />

<?php end_minimize() ?>
<?php } ?>