@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<h2 class="mt-3">type</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item active">type</li>
  	</ol>
</nav>
<div class="row mt-4">
	@if(session()->has('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>

	@endif
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">Enter</div>
			<div class="card-body">
				<form method="post" action="{{ route('type.store') }}">
			
					<div class="form-group mb-3">
		        		<label><b>plate_number</b></label>
		        		<input type="address" name="plate_number" class="form-control" placeholder="plate_number" value="{{old('plate_number') }}" />
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>chassis_number</b></label>
		        		<input type="phone" name="chassis_number" class="form-control" placeholder="chassis_number" value="{{ old('chassis_number') }}"/>
		        	</div>
					
					<div class="form-group mb-3">
		        		<label><b>contract_number</b></label>
		        		<input type="phone" name="contract_number" class="form-control" placeholder="contract_number" value="{{ old('contract_number') }}"/>
		        	</div>
					
		        	<div class="form-group mb-3">
		        		<input type="submit" class="btn btn-primary" value="Edit" />
		        	</div>
					@csrf

				</form>
			</div>
		</div>
	</div>
</div>