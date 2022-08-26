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
    Dear PT. Pirngadi Teberau Karya, i'm interested with your products. I would like to know the details of these following quoted items listed (availability, price, costs, and etc). 
    </p>
    @foreach ($details['cart'] as $cart)
        <p>
            * {{$cart['quantity']}} Pcs {{$cart['name']}}
        </p>
    @endforeach
    <p>
    Please send me messages of replies on
    <br>
    Email: {{ $details['email'] }}
    <br>
    Or
    <br>
    Phone: {{ $details['phoneNumber'] }}
    <br><br>
    Looking foward for your replies about the product, 
    <br><br>
    Sincerely, {{ $details['firstName'] }}
    </p>
</body>
</html>