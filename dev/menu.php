<?php 
$menuItems = [
    [
        'menuText' => 'Home',
        'link' => '/home'
    ],
    [
        'menuText' => 'Products',
        'link' => '/products'
    ],
];
/*
-------MED FOREACH---------
 <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <nav>
        <ul class="navbar">
            <?php
            $menuItems = [
                [
                    'menuText' => 'Home',
                    'link' => '/home'
                ],
                [
                    'menuText' => 'Products',
                    'link' => '/products'
                ],
            ];

            foreach ($menuItems as $item) {
                echo '<li><a href="' . $item['link'] . '">' . $item['menuText'] . '</a></li>';
            }
            
        </ul>
    </nav>
</body>
</html>


---------------------------------------------------------------------------------------------------------------
---------UTAN FOREACH-----------
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="menuStyle.css" />
        <meta charset="UTF-8">
        <title>Menu</title>
    </head>
    <body>
        <nav>
            <h4 style="text-decoration: underline;">Menu:</h4>
            <?php require __DIR__.'/menu.php'; ?>
            <a href="<?=$menuItems[0]['link']; ?>"><?=$menuItems[0]['menuText']; ?></a>
            <a href="<?=$menuItems[1]['link']; ?>"><?=$menuItems[1]['menuText']; ?></a>
        </nav>
    </body>
</html>

*/
?>