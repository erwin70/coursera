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
$Onderwerp2Taal1 = "Dagen";
$Onderwerp2Taal2 = "Napjai";
$Onderwerp3Taal1 = " ";
$Onderwerp3Taal2 = " ";

$Les = "6";

$VertalingTaal1 = "Klik op de juiste vertaling voor";
$VertalingTaal2 = "Kattintson a megfelelő fordításra";

include'HU.inc.php';
include'NL.inc.php';

$VertalingNu = $NL0;
$VertalingSound = "nul0";
$VolgendePagina = "nl2hu1";

$Var1 = $HU50;
$Var2 = $HU51;
$Var3 = $HU52;
$Var4 = $HU53;
$Var5 = $HU54;
$Var6 = $HU55;
$Var7 = $HU56;
$Var8 = $HU57;
$Var9 = $HU58;
$Var10 = $HU59;

$VarA1 = $NL50;
$VarA2 = $NL51;
$VarA3 = $NL52;
$VarA4 = $NL53;
$VarA5 = $NL54;
$VarA6 = $NL55;
$VarA7 = $NL56;
$VarA8 = $NL57;
$VarA9 = $NL58;
$VarA10 = $NL59;

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
            <br><br>
        </center>
            <br>
    
        
        <center>                
            <TABLE BORDER="0">
                <TR>
                    <TD style="background-color:<?php echo $Kleur2; ?>;"><FONT size="6"><b><center><?php echo $VarA1; ?></center></b></FONT></TD>
                    <TD><audio controls>  <source src="<?php echo $MapGeluid; ?><?php echo $Land3Letters; ?>/<?php echo $Les; ?>/<?php echo $VarA1; ?>.mp3">Your browser does not support the audio element.</audio></TD>
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