<?php
if (isset($_POST['hypothenus']))
{
    $n = $_POST['hypothenus'];
    $n = intval($n,$base = 10);
}

function triplet(int $n)
{

    if (isset($_POST['hypothenus']))
    {
        $n = $_POST['hypothenus'];
        $hypothenus = intval($n,$base = 10);


        for ($c=1; $c <= $hypothenus; $c++)
        {
            $valeurDepart = $hypothenus - 1;

            for ($a=1; $a < $valeurDepart; $a++)
            {

                for ($b=$valeurDepart; $b > 0; $b--)
                {

                    if (($a**2 + $b**2) == $c**2)
                    {
                        echo $triplet = $a.' '.$b.' '.$c.'<br>';

                    }

                }
            }
        }
    }
    return $triplet;
}

echo 'L\'ensemble des triplets pour un hypothénus valant moins de '.$n.' sont: '.'<br>';
triplet($n);
