<?php

$out = '';
if (isset($_POST['year']) && $_POST['year'] != '') {
    $year = $_POST['year'];
    $firstYear = 1896;
    if ($year % 4 == 0) {
        $yearNumber = (($year - $firstYear) / 4) + 1;
        $out = "Šie metai yra olimpiniai! Jų numeris: <b>$yearNumber</b>.";
    } else {
        $out = "Šie metai NĖRA olimpiniai!";
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
        <h1>Olimpinės žaidynės</h1>
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
                            <input type="number" class="form-control" name="year">
                        </div>

                        <button type="submit" class="btn btn-primary">Tikrinti</button>
                        <?= (isset($out)) ? $out : '' ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>