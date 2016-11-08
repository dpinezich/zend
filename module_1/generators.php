<?php
function myfun($num1, $num2, $ctr = 1)
{
    for ($i = $num1; $i <= $num2; $i += $ctr)
    {
        yield $i;
    }
}
echo 'Odd numbers: ';
foreach (myfun(1, 7, 2) as $num)
{
    echo "$num ";
}



?>