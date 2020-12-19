@if(count($errors)>0)
	<div class="alert alert-danger alert-dismissible message">
         <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
	<strong>Whoops!</strong> <br>
		@foreach($errors->all() as $error)
			<strong><i class="fa fa-warning text-danger" aria-hidden="true"></i></strong>{{ $error }}<br>
		@endforeach
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible message">{{ session('success') }}
        <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>
    </div>
@endif
