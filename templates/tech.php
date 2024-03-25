<?php function tech(string $slug, bool $use_width_restrict = false) { ?>

<?php start_minimize() ?>
    <?php 
        $size = 22;

        if (false) ;
        elseif ($slug === 'react.js') {
            $img = 'images/react-original.svg';
            $url = '';
            $title = 'React';
        }
        elseif ($slug === 'redux') {
            $img = 'images/redux.svg';
            $url = '';
            $title = 'Redux';
        }
        elseif ($slug === 'npm') {
            $img = 'images/npm.svg';
            $url = '';
            $title = 'NPM';
        }
        elseif ($slug === 'vscode') {
            $img = 'images/vscode.png';
            $url = '';
            $title = 'VS Code';
        }
        elseif ($slug === 'visual-studio') {
            $img = 'images/visualstudio.png';
            $url = '';
            $title = 'Visual Studio';
        }
        elseif ($slug === 'gitlab-ci') {
            $img = 'images/gitlab.png';
            $url = '';
            $title = 'Gitlab CI';
        }
        elseif ($slug === 'stackoverflow') {
            $img = 'images/stackoverflow.svg';
            $url = '';
            $title = 'StackOverflow';
        }
        elseif ($slug === 'postgresql') {
            $img = 'images/postgresql.svg';
            $url = '';
            $title = 'PostgreSQL';
        }
        elseif ($slug === 'problem-solving') {
            $img = 'images/problemSolving.png';
            $url = '';
            $title = 'Problem Solving';
        }
        elseif ($slug === 'python') {
            $img = 'images/python-original.svg';
            $url = '';
            $title = 'Python';
        }
        elseif ($slug === 'css') {
            $img = 'images/css.svg';
            $url = '';
            $title = 'CSS';
        }
        elseif ($slug === 'html') {
            $img = 'images/html5.svg';
            $url = '';
            $title = 'HTML';
        }
        elseif ($slug === 'jquery') {
            $img = 'images/jquery-original.svg';
            $url = '';
            $title = 'jQuery';
        }
        elseif ($slug === 'php') {
            $img = 'images/php.svg';
            $url = '';
            $title = 'PHP';
        }
        elseif ($slug === 'unity3d') {
            $img = 'images/unity3d.svg';
            $url = '';
            $title = 'Unity 3D';
        }
        elseif ($slug === 'json') {
            $img = 'images/json.svg';
            $url = '';
            $title = 'JSON';
        }
        elseif ($slug === 'c') {
            $img = 'images/c.svg';
            $url = '';
            $title = 'C';
        }
        elseif ($slug === 'cpp') {
            $img = 'images/cpp.svg';
            $url = '';
            $title = 'C++';
        }
        elseif ($slug === 'c#') {
            $img = 'images/cSharp.svg';
            $url = '';
            $title = 'C#';
        }
        elseif ($slug === 'git') {
            $img = 'images/git-original.svg';
            $url = '';
            $title = 'Git';
        }
        elseif ($slug === 'gulp') {
            $img = 'images/gulp.svg';
            $url = '';
            $title = 'Gulp';
        }
        elseif ($slug === 'js') {
            $img = 'images/javascript.svg';
            $url = '';
            $title = 'JavaScript';
        }
        elseif ($slug === 'sass') {
            $img = 'images/sass.svg';
            $url = '';
            $title = 'Sass/Scss';
        }
        elseif ($slug === 'vercel') {
            $img = 'images/vercel.png';
            $url = '';
            $title = 'Vercel';
        }
        elseif ($slug === 'webpack') {
            $img = 'images/webpack.png';
            $url = '';
            $title = 'Webpack';
        }
        elseif ($slug === 'websocket') {
            $img = 'images/websocket.svg';
            $url = '';
            $title = 'WebSocket';
        }
        elseif ($slug === 'mobx') {
            $img = 'images/mobx.png';
            $url = '';
            $title = 'Mobx';
        }
        elseif ($slug === 'jira') {
            $img = 'images/jira.png';
            $url = '';
            $title = 'Jira';
        }
        elseif ($slug === 'confluence') {
            $img = 'images/confluence.svg';
            $url = '';
            $title = 'Confluence';
        }
        elseif ($slug === 'markdown') {
            $img = 'images/markdown.png';
            $url = '';
            $title = 'Markdown';
        }
        elseif ($slug === 'stylus') {
            $img = 'images/stylus.svg';
            $url = '';
            $title = 'Stylus';
        }
        elseif ($slug === 'vanilla-extract/css') {
            $img = 'images/vanilla-extract-css.png';
            $url = '';
            $title = 'Vanilla-extract/CSS';
        }
        elseif ($slug === 'next.js') {
            $img = 'images/nextjs.png';
            $url = '';
            $title = 'Next.js';
        }
        elseif ($slug === 'yii2') {
            $img = 'images/yii2.png';
            $url = '';
            $title = 'Yii2';
        }
        elseif ($slug === 'google-sheets') {
            $img = 'images/google-sheets.png';
            $url = '';
            $title = 'Google Sheets';
        }
        elseif ($slug === 'jest') {
            $img = 'images/jest.png';
            $url = '';
            $title = 'Jest';
        }
        elseif ($slug === 'eslint') {
            $img = 'images/eslint.png';
            $url = '';
            $title = 'Eslint';
        }
        elseif ($slug === 'prettier') {
            $img = 'images/prettier.png';
            $url = '';
            $title = 'Prettier';
        }
        elseif ($slug === 'stylelint') {
            $img = 'images/stylelint.png';
            $url = '';
            $title = 'StyleLint';
        }
        elseif ($slug === 'husky') {
            $img = 'images/husky.png';
            $url = '';
            $title = 'Husky';
        }
        elseif ($slug === 'browserslist') {
            $img = 'images/browsreslist.png';
            $url = '';
            $title = 'BrowsersList';
        }
        elseif ($slug === 'zustand') {
            $img = 'images/zustand.png';
            $url = '';
            $title = 'Zustand';
        }
        elseif ($slug === 'yarn') {
            $img = 'images/yarn.png';
            $url = '';
            $title = 'Yarn';
        }
        elseif ($slug === 'pnpm') {
            $img = 'images/pnpm.png';
            $url = '';
            $title = 'PNPM';
        }
        elseif ($slug === 'docker') {
            $img = 'images/docker.webp';
            $url = '';
            $title = 'Docker';
        }
        elseif ($slug === 'styled-components') {
            $img = 'images/styled-components.png';
            $url = '';
            $title = 'Styled Components';
        }
        elseif ($slug === 'typescript') {
            $img = 'images/typescript.webp';
            $url = '';
            $title = 'Typescript';
        }
        elseif ($slug === 'bootstrap') {
            $img = 'images/bootstrap.svg';
            $url = '';
            $title = 'Bootstrap';
        }
        elseif ($slug === 'mui') {
            $img = 'images/mui.png';
            $url = '';
            $title = 'MUI';
        }
        elseif ($slug === 'backbone.js') {
            $img = 'images/backbone.png';
            $url = '';
            $title = 'Backbone.js';
        }
        elseif ($slug === 'vue.js') {
            $img = 'images/vue.png';
            $url = '';
            $title = 'Vue.js';
        }
        elseif ($slug === 'svelte.js') {
            $img = 'images/svelte.png';
            $url = '';
            $title = 'Svelte';
        }
        elseif ($slug === 'wordpress') {
            $img = 'images/wordpress.png';
            $url = '';
            $title = 'WordPress';
        }
        elseif ($slug === 'mysql') {
            $img = 'images/mysql.svg';
            $url = '';
            $title = 'MySQL';
        }
        elseif ($slug === 'jwt') {
            $img = 'images/jwt.png';
            $url = '';
            $title = 'JWT';
        }
        elseif ($slug === 'rest') {
            $img = 'images/rest.png';
            $url = '';
            $title = 'REST API';
        }
        elseif ($slug === 'grapghql') {
            $img = 'images/graphql.png';
            $url = '';
            $title = 'GraphQL';
        }
        elseif ($slug === 'linux') {
            $img = 'images/linux.png';
            $url = '';
            $title = 'Linux';
        }
        elseif ($slug === 'gsap') {
            $img = 'images/gsap-greensock.svg';
            $url = '';
            $title = 'GSAP';
        }
        elseif ($slug === 'devops') {
            $img = 'images/devops.png';
            $url = '';
            $title = 'DevOps';
        }
        elseif ($slug === 'arduino') {
            $img = 'images/arduino.png';
            $url = '';
            $title = 'Arduino UNO';
        }
    ?>
    
    <code><img <?= $use_width_restrict ? 'width' : 'height' ?>="<?= $size ?>" src="<?= $img ?>">&nbsp;<?= $title ?></code>&nbsp;
<?php end_minimize() ?>

<?php } ?>