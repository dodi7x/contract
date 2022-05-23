@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<h2 class="mt-3">Profile</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item active">Profile</li>
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
			<div class="card-header">Edit User</div>
			<div class="card-body">
				<form method="post" action="{{ route('profile.edit_validation') }}">
					@csrf
					<div class="form-group mb-3">
		        		<label><b>User Name</b></label>
		        		<input type="text" name="name" class="form-control" placeholder="name" value="{{  auth()->user()->name  }}" />
		        		@if($errors->has('name'))
		        		<span class="text-danger">{{ $errors->first('name') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>User Email</b></label>
		        		<input type="text" name="email" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}" />
		        		@if($errors->has('email'))
		        		<span class="text-danger">{{ $errors->has('email') }}</span>
		        		@endif
		        	</div>
		        	<div class="form-group mb-3">
		        		<label><b>Password</b></label>
		        		<input type="password" name="password" class="form-control" placeholder="Password" />
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>address</b></label>
		        		<input type="address" name="address" class="form-control" placeholder="address" value="{{ auth()->user()->address }}" />
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>phone</b></label>
		        		<input type="phone" name="phone" class="form-control" placeholder="phone" value="{{auth()->user()->phone }}"/>
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>gender</b></label>
		        		<input type="phone" name="gender" class="form-control" placeholder="gender" value="{{auth()->user()->gender }}"/>
		        	</div>
					<div class="form-group mb-3">
		        		<label><b>age</b></label>
		        		<input type="phone" name="the_age" class="form-control" placeholder="the_age" value="{{auth()->user()->the_age }}"/>
		        	</div>
				
					
					
					
		        	<div class="form-group mb-3">
		        		<input type="submit" class="btn btn-primary" value="Edit" />
		        	</div>
				</form>
			</div>
		</div>
	</div>
</div>
