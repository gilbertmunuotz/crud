<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>
</head>

<body>
	<h1>Edit Input </h1>
	<form method="post" action="{{route('offering.update', ['offering' => $offerings])}}">

		@csrf
		@method('put')

		<label for="date">Date</label>
		<input type="date" id="date" name="date" value="{{$offerings->date}}"><br><br>
		<label for="amount">Amount</label>
		<input type="text" id="amount" name="amount" value="{{$offerings->amount}}"><br><br>
		<label for="chapel">Chapel</label>
		<input type="text" id="chapel" name="chapel" value="{{$offerings->chapel}}"><br><br>
		<input type="submit" value="Update">
	</form>

</body>

</html>