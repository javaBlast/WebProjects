<?php
$graph = array( '1' => array(2,4),
		'2' => array(1,3,5),
		'3' => array(2,6),
		'4' => array(1,5,7),
		'5' => array(2,4,6,8),
		'6' => array(3,5,9),
		'7' => array(4,8),
		'8' => array(5,7,9),
		'9' => array(6,8));
  $startNode = 3;              
$temp[] = $startNode;
function dfs( $graph , $startNode, $temp){
  global $visited;
  $visited[] = $startNode;  
  global  $temp;
  //$temp[] = $visited;
  foreach($graph[$startNode] as $index => $vertex)
  {
    if( !in_array( $vertex , $visited ) ){
      $temp[] = $vertex;

      dfs( $graph , $vertex,$temp );
    }
  }
}

dfs($graph, $startNode, $temp);
$word = " catdogbmw";
// foreach ($temp as $key => $value) {
//   echo '<li id="'.$key.'" class="ui-state-default ">'.$word[$value].'</li>';
//   //echo "$value $key <br>";
// }

for ($i=0; $i < 9; $i++) { 
  echo '<li id="'.$i.'" class="ui-state-default ">'.$word[$temp[$i]].'</li>';
}
// print_r($temp);

?>
