@extends('backend.layout.app')
@section('content')
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
	<div class="row">
	<div class="col-xs-12">
	<h3 class="header smaller lighter green" style="margin-bottom: 60px;font-family: sans-serif; font-size:18px; margin-left:10px;">Chào Mừng Quản Trị Viên!</h3>
	<p></p>
        <a style="padding:80px" href="{{route('company')}}"><img src="backend/images/icon-cty.png" alt="cty"></a>
		<a style="padding:80px" href="#"><img src="backend/images/icon-thongtinchung.png" alt="thong tin"></a>
       	<a style="padding:80px" href="#"><img src="backend/images/icon-sp.png" alt="san pham"></a>
       	<hr style="border: none">
      	<a style="padding:80px" href="#"><img src="backend/images/icon-email-mark.png" alt=""></a>
		<a style="padding:80px" href="#"><img src="backend/images/icon-caidat.png" alt=""></a>
		<a style="padding:80px" href="#"><img src="backend/images/icon-taikhoan.png" alt=""></a>		
    </div><!-- end box-item-quanly-->
</div>					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div>
@endsection