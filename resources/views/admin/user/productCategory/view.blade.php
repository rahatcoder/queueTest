@extends('layouts.admin')
@section('page')

<section>
    <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="row">
                    <h3><i class="fab fa-gg-circle"></i> View Users</h3>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2" style="margin-left:30px" ;>
                <ul>
                    <li class="btn btn-dark" ;><a href="/dashboard/allUsers">ALL USER</a></li>
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
                <table class="table table-dark table-striped table-hover custom_view_table">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{$vue->procate_name}}</td>
                    </tr>
                    <td>Remarks</td>
                    <td>:</td>
                    <td>{{$vue->procate_remarks}}</td>
                    </tr>
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