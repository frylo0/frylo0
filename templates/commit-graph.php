<?php function commit_graph($username, $accent_color) { ?>
<?php start_minimize() ?>

    <?php 
        $url = 'https://github-readme-activity-graph.vercel.app/graph' . 
            "?username=$username" . 
            "&hide_border=true&area=true" .
            "&theme=xcode" . 
            "&point=$accent_color&line=$accent_color&bg_color=00000000&color=999999&title_color={$accent_color}";
    ?>

    <img src="<?= $url ?>" width="100%" />

<?php end_minimize() ?>
<?php } ?>