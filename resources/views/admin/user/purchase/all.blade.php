@extends('layouts.admin')
@section('page')

<section>
    <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="row">
                    <h3>Purchase Details</h3>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2" style="margin-left:30px" ;>
                <ul>
                    <li class="btn btn-dark dbtn" ;><a href="products/add">Add Purchase</a></li>
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
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Quentity</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Software</td>
                            <td>1</td>
                            <td>20,000.00</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Manage
                                    </button>
                                    <ul class="dropdown-menu drtdwn" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item"
                                                href="#">Show</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="#">Modify</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Destroy</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
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