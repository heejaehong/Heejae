<div class="col-md-7">
    <form class="form-horizontal skill_create_form">
        {{csrf_field()}}

        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Title</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                    <textarea class="form-control" id="description" name="description" rows="" style="resize:none"
                    >{{old('description')}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="percent" class="col-sm-3 control-label">Percent</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="percent" name="percent" value="{{old('percent')}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <a data-link="{{route('skill.store')}}" class="btn btn-primary cursor-pointer"
                   id="skill_save">Save</a>
            </div>
        </div>
    </form>
</div>