@extends ('backendtemplate')

@section('content')

  <div class="container-fluid">
    
    <h2>Room Page</h2>

    <div class="d-flex">
      <a href="{{route('room.create')}}" class="btn btn-info">
      Add Room
      </a>
    </div>

    <div class="table-responsive mt-3">
      <table class="table-bordered w-100">
        
        <thead>
          <tr>
            <th>No.</th>
            <th>Room Number</th>
            <th>Name</th>
            <th>Description</th>
            <th>Rate</th>
            <th>Actions</th>
          </tr>
        </thead>

        <tbody>
          @php $i=1; @endphp
          @foreach($rooms as $room)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$room->rnumber}}</td>
            <td>{{$room->name}}</td>
            <td>{{$room->description}}</td>
            <td>{{$room->rate}}</td>
            <td>
              <a href="{{route('room.show',$room->id)}}" class="btn btn-warning">Detail</a>
              <a href="{{route('room.edit',$room->id)}}" class="btn btn-success">Edit</a>
              <form method="post" action="{{route('room.destroy',$room->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                @csrf
                @method('DELETE')
                <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>

        <tfoot>
          
        </tfoot>

      </table>
    </div>

  </div>

@endsection