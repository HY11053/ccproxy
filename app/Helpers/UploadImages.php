<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2017/2/24
 * Time: 16:02
 */

namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class UploadImages
{
    /**
     * 图像上传处理
     * @param $request数据
     *
     * @return arraydatas
     */
    public static function UploadImage($request,$filename)
    {
        if(!$request->hasFile($filename))
        {
            return $img_relpath='';
        }
        $storePath='public/uploads'.date('/Y/m/d',time());
        $file = $request->file($filename);
        //判断文件类型
        $allowed_extensions = ["png", "jpg", "gif","jpeg"];
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions))
        {
            exit('error You may only upload png, jpg jpegor gif');
        }
        $extension = $file->getClientOriginalExtension();
        $path = Storage::putFileAs($storePath, $file, md5(time()+rand(1,19999)).'.'.$extension);
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
        $path='/storage'.ltrim($path,'public');
        return $path;
    }
    /**
     * 自定义文档属性
     * @param array
     *
     * @return arraydatas
     */
    static function Flags(array $arr)
    {
        $flags='';
        foreach ($arr as $value)
        {
            $flags.=$value.',';
        }
        return substr($flags,0,-1);
    }


}