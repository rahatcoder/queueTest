@extends('layouts.admin')
@section('page')
<section>
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
						<form method="post" action="{{url('dashboard/user/update')}}" style="margin-top:50px";>
							@csrf
							<div class="mb-3">
							<label for="username" class="form-label">UserName</label>
							<input type="username" class="form-control" name="username" value="{{$edt->name}}" aria-describedby="userHelp">
							<input type="hidden" class="form-control" name="id" value="{{$edt->id}}">
							<div id="userHelp" class="form-text">Your user name here.</div>
							</div>

							<div class="mb-3">
								<label for="email" class="form-label">Email address</label>
								<input type="email" class="form-control" name="email" value="{{$edt->email}}" aria-describedby="emailHelp">
								<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
							</div>
							<button type="submit" class="btn btn-primary">UPDATE</button>
						</form>
						</div>
						<div class="col-md-1"></div>

					</div>
				</div>
			</section>

@endsection