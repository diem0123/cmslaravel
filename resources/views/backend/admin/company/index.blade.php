@extends('backend.layout.app')
@section('content')
<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<table border="0" width="1000" cellspacing="0" cellpadding="0">
	<tbody><tr>
		<td height="1" bgcolor="#FFF5EA"></td>
	</tr>
</tbody></table>
<table border="0" width="1000" cellspacing="0" cellpadding="0">
	<tbody><tr>
		<td height="5"></td>
	</tr>
</tbody></table>
<table border="0" width="1000" cellspacing="0" cellpadding="0" bgcolor="#FFF5EA">
					<tbody><tr>
						<td width="10"><img src="{{asset('backend/images/bg-title.gif')}}" height="25"></td>
						<td class="menu" align="left">Thông tin Công ty </td>
					</tr>
				</tbody></table>
<table border="0" width="1000" cellspacing="0" cellpadding="0">
		<tbody><tr>
			<td width="1" rowspan="3" background="{{asset('backend/images/line-doc.jpg')}}">
			</td>
			<td width="999" height="1" background="{{asset('backend/images/line-ngang.jpg')}}">
			</td>
			<td width="1" rowspan="3" background="{{asset('backend/images/line-doc.jpg')}}">
			</td>
		</tr>
		<tr>
			<td width="999">				
<table border="0" width="100%">
	<tbody><tr>
		<td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tbody><tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu">&nbsp;</td>
    <td class="menu" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu" align="left">Tên Công ty</td>
    <td width="388" class="title_xam" align="left">{{$company->COM_NAME}}</td>
    <td width="425" class="menu" rowspan="19" valign="top" align="left"></td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu">&nbsp;</td>
    <td width="388" class="menu">&nbsp;	</td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu" align="left">Tên viết tắt </td>
    <td width="388" class="title_xam" align="left">{{$company->SHORT_NAME}}</td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu">&nbsp;</td>
    <td width="388" class="menu">&nbsp;</td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu" align="left">Email    </td>
    <td width="388" class="title_xam" align="left">{{$company->EMAIL}}</td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu">&nbsp;</td>
    <td width="388" class="menu">&nbsp;</td>
  </tr>
<tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu" align="left">Điện thoại</td>
    <td width="388" class="title_xam" align="left">{{$company->TEL}}</td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu">&nbsp;</td>
    <td width="388" class="menu">&nbsp;</td>
  </tr>
<tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu" align="left">Fax </td>
    <td width="388" class="title_xam" align="left">{{$company->FAX}}</td>
  </tr>
  <tr>
    <td class="menu">&nbsp;</td>
    <td class="menu">&nbsp;</td>
    <td class="menu">&nbsp;</td>
  </tr>
  <tr>
    <td class="menu">&nbsp;</td>
    <td class="menu">Di động</td>
    <td class="title_xam">{{$company->TEL}}</td>
  </tr>
  <tr>
    <td class="menu">&nbsp;</td>
    <td class="menu">&nbsp;</td>
    <td class="menu">&nbsp;</td>
  </tr>
  <tr>
    <td class="menu">&nbsp;</td>
    <td class="menu">Skype</td>
    <td class="title_xam"></td>
  </tr>
  <tr>
    <td class="menu">&nbsp;</td>
    <td class="menu">&nbsp;</td>
    <td class="menu">&nbsp;</td>
  </tr>
  <tr>
    <td class="menu">&nbsp;</td>
    <td class="menu">Yahoo</td>
    <td class="title_xam"></td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu">&nbsp;</td>
    <td width="388" class="menu">&nbsp;</td>
  </tr>
<tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu" align="left">Website</td>
    <td width="388" class="title_xam" align="left">{{$company->WEBSITE}}</td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu">&nbsp;</td>
    <td width="388" class="menu">&nbsp;</td>
  </tr>
<tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu" align="left">Địa chỉ </td>
    <td width="388" class="title_xam" align="left">{{$company->ADDRESS}}</td>
  </tr>
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu">&nbsp;</td>
    <td class="menu" colspan="2">&nbsp;</td>
  </tr>  
  <tr>
    <td width="17" class="menu">&nbsp;</td>
    <td width="162" class="menu">&nbsp;</td>
    <td class="menu" colspan="2"><input type="button" name="editcom" value="Hiệu chỉnh công ty" class="admbtn" onclick="window.open('{{route('update-company')}}','Editcompopup','scrollbars=yes,status=yes,toolbar=no,location=0,directories=0,status=yes,menubar=0,resizable=0,width=800,height=400');"></td>
  </tr>
    <tr>
    <td class="menu" valign="top" height="95" width="17">&nbsp;</td>
    <td class="menu" valign="top" height="95" width="162" align="left">&nbsp;</td>
    <td class="content" height="95" colspan="2" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td class="menu" valign="top" width="17">&nbsp;</td>
    <td class="menu" valign="top" width="162">&nbsp;</td>
    <td class="menu" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td class="menu" valign="top" width="17">&nbsp;</td>
    <td class="menu" valign="top" width="162" align="left"></td>
    <td class="menu" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center" height="41" class="menu">&nbsp;    </td>
  </tr>
</tbody></table>		</td>
	</tr>
</tbody></table>
</td>
		</tr>
		<tr>
			<td width="999" height="1" background="{{asset('backend/images/line-ngang.jpg')}}">
			</td>
		</tr>
</tbody></table>
<table border="0" width="1000" cellspacing="0" cellpadding="0">
	<tbody><tr>
		<td height="5"></td>
	</tr>
</tbody></table>					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div>
@endsection