<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('chosen/chosen.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <select class="chosen-select">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
        <option value="4">Option 4</option>
        <option value="5">Option 5</option>
    </select>
    <script src="{{ asset('chosen/jquery.min.js') }}"></script>
    <script src="{{ asset('chosen/chosen.jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.chosen-select').chosen();
        });
    </script>
</body>


</html>
