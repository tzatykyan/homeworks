<?php

$_01=array ('name'=>'Idiot', 'author'=>'Dostoevsky', 'style'=> 'narrative', 'price'=>'120 uah');
$_02=array ('name'=>'Rusalochka', 'author'=>'G.Andersen', 'style'=> 'kids', 'price'=>'140 uah');
$_03=array('name'=>'Sto let odinochestva', 'author'=>'G.Markes', 'style'=> 'narrative', 'price'=>'167 uah');
$item_list=array('001'=>$_01,'002'=> $_02, '003'=>$_03);
echo '<pre>';
print_r ($item_list);
echo '</pre>';