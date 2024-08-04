<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <p>Dear {{ $booking['name'] }},</p>
    <p>Thank you for your booking. Here are the details:</p>
    <ul>
        <li>Service Name: {{ $booking['service_name'] }}</li>
        <li>Service Price: {{ $booking['service_price'] }} {{ $booking['service_currency'] }}</li>
        <a href="{{route('update',$booking['id'])}}">if you want canceld or edit</a>
    </ul>
    <p>We look forward to serving you!</p>
</body>
</html>
