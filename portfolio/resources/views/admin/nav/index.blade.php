<h2>Nav</h2>
<form class="form-horizontal">
    @foreach($navs as $nav)
        <div class="form-group">
            {{method_field('PUT')}}
            {{csrf_field()}}
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputName" value="{{$nav->name}}" name="name" readonly>
            </div>
            <div class="col-sm-1">
                <a data-link="{{route('nav.show', $nav->id)}}" class="btn btn-info cursor-pointer"
                   id="nav_show">Edit</a>
            </div>
            <div class="col-sm-1">
                <a data-link="{{route('nav.delete', $nav->id)}}" class="btn btn-danger cursor-pointer"
                   id="nav_delete">Delete</a>
            </div>
        </div>
    @endforeach
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a data-link="{{route('nav.create')}}" class="btn btn-primary cursor-pointer"
               id="nav_create">Create</a>
        </div>
    </div>
</form>
