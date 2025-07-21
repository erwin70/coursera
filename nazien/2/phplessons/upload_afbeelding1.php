

<form form action="" method="post" enctype="multipart/form-data">
<p>Afbeeldingen uploaden, max 321024kb (321mb) per afbeelding:</p>
<input type="hidden" name="MAX_FILE_SIZE" value="1024000">
<input type="file" name="afbeelding1"><br>
<input type="file" name="afbeelding2"><br>
<input type="file" name="afbeelding3"><br>
<input type="file" name="afbeelding4"><br>
<input type="file" name="afbeelding5"><br>
<input type="file" name="afbeelding6"><br>
<input type="file" name="afbeelding7"><br>
<input type="file" name="afbeelding8"><br>
<input type="file" name="afbeelding9"><br>
<input type="file" name="afbeelding10"><br>
<br>
<input type="submit" value="Uploaden!">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    function randomgenerator($aantaltekens)
    {
        $kleineletters     = range('a','z');
        $groteletters     = range('A','Z');
        $cijfers        = range(0,9);
        
        $karakters     = array_merge($kleineletters, $groteletters, $cijfers);
        $aantal     = count($karakters)-1;
          $random     = null;
          
          for($i=0; $i < $aantaltekens; $i++) {
               $random .= $karakters[mt_rand(0, $aantal)];
          }
          return $random;
    }
    
    foreach($_FILES as $afbeelding)
    {
        $naam         = $afbeelding['name'];
        $type         = $afbeelding['type'];
        $temp         = $afbeelding['tmp_name'];
        $error        = $afbeelding['error'];
        $size        = $afbeelding['size'];
        
        switch($error)
        {
            case 0:
                if(is_uploaded_file($temp))
                {
                    if($type == 'image/jpeg' || $type == 'image/gif' || $type == 'image/png')
                    {
                        if($size >= 321024000)
                        {
                            echo '<p>Sorry, dit bestand is te groot om te worden geupload!</p>';
                        }else{
                            $random = randomgenerator(5);
                            $verplaats = move_uploaded_file($temp, 'afbeeldingen/'.$random.'-'.$naam);
                        
                            if($verplaats == 1)
                            {
                                echo '<p>Er is geen error opgetreden. Het bestand is met success geupload</p>';
                            }else{
                                echo '<p>Er ging iets mis met het uploaden van '.$naam.', neem contact op met de webmaster.</p>';
                            }
                        }
                    }else{
                        echo '<p>Sorry, dit bestandsformaat accepteer ik niet!</p>';
                    }                
                }else{
                    echo '<p>Sorry, dit accepteer ik niet!</p>';
                }
                break;
                
            case 1:
                echo '<p>Error: De grootte van het bestand is groter dan wat de server aankan!</p>';
                break;
            
            case 2:
                echo '<p>Error: De grootte van het bestand is groter dan 1024kb!</p>';
                break;
            
            case 3:
                echo '<p>Error: Het bestand is maar gedeeltelijk geupload!</p>';
                break;
            
            case 4:
                '<p>Error: Geen bestand geupload, we doen niks!</p>';
                break;
        }
    }
}
?>