<?php
/* Smarty version 5.5.0, created on 2025-07-04 09:53:32
  from 'file:character.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6867a49c116265_35178578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fe127be51ebc9bd07afb1ade7a900e42b0e7b63' => 
    array (
      0 => 'character.tpl',
      1 => 1751617212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6867a49c116265_35178578 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5619967346867a49c101303_61168596', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_5619967346867a49c101303_61168596 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

    <div class="card my-4" style="max-width: 400px;">
        <div class="card-header">
            <h2 class="mb-0"><?php echo $_smarty_tpl->getValue('character')->getName();?>
</h2>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Name:</strong> <?php echo $_smarty_tpl->getValue('character')->getName();?>
</p>
            <p class="card-text"><strong>Health:</strong> <?php echo $_smarty_tpl->getValue('character')->getHealth();?>
</p>
            <p class="card-text"><strong>Attack:</strong> <?php echo $_smarty_tpl->getValue('character')->getAttack();?>
</p>
            <p class="card-text"><strong>Defense:</strong> <?php echo $_smarty_tpl->getValue('character')->getDefense();?>
</p>
            <p class="card-text"><strong>Role:</strong> <?php echo $_smarty_tpl->getValue('character')->getRole();?>
</p>
            <p class="card-text"><strong>Range:</strong> <?php echo $_smarty_tpl->getValue('character')->getRange();?>
</p>
            <?php if ($_smarty_tpl->getValue('character')->getRole() == 'Warrior' && $_smarty_tpl->getValue('character')->getRage() !== null) {?>
                <p class="card-text"><strong>Rage:</strong> <?php echo $_smarty_tpl->getValue('character')->getRage();?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('character')->getRole() == 'Mage' && $_smarty_tpl->getValue('character')->getmana() !== null) {?>
                <p class="card-text"><strong>Mana:</strong> <?php echo $_smarty_tpl->getValue('character')->getMana();?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('character')->getRole() == 'Rogue' && $_smarty_tpl->getValue('character')->getEnergy() !== null) {?>
                <p class="card-text"><strong>Energy:</strong> <?php echo $_smarty_tpl->getValue('character')->getEnergy();?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('character')->getRole() == 'Healer' && $_smarty_tpl->getValue('character')->getSpirit() !== null) {?>
                <p class="card-text"><strong>Spirit:</strong> <?php echo $_smarty_tpl->getValue('character')->getSpirit();?>
</p>
            <?php }?>

            <hr>
            <div class="card-text">
                <strong>Character Summary:</strong> 
                <p><?php echo $_smarty_tpl->getValue('character')->getSummary();?>
</p>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="index.php?page=listCharacters" class="btn btn-secondary">Terug naar lijst</a>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
