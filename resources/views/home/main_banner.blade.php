<!-- ***** Main Banner Area Start ***** -->

<div class="main-banner">
    <div class="container">
        <div class="row">


            @if(session()->has('message'))

            <div class="alert alert-success alert-dismissible fade show fs-5" role="alert">
                {{ session()->get('message') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif


            <div class="col-lg-6 align-self-center">
                <div class="header-text">
                    <h6>Book is Knowledge</h6>
                    <h2>Knowledge is Power</h2>
                    <p>Discover the power of books with this sleek, modern library-themed website template. Built on Bootstrap 5, it’s perfect for bookstores, educational platforms, or personal reading blogs. Customize it effortlessly and make it your own!</p>
                    <div class="buttons">
                        <div class="border-button">
                            <a href="{{url('explore')}}">Explore Top Books</a>
                        </div>
                        <div class="main-button">
                            <a href="" target="_blank">Watch Our Videos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="">
                    <div class="item">
                        <img src="assets/images/banner.png" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/images/banner2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->
