@section('title')
    БУЗ УР "Сюмсинская районная больница МЗ УР"
@endsection
    <!DOCTYPE html>
    <body lang="ru">
    @include('layouts.header')

    @yield('content')
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="Сюмсинская районная больница">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="{{ asset('assets/img/herb3.png') }}" rel="icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Версия для слепых -->
        <link href="{{ asset('assets/sleep/css/special.min.css') }}">
        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>
    @yield('styles')
    <body>
    <section id="appointment" class="appointment section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Спасибо доктор</h2>
                <p>Отправляя свои персональные данные из данной формы, я даю согласие на <a href="http://www.consultant.ru/document/cons_doc_LAW_61801/6c94959bc017ac80140621762d2ac59f6006b08c/"
                                                                    target="_blank">обработку моих персональных данных согласно ч.4 ст.9 152 ФЗ.</a> </p>
            </div>
               <ul>
                   @foreach($errors->all() as $message)
                    <li>{{$message}}</li>
                   @endforeach
               </ul>
             <form action="{{ route('thanks.store') }}" method="post">
                 @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя">

                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Ваша почта">

                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Ваш номер">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Ваше сообщение"></textarea>

                </div>
                 <div class="mt-3 text-center d-grid gap-2 d-md-block">
                     <button type="submit" class="btn btn-primary rounded-4">
                         Отправить сообщение
                     </button>
                    <div>
               </div>
            </form>
     </section>
    </body>
    @include('layouts.footer')
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- версия для слепых -->
    <script src="{{ asset('assets/sleep/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/sleep/js/uhpv-full.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
<!-- End Appointment Section -->
