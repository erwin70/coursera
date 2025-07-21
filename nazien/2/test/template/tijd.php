<?php
 setlocale(LC_ALL, 'nl_NL', 'nld_nld');
 $datum = date('G');
 echo strftime('%A %e %B %Y', $datum );
 echo '.  '; $tijd = date('G');
 $minuten = date ('i');
 $volledig = date ('r');
 if ($tijd <= 6){ $groet = 'Goedenacht';
 }elseif ($tijd > 6 && $tijd <= 12){ $groet = 'Goedemorgen';
 }elseif ($tijd > 12 && $tijd <= 18){ $groet = 'Goedemiddag';
 }elseif ($tijd > 18 && $tijd <= 23){ $groet = 'Goedeavond';
 }else{ $groet = 'Welkom';
 }
 echo $groet;
 echo "  het is nu  ";
 echo $tijd; echo '  uur  ';
 echo $minuten;
 echo "  minuten.  ";
 echo $groet;
 echo "  het is nu  ";
 echo $volledig; 
 ?>