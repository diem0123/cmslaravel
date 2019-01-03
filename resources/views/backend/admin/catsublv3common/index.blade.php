@extends('backend.layout.app')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <a href="#">Cài đặt</a>
                </li>
				<li>
                    <a href="{{route('category-common')}}">Chuyên mục thông tin</a>
                </li>
                <li> 
                    @foreach($datatype as $infotype)
                    <a href="{{route('categorysub-common',$infotype->ID_TYPE)}}">{{$infotype->SNAME}}</a>
                    @endforeach
                </li>
                <li>
                    <a href="#">{{$namecat}}</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="adm_out">
            <div class="adm_common">
                <form name="f1" method="post" action="#">
                    <input type="hidden" name="vlid" value="">
                    <table border="0" width="98%">
                        <tbody>
                            <tr>
                                <td>
                                    <table border="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <td height="14" class="title">
                                                   <button class="admbtn" type="button" name="ct1" value="" onclick="window.open('{{route('viewaddcategorycatsub-common',$ID_CAT)}}','Addcommontypepopup','scrollbars=yes,status=yes,toolbar=no,location=0,directories=0,status=yes,menubar=0,resizable=0,width=\'100%\',height=\'100%\'');">Thêm thành phần</button>
                                                    </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td height="10" align="left"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table id="simple-table" class="table  table-bordered table-hover">
                                        <thead>
                                            <tr bgcolor="#EEEEEE">
                                                <td width="120" class="do" height="25">Stt </td>
                                                <td height="25" class="do">Tên thành phần </td>
                                                <td class="do">Trạng thái </td>
                                                <td width="130" colspan="4" class="do">Hành động </td>
                                            </tr>
                                        </thead>
                                        @foreach($data as $listdata)
                                        <tbody>
                                            <tr bgcolor="#FFFFFF">
                                                <td width="20" height="25">{{$listdata->IORDER}}</td>
                                                <td width="342" height="25"><a href="#" class="menu" title="{{$listdata->SNAME}}">{{$listdata->SNAME}}</a></td>
                                                <td width="342" class="menu">{{$listdata->STATUS}}</td>
                                                <td width="23"><a href="#" title="Edit" onclick="window.open('{{route('viewupdatecategorysub-common',$listdata->ID_CAT)}}','Editcommonpopup','scrollbars=yes,status=yes,toolbar=no,location=0,directories=0,status=yes,menubar=0,resizable=0,width=\'100%\',height=\'100%\'');"><img src="{{asset('backend/images/icon_edit.png')}}" width="16" alt="Edit"></a></td>
                                                <td width="23"></td>
                                                <td width="27"></td>
                                                <td width="42"></td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="5"></td>
                            </tr>
                            <tr>
                                <td height="25" align="center">
                                    <div class="box-phantrang">
                                        {{$data->links()}}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div> <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div>
@endsection