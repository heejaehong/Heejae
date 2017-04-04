<h2>Description</h2>
<form class="form-horizontal description_edit_form">
        <div class="form-group">
            {{method_field('PUT')}}
            {{csrf_field()}}
            <label for="inputHome" class="col-sm-1 control-label">Home</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="inputHome" value="{{$description[0]->home_desc}}" name="home_desc">
            </div>
            <label for="inputAbout" class="col-sm-1 control-label">About</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="inputAbout" value="{{$description[0]->about_desc}}" name="about_desc">
            </div>
            <label for="inputContact" class="col-sm-1 control-label">Contact</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="inputContact" value="{{$description[0]->contact_desc}}" name="contact_desc">
            </div>
        </div>
    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-1">
            <a data-link="{{route('description.update', $description[0]->id)}}" class="btn btn-primary cursor-pointer"
               id="description_update">Update</a>
        </div>
    </div>
</form>

<div class="col-md-12" id="error_msg"></div>
