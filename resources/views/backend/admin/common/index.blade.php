@extends('backend.layout.app')
@section('content')
 <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
			<li>
                <a href="{{route('common')}}">Danh sách thông tin</a>
            </li>
        </ul><!-- /.breadcrumb -->
    </div>
 <div class="container">
 	<div class="col-lg-4">
        <form method="post" action="">
          <div class="form-group">
            <select class="form-control" name="id_type" id="id_type">
              <option value="0" disable="true" selected="true">Chuyên mục cấp 1 ...</option>
                @foreach ($list_type as $key => $value)
                  <option value="{{$value->ID_TYPE}}">{{ $value->SNAME }}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group">
            <select class="form-control" name="id_cat" id="id_cat">
              <option value="0" disable="true" selected="true">Chuyên mục cấp 2 ...</option>
            </select>
          </div>

          <div class="form-group">
            <select class="form-control" name="id_cat_sub" id="id_cat_sub">
              <option value="0" disable="true" selected="true">Chuyên mục cấp 3 ...</option>
            </select>
          </div>
		<div class="form-group">
			<input class="admbtn" type="button" name="go" value="Filter" onclick="filtertype();" />
            <button class="admbtn" type="button" name="ct1" value="" onclick="window.open('{{route('addcommon')}}','Addcommonpopup','scrollbars=yes,status=yes,toolbar=no,location=0,directories=0,status=yes,menubar=0,resizable=0,width=\'100%\',height=\'100%\'');">Thêm thành phần</button>
            <button class="admbtn" type="button" name="ct1" value="" onclick="delit('',document.forms.f1.ck, document.forms.f1.vlid);">Xóa thành phần</button> </td>
			{{csrf_field()}}
		</div>
        </form>
      </div>
    </div>

	<table width="98%" id="dynamic-table" class="table table-striped table-bordered table-hover ">
        <thead>
                <tr bgcolor="#EEEEEE">
                    <td style="color:red"><input name="allbox" type="checkbox" onclick="checkall(this.form);" title="Check All"></td>
                    <th style="color:red">Id
                </td>
                <th style="color:red">Tên thành phần </th>
                <th style="color:red">Ngày tạo </td>
                <th style="color:red">Ngày cập nhật </th>
                <th style="color:red">Trạng thái </th>
                <th style="color:red">Đăng bởi </th>
                <td style="color:red">Hành động </td>
        	</tr>
        </thead>
        <tbody>
            <tr bgcolor="#FFFFFF">
                <td width="20" height="25"><input type="checkbox" name="ck" value="31"></td>
                <td width="56">31</td>
                <td width="312" height="25"><a href="#" class="menu" title="Chăm sóc khách hàng" onclick="window.open('?act=adm_viewcommon&idcommon=31&ac=v','Viewcommonpopup','scrollbars=yes,status=yes,toolbar=no,location=0,directories=0,status=yes,menubar=0,resizable=0,width=\'100%\',height=\'100%\'');">Chăm sóc khách hàng</a></td>
                <td width="143" height="25">15-05-2018 15:06:19</td>
                <td width="144" height="25">15-05-2018 15:06:19</td>
                <td width="98" height="25" class="menu">Active</td>
                <td width="119" class="menu">Admin</td>
                <td width="130" align="center">
                    <a href="#" title="View" onclick="window.open('?act=adm_viewcommon&idcommon=31&ac=v','Viewcommonpopup','scrollbars=yes,status=yes,toolbar=no,location=0,directories=0,status=yes,menubar=0,resizable=0,width=\'100%\',height=\'100%\'');"><img src="{{asset('backend/images/magnifier.png')}}" width="16" alt="View"></a>
                    <a href="#" title="Edit" onclick="window.open('?act=adm_editcommon&idcommon=31&ac=e','Editcommonpopup','scrollbars=yes,status=yes,toolbar=no,location=0,directories=0,status=yes,menubar=0,resizable=0,width=\'100%\',height=\'100%\'');"><img src="{{asset('backend/images/icon_edit.png')}}" width="16" alt="Edit"></a>
                    <a href="#" title="Delete" onclick="delit(31,'','');"><img src="{{asset('backend/images/icon_delete.png')}}" width="16" alt="Delete"></a>
                </td>

            </tr>
        </tbody>
    </table>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $('#id_type').on('change', function(e){
        console.log(e);
        var id_type = e.target.value;
        $.get('commoncat?id_type=' + id_type,function(data) {
          console.log(data);
          $('#id_cat').empty();
          $('#id_cat').append('<option value="0" disable="true" selected="true">Chuyên mục cấp 2 ...</option>');

          $('#id_cat_sub').empty();
          $('#id_cat_sub').append('<option value="0" disable="true" selected="true">Chuyên mục cấp 3 ...</option>');

          $.each(data, function(index, regenciesObj){
            $('#id_cat').append('<option value="'+ regenciesObj.ID_CAT +'">'+ regenciesObj.SNAME +'</option>');
          });
        });
      });

      $('#id_cat').on('change', function(e){
        console.log(e);
        var id_cat = e.target.value;
        $.get('commoncat_sub?id_cat=' + id_cat,function(data) {
          console.log(data);
          $('#id_cat_sub').empty();
          $('#id_cat_sub').append('<option value="0" disable="true" selected="true">Chuyên mục cấp 3 ...</option>');

          $.each(data, function(index, districtsObj){
            $('#id_cat_sub').append('<option value="'+ districtsObj.ID_CAT_SUB +'">'+ districtsObj.SNAME +'</option>');
          });
        });
      });

     </script>

@endsection