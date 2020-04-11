<header class="visible">
 <div id="navber" class="d-flex justify-content-between">
    <h1 class="site_title align-self-center"><a href="/"><img src="{{ asset('/svg/logo.svg') }}" alt="ATTACK AUTO CHESS"></a></h1>
    <nav class="align-self-end">
        <ul class="nav">
          <li class="TOP"><a href="{{ action('BosyuController@index') }}">TOP</a>
            <p class="subtext"></p>
          </li>
             <li class="仲間を探す"><a href="{{ action('Member\BosyuController@index') }}">仲間を探す</a>
          </li>
          <li class="仲間を募集する"><a href="{{ action('Member\BosyuController@create') }}">仲間を募集する</a>
            <p class="subtext"></p>
          </li>
          <li class="攻略掲示板"><a href="{{ action('Member\CaptureController@index') }}">攻略掲示板</a>
            <p class="subtext"></p>
          </li>
          <li></i><a href="{{ action('HomeController@index') }}">ログイン</a></li>
        </ul>
    </nav>
  </div>
</header>

