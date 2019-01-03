<div id="sidebar" class="sidebar responsive ace-save-state" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
<script type="text/javascript">
	try{ace.settings.loadState('sidebar')}catch(e){}
</script>

<!-- 				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div> -->

	<ul class="nav nav-list" style="top: 0px;">
		<li class="">
			<a href="{{route('dashboard')}}">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Trang chủ</span>
			</a>

			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="{{route('company')}}">
				<i class="menu-icon fa fa-desktop"></i>
				Công ty						</a>
			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="#">
				<i class="menu-icon fa fa-shopping-bag"></i>
				Quản lý sản phẩm						</a>
		</li>
		<!--
		<li class="">
			<a href="index.php?act=adm_payments">
				<i class="menu-icon fa fa-shopping-cart" aria-hidden="true"></i>
										</a>
		</li>
		-->
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> Tài khoản </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="#">
						<i class="menu-icon fa fa-caret-right"></i>
						Tài khoản								
					</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="#">
						<i class="menu-icon fa fa-caret-right"></i>
						Quản lý vai trò								
					</a>
					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text">Thông tin chung </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="{{route('common')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Thông tin chung
					</a>
					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="#">
						<i class="menu-icon fa fa-caret-right"></i>
						Cấu hình tổng hợp
					</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="#">
						<i class="menu-icon fa fa-caret-right"></i>
						Banner								</a>
					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="#">
						<i class="menu-icon fa fa-caret-right"></i>
						Thư viện ảnh								</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="#">
						<i class="menu-icon fa fa-caret-right"></i>
						Thư viện tài liệu								</a>
					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="ace-icon fa fa-cogs" style="font-size:18px; padding:0 6px;"></i>
				<span class="menu-text"> Cài đặt </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>
						Quản lý chuyên mục									<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="">
							<a href="#">
								<i class="menu-icon fa fa-caret-right"></i>
								Sản phẩm										</a>
							<b class="arrow"></b>
						</li>
					</ul>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="">
							<a href="{{route('category-common')}}">
								<i class="menu-icon fa fa-caret-right"></i>
								Thông tin										</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="#">
						<i class="menu-icon fa fa-caret-right"></i>
						Cài đặt menu								</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="#">
						<i class="menu-icon fa fa-caret-right"></i>
						Mail Outgoing Server<!--Mail SMTP-->
					</a>
					<b class="arrow"></b>
				</li>
				<!-- <li class="">
					<a href="index.php?act=adm_provinces">
						<i class="menu-icon fa fa-caret-right"></i>
						Quản lý tỉnh thành								</a>
					<b class="arrow"></b>
				</li>
				
				<li class="">
					<a href="index.php?act=adm_type_transfer&mn=1">
						<i class="menu-icon fa fa-caret-right"></i>
						Quản lý vận chuyển								</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="index.php?act=adm_propay">
						<i class="menu-icon fa fa-caret-right"></i>
						Kiểu thanh toán								</a>
					<b class="arrow"></b>
				</li>
			-->
		</ul>
	</li>
		<!-- <li class="">
			<a href="index.php?act=adm_contacts" class="dropdown-toggle">
				<i class="menu-icon fa fa-tag"></i>
				<span class="menu-text"> Email Marketing </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="index.php?act=adm_contacts">
						<i class="menu-icon fa fa-caret-right"></i>
						Email Templates								</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="index.php?act=adm_contacts">
						<i class="menu-icon fa fa-caret-right"></i>
						Templates Send								</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="index.php?act=adm_contacts">
						<i class="menu-icon fa fa-caret-right"></i>
						Thống kê gửi Mail								</a>
					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="index.php?act=adm_contacts">
						<i class="menu-icon fa fa-caret-right"></i>
						Khách hàng nhận tin								</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li> -->
	</ul><!-- /.nav-list -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>