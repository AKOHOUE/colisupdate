<div class="header">

				<!-- Logo -->
	            <div class="header-left">
	                <a href="#" class="logo">
						<!-- <img src="{{ asset('assets/back/img/logo.png') }}" alt="Logo"> -->
					</a>
					<a href="#l" class="logo logo-small">
						<!-- <img src="{{ asset('assets/back/img/logo-small.png') }}" alt="Logo" width="30" height="30"> -->
					</a>
	            </div>
				<!-- /Logo -->

{{-- 				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a> --}}

				{{-- <a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a> --}}

				<ul class="nav user-menu">

					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">

							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													{{-- <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/back/img/profiles/avatar-02.jpg') }}"> --}}
												</span>

											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													{{-- <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/back/img/profiles/avatar-11.jpg') }}"> --}}
												</span>

											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													{{-- <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/back/img/profiles/avatar-17.jpg') }}"> --}}
												</span>

											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													{{-- <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/back/img/profiles/avatar-13.jpg') }}"> --}}
												</span>

											</div>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</li>
					<!-- /Notifications -->

					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							{{-- <span class="user-img"><img class="rounded-circle" src="{{ asset('assets/back/img/profiles/avatar-01.jpg') }}" width="31" alt="Ryan Taylor"></span> --}}
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								{{-- <div class="avatar avatar-sm">
									<img src="{{ asset('assets/back/img/profiles/avatar-01.jpg') }}" alt="User Image" class="avatar-img rounded-circle">
								</div> --}}
								<div class="user-text">
									{{-- <h6>Ryan Taylor</h6> --}}
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							{{-- <a class="dropdown-item" href="#">Mon Compte</a> --}}
							{{-- <a class="dropdown-item" href="#">Mes Réglages</a> --}}
							<a class="dropdown-item" href="{{ route('back.logout') }}">Déconnexion</a>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
				<!-- /Header Right Menu -->

	        </div>
