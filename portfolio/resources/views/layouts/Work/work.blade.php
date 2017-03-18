<section>
    <div class="container Work_rap" id="Work">
        <h2>
            {{$navs[2]->name}}
            <span class="logo_end">_</span>
        </h2>

        <div class="row work_contents_rap">
            <div class="col-md-12">
                <!-- Work Content_1 start -->
                @foreach($works as $work)
                <div class="col-md-4 col-sm-6 work_1">
                    <a data-toggle="modal" data-target="#myModal">
                        <img src="{{$img_path}}{{$work->title_image}}">
                    </a>

                    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">{{$work->title}}</h4>
                                </div>
                                <div class="modal-body">
                                    <p>{{$work->description}}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                @endforeach
                <!-- Work Content_1 end -->

            </div>
        </div>
    </div>

</section>
