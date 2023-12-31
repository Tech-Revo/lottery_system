<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Royal Lucky | Contact Us</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('homeLayout.header')
</head>

<body>

    @include('homeLayout.nav')



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>View Data</li>
                </ol>
                <h2>View Data</h2>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Contact Section ======= -->

        <section id="contact" class="contact mt-3">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $lottery->lottery_name }}</h2>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">



                    <img src="{{ $lottery->getFirstMediaUrl('lottery_image') }}" id="myImg" data-bs-toggle="modal"
                        data-bs-target="#myModal" style="max-width: 500px;" class="img-fluid d-block mx-auto" />



                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">{{ $lottery->lottery_name }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <img src="{{ $lottery->getFirstMediaUrl('lottery_image') }}" style="max-width: 600px;"
                        class="img-fluid d-block mx-auto" />
                </div>


            </div>
        </div>
    </div>





    @include('homeLayout.footer')



</body>

</html>
