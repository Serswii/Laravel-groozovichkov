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

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="jumbotron mt-5">
        <div class="error">
            <h1>Ошибка 404!</h1>
        </div>
</div>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\lar-test\resources\views/404.blade.php ENDPATH**/ ?>