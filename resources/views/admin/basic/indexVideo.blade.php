@extends('admin.basic.appBasic')

    @section('gjera')

    <title>Update Videos</title>

    <section class="bg-light-gray" id="videos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-heading">Manage Videos</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 text-left">
                    <a class="btn btn-small btn-success" href="{{ URL::to('basic/indexVideo/create') }}">Upload New</a>
                    <a href="{{URL::to('#editModal2')}}" class="btn btn-small btn-success" data-toggle="modal"> Preview Videos</a>
                </div><br><br>
                <div class="col-md-12 ">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td colspan="3">Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($vdo as $vdos => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->description }}</td>

                                <!-- we will also add show, edit, and delete buttons -->

                                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                <td><a type="button" class="btn btn-small btn-success" data-toggle="modal" data-target="#showModal" data-whatever={{ $value->id }}>Show</a></td>
                                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                <td><a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit</a></td>
                                <td><a class="btn btn-small btn-warning" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Delete</a></td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                <!--krijo links te navigimit midis faqeve -->
                    <div class="paginate">
                        {!! $vdo->render() !!}
                    </div>

                </div>
                    <div class="portfolio-caption">
                        <h4>Update Videos</h4>
                    </div>
            </div>
        </div>

    </section>

@stop