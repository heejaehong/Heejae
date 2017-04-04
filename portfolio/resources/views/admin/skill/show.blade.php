<h2>Skill</h2>
<form class="form-horizontal skill_edit_form">
    <div class="form-group">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <label for="inputTitle" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputTitle" value="{{$skill->title}}" name="title">
        </div>
    </div>
    <div class="form-group">
        <label for="inputDescription" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputDescription" value="{{$skill->description}}" name="description">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPercent" class="col-sm-2 control-label">Percent</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPercent" value="{{$skill->percent}}" name="percent">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a data-link="{{route('skill.update', $skill->id)}}" class="btn btn-primary cursor-pointer" id="skill_update">Update</a>
        </div>
    </div>
</form>

<div class="col-md-12" id="error_msg"></div>