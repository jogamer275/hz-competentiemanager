
@extends('layouts.app')

@section('title')
    Kies competenties

@endsection

@section('content')

<h1>Dag <?= $name; ?>, kies hier je competentierino's</h1>
<h2> <?= $competency;

//    foreach

    //    ($competency as $competencies) {
    //        echo $competencies->abbreviation;}

//    ?>

<!-- } -->
</h2>

@endsection
@section('scripts')
	{{--<script>--}}
		{{--<?php--}}
			{{--if( $name == NULL) {--}}
				{{--header('Location: welcome.blade.php ');--}}
			{{--} else--}}



		{{--?>--}}

	{{--</script>--}}
<script>
	jQuery(document).ready(function($) {
	    $(".row-link").click(function() {
	        window.document.project = $(this).data("href");
	    });
	    $('#cohort-tabs a:first').tab('show') // Select first tab
	});
</script>
@endsection
