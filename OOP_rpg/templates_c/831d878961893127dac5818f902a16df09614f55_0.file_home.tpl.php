<?php
/* Smarty version 5.5.0, created on 2025-07-17 10:33:33
  from 'file:home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6878d17dd17362_26585355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '831d878961893127dac5818f902a16df09614f55' => 
    array (
      0 => 'home.tpl',
      1 => 1752748157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6878d17dd17362_26585355 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Persoonlijk-Repo\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20910579276878d17dd10f40_27230031', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_20910579276878d17dd10f40_27230031 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Persoonlijk-Repo\\OOP_rpg\\templates';
?>

<div class="container my-5">
    <div class="text-center">
        <h1 class="mb-4">Welkom bij de RPG Game!</h1>
        <p class="lead">
            Ontdek een wereld vol avontuur, helden en gevaren.<br>
            Maak je eigen karakter aan, bekijk de lijst met helden en ga op pad in jouw eigen RPG-avontuur.<br>
            Veel plezier en succes!
        </p>
    </div>
<?php
}
}
/* {/block "content"} */
}
