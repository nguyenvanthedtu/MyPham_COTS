<?php
    function taoma($input,$cdmxn)
    {   
         $cd=mb_strlen($input);
         $randomstr="";
         for($i=0;$i<$cdmxn;$i++)
        { $randomkt=$input[mt_rand(0,$cd-1)];
          $randomstr .=$randomkt; 
        }
        return $randomstr;                                 
    }
    //Tao captcha
    $s='0123456789abcdefghyklmnopqrstuvwxyzABCDEFGHYKLMNOPQRSTUVWXYZ';          
    $captcha= taoma($s,4);   
    $_SESSION["captcha"]=$captcha;
?>