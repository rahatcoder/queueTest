@extends('layouts.admin')
@section('page')

<section>
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
						<form method="post" action="{{url('dashboard/user/submit')}}" style="margin-top:50px";>
							@csrf
							<div class="mb-3">
							<label for="username" class="form-label">UserName</label>
							<input type="username" class="form-control" name="username" aria-describedby="userHelp">
							<div id="userHelp" class="form-text">Please enter your user name.</div>
							</div>

							<div class="mb-3">
								<label for="email" class="form-label">Email address</label>
								<input type="email" class="form-control" name="email" aria-describedby="emailHelp">
								<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
							<div class="mb-3 form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>
						</div>
						<div class="col-md-1"></div>

					</div>
				</div>
			</section>
			
@endsection