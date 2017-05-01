<?php

$array1 = array ( 'test', 'test2' );

function AddTo( $key, $val, &$array = null)
{
    if ( $array == null )
    {
      $array =& $_POST;
    }

    $array[ $key ] = $val ;
}

AddTo( "indirect test", "test", $array1 );
AddTo( "indirect POST test", "test" );

//echo "Array 1 " ;
print "<pre>";
print_r ( $array1);
print "</pre>";

echo "<hr>";

echo "_POST ";
print_r( $_POST );

?>