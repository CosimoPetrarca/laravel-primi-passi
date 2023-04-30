<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo esercizio con Laravel</title>
</head>

<body>
    <h1>{{$title}}</h1>
    <img src="{{ asset('img/vieni.jpg') }}" alt="foto">
    <p>{{$text}}</p>
    <a href="/">{{$back}}</a>
    
</body>

</html>