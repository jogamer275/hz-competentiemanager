
@extends('layouts.app')

@section('title')
    Kies competenties

@endsection

@section('content')

<h1>Dag <?= $name; ?>, selecteer hier je competenties</h1>
<h2>

	<table style="width:100%">
		<tr>
			<th>Naam</th>
			<th>Afkorting</th>
			<th></th>
		</tr>
		@foreach ($competencies as $competency => $abbreviation)
			<tr>
				<td>
					{{ $abbreviation }}
				</td>
				<td>
					{{ $competency }}
				</td>
				<td>
					<button type="submit" class="btn btn-primary">
						Kiezen
					</button>
				</td>
			</tr>
		@endforeach

	</table>
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
