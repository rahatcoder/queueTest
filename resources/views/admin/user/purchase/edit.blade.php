@extends('layouts.admin')
@section('page')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form method="post" action="{{url('dashboard/productsCategory/update')}}" style="margin-top:50px" ;>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Category Name</label>
                        <input type="name" class="form-control" name="name" value="{{$edt->procate_name}}"
                            aria-describedby="nameHelp">
                        <input type="hidden" class="form-control" name="id" value="{{$edt->procate_id}}">
                        <div id="nameHelp" class="form-text">Please enter your category name.</div>
                    </div>

                    <div class="mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                        <input type="remarks" class="form-control" name="remarks" value="{{$edt->procate_remarks}}"
                            aria-describedby="remarksHelp">
                        <div id="remarksHelp" class="form-text">Please remarks.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
            <div class="col-md-1"></div>

        </div>
    </div>
</section>

@endsection