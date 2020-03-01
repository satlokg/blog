<!DOCTYPE html>
<html>
<head>
	<title>Channel</title>
</head>
<body>
<ul>
	@foreach($channels as $channel)
		<li>{{$channel->name}}</li>
	@endforeach
</ul>
</body>
</html>