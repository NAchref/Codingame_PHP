<?php   

function computeClosestToZero(array $ts) {
  if (empty($ts)){
   return 0;
  }
  $temp=null;
  //Trie un tableau en ordre décroissant
  rsort($ts);
 foreach($ts as $key){
    if( $temp>abs($key)||is_null($temp) )
    {
      $temp!==$key ? $temp=$key :'';
    }
    
  }
  return $temp;

}
