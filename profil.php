<?php
include 'koneksi.php';
include 'tampil_db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Profile</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav>
      <div class="menu-mobile">
        <a href="#" onclick="showMenu()">Menu</a>
      </div>
      <ul id="menu">
		  <li><a href="#">HOME</a></li>
        <li><a href="#">PRODUCT</a></li>
        <li><a href="#">GALLERY</a></li>
        <li><a href="#">NEWS</a></li>
        <li><a href="#">MY INVENTORY</a></li>
      </ul>
    </nav>

    <section id="box-profile">
      <div class="img-profile">
        <div class="photo" style="background-image: url(siapa.jpg);"></div>
      </div>
      <div class="description">
        <h1 id="pName"><?php echo $nama; ?></h1>
        <p id="pRole"><?php echo $status; ?></p>
        <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
        <a href="#" class="button border-blue">Resume</a>
      </div>
      <div class="information">
        <div class="data">
          <p class="field">Availability</p>
          <p id="pAvailable" class="text-gray">Full Time</p>
        </div>
        <div class="data">
          <p class="field">Age</p>
          <p id="pAge" class="text-gray"><?php echo $umur; ?></p>
        </div>
        <div class="data">
          <p class="field">Location</p>
          <p id="pLocation" class="text-gray"><?php echo $lokasi; ?></p>
        </div>
        <div class="data">
          <p class="field">Years Experience</p>
          <p id="pExperience" class="text-gray"><?php echo $kerja; ?></p>
        </div>
        <div class="data">
          <p class="field">Email</p>
          <p id="pEmail" class="text-gray"><?php echo $email; ?></p>
        </div>
      </div>
    </section>

    <section id="input-form">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form">
          <label>Name</label>
          <input id="inpName" type="text" name="nama">
        </div>
        <div class="form">
          <label>Role</label>
          <input id="inpRole" type="text" name="status">
        </div>
        <div class="form">
          <label>Availability</label>
          <input id="inpAvailable" type="text" name="ada">
        </div>
        <div class="form">
          <label>Age</label>
          <input id="inpAge" type="number" name="umur">
        </div>
        <div class="form">
          <label>Location</label>
          <input id="inpLocation" type="text" name="lokasi">
        </div>
        <div class="form">
          <label>Years Experience</label>
          <input id="inpExperience" type="number" name="kerja">
        </div>
        <div class="form">
          <label>Email</label>
          <input id="inpEmail" type="email" name="email">
        </div>
        <div class="form">
          <input onclick="simpanForm()" type="submit" name="submit" value="SUBMIT" class="bg-blue">
        </div>
      </form>
    </section>

    <script>
      var formMenu = document.getElementById("input-form");
      formMenu.style.display = "none";

      function editForm() {
        if(formMenu.style.display === "none"){
          formMenu.style.display = "block";
        }else{
          formMenu.style.display = "none";
        }

        var name = document.getElementById("pName").innerHTML;
        var role = document.getElementById("pRole").innerHTML;
        var available = document.getElementById("pAvailable").innerHTML;
        var age = document.getElementById("pAge").innerHTML;
        var location = document.getElementById("pLocation").innerHTML;
        var experience = document.getElementById("pExperience").innerHTML;
        var email = document.getElementById("pEmail").innerHTML;
        
        document.getElementById("inpName").value = name;
        document.getElementById("inpRole").value = role;
        document.getElementById("inpAvailable").value = available;
        document.getElementById("inpAge").value = age;
        document.getElementById("inpLocation").value = location;
        document.getElementById("inpExperience").value = experience;
        document.getElementById("inpEmail").value = email;
      }

      function simpanForm(){
        formMenu.style.display = "none";
        var name = document.getElementById("inpName").value;
        var role = document.getElementById("inpRole").value;
        var available = document.getElementById("inpAvailable").value;
        var age = document.getElementById("inpAge").value;
        var location = document.getElementById("inpLocation").value;
        var experience = document.getElementById("inpExperience").value;
        var email = document.getElementById("inpEmail").value;
        
        document.getElementById("pName").innerHTML = name;
        document.getElementById("pRole").innerHTML = role;
        document.getElementById("pAvailable").innerHTML = available;
        document.getElementById("pAge").innerHTML = age;
        document.getElementById("pLocation").innerHTML = location;
        document.getElementById("pExperience").innerHTML = experience;
        document.getElementById("pEmail").innerHTML = email;
      }

      function showMenu(){
        var menu = document.getElementById("menu");
        var box = document.getElementById("box-profile");

        if(menu.style.display === "block"){
          menu.style.display = "none";
          box.style.paddingTop = "0px";
        }else{
          menu.style.display = "block";
          box.style.paddingTop = "125px";
        }
      }
    </script>
  </body>
</html>
<?php 
if(isset($_POST['submit'])){
$nama = $_POST['nama'];
$status = $_POST['status'];
$umur = $_POST['umur'];
$lokasi = $_POST['lokasi'];
$kerja = $_POST['kerja'];
$ada = $_POST['ada'];
$email = $_POST['email'];

$update = "UPDATE user SET nama='$nama',status='$status',umur='$umur',lokasi='$lokasi',tahun_kerja='$kerja',ada='$ada',email='$email'";

$query = mysqli_query($konek,$update);
if(!$query){

  echo '<script>alert("Gagal '.mysqli_error($konek,$query).'")</script>';
} else {
  echo '<script>alert("Berhasil !!!")</script>';
}

}

?>