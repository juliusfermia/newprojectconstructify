<div class="row">
	<div class="col-lg-6">
		<div class="panel lobidisable panel-bd">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>Bordered table</h4>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Abdullah</td>
								<td>Bin</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Md</td>
								<td>Salah</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Ibrahim</td>
								<td>Hossain</td>
								<td>@twitter</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>Mubin</td>
								<td>Khan</td>
								<td>@mubin15</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>Ruzel</td>
								<td>Ahmad</td>
								<td>@Ruzeld</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-12">
		<div class="row stat_area">
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
				<div class="statistic-box dash2">
					<i class="ti-world statistic_icon"></i>
					<div class=small>Social users </div>
					<h2><span class=count-number>789</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span></h2>
					<div class="sparkline3 text-center"></div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
				<div class="statistic-box dash2">
					<i class="ti-user statistic_icon"></i>
					<div class=small>Total users</div>
					<h2><span class=count-number>321</span>M <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span> </h2>
					<div class="sparkline1 text-center"></div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
				<div class="statistic-box dash2">
					<i class="ti-bag statistic_icon"></i>
					<div class=small>Total Sales</div>
					<h2><span class=count-number>5489</span>$ <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2>
					<div class="sparkline4 text-center"></div>
				</div>
			</div>
			<div class="col-xs-6 hidden-sm col-md-3 col-lg-6">
				<div class="statistic-box dash2">
					<i class="ti-server statistic_icon"></i>
					<div class=small>Visitors this Month</div>
					<h2><span class=count-number>696</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span></h2>
					<div class="sparkline2 text-center"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6 hidden-420">
		<div class="panel panel-bd lobidrag">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>Bar chart</h4>
				</div>
			</div>
			<div class="panel-body">
				<canvas id="barChart" height="200"></canvas>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 hidden-420">
		<div class="panel panel-bd lobidrag">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>Rader chart</h4>
				</div>
			</div>
			<div class="panel-body">
				<canvas id="radarChart" height="200"></canvas>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-bd lobidrag">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>FooTable with row toggler, sorting, filter and pagination </h4>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<input type="text" class="form-control input-sm m-b-15" id="filter" placeholder="Search in table">
					<table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter>
						<thead>
							<tr>
								<th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Job Title</th>
								<th>Started On</th>
								<th data-hide="all">Date of Birth</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Dennise</td>
								<td>Fuhrman</td>
								<td>High School History Teacher</td>
								<td>November 8th 2011</td>
								<td>July 25th 1960</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Elodia</td>
								<td>Weisz</td>
								<td>Wallpaperer Helper</td>
								<td>October 15th 2010</td>
								<td>March 30th 1982</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Raeann</td>
								<td>Haner</td>
								<td>Internal Medicine Nurse Practitioner</td>
								<td>November 28th 2013</td>
								<td>February 26th 1966</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Junie</td>
								<td>Landa</td>
								<td>Offbearer</td>
								<td>October 31st 2010</td>
								<td>March 29th 1966</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Solomon</td>
								<td>Bittinger</td>
								<td>Roller Skater</td>
								<td>December 29th 2011</td>
								<td>September 22nd 1964</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Bar</td>
								<td>Lewis</td>
								<td>Clown</td>
								<td>November 12th 2012</td>
								<td>August 4th 1991</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Usha</td>
								<td>Leak</td>
								<td>Ships Electronic Warfare Officer</td>
								<td>August 14th 2012</td>
								<td>November 20th 1979</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Lorriane</td>
								<td>Cooke</td>
								<td>Technical Services Librarian</td>
								<td>September 21st 2010</td>
								<td>April 7th 1969</td>
							</tr>
							<tr>
								<td>9</td>
								<td>Lorriane</td>
								<td>Cooke</td>
								<td>Technical Services Librarian</td>
								<td>September 21st 2010</td>
								<td>April 7th 1969</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4 col-sm-6 col-lg-4">
		<div class="panel panel-bd lobidisable">
			<div class=panel-heading>
				<div class=panel-title>
					<i class=ti-email></i>
					<h4>Messages</h4>
				</div>
			</div>
			<div class=panel-body>
				<div class=message_inner>
					<div class=message_widgets>
						<a href="#">
							<div class=inbox-item>
								<div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
								<strong class=inbox-item-author>Farzana Yasmin</strong>
								<span class=inbox-item-date>-13:40 PM</span>
								<p class=inbox-item-text>Hey! there I'm available...</p>
								<span class="profile-status available pull-right"></span>
							</div>
						</a>
						<a href="#">
							<div class=inbox-item>
								<div class=inbox-item-img><img src="assets/dist/img/avatar2.png" class=img-circle alt=""></div>
								<strong class=inbox-item-author>Mubin Khan</strong>
								<span class=inbox-item-date>-13:40 PM</span>
								<p class=inbox-item-text>Hey! there I'm available...</p>
								<span class="profile-status away pull-right"></span>
							</div>
						</a>
						<a href="#">
							<div class=inbox-item>
								<div class=inbox-item-img><img src="assets/dist/img/avatar3.png" class=img-circle alt=""></div>
								<strong class=inbox-item-author>Mozammel Hoque</strong>
								<span class=inbox-item-date>-13:40 PM</span>
								<p class=inbox-item-text>Hey! there I'm available...</p>
								<span class="profile-status busy pull-right"></span>
							</div>
						</a>
						<a href="#">
							<div class=inbox-item>
								<div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
								<strong class=inbox-item-author>Tanzil Ahmed</strong>
								<span class=inbox-item-date>-13:40 PM</span>
								<p class=inbox-item-text>Hey! there I'm available...</p>
								<span class="profile-status offline pull-right"></span>
							</div>
						</a>
						<a href="#">
							<div class=inbox-item>
								<div class=inbox-item-img><img src="assets/dist/img/avatar5.png" class=img-circle alt=""></div>
								<strong class=inbox-item-author>Amir Khan</strong>
								<span class=inbox-item-date>-13:40 PM</span>
								<p class=inbox-item-text>Hey! there I'm available...</p>
								<span class="profile-status available pull-right"></span>
							</div>
						</a>
						<a href="#">
							<div class=inbox-item>
								<div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
								<strong class=inbox-item-author>Salman Khan</strong>
								<span class=inbox-item-date>-13:40 PM</span>
								<p class=inbox-item-text>Hey! there I'm available...</p>
								<span class="profile-status available pull-right"></span>
							</div>
						</a>
						<a href="#">
							<div class=inbox-item>
								<div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
								<strong class=inbox-item-author>Farzana Yasmin</strong>
								<span class=inbox-item-date>-13:40 PM</span>
								<p class=inbox-item-text>Hey! there I'm available...</p>
								<span class="profile-status available pull-right"></span>
							</div>
						</a>
						<a href="#">
							<div class=inbox-item>
								<div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
								<strong class=inbox-item-author>Tanzil Ahmed</strong>
								<span class=inbox-item-date>-13:40 PM</span>
								<p class=inbox-item-text>Hey! there I'm available...</p>
								<span class="profile-status offline pull-right"></span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 hidden-sm hidden-xs">
		<div class="panel panel-bd lobidisable lg-mb0">
			<div class=panel-heading>
				<div class=panel-title>
					<i class=ti-archive></i>
					<h4>Calender</h4>
				</div>
			</div>
			<div class=panel-body>
				<div class=monthly_calender>
					<div class=monthly id=m_calendar></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-sm-6 hidden-xs">
		<div class="panel panel-bd lobidisable lg-mb0">
			<div class=panel-heading>
				<div class=panel-title>
					<i class=ti-stats-up></i>
					<h4>Recent Activities</h4>
				</div>
			</div>
			<div class=panel-body>
				<ul class="activity-list list-unstyled">
					<li class=activity-purple>
						<small class=text-muted>9 minutes ago</small>
						<p>You <span class="label label-success label-pill">recommended</span> Karen Ortega</p>
					</li>
					<li class=activity-danger>
						<small class=text-muted>15 minutes ago</small>
						<p>You followed Olivia Williamson</p>
					</li>
					<li class=activity-warning>
						<small class=text-muted>22 minutes ago</small>
						<p>You <span class=text-danger>subscribed</span> to Harold Fuller</p>
					</li>
					<li class=activity-primary>
						<small class=text-muted>30 minutes ago</small>
						<p>You updated your profile picture</p>
					</li>
					<li>
						<small class=text-muted>35 minutes ago</small>
						<p>You deleted homepage.psd</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- START CORE PLUGINS -->
<script src="assets/plugins/jQuery/jquery-1.12.4.min.js"></script>
<script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/fastclick/fastclick.min.js"></script>
<script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
<script src="assets/plugins/lobipanel/lobipanel.min.js"></script>
<!-- sparkline Js -->
<script src="assets/plugins/sparkline/sparkline.min.js"></script>
<!-- counterup Js -->
<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
<script src="assets/plugins/counterup/waypoints.js"></script>
<!-- emojionearea Js -->
<script src="assets/plugins/emojionearea/emojionearea.min.js"></script>
<script src="assets/plugins/monthly/monthly.min.js"></script>
<!-- chartJs Js -->
<script src="assets/plugins/chartJs/Chart.min.js"></script>
<!-- footable-bootstrap Js -->
<script src="assets/plugins/footable-bootstrap/js/footable.all.min.js"></script>
<!-- START THEME LABEL SCRIPT -->
<script src="assets/dist/js/page/dashboard2.js"></script>
<script src="assets/dist/js/theme.js"></script>