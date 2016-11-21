<?php defined('C5_EXECUTE') or die(_("Access Denied.")); 
if(count($items)<1){ ?>
    <div class="well"><?=t('You did not add any items to the accordion.')?></div>
<?php } else { 
$i=1; ?>
<div class="panel-group" id="vivid-simple-accordion-<?=$bID?>" role="tablist" aria-multiselectable="true">
    <?php foreach($items as $item){ 
        if($item['state']=="open"){ $state= " in"; }
        else { $state=""; }
    ?>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading<?=$bID.$i?>">
            <?=$openTag?>
                <a data-toggle="collapse" data-parent="#vivid-simple-accordion-<?php echo $bID?>" href="#collapse<?=$bID.$i?>" aria-expanded="true" aria-controls="collapse<?=$bID.$i?>">
                    <?=$item['title']?>
                </a>
            <?=$closeTag?>
        </div>
        <div id="collapse<?=$bID.$i?>" class="panel-collapse collapse<?=$state?>" role="tabpanel" aria-labelledby="heading<?=$bID.$i?>">
            <div class="panel-body">
                <?=$item['description']?>
            </div>
        </div>
    </div>
    <?php $i++; } ?>
</div>
<?php } ?>
