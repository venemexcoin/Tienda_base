<div>
    <div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Al Slider    
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addlogo')}}" class="btn btn-success pull-right">Add New logo</a>
                        </div>
                    </div>
                </div>
                <div class="panel body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logos as $logo)
                                <tr>
                                    <td>{{$logo->id}}</td>
                                    <td>{{$logo->name}}</td>
                                    <td>{{$logo->link}}</td>
                                    <td><img src="{{asset('assets/images/Logo')}}/{{$logo->image}}" width="120"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

