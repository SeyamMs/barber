@push('css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            min-height: 400px;
        }

        .form-section {
            width: 48%;
        }

        .booking-details {
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

        .input-group input[type="text"],
        .input-group input[type="email"] {
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

        textarea {
            width: 380px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        select {
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

        .sms-reminder {
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
@endpush

<div>


    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @else
            <div class="form-section">
                <h2>Klantgegevens</h2>

                <form id="bookingForm" wire:submit.prevent>
                    <div class="input-group">
                        <div>
                            <label for="name">Naam *</label>
                            <input type="text" id="name" name="name" wire:model="name" />
                            @error('email')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="email">E-mailadres *</label>
                            <input type="email" id="email" name="email" wire:model="email" />
                            @error('email')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="input-group2">
                        <div>
                            <label for="code">Landcode *</label>
                            <select id="code" name="code" wire:model="code">
                                <option value="+32">+32 (Belgium)</option>
                                <option value="+31">+31 (Netherlands)</option>
                                <option value="+33">+33 (France)</option>
                                <option value="+49">+49 (Germany)</option>
                                <!-- Add more country codes as needed -->
                            </select>
                            @error('code')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="phone">Telefoonnummer *</label>
                            <input type="tel" id="phone" name="phone" wire:model="phone" placeholder="123456789">
                            @error('phone')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" id="sms-reminder" name="sms_reminder" wire:model="sms_reminder" />
                        <label class="sms-reminder" for="sms-reminder">Ik wil 24 uur voordat deze sessie start een sms-herinnering ontvangen</label>
                        @error('sms_reminder')
                            <span style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="message">Schrijf een bericht</label>
                    <textarea id="message" name="message" wire:model="message"></textarea>
                    @error('message')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </form>
            </div>

            <div class="booking-details">
                <h2>Boekingsgegevens</h2>
                <div class="booking-summary">
                    <p>FRESHCOUPE</p>
                    <p>{{ $selectedDateTime?->format('Y-m-d \o\m H:i:s') }}</p>
                    <p>Ten Akkerdreef</p>
                    <p>Barber 1</p>
                    <h3>{{ $service?->duration }}</h3>
                    <h3>{{ $service?->name }}</h3>
                    <p>Totaal: {{ $service?->price }} {{ $service?->currency }}</p>
                    <button class="button" wire:click.prevent="submit">book</button>
                </div>
            </div>
        @endif
    </div>
</div>
