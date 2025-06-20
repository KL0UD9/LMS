<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.css')

    <style>
        .table_deg {
            border: 1px solid white;
            margin: auto;
            text-align: center;
            margin-top: 100px;
        }

        th {
            background-color: skyblue;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        td {
            color: white;
            background-color: black;
            border: 1px solid white;
        }

        .book_img {
            height: 100px;
            width: 90px;
            margin: auto;
        }
    </style>

</head>

<body>

    @include('home.header')

    <div class="currently-market">
        <div class="container">
            <div class="row">

            @if(session()->has('message'))

            <div style="margin-top: 80px;" class="alert alert-success alert-dismissible fade show fs-5" role="alert">
                {{ session()->get('message') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif

                <table class="table_deg">
                    <tr>
                        <th>Book Name</th>
                        <th>Book Auther</th>
                        <th>Book Status</th>
                        <th>Image</th>
                        <th>Cancel Request</th>
                    </tr>

                    @foreach ($data as $data)

                    <tr>
                        <td>{{$data->book->title}}</td>
                        <td>{{$data->book->auther_name}}</td>
                        <td>{{$data->book->status}}</td>
                        <td>
                            <img class="book_img" src="book/{{$data->book->book_img}}" alt="">
                        </td>

                        <td>
                            @if ($data->status == 'Applied')

                            <a href="{{url('cancel_req', $data->id)}}" class="btn btn-warning">Cancel</a>

                            @else
                            <p style="color: white; font-weight: bold;">Not Allowed</p>


                            @endif
                        </td>
                    </tr>
                    @endforeach
                    <tr></tr>
                </table>

            </div>
        </div>
    </div>


    @include('home.footer')
</body>

</html>
