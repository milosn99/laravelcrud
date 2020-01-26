 @include('inc.header')
	<div class="container">
		<div class="row">
			<legend>Lista naših drva</legend>
			<div class="row">
				<div class="col-md-30 col-lg-30">
					@if(session('info'))
						<div class="alert alert-success">
							{{session('info')}}
						</div>	
					@endif
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Naziv</th>
						<th>Opis</th>
						<th>Opcije</th>
					</tr>
				</thead>
				<tbody>
					@if(count($articles) > 0)
						@foreach($articles->all() as $article)
						<tr>
							<td>{{ $article->id }}</td>
							<td>{{ $article->title }}</td>
							<td>{{ $article->description }}</td>
							<td>
								<a href='{{ url("/read/{$article->id}") }}' class="btn btn-primary">Pročitaj</a> |
								<a href='{{ url("/update/{$article->id}") }}' class="btn btn-success">Izmeni</a> |
								<a href='{{ url("/delete/{$article->id}") }}' class="btn btn-danger"  onclick="return confirm('Da li da brišem ovo drvo?');">Obriši</a> 
							</td>
						</tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
@include('inc.footer')