<title><?= isset($pageAdd["title"]) ? $pageAdd["title"] : "Baller"; ?></title>
<?php if (env("ENVIRONMENT") === "dev") : ?>
    <link href="css/style.css" rel="stylesheet" type="text/css">
<?php else : ?>    
    <link href="css/style.min.css" rel="stylesheet" type="text/css">
<?php endif; ?>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,700,300,400" rel="stylesheet" type="text/css">
