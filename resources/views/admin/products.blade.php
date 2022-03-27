@extends('admin.layout.master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Products table</h3>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>image</th>
                                        <th>price</th>
                                        <th>size</th>
                                        <th>seller name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="tr-shadow">
                                            <td style="line-height: 45.5px">{{ $product->name }}</td>
                                            <td><img src="{{ asset('sellerproducts/' . $product->image) }}"
                                                    class="img-responsive h-10 w-10" style="height: 100px; width:100px"></td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->size }}</td>
                                            <td>{{ $product->seller->name }}</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <form method="post" action="/products/{{ $product->id }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="item" data-toggle="tooltip"
                                                            data-placement="top" title="Delete"><i
                                                                class="zmdi zmdi-delete"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
