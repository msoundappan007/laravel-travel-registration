@extends('layouts.frontend')
@section('content')
<div    >
  <section class="my-5">
      <div class="container" >
          <div class="row">
              <div class="col-md-12">
              @if(session()->has('status'))
    <div class="alert alert-success">
        {{ session()->get('status') }}
    </div>
@endif
                  <div class="card"style="background-color:#A9A9A9">
                      <div class="card-header text-center">
                          <h2>Details   </h2>
                      </div>
                      <div class="card-body">
                        <table class="table">
                             <thead>
                                 <tr>
                                     <th>id</th>
                                     <th>Travel Id</th>
                                     <th>Request Raised date</th>
                                     <th>Source</th>
                                     <th>Destination</th>
                                     
                                     <th>Mode Of Travel</th>
                                     <th>Travel Date</th>
                                     <th>Roundtrip</th>
                                     <th>Action</th>
                                 </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $stud)
                                <tr>
                                <td>{{$stud->id}}  </td>
                                   <td>{{$stud->TravelId}}  </td>
                                   <td> {{$stud->RequestRaiseddate}} </td>
                                   <td> {{$stud->Source}} </td>
                                   <td> {{$stud->Destination}} </td>
                                   <td> {{$stud->ModeOfTravel}} </td>
                                   <td> {{$stud->TravelDate}} </td>
                                   <td> {{$stud->Roundtrip}} </td>
                                   <td>
                                       <a href="{{url('edit/'.$stud->id)}}" class="btn btn-success">Edit</a>
                                       <a href="{{url('delete/'.$stud->id)}}" class="btn btn-danger">Delete</a>
                                   </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
