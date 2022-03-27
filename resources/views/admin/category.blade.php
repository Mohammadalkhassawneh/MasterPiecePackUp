@extends("admin.layout.master")

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Category Table</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                </div>
                                <div class="rs-select2--light rs-select2--sm">
                                </div>
                            </div>
                            <div class="table-data__tool-right">
                                <a href="{{ route('categories.create') }}" style="float: right;"
                                    class="au-btn au-btn-icon au-btn--green au-btn--small">Add Category</a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>

                                        <th> Image</th>
                                        <th>Name </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $item)
                                        <tr class="tr-shadow">

                                            <td> <img src="{{ asset('uploads/' . $item->category_img) }}" width="100px"
                                                    height="70px" alt="Image"></td>

                                            <td>
                                                <span>{{ $item->category_name }}</span>
                                            </td>


                                            <td>
                                                <div class="table-data-feature">
                                                    <form action="{{ route('categories.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method("delete")
                                                        <button type="submit" class="item mr-2" data-toggle="tooltip"
                                                            data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('categories.edit', $item->id) }}">
                                                        <button class="item mr-2" data-toggle="tooltip"
                                                            data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>
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
    </div>
@endsection
