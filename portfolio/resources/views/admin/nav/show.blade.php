<h2>Nav</h2>
<form class="form-horizontal nav_edit_form">
    <div class="form-group">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <label for="inputName" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputName" value="{{$nav->name}}" name="name">
        </div>
    </div>
    <div class="form-group">
        <label for="inputSlug" class="col-sm-2 control-label">slug</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputSlug" value="{{$nav->slug}}" name="slug">
        </div>
    </div>
    <div class="form-group">
        <label for="inputStatus" class="col-sm-2 control-label">Status</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputStatus" value="{{$nav->status}}" name="status">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a data-link="{{route('nav.update', $nav->id)}}" class="btn btn-primary cursor-pointer" id="nav_update">Update</a>
        </div>
    </div>
</form>
