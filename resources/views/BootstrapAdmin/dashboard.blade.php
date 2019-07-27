@section('content')
<div class="row clearfix">
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="widget">
			<div class="widget-body">
				<div class="d-flex justify-content-between align-items-center">
					<div class="state">
						<h6>Omset</h6>
						<h2>290.000k</h2>
					</div>
					<div class="icon">
						<i class="ik ik-shopping-cart"></i>
					</div>
				</div>
				<small class="text-small mt-10 d-block">69% dari target</small>
			</div>
			<div class="progress progress-sm">
				<div class="progress-bar bg-info" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="widget">
			<div class="widget-body">
				<div class="d-flex justify-content-between align-items-center">
					<div class="state">
						<h6>Operasional</h6>
						<h2>41,410k</h2>
					</div>
					<div class="icon">
						<i class="ik ik-loader"></i>
					</div>
				</div>
				<small class="text-small mt-10 d-block">61% anggaran terpakai</small>
			</div>
			<div class="progress progress-sm">
				<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="widget">
			<div class="widget-body">
				<div class="d-flex justify-content-between align-items-center">
					<div class="state">
						<h6>Events</h6>
						<h2>410</h2>
					</div>
					<div class="icon">
						<i class="ik ik-calendar"></i>
					</div>
				</div>
				<small class="text-small mt-10 d-block">Total Events</small>
			</div>
			<div class="progress progress-sm">
				<div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="widget">
			<div class="widget-body">
				<div class="d-flex justify-content-between align-items-center">
					<div class="state">
						<h6>Kas</h6>
						<h2>41,410k</h2>
					</div>
					<div class="icon">
						<i class="ik ik-dollar-sign"></i>
					</div>
				</div>
				<small class="text-small mt-10 d-block">Total kas</small>
			</div>
			<div class="progress progress-sm">
				<div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-12">
						<h3 class="card-title">Rating Penjualan Customer</h3>
						<div id="visitfromworld" style="width:100%; height:350px"></div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="row mb-15">
							<div class="col-9">Anugrah</div>
							<div class="col-3 text-right">28%</div>
							<div class="col-12">
								<div class="progress progress-sm mt-5">
									<div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="row mb-15">
							<div class="col-9"> Eka Jaya Motor</div>
							<div class="col-3 text-right">21%</div>
							<div class="col-12">
								<div class="progress progress-sm mt-5">
									<div class="progress-bar bg-aqua" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="row mb-15">
							<div class="col-9"> Suratin</div>
							<div class="col-3 text-right">18%</div>
							<div class="col-12">
								<div class="progress progress-sm mt-5">
									<div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-9"> Galengan Motor</div>
							<div class="col-3 text-right">12%</div>
							<div class="col-12">
								<div class="progress progress-sm mt-5">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="min-height: 422px;">
			<div class="card-header"><h3>Sales Prestasi</h3></div>
			<div class="card-body">
				<div id="c3-donut-chart"></div>
			</div>
		</div>
	</div>
</div>
@include('BootstrapAdmin.BAPJTempo')

