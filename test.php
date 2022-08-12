<!DOCTYPE html>
<html lang="ru">
    <?php
        $link = '
            <link rel="stylesheet" href="css/swiper-bundle/swiper-bundle.min.css" />
            <link rel="stylesheet" href="css/swiper.css">
            <link rel="stylesheet" href="css/main.css">
        ';
        $script = '
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        ';
        include('blocks/head.php');
    ?>
<body>
    <?php
    include('blocks/header.php');

    function create_url_img($url_img)
    {
        return "https://" . $_SERVER['HTTP_HOST'] . "/img/$url_img";
    }

    ?>
    <?php
    include('blocks/footer.php');
    ?>
    <?php
    include('blocks/popups.php');
    ?>
    <script src="libs/swiper-bundle/swiper-bundle.min.js"></script>
    <script src="libs/jquery.validate/jquery.validate.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/usset-swiper.js"></script>
    <script src="js/calculation.js"></script>
    <script></script>
</body>
</html>