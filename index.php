<?php
include('templates/header.php');
?>

 <section class="showcase">
    <div class="container">
        <div class="row padall">
            <div class="col-lg-12" style="padding-bottom:10px; padding-top:10px;">
                <h3>Exportar a Excel, CSV, PDF, Print Datatables con PHP MySQL</h3>               
            </div>
        </div>
            <div class="row padall border-bottom">
                <div class="col-lg-12">
                <div class="table-responsive-sm">
                    <table id="render-data" class="table display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Movil</th>
                                <th>Direccion</th>
                                <th>Salario</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Movil</th>
                                <th>Direccion</th>
                                <th>Salario</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('templates/footer.php');
?>