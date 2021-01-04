
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <style>
        div {
             padding:3px;
        }
        .border-primary{
            border:3px dotted black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="profile.jpg" 
                    class="img-thumbnail" 
                    style="width: 50%; height: auto;"
                />

            </div>

        </div>



        <table class="table  table-striped table-bordered table-hover border-primary">
            <caption> This is a caption</caption>
            <thead>
                <tr class="table-danger">
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td class="table-dark">Chanankorn</td>
                    <td>Jandaeng</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Chatchanan</td>
                    <td>Jandaeng</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Chaiyut</td>
                    <td>Jandaeng</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Chirapan</td>
                    <td>Jandaeng</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Chom</td>
                    <td>Jandaeng</td>
                </tr>
            </tbody>
        </table>        
    </div>
</body>
</html>
