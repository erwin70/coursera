<?php
$host = "rdbms.strato.de";
$username = "dbu1246230";
$password = "Rita@Hotel1970";
$dbname = "dbs12651304";

$conn = mysqli_connect( hostname: $host,
                        username: $username,
                        password: $password,
                        database: $dbname);

if (mysqli_connect_errno()) {
    die("connectie fout: ".mysqli_connect_error());
}


function login (){
        if (isset($_SESSION['login'])){
            echo 'Welkom';
        }else{
                if(isset($_POST['submit'])){
                    $db_login = mysql_query("SELECT * FROM 'login' WHERE'loginGW' = '$_POST['userName']' AND 'loginPass' = '$_POST['$'userPass']'");
                    if (mysql_num_rows($db_login) ==1){
                        echo 'Welkom';
                    }else{
                        echo 'Uw gegevens komen niet overeen';

                    }
                }
                echo '  <form method="post" action="#">

                        <table width="100%" border="0" cellspacing="5" cellpadding="0">
                        <tr><td width="100">Gebruikersnaam:</td><td><input type="text" name="userName" value="" size="15" /></td></tr>
                        <tr><td>Wachtwoord:</td><td><input type="password" name="userPass" value="" size="15" /></td></tr>
                        <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Login" /></td></tr>
                        </table></form>';
        }
}




function groet(){
    $tijd = date('G');

    if      ($tijd <= 6)                {$groet = 'Goedenacht';}
    elseif  ($tijd > 6 && $tijd <= 12)  {$groet = 'Goedemorgen';}
    elseif  ($tijd > 12 && $tijd <= 18) {$groet = 'Goedemiddag';}
    elseif  ($tijd > 18 && $tijd <= 23) {$groet = 'Goedeavond';}
    else                                {$groet = 'Welkom';}

echo $groet;
}

function page (){
    echo 'Welkom op deze website';
}

function contact (){
    echo '  <center>
            <h1>Vraag stellen</h1>
            <p>Heb je een vraag, vaag het:</p> ';

            if (isset($_POST['submit'])){
                if (isset($_POST['jeBevesteging'])){

                    $headers = 'From: Website <info@erwinelderschans.nl>'."\n";
                    $headers = 'Reply-To: '.$_POST['jeNaam'].' <'.$_POST['jeEmail'].'>'."\n";
                    $headers = 'X-Mailer: PHP/' .phpversion();
                    $headers .= 'Return-Path: Mail-Error <info@erwinelderschans.nl>'."\n";
                    $headers. 'MIME-Version: 1.0'."\n";
                    $headers .= 'Content-Transfer-Encoding: 8bit'."\n";
                    $headers .= 'Bcc: '.$_POST['jeEmail']."\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\n";

                    if (mail(
                            'ERwin Leemans <info@erwinelderschans.nl>',
                            'Vraag aan, '.$_POST['jeNaam'],
                            $_POST['jeVraagn'],
                            $headers)

                    ){
                            echo ' De mail is verzonden';
                    }

                }

            }

                   echo '   <form action="#" method="POST">
                            <table border="1">
                            <tr>
                                <td><strong>Name: </strong></td>        <td><input name="yourName" type="text" /></td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>        <td><input name="jeMail" type="text" /></td>
                            </tr>
                            <tr>
                                <td><strong>I a: </strong></td>         <td>Man <input name="yourGender" type="radio" value="m" /> Woman <input name="yourGender" type="radio" value="v" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Your question:</strong><br /><textarea name="yourQuestion"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="jeBevesteging" type="checkbox" /> <strong>Yes, I want this question</strong></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input name="submit" type="submit" value="Verzenden"></td>
                            </tr>
                        </table>
                    </form>
            </center> ';
}
            ?>
