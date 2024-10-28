<?php function social(string $type, string $platform_username) { ?>

<?php start_minimize() ?>
    <?php 
        $size = 22;

        if (false) ;
        elseif ($type === 'website') {
            $img = 'images/website.svg';
            $url = "https://$platform_username";
            $title = 'Website';
            $label = "$platform_username";
        }
        elseif ($type === 'gmail') {
            $img = 'images/gmail.png';
            $url = "mailto:$platform_username@gmail.com";
            $title = "$platform_username@gmail.com";
            $label = 'Gmail';
        }
        elseif ($type === 'linkedin') {
            $img = 'images/linkedin.svg';
            $url = "https://www.linkedin.com/in/$platform_username/";
            $title = 'LinkedIn Profile';
            $label = 'LinkedIn';
        }
        elseif ($type === 'gitlab') {
            $img = 'images/gitlab.png';
            $url = "https://gitlab.com/$platform_username";
            $title = 'GitLab Profile';
            $label = 'GitLab';
        }
        elseif ($type === 'github') {
            $img = 'images/github.png';
            $url = "https://github.com/$platform_username";
            $title = 'GitHub Profile';
            $label = 'GutHub';
        }
        elseif ($type === 'youtube') {
            $img = 'images/youtube.png';
            $url = "https://www.youtube.com/@$platform_username";
            $title = 'YouTube Channel';
            $label = 'YouTube';
        }
    ?>
    
    <code>
        <a href="<?= $url ?>" title="<?= $title ?>">
            <img width="<?= $size ?>" src="<?= $img ?>"> <?= $label ?>
        </a>
    </code>
<?php end_minimize() ?>

<?php } ?>