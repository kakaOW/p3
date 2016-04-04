@extends('layouts.master')

@section('content')

<div class="row">
    <div class="large-12 columns">
        <div class="clearfix">
            <h1>Developer's Best Friend!</h1>
        </div>
    </div>
    <div class="large-12 columns">
        <h3>Lorem Ipsum</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
        </p>
        <p><em><a href="http://http://www.lipsum.com/" target="_blank">From http://www.lipsum.com/</a></em></p>
        <p><a href="/LoremIpsum" class="button success">Lorem Ipsum Generator &gt;&gt;</a></p>
    </div>
    <div class="large-12 columns">
        <h3>Random User Data</h3>
        <p>
        <img src="img/ffxv-640.jpg" alt="FFXV">
        </p>
        <p>The random user generator populates database for testing purpose.</p>
        <p><a href="/RandomUser" class="button success">Random User Generator &gt;&gt;</a></p>
    </div>
</div>


@stop
