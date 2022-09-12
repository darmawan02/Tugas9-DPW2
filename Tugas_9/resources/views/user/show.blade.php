@extends('template.base')

@section('content')
    <div class= 'Container'>
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail Data User
                    </div>
                    <div class="card-body">
                        <h3>{{$user->nama}}</h3>
                        <hr>
                        <p>
                            {{"@".$user->username}} |
                            Email : {{$user->email}} |  


                            No Handpone : {{$user->detail->no_handpone}}  
                        </p>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection