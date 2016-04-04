@extends('layouts.master')

@section('title')
Lorem Ipsum Generator
@stop

@section('content')
  <form method='POST' action='/LoremIpsum'>
  	<input type='hidden' name='_token' value='{{csrf_token()}}'>
	  <div class="row">
	    <div class="large-12 columns">
	      <h3>How many paragraphs?
	        <input type="text" placeholder="1-50" id='numParagraphs' name='numParagraphs' value={{ old('numParagraphs') }}>
	      </h3>
					<button type='submit' class='button success'>Generate</button>
	    </div>
	  </div>
	</form>

	<div class="row">
		<div class="large-12 columns">
			@if(count($errors) > 0)
				<ul data-alert class="callout warning">
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif
		</div>
	</div>


		@if(isset($paragraphs))
			<div class="row">
				<div class="large-12 columns">
					@foreach($paragraphs as $paragraph)
						{{ $paragraph }}<p><p>
					@endforeach
				</div>
			</div>
		@endif


@stop
