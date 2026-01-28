<div class="vh-100 overflow-auto">
    <div class="vh-100 container d-flex flex-column align-items-center justify-content-center fullwide" style="font-size:small;">
        <div class="col-md-4 shadow rounded bg-white fullwide">
            <div class="text-center text-dark p-2 rounded-1 border-bottom" style=" font-size:medium;"><?= SYSTEM_NAME ?></div>
            <a  class="d-flex justify-content-center mt-3 mb-3">
                <img src="<?= BASE_URL ?>/img/logo.png" class="align-items-center" style="width:70px;">
            </a>
            <h4 class="text-secondary text-center">Iniciar Sesion</h4>
            <div class="p-3">
                <div class="form-floating text-dark bg-white border border-primary border-top-0 border-end-0 border-start-0 mb-2" style="font-size: medium;">
                    <input type="text" class="form-control" id="username" placeholder="Username" style="border: 0;">
                    <label for="username"><span class="bi-person"></span> Usuario</label>
                </div>
                <div class="form-floating text-dark bg-white border border-primary border-top-0 border-end-0 border-start-0 mb-2" style="font-size: medium;">
                    <input type="password" class="form-control" id="password" placeholder="Password"  style="border: 0;">
                    <label for="password"><span class="bi-key"></span> Contraseña</label>
                </div>
                <input type="checkbox" onclick="show_password()">&nbsp;<label for="show_password">Ver Contraseña</label>
                <br>
                <br>
                <br>
                <button class="btn w-100 btn-secondary rounded-5" type="submit" id="login" name="login">Login</button>
            </div>
        </div>
        <p class="text-secondary mt-2" style="margin-bottom: -10px;">© <?=date('Y')?> <a href="#" target="_blank" rel="Angelo Ponce">Angelo Ponce</a>. Todos los Derechos Reservados.  version <?=VERSION?></p>
    </div>
</div>