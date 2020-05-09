<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach($user as $users)
	{{$users->name }}
	{{$users->email }}
	@endforeach
</body>
</html>