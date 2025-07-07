<?php
/* Smarty version 5.5.0, created on 2025-07-04 15:20:18
  from 'file:battleResult.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6867f1321e2a59_62405840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd40afd7c89831d170249e983943427e1da6a7821' => 
    array (
      0 => 'battleResult.tpl',
      1 => 1751642414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6867f1321e2a59_62405840 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_939182326867f13214c964_67127231', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_939182326867f13214c964_67127231 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="container my-5">
  <h2 class="mb-4 text-center">Battle Result</h2>
  <div class="row justify-content-center mb-4">
    <div class="col-md-5">
      <div class="card mb-3">
        <div class="card-header bg-primary text-white">
          <?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getName();?>

          (<?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getRole();?>
)
        </div>
        <div class="card-body">
          <p>
            <strong>Health:</strong>
            <?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getHealth();?>

            <span class="text-muted"
              >(origineel: <?php echo $_smarty_tpl->getValue('battle')->getFighter1OriginalHealth();?>
)</span
            >
          </p>
          <p><strong>Attack:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getAttack();?>
</p>
          <p>
            <strong>Defense:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getDefense();?>

          </p>
          <p><strong>Range:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getRange();?>
</p>

<?php if ($_smarty_tpl->getValue('battle')->getFighter1()->getRole() == 'Warrior' && !is_array($_smarty_tpl->getValue('battle')->getFighter1()->getRage())) {?>
            <p><strong>Rage:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getRage();?>
</p>
<?php }
if ($_smarty_tpl->getValue('battle')->getFighter1()->getRole() == 'Mage' && !is_array($_smarty_tpl->getValue('battle')->getFighter1()->getMana())) {?>
            <p><strong>Mana:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getMana();?>
</p>
<?php }
if ($_smarty_tpl->getValue('battle')->getFighter1()->getRole() == 'Rogue' && !is_array($_smarty_tpl->getValue('battle')->getFighter1()->getEnergy())) {?>
            <p><strong>Energy:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getEnergy();?>
</p>
<?php }
if ($_smarty_tpl->getValue('battle')->getFighter1()->getRole() == 'Healer' && !is_array($_smarty_tpl->getValue('battle')->getFighter1()->getSpirit())) {?>
            <p><strong>Spirit:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter1()->getSpirit();?>
</p>
<?php }?>
        </div>
      </div>
    </div>
    <div class="col-md-2 d-flex align-items-center justify-content-center">
      <span class="display-6">VS</span>
    </div>
    <div class="col-md-5">
      <div class="card mb-3">
        <div class="card-header bg-success text-white">
          <?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getName();?>

          (<?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getRole();?>
)
        </div>
        <div class="card-body">
          <p>
            <strong>Health:</strong>
            <?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getHealth();?>

            <span class="text-muted"
              >(origineel: <?php echo $_smarty_tpl->getValue('battle')->getFighter2OriginalHealth();?>
)</span
            >
          </p>
          <p><strong>Attack:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getAttack();?>
</p>
          <p>
            <strong>Defense:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getDefense();?>

          </p>
          <p><strong>Range:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getRange();?>
</p>


<?php if ($_smarty_tpl->getValue('battle')->getFighter2()->getRole() == 'Warrior' && !is_array($_smarty_tpl->getValue('battle')->getFighter2()->getRage())) {?>
            <p><strong>Rage:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getRage();?>
</p>
<?php }
if ($_smarty_tpl->getValue('battle')->getFighter2()->getRole() == 'Mage' && !is_array($_smarty_tpl->getValue('battle')->getFighter2()->getMana())) {?>
            <p><strong>Mana:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getMana();?>
</p>
<?php }
if ($_smarty_tpl->getValue('battle')->getFighter2()->getRole() == 'Rogue' && !is_array($_smarty_tpl->getValue('battle')->getFighter2()->getEnergy())) {?>
            <p><strong>Energy:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getEnergy();?>
</p>
<?php }
if ($_smarty_tpl->getValue('battle')->getFighter2()->getRole() == 'Healer' && !is_array($_smarty_tpl->getValue('battle')->getFighter2()->getSpirit())) {?>
            <p><strong>Spirit:</strong> <?php echo $_smarty_tpl->getValue('battle')->getFighter2()->getSpirit();?>
</p>
<?php }?>
        </div>
      </div>
    </div>
  </div>

  <div class="alert alert-info text-center mb-4">
    <?php if ($_smarty_tpl->getValue('winner') == 'draw') {?>
    <strong>Het gevecht is geëindigd in een gelijkspel!</strong>
    <?php } else { ?>
    <strong>Winnaar: <?php echo $_smarty_tpl->getValue('winner');?>
</strong>
    <?php }?>
  </div>

  <!-- Battle bediening -->
  <div class="text-center my-4">
    <?php if ($_smarty_tpl->getValue('battle')->getFighter1()->getHealth() > 0 && $_smarty_tpl->getValue('battle')->getFighter2()->getHealth() > 0) {?>
    <form
      action="index.php?page=battleRound"
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
      <button type="submit" class="btn btn-warning btn-lg">Attack</button>
    </form>
    <?php } else { ?>
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
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('regel')->value) {
$foreach0DoElse = false;
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
</div>
<?php
}
}
/* {/block "content"} */
}
