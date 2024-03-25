<?php function stats($username) { ?>
    
<?php global $theme; ?>

<p align="center">
    <img height="50%" width="auto" src="https://github-readme-stats.vercel.app/api?username=<?= $username ?>&show_icons=true&count_private=true&theme=<?= $theme ?>&hide_border=true&hide=issues,contribs&bg_color=00000000">
    <img height="50%" width="auto" src="https://github-readme-stats.vercel.app/api/top-langs/?username=<?= $username ?>&layout=compact&hide_border=true&theme=<?= $theme ?>&bg_color=00000000&langs_count=6&hide=jupyter%20notebook,tex,css,php&exclude_repo=Pacman-AI">
    <img src="https://github-readme-streak-stats.herokuapp.com?user=<?= $username ?>&theme=<?= $theme ?>&hide_border=true&background=FFFFFF00">
</p>

<?php } ?>