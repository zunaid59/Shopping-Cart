<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop</title>

    <link rel="stylesheet" href="resource/css/bootstrap.min.css">
    <style>
        body{
            background: gainsboro;
        }
        .col_1{
            background: white;
        }
    </style>

</head>
<body>
<form action="">
<div class="container" style="margin-top: 100px" >
    <div class="row">
        <div class="col-sm-6 col-md-6 col-xl-6 col_1" style="padding: 20px 20px">
            <input type="text" class="form-control" placeholder="Enter Name"><br>
            <input type="text" class="form-control" placeholder="Enter Address"><br>
            <input type="text" class="form-control" placeholder="Address">
        </div>

        <div class="col-sm-6 col-md-6 col-xl-6 col_1" style="padding: 20px 20px">
            <div class="form-group-row">
                <label for="" class="col-sm-4 col-form-label" id="invoiceTitle">Invoice Title:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Enter Name" id="invoiceTitle">
                </div>
            </div>
            <div class="form-group-row">
                <label for="" class="col-sm-4 col-form-label" id="invoice">Invoice:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Enter Name" id="invoice">
                </div>
            </div>

            <div class="form-group-row">
                <label for="" class="col-sm-4 col-form-label" id="date">Date:</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="date">
                </div>
            </div>


        </div>

    </div>
</div>

</form>

<script src="resource/js/bootstrap.min.js"></script>
</body>
</html>
