<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="menuStyle.css">
</head>
<body>
    <nav>
        <ul class="navbar">
            <h4>Menu</h4>
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
            ?>
        </ul>
    </nav>
</body>
</html>


