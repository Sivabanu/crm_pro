<?php /* Smarty version Smarty-3.1.7, created on 2020-03-20 17:51:54
         compiled from "C:\wamp64\www\pro\includes\runtime/../../layouts/v7\modules\Vtiger\IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317945e7502ba8c2f41-57043692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39e241f6987698cbce7b77fb58db968669e49a7d' => 
    array (
      0 => 'C:\\wamp64\\www\\pro\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\IndexViewPreProcess.tpl',
      1 => 1568383690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317945e7502ba8c2f41-57043692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e7502baaa349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e7502baaa349')) {function content_5e7502baaa349($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
</nav>
     <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>
<?php }} ?>