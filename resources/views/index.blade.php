<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concept FAYA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    .services {
    padding: 40px;
    text-align: center;
}

.services h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.service-cards {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}

.service-card {
    background-color: #fff;
    border: 1px solid #ddd;
    width: 250px;
    padding: 0px 0px;
    height: 500px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.service-card img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.service-card h3 {
    font-size: 16px;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.service-card p {
    font-size: 14px;
    margin-bottom: 15px;
}

.service-card a {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 14px;
    text-transform: uppercase;
}

.service-card a:hover {
    background-color: #444;
}
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
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


.hero-image {
    position: relative;
    height: 400px;
    overflow: hidden;
}

.hero-image img {
    width: 100%;
    height: auto;
}

.footer-content {
    text-align: center;
    padding: 20px;
    background-color: #fff;
    border-top: 1px solid #ccc;
}

.chat-a {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 14px;
}

.chat-a:hover {
    background-color: #444;
}

</style>
<body>
    <header>
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
                    
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="10%" height="10%" viewBox="5.7 0 105.5 126.1" preserveAspectRatio="xMinYMax meet" data-hook="svg-icon-1"><path d="M99.8 28.4c0-1.2-0.9-2-2.1-2h-15c0 3.2 0 7.6 0 8.2 0 1.5-1.2 2.6-2.6 2.9 -1.5 0.3-2.9-0.9-3.2-2.3 0-0.3 0-0.3 0-0.6 0-0.9 0-4.7 0-8.2H40.1c0 3.2 0 7.3 0 8.2 0 1.5-1.2 2.9-2.6 2.9 -1.5 0-2.9-0.9-3.2-2.3 0-0.3 0-0.3 0-0.6 0-0.6 0-5 0-8.2h-15c-1.2 0-2 0.9-2 2L8.3 124c0 1.2 0.9 2.1 2.1 2.1h96.3c1.2 0 2.1-0.9 2.1-2.1L99.8 28.4z"></path><path d="M59.1 5.9c-2.9 0-2 0-2.9 0 -2 0-4.4 0.6-6.4 1.5 -3.2 1.5-5.9 4.1-7.6 7.3 -0.9 1.8-1.5 3.5-1.8 5.6 0 0.9-0.3 1.5-0.3 2.3 0 1.2 0 2.1 0 3.2 0 1.5-1.2 2.9-2.6 2.9 -1.5 0-2.9-0.9-3.2-2.3 0-0.3 0-0.3 0-0.6 0-1.2 0-2.3 0-3.5 0-3.2 0.9-6.4 2-9.4 1.2-2.3 2.6-4.7 4.7-6.4 3.2-2.9 6.7-5 11.1-5.9C53.5 0.3 55 0 56.7 0c1.5 0 2.9 0 4.4 0 2.9 0 5.6 0.6 7.9 1.8 2.6 1.2 5 2.6 6.7 4.4 3.2 3.2 5.3 6.7 6.4 11.1 0.3 1.5 0.6 3.2 0.6 4.7 0 1.2 0 2.3 0 3.2 0 1.5-1.2 2.6-2.6 2.9s-2.9-0.9-3.2-2.3c0-0.3 0-0.3 0-0.6 0-1.2 0-2.6 0-3.8 0-2.3-0.6-4.4-1.8-6.4 -1.5-3.2-4.1-5.9-7.3-7.3 -1.8-0.9-3.5-1.8-5.9-1.8C61.1 5.9 59.1 5.9 59.1 5.9L59.1 5.9z"></path><text x="58.5" y="77" dy=".35em" text-anchor="middle" class="uxskpx" data-hook="items-count">0</text></svg>
                    <a href="#" class="login">
                        <svg data-bbox="0 0 50 50" data-type="shape" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 50 50"><g><path d="M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0"></path></g></svg>
                        <span>Inloggen</span>
                    </a>
                </div>
        </div>
    </header>

    <main>
            <div class="img" data-uri="d8b46e_54b98cf896094dbb979ebacedd3ea800~mv2.jpeg" data-width="1248" data-height="1523" style="height: 815px; width: 1577px; background: url(&quot;https://static.wixstatic.com/media/d8b46e_54b98cf896094dbb979ebacedd3ea800~mv2.jpeg/v1/fill/w_1248,h_1523,al_c,q_85,usm_0.66_1.00_0.01/d8b46e_54b98cf896094dbb979ebacedd3ea800~mv2.jpeg&quot;) 50% center / cover no-repeat;"></div>
    </main>
    <section class="services">
        <h2>Onze diensten</h2>
        <div class="service-cards">
            @foreach ($services as $service)
                <div class="service-card">
                    <img src="{{ $service->image }}" alt="Student">
                    <h3>{{$service->name}}</h3>
                        <p>{{$service->duration}} min.<br>{{$service->price}} {{$service->currency}}</p>
                        <a href="{{ route('books.show', $service->id) }}">Nu boeken</a>
                        <a href="{{ route('books.index') }}">Nu boeken</a>
                    </div>
            @endforeach
           
            {{-- <div class="service-card">
                <img src="https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-0.jpg" alt="Fresh Coupe">
                <h3>FRESHCOUPE</h3>
                <p>25 min.<br>€ 25</p>
                <a href="{{route('book.index')}}">Nu boeken</a>
            </div>
            <div class="service-card">
                <img src="https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-2-1.jpg" alt="Beard">
                <h3>Baard</h3>
                <p>15 min.<br>€ 15</p>
                <a href="{{route('book.index')}}">Nu boeken</a>
            </div>
            <div class="service-card">
                <img src="https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-4.jpg" alt="Fresh Coupe + Beard">
                <h3>FRESHCOUPE + BAARD</h3>
                <p>40 min.<br>€ 35</p>
                <a href="{{route('book.index')}}">Nu boeken</a>
            </div>
            <div class="service-card">
                <img src="https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-3-2.jpg" alt="Deluxe">
                <h3>DELUXE</h3>
                <p>50 min.<br>€ 50</p>
                <a href="{{route('book.index')}}">Nu boeken</a>
            </div>
            <div class="service-card">
                    <img src="https://jim-barbershop.com/wp-content/uploads/2024/07/image-jim-3.jpg" alt="Deluxe">
                    <h3>DELUXE</h3>
                    <p>50 min.<br>€ 50</p>
                    <a href="{{route('book.index')}}">Nu boeken</a>
            </div> --}}
        </div>
    </section>
    

    <footer>
        <div class="footer-content">
            <a class="chat-a">Chat met ons!</a>
        </div>
    </footer>
</body>
</html>
