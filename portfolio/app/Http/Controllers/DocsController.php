<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentation;

class DocsController extends Controller
{
    protected $docs; //protected -> 여기서만 실행
    public function __construct(Documentation $docs){
        $this->docs = $docs;

    }

    public function show($file = null)
    {
//        $index = \Cache::remember('docs.index', 120, function () {
//            return markdown($this->docs->get());
//
//        });

        $content = \Cache::remember('docs.{$file}', 120, function () use ($file) {
            return markdown($this->docs->get($file ?: 'installation.md'));
        });

        return view('docs.show' , compact('index' , 'content'));
    }

    public function show2($file = null){
        //캐시로 파일 처음 로딩 후 캐시 저장소에 미리 로딩하여 변경 사항이 없을 시 캐시를 그대로 로딩
        //remember() : 1. 캐시키, 2. 유효기간, 3 클로저
        //클로저에서 값을 받아와 캐시 저장소에 저장하는 동시에 반환함.

        $reqEtag = \Request::getEtags();
        $genEtag = $this->docs->etag($file);

        if(isset($reqEtag[0])){
            if($reqEtag[0] === $genEtag){
                return response('', 304);
            }
        }

//        $index = \Cache::remember('docs.index', 120, function(){
//            return markdown($this->docs->get());
//        });

        $content = \Cache::remember("docs.{$file}", 120, function () use($file){
            return markdown($this->docs->get($file ?: 'installation.md'));
        }) ;

        return response($content, 200, ['Etag' => $genEtag]);
    }

}

