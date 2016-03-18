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
                
function dfs( $graph , $startNode = 3 )
{
  global $visited;
  $visited[] = $startNode;  

  foreach($graph[$startNode] as $index => $vertex)
  {

    if( !in_array( $vertex , $visited ) ){
      echo "<td>$vertex</td>";
      dfs( $graph , $vertex );
    }
  }
}
?>
<html>
<head>
</head>
<body>
<table>
<tr>
<?php dfs($graph);?>
    </tr>
    </table>

</body>
</html>

