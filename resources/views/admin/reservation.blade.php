@extends("admin.layout.master")

@section('content')
    <div class="col-lg-12" style="margin-top: 120px">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>

        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>Reservation_id</th>
                        <th>user_id</th>
                        <th>product_id</th>
                        <th>hold_date</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @if (count($user->reservation) > 0)
                            @foreach ($user->reservation as $value)
                                <tr class="tr-shadow">
                                    <td>{{ $value->pivot->id }}</td>
                                    <td>{{ $value->pivot->user_id }}</td>
                                    <td>{{ $value->pivot->product_id }}</td>
                                    <td>{{ $value->pivot->hold_date }}</td>
                                    <td>{{ $value->pivot->status }}</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
@endsection
