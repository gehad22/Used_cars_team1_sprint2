@extends('admin_layout')
@section('admin_content')
    <h4 class="alert-heading">Warning!</h4>
    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
    </div>
    </noscript>

    <!-- start: Content -->
    <div id="content" class="span10">
        <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li><a href="{{URL::to('/add_admin')}}">Add Admin</a></li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Admin</h2>
					</div>	
                    
					<div class="box-content">
						<form class="form-horizontal" action="{{ url( '/save_admin' ) }}" method="post">
                            {{ csrf_field() }}
						  <fieldset>
                          <div class="control-group">
							  <label class="control-label" for="date01">Admin Name      </label>
							  <div class="controls">
								<input type="text" class="input_xlarge" name="name"  required="" >
							  </div>
							</div>  
                            <div class="control-group">
							  <label class="control-label" for="date01">Admin Email      </label>
							  <div class="controls">
								<input type="text" class="input_xlarge" name="email"  required="" >
							  </div>
							</div> 
                            <div class="control-group">
							  <label class="control-label" for="date01">Admin Password      </label>
							  <div class="controls">
								<input type="password" class="input_xlarge" name="password"  required="" >
							  </div>
							</div>        
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" >ADD</button>
							  
							  <a class="btn btn-default" href="{{URL::to('/add_admin')}}">Cancel</a>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection
