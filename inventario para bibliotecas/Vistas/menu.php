<div id="main">
            <header>
                <nav>
                    <a href="../Modelo/session_destroy.php"><img src="img/off-button.png" alt=""></a>
                    <h1>Bienvenido a inventario de bibliotecas</h1>
                </nav>
            <menu>
                <ul>
                    <li><a href="index-2.php"><button><i class="fas fa-columns"></i>Panel de control</button></a></li>
                    <li><a href="clientes.php"><button><i class="far fa-user"></i>Clientes</button></a></li>
                    <li><a href="proveedor.php"><button><i class="far fa-user"></i>Proveedor</button></a></li>
                    <li><a href="libros.php"><button><i class="fas fa-book-open"></i>Libros</button></a></li>
                    <li><button @click="opt()"><i class="fas fa-cogs"></i>Configuraciones</button></li>
                </ul> 
                <ul v-show="option==1">
                    <li><a href="categorias.php"><button><i class="fas fa-list-ul"></i>Categorias</button></a></li>
                    <li><a href="secciones.php"><button><i class="fas fa-list-ul"></i>Secciones</button></a></li>
                    <li><a href="buscar.php"><button><i class="fas fa-search"></i>Buscar</button></a></li>
                </ul>
            </menu>
            </header>
        </div>