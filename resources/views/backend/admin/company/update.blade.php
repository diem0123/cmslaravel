
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin</title>

<link rel="stylesheet" type="text/css" href="{{asset('backend/css/wstyle.css')}}" />
<script type="text/javascript" src="{{asset('backend/js/jquery-1.7.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/webtoolkit.base64.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/wysiwyg/wysiwyg.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/validator.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/bootstrap.min.css')}}" />


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
<script src="https://code.jquery.com/jquery-1.12.4.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
</script>


</head>
<body>
<div align="left">
<form action="{{Route('addinfo')}}" method="post"  enctype="multipart/form-data" name="f1" onsubmit="return checkform();">
  
<input type="hidden" name="ID_COM" id="idcom" value="{{$company->ID_COM}}">
<input type="hidden" name="ac" id="ac" value="e"> 
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
 <tr bgcolor="#FFF5EA">
   <td class='menu'>&nbsp;</td>
   <td colspan="3" class='menu'>&nbsp;</td>
 </tr>
 <tr bgcolor="#FFF5EA">
    <td width="12" class='menu'>&nbsp;</td>
    <td colspan="3" class='menu'>HI&#7878;U CH&#7880;NH C&Ocirc;NG TY</td>
    </tr>
 <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td class='menu' colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>T&ecirc;n C&ocirc;ng ty    <font size="1" color="#D7261C">*</font></td>
    <td width="447" class='menu'>
	<input type="text" name="COM_NAME" style="width:376px " size="1" value="{{$company->COM_NAME}}"></td>
    <td width="417" class='menu' rowspan="14" valign="top"></td>
  </tr>
  <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td width="447" class='menu'>&nbsp;	</td>
  </tr>
  <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>T&ecirc;n vi&#7871;t t&#7855;t</td>
    <td width="447" class='menu'>
	<input type="text" name="SHORT_NAME" style="width:376px " size="1" value="{{$company->SHORT_NAME}}"></td>
  </tr>
  <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td width="447" class='menu'>&nbsp;</td>
  </tr>
  <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>Email
    <font size="1" color="#D7261C">*</font></td>
    <td width="447" class='menu'>
	<input type="text" name="EMAIL" style="width:376px " size="1" value="{{$company->EMAIL}}"></td>
  </tr>
  <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td width="447" class='menu'>&nbsp;</td>
  </tr>
<tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&#272;i&#7879;n tho&#7841;i</td>
    <td width="447" class='menu'>
	<input type="text" name="TEL" style="width:376px " size="1" value="{{$company->TEL}}"></td>
  </tr>
  <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td width="447" class='menu'>&nbsp;</td>
  </tr>
<tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>Fax </td>
    <td width="447" class='menu'>
	<input type="text" name="FAX" style="width:376px " size="1" value="{{$company->FAX}}"></td>
  </tr>
   <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td width="447" class='menu'>&nbsp;</td>
  </tr>
<!-- <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>Di &#273;&#7897;ng</td>
    <td width="447" class='menu'>
  <input type="text" name="mobi" style="width:376px " size="1" value="09 166 45 166"></td>
  </tr>
   <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td width="447" class='menu'>&nbsp;</td>
  </tr>
<tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>Skype</td>
    <td width="447" class='menu'>
  <input type="text" name="skype" style="width:376px " size="1" value=""></td>
  </tr>
   <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td width="447" class='menu'>&nbsp;</td>
  </tr>
<tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>Yahoo</td>
    <td width="447" class='menu'>
  <input type="text" name="yahoo" style="width:376px " size="1" value=""></td>
  </tr> -->
  <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td width="447" class='menu'>&nbsp;</td>
  </tr>
<tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>Website</td>
    <td width="447" class='menu'>
	<input type="text" name="WEBSITE" style="width:376px " size="1" value="{{$company->WEBSITE}}"></td>
  </tr>
  <tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&nbsp;</td>
    <td width="447" class='menu'>&nbsp;</td>
  </tr>
<tr>
    <td width="12" class='menu'>&nbsp;</td>
    <td width="208" class='menu'>&#272;&#7883;a ch&#7881;</td>
    <td width="447" class='menu'>
	<input type="text" name="ADDRESS" style="width:376px " size="1" value="{{$company->ADDRESS}}"></td>
  </tr>
  <tr>
    <td class='menu'>&nbsp;</td>
    <td class='menu'>&nbsp;</td>
    <td class='do'>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="4" align="center" height="41" class='menu'>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit"  class="button" style="width:80px; height:22px " >
     <input type="button" name="cancel" value="H&#7911;y b&#7887;" onClick="javascript:window.close();" class="button" style="width:60px;height:22px ">    </td>
  </tr>
  </table>
  </form>
