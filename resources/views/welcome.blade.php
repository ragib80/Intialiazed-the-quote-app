<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>Welcome</title>

    <style>

    </style>
</head>

<body>
    <div class="container">

        <div class="row height d-flex justify-content-center align-items-center">

            <div class="col-md-8">
             <form method="GET" action="{{route('search')}}" >
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" name="q" id="q" placeholder="Search user by email , first name or last name">
                    <button class="btn btn-primary">Search</button>
                </div>
            </form>
            </div>

        </div>
    </div>
</body>

</html>
