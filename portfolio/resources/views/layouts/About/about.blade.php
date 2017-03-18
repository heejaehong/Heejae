<section>
    <div class="container About_rap" id="About">
        <h2>
            {{$navs[1]->name}}
            <span class="logo_end">_</span>
        </h2>
        <p class="text_intro">
            {{$descs[0]->about_desc}}

        </p>

        @foreach($skills as $skill)
        <div class=“row”>
            <div class="col-sm-4 skills no-padding no-margin">
                <div class="progressbar">
                    <div class="circle">
                        <span class="chart" data-percent="{{$skill->percent}}">
		                    <span class="percent"></span>
                        </span>


                        <h4 class="uppercase">{{$skill->title}}</h4>
                        <p>
                            {{$skill->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


        <script>
            $(function() {
                $('.chart').easyPieChart({
                    easing: 'easeOutBounce',
                    barColor: '#ff9f35',
                    trackColor: 'rgba(200,200,200,0.4)',
                    onStep: function (from, to, percent) {
                        $(this.el).find('.percent').text(Math.round(percent));
                    }
                });
                var chart = window.chart = $('.chart').data('easyPieChart');
            });
        </script>

    </div>
</section>