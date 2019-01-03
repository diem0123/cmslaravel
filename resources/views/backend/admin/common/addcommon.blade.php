<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thêm thành phần</title>
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/wstyle.css')}}" />
<script type="text/javascript" src="{{asset('backend/js/webtoolkit.base64.js')}}"></script>
<script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('backend/js/validator.min.js')}}"></script>
</head>
<div align="left">
<form action="{{route('addcommonaction')}}" method="post"  enctype="multipart/form-data" name="f1" data-toggle="validator" role="form"> 
<table width="100%"  border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
 <tr bgcolor="#FFF5EA">
   <td class='menu'>&nbsp;</td>
   <td colspan="2" class='menu'>&nbsp;</td>
 </tr>
 <tr bgcolor="#FFF5EA">
    <td width="16" class='menu'>&nbsp;</td>
    <td colspan="2" class='menu'>Thêm thông tin </td>
    </tr>
 <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>&nbsp;</td>
    <td width="613" class='menu'>&nbsp;</td>
  </tr>
 <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>Chọn chuyên mục cấp 1 <font size="1" color="#D7261C">*</font></td>
    <td width="613" class='menu'>
      <select class="textbox" style="width:376px;" name="idtype" id="idtype" required>
        <option value="" disable="true" >Chuyên mục cấp 1 ...</option>
          @foreach ($list_type as $key => $value)
            <option value="{{$value->ID_TYPE}}" 
              @if(old('idtype') == $value->ID_TYPE)
              selected ="true"
              @endif >
              {{ $value->SNAME }}
            </option>
          @endforeach
      </select>
      @if ($errors->has('idtype'))
           <p class="help is-danger" style="margin-top:10px;color:red;">{{ $errors->first('idtype') }}</p>
      @endif
    </td>
  </tr>
 <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'></td>
    <td width="613" class='menu'></td>
  </tr>
  <tr>
    <td class='menu'>&nbsp;</td>
    <td class='menu'>Chọn chuyên mục cấp 2 <font size="1" color="#D7261C">*</font></td>
    <td class='menu' id="sametype">
        <select class="textbox" style="width:376px;" name="typecat" id="typecat" required>
          <option value="" disable="true" selected="true">Chuyên mục cấp 2 ...</option>
          @if(old('typecat'))
             <option value="{{old('typecat')}}" disable="true" selected="true">{{old('typecat')}}</option>
          @endif
        </select>
        @if ($errors->has('typecat'))
             <p class="help is-danger" style="margin-top:10px;color:red;">{{ $errors->first('typecat') }}</p>
        @endif
    </td>
  </tr>
  <tr>
    <td class='menu'>&nbsp;</td>
    <td class='menu'>&nbsp;</td>
    <td class='menu'>&nbsp;</td>
  </tr>
  <tr  id = "r1">
    <td class='menu'>&nbsp;</td>
    <td class='menu'>Chọn chuyên mục cấp 3 </td>
    <td class='menu' id="samesubcat">
        <select class="textbox" style="width:376px;" name="subcat" id="subcat">
          <option value="" disable="true" selected="true">Chuyên mục cấp 3 ...</option>
        </select>
    </td>
  </tr>
  <tr  id = "r2">
    <td class='menu'>&nbsp;</td>
    <td class='menu'>&nbsp;</td>
    <td class='menu'>&nbsp;</td>
  </tr>
  <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>Tên bài viết
    <font size="1" color="#D7261C">*</font></td>
    <td width="613" class='menu'>
      <input type="text" name="commonname" style="width:376px " size="1" value="{{old('commonname')}}" required>
      <div class="help-block with-errors"></div>
      @if ($errors->has('commonname'))
           <p class="help is-danger" style="margin-top:10px;color:red;">{{ $errors->first('commonname') }}</p>
      @endif
    </td>
  </tr>
  <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>&nbsp;</td>
    <td width="613" class='menu'>&nbsp; </td>
  </tr>
  
  <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>&nbsp;</td>
    <td width="613" class='do'></td>
  </tr>
  <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>Ảnh đại diện </td>
    <td width="613" class='menu'>
      <input name="file_ul" type="file" size="25" required>
      <div class="help-block with-errors"></div>
      @if ($errors->has('file_ul'))
           <p class="help is-danger" style="margin-top:10px;color:red;">{{ $errors->first('file_ul') }}</p>
      @endif
    </td>
  </tr>
  <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>&nbsp;</td>
    <td width="613" class='content'>(Định dạng ảnh: .png, jpg, gif)</td>
  </tr>
  <tr >
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>&nbsp;</td>
    <td width="613" class='menu'>&nbsp;</td>
  </tr>
