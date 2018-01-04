

@extends('layouts.app')

return view('portfolio', compact['portfolio']);

@section('content')



	<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

					<div class="col-sm-12">
						<div class="col-xs-12 col-sm-8">
							<h2>Nicole Pearson</h2>
							<p><strong>About: </strong> Translator </p>
							<p><strong>Skils: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
							<p><strong>Laguages: </strong>
								<span class="tags">English</span>
								<span class="tags">Italian</span>

							</p>
						</div>
						<div class="col-xs-12 col-sm-4 text-center">
							<figure>
								<img src="../img/agent1.jpg" alt="" class="img-circle img-responsive">
								<figcaption class="ratings">
									<p>Ratings
									<a href="#">
										<span class="fa fa-star"></span>
									</a>
									<a href="#">
										<span class="fa fa-star"></span>
									</a>
									<a href="#">
										<span class="fa fa-star"></span>
									</a>
									<a href="#">
										<span class="fa fa-star"></span>
									</a>
									<a href="#">
										 <span class="fa fa-star-o"></span>
									</a>
									</p>
								</figcaption>
							</figure>
						</div>
					</div>
					<div class="col-xs-12 divider text-center">


						<div class="col-xs-12 col-sm-4 emphasis">

							<div class="btn-group dropup btn-block">
							  <button type="button" href="editprofile" class="btn btn-primary"><span class="fa fa-gear"></span> Edit profile </button>

							  

							</div>
						</div>
					</div>
				 </div>
            </div>

		</div>
	</div>

@endsection