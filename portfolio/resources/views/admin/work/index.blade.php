<h2>Work</h2>
<form class="form-horizontal">
    @foreach($works as $work)
        <div class="form-group">
            {{method_field('PUT')}}
            {{csrf_field()}}
            <label for="inputTitle" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputTitle" value="{{$work->title}}" name="title" readonly>
            </div>
            <div class="col-sm-1">
                <a data-link="{{route('work.show', $work->id)}}" class="btn btn-info cursor-pointer"
                   id="work_show">Edit</a>
            </div>
            <div class="col-sm-1">
                <a data-link="{{route('work.delete', $work->id)}}" class="btn btn-danger cursor-pointer"
                   id="work_delete">Delete</a>
            </div>
        </div>
    @endforeach
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a data-link="{{route('work.create')}}" class="btn btn-primary cursor-pointer"
               id="work_create">Create</a>
        </div>
    </div>
</form>
