
@extends('layouts.app')

@section('title')
  Your competencies
@endsection

@section('content')

    <h1>Dag {{ Auth::user()->name }}, hier zijn jouw competenties</h1>
    <h2>

        <table style="width:100%">
            <tr>
                <th>Jouw Competenties</th>
                <th></th>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="Language" value= <?= $userComps = DB::table('user_competencies')->pluck('competency_id');?>>

                </td>
            </tr>
            @foreach ($userComps as $userComp)
                <tr>
                    <td>
                        {{$compName = DB::table('competencies')->where('id', $userComp)->value('name')}}
                    </td>
                </tr>
            @endforeach

        <!--This if-statement gives the user some information about the number of competencies-->
        <h4 style="color: Red">
            @if(count($userComps)== 0)
                Je hebt geen competenties
            @elseif(count($userComps)== 1)
                Je hebt 1 competentie. Ga zo door!
            @elseif(count($userComps)== 2 or (count($userComps) == 3))
                Je hebt een goed aantal competenties. Goed gedaan!
            @else
                Je hebt een heleboel competenties. Pas op dat je er niet teveel doet!
            @endif
        </h4>

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
