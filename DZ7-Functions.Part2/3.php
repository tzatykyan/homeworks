<?php
$string="������������� ������ ��� �������. Zhil da byl cherniy kot";

function encryption_key(){ //������� ���� ����������-������������
	
	$alphabet=[
	"A"=>"A","B"=>"�","C"=>"�","D"=>"�",
        "E"=>"�","F"=>"�","G"=>"�","H"=>"�","I"=>"��",
        "J"=>"�","K"=>"K","L"=>"�","M"=>"M","N"=>"�",
        "O"=>"O","P"=>"P","Q"=>"�","R"=>"�","S"=>"�",
        "T"=>"�","U"=>"�","V"=>"�","W"=>"�","X"=>"��",
        "Y"=>"�","Z"=>"�",
		"SH"=>"�","�H"=>"�","��"=>"�","TH"=>"�",
		"a"=>"�","b"=>"�","c"=>"�","d"=>"�",
        "e"=>"�","f"=>"�","g"=>"�","h"=>"�","i"=>"�",
        "j"=>"�","k"=>"�","l"=>"�","m"=>"�","n"=>"�",
        "o"=>"�","p"=>"�","q"=>"�","r"=>"�","s"=>"�",
        "t"=>"�","u"=>"�","v"=>"�","w"=>"�","x"=>"��",
        "y"=>"�","z"=>"�",
		"�"=>"B","�"=>"V","�"=>"G",
        "�"=>"D","�"=>"E","�"=>"J","�"=>"Z","�"=>"I",
        "�"=>"Y","�"=>"K","�"=>"L","�"=>"M","�"=>"N",
        "�"=>"O","�"=>"P","�"=>"R","�"=>"S","�"=>"T",
        "�"=>"U","�"=>"F","�"=>"H","�"=>"TS","�"=>"CH",
        "�"=>"SH","�"=>"SCH","�"=>"","�"=>"YI","�"=>"",
        "�"=>"E","�"=>"YU","�"=>"YA","�"=>"a","�"=>"b",
        "�"=>"v","�"=>"g","�"=>"d","�"=>"e","�"=>"j",
        "�"=>"z","�"=>"i","�"=>"y","�"=>"k","�"=>"l",
        "�"=>"m","�"=>"n","�"=>"o","�"=>"p","�"=>"r",
        "�"=>"s","�"=>"t","�"=>"u","�"=>"f","�"=>"h",
        "�"=>"ts","�"=>"ch","�"=>"sh","�"=>"sch","�"=>"y",
        "�"=>"y","�"=>"","�"=>"e","�"=>"yu","�"=>"ya", " " => " "
	];
	return $alphabet;
}

function encryption($string){
	$alphabet=encryption_key();
	$crypted_string=strtr($string, $alphabet);
	return $crypted_string;
}
$crypted_string=encryption($string);
print_r ($crypted_string);

/*function decryption ($string){
	$alphabet=encryption_key();
	$crypted_string=strtr($string, $alphabet);
	return $crypted_string;
}
$uncrypted_string=decryption($crypted_string);
print_r ($uncrypted_string);*/
