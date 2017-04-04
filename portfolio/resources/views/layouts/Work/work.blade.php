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
                            <img src="{{$img_path}}projects/{{$work->title_image}}">
                        </a>

                        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">{{$work->title}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{$work->description}}</p>
                                    </div>

                                    <div class="modal-body">
                                        <!-- carousel start -->
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                @foreach($work->images as $image)
                                                    <li data-target="#myCarousel" data-slide-to="{{$loop->index}}" class="@if($loop->first)active @endif"></li>
                                                @endforeach
                                            </ol>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                @foreach($work->images as $image)
                                                    <div class="item  @if($loop->first)active @endif">
                                                        <img src="{{$img_path}}projects/slide/{{$image->slug}}">
                                                    </div>
                                                @endforeach
                                            </div>


                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#myCarousel" role="button"
                                               data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"
                                                      aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" role="button"
                                               data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"
                                                      aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <!-- carousel end -->
                                    </div>


                                    <div class="modal-footer">
                                        <a href="https://github.com/leefecu/busbee-fe" target="_blank">
                                            <button type="button" class="btn btn-primary">Link</button>
                                        </a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
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
