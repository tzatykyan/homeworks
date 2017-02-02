<?php

function counter(){
	$arguments=func_num_args();
	echo $arguments;
}

counter(1,2,3,4,5);