    <h2>Profile</h2>
    <form class="form-horizontal profile_edit_form">
        <div class="form-group">
            {{method_field('PUT')}}
            {{csrf_field()}}
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" value="{{$user->name}}" name="name" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAddress" value="{{$profile[0]->address}}" name="address">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPhone" value="{{$profile[0]->phone}}" name="phone">
            </div>
        </div>
        <div class="form-group">
            <label for="inputFacebook" class="col-sm-2 control-label">Facebook</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputFacebook" value="{{$profile[0]->facebook}}" name="facebook">
            </div>
        </div>
        <div class="form-group">
            <label for="inputTwitter" class="col-sm-2 control-label">Twitter</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTwitter" value="{{$profile[0]->twitter}}" name="twitter">
            </div>
        </div>
        <div class="form-group">
            <label for="inputLinkedin" class="col-sm-2 control-label">linked in</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLinkedin" value="{{$profile[0]->linkedin}}" name="linkedin">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a data-link="{{route('profile.update', $profile[0]->id)}}" class="btn btn-primary cursor-pointer"
                   id="profile_update">Update</a>
            </div>
        </div>
    </form>
