@extends('questions.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Question</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('questions.index') }}"> Back</a>

            </div>

        </div>

    </div>



    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif



    <form action="{{ route('questions.update',$question->id) }}" method="POST">

        @csrf

        @method('PUT')



        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Title:</strong>

                    <input type="text" name="title" value="{{ $question->title }}" class="form-control" placeholder="Title" required>

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>



    </form>

@endsection