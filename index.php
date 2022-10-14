<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discovering Bootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
    <?php include '_header.php' ?>
    <main class="mt-5">
        <section class="container">
            <h1 class="text-center mb-4">Journey into Bootstrap classes</h1>
            <div class="row">
                <?php
                $contents = [
                    [
                        'title' => "Visit Components lake",
                        'text' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                        'img' => 'https://picsum.photos/id/1011/600/400',
                        'link' => 'https://getbootstrap.com/docs/5.2/components/accordion/'
                    ],
                    [
                        'title' => "Facing Cascade Style Sheet",
                        'text' => 'Some quick example text.',
                        'img' => 'https://picsum.photos/id/1035/600/400',
                        'link' => 'https://getbootstrap.com/docs/5.2/customize/css-variables/'
                    ],
                    [
                        'title' => 'Contemplate Form Inputs river',
                        'text' => 'Make up the bulk of the card\'s content.',
                        'img' => 'https://picsum.photos/id/1015/600/400',
                        'link' => 'https://getbootstrap.com/docs/5.2/forms/overview/'
                    ],
                    [
                        'title' => 'Enjoy Responsive Layout land',
                        'text' => 'Build on the card title and make up the bulk of the card\'s content.',
                        'img' => 'https://picsum.photos/id/103/600/400',
                        'link' => 'https://getbootstrap.com/docs/5.2/layout/breakpoints/'
                    ],
                ];
                ?>
                <?php foreach ($contents as $content) : ?>
                    <article class="col-lg-3 col-sm-6 mb-4">
                        <div class="card h-100 shadow border-0">
                            <img src="<?= $content["img"] ?>" class="card-img-top" alt="">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= $content['title'] ?></h5>
                                <p class="card-text d-none d-lg-block">
                                    <?= $content["text"] ?>
                                </p>
                                <a href='<?= $content["link"] ?>' class="btn btn-primary mt-auto stretched-link" target="_blank">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <?php include '_footer.php' ?>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>