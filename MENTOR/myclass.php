<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../CSS/header_footer.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/myclass.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Font Awesome 5 Free:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap"
    />
    <link
      rel="shortcut icon"
      type="text/css"
      href="../ASET/ICON/minilogo.ico"
    />

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>MyClass | Mini Academy</title>
  </head>
  <body>
    <div class="main-container">
      <div class="navbar-container">
        <div class="logo-container">
          <img src="../ASET/GAMBAR/minilogo.png" alt="logo" />
        </div>
        <div class="menu-profile-container">
          <div class="profile-menu">
            <a href="../index.html">Logout</a>
          </div>
          <div class="menu-container">
            <ul class="nav__link">
              <li><a href="class.php">Class</a></li>
              <li><a href="myclass.php">MyClass</a></li>
            </ul>
          </div>
          <a
            href="#"
            onclick="event.preventDefault()"
            class="profile-container"
          >
            <div class="profile">
              <p>Jennie</p>
              <img id="arrow-profile" src="../ASET/GAMBAR/arrow.svg" alt="" />
            </div>
          </a>
          <a
            href="#"
            onclick="event.preventDefault()"
            class="tombol-menu hamburger"
          >
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
        </div>
      </div>
      <div class="navbar-hamburger-container">
        <a class="back"> </a>
        <div class="sidebar">
          <div class="logo-container">
            <img src="../ASET/GAMBAR/minilogo.png" alt="logo" />
          </div>
          <div class="menu-sidebar">
            <a href="class.php" id="side-course">Class</a>
            <a href="myclass.php" id="side-mycourse">My Class</a>
            <a href="../index.html" id="side-home">Logout</a>
          </div>
        </div>
      </div>
      <div class="navbar-height"></div>
      <div class="content">
        <div class="table">
          <section class="table_header">
            <div class="judul"><h1>My Class</h1></div>
            <div class="cari">
              <input placeholder="Cari Kelas Disini" />
              <button class="carikan">Search</button>
            </div>
          </section>
          <section class="table_body">
            <table>
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Kategori</th>
                  <th>Waktu</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
	              if(isset($_GET['cari'])){
		              $cari = $_GET['cari'];
		              $data = mysqli_query($koneksi,"select * from kelas where nama like '%".$cari."%'");				
	              }else{
		              $data = mysqli_query($koneksi,"select * from kelas");		
	              }
	                $no = 1;
	                while($d = mysqli_fetch_array($data)){
	            ?>
	            <tr>
		              <td><?php echo $d['nama']; ?></td>
	                <td><?php echo $d['deskripsi']; ?></td>
	                <td><?php echo $d['harga']; ?></td>
		              <td align="center"><?php echo $d['id_kategori']; ?></td>
                  <td><?php echo $d['waktu']; ?></td>
	          	    <td>
				            <div class="action">
                      <button onclick="location.href='sylabus.php'">
                        <h1>S</h1>
                        <img src="../ASET/GAMBAR/new-document.png" alt="logo" />
                      </button>
                      <button onclick="location.href='tugas.php'">
                        <h1>T</h1>
                        <img src="../ASET/GAMBAR/clipboard.png" alt="logo" />
                      </button>
                      <button>
                        <h1>H</h1>
                        <img src="../ASET/GAMBAR/trash.png" alt="logo" />
                      </button>
                      <button onclick="location.href='final.php'">
                        <h1>F</h1>
                        <img src="../ASET/GAMBAR/check.png" alt="logo" />
                      </button>
                    </div>
		              </td>
	            </tr>
	            <?php } ?>
                <tr>
                  <td>UI/UX</td>
                  <td>
                    Bikin sebuah prototype dari sebuah web untuk mempermudah
                    pengguna.
                  </td>
                  <td>Rp.200.000</td>
                  <td>Desain</td>
                  <td>15 Juni 2023</td>
                  <td>
                  <div class="action">
                      <button onclick="location.href='sylabus.php'">
                        <h1>S</h1>
                        <img src="../ASET/GAMBAR/new-document.png" alt="logo" />
                      </button>
                      <button onclick="location.href='tugas.php'">
                        <h1>T</h1>
                        <img src="../ASET/GAMBAR/clipboard.png" alt="logo" />
                      </button>
                      <button>
                        <h1>H</h1>
                        <img src="../ASET/GAMBAR/trash.png" alt="logo" />
                      </button>
                      <button onclick="location.href='final.php'">
                        <h1>F</h1>
                        <img src="../ASET/GAMBAR/check.png" alt="logo" />
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>
    </div>
    <footer class="footer section">
      <center>
        <div class="footer--container container grid">
          <div>
            <img src="../ASET/GAMBAR/logofooter.png" class="footer--logo" />
            <p class="footer--description">
              "Unlock your potential with our academy's courses today."
            </p>
            <p class="copyright">@2023 Team Seven</p>
          </div>
        </div>
      </center>
    </footer>
    <script src="../JS/navbar.js"></script>
    <script src="../JS/idx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </body>
</html>
