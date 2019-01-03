<div class="navbar-header pull-left">
	<a href="#" class="navbar-brand">
		<small>
			<i class="fa fa-leaf"></i>
			Admin CMS Laravel 
		</small>
	</a>
</div>
<div class="navbar-buttons navbar-header pull-right" role="navigation">
	<ul class="nav ace-nav" style="">
		<li class="purple dropdown-modal">
			<a data-toggle="dropdown" class="dropdown-toggle" href="#">
										<img src="{{asset('backend/images/vn.png')}}">
										<span class="badge badge-important"></span>
			</a>

			<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
				<li class="dropdown-header">
					<i class="ace-icon fa fa-globe"></i>
					Language
				</li>

				<li class="dropdown-content ace-scroll" style="position: relative;"><div class="scroll-track" style="display: none;"><div class="scroll-bar"></div></div><div class="scroll-content" style="max-height: 200px;">
					<ul class="dropdown-menu dropdown-navbar navbar-pink">
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">
										<img src="{{asset('backend/images/vn.png')}}">
										Việt Nam
									</span>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">
										<img src="{{asset('backend/images/en.png')}}">
										English
									</span>
								</div>
							</a>
						</li>
					</ul>
				</div></li>
			</ul>
		</li>
		<li class="light-blue dropdown-modal">
			<a data-toggle="dropdown" href="#" class="dropdown-toggle">
				<i class="fa fa-user" aria-hidden="true" style="width:20px; font: normal normal normal 20px/1 FontAwesome;"></i>
				<span class="user-info">
					<small>Chào !</small>
					 {{ Auth::user()->name }}</span>

				<i class="ace-icon fa fa-caret-down"></i>
			</a>
			<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
<!-- 								<li>
							<a href="#">
								<i class="ace-icon fa fa-cog"></i>
								Settings
							</a>
						</li>

						<li>
							<a href="profile.html">
								<i class="ace-icon fa fa-user"></i>
								Profile
							</a>
						</li> -->

						<!-- <li class="divider"></li> -->

						<li>
							<a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.navbar-container -->
</div>