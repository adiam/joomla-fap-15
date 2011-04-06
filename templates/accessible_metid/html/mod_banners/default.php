<?php
require_once dirname(__FILE__). '/xhtml_helper.php';
?>
<div class="bannergroup<?php echo $params->get( 'moduleclass_sfx' ) ?>">

<?php if ($headerText) : ?>
    <div class="bannerheader"><?php echo $headerText ?></div>
<?php endif;

foreach($list as $item) :

    ?><div class="banneritem<?php echo $params->get( 'moduleclass_sfx' ) ?>"><?php
    echo modBannersHelperXHTMLStrict::renderBanner($params, $item);
    ?><div class="clr"></div>
    </div>
<?php endforeach; ?>

<?php if ($footerText) : ?>
    <div class="bannerfooter<?php echo $params->get( 'moduleclass_sfx' ) ?>">
         <?php echo $footerText ?>
    </div>
<?php endif; ?>
</div>

