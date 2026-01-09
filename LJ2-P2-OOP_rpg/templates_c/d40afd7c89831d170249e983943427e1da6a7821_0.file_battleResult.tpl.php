<?php
/* Smarty version 5.5.0, created on 2025-07-09 20:37:58
  from 'file:battleResult.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_686ed326b89553_00592317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd40afd7c89831d170249e983943427e1da6a7821' => 
    array (
      0 => 'battleResult.tpl',
      1 => 1752093471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686ed326b89553_00592317 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_386979795686ed326b6f989_73464099', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_386979795686ed326b6f989_73464099 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="container my-5">
  <h2 class="mb-4 text-center">Battle Result</h2>
  <div class="row justify-content-center mb-4">
    <!-- ... bestaande character cards ... -->
    <!-- (deze sectie blijft ongewijzigd) -->
  </div>

  <div class="alert alert-info text-center mb-4">
    <?php if ($_smarty_tpl->getValue('winner') == 'draw') {?>
    <strong>Het gevecht is geëindigd in een gelijkspel!</strong>
    <?php } else { ?>
    <strong>Winnaar: <?php echo $_smarty_tpl->getValue('winner');?>
</strong>
    <?php }?>
  </div>

  <!-- Battle bediening met keuzelijsten voor aanvallen -->
  <div class="text-center my-4">
    <form
      action="index.php?page=battleRound"
      method="post"
      style="display: inline"
    >
      <div class="row justify-content-center mb-3">
        <div class="col-md-5">
          <label for="fighter1Attack" class="form-label"><strong><?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getName();?>
 aanval:</strong></label>
          <select class="form-select" id="fighter1Attack" name="fighter1attack" <?php if ($_smarty_tpl->getValue('battle')->getFighter1()->getHealth() <= 0) {?>disabled<?php }?>>
            <option value="">Normal Attack</option>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('battle')->getFighter1()->getSpecialAttacks(), 'special');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('special')->value) {
$foreach0DoElse = false;
?>
  <option value="<?php echo $_smarty_tpl->getValue('special');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('special'));?>
</option>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center">
          <span class="display-6"></span>
        </div>
        <div class="col-md-5">
          <label for="fighter2Attack" class="form-label"><strong><?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getName();?>
 aanval:</strong></label>
          <select class="form-select" id="fighter2Attack" name="fighter2Attack" <?php if ($_smarty_tpl->getValue('battle')->getFighter2()->getHealth() <= 0) {?>disabled<?php }?>>
            <option value="">Normal Attack</option>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('battle')->getFighter2()->getSpecialAttacks(), 'special');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('special')->value) {
$foreach1DoElse = false;
?>
  <option value="<?php echo $_smarty_tpl->getValue('special');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('special'));?>
</option>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-warning btn-lg"
        <?php if ($_smarty_tpl->getValue('battle')->getFighter1()->getHealth() <= 0 || $_smarty_tpl->getValue('battle')->getFighter2()->getHealth() <= 0) {?>disabled<?php }?>>
        Fight Round
      </button>
    </form>
    <?php if ($_smarty_tpl->getValue('battle')->getFighter1()->getHealth() <= 0 || $_smarty_tpl->getValue('battle')->getFighter2()->getHealth() <= 0) {?>
    <form
      action="index.php?page=resetHealth"
      method="post"
      style="display: inline"
    >
      <input
        type="hidden"
        name="fighter1"
        value="<?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getName();?>
"
      />
      <input
        type="hidden"
        name="fighter2"
        value="<?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getName();?>
"
      />
      <button type="submit" class="btn btn-success btn-lg">Reset Health</button>
    </form>
    <?php }?>
  </div>

  <!-- Battle log sectie -->
  <div class="card mb-4">
    <div class="card-header">Gevechtsverslag</div>
    <div class="card-body">
      <ul class="mb-0">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('battle')->getBattleLog(), 'regel');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('regel')->value) {
$foreach2DoElse = false;
?>
        <li><?php echo $_smarty_tpl->getValue('regel');?>
</li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>

  <!-- Navigatieknoppen -->
  <div class="text-center mt-4">
    <a href="index.php?page=battleForm" class="btn btn-secondary me-2"
      >Nieuwe Battle</a
    >
    <a href="index.php?page=listCharacters" class="btn btn-outline-primary"
      >Terug naar Character List</a
    >
  </div>
  <div class="tenor-gif-embed" data-postid="10432020374864364761" data-share-method="host" data-aspect-ratio="1.02469" data-width="100%"><a href="https://tenor.com/view/faust-limbus-company-butterfly-fire-gif-10432020374864364761">Faust Limbus Company GIF</a>from <a href="https://tenor.com/search/faust-gifs">Faust GIFs</a></div> <?php echo '<script'; ?>
 type="text/javascript" async src="https://tenor.com/embed.js"><?php echo '</script'; ?>
>
</div>
<?php
}
}
/* {/block "content"} */
}
