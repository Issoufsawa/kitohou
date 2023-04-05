@extends('layouts.admin')

@section('content')

<div class="pd-20 card-box mb-30">

					<form method="POST" action="{{route('services.update',['service'=>$service->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nom du service</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="nom du service" name="name" value="{{$service->name}}">
							</div>
						</div>
						<div class="form-group">
                            <label>Description </label>
                            <textarea class="form-control" name="description"> value="{{$service->description}}"></textarea>
                        </div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control"type="file" name="image" >
							</div>
						</div>
                        <button type="submit" class="btn btn-primary me-2">Envoyer</button>
                    <button class="btn btn-light"><a href="{{route('services.index')}}">Annuler</a></button>
					</form>

				</div>

@endsection




