@extends('layouts.app')
@section('content')
<div class="container-fluid">
      <div class="row">
        @extends('inc.navDashboard')
        @section('table')
        @include('inc.messages')
        <main role="main" >
        <div class="container">
              <h2 class='text-center font-weight-bold'>SUCCESSFUL ORDER</h2>
        </div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>o.id</th>
                  <th>c.id</th>
                  <th>FName</th>
                  <th>LName</th>
                  <th>Phno</th>
                  <th>Cake size</th>
                  <th>Email</th>
                  <th>Pickup Type</th>
                  <th>Address</th>
                  <th>Remark</th>
                  <th>Time of order</th>
               </tr>
              </thead>
              <tbody>
                @foreach($order as $item)
                <tr>
                  <td>{{$item->id_order}} </td>
                  <td>{{$item->id_cake}} </td>
                  <td>{{$item->fname}} </td>
                  <td>{{$item->lname}} </td>
                  <td>{{$item->phone}} </td>
                  <td>{{$item->size}} </td>
                  <td>{{$item->email}} </td>
                  <td>{{$item->pickupType}} </td>
                  <td>{{$item->address}} </td>
                  <td>{{$item->remark}} </td>
                  <td>{{$item->created_at}} </td>
                  {{-- <td><button type="button" class="btn btn-success"><a href="/admin/order/success/{{$item->id_order}}" class="btn btn-success">Complete</a></button></td> --}}
                  {{-- <td><button type="button" class="btn btn-danger"><a href="/admin/order/fail/{{$item->id_order}}" class="btn btn-danger">Failed</a></button></td> --}}

                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script>
      feather.replace()
    </script>

@endsection
