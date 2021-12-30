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
            <div class="row justify-content-center flex-column">
                <h1>Вывод даты публикации и сгенерированного числа</h1>
                <div class="col-xl-6 mt-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Дата создания</th>
                            <th>Рандомное число</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="show-random-number">

                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="<?php echo e(route('main')); ?>"><button class="back btn btn-primary"><span class="back-text">Вернуться</span><i class="fas fa-reply"></i></button></a>
            </div>
        </div>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script>
            $.ajax({
                url: "/api/" + <?php echo e(request()->id); ?>,
                type: "GET",
                dataType: "json",
                success(data) {
                    $('.show-random-number').append(`
                        <th scope="row">${data.date}</th>
                        <td>${data[0].number}</td>
                    `)
                    console.log(data)
                }
            })
    </script>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\lar-test\resources\views/number.blade.php ENDPATH**/ ?>