<div class="modal h-60" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="p-5">
                    <form action="/action_page.php">

                        <h2 class="text-center mt-2 mb-5">Acesse sua conta</h2>

                        <div class="mb-3">
                            {{-- <label for="email" class="form-label">Email:</label> --}}
                            <input type="email" class="form-control" id="email"
                                placeholder="Email / Nome de usuário" name="email">
                        </div>
                        <div class="mb-3">
                            {{-- <label for="pwd" class="form-label">Password:</label> --}}
                            <input type="password" class="form-control" id="pwd" placeholder="Senha"
                                name="pswd">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Lembre-me
                            </label>
                        </div>
                        <button type="submit" class="form-control btn btn-danger">Entrar</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#">Esqueceu a senha</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#"> <span class="text-secondary"> Ainda não se registrou? </span> Crie uma
                            conta GRÁTIS <br> <span class="text-secondary">e comece a jogar! </span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
