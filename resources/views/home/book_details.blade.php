<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')
</head>

<body>

    @include('home.header')

    <div class="currently-market">
        <div class="container">
            <div class="section-heading" style="margin-top: 100px;">
                <div class="line-dec"></div>
                <h2><em>Book</em> Details</h2>
            </div>

            <div class="row grid justify-content-center">
                <div class="currently-market-item all msc" style="width: 90%;">
                    <div class="item">
                        <div class="left-image">
                            <img src="/book/{{ $book->book_img }}" alt="Book Image" style="border-radius: 20px; min-width: 195px;">
                        </div>
                        <div class="right-content">
                            <h4>{{ $book->title }}</h4>
                            <span class="author">
                                <img src="/auther/{{ $book->auther_img }}" alt="Author Image" style="max-width: 50px; border-radius: 50%;">
                                <h6>{{ $book->auther_name }}</h6>
                            </span>
                            <div class="line-dec"></div>
                            <p><strong>Current Available <br></strong></p>
                            <p><span style="font-size: 25px; font-weight: bold;">{{ $book->quantity }}</span></p>
                            <p><strong>Category:</strong> {{$book->category->cat_title}}</p>
                            <p><strong>Description:</strong> {{ $book->description }}</p>

                            <div class="text-button">
                                <a href="{{ url()->previous() }}">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    @include('home.footer')

</body>

</html>
