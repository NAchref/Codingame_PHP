<?php

$tab= array(7,3,6,3,4,6,9);
filterDuplicates($tab);

function filterDuplicates(array $data)
{
  filter= [];
  $i= 0;
  foreach($data as $value)
  {
    $add = TRUE;
    foreach($filter as $valeur)
    {
      if ($value == $valeur)
      {
        $add = FALSE;
      }       
    }
    if($add)
    {
      filter[$i]= $value;
      i++;
    }
  }
  return $filter;
}

?>
