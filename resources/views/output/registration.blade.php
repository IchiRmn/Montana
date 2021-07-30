<!DOCTYPE html>
<html>
<head>
	<title>Registration Sheet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('img/icons/icon.png') }}" rel="icon">
    
</head>
<body>
	<div class="container">
		<h2 class="text-center" style="font-family: sans-serif;">Registration Sheet</h2>
        <h4 class="text-center">{{ $id_regist }}</h4>

    <table style="width: 100%; font-size: 12pt;">
        <tr>
            <th style="font-size: 9pt;">Mountaineering</th>
            <th></th>    
            <th style="font-size: 9pt;">User Registrant</th>
            <th></th>
        </tr>
        <tr>
            <td style="font-size: 9pt;">Destination</td>
            <td style="font-size: 9pt;">: {{ $mount }}</td>
            <td style="font-size: 9pt;">Name</td>
            <td style="font-size: 9pt;">: {{ Auth::user()->name; }}</td>
        <tr>
            <td style="font-size: 9pt;">Start From</td>
            <td style="font-size: 9pt;">: {{ $date_start }}</td>
            <td style="font-size: 9pt;">Email</td>
            <td style="font-size: 9pt;">: {{ Auth::user()->email }}</td>    
        </tr>
        <tr>
            <td style="font-size: 9pt;">Until</td>
            <td style="font-size: 9pt;">: {{ $date_end }}</td>
        </tr>
        <tr>
            <th style="padding-top: 10px; font-size: 9pt;">Payment</th>
            <td style="padding-top: 10px; font-size: 9pt;">: {{ $payment }}</td>
            <th style="padding-top: 10px; font-size: 9pt;">Status</th>
            <td style="padding-top: 10px; font-size: 9pt;">: {{ $status }}</td>
        </tr>
    </table>
    <h3 style="margin-top: 20px">Members</h3>
    @foreach ($identity as $index => $value)      
    <table class="table table-bordered" style="width: 100%; border-width: 1pt; border-color: black; margin-top: 20px;">
        <tr>
            <th colspan="4" class="text-center">Member {{ $loop->iteration }}</th>
        </tr>
        <tr>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Identiy Number</th>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $identity[$index] }} </td>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Name</th>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $name[$index] }}</td>
        </tr>
        <tr>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Email</th>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $email[$index] }}</td>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Birthdate</th>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $birthdate[$index] }}</td>
        </tr>
        <tr>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Phone Number</th>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $phone[$index] }}</td>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Gender</th>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $gender[$index] }}</td>
        </tr>
        <tr>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Address</th>
            <td colspan="3" style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $address[$index] }}</td>
        </tr>
    </table>
    @endforeach
	</div>
</body>
</html>
