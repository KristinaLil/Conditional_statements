<?php

$out = '';
if (isset($_POST['year']) && $_POST['year'] != '') {
    $year = $_POST['year'];
    $firstYear = 1984;

    switch (($year - $firstYear) % 10) {
        case 0:
        case 1;
            $out = 'Žalia spalva';
            break;
        case 2:
        case 3:
            $out = 'Raudona spalva';
            break;
        case 4:
        case 5:
            $out = 'Geltona spalva';
            break;
        case 6:
        case 7:
            $out = 'Balta spalva';
            break;
        case 8:
        case 9:
            $out = 'Juoda spalva';
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional statements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Japonų metai</h1>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="triangle.php">Trikampio skaičiuoklė</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="olympics.php">Olimpinės žaidynės</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="japaneseYear.php">Japonų metai</a>
            </li>
        </ul>
        <form action="" method="POST">
            <div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Metai</label>
                            <input type="number" class="form-control" name="year" min=1984 max=2043 placeholder="nuo 1984 iki 2043 metų">
                        </div>

                        <button type="submit" class="btn btn-primary">Tikrinti spalvą</button>
                        <?= (isset($out)) ? $out : '' ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>