<!DOCTYPE html>
<html>
<head>
	<title>Channel</title>
</head>
<body>
<form action="#">
	<select name="channel_id" id="channel_id">
	@foreach($channels as $channel)
		<option value="{{$channel->id}}">{{$channel->name}}</option>
	@endforeach
	</select>
	</form>
</ul>
</body>
</html>