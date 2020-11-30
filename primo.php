<?php
function primo(int $num){
	
	$contador=0;
	for($i=1; $i<=$num; $i++){
			
			if($num%$i==0){
				$contador++;
			}
		}
		if($contador==2){
			return true;
		}else{
			return false;
		}		
		

}
$num = 61;
if(primo($num)){
	echo "$num es primo";
}else{
	echo "$num no es primo";
}




?>