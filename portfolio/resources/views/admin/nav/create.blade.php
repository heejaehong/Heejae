<div class="col-md-7">
    <form class="form-horizontal nav_create_form">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
        </div>

        <div class="form-group">
            <label for="slug" class="col-sm-3 control-label">Slug</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug')}}">
            </div>
        </div>

        <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Status</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="status" name="status" value="{{old('status')}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <a data-link="{{route('nav.store')}}" class="btn btn-primary cursor-pointer"
                   id="nav_save">Save</a>
            </div>
        </div>
    </form>
</div>

<div class="col-md-12" id="error_msg"></div>