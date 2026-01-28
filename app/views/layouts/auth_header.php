<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= SYSTEM_NAME ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL ?>/img/logo.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- TU CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/app.css">

    <style>
        .front-home{
            background-image:
            linear-gradient(to right top, #e2e0ff71, #edebff71),
            url("<?= BASE_URL ?>/img/background.png");
            background-size: cover;
            background-position: center;
        }

        .d-flex{
            justify-content: center;
        }

        @media (max-width: 768px) {
            .d-flex{
                justify-content: center;
            }
            .fullwide .col-md-5{
                width: 100%;
            }
        }
    </style>
</head>

<body class="bg-light-blue front-home">
