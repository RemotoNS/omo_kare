@extends("layouts.app")

@section("title","メッセージ内容")

@section("content")
  <div class="col-xs-12 col-lg-12 mt-5">
    <h1 class="indexTital rollAnime text-center">ビデオレター</h1>
  </div>


  <div class="col-md-4  img-hidden mt-5">
    <iframe width="350" height="250"  src="https://www.youtube.com/embed/Pj0b9f_3nvM" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
  <div class="col-md-4  img-hidden mt-5">
    <iframe width="350" height="250"  src="https://www.youtube.com/embed/Pj0b9f_3nvM" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
  <div class="col-md-4  img-hidden mt-5">
  <iframe width="350" height="250"  src="https://www.youtube.com/embed/Pj0b9f_3nvM" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
  <div class="col-md-6  img-hidden mt-5">
    <iframe width="500" height="350"  src="https://www.youtube.com/embed/Pj0b9f_3nvM" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
  <div class="col-md-6  img-hidden mt-5">
  <iframe width="500" height="350"  src="https://www.youtube.com/embed/Pj0b9f_3nvM" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
  <div class="col-md-4  img-hidden mt-5">
    <iframe width="350" height="250"  src="https://www.youtube.com/embed/Pj0b9f_3nvM" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
  <div class="col-md-4  img-hidden mt-5">
    <iframe width="350" height="250"  src="https://www.youtube.com/embed/Pj0b9f_3nvM" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
  <div class="col-md-4  img-hidden mt-5">
    <iframe width="350" height="250"  src="https://www.youtube.com/embed/Pj0b9f_3nvM" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>

  <div class="col-xs-12 col-lg-12 mt-5">
  <h1 class="indexTital glowAnime text-center">コウヘイへのメッセージ</h1>
  </div>

  @foreach ($gifts as $gift)
  <div class="col-xs-12 col-lg-4 mt-5">
    <p class = "text-center">
      <a href="/show/{{ $gift->id }}" class="gradient43">
        {{ $gift -> name }}'s<br>Message♡
      </a>  
    </p>
  </div>
  @endforeach

  <div class="col-xs-12 col-lg-12 mt-5">
    <p class = "text-center"><a href="/role" class="gradient63">秘密の裏口</a></p>
  </div>

@endsection


