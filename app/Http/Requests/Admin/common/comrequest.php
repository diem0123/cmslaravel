<?php

namespace App\Http\Requests\Admin\common;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class comrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//dùng để xác định xem người dùng nào có quyền thực hiện request này. Tạm thời chúng ta sẽ không quan tâm đến nó và để nó true tương ứng với ai cũng có thể thực hiện request này 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //đây là nơi định nghĩa quy định cho các field của chúng ta
            /*$validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
            ]);

            $validatedData = $request->validate([
            'username' => 'required|alpha|min:6|max:10',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            ]);*/

                'idtype'        =>'bail|required',
                'typecat'       =>'bail|required',
                'status'        =>'bail|required',
                'commonname'    =>'bail|required|alpha|min:3',
                'file_ul'       =>'required',
                'short_content' =>'bail|required',
                'content'       =>'bail|required',
            
        ];
    }
    public function messages()
    {
        return [
                'idtype.required'       =>'Vui lòng chọn chuyên mục cấp 1',
                'typecat.required'      =>'Vui lòng chọn chuyên mục cấp 2',
                'commonname.required'   =>'Vui lòng nhập tên bài viết',
                'status.required'       =>'Chọn trạng thái',
                'file_ul.required'      =>'Bạn chưa chọn ảnh đại diện',
                /* 'short_content.required'=>'Mô tả sơ lượt không được để trống',
                'content.required'      =>'Mô tả chỉ tiết không được để trống',

               'email.email' => 'Email không đúng định dạng',

                'password.min' => 'Mật khẩu tối thiểu 8 kí tự',

                'password_confirmation.same' => 'Mật khẩu không trùng nhau',*/

        ];
    }
}
