<?php
session_start();
include_once "../modelo/config.php";
if(empty($_SESSION)){
    header("location: login.php");
}
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
          $rut=$_SESSION["rut"];
          $consulta = "SELECT * FROM usuario WHERE rut = '$rut' ";

            $sql = mysqli_query($conn, $consulta);
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../img/<?php echo $row['img_perfil']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['nombre']. " " . $row['apellido'] ?></span>
            <p><?php echo $row['estado']; ?></p>
          </div>
        </div>
       
      </header>
      <div class="search">
        <span class="text">Seleccione un usuario para iniciar el chat</span>
        <input type="text" placeholder="Ingrese el nombre para buscar ...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="../js/usuarios.js"></script>

</body>
</html>
