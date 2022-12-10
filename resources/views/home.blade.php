<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Como jogar em loterias internacionais online | Lotter brasil</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href=" {{ asset('css/styles.css') }} " rel="stylesheet" />
    <link href=" {{ asset('css/carousel.css') }} " rel="stylesheet" />
</head>

<body>

    @include('sections.nav')

    @include('sections.main')

    @include('sections.slider')

    @include('sections.thelotter')

    @include('sections.rifas')

    @include('sections.loterias-estrangeiras')

    @include('sections.loterias-internacionais')

    @include('sections.opniao')

    @include('sections.footer')

    @include('sections.modal')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/jquery.js') }} "></script>
    <script>
        $(document).ready(function() {
            var img_1 = "{{ asset('img1.jpeg') }}";
            var img_2 = "{{ asset('img2.jpeg') }}";
            var index_imagem_atual = 0;
            var imagens = [img_1, img_2];

            window.onload = setInterval(function() {
                $('.imageChange').attr('src', imagens[index_imagem_atual]);
                index_imagem_atual += 1;
                if (index_imagem_atual > 1) {
                    index_imagem_atual = 0;
                }
            }, 2000);
        });
    </script>
    <script src="{{ asset('js/openModal.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>

</body>

</html>
