<?php defined('C5_EXECUTE') or die(_("Access Denied.")); 
if(count($items)<1){ ?>
    <div class="well"><?=t('You did not add any items to the accordion.')?></div>
<?php } else { ?>
<div class="vivid-simple-accordion" id="vivid-simple-accordion-<?=$bID?>">
    <?php foreach($items as $item){?>
    <div class="simple-accordion-group <?=$item['state']?>">
        <div class="simple-accordion-title-shell">
            <?=$openTag?><?=$item['title']?><?=$closeTag?>
        </div>
        <div class="simple-accordion-description">
            <?=$item['description']?>
        </div>
    </div>
    <?php } ?>
</div>
<?php } ?>
