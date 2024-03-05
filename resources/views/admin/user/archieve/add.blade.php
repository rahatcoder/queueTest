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
                        <label for="name" class="form-label">Product Title</label>
                        <input type="name" class="form-control" name="name" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text">Please enter your product name.</div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>Please Select</option>
                            <option value="1">Web Designing</option>
                            <option value="2">Web Development</option>
                            <option value="3">Graphic Design</option>
                            <option value="4">WordPress Website</option>
                        </select>
                        <div id="nameHelp" class="form-text">Please select your product category.</div>
                    </div>

                    <div class="mb-3">
                        <label for="remarks" class="form-label">Amount</label>
                        <input type="remarks" class="form-control" name="remarks" aria-describedby="remarksHelp">
                        <div id="remarksHelp" class="form-text">Please enter amount.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-1"></div>

        </div>
    </div>
</section>

@endsection