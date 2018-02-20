<?php

function integerFactors($aIntegers)
{
    $aNewArray= array();
    foreach ($aIntegers as $integer)
    {
        $aAux=array();
        for($i=1;$i<=$integer;$i++)
        {
            if($integer%$i==0)
            {
                $aAux[] =$i;
            }
        }
        $aNewArray[$integer]=$aAux;
    }
    return $aNewArray;
}
$array=array(12,15);
var_dump(integerFactors($array));
?>