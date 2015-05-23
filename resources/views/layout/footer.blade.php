<p><?= Config::get("constants.SITE_VERSION"); ?></p>
{{-- Javascript load --}}
<?php if (env("ENVIRONMENT") === "dev") : ?>
    <script src="js/all.js" type="text/javascript"></script>
<?php else : ?>
    <script src="js/all.min.js" type="text/javascript"></script>
<?php endif; ?>
