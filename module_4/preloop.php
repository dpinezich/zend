<?php
for($i=0;$i<5;$i++)
{
    if(++$i >=1)
    {
        while($i<3)
        {
            echo $i;
            $i++;
        }
    }
    else
    {
        for(;$i<4;$i++)
        {
            echo $i;
        }
    }
}
?>