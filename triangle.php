<?php

$out = '';
if (isset($_POST['kA']) && $_POST['kA'] != '') {
    $kA = $_POST['kA'];
    $kB = $_POST['kB'];
    $kC = $_POST['kC'];
    if (($kA + $kB > $kC) &&
        ($kA + $kC > $kB) &&
        ($kB + $kC > $kA)
    ) {
        $out = "Trikampį sudaryti įmanoma";
    } else {
        $out = "Trikampio sudaryti neįmanoma";
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
        <h1>Trikampio skaičiuoklė</h1>
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
                            <label class="form-label">Kraštinė A</label>
                            <input type="number" class="form-control" name="kA">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kraštinė B</label>
                            <input type="number" class="form-control" name="kB">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kraštinė C</label>
                            <input type="number" class="form-control" name="kC">
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