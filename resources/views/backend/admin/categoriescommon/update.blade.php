
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/wstyle.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/bootstrap.min.css')}}" />
<script type="text/javascript" src="{{asset('backend/js/jquery-2.0.3.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('backend/js/validator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/webtoolkit.base64.js')}}"></script>
<script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
</head>
<div align="left">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
 <tr bgcolor="#FFF5EA">
    <td width="17" height="40" class='menu'>&nbsp;</td>
    <td width="271" class='menu'>Sửa chuyên mục</td>
    <td width="797" class='menu'>&nbsp;</td>
  </tr>
 </table>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="form-common col-md-6" >
    <form data-toggle="validator" role="form" action="{{route('updatecategory')}}" enctype="multipart/form-data" method="post">
        @foreach($data as $info)             
        <div class="form-group">
          <label class="control-label">Tên chuyên mục</label>
          <input class="form-control" name="SNAME" id="inputSname" value="{{$info->SNAME}}" type="text" placeholder="Tên chuyên mục" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label class="control-label">Thứ tự</label>
          <input class="form-control" type="tel" pattern="^[0-9]{1,}$" data-minlength="1" maxlength="11"  name="IORDER" id="inputIorder" value="{{$info->IORDER}}" placeholder="Thứ tự hiển thị">
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
           <label class="control-label">Trạng thái</label>
            <SELECT  class="form-control" style="WIDTH: 205px;" size=1 id="inputStatus" name="STATUS">
              @if($info->STATUS == 'Active')
              <option value="Active" selected>Active</option>
              <option value="Inactive" >Inactive</option>
              <option value="Deleted" >Deleted</option>
              @elseif($info->STATUS == 'Inactive')
              <option value="Active" >Active</option>
              <option value="Inactive" selected>Inactive</option>
              <option value="Deleted" >Deleted</option>
              else
              <option value="Active" >Active</option>
              <option value="Inactive" >Inactive</option>
              <option value="Deleted" selected>Deleted</option>
              @endif
            </SELECT>
           <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label class="control-label">Ảnh đại diện</label>
         <input  class="form-control" name="img" type="file" id="inputPicture" size="25" >
         <input type="hidden" name="PICTURE" value="{{$info->PICTURE}}">
           <img style="width:150px;height:150px;" src="{{url('Images/bin/Imagenews/'.$info->PICTURE)}}">
          <div class="help-block with-errors"></div>
        </div>
         <div class="form-group">
          <label class="control-label">Nội dung sơ lượt </label>
          <textarea class="form-control" name="SCONTENTSHORT" rows="4" cols="52" onKeyUp="getLengthtextarear(this,500);" data-error="Vui lòng nhập nội dung mô tả sơ lượt" id="inputSCONTENTSHORT" name="address" placeholder="Nội dung sơ lượt"  required="">{{$info->SCONTENTSHORT}}</textarea>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label class="control-label">Nội dung bài viết </label>
          <textarea class="form-control" rows="3" data-error="Nội dung mô tả bài viết" id="contentouts" name="SCONTENTS" placeholder="Nội dung bài viết"  required="">{{$info->SCONTENTS}}</textarea>
          <script>
                var editor = CKEDITOR.replace('contentouts');
               CKEDITOR.replace( 'editor');
          </script>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
           <label class="control-label">Cách hiển thị thông tin</label>
            <SELECT  class="form-control"  size=1 id="ht" name="HT">
              @if($info->HT == 1)
	              <option value="1" selected>Tất cả mục con theo danh sách dạng tin tức</option>
	              <option value="2" >Hiển thị mô tả cho mục này</option>
	              <option value="">Chọn cách hiển thị...</option>
	          @elseif($info->HT ==2)
	          	  <option value="1" >Tất cả mục con theo danh sách dạng tin tức</option>
	              <option value="2" selected>Hiển thị mô tả cho mục này</option>
	              <option value="">Chọn cách hiển thị...</option>
              @endif
            </SELECT>
           <div class="help-block with-errors"></div>
        </div>
        <input type="hidden" name="MN" value="1"  >
        <input type="hidden" name="ID_TYPE" value="{{$info->ID_TYPE}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input class="btn btn-default" type="submit" name="sub_header" value="Lưu">
        <input type="button" name="cancel" value="Đóng" onClick="javascript:window.close();" class="btn btn-default" >
        @endforeach
    </form>
  </div>
  <div class="col-md-3"></div>
</div>
</div>

<script language="javascript1.2">
               function checkform(){
                    
                    if (document.f1.catname.value==""){
                                        alert("Please enter Category name!");
                                        document.f1.catname.focus();
                                        return false;
                                }
                     if (document.f1.iorder.value==""){
                                        alert("Please enter order!");
                                        document.f1.iorder.focus();
                                        return false;
                                }
                      
                     getcontens();
           
           return true;
               }
         
         function getLengthtextarear(item1,num)
      {
        var str=item1.value;
        if (item1.value.length>eval(num))
          {
            alert("Độ dài tối đa là "+num);
            item1.value=str.substring(0,eval(num));
          }
      }
      
      function CKupdate() {
      for (instance in CKEDITOR.instances)
      CKEDITOR.instances[instance].updateElement();
    }
    
      function getcontens(){
        //updateTextArea('contentout');
      CKupdate();
      document.getElementById("contentencode").value = Base64.encode($("#contentout").val());
    }
            
</script>