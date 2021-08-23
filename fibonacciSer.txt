<?php 
// $num is the number of iterations needed to break the loop.
function mySequence($num, $first = 0, $second = 1)
{
    $result = [$first, $second];
    for($x=2 ; $x<$num ; $x++)
    {
        $result[] = $result[$x-1]+$result[$x-2];
    }
    
    return $result;
}
echo "<pre>";
print_r(mySequence(15));
