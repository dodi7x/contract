
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card">
                <div class="card-header">
                    <h4>Add create</h4>
                </div>
                <div class="card-body">

                    <form method="post" action="{{ route('create') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""> customer_number</label>
                            <input type="text" name="customer_number" class="form-control">
                        </div>
                   
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                    <h1>Create Post</h1>
 
                 
                </div>
            </div>
        </div>
    </div>
</div>
