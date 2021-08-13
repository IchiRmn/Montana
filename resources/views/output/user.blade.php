<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('img/icons/icon.png') }}" rel="icon">
    
</head>
<body>
	<div class="container">
		<h2 class="text-center" style="font-family: sans-serif;">Users</h2>

    <table class="table table-bordered" style="width: 100%; border-width: 1pt; border-color: black; margin-top: 20px;">
        <tr>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Id</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Name</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Email</th>
            <th style="font-size: 9pt; border-width: 1pt; border-color: black;">Role</th>
        </tr>
        @foreach ($user as $user)      
        <tr>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $user->id}}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $user->name }}</td>
            <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $user->email }}</td>
            @php
				$r = App\Models\Role::where('id', $user->role_id)->get();
			@endphp
			    @foreach ($r as $r)				
                    <td style="font-size: 9pt; border-width: 1pt; border-color: black;">{{ $r->role }}</td>		
				@endforeach
        @endforeach
        </tr>
    </table>
	</div>
</body>
</html>
