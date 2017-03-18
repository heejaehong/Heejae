<script src="/js/tinymce/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: '#description',
        resize: false,
        menubar: false
    });

</script>

<div class="col-md-12">
    <form class="form-horizontal work_create_form" id="work_create_form" enctype="multipart/form-data">
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
                <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="slug" class="col-sm-3 control-label">Slug</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug')}}">
            </div>
        </div>

        <div class="form-group">
            <label for="title_image" class="col-sm-3 control-label">Title Image</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="title_image" name="title_image">
            </div>
        </div>


        <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Status</label>
            <div class="col-sm-9">
                <input type="radio" name="status" value="complete" checked>Complete<br>
                <input type="radio" name="status" value="processing">Processing
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <a data-link="{{route('work.store')}}" class="btn btn-primary cursor-pointer"
                   id="work_save">Save</a>
            </div>
        </div>
    </form>
</div>

