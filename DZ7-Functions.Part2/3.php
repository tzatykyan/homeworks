<?php
$string="Зашифрованная строка так глубока. Zhil da byl cherniy kot";

function encryption_key(){ //создаем ключ шифрования-дешифрования
	
	$alphabet=[
	"A"=>"A","B"=>"Б","C"=>"К","D"=>"Д",
        "E"=>"Е","F"=>"Ф","G"=>"Г","H"=>"Х","I"=>"Ай",
        "J"=>"Ж","K"=>"K","L"=>"Л","M"=>"M","N"=>"Н",
        "O"=>"O","P"=>"P","Q"=>"К","R"=>"Р","S"=>"С",
        "T"=>"Т","U"=>"А","V"=>"В","W"=>"В","X"=>"КС",
        "Y"=>"У","Z"=>"З",
		"SH"=>"Ш","СH"=>"Ч","ОО"=>"У","TH"=>"З",
		"a"=>"а","b"=>"б","c"=>"с","d"=>"д",
        "e"=>"е","f"=>"ф","g"=>"г","h"=>"х","i"=>"и",
        "j"=>"ж","k"=>"к","l"=>"л","m"=>"м","n"=>"н",
        "o"=>"о","p"=>"р","q"=>"к","r"=>"р","s"=>"с",
        "t"=>"т","u"=>"у","v"=>"в","w"=>"в","x"=>"кс",
        "y"=>"у","z"=>"з",
		"Б"=>"B","В"=>"V","Г"=>"G",
        "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
        "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
        "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
        "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
        "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
        "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"y","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya", " " => " "
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
