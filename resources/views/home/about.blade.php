@extends("_layout")

@section("css")

@endsection()

@section("content")

    <section class="section-headInnerpage" style="background-image:url({!!getVal('imgeAbout')!!} );">
        <div class="container">
            <h2 class="title-headPage">Aboute<span>CONFERENCE</span></h2>
        </div>
    </section><!--section-headInnerpage-->
    <section class="section-content-innerPage">
        <div class="container">
            <div class="content-aboutPage">
                <div class="row">
                    <div class="col-sm-8">
                        {!!getVal('quality')   !!}

                    </div>
                    <div class="col-sm-4">
                        <div class="download-final">

                            {!!getVal('imgDownload')   !!}
                            {!!getVal('linkImgDownload')   !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--section-content-innerPage-->


@endsection()


@section("js")

@endsection()
