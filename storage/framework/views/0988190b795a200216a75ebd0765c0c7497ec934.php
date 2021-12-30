<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(mix('css/normalize.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(mix('css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(mix('css/bootstrap.min.css')); ?>" />

    <!-- Scripts -->
    <script defer src="<?php echo e(mix('js/all.min.js')); ?>"></script>
    <script defer src="<?php echo e(mix('js/brands.js')); ?>"></script>
    <script defer src="<?php echo e(mix('js/solid.js')); ?>"></script>
    <script defer src="<?php echo e(mix('js/fontawesome.js')); ?>"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="jumbotron mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <form action="">
                <input type="hidden" id="random_number">
                <button type="submit" name = "submit" class="btn btn-primary mb-4 generate" onclick="storeRandomNumber(event)">Сгенерировать рандомное число</button>
            </form>
            <div class="col-xl-6 mt-4 table-number-last d-none">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Рандомное число</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="random-number-last">

                    </tr>
                    </tbody>
                </table>
            </div>
            <h1>Вывод id и сгенерированного числа</h1>
            <div class="col-xl-6 mt-4">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Рандомное число</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="all-numbers">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script>
        function getRandomInRange(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        function storeRandomNumber(event) {
            event.preventDefault();
            const random_number = $('#random_number');
            document.getElementById('random_number').value = getRandomInRange(1, 999999999)
            $.ajax({
                url: "/api",
                type: "POST",
                dataType: "json",
                data: {
                    "number": random_number.val()
                },
                success(data) {
                    $('.all-numbers').append(`
                        <tr>
                            <th scope="row">${data.random_number.id}</th>
                            <td>${data.random_number.number}</td>
                            <td><a href="/${data.random_number.id}"><i class="far fa-eye"></i></a></td>
                        </tr>
                    `)
                    $('.random-number-last').empty();
                    $('.random-number-last').append(`
                        <th scope="row">${data.random_number.id}</th>
                        <td>${data.random_number.number}</td>
                        <td><a href="/${data.random_number.id}"><i class="far fa-eye"></i></a></td>
                    `);
                    $('.table-number-last').removeClass('d-none');

                }
            })
        }
        $.ajax({
            url: "/api",
            type: "GET",
            dataType: "json",
            success(data) {
                for (let index in data) {
                    $('.all-numbers').append(`
                        <tr>
                            <th scope="row">${data[index].id }</th>
                            <td>${data[index].number }</td>
                            <td><a href="/${data[index].id }"><i class="far fa-eye"></i></a></td>
                        </tr>
                    `)
                }
            }
        })

    </script>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\lar-test\resources\views/main.blade.php ENDPATH**/ ?>