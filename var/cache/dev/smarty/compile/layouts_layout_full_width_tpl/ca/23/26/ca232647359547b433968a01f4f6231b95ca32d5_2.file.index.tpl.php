<?php
/* Smarty version 3.1.32, created on 2018-10-29 08:42:45
  from 'D:\server\OSPanel\domains\presta\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd6abe53f0369_57410492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca232647359547b433968a01f4f6231b95ca32d5' => 
    array (
      0 => 'D:\\server\\OSPanel\\domains\\presta\\themes\\classic\\templates\\index.tpl',
      1 => 1540748388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6abe53f0369_57410492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_223035bd6abe51c0d56_89852523', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_149565bd6abe51e5ff7_81669359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12265bd6abe522b973_62637757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_307735bd6abe520d2f9_37005834 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12265bd6abe522b973_62637757', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_223035bd6abe51c0d56_89852523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_223035bd6abe51c0d56_89852523',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_149565bd6abe51e5ff7_81669359',
  ),
  'page_content' => 
  array (
    0 => 'Block_307735bd6abe520d2f9_37005834',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12265bd6abe522b973_62637757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home" style="display: none">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149565bd6abe51e5ff7_81669359', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_307735bd6abe520d2f9_37005834', 'page_content', $this->tplIndex);
?>

      </section>
        <section class="noskiHome">

            <div class="row">

                <div class="col-sm-12 col-md-4">

                    <ul class="homeCategorymenu">
                        <li class="menu-item"><a href="/uk/10-tm-furia">ТМ Furia:</a></li>
                        <li class="menu-item"><a href="/uk/14-tm-conte">ТМ Conte::</a></li>
                        <li class="menu-item"><a href="">ТМ Акцент:</a></li>
                        <li class="menu-item"><a href="">ТМ Бонус:</a></li>
                        <li class="menu-item"><a href="">ТМ Дюна:</a></li>
                        <li class="menu-item"><a href="">ТМ Легка хода ОПТ:</a></li>
                        <li class="menu-item"><a href="">ТМ Легка хода розница/мелкий опт:</a></li>
                    </ul>

                </div>

                <div class="col-cm-12 col-md-8">

                    <div class="hGold">
                        <span>Добро пожаловать</span>
                        на сайт официального  дистрибьютора  торговых марок:
                    </div>

                    <p class="hTitle">
                        ТМ Акцент, ТМ Бонус, ТМ Легка хода, ТМ Lightstep, ТМ Дюна, TM Furia
                    </p>

                    <p class="pClassic">
                        У нас Вы можете купить оптом:  крупным и мелкий опт:
                        <br>
                        Носки мужские, женские, детские; колготки для детей, колготы женские. В ассортименте так же присутствуют гольфы осенние, зимние, мужские, женские и детские; следы; леггинсы; чулки женские (полиамид), носки спортивные.
                    </p>


                    <ul class="partnersList">

                        <h2>Партнёрам мы гарантируем:</h2>

                    <li class="menu-item"><h4>1.  Полный и постоянный ассортимент</h4></li>

                    <li class="menu-item"><h4>2.  Оперативность выполнения заказа</h4></li>

                    <li class="menu-item"><h4>3.  Компетентную  консультацию</h4></li>

                    <li class="menu-item"><h4>4.  Индивидуальный подход к каждому покупателю</h4></li>

                    <li class="menu-item"><h4>5.  Помощь в выборе ассортимента для начинающих свой бизнес</h4></li>

                    <li class="menu-item"><h4>6.  Лучшие финансовые и организационные условия для крупно оптовых предприятий</h4></li>

                    <li class=""><h4>7.  Ориентированность на прибыльность Вашего бизнеса</h4></li>

                    </ul>
                </div>
            </div>
        </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
