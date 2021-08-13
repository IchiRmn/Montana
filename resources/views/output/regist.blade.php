<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('img/icons/icon.png') }}" rel="icon">
    
</head>
<body>
	<div class="container">
		<h2 class="text-center" style="font-family: sans-serif;">Registration</h2>

    <table class="table table-bordered" style="width: 100%; border-width: 1pt; border-color: black; margin-top: 20px;">
        <tr>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">No</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">ID Registration</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Registrant</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Destination</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Members</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Date Start</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">End Date</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Status</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Payment</th>
        </tr>
        @foreach ($result as $result)      
        <tr>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $loop->iteration }}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $result->registId }}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $result->name }}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $result->mountain_name}}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $regist->where('regists_id', $result->registId)->count() }}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $result->date_start}}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $result->date_end}}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $result->status}}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $result->payment}}</td>
        </tr>
        @endforeach

    </table>
	</div>
</body>
</html>
