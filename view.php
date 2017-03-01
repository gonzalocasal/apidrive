<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Google Drive Api</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <div id="titulo">Google Drive Explorer</div>
    </header>
    <div  id="lista">
        <?php
        if (count($files->getItems()) == 0) {
             print "No existen archivos.\n";
        } else {
            foreach ($files->getItems() as $e) {
                $title = $e->getTitle();
                $url = $e->getwebContentLink();
                $mime = $e->getMimeType();
                $id = $e->getId();
                    
                echo "<br>";
                if ($mime == "application/vnd.google-apps.folder"){
                    print ('<a href ="explore.php?fid='.$id.'">'.$title.'</a>');
                }else{
                    print ("<a href =".$url.">".$title."</a>");
                }
                echo "<br>";
            }          
        }
        ?>
    </div>
    </body>
</html>
