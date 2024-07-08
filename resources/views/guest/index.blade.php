<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                            <p class="card-text"><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                            <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
