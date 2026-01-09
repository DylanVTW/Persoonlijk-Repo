<?php
/* Smarty version 5.5.0, created on 2025-07-09 14:10:54
  from 'file:characterList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_686e786e719066_72353223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc61181a4a73b4952532af59e69ccc5089736030' => 
    array (
      0 => 'characterList.tpl',
      1 => 1752070071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686e786e719066_72353223 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1442216957686e786e6fd180_80536568', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_1442216957686e786e6fd180_80536568 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="card my-4">
    <div class="card-header">
        <h2 class="mb-0">Character List</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Health</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Range</th>
                    <th>Rage</th>
                    <th>Mana</th>
                    <th>Energy</th>
                    <th>Spirit</th>
                    <th>Shield</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('characters'), 'character');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('character')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('character')->getName();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getRole();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getHealth();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getAttack();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getDefense();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getRange();?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->getValue('character')->getRole() == 'Warrior' && $_smarty_tpl->getValue('character')->getRage() !== null) {?>
                            <?php echo $_smarty_tpl->getValue('character')->getRage();?>

                        <?php } else { ?>
                            -
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->getValue('character')->getRole() == 'Mage' && $_smarty_tpl->getValue('character')->getMana() !== null) {?>
                            <?php echo $_smarty_tpl->getValue('character')->getMana();?>

                        <?php } else { ?>
                            -
                        <?php }?>

                    </td>
                    <td>
                        <?php if ($_smarty_tpl->getValue('character')->getRole() == 'Rogue' && $_smarty_tpl->getValue('character')->getEnergy() !== null) {?>
                            <?php echo $_smarty_tpl->getValue('character')->getEnergy();?>

                        <?php } else { ?>
                            -
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->getValue('character')->getRole() == 'Healer' && $_smarty_tpl->getValue('character')->getSpirit() !== null) {?>
                            <?php echo $_smarty_tpl->getValue('character')->getSpirit();?>

                        <?php } else { ?>
                            -
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->getValue('character')->getRole() == 'Tank' && $_smarty_tpl->getValue('character')->getShield() !== null) {?>
                            <?php echo $_smarty_tpl->getValue('character')->getShield();?>

                        <?php } else { ?>
                            -
                        <?php }?>
                    </td>
                    <td>
                        <a href="index.php?page=viewCharacter&name=<?php echo $_smarty_tpl->getValue('character')->getName();?>
" class="btn btn-sm btn-primary">View</a>
                        <a href="index.php?page=deleteCharacter&name=<?php echo $_smarty_tpl->getValue('character')->getName();?>
" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