<div class="row">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				<h3>Recent Chat</h3>
				<div class="card-header-right">
					<ul class="list-unstyled card-option">
						<li><i class="ik ik-chevron-left action-toggle"></i></li>
						<li><i class="ik ik-minus minimize-card"></i></li>
						<li><i class="ik ik-x close-card"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-body chat-box scrollable" style="height:300px;">
				<ul class="chat-list">
					<li class="chat-item">
						<div class="chat-img"><img src="/assets/img/users/1.jpg" alt="user"></div>
						<div class="chat-content">
							<h6 class="font-medium">James Anderson</h6>
							<div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
						</div>
						<div class="chat-time">10:56 am</div>
					</li>
					<li class="chat-item">
						<div class="chat-img"><img src="/assets/img/users/2.jpg" alt="user"></div>
						<div class="chat-content">
							<h6 class="font-medium">Bianca Doe</h6>
							<div class="box bg-light-info">It’s Great opportunity to work.</div>
						</div>
						<div class="chat-time">10:57 am</div>
					</li>
					<li class="odd chat-item">
						<div class="chat-content">
							<div class="box bg-light-inverse">I would love to join the team.</div>
							<br>
						</div>
					</li>
					<li class="odd chat-item">
						<div class="chat-content">
							<div class="box bg-light-inverse">Whats budget of the new project.</div>
							<br>
						</div>
						<div class="chat-time">10:59 am</div>
					</li>
					<li class="chat-item">
						<div class="chat-img"><img src="/assets/img/users/3.jpg" alt="user"></div>
						<div class="chat-content">
							<h6 class="font-medium">Angelina Rhodes</h6>
							<div class="box bg-light-info">Well we have good budget for the project</div>
						</div>
						<div class="chat-time">11:00 am</div>
					</li>
				</ul>
			</div>
			<div class="card-footer chat-footer">
				<div class="input-wrap">
					<input type="text" placeholder="Type and enter" class="form-control">
				</div>
				<button type="button" class="btn btn-icon btn-theme"><i class="fa fa-paper-plane"></i></button>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<div class="d-flex">
					<h4 class="card-title">Weather Report</h4>
					<select class="form-control w-25 ml-auto">
						<option selected="">Today</option>
						<option value="1">Weekly</option>
					</select>
				</div>
				<div class="d-flex align-items-center flex-row mt-30">
					<div class="p-2 f-50 text-info"><i class="wi wi-day-showers"></i> <span>23<sup>°</sup></span></div>
					<div class="p-2">
					<h3 class="mb-0">Saturday</h3><small>Banglore, India</small></div>
				</div>
				<table class="table table-borderless">
					<tbody>
						<tr>
							<td>Wind</td>
							<td class="font-medium">ESE 17 mph</td>
						</tr>
						<tr>
							<td>Humidity</td>
							<td class="font-medium">83%</td>
						</tr>
						<tr>
							<td>Pressure</td>
							<td class="font-medium">28.56 in</td>
						</tr>
					</tbody>
				</table>
				<hr>
				<ul class="list-unstyled row text-center city-weather-days mb-0 mt-20">
					<li class="col"><i class="wi wi-day-sunny mr-5"></i><span>09:30</span><h3>20<sup>°</sup></h3></li>
					<li class="col"><i class="wi wi-day-cloudy mr-5"></i><span>11:30</span><h3>22<sup>°</sup></h3></li>
					<li class="col"><i class="wi wi-day-hail mr-5"></i><span>13:30</span><h3>25<sup>°</sup></h3></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="min-height: 422px;">
			<div class="card-header">
				<h3>Timeline</h3>
				<div class="card-header-right">
					<ul class="list-unstyled card-option">
						<li><i class="ik ik-chevron-left action-toggle"></i></li>
						<li><i class="ik ik-minus minimize-card"></i></li>
						<li><i class="ik ik-x close-card"></i></li>
					</ul>
				</div>
			</div>
			<div class="card-body timeline">
				<div class="header bg-theme" style="background-image: url('assets/img/placeholder/placeimg_400_200_nature.jpg')">
					<div class="color-overlay d-flex align-items-center">
						<div class="day-number">8</div>
						<div class="date-right">
							<div class="day-name">Monday</div>
							<div class="month">February 2018</div>
						</div>
					</div>                                
				</div>
				<ul>
					<li>
						<div class="bullet bg-pink"></div>
						<div class="time">11am</div>
						<div class="desc">
							<h3>Attendance</h3>
							<h4>Computer Class</h4>
						</div>
					</li>
					<li>
						<div class="bullet bg-green"></div>
						<div class="time">12pm</div>
						<div class="desc">
							<h3>Design Team</h3>
							<h4>Hangouts</h4>
						</div>
					</li>
					<li>
						<div class="bullet bg-orange"></div>
						<div class="time">2pm</div>
						<div class="desc">
							<h3>Finish</h3>
							<h4>Go to Home</h4>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="card">
	<div class="card-header row">
		<div class="col col-sm-3">
			<div class="dropdown d-inline-block">
				<a class="btn-icon checkbox-dropdown dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
				<div class="dropdown-menu" aria-labelledby="moreDropdown">
					<a class="dropdown-item" id="checkbox_select_all" href="javascript:void(0);">Select All</a>
					<a class="dropdown-item" id="checkbox_deselect_all" href="javascript:void(0);">Deselect All</a>
				</div>
			</div>
			<div class="card-options d-inline-block">
				<a href="#"><i class="ik ik-inbox"></i></a>
				<a href="#"><i class="ik ik-plus"></i></a>
				<a href="#"><i class="ik ik-rotate-cw"></i></a>
				<div class="dropdown d-inline-block">
					<a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">More Action</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col col-sm-6">
			<div class="card-search with-adv-search dropdown">
				<form action="">
					<input type="text" class="form-control" placeholder="Search.." required>
					<button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
					<button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
					<div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Full Name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<button class="btn btn-theme">Search</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col col-sm-3">
			<div class="card-options text-right">
				<span class="mr-5">1 - 50 of 2,500</span>
				<a href="#"><i class="ik ik-chevron-left"></i></a>
				<a href="#"><i class="ik ik-chevron-right"></i></a>
			</div>
		</div>
	</div>
	<div class="card-body p-0">
		<div class="list-item-wrap">
			<div class="list-item">
				<div class="item-inner">
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
						<span class="custom-control-label">&nbsp;</span>
					</label>
					<div class="list-title"><a href="javascript:void(0)">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</a></div>
					<div class="list-actions">
						<a href="#"><i class="ik ik-eye"></i></a>
						<a href="#"><i class="ik ik-inbox"></i></a>
						<a href="#"><i class="ik ik-edit-2"></i></a>
						<a href="#"><i class="ik ik-trash-2"></i></a>
					</div>
				</div>

				<div class="qickview-wrap">
					<div class="desc">
						<p>Fusce suscipit turpis a dolor posuere ornare at a ante. Quisque nec libero facilisis, egestas tortor eget, mattis dui. Curabitur viverra laoreet ligula at hendrerit. Nullam sollicitudin maximus leo, vel pulvinar orci semper id. Donec vehicula tempus enim a facilisis. Proin dignissim porttitor sem, sed pulvinar tortor gravida vitae.</p>
					</div>
				</div>
			</div>
			<div class="list-item">
				<div class="item-inner">
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option2">
						<span class="custom-control-label">&nbsp;</span>
					</label>
					<div class="list-title"><a href="javascript:void(0)">Aenean eu pharetra arcu, vitae elementum sem. Sed non ligula molestie, finibus lacus at, suscipit mi. Nunc luctus lacus vel felis blandit, eu finibus augue tincidunt.</a></div>
					<div class="list-actions">
						<a href="#"><i class="ik ik-eye"></i></a>
						<a href="#"><i class="ik ik-inbox"></i></a>
						<a href="#"><i class="ik ik-edit-2"></i></a>
						<a href="#"><i class="ik ik-trash-2"></i></a>
					</div>
				</div>
				<div class="qickview-wrap">
					<div class="desc">
						<p>Fusce suscipit turpis a dolor posuere ornare at a ante. Quisque nec libero facilisis, egestas tortor eget, mattis dui. Curabitur viverra laoreet ligula at hendrerit. Nullam sollicitudin maximus leo, vel pulvinar orci semper id. Donec vehicula tempus enim a facilisis. Proin dignissim porttitor sem, sed pulvinar tortor gravida vitae.</p>
					</div>
				</div>
			</div>
			<div class="list-item">
				<div class="item-inner">
					<label class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option3">
						<span class="custom-control-label">&nbsp;</span>
					</label>
					<div class="list-title"><a href="javascript:void(0)">Donec lectus augue, suscipit in sodales sit amet, semper sit amet enim. Duis pretium, nisi id pretium ornare, tortor nibh sodales tellus.</a></div>
					<div class="list-actions">
						<a href="#"><i class="ik ik-eye"></i></a>
						<a href="#"><i class="ik ik-inbox"></i></a>
						<a href="#"><i class="ik ik-edit-2"></i></a>
						<a href="#"><i class="ik ik-trash-2"></i></a>
					</div>
				</div>
				<div class="qickview-wrap">
					<div class="desc">
						<p>Fusce suscipit turpis a dolor posuere ornare at a ante. Quisque nec libero facilisis, egestas tortor eget, mattis dui. Curabitur viverra laoreet ligula at hendrerit. Nullam sollicitudin maximus leo, vel pulvinar orci semper id. Donec vehicula tempus enim a facilisis. Proin dignissim porttitor sem, sed pulvinar tortor gravida vitae.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
