@extends('layouts.admin')
@section('page')

<section>
    <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="row">
                    <h3>All Products</h3>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2" style="margin-left:30px" ;>
                <ul>
                    <li class="btn btn-dark dbtn" ;><a href="products/add">Add Products</a></li>
                </ul>
                <div class="col-md-1"></div>
            </div>
        </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table class="table table-dark table-striped table-hover custom_view_table" style="margin-top:20px" ;>
                    <thead class="th">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $data)
                        <tr>
                            <th scope="row">{{$data->products_id}}</th>
                            <td>{{$data->products_title}}</td>
                            <td>{{$data->products_category}}</td>
                            <td>{{$data->products_amount}}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Manage
                                    </button>
                                    <ul class="dropdown-menu drtdwn" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item"
                                                href="{{url('dashboard/products/view/' . $data->procate_id)}}">Show</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{url('dashboard/products/edit/' . $data->procate_id)}}">Modify</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Destroy</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>
            <div class="col-md-1"></div>

        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9" style="margin-top:50px" ;>
                <div class="row">
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <button type="button" class="btn btn-sm btn-dark">Print</button>
                            <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                            <button type="button" class="btn btn-sm btn-dark">Excel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

@endsection