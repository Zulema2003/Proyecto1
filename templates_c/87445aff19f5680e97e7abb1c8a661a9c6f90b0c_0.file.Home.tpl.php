<?php
/* Smarty version 3.1.36, created on 2021-02-19 18:42:50
  from 'C:\xampp\htdocs\Proyecto1-main\View\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_602ff89aa38409_05979530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87445aff19f5680e97e7abb1c8a661a9c6f90b0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto1-main\\View\\Home.tpl',
      1 => 1613697146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_602ff89aa38409_05979530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <h1 align="center">INGRESO</h1>
</div>

    <div class="row">
    <form  method="post" action="?controller=User&method=BuscarUsuario" class="col s12">

    <div class="row">
        <div class="input-field col s8" >
          <input id="email" type="email" class="validate" required="" name="email"/>
          <label for="email">Email</label>
        </div>
    </div>

      <div class="row">
         <div class="input-field col s8">
             <input id="password" type="password" class="validate" required="" name="pass"/>
             <label for="password">Password</label>
            </div>
      </div>

      <div class="row">
            <div class="input-field col s12">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