<tr >
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>Hiển thị ở trang chủ</td>
    <td width="613" class='menu'>
      <input type="checkbox" name="HOME" value="1" > 
      
    </td>
  </tr> 
  <tr >
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>&nbsp;</td>
    <td width="613" class='menu'>&nbsp;</td>
  </tr> 
   <tr>
    <td class='menu'>&nbsp;</td>
    <td class='menu'>Tin tiêu biểu </td>
    <td class='do'><span class="menu">
      <input type="checkbox" name="tieudiem" value="1" >

    </span></td>
  </tr>
  <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>&nbsp;</td>
    <td width="613" class='do'></td>
  </tr>
  <tr >
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>Trạng thái <font size="1" color="#D7261C">*</font></td>
    <td width="613" class='menu'>
      <SELECT  class=textbox style="WIDTH: 205px;" size=1 name="status" required>
        <option value="">Trạng thái ...</option>
        <option value="Active" >Active</option>
        <option value="Inactive" >Inactive</option>
        <option value="Deleted" >Deleted</option>
      </SELECT>
      <div class="help-block with-errors"></div>
      @if ($errors->has('status'))
           <p class="help is-danger" style="margin-top:10px;color:red;">{{ $errors->first('status') }}</p>
      @endif
    </td>
  </tr>
  <tr>
    <td width="16" class='menu'>&nbsp;</td>
    <td width="378" class='menu'>&nbsp;</td>
    <td width="613" class='menu'>&nbsp;</td>
  </tr>  
  <tr>
    <td  class='menu' valign="top" height="95" width="16">&nbsp;</td>
    <td  class='menu' valign="top" height="95" width="378">Nội dung sơ lược</td>
    <td class='menu' height="95">
  <textarea name="short_content" rows="4" cols="52" onKeyUp="getLengthtextarear(this,500);" required>
    {{ old('short_content') }}
  </textarea>
      @if ($errors->has('short_content'))
           <p class="help is-danger" style="margin-top:10px;color:red;">{{ $errors->first('short_content') }}</p>
      @endif
</td>
  </tr>
   <tr>
    <td  class='menu' valign="top" height="25" width="16">&nbsp;</td>
    <td  class='menu' valign="top" height="25" width="378">&nbsp;</td>
    <td class='menu' height="25">&nbsp;</td>
  </tr>
  <tr>
    <td  class='menu' valign="top" height="95" width="16">&nbsp;</td>
    <td  class='menu' valign="top" height="95" width="378">Nội dung bài viết </td>
    <td class='menu' height="95"><textarea id="contentout" name="content" required>
      {{ old('content') }}
    </textarea>
   <input type="hidden" id="contentencode" name="contentencode" value="">
       <script>CKEDITOR.replace('content', {      
      filebrowserBrowseUrl: 'thu-vien.html'
      
    });</script>
     @if ($errors->has('content'))
           <p class="help is-danger" style="margin-top:10px;color:red;">{{ $errors->first('content') }}</p>
      @endif
     </td>
  </tr>
  <tr>
    <td  class='menu' valign="top" width="16">&nbsp;</td>
    <td  class='menu' valign="top" width="378">&nbsp;</td>
    <td class='menu'>&nbsp;</td>
  </tr>
  <tr>
    <td  class='menu' valign="top" width="16">&nbsp;</td>
    <td  class='menu' valign="top" width="378">Đăng bởi </td>
    <td class='menu'>
      <SELECT  class=textbox style="WIDTH: 205px;" size=1 name="cst" id="cst" >
        <option value="">Đăng bởi...</option>
      </SELECT>
    </td>
  </tr>
  <tr>
    <td  class='menu' valign="top" width="16">&nbsp;</td>
    <td  class='menu' valign="top" width="378">&nbsp;</td>
    <td class='menu'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" height="41" class='menu'>
    <input type="submit" name="submit" value="Thêm" class="button" style="width:80px; height:22px " >
    <input type="button" name="cancel" value="Đóng" onClick="javascript:window.close();" class="button" style="width:60px;height:22px ">    
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </td>
  </tr>
  <tr>
    <td colspan="3" align="center" height="41" class='menu'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" height="41" class='menu'>&nbsp;</td>
  </tr>
  </table>

  </form>
</div>

<script language="text/javascript">
               function checkform(){
               
                  if (document.f1.idtype.selectedIndex==""){
                         alert("Vui lòng chọn 1!");
             document.f1.idtype.focus();
                         return false;
                    }
                    
          if (document.f1.typecat.selectedIndex==""){
                         alert("Vui lòng chọn 2!");
             document.f1.typecat.focus();
                         return false;
                    }
                                        
                    if (document.f1.commonname.value==""){
                                        alert("Vui lòng nhập tên!");
                                        document.f1.commonname.focus();
                                        return false;
                                }
                                                    
                    
                    if (document.f1.status.selectedIndex==""){
                         alert("Chọn trạng thái!");
             document.f1.status.focus();
                         return false;
                    }
     
   /*               
                    if (document.f1.short_content.value==""){
                                        alert("Vui lòng nhập mô tả ngắn cho dịch vụ!");
                                        document.f1.short_content.focus();
                                        return false;
                                }
    */  
        
          getcontens();     


                     return true;
               }
               
    function getLengthtextarear(item1,num)
      {
        var str=item1.value;
        if (item1.value.length>eval(num))
          {
            alert("Ký tự tối đa "+num);
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $('#idtype').on('change', function(e){
        console.log(e);
        var id_type = e.target.value;
        $.get('commoncat?id_type=' + id_type,function(data) {
          console.log(data);
          $('#typecat').empty();
          $('#typecat').append('<option value="0" disable="true" selected="true">Chuyên mục cấp 2 ...</option>');

          $('#id_cat_sub').empty();
          $('#id_cat_sub').append('<option value="0" disable="true" selected="true">Chuyên mục cấp 3 ...</option>');

          $.each(data, function(index, regenciesObj){
            $('#typecat').append('<option value="'+ regenciesObj.ID_CAT +'">'+ regenciesObj.SNAME +'</option>');
          });
        });
      });

      $('#typecat').on('change', function(e){
        console.log(e);
        var id_cat = e.target.value;
        $.get('commoncat_sub?id_cat=' + id_cat,function(data) {
          console.log(data);
          $('#subcat').empty();
          $('#subcat').append('<option value="0" disable="true" selected="true">Chuyên mục cấp 3 ...</option>');

          $.each(data, function(index, districtsObj){
            $('#subcat').append('<option value="'+ districtsObj.ID_CAT_SUB +'">'+ districtsObj.SNAME +'</option>');
          });
        });
      });
    </script>