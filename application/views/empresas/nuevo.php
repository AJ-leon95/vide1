<div class="container">

    <div class="card">
        <center>
            <h4>Nueva Empresa</h4>
        </center>
        <div class="card-body">
            <div class="mb-3">
                <label for="id_emp" class="form-label">Id</label>
                <input type="number" class="form-control" name="id_emp" id="id_emp" aria-describedby="helpId" placeholder="005">
            </div>
            <div class="mb-3">
                <label for="nom_emp" class="form-label">Name</label>
                <input type="text" class="form-control" name="nom_emp" id="nom_emp" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
                <label for="actividad_emp" class="form-label">Actividad</label>
                <input type="text" class="form-control" name="actividad_emp" id="actividad_emp" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
                <label for="ruc_emp" class="form-label">Ruc</label>
                <input type="text" class="form-control" name="ruc_emp" id="ruc_emp" aria-describedby="helpId" placeholder="">
            </div>
            <center>
                <a name="" id="" class="btn btn-primary" href="ojo" role="button">Crear</a>
                <a name="" id="" class="btn btn-success" href="<?php echo site_url() ?>/Empresa/index" role="button">Cancelar</a>
            </center>
        </div>
    </div>

</div>