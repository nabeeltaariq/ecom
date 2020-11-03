<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
{{View::make('header ')}}
@yield('content')
{{View::make('footer')}}


</body>
<style>
    .custom-login
    {
        height: 500px;
        padding-top: 100px;
        padding-top: 100px;
    }
    .back
    {
        width: 100%;
        margin-top: -20px;
        background-color: #0099cc;
        -moz-box-shadow: 1px 2px 3px rgba(0,0,0,.5);
        -webkit-box-shadow: 1px 2px 3px rgba(0,0,0,.5);
        box-shadow: 1px 2px 3px rgba(0,0,0,.5);
    }
    img.slider-img
    {
        height: 400px !important;

    }
    .custom-product
    {
        height: 600px;
    }
    .slider-text
    {
        background-color: #0000005e !important;
    }

</style>


</html>
