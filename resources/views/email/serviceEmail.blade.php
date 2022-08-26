<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <p>
    Message from {{ $details['fullName'] }}.
    </p>
    <br>
    {{ $details['message'] }}
    <br>
    <p>
    Looking foward for your replies and please send it to {{ $details['email'] }}. 
    <br>
    That's all, thanks and have a nice day !
    <br>
    Sincerely, {{ $details['fullName'] }}.
    </p>
</body>
</html>