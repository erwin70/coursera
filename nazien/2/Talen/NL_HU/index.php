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
$Onderwerp3Taal1 = "Van 10 tot 19";
$Onderwerp3Taal2 = "10-től 19-ig";

$Les = "2";

$VertalingTaal1 = "Klik op de juiste vertaling voor";
$VertalingTaal2 = "Kattintson a megfelelő fordításra";

include'HU.inc.php';
include'NL.inc.php';

$VertalingNu = $NL0;
$VertalingSound = "nul0";
$VolgendePagina = "nl2hu1";

$Var1 = $HU10;
$Var2 = $HU11;
$Var3 = $HU12;
$Var4 = $HU13;
$Var5 = $HU14;
$Var6 = $HU15;
$Var7 = $HU16;
$Var8 = $HU17;
$Var9 = $HU18;
$Var10 = $HU19;

$VarA1 = $NL10;
$VarA2 = $NL11;
$VarA3 = $NL12;
$VarA4 = $NL13;
$VarA5 = $NL14;
$VarA6 = $NL15;
$VarA7 = $NL16;
$VarA8 = $NL17;
$VarA9 = $NL18;
$VarA10 = $NL19;

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
            <h3></h3>
            <h1><u><b>Index</b></u></h1>
            <h3></h3>
            <br><br>
        </center>
            <br>
    
        
        <center>                
            <TABLE BORDER="0">
                <TR>
                    <TD><a href="nl1hu.php"><FONT size="6"><b><center>Les 1/<font color="<?php echo $Kleur1; ?>">Lecke 1</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Cijfers/<font color="<?php echo $Kleur1; ?>">Számok</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center>Van 1 tot 9/<font color="<?php echo $Kleur1; ?>">1-től 9-ig</font></center></b></FONT></TD>
                   
                </TR>
                <TR>
                    <TD><a href="nl2hu.php"><FONT size="6"><b><center>Les 2/<font color="<?php echo $Kleur1; ?>">Lecke 2</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Cijfers/<font color="<?php echo $Kleur1; ?>">Számok</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center>Van 10 tot 19/<font color="<?php echo $Kleur1; ?>">10-től 19-ig</font></center></b></FONT></TD>
                   
                </TR>
                <TR>
                    <TD><a href="nl3hu.php"><FONT size="6"><b><center>Les 3/<font color="<?php echo $Kleur1; ?>">Lecke 3</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Cijfers/<font color="<?php echo $Kleur1; ?>">Számok</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center>tientallen/<font color="<?php echo $Kleur1; ?>">tízesek</font></center></b></FONT></TD>
                   
                <TR>
                    <TD><a href="nl4hu.php"><FONT size="6"><b><center>Les 4/<font color="<?php echo $Kleur1; ?>">Lecke 4</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Cijfers/<font color="<?php echo $Kleur1; ?>">Számok</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center>Gemengd/<font color="<?php echo $Kleur1; ?>">Vegyes</font></center></b></FONT></TD>
                   
                </TR>
                <TR>
                    <TD><a href="nl5hu.php"><FONT size="6"><b><center>Les 5/<font color="<?php echo $Kleur1; ?>">Lecke 5</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Cijfers/<font color="<?php echo $Kleur1; ?>">Számok</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center>Rangtelwoord/<font color="<?php echo $Kleur1; ?>">Sorszáma</font></center></b></FONT></TD>
                   
                </TR>
                <TR>
                    <TD><a href="nl6hu.php"><FONT size="6"><b><center>Les 6/<font color="<?php echo $Kleur1; ?>">Lecke 6</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Dagen/<font color="<?php echo $Kleur1; ?>">Napjai</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center><font color="<?php echo $Kleur1; ?>"></font></center></b></FONT></TD>
                   
                </TR>
                <TR>
                    <TD><a href="nl7hu.php"><FONT size="6"><b><center>Les 7/<font color="<?php echo $Kleur1; ?>">Lecke 7</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Cijfers/<font color="<?php echo $Kleur1; ?>">Számok</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center>Van 1 tot 9/<font color="<?php echo $Kleur1; ?>">1-től 9-ig</font></center></b></FONT></TD>
                   
                </TR>
                <TR>
                    <TD><a href="nl8hu.php"><FONT size="6"><b><center>Les 8/<font color="<?php echo $Kleur1; ?>">Lecke 8</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Cijfers/<font color="<?php echo $Kleur1; ?>">Számok</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center>Van 1 tot 9/<font color="<?php echo $Kleur1; ?>">1-től 9-ig</font></center></b></FONT></TD>
                   
                </TR>
                <TR>
                    <TD><a href="nl9hu.php"><FONT size="6"><b><center>Les 9/<font color="<?php echo $Kleur1; ?>">Lecke 9</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Cijfers/<font color="<?php echo $Kleur1; ?>">Számok</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center>Van 1 tot 9/<font color="<?php echo $Kleur1; ?>">1-től 9-ig</font></center></b></FONT></TD>
                   
                </TR>
                <TR>
                    <TD><a href="nl10hu.php"><FONT size="6"><b><center>Les 10/<font color="<?php echo $Kleur1; ?>">Lecke 10</font></center></b></FONT></a></TD>
                    <TD><FONT size="6"><b><center>Cijfers/<font color="<?php echo $Kleur1; ?>">Számok</font></center></b></FONT></TD>
                    <TD><FONT size="6"><b><center>Van 1 tot 9/<font color="<?php echo $Kleur1; ?>">1-től 9-ig</font></center></b></FONT></TD>
                   
                </TR>
            </TABLE>
        </center>       
    </body>
</html>