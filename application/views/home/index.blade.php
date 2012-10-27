@layout('layouts/site_template')

@section('slider')
<div class="row">
  <div class="twelve columns">
    <div id="slider">
      <img src="http://placehold.it/1000x400&text=[img 1]" />
      <img src="http://placehold.it/1000x400&text=[img 2]" />
      <img src="http://placehold.it/1000x400&text=[img 3]" />
      <img src="http://placehold.it/1000x400&text=[img 4]" />
    </div>
  </div>
</div>
@endsection

@section('content')
<!-- Quick Service Blurb -->

<div class="row">
  <div class="twelve columns text-center">
    <h3>Presents are awesome! It's time your wrapping paper is too!</h3>
    <p>Instawrap.it is habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, <br/> feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
    <hr/>
  </div>
</div>

<!-- Callouts -->
<div class="row">

  <div class="four columns">
    <img src="http://placehold.it/400x300&text=[img]" />
    <h4>This is a content section</h4>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
  </div>

  <div class="four columns">
    <img src="http://placehold.it/400x300&text=[img]" />
    <h4>This is a content section</h4>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
  </div>

  <div class="four columns">
    <img src="http://placehold.it/400x300&text=[img]" />
    <h4>This is a content section</h4>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
  </div>

</div>

<!-- Call to Action -->
<div class="row">
  <div class="twelve columns">

    <div class="panel">
      <h4>Call to Action</h4>

      <div class="row">
        <div class="nine columns">
          <p>What should they do?</p>
        </div>
        <div class="three columns">
          <a href="#" class="radius button right">Press this Button, Bitch!</a>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
