<?php
/* Smarty version 5.5.0, created on 2025-07-11 09:11:51
  from 'file:itemDeleted.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6870d557798325_10945070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cad14dcff4c67253f3051daa1ca864aaa96f1f2' => 
    array (
      0 => 'itemDeleted.tpl',
      1 => 1752224279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6870d557798325_10945070 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1800202866870d55778f8a5_22423722', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_1800202866870d55778f8a5_22423722 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="container mt-5">
    <div class="alert alert-success" role="alert">
        Item has been successfully deleted!
    </div>
    <div class="card mb-4">
        <div class="card-header">
            Deleted Item Details
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
    <a href="index.php?page=listItems" class="btn btn-primary">Back to Item List</a>
    <a href="index.php?page=createItem" class="btn btn-success ms-2">Create New Item</a>
</div>
<?php
}
}
/* {/block "content"} */
}
