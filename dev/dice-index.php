<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>        
        <form action="dice.php" method="post">
            Roll:<input type="submit" name="roll"
                        value="roll"/>            
        </form>   
        <?php
        echo $_GET["roll"];
        ?>     
    </body>
</html>

<?php
      /*
        if(isset($_POST['button1'])) {
            echo "This is Button1 that is selected";
        }
        if(isset($_POST['button2'])) {
            echo "This is Button2 that is selected";
        }
    ?>
      
    <form method="post">
        <input type="submit" name="button1"
                value="Button1"/>
                */