<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/1abfebe7e8.js" crossorigin="anonymous"></script> 

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bitter|Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>

          body,html{
            margin: 0;
            padding: 0;
            height:100%;
            box-sizing: border-box;
            font-family:sans-serif;
          }
        </style>
      
    </head>
    <body>
      <div id="app">
           
          
            <example-navbar></example-navbar>
           <app-home></app-home>
          
           
           
          
      </div>

      <script src="js/app.js">
      

      </script>
    </body>
</html>
