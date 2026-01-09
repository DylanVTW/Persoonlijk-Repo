<?php
/* Smarty version 5.5.0, created on 2025-07-10 11:46:15
  from 'file:itemCreated.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_686fa80723b014_14394942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b645e8336d75bb97d7a03aeac2dfe1e95139e25' => 
    array (
      0 => 'itemCreated.tpl',
      1 => 1752147951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686fa80723b014_14394942 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1894889980686fa807235632_79584613', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_1894889980686fa807235632_79584613 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="row justify-content-center my-5">
  <div class="col-md-8">
    <div class="alert alert-success text-center" role="alert">
      Item succesvol aangemaakt!
    </div>
    <div class="card shadow">
      <div class="card-header bg-success text-white">
        <h4 class="mb-0">Item Details</h4>
      </div>
      <div class="card-body">
        <dl class="row mb-0">
          <dt class="col-sm-3">ID</dt>
          <dd class="col-sm-9"><?php echo $_smarty_tpl->getValue('item')->getId();?>
</dd>

          <dt class="col-sm-3">Name</dt>
          <dd class="col-sm-9"><?php echo $_smarty_tpl->getValue('item')->getName();?>
</dd>

          <dt class="col-sm-3">Type</dt>
          <dd class="col-sm-9"><?php echo $_smarty_tpl->getValue('item')->getType();?>
</dd>

          <dt class="col-sm-3">Value</dt>
          <dd class="col-sm-9"><?php echo $_smarty_tpl->getValue('item')->getValue();?>
 gold</dd>
        </dl>
      </div>
      <div class="card-footer d-flex justify-content-between">
        <a href="index.php?page=createItem" class="btn btn-primary">Create Another Item</a>
        <a href="index.php" class="btn btn-secondary">Back to Home</a>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "content"} */
}
