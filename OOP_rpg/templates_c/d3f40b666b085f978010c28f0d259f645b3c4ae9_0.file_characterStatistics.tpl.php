<?php
/* Smarty version 5.5.0, created on 2025-07-10 09:55:08
  from 'file:characterStatistics.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_686f8dfc7d3b21_49932665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3f40b666b085f978010c28f0d259f645b3c4ae9' => 
    array (
      0 => 'characterStatistics.tpl',
      1 => 1752139573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686f8dfc7d3b21_49932665 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2118929082686f8dfc7cba34_71446487', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_2118929082686f8dfc7cba34_71446487 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="container my-5">
  <h2 class="mb-4">Character Statistics</h2>

  <div class="mb-4">
    <h4>
      Totaal aantal characters: <span class="badge bg-primary"><?php echo $_smarty_tpl->getValue('totalCharacters');?>
</span>
    </h4>
  </div>

  <div class="mb-4">
    <h5>Character Types</h5>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Type</th>
          <th>Aantal</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('characterTypeCounts'), 'count', false, 'type');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('type')->value => $_smarty_tpl->getVariable('count')->value) {
$foreach0DoElse = false;
?>
        <tr>
          <td><?php echo $_smarty_tpl->getValue('type');?>
</td>
          <td><?php echo $_smarty_tpl->getValue('count');?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </div>

  <div class="mb-4">
    <h5>Alle character namen</h5>
    <ul class="list-group">
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('characterNames'), 'name');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('name')->value) {
$foreach1DoElse = false;
?>
      <li class="list-group-item"><?php echo $_smarty_tpl->getValue('name');?>
</li>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
  </div>

  <div class="mb-4 d-flex gap-2">
    <a href="index.php?page=resetStats" class="btn btn-danger btn-lg">
      <i class="bi bi-arrow-counterclockwise"></i> Reset Statistics
    </a>
    <a href="index.php?page=recalculateStats" class="btn btn-info btn-lg">
      <i class="bi bi-bootstrap-reboot"></i> Recalculate Statistics
    </a>
  </div>
</div>
<?php
}
}
/* {/block "content"} */
}
