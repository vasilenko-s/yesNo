@extends('questions.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.8 Random Question Belka</h2>

            </div>

        </div>

    </div>

    <form action="" method="POST" id="myForm">

        @csrf

        <table class="table table-bordered">

            <tr>
                <th>Title</th>
                <th width="280px">Answer</th>
            </tr>

            <tr>
                @if ($question)
                    <td>{{ $question->title }}</td>
                @endif
                <td>
                    <div class="d-block my-3" style="margin-left: auto; margin-right: auto" >
                        <div class="custom-control custom-radio">
                            <input id="Yes" value="yes" name="answer" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="Yes">Yes</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input id="No" value="no" name="answer" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="No">No</label>
                        </div>
                    </div>
                </td>
            </tr>

        </table>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="button" class="btn btn-primary" onClick=ajaxAnswer()>Submit</button>
        </div>

        <div id="image" class="col-xs-12 col-sm-12 col-md-12 text-center"></div>

    </form>



@endsection