<div class="header">
    <div class="container-fluid">
        <div class="row">

            <div id="owl-demo" class="owl-carousel header1">

                @foreach ($sliderdata as  $rs)
               <div>
                    <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                        <h2 class="wow bounceIn animated" data-wow-delay=".40s">FRIENDLY <span>TEMPLATE</span> FOR <br />YOUR {{$rs->title  }}</h2>
                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="" style="width:550px; height:600px;">

                        <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span>Click Here</span></i>
                        </div>
                        </p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
