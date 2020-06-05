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
				<li><a href="{{URL::to('/all_admins')}}">All Admins</a></li>
            </ul>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Admins</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Admin ID</th>
								  <th>Admin Name</th>
								  <th>Admin Email</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						@foreach($all_admins as $admin)
						  <tbody>
							<tr>
								<td class="center">{{$admin->id}}</td>
								<td class="center">{{$admin->name}}</td>
								<td class="center">{{$admin->email}}</td>
								<td class="center">
									<a class="btn btn-danger" href="{{URL::to('/delete_admin/'.$admin->id)}}">
										<i class="halflings-icon white trash"></i>
									</a>
                                    <a class="btn btn-info" href="{{URL::to('/edit-admin/'.$admin->id)}}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
								</td>
							</tr>
						  </tbody>
						  @endforeach
					  </table>
					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection
