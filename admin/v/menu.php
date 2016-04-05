<!--Codigo del menu que se mostrara-->
 <ul class="nav sidebar-menu">
    <li class="sidebar-label pt30">Menu</li>

    <li class="active">
        <a class="accordion-toggle menu-open" href="#">
            <span class="fa fa-group"></span>
            <span class="sidebar-title">Alumnos</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <?php 
                /*Funcion para obtener el directorio actual*/
                $directorioActual=getcwd();    

                /*Verifica que ruta poner en el menu*/
                if($directorioActual == "usuario"){
                    echo "<li class='active'>
                        <a href='../../../registro'>
                          Registrar alumno 
                        </a>
                    </li>
                    <li>
                        <a href='./viewUser.php'>
                          Consultar alumno 
                        </a>
                    </li>";
                }else{
                    echo "<li>
                        <a href='../../../registro'>
                          Registrar alumno 
                        </a>
                    </li>
                    <li>
                        <a href='../usuario/viewUser.php'>
                          Consultar alumno 
                        </a>
                    </li>";
                }
             ?>
            
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-book"></span>
            <span class="sidebar-title">Cursos</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <?php 
                /*Funcion para obtener el directorio actual*/
                $directorioActual=getcwd();    

                /*Verifica que ruta poner en el menu*/
                if($directorioActual == "curso"){
                    echo "<li class='active'>
                            <a href='./createCourse.php'>
                                Registrar curso </a>
                        </li>
                    <li>
                        <a href='./viewCourse.php'>
                            Ver cursos </a>
                    </li>";
                }else{
                    echo "<li class='active'>
                            <a href='../curso/createCourse.php'>
                                Registrar curso </a>
                        </li>
                    <li>
                        <a href='../curso/viewCourse.php'>
                            Ver cursos </a>
                    </li>";
                }
             ?>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-th"></span>
            <span class="sidebar-title">Grupos</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <?php  
                /*Funcion para obtener el directorio actual*/
                $directorioActual=getcwd();    

                /*Verifica que ruta poner en el menu*/
                if($directorioActual == "grupo"){
                    echo "<li class='active'>
                    <a href='./createGroup.php'>
                      Registrar grupo 
                    </a>
                    </li>
                    <li>
                        <a href='./employability.php'>
                          Ocupabilidad 
                        </a>
                    </li>";
                }else{
                    echo "<li>
                    <a href='../grupo/createGroup.php'>
                      Registrar grupo 
                    </a>
                    </li>
                    <li>
                        <a href='../grupo/employability.php'>
                          Ocupabilidad 
                        </a>
                    </li>";
                }
            ?>
            
        </ul>
    </li>
    <!-- <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-dollar"></span>
            <span class="sidebar-title">Pagos</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav"> -->
            <?php  
                /*Funcion para obtener el directorio actual*/
                //$directorioActual=getcwd();    

                /*Verifica que ruta poner en el menu*/
                // if($directorioActual == "pagos"){
                //     echo "<li class='active'>
                //     <a href='./paymentRecord.php'>
                //       Registrar pago 
                //     </a>
                //     </li>
                //     <li>
                //         <a href='./paymentCheck.php'>
                //           Consultar pago
                //         </a>
                //     </li>";
                // }else{
                //     echo "<li>
                //     <a href='../pagos/paymentRecord.php'>
                //       Registrar pago 
                //     </a>
                //     </li>
                //     <li>
                //         <a href='../pagos/paymentCheck.php'>
                //           Consultar pago
                //         </a>
                //     </li>";
                // }
            ?>
       <!-- </ul>
    </li> -->
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-briefcase"></span>
            <span class="sidebar-title">Sucursales</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
             <?php  
                /*Funcion para obtener el directorio actual*/
                $directorioActual=getcwd();    

                /*Verifica que ruta poner en el menu*/
                if($directorioActual == "sucursal"){
                    echo "<li class='active'>
                        <a href='./createBuilding.php'>
                            Registrar sucursal 
                        </a>
                    </li>
                    <li>
                        <a href='./viewBuilding.php'>
                            Ver sucursales
                        </a>
                    </li>";
                }else{
                    echo "<li>
                        <a href='../sucursal/createBuilding.php'>
                            Registrar sucursal 
                        </a>
                    </li>
                    <li>
                        <a href='../sucursal/viewBuilding.php'>
                            Ver sucursales
                        </a>
                    </li>";
                }
            ?>
        </ul>
    </li>
</ul>