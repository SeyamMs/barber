<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Booking Form</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }

        .form-section {
            width: 48%;
        }
        .booking-details{
            width: 35%;
        }
        h2 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .input-group {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 15px;
        }
        .input-group2 {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 15px;
        }

        .input-group input[type="text"], .input-group input[type="email"] {
            width: 280px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="tel"] {
            width: 470px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        textarea{
            width: 380px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        select{
            width: 100px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        textarea {
            height: 80px;
        }

        .checkbox {
            display: flex;
            align-items: center;
        }

        .checkbox input {
            margin-right: 10px;
        }
        .sms-reminder{
            font-size: 13px;
            width: 600px;
           padding-top: 10px;
        }
        .booking-summary {
            border-left: 1px solid #ddd;
            padding-left: 20px;
        }

        .booking-summary p {
            margin: 5px 0;
        }

        .button {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: black;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #333;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #fff;
            border-bottom: 1px solid #ccc;
            position: relative;
        }
      
        .center-content {
            text-align: center;
            flex-grow: 1;
        }

        .logo h1 {
            font-size: 36px;
            line-height: 1.2;
            margin: 0;
        }

        .logo p {
            font-size: 14px;
            margin: 0;
            color: #666;
            letter-spacing: 1px;
        }

        .nav-links {
            list-style: none;
            padding: 0;
            margin: 20px 0 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .nav-links li a {
            text-decoration: none;
            color: #000;
            font-size: 16px;
            font-weight: 400;
        }

        .header-icons {
            position: absolute;
            right: 40px;
            display: flex;
            margin-right: -120px;
            align-items: center;
            gap: 20px;
        }

        .header-icons a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #000;
            font-size: 16px;
        }

        .header-icons img {
            width: 24px;
            height: 24px;
            margin-right: 5px;
        }

        .header-icons span {
            font-weight: 400;
        }
    </style>
</head>
<body>
    
        <header>
            @if (session()->has('success'))
                <div class="alert alert-success mt-3">
                   {{ session('success') }}
                </div>
            @endif
                <div class="header-container">
                    <div class="center-content">
                        <div class="logo">
                            <h1>CONCEPT<br>FAYA</h1>
                            <p>HAIR, BEAUTY & BARBERSHOP</p>
                        </div>
                        <nav>
                            <ul class="nav-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Ons team</a></li>
                                <li><a href="#">Neem contact op</a></li>
                                <li><a href="#">TB Barbershop</a></li>
                                <li><a href="#">Teko Beauty</a></li>
                            </ul>
                        </nav>
                    </div>
        
                    <div class="header-icons">
        
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="10%" height="10%" viewBox="5.7 0 105.5 126.1" preserveAspectRatio="xMinYMax meet" data-hook="svg-icon-1">
                            <path d="M99.8 28.4c0-1.2-0.9-2-2.1-2h-15c0 3.2 0 7.6 0 8.2 0 1.5-1.2 2.6-2.6 2.9 -1.5 0.3-2.9-0.9-3.2-2.3 0-0.3 0-0.3 0-0.6 0-0.9 0-4.7 0-8.2H40.1c0 3.2 0 7.3 0 8.2 0 1.5-1.2 2.9-2.6 2.9 -1.5 0-2.9-0.9-3.2-2.3 0-0.3 0-0.3 0-0.6 0-0.6 0-5 0-8.2h-15c-1.2 0-2 0.9-2 2L8.3 124c0 1.2 0.9 2.1 2.1 2.1h96.3c1.2 0 2.1-0.9 2.1-2.1L99.8 28.4z"></path>
                            <path d="M59.1 5.9c-2.9 0-2 0-2.9 0 -2 0-4.4 0.6-6.4 1.5 -3.2 1.5-5.9 4.1-7.6 7.3 -0.9 1.8-1.5 3.5-1.8 5.6 0 0.9-0.3 1.5-0.3 2.3 0 1.2 0 2.1 0 3.2 0 1.5-1.2 2.9-2.6 2.9 -1.5 0-2.9-0.9-3.2-2.3 0-0.3 0-0.3 0-0.6 0-1.2 0-2.3 0-3.5 0-3.2 0.9-6.4 2-9.4 1.2-2.3 2.6-4.7 4.7-6.4 3.2-2.9 6.7-5 11.1-5.9C53.5 0.3 55 0 56.7 0c1.5 0 2.9 0 4.4 0 2.9 0 5.6 0.6 7.9 1.8 2.6 1.2 5 2.6 6.7 4.4 3.2 3.2 5.3 6.7 6.4 11.1 0.3 1.5 0.6 3.2 0.6 4.7 0 1.2 0 2.3 0 3.2 0 1.5-1.2 2.6-2.6 2.9s-2.9-0.9-3.2-2.3c0-0.3 0-0.3 0-0.6 0-1.2 0-2.6 0-3.8 0-2.3-0.6-4.4-1.8-6.4 -1.5-3.2-4.1-5.9-7.3-7.3 -1.8-0.9-3.5-1.8-5.9-1.8C61.1 5.9 59.1 5.9 59.1 5.9L59.1 5.9z"></path><text x="58.5" y="77" dy=".35em" text-anchor="middle" class="uxskpx" data-hook="items-count">0</text>
                        </svg>
                        <a href="#" class="login">
                            <svg data-bbox="0 0 50 50" data-type="shape" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 50 50">
                                <g>
                                    <path d="M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0"></path>
                                </g>
                            </svg>
                            <span>Inloggen</span>
                        </a>
                    </div>
                </div>
            </header>
    <div class="container">
            <div class="form-section">
                <h2>Klantgegevens</h2>
                <form id="bookingForm" action="{{route('booking.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="service_duration" value="{{$service_duration}}">
                    <input type="hidden" name="service_name" value="{{$service_name}}">
                    <input type="hidden" name="service_price" value="{{$service_price}}">
                    <input type="hidden" name="service_currency" value="{{$service_currency}}">
                <div class="input-group">
                    <div>
                        <label for="name">Naam *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div>
                        <label for="email">E-mailadres *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                 </div>
                <div class="input-group2">
                    <div>
                        <label for="code">Landcode *</label>
                        <select id="code" name="code" required>
                                <option value="+32">+32 (Belgium)</option>
                                <option value="+31">+31 (Netherlands)</option>
                                <option value="+33">+33 (France)</option>
                                <option value="+49">+49 (Germany)</option>
                                <!-- Add more country codes as needed -->
                        </select>
                    </div>
        
                    <div>
                        <label for="phone">Telefoonnummer *</label>
                        <input type="tel" id="phone" name="phone" required placeholder="123456789">
                    </div>
                </div>
            <div class="checkbox">
                <input type="checkbox" id="sms-reminder" name="sms_reminder">
                <label class="sms-reminder" for="sms-reminder">Ik wil 24 uur voordat deze sessie start een sms-herinnering ontvangen</label>
            </div>

            <label for="message">Schrijf een bericht</label>
            <textarea id="message" name="message"></textarea>
        </div>

        <div class="booking-details">
            <h2>Boekingsgegevens</h2>
            <div class="booking-summary">
                <p>FRESHCOUPE</p>
                <p>{{ $selected_date }} om {{$selected_time}}</p>
                <p>Ten Akkerdreef</p>
                <p>Barber 1</p>
                <h3> {{$service_duration}}</h3>
                <h3> {{$service_name}}</h3>
                <p>Totaal: {{$service_price}} {{$service_currency}}</p>
                <button class="button" type="submit">book</button>

            </div>
        </div>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('23018b487fa362a7870e', {
       cluster: 'mt1'
    });
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
</script>
</html>
