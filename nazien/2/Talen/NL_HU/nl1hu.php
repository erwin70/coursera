<?php
$Taal1 = "Hongaars leren";
$Taal2 = "Hollandul tanulni";
$Titel = $Taal1."/".$Taal2;
$Vlag1 = "Nederlandse vlag";
$Vlag2 = "Hongaarse vlag";
$Land1Letters = "NL";
$Land2Letters = "HU";
$Land3Letters = "NL-HU";
$Onderwerp1Taal1 = "Les ";
$Onderwerp1Taal2 = "Lecke ";
$Onderwerp2Taal1 = "Cijfers";
$Onderwerp2Taal2 = "Számok";
$Onderwerp3Taal1 = "Van 1 tot 10";
$Onderwerp3Taal2 = "1-től 10-ig";
$Les = "1";
$VertalingTaal1 = "Klik op de juiste vertaling voor";
$VertalingTaal2 = "Kattintson a megfelelő fordításra";

include'HU.inc.php';
include'NL.inc.php';

$VertalingNu = $NL0;
$VertalingSound = "nul0";
$VolgendePagina = "nl2hu1";

$Var1 = $HU0;
$Var2 = $HU1;
$Var3 = $HU2;
$Var4 = $HU3;
$Var5 = $HU4;
$Var6 = $HU5;
$Var7 = $HU6;
$Var8 = $HU7;
$Var9 = $HU8;
$Var10 = $HU9;

$VarA1 = $NL0;
$VarA2 = $NL1;
$VarA3 = $NL2;
$VarA4 = $NL3;
$VarA5 = $NL4;
$VarA6 = $NL5;
$VarA7 = $NL6;
$VarA8 = $NL7;
$VarA9 = $NL8;
$VarA10 = $NL9;

$Kleur1 = "red";
$Kleur2 = "gold";
$Kleur3 = "skyblue";
$Kleur4 = "light-green";

$MapGeluid = "geluid/";
$MapVlag = "vlag/";
$MapAfbeelding = "afbeelding/";

?>

<!DOCTYPE html>


<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $Titel; ?></title>
     
      
    </head>
    <body>
        
        <center>
            <TABLE BORDER="0">
                <TR>
                    <TD><IMG SRC="<?php echo $MapVlag; ?><?php echo $Land1Letters; ?>.png"  WIDTH="100" HEIGHT="60" ALT="<?php echo $Vlag1; ?>"></IMG></TD>
                    <TD><h1><?php echo $Taal1; ?>/</h1></TD>
                    <TD><h1><font color="<?php echo $Kleur1; ?>"><?php echo $Taal2; ?></font></h1></TD>
                    <TD><IMG SRC="<?php echo $MapVlag; ?><?php echo $Land2Letters; ?>.png"  WIDTH="100" HEIGHT="60" ALT="<?php echo $Vlag2; ?>"></IMG></TD>
                </TR>
            </TABLE>
            <h3><?php echo $Onderwerp1Taal1; ?><?php echo $Les; ?>/<font color="<?php echo $Kleur1; ?>"><?php echo $Onderwerp1Taal2; ?><?php echo $Les; ?></font></h3>
            <h2><?php echo $Onderwerp2Taal1; ?>/<font color="<?php echo $Kleur1; ?>"><?php echo $Onderwerp2Taal2; ?></font></h2>
            <h3><?php echo $Onderwerp3Taal1; ?>/<font color="<?php echo $Kleur1; ?>"><?php echo $Onderwerp3Taal2; ?></font></h3>
            <br><br>
        </center>
            <br>
    
        
        <center>                
            <TABLE BORDER="0">
                <TR>
                    <TD style="background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $VarA1; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA1."0"; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style="background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $Var1; ?></center></b></FONT></TD>
                    <!--
                    <td ROWSPAN="10"><video width="600" height="500" controls><source src="video/NL/dagen.mp4" type="video/mp4">Installeer een nieuwere versie van je browser als je deze video wilt bekijken.</video></td>
                    -->
                </TR>
                <TR>
                   <TD style="background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $VarA2; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA2; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style="background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $Var2; ?></center></b></FONT></TD>
                </TR>
                <TR>
                   <TD style=" background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $VarA3; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA3; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style=" background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $Var3; ?></center></b></FONT></TD>

                </TR>
                <TR>
                    <TD style=" background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $VarA4; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA4; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style=" background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $Var4; ?></center></b></FONT></TD>
                </TR>
                <TR>
                   <TD style=" background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $VarA5; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA5; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style=" background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $Var5; ?></center></b></FONT></TD>
                    
                </TR>
                <TR>
                    <TD style=" background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $VarA6; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA6; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style=" background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $Var6; ?></center></b></FONT></TD>
                </TR>
                <TR>
                    <TD style=" background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $VarA7; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA7; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style=" background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $Var7; ?></center></b></FONT></TD>
                </TR>
                <TR>
                   <TD style=" background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $VarA8; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA8; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style=" background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $Var8; ?></center></b></FONT></TD>
                    
                </TR>
                <TR>
                   <TD style=" background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $VarA9; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA9; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style=" background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $Var9; ?></center></b></FONT></TD>
                </TR>
                <TR>
                    <TD style=" background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $VarA10; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA10; ?>.mp3">Your browser does not support the audio element.</audio></TD>
                    <TD style=" background-color:<?php echo $Kleur3; ?>;"><FONT size="6"><b><center><?php echo $Var10; ?></center></b></FONT></TD>
                </TR>
            </TABLE>
        </center>       
    </body>
</html>