<?php

$file = './input.txt';

$content = file_get_contents($file);
$lines = explode ("\n", $content);

$n=0;

    foreach ($lines as $line)
    {
        $temp = $line;
        $dados[$n] = $temp;
        if (isset($dados2))
        {
            $dados2 = $dados2 . "," . $temp;
        } else {
            $dados2 = $temp;
        }
        
        $n = $n + 1;
    }
    
    preg_match_all('!\d+!', $dados2, $matches);
    $p = 0;

$p = 0;
    for ($i = 0; $i <= ($n-1)*4; $i+=4)
    {
        if (isset($matches[0][$i]) === true)
        {
            $j = 0;
            $temp = $matches[0][$i];
            $temp2 = $matches[0][$i+1];
            $temp3 = $matches[0][$i+2];
            $temp4 = $matches[0][$i+3];

            if ($temp <= $temp3)
            {
                if ($temp2 >= $temp4)
                {    
                    $p++;
                }
            }

            if ($temp >= $temp3)
            {
                if ($temp2 <= $temp4)
                {    
                    $p++;
                }
            }

            if ($temp == $temp3)
            {
                if ($temp2 == $temp4)
                {    
                    $p = $p - 1;
                }
            }

        }
    }

    echo $p;

?>