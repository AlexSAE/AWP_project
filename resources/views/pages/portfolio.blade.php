@extends('layouts.app')
@section('content')
	<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					<div class="col-sm-12">
						<div class="col-xs-12 col-sm-8">
							<h2>{{ $user->name }}</h2>
							<p>
								<strong>Type: </strong>

								@if($user->type_id == 1)
									Employer
								@else
									Translator
								@endif
							</p>

							<p>
								<strong>About: </strong>
								{{ $user->about }}
							</p>

							@if($user->type_id == 2)
							<p>
								<strong>Languages: </strong>
								@foreach(explode(',', $user->languages) as $language)
									<span class="tags">{{ strtoupper($language) }}</span>
								@endforeach
							</p>
							@endif

						</div>
						<div class="col-xs-12 col-sm-4 text-center">
							<figure>
								<img src="{{ $user->pic }}" alt="" class="img-circle img-responsive">
							</figure>
						</div>
					</div>

					@if($user->id == \Illuminate\Support\Facades\Auth::user()->id)
					<div class="col-xs-12 divider text-center">
						<div class="col-xs-12 emphasis">
							<div class="btn-group dropup btn-block">
							  <a type="button" href="/editprofile/{{ $user->id }}" class="btn btn-primary">
								  <span class="fa fa-gear"></span>
								  Edit profile
							  </a>
								@if($user->type_id == 1)
									<a type="button" class="btn show-post-form btn-primary">
										<span class="fa fa-gear"></span>
										New post
									</a>
								@endif
							</div>

						</div>
					</div>
					@endif

					@if($user->type_id == 1)

						<div class="row create-post" style="display: none;">
							<form class="form-horizontal" action="/createpost" method="POST">
								{{ csrf_field() }}
								<label for="name">Title</label>
								<input type="text" required class="form-control" name="title" id="title" placeholder="Post title">
								<br/>
								<label for="about">Description</label>
								<input type="text" required class="form-control" name="description" id="description" placeholder="Post desciption">
								<br/>
								<label for="about">Languages</label>
								<input type="text" required class="form-control" name="languages" id="languages" placeholder="en,de,sr">
								<br/>
								<button type="submit" class="btn btn-primary">
									<span class="fa fa-gear"></span>
									Create post
								</button>
							</form>
						</div>


					<div class="row col-xs-12 divider">
						<br/>
						<hr/>
						<p>My posts</p>
						<ul>
							@foreach($user->posts as $post)
								<li>
									<strong>Title:</strong> {{ $post->title }}
									<br/>
									<strong>Description:</strong> {{ $post->description }}
									<br/>
									<strong>Languages:</strong> {{ $post->languages }}
									<br/>
								</li>
							@endforeach
						</ul>

					</div>
					@endif

				 </div>
            </div>
		</div>
	</div>
	@if($user->type_id == 1)

		<script type="text/javascript">
			$(document).ready(function(){
				$('.show-post-form').click(function(){
				    $('.create-post').toggle();
				});
			});
		</script>

	@endif

@endsection