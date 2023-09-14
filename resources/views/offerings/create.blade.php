<div class="card" style="text-align: center;">
	<div class="card-header" style="font-size: xx-large;">Add New Input</div><br>
	<div class="card-body">
		<form method="post" action="{{route('offering.store')}}">
			@csrf
			@method('post')
			<label>Date</label></br>
			<input type="date" name="date" id="date" class="form-control"></br></br>
			<label>Amount</label></br>
			<input type="text" name="amount" id="amount" class="form-control"></br></br>
			<label>Chapel</label></br>
			<input type="text" name="chapel" id="chapel" class="form-control"></br></br>
			<input type="submit" value="Add" class="btn btn-success"></br>
		</form>
	</div>
</div>
