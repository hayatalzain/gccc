@extends("_layout")

@section("css")

@endsection()

@section("content")
    <!--slider-->
    <section class="section-home-slider" id="">
        <div class="owl-carousel" id="homeSlider">
            @foreach($items as $i)
                @if($i->type==1)
            <div class="item">
                <div class="item-homeSlider" style="background-image:url({{url('/storage/images/'. $i->image)}})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="caption-txt clearfix to-animate">
                                    <span>{{$i->date}}</span>
                                    <h2>{{$i->title}}</h2>
                                    <p>{{$i->details}}</p>
                                    <a href="{{$i->read_more}}" class="more-read">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @else
                @endif
            @endforeach
        </div>
    </section>

    <!--section-home-slider-->
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="goals-gcc wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        {!!getVal('hay')   !!}
                    </div>
                </div>
                <div class="col-sm-offset-1 col-sm-5">
                    <div class="about-img clearfix wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <span>   {!!getVal('image')   !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section-about-->

    <section class="section-content-home">
        <div class="container">
            <div class="sequential-block">
                <div class="block-head wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>Sequential GCC Quality Conferences</h2>
                </div>
                <div class="sequential-content">
                    <div class="row">
                        <div class="col-md-offset-5 col-md-7">
                            <div class="sequential-img">
                                <div class="owl-carousel" id="sequential-slider">

                                    @foreach($feat as $i)
                                    <div class="item">
                                        <div class="sequential-thumb">
                                            <img src="{{url('/storage/images/'. $i->image)}}" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="feature-sponsoring">

                                {!!getVal('features')!!}
                            </div>
                        </div>
                    </div>
                    <div class="sequential-table wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="0.5s">
                        <table class="table">
                            <thead class="thead-inverse">
                            <tr>
                                <th width="20%">Conference</th>
                                <th width="40%">Conference topics</th>
                                <th width="30%">Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($conf as $i)
                            <tr>
                                <th>{{$i->conference}}</th>
                                <th>{{$i->conference_title}}</th>
                                <th>{{$i->date}}</th>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--sequential-block-->

            <div class="issues-block">
                <div class="block-head wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>Issues, Attendance and Media Coverage</h2>
                </div>
                <div class="issues-list">
                    <div class="row">
                        @foreach($card as $i)
                        <div class="col-sm-4">
                            <div class="issues-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="issues-thumb">
                                    <img src="{{url('/storage/images/'. $i->image)}}" alt="" class="img-responsive">
                                </div>
                                <div class="issues-txt">
                                    <h2>{{$i->title}}</h2>
                                    <p>{{$i->details}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!--issues-block-->
            <div class="gallary-block">
                <div class="block-head wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>GALLARY of 9th conference </h2>
                </div>

                <div class="owl-carousel" id="gallary-slider">
                    @foreach($items as $i)
                        @if($i->type==2)
                    <div class="item">
                        <div class="gallary-item">
                            <a href="{{$i->read_more}}" class="gallary-link"></a>
                            <div class="ga-img">
                                <img src="{{url('/storage/images/'. $i->image)}}" alt="" class="img-responsive" style="min-height:400px;">
                            </div>
                            <div class="ga-txt">
                                <h2>{{$i->details}}..</h2>
                                <p><span><i class="fa fa-calendar" aria-hidden="true"></i></span>{{$i->date}}</p>
                            </div>
                        </div>
                    </div>

                        @endif
                    @endforeach
                </div>

            </div>
            <!--gallary-block-->

            <div class="sponsors-block">
                <div class="block-head wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
                    <h2>SPONSORS of 9th conference </h2>
                </div>


                <div class="owl-carousel" id="sponsoer-slider">
                    @foreach($spon as $i)
                    <div class="item">
                            <a href="{{$i->link_image}}" class="sponsoer-img">
                            <img src="{{url('/storage/images/'. $i->image)}}" alt="" class="img-responsive">
                        </a>
                    </div>
                    @endforeach
                </div>


            </div><!--sponsors-block-->
        </div>
    </section><!--section-content-home-->

@endsection()


@section("js")

@endsection()
