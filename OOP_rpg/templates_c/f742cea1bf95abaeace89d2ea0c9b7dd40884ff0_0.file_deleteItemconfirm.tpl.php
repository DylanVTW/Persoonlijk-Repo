<?php
/* Smarty version 5.5.0, created on 2025-07-11 09:29:04
  from 'file:deleteItemconfirm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6870d9609a94b5_49169259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f742cea1bf95abaeace89d2ea0c9b7dd40884ff0' => 
    array (
      0 => 'deleteItemconfirm.tpl',
      1 => 1752226137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6870d9609a94b5_49169259 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18301137776870d96099fcf7_09046687', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_18301137776870d96099fcf7_09046687 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="container mt-5">
    <div class="alert alert-danger" role="alert">
        <strong>Warning!</strong> You are about to delete the following item. This action cannot be undone.
    </div>
    <div class="card mb-4">
        <div class="card-header">
            Item Details
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> <?php echo $_smarty_tpl->getValue('item')->getId();?>
</li>
                <li class="list-group-item"><strong>Name:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item')->getName(), ENT_QUOTES, 'UTF-8', true);?>
</li>
                <li class="list-group-item"><strong>Type:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item')->getType(), ENT_QUOTES, 'UTF-8', true);?>
</li>
                <li class="list-group-item"><strong>Value:</strong> <?php echo $_smarty_tpl->getValue('item')->getValue();?>
 gold</li>
            </ul>
        </div>
    </div>
    <form action="index.php?page=deleteItemConfirm" method="POST" class="d-inline">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('item')->getId();?>
">
        <button type="submit" class="btn btn-danger">Yes, Delete Item</button>
        <a href="index.php?page=listItems" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
<?php
}
}
/* {/block "content"} */
}
