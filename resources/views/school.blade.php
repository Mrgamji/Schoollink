<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $school->name }} - Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $school->logo_url }}" class="img-fluid rounded" alt="School Logo">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-3">{{ $school->name }}</h2>
                        <p><strong>Location:</strong> {{ $school->location }}</p>
                        <p><strong>About:</strong> {{ $school->description }}</p>
                        <p><strong>Contact:</strong> {{ $school->contact_email }} | {{ $school->contact_phone }}</p>
                        <a href="{{ $school->website }}" class="btn btn-primary" target="_blank">Visit Website</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Programs Offered -->
        <div class="mt-5">
            <h3>Programs Offered</h3>
            <ul class="list-group">
                @foreach($school->programs as $program)
                    <li class="list-group-item">{{ $program->name }}</li>
                @endforeach
            </ul>
        </div>

        <!-- School Gallery -->
        <div class="mt-5">
            <h3>Gallery</h3>
            <div class="row">
                @foreach($school->images as $image)
                    <div class="col-md-3 mb-3">
                        <img src="{{ $image->url }}" class="img-fluid rounded shadow-sm" alt="School Image">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-5">
            <h3>Reviews</h3>
            <form action="{{ route('school.review', $school->id) }}" method="post">
                @csrf
                <textarea name="review" class="form-control" placeholder="Leave a review" required></textarea>
                <button type="submit" class="btn btn-success mt-2">Submit Review</button>
            </form>
            <ul class="list-group mt-3">
                @foreach($school->reviews as $review)
                    <li class="list-group-item">
                        <strong>{{ $review->user->name }}:</strong> {{ $review->content }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
