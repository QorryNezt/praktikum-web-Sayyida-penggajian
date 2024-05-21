<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <title>Aplikasi Penggajian</title>
</head>

<body>

<div class="row">
                <div class="col">
                    <h3>Bagian</h3>
                </div>
</div>
<div class="row mt-3">
        <div class="col">
                <table class="table bg-white rounded shadow-sm  table-hover">
                    <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">Bagian</th>
                            </tr>
                    </thead>
                        <tbody>
                            <tr class="align-middle">
                                <th scope="row">1</th>
                                <td>HRD</td>
                            </tr>
                            <tr class="align-middle">
                                <th scope="row">2</th>
                                <td>Finance</td>
                            </tr>
                        </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>