<?php function rich_graph($username) { ?>

<img src="https://myreadme.vercel.app/api/embed/<?= $username ?>?panels=userstatistics,toprepositories,toplanguages,commitgraph" alt="reimaginedreadme" />

<?php } ?>