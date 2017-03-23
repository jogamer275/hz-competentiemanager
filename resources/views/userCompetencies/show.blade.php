
@extends('layouts.app')

@section('title')
  Your competencies
@endsection

@section('content')

    <h1>Dag {{ Auth::user()->name }} ({{ Auth::user()->id }}), hier zijn jouw competenties</h1>
    <h2>

        <table style="width:100%">
            <tr>
                <th>ID Competentie</th>
                <th></th>
            </tr>
            <tr>
                <td>

                </td>
            </tr>
            {{--@foreach ($comps as $comp)--}}
                {{--<tr>--}}
                    {{--<td>--}}
                        {{--{{ $comp->name }}--}}
                    {{--</td>--}}
                    {{--<td>--}}
                        {{--{{ $comp->abbreviation }}--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}

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
