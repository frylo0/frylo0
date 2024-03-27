<?php

require_once __DIR__ . '/utils/minimize.php';

require_once __DIR__ . '/templates/stats.php';
require_once __DIR__ . '/templates/rich-graph.php';
require_once __DIR__ . '/templates/repo.php';
require_once __DIR__ . '/templates/visitors.php';
require_once __DIR__ . '/templates/typing.php';
require_once __DIR__ . '/templates/social.php';
require_once __DIR__ . '/templates/tech.php';
require_once __DIR__ . '/templates/commit-graph.php';
require_once __DIR__ . '/templates/spacing.php';

$theme = 'prussian';
$login = 'frylo0';
$email = 'frylo.d.ts@gmail.com';
$website = 'frylo.org';
$accent_color = '1283c3';

?>

<?php visitors($login) ?>

<a href="<?= $website ?>">
  <?php typing([
    'Hi, there I\'m Frylo 👋',
    'Nice to meet you! 😸',
    'I\'m Frontend Developer'
  ], $accent_color) ?>
</a>

<br>
<br>
<br>

<p align="center">
<h3 align="center">
  Hi there, I'm <a href="<?= $website ?>" target="_blank" rel="noreferrer">Frylo</a> 👋
</h3>

<h2 align="center">
  I'm a Frontend Developer 💻!
</h2>

<?php start_minimize() ?>
<h5 align="center">
  <?php social('website', 'frylo.org') ?>&nbsp;
  <?php social('gmail', 'frylo.d.ts') ?>&nbsp;
  <?php social('linkedin', 'frylo') ?>&nbsp;
  <?php social('youtube', 'frylo0') ?>&nbsp;
  <?php social('gitlab', 'frylo') ?>&nbsp;
  <?php social('github', 'frylo0') ?>
</h5>
<?php end_minimize() ?>
</p>

<?php spacing() ?>

<h2 align="center">🔭 I'm currently working on</h2>

<p align="center">
  My personal <?php tech('gsap') ?> website with blog
  <br>
  Improving my <?php tech('devops', true) ?> skills
  <br>
  Studying <?php tech('arduino') ?> Micro-controller
</p>

<?php spacing() ?>

<h2 align="center">🌱 I'm currently learning</h2>

<p align="center">
  1) <?php tech('react.js') ?> Native
  <br>
  2) <?php tech('gsap') ?> Library for SVG animations
  <br>
  3) <?php tech('docker') ?> Containers
</p>

<?php spacing() ?>

<h2 align="center">Techs / Tools 🔥</h2>

<?php start_minimize() ?>
<p align="center">
  <?php tech('react.js') ?>
  <?php tech('redux') ?>
  <?php tech('npm') ?>
  <?php tech('vscode') ?>
  <?php tech('visual-studio') ?>
  <?php tech('gitlab-ci') ?>
  <?php tech('stackoverflow') ?>
  <?php tech('postgresql') ?>
  <?php tech('problem-solving') ?>
  <?php tech('python') ?>
  <?php tech('css') ?>
  <?php tech('html') ?>
  <?php tech('jquery') ?>
  <?php tech('php') ?>
  <?php tech('unity3d') ?>
  <?php tech('json') ?>
  <?php tech('c') ?>
  <?php tech('cpp') ?>
  <?php tech('c#') ?>
  <?php tech('git') ?>
  <?php tech('gulp') ?>
  <?php tech('js') ?>
  <?php tech('sass') ?>
  <?php tech('vercel') ?>
  <?php tech('webpack') ?>
  <?php tech('websocket') ?>
  <?php tech('jira') ?>
  <?php tech('confluence') ?>
  <?php tech('markdown') ?>
  <?php tech('stylus') ?>
  <?php tech('vanilla-extract/css') ?>
  <?php tech('next.js') ?>
  <?php tech('yii2') ?>
  <?php tech('google-sheets') ?>
  <?php tech('jest') ?>
  <?php tech('eslint') ?>
  <?php tech('prettier') ?>
  <?php tech('stylelint') ?>
  <?php tech('husky') ?>
  <?php tech('browserslist') ?>
  <?php tech('zustand') ?>
  <?php tech('yarn') ?>
  <?php tech('pnpm') ?>
  <?php tech('docker') ?>
  <?php tech('styled-components') ?>
  <?php tech('typescript') ?>
  <?php tech('bootstrap') ?>
  <?php tech('mui') ?>
  <?php tech('backbone.js') ?>
  <?php tech('vue.js') ?>
  <?php tech('svelte.js') ?>
  <?php tech('wordpress') ?>
  <?php tech('mysql') ?>
  <?php tech('jwt') ?>
  <?php tech('rest') ?>
  <?php tech('grapghql') ?>
  <?php tech('linux') ?>
</p>
<?php end_minimize() ?>

<?php spacing() ?>

<h2 align="center">Stats ⚡</h2>

<?php stats($login, $accent_color) ?>
<?php commit_graph($login, $accent_color) ?>

<?php spacing() ?>

<h2 align="center">📜 Repos</h2>
<p align="center">

  <?php repo($login, 'frylo.org', $accent_color) ?>
  <?php repo($login, 'pftp', $accent_color) ?>
  <?php repo($login, 'ts-package-starter', $accent_color) ?>
  <?php repo($login, 'nextjs-modern-starter-2024', $accent_color) ?>
  <?php repo($login, 'dtl', $accent_color) ?>
  <?php repo($login, 'jquery-reactive', $accent_color) ?>
</p>

<h4 align="center">
  <a href="https://github.com/<?= $login ?>?tab=repositories" title="Show Repositories">🔎 Show More 🔍</a>
</h4>