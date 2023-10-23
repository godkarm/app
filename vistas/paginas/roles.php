<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Mant. Roles</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Mant. Roles</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <td>
                <button type="button" class="btn btn-success" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                <i class="fa fa-user-plus" aria-hidden="true"></i>   Crear Rol
                </button>
                </td>

            </div>
            <div class="card-body">
            <table id="example1" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Rol</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
            </tr>
            </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Rol</th>
                <th>Estado</th>
            </tr>
        </tfoot>
    </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            <!-- Footer -->
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Crear Rol</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
            <form class="row g-3">
            <div class="col-6">
                    <label for="inputId" class="form-label">Id</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Ingresar Id">
                </div>
                <div class="col-6">
                    <label for="inputRol" class="form-label">Rol</label>
                    <input type="text" class="form-control" id="nputAddress" placeholder="Ingresar Rol">
                </div>
                <div class="form-group">
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Estado</label>
                    <select id="inputState" class="form-select">
                    <option selected>Activo</option>
                    <option>Inactivo</option>
        </select>
            </div>
    </div>
 </form>
 

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      </div>