<!DOCTYPE html>

<html>
<head>
	<title>User list - PDF</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">	
<right><a class="btn btn-primary" href="{{ route('generate-pdf',['download'=>'pdf']) }}"> télécharger</a></right>
<left><a class="btn btn-success" href="{{ route('articles.index') }}"> Retour</a></left>	


@foreach ($articles as $article)

<div class="row">              
    <hr color="blue"><strong>Séance:</strong></hr>
                {{ $article->title}}

    <hr color="blue"><strong>Message:</strong></hr>
            <blockquote>  {{ $article->body}} </blockquote>
           <hr color="blue"> </hr></div>

	@endforeach

</div>
</body>
</html>