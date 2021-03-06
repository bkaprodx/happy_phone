<div id="myCarousel" class="carousel slide carousel-left" data-ride="carousel" style="float: left;width: 64.8%;height: 280px;overflow: hidden;position: relative;background: #f0f0f0;margin: 0px 0px 15px 0px; ">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{ $first_slide->url }}" alt="{{ $first_slide->alt }}" style="width:100%;">
        </div>
        @foreach ($slides as $slide)
            <div class="item">
                <img src="{{ $slide->url }}" alt="{{ $slide->alt }}" style="width:100%;">
            </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="sr-only">Next</span>
    </a>
</div>
<aside class="carousel-inner-right display-right">
    <ul>
        <li>
            <a href="#">
                <img width="100" height="70" style="float: left;width: 100px;height: 57px;margin: 0 10px 0 0;" src="https://cdn.tgdd.vn/Files/2018/12/05/1135760/huawei_800x450-100x100.jpg" alt="Huawei Enjoy 9 có màn 6.26 inch, pin 3.900 mAh được TENAA chứng nhận" class="left">
                <span style="font-size: 14px;color: #333;margin-bottom: 5px; margin-top: 0px" >Huawei Enjoy 9 có màn 6.26 inch, pin 3.900 mAh được TENAA chứng nhận</span>
                <span>48 phút trước</span>
            </a>
        </li>
    </ul>
    <div class="twobanner">
        <a aria-label="slide" href="https://www.thegioididong.com/khuyen-mai-soc/galaxy-j7" onclick="jQuery.ajax({ url: '//www.thegioididong.com/bannertracking?bid=25377&amp;r='+ (new Date).getTime(),   async: true, cache: false });"><img src="//cdn.tgdd.vn/qcao/30_11_2018_21_12_13_JseriesT12-398-110.png" alt="2018 - DE - Galaxy J Series"></a>
        <a aria-label="slide" href="https://www.thegioididong.com/dtdd/iphone-6s-plus-32gb" onclick="jQuery.ajax({ url: '//www.thegioididong.com/bannertracking?bid=25319&amp;r='+ (new Date).getTime(),   async: true, cache: false });"><img src="//cdn.tgdd.vn/qcao/29_11_2018_16_31_47_iPhone6sPlus-398-110.png" alt="2018 - DE - Big Apple"></a>
    </div>
</aside>