</div>
<script language="javascript1.2">
               function checkform(){
                    
                    if (document.f1.comname.value==""){
                                        alert("Vui lòng nhập tên Công ty!");
                                        document.f1.comname.focus();
                                        return false;
                                }                     
                                
                     if (document.f1.email.value==""){
                                        alert("Vui lòng nhập địa chỉ email!");
                                        document.f1.email.focus();
                                        return false;
                     }else{
								var at="@";
								var dot=".";
								var obj=document.f1.email.value;
								var lat=obj.indexOf(at);
								var lstr=obj.length;
								var ldot=obj.indexOf(dot);
								if (obj.indexOf(at)==-1){
									alert('Email không đúng định dạng!')
									document.f1.email.focus();
									document.f1.email.value="";
									return false
								}
							   if (obj.indexOf(at)==-1 || obj.indexOf(at)==0 || obj.indexOf(at)==lstr){
									alert('Email không đúng định dạng!');
									document.f1.email.focus();
									document.f1.email.value="";
									return false;
								}
							  if (obj.indexOf(dot)==-1 || obj.indexOf(dot)==0 || obj.indexOf(dot)==lstr){
									alert('Email không đúng định dạng!');
									document.f1.email.focus();
									document.f1.email.value="";
									return false;
								}
							 if (obj.indexOf(at,(lat+1))!=-1){
									alert('Email không đúng định dạng!');
									document.f1.email.focus();
									document.f1.email.value="";
									return false;
								}
							 if (obj.substring(lat-1,lat)==dot || obj.substring(lat+1,lat+2)==dot){
									alert('Email không đúng định dạng!');
									document.f1.email.focus();
									document.f1.email.value="";
									return false;
								}
							 if (obj.indexOf(dot,(lat+2))==-1){
									alert('Email không đúng định dạng!');
									document.f1.email.focus();
									document.f1.email.value="";
									return false;
								}
							 if (obj.indexOf(' ')!=-1){
									alert('Email không đúng định dạng!');
									document.f1.email.focus();
									document.f1.email.value="";
									return false;
								}
										 
							}
                      
 
					//getcontens();

                     return true;
               }
  
	function checkcst(){
   		$.ajax({
		url: $("#base_url").val()+'/admin/checkonecom',
		type: 'POST',
		data: 'cst='+ $('#cst').val()+'&idcom='+$('#idcom').val()+'&act='+$('#act').val(),
		success: function(data) {
		if(data != "") document.getElementById("checkcstgo").value = 1;
		else document.getElementById("checkcstgo").value = "";
		//test = $('#checkcstgo').val();
		$('#checkcst').html(data);
		}
	});

   
	}             
</script>
<!-- 

<form data-toggle="validator" role="form" action="dangky.html"  method="post">
                  
                  <div class="form-group">
                    <label class="control-label">E-mail </label>
                    <input class="form-control" type="email" id="inputEmail" name="email" placeholder="Your email address" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label">Password </label>
                    <input class="form-control" data-minlength="6" data-error="Password phải đạt 6 ký tự" id="inputPassword" type="password" name="password" placeholder="Password" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label">Confirm password </label>
                    <input class="form-control" data-minlength="6" data-error="Password phải đạt 6 ký tự" id="inputPasswordConfirm" type="password" name="password2" placeholder="Confirm password" data-match="#inputPassword" data-match-error="Mật khẩu không trùng khớp" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label">Full name </label>
                    <input class="form-control" id="inputName" name="user_member" type="text" placeholder="Full Name" required>
                    <div class="help-block with-errors"></div>
                  </div>
                                    
                  <div class="form-group">
                    <label class="control-label">Phone number</label>
                    <input class="form-control" type="tel" pattern="^[0-9]{1,}$" data-minlength="9" maxlength="11" name="tel" placeholder="Your phone number">
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label">Địa chỉ </label>
                    <textarea class="form-control" rows="3" data-error="Please enter Address" id="inputName" name="address" placeholder="Địa chỉ hiện tại của bạn" required=""></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <input class="btn btn-default" type="submit" name="sub_header" value="Đăng ký">
              </form>
</body> -->