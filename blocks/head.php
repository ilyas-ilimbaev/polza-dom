<head>
    <?php $main_base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS, CHARSET, BASE_HOST);
    $user = new User($main_base); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Строительство домов под ключ от строительной компании Польза-Дом</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <?=$link?>
    <?=$script?>
    <script>
        function ajaxPost(url, parameters, callback) {
            // parameters = encodeURIComponent(parameters)
            if (parameters === false || parameters === null || parameters === undefined) {
                parameters = "";
            }
            var request = new XMLHttpRequest();
            request.open('POST', url, true);
            request.addEventListener('readystatechange', function() {
                if ((request.readyState == 4) && (request.status == 200)) {
                    callback(request.responseText)
                } else {
                    if (request.readyState == 0) {
                        // Request not initialized
                        console.log('Request not initialized')
                    }
                    if (request.status == 403) {
                        // Forbidden
                        console.log('Forbidden')
                    }
                    if (request.status == 404) {
                        // Not Found
                        console.log('Not Found')
                    }
                }
            });
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
            request.send(parameters);
        }
    </script>
</head>