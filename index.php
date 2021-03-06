<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css?v=2.6" rel="stylesheet">    
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id='lineback'>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Plants Shop</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
    </div>
</header>

<div id="content">
    <?php
       $goods = [
        [
            'id' => 1,
            'name' => 'Эхиверия',
            'desc' => 'Растений – суккулентов достаточно много, но большинство знакомы лишь с некоторыми из них, такими как кактусы, калонхоэ, гастерии, нолина, хавортин, алоэ, «денежное дерево» и др. Мало кто знает, но в каждом роде растений можно отметить наличие суккулентов. Это трудно заметить, пока суккулентные свойства не начинают проявляться достаточно явно. Эхеверия Лау является одним из самых красивых и удивительных суккулентов. Ее также называют «эчеверия Лау», ошибки не будет. Названа она в честь Альфреда Лау, первооткрывателя этого замечательного растения.',
            'img' => '/images/goods/ehiveria.jpg',
            'price' => '20 $'
        ],[
            'id' => 2,
            'name' => 'Пахифитум',
            'desc' => 'Род растений пахифитум (Pachyphytum) относится к семейству толстянковые (Crassulaceae). В нем насчитывается примерно 10 видов суккулентных растений, которые являются эндемика различных областей Мексики. Общей чертой таких растений являются сочные, довольно толстые листочки, которые величиной и формой бывают схожи со сплющенной виноградиной вытянутой формы, окрашенной в светлый зеленовато-сизый оттенок и имеющей на поверхности беловатый восковой налет. Благодаря своей листве этот род и был назван пахифитум, что в переводе с греческого значит ― «толстолистный».',
            'img' => '/images/goods/pahifitum.jpg',
            'price' => '12 $'
        ],[
            'id' => 3,
            'name' => 'Седум',
            'desc' => 'Суккулентное растение седум (Sedum) является представителем семейства Толстянковые. Данный род объединяет около 600 видов, представленных низкими полукустарниками, суккулентами, а также травянистыми растениями, которые могут быть многолетниками, одно- и двулетниками. В природных условиях такое растение можно повстречать в северном полушарии, а точнее, в умеренных поясах Европы, Азии и Северной Америки. Название рода было образовано от слова «сидеть», это потому что основная особенность такого растения заключается в том, что оно может расти почти на всех каменистых поверхностях. Для выращивания в домашних условиях чаще всего выбирают те виды седума, которые представлены суккулентами, в связи с этим такие цветы требуют особого ухода: поливать их нужно умеренно, изредка подкармливать специальными удобрениями, а также обеспечить достаточное количество солнечного света и тепла. Чтобы кустик, выращиваемый в домашних условиях, зацвел, от цветовода потребуется немало усилий: в зимнее время он должен находиться в достаточно холодном месте, при этом летом ему надо обеспечить высокую температуру воздуха. Большинство видов седума при желании можно растить в качестве ампельных растений. Дело в том, что в природных условиях они чаще всего растут на отвесных скалах, а также камнях, свешиваясь с них.',
            'img' => '/images/goods/sedum.jpg',
            'price' => '14 $'
        ]
       ];
       
       $page = $_GET['page'];

       if (!isset($page)){

            require('templates/main.php');

       } elseif ($page == 'shop') {
            require("templates/shop.php");
       } elseif ($page == 'product') {
            $id = $_GET['id'];
            $good = [];
            foreach ($goods as $product) {
                if ($product['id'] == $id){
                    $good = $product;
                    break;
                }
            }
            require ("templates/openedProduct.php");

       }
       

    ?>


</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                ivan.chaydonov@mail.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                +7 983 275 4850
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                РХ, г. Абакан, ул. Ломоносова - 8
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Chaydonov Ivan</div>
    </div>
</footer>
<script src="scripts/jquery.js"></script>
<script src="scripts/site.js"></script>
</body>
</html>
