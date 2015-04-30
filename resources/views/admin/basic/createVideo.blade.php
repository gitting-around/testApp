@extends('admin.basic.appBasic')

    @section('gjera')

        <div class="container-fluid">

            <div class="row">

                <h1 class="text-center">Upload a Video</h1>

                <div class="col-sm-6 text-center">

                    {!! Form::open(array('url' => 'basic/indexVideo', 'files' => true)) !!}

                        <div class="form-group">
                            {!! Form::label('title', 'Title') !!}
                            {!! Form::text('title', Input::old('title'), array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::text('description', Input::old('description'), array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('author', 'Author') !!}
                            {!! Form::text('author', Input::old('author'), array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'Select Image') !!}
                            {!! Form::file('image', Input::old('image'), array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('video', 'Select Video') !!}
                            {!! Form::file('video', Input::old('video'), array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('format', 'Film Format') !!}
                            {!! Form::text('format', Input::old('format'), array('class' => 'form-control')) !!}
                        </div>

                        {!! Form::submit('Upload', array('class' => 'btn btn-primary')) !!}

                    {!! Form::close() !!}

                </div>

                <div class="col-md-6 text-center">
                    <!-- if there are creation errors, they will show here -->
                    {!! HTML::ul($errors->all()) !!}
                </div>

            </div>

        </div>


@stop