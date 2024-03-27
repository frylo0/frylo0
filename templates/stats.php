<?php function stats($username, $accent_color) { ?>
    
<?php global $theme; ?>

<?php 
    $list_2_str = function ($list) {
        return implode(',', array_map(
            fn ($lang) => urlencode($lang), 
            $list
        ));
    };

    $hide_langs = $list_2_str(['c++', 'c', 'html', 'less', 'sass']);
    $hide_repos = $list_2_str(['Pacman-AI']);
?>

<?php 
    $widget_a = "https://github-readme-stats.vercel.app/api" . 
        "?username=$username" . 
        "&count_private=true&hide=issues,contribs" . 
        "&show_icons=true&hide_border=true" . 
        "&theme=$theme" . 
        "&bg_color=00000000&title_color=$accent_color&text_color=999999";

    $widget_b = "https://github-readme-stats.vercel.app/api/top-langs/" . 
        "?username=$username" . 
        "&langs_count=6&hide=$hide_langs&exclude_repo=$hide_repos" .
        "&layout=compact&hide_border=true" . 
        "&theme=$theme" . 
        "&bg_color=00000000&title_color=$accent_color&text_color=999999";
    
    $widget_c = "https://github-readme-streak-stats.herokuapp.com" . 
        "?user=$username" . 
        "&hide_border=true" . 
        "&theme=$theme" . 
        "&background=00000000&fire={$accent_color}&ring={$accent_color}70" .
        "&currStreakNum=999999&currStreakLabel={$accent_color}" . 
        "&dates=999999a0&sideNums={$accent_color}b0&sideLabels=999999ff";
?>

<p align="center">
    <img height="50%" width="auto" src="<?= $widget_a ?>" />
    <img height="50%" width="auto" src="<?= $widget_b ?>" />
    <img src="<?= $widget_c ?>" />
</p>

<?php } ?>