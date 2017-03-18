<h2>Skill</h2>
<form class="form-horizontal">
    @foreach($skills as $skill)
    <div class="form-group">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <label for="inputTitle" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputTitle" value="{{$skill->title}}" name="title" readonly>
        </div>
        <div class="col-sm-1">
            <a data-link="{{route('skill.show', $skill->id)}}" class="btn btn-info cursor-pointer"
               id="skill_show">Edit</a>
        </div>
        <div class="col-sm-1">
            <a data-link="{{route('skill.delete', $skill->id)}}" class="btn btn-danger cursor-pointer"
               id="skill_delete">Delete</a>
        </div>
    </div>
    @endforeach
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a data-link="{{route('skill.create')}}" class="btn btn-primary cursor-pointer"
                   id="skill_create">Create</a>
            </div>
        </div>
</form>
