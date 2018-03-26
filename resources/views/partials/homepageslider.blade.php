@php
  $slides = (object)array(
    (object)array(
      'SlideTitle' => 'Reach new heights',
      'SubTitle' => 'You don’t need to have a ton, to invest in the long run',
      'Class' => 'one',
    ),
    (object)array(
      'SlideTitle' => 'Making it easy for you',
      'SubTitle' => 'We treat customers with all respect and always answer their queries',
      'Class' => 'two',
    ),
    (object)array(
    'SlideTitle' => 'Invest for your safe tomorrow',
    'SubTitle' => 'HMO Investments: MORE money, LESS worry, HIGH demand',
    'Class' => 'three',
  ),
  );
@endphp
<div class="SlickMe topmargin">
  @foreach($slides as $slide)
    <section class="header-splash {{$slide->Class}}">
      <div class="header-content">
        <div class="slide-content">
        <h1 class="textarea1">{{$slide->SlideTitle}}</h1>
        <p class="textarea2">
          {{$slide->SubTitle}}
        </p>
      </div>
    </div>
    </section>
  @endforeach
</div>
