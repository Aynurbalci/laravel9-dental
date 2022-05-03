<div class="col-md-12" align="center">
    <div class="header-slider normal-slider" align="center">
        @foreach ($sliderdata as $rs)
        <div class="header-slider-item" >
            <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" alt=""
            style="width:65em; height:50em;" align="center">
              <div class="header-slider-caption" align="center">
                <p>Some text goes here that describes the image</p>
                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
            </div>
        </div>


        @endforeach
    </div>
</div>
