<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!— Brand and toggle get grouped for better mobile display —>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="header_logo" href="#Home">
                {{$user->name}}
                <span class="logo_end">_</span>
            </h1>
        </div>

        <!— Collect the nav links, forms, and other content for toggling —>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav navbar-right">
                @foreach($navs as $nav)
                <li><a href="#{{$nav->name}}">{{$nav->name}}</a></li>
                @endforeach
            </ul>
        </div>

        <!— /.navbar-collapse —>
    </div>
    <!— /.container-fluid —>
</nav>