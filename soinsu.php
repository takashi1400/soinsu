#!/usr/bin/php
<?PHP
//enivironmental valuable----
 $DEBUG	= TRUE;
 $in	= 2050;    //number to calculate

//function-------------------

function arr_calc( $in ){
 $a = 2;
 $arr = array();

 //calc
 while( $a < ($in / 2) ){
  if( $in % $a == 0 ){
   $in /= $a;
   array_push( $arr , $a );
  }else{
   ++$a;
  }
 }
 //最後に余りを加える
 array_push( $arr , $in );
 return $arr;
}

//
function sumRow( $in ){
 $len = 4;
 $arr = array( $len );
 for( $i = 0 ; $i < $len; ++$i ){
  $arr[ $i ] = $in % 10;
  $in = $in / 10;
 }
 for( $i = $state = 0; $i < count($arr); ++$i ){
  $state += $arr[ $i ] ;
 }
 return $state; 
}

//pre process------------------------
if( $argv[ 1 ] ){
 //4桁以上だったら以上終了
 if( $argv[ 1 ] > 9999 ){
  exit( 1 );	
 }
 $in = $argv[ 1 ];
}else{
 echo "sample number	".$in.PHP_EOL;
}

//calc main----------
$arr = arr_calc( $in );
$rsum = sumRow( $in );

if( $DEBUG ){
 //viewing result state
 if( 0 < count($arr) ){
  $state .= $arr[ 0 ];
  for( $i = 1; $i < count($arr); ++$i ){
   $state .= " × ".$arr[ $i ];
  }
 }
}
//-----------------------------
//素数の×の数
$batsu = count($arr) - 1;

//end of calculation ------
?>
<?PHP if( $DEBUG ){ echo $state; } ?> 
batsu	:<?PHP echo $batsu ?> 
sum	:<?PHP echo $rsum ?>
