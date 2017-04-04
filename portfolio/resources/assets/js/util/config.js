/**
 * Created by heejaehong on 2017. 2. 12..
 */

var ajaxConfig = function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
};


//모듈화 app.js 로 던지는..

module.exports.ajaxConfig = ajaxConfig;