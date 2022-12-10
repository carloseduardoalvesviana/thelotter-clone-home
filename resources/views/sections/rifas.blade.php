<h3 class="text-center mt-5 mb-5">Rifas</h3>

<div class="container text-center ">
    <div class="row align-items-center px-5">
        <div class="col">
            <div class="card mb-3 bg-success bg-opacity-50 text-white" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://www.thelotter.com.br/objects/dm.tlo?id=29364&v=2022211334"
                            class="img-fluid rounded-start mt-4" alt="..." width="70px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">2 Bilhões em premios</p>
                            <p class="card-text"><small class="text-muted">6 Jan 2023 09:00</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-success bg-opacity-50 text-white" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://www.thelotter.com.br/objects/dm.tlo?id=29364&v=2022211334"
                            class="img-fluid rounded-start mt-4" alt="..." width="70px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">2 Bilhões em premios</p>
                            <p class="card-text"><small class="text-muted">6 Jan 2023 09:00</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-success bg-opacity-50 text-white" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://www.thelotter.com.br/objects/dm.tlo?id=29364&v=2022211334"
                            class="img-fluid rounded-start mt-4" alt="..." width="70px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">2 Bilhões em premios</p>
                            <p class="card-text"><small class="text-muted">6 Jan 2023 09:00</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


{{-- Aqui --}}
<div class="container text-center">
    <div class="row px-5 mt-3">
        <div class="col col-sm d-flex text-dark rounded">
            <div class="card">
                <div class="card-body">
                    <div class="card-header text-start d-flex justify-content-between">
                        <h4> Como funciona ? </h4>
                        <a href="#">Ler mais</a>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-default text-primary">Escolha ></button>
                        <button class="btn btn-default text-secondary">Compre ></button>
                        <button class="btn btn-default text-secondary">Veja ></button>
                        <button class="btn btn-default text-secondary">Ganhe ></button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="mt-5" width="300px" src="{{ asset('imagens/img_lado_video.jpeg') }}"
                                alt="">
                        </div>
                        <div class="col-md-6 mt-2">
                            {{-- <img width="300px" src="{{asset('imagens/como_funciona_e_resultados/assisti video.png')}}" alt=""> --}}
                            Assista um vídeo
                            <video width="150px" controls class="mt-3">
                                <source src="{{ asset('videos/video_demonstrativo.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col col-sm d-flex text-dark rounded">
            <div class="card">
                <div class="card-body">
                    <div class="card-header text-start">
                        <div class="card-header text-start d-flex justify-content-between">
                            <h4> Resultados de Loteria </h4>
                            <a href="#">Ver todas</a>
                        </div>
                    </div>
                    <div class="row text-start text-secondary">
                        <div class="col-md-12">
                            E.U.A - Mega Millions
                        </div>
                        <div class="col-md-12 text-end text-secondary">
                            10 dez 01:00
                        </div>

                        <div class="col-md-12 mt-3">
                            <button class="rounded-circle">08</button>
                            <button class="rounded-circle">19</button>
                            <button class="rounded-circle">53</button>
                            <button class="rounded-circle">61</button>
                            <button class="rounded-circle border-danger text-danger">19</button>
                        </div>
                    </div>
                    <div class="row text-start text-secondary mt-5">
                        <div class="col-md-12">
                            Itália - Super Star
                        </div>
                        <div class="col-md-12 text-end text-secondary">
                            6 dez 16:00
                        </div>

                        <div class="col-md-12 mt-3">
                            <button class="rounded-circle">08</button>
                            <button class="rounded-circle">19</button>
                            <button class="rounded-circle">53</button>
                            <button class="rounded-circle">61</button>
                            <button class="rounded-circle border-danger text-danger">19</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
