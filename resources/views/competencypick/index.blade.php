@extends('layouts.app')

@section('title')
	Keuzelijst competenties
@endsection

@section('content')

	@if (count($competenties) > 0)
	<!-- Shows ID of item in database and name-->
		<table class="table table-striped table-hover">
			<thead>
				<th class="col-sm-1">Id</th>
				<th class="col-sm-4">Naam</th>

			</thead>
			<tbody>
				@foreach ($competenties as $competency)
				<tr class="row-link" style="cursor: pointer;"
					data-href="{{action('CompetencyController@show', ['id' => $competency->id]) }}">
					<td class="table-text">{{ $competency->id }}</td>
					<td class="table-text">{{ $competency->name}}</td>
					<td class="table-text">
						<div>
                        {!! Form::open(['route' => ['competencypick.store'], 'method' => 'post']) !!}
							<button type="submit" class="btn btn-primary">
								Competentie kiezen
							</button>
                        {!! Form::close() !!}
						</div>
					</td>

					<td class="table-text">
						<div class="col-sm-1">

						</div>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endif
@endsection
@section('scripts')
<script>
	jQuery(document).ready(function($) {
	    $(".row-link").click(function() {
	        window.document.competency = $(this).data("href");
	    });
	    $('#cohort-tabs a:first').tab('show') // Select first tab
	});
</script>
@endsection
