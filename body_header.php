<?php
$menu = [
    "home" => [
        'path' => 'index.php',
        'name' => 'domov',
    ],
    'portfolio' => [
        'path' => 'portfolio.php',
        'name' => 'Portfolio',

    ],
    'faq' => [
        'path' => 'qna.php',
        'name'=> 'QaA',
    ],
    'contact'=>[
        'path'=> 'kontakt.php',
        'name' => 'Kontakt'
    ],
];


?>
<header class="container main-header">
    <div class="logo-holder">
        <a href="<?php echo $menu['home']['path']; ?>"><img src="img/logo.png" height="40 "></a>
    </div>
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu container">
            <?php
            foreach ($menu as $key => $menuItem){
                echo '<li><a href="'.$menuItem['path'].'">'.$menuItem['name'].'</a><li>';
            }
            ?>
            <li><a href="index.php">Domov</a></li>
            <li><a href="portfolio.php">Portfólio</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>
