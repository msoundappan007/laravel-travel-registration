@extends('layouts.frontend')

@section('content')

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"style="background-color:#A9A9A9 ">
                        <h2>Update Details</h2>
                    </div>
                    <div class="body"style="background-color:#DCDCDC">
                        
                        <form action="{{url('update-data/'.$students->id)}}" >
                           
                            {{csrf_field()}}
                             @method('PUT')   
                            
                            <div class="mb-3">
                                <label class="form-label">Travel Id</label>
                                <input type="text" class="form-control" value="{{$students->TravelId}}"name="TravelId" placeholder="Enter your travelling id">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Request raised date  :&emsp;</label>
                                <input type="date"value="{{$students->RequestRaiseddate}}" name="RequestRaiseddate"></br>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Source</label>
                                <input type="text" class="form-control"value="{{$students->Source}}" name="Source" placeholder="Enter your source">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Destination</label>
                                <input type="text" class="form-control"value="{{$students->Destination}}" name="Destination" placeholder="Enter your Destination">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mode of travel &emsp;&emsp;&emsp;</label>
                                <select name="ModeOfTravel"value="{{$students->ModeOfTravel}}" id="ModeOfTravel">
                                  <option value="car">car</option>
                                  <option value="Bus">Bus</option>
                                  <option value="Train">Train</option>
                                  <option value="Flight">Flight</option>
                                </select></br>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Travel date &emsp; &emsp; &emsp;&emsp;</label>
                                <input type="date"value="{{$students->TravelDate}}" name="TravelDate"></br>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Roundtrip&emsp;&emsp;&emsp;&emsp;&emsp;</label>
                                <input type="radio" value="{{$students->Roundtrip}}"name="Roundtrip"  value="yes" checked>Yes&emsp;&emsp;</input><input type="radio" name="Roundtrip" value="no" checked>No</input>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
               </form>
                        
                    </div>
                </div>
            </div>   
        </div> 
    </div>
   
</section>
@endsection