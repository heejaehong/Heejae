<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File; //Facades


class Documentation extends Model
{
    /**
     * @desc 1. 요청된 파일을 가져온다
     *       2. 파일을 리턴
     * @param $file
     */

    public function get($file)
    {
        //실제 리턴 되는 파일 컨텐츠
        //$realFile = File::get($this->path($file));
//       File::get("docs/artisan.md");


        return File::get($this->path($file));


    }

    /**
     * @desc 요청된 파일명에 파일을 로드
     * @param $file
     */

    protected function path($file)
    {

        //되돌려줄 파일 패스
        // $path = "";

        $path = base_path('docs' . DIRECTORY_SEPARATOR . $file); //DIRECTORY_SEPARATOR 는 \(하위폴더)

        if (!File::exists($path)) {
            abort(404, "There is no file");
        }
        return $path;
    }

    //캐싱을 위하여 etag 생성
    public function etag($file){
        $lastModified = File::lastModified($this->path($file, 'docs'));
        return md5($file.$lastModified);
    }

}
