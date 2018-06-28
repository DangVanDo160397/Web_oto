<!-- slide -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
         <?php $i=0; ?>
              @foreach($slide as $sl)
                <li data-target="#myCarousel" data-slide-to="{{$i}}" 
                @if($i ==0)
                  class="active"></li>
                @endif
                    </li>
                <?php $i++; ?>
              @endforeach
    </ol>
    <div class="carousel-inner">
      <?php $i=0; ?>
            @foreach($slide as $sl)
            <div 
            @if($i ==0)
            class="item active"
            @else
             class="item"
             @endif
             >
             <?php $i++; ?>
              <img src="image/slide/{{$sl->imageslide}}" alt="New York" style="width:100%; max-height:242px; ">
              <div class="carousel-caption">
                <h1>ĐỨC_CHÍNH</h1>
                <p>{{$sl->name}}</p>
              </div>
            </div>
        @endforeach
      
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>