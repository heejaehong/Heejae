<script src="/js/tinymce/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: '#inputDescription',
        resize: false,
        menubar: false
    });

</script>

<h2>Work</h2>
<form class="form-horizontal work_edit_form" id="work_edit_form" enctype="multipart/form-data">
    <div class="form-group">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <label for="inputTitle" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputTitle" value="{{$work->title}}" name="title">
        </div>
    </div>
    <div class="form-group">
        <label for="inputDescription" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputDescription" value="{{$work->description}}" name="description">
        </div>
    </div>
    <div class="form-group">
        <label for="inputSlug" class="col-sm-2 control-label">slug</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputSlug" value="{{$work->slug}}" name="slug">
        </div>
    </div>
    <div class="form-group">
        <label for="inputTitleImage" class="col-sm-2 control-label">Title image</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="inputTitleImage" name="title_image">
        </div>
    </div>
    <div class="form-group">
        <label for="inputStatus" class="col-sm-2 control-label">Status</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputStatus" value="{{$work->status}}" name="status">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a data-link="{{route('work.update', $work->id)}}" class="btn btn-primary cursor-pointer" id="work_update">Update</a>
        </div>
    </div>
</form>
