<!-- Left Panel -->
@php
$user = \Illuminate\Support\Facades\Auth::user();
@endphp
<nav class="navbar navbar-expand-sm navbar-default">
	<div id="main-menu" class="main-menu collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="{{url('/dashboard/admins')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
			</li>
			@if($user->is_superadmin())
			<li class="menu-item-has-children dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Manage Parts</a>
				<ul class="sub-menu children dropdown-menu">
					<li><i class="fa fa-id-badge"></i><a href="{{url('dashboard/all-parts')}}"> All Dealer Parts</a></li>
					<li><i class="fa fa-id-badge"></i><a href="{{url('dashboard/part-details')}}">All Part Details</a></li>
					<li><i class="fa fa-id-badge"></i><a href="{{url('dashboard/uploader')}}"> Upload Parts</a></li>
				</ul>
			</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Adverts</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon ti-shopping-cart-full"></i><a href="{{route('all-advertcategories')}}">Categories</a></li>
							<li><i class="menu-icon ti-shopping-cart-full"></i><a href="{{route('advertisers-adverts')}}">Advertisers</a></li>
							<li><i class="menu-icon ti-shopping-cart-full"></i><a href="{{route('hot-deals')}}">Adverts</a></li>
					</ul>
				</li>
				
				
					<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Forums</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon ti-shopping-cart-full"></i><a href="{{route('all-forums')}}">Vehicle Owners Forum</a></li>

					</ul>
				</li>	
				
				
				

			<li class="menu-item-has-children dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Bulk SMS</a>
					<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon ti-shopping-cart-full"></i><a href="{{url('dashboard/import-customers')}}"> Import Contact</a></li>
						<li><i class="menu-icon ti-shopping-cart-full"></i><a href="{{url('dashboard/bulk')}}"> Send SMS</a></li>
					</ul>
				</li>
			
			<li class="menu-item-has-children dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Manage Police Stations</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon ti-user"></i>	<a href="{{url('dashboard/all-stations')}}">All Police Stations  </a></li>
						<li><i class="menu-icon ti-user"></i>	<a href="{{url('dashboard/all-policeheads')}}">All Police Heads  </a></li>
						<li><i class="menu-icon ti-user"></i>	<a href="{{url('dashboard/all-police')}}">All Police  </a></li>
					</ul>
				</li>
				@endif
			<li class="menu-item-has-children dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Manage Users</a>
					<ul class="sub-menu children dropdown-menu">
				    @if($user->is_superadmin())
						<li><i class="menu-icon ti-user"></i><a href="{{url('dashboard/all-admins')}}"> All Admins</a></li>
						@endif
						<li><i class="menu-icon ti-user"></i><a href="{{url('dashboard/all-dealers')}}">All Dealers </a></li>
						<li><i class="menu-icon ti-user"></i>	<a href="{{url('dashboard/all-garages')}}">All Garages  </a></li>
						<li><i class="menu-icon ti-user"></i>	<a href="{{url('dashboard/all-users')}}">All Motorists  </a></li>
						<li><i class="menu-icon ti-user"></i>	<a href="{{url('dashboard/all-mechanics')}}">All Mechanics  </a></li>
				
					</ul>
				</li>

				@if($user->is_superadmin())
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Manage Cars</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon ti-car"></i><a href="{{url('dashboard/all-cars')}}"> Cars</a></li>
							<li><i class="menu-icon ti-car"></i><a href="{{url('dashboard/all-car-models')}}">Car Models </a></li>
						</ul>
					</li>
				

					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Manage Payments</a>
							<ul class="sub-menu children dropdown-menu">
								<li><i class="menu-icon ti-car"></i><a href="{{url('dashboard/all-payment-gateways')}}"> Payment Methods</a></li>
								<li><i class="menu-icon ti-car"></i><a href="{{url('dashboard/all-packages')}}">Packages </a></li>

								<li><i class="menu-icon ti-credit-card"></i><a href="{{url('dashboard/all-transactions')}}">Transactions </a></li>
							</ul>
						</li>
						@endif
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Manage Orders</a>
								<ul class="sub-menu children dropdown-menu">
									<li><i class="menu-icon ti-shopping-cart-full"></i><a href="{{url('dashboard/all-orders')}}"> All Orders</a></li>
								</ul>
							</li>
						@if($user->is_superadmin())
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Manage Settings</a>
								<ul class="sub-menu children dropdown-menu">
									<li><i class="menu-icon ti-server"></i><a href="#"> Activity Log</a></li>
								</ul>
							</li>
							@endif


						<li class="menu-item-has-children dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Manage Agents</a>
									<ul class="sub-menu children dropdown-menu">
										<li><i class="menu-icon ti-user"></i>	<a href="{{url('dashboard/all-agents')}}">All Agents  </a></li>
										<li><i class="menu-icon ti-server"></i><a href="{{url('dashboard/all-referral')}}">Agent Referrals</a></li>

										<li><i class="menu-icon ti-server"></i><a href="{{url('dashboard/agent-payments')}}">Manage Payments</a></li>
									</ul>
								</li>
					</div><!-- /.navbar-collapse -->
				</nav>
				<!-- /#left-panel -->
