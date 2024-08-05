@push('css')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 16px;
            color: #777;
            margin-bottom: 20px;
        }

        .calendar {
            grid-column: 1 / 2;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }

        .calendar-header button {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .calendar-body {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            padding: 10px;
        }

        .calendar-day {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            margin: 2px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .point {
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 50%;
            background-color: #000;
            width: 5px;
            height: 5px;
        }

        .calendar-day:hover {
            background-color: #e9e9e9;
        }

        .calendar-day.selected {
            background-color: #333;
            color: white;
            border-radius: 5px;
        }

        .calendar-day.outside {
            color: #ccc;
        }

        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            background-color: #f1f1f1;
            padding: 10px;
            font-weight: bold;
        }

        .calendar-weekdays div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .booking-info {
            grid-column: 3 / 4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: -100px;
        }

        .booking-info span {
            display: block;
            margin-bottom: 5px;
        }

        .timepicker>div {
            grid-column: 2 / 3;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .timepicker>div>div {
            width: 80px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        .design-placeholder {
            grid-column: 2 / 3;
            display: inline;
            flex-direction: column;
            justify-content: center;
            margin-top: -100px;
        }

        .timepicker>div>div:hover {
            background-color: #ccc;
        }

        .timepicker div.selected {
            background-color: #333;
            color: white;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            margin-top: 10px;
        }

        .show-all {
            margin-top: 2px;
            height: 40px;
            display: inline-block;
            background-color: #333;
            color: #fff;
            border-radius: 5px;

        }

        .button.disabled {
            background-color: #ccc;
            cursor: not-allowed;
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
        <div class="calendar">

            <div class="calendar-header">
                <button wire:click="previousMonth">&lt;</button>
                <div id="currentMonth">{{ today()->month($month)->translatedFormat('F Y') }}</div>
                <button wire:click="nextMonth">&gt;</button>
            </div>

            <div class="calendar-weekdays">
                @foreach (today()->startOfWeek(1)->toPeriod(today()->endOfWeek(0))->toArray() as $day)
                    <div>{{ str($day->minDayName)->ucfirst() }}</div>
                @endforeach
            </div>

            <div class="calendar-body" id="calendarBody">
                @foreach ($this->weeks as $days)
                    @foreach ($days as $day)
                        <div wire:key="{{ $day['date']->format('d-m-Y') }}" wire:click="selectDay('{{ $day['date']->format('d-m-Y') }}')" @class([
                            'calendar-day',
                            'outside' => !$day['withinMonth'],
                            'selected' =>
                                $day['date']->format('d-m-Y') == $selectedDay?->format('d-m-Y'),
                        ])>
                            {{ $day['date']->day }}
                            @if (!in_array($day['date']->dayOfWeek, [0, 5]))
                                <div class="point"></div>
                            @endif
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>


        <div class="timepicker" id="timepicker" x-data="{ expanded: false }">
            @if ($this->times->count())
                <div x-show="expanded" x-collapse.min.200px>
                    @foreach ($this->times as $time)
                        <div wire:key="time-{{ $time->id }}" wire:click="selectTime('{{ $time->id }}')" @class(['selected' => $time == $selectedTime])>{{ $time->time }}</div>
                    @endforeach
                </div>
                <button x-on:click="expanded = !expanded" class="show-all" x-text="expanded ? 'Show Less' : 'Show All'"></button>
            @endif
        </div>

        @if (!$this->times->count())
            <div class="design-placeholder" id="design_placeholder">
                <span><strong id="placeholder-date"></strong></span>
                <span>Niet beschikbaar</span>
                <button class="button">Eerst beschikbare datum</button>
            </div>
        @endif

        <div class="booking-info">
            @if (is_null($this->selectedDay))
                <span id="selected-date-info">Selecteer een datum</span>
            @else
                <span id="selected-time-info">Datum: {{ $this->selectedDay->translatedFormat('l d F Y') }}</span>
                @if ($this->selectedTime)
                    <span id="selected-time-info">Tijd: {{ $this->selectedTime->time }}</span>
                @endif
            @endif
            <span id="service-details">Dienstgegevens</span>
            <span id="service-name">{{ $service->name }}</span>
            <span id="service-duration">{{ $service->duration }} min</span>
            @if (!is_null($this->selectedDataTime))
                <span id="appointment-details">Afspraak op {{ $this->selectedDataTime->format('j-n-Y \o\m H:i:s') }}</span>
            @endif
            <span id="service-price">{{ $service->price }} {{ $service->currency }}</span>
            <button wire:click="goToDetails" @disabled(is_null($this->selectedDataTime)) @class(['button', 'disabled' => is_null($this->selectedDataTime)])>Volgende</button>
        </div>
    </div>
</div>
