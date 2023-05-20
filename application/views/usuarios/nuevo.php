<div class="container">
    <div class="card">
        <center>
            <h4>Nuevo Usuario</h4>
        </center>
        <div class="card-body">
            <form action="ojo" method="post">
                <div class="mb-3">
                    <label for="id_video" class="form-label">ID:</label>
                    <input type="number" class="form-control" name="id_video" id="id_video" aria-describedby="helpId" placeholder="001">
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Jhonatan">
                </div>
                <div class="mb-3">
                    <label for="contra" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="contra" id="contra" aria-describedby="helpId" placeholder="******">

                </div>
                <center>
                    <a name="" id="" class="btn btn-primary" href="ojo" role="button">Crear</a>
                    <a name="" id="" class="btn btn-success" href="<?php echo site_url() ?>/Usuario/index" role="button">Cancelar</a>
                </center>
            </form>
        </div>
    </div>
</div>