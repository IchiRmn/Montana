<!DOCTYPE html>
<html>
<head>
	<title>Destination</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('img/icons/icon.png') }}" rel="icon">
    
</head>
<body>
	<div class="container">
		<h2 class="text-center" style="font-family: sans-serif;">Destination</h2>

    <table class="table table-bordered" style="width: 100%; border-width: 1pt; border-color: black; margin-top: 20px;">
        <tr>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">No</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Name</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Height</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Image</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Maximal Stay</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Quota/Day</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Maximal Members</th>
        </tr>
        @foreach ($mount as $mount)      
        <tr>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $loop->iteration}}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $mount->mountain_name }}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $mount->height }}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $mount->img }}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $mount->days }}</td>	
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $mount->quota }}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $mount->max }}</td>
        </tr>
        <tr>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;" colspan="7" class="text-center">Description</th>
        </tr>
        <tr>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;" colspan="7" class="text-center">{{ $mount->description }}</td>
        </tr>
        @endforeach

    </table>
	</div>
</body>
</html>
