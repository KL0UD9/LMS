<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')
    <title>Favorite Books</title>
</head>

<body>

    @include('home.header')

    <div class="categories-collections">
        <div class="container">
            <h2 class="mt-5 mb-4">Favorite Books</h2>

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($favorites->count() > 0)
            <div class="row">
                @foreach($favorites as $favorite)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="book/{{ $favorite->book->book_img }}" class="card-img-top" alt="{{ $favorite->book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $favorite->book->title }}</h5>
                            <p class="card-text">Author: {{ $favorite->book->auther_name }}</p>
                            <a href="{{ url('book_details', $favorite->book->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p>You have no favorite books yet.</p>
            @endif

        </div>
    </div>

    @include('home.footer')

</body>

</html>
