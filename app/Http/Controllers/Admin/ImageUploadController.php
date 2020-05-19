<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Arctype;
use App\Http\Requests\ImagesUploadRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class ImageUploadController extends Controller
{
    /**图集异步上传处理
     * @param ImagesUploadRequest $request
     * @return string
     */
    function ImagesUpload(ImagesUploadRequest $request)
    {
        if(!empty($request['input-image'])){
            if(!$request->hasFile('input-image')){
                exit('上传文件为空！');
            }else{
                $storePath='public/uploads'.date('/Y/m/d',time());
                $file = $request->file('input-image');
                $allowed_extensions = ["png", "jpg", "gif","jpeg"];
                if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions))
                {
                    exit('error You may only upload png, jpg jpeg or gif');
                }
                $extension = $file->getClientOriginalExtension();
                $path = Storage::putFileAs($storePath, $file, md5(time()+rand(1500,2511)).'.'.$extension);
                $image=Image::make(storage_path('app/').$path);
                if ($image->width()>$image->height())
                {
                    $image->resize(350, null,function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(storage_path('app/').$path);
                }else{
                    $image->resize(null, 320,function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(storage_path('app/').$path);
                }
                $litpic= '/storage'.ltrim($path,'public');
                return json_encode(array('link'=>"$litpic"));
            }
        }
    }
    /**
     * 图片删除处理
     * @param
     *
     * @return
     */
    function DeletePics(Request $request){
        $imagePath=$request->input('key');
        Storage::delete('public'.str_replace('/storage','',$imagePath));
        return json_encode(array('key'=>"$imagePath"));;
    }
    /**
     * 图片上传
     * @param
     *
     * @return
     */
    public function upload_image(Request $request)
    {

        if(!$request->hasFile('file')){
            exit('上传文件为空！');
        }
        $file = $request->file('file');
        //判断文件上传过程中是否出错
        $allowed_extensions = ["png", "jpg", "gif"];
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            exit(['error' => 'You may only upload png, jpg or gif.']);
        }
        $upload_path='images/thread'.date('/Y/m/d',time());
        $destinationPath =public_path($upload_path);
        $extension = $file->getClientOriginalExtension();
        $fileName = md5(str_random(10)).'.'.$extension;
        $file->move($destinationPath, $fileName);
        $img_relpath=date('Y/m/d/',time()). $fileName;
        return $img_relpath;
    }

}
