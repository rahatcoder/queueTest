@extends('layouts.admin')
@section('page')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form method="post" action="{{url('dashboard/productsCategory/submit')}}" style="margin-top:50px" ;>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Category Name</label>
                        <input type="name" class="form-control" name="name" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text">Please enter your category name.</div>
                    </div>

                    <div class="mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                        <input type="remarks" class="form-control" name="remarks" aria-describedby="remarksHelp">
                        <div id="remarksHelp" class="form-text">Please remarks.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-1"></div>

        </div>
    </div>
</section>

@endsection