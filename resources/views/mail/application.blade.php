<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DFEC</title>
</head>
<body>
    <h2>Hey, It's me {{ $mailData['name'] }} </h2> 
    <br>

    <strong>Name: {{ $mailData['name'] }}</strong> <br>
    <strong>Email: {{ $mailData['email'] }}</strong><br>
    <strong>Subject: {{ $mailData['subject'] }}</strong> <br>
    <strong>Message: {{ $mailData['message'] }}</strong><br><br>
    
    Thank you
</body>
</html>