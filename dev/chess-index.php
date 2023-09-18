<!DOCTYPE html>
<html>
    <head>
        <title>Chess</title>
        <style>
            body{   background-color: #f2f2f2;}
            table{  border-collapse: collapse; margin: 50px auto; border:2px solid #555;
                    box-shadow: 0 0 10px rgba(0,0,0,0.2);}
            td{     width: 50px; height: 50px; text-align: center; font-size: 24px; }
            .white{ background-color: #f2f2f2;}
            .black{ background-color: #555;}
        </style>
        <meta charset="UTF-8">
    </head>
    <body>        
        <table>
            <?php                
            require ("chess.php");             
            ?>
        </table>
    </body>
</html>
