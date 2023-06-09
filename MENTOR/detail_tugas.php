<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../CSS/header_footer.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/detail_tugas.css" />
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

    <title>Class | Mini Academy</title>
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
      <div class="konten"></div>
      <div class="navbar-height"></div>
    </div>
    <div class="content">
      <div class="table">
        <section class="table_header">
          <div class="judul"><h1>Detail Tugas</h1></div>
          <div class="cari">
            <button onclick="location.href='tugas.php'">
              <img src="../ASET/GAMBAR/close1.png" alt="logo" />
            </button>
          </div>
        </section>
        <section class="table_body">
          <form action="../PHP/berinilai.php">
            <table class="list_tugas">
              <tbody>
                <tr class="td_button">
                  <td>Tugas Pertemuan 1_Genta Alima Persada.pdf</td>
                  <td>
                    <div class="action">
                      <input placeholder="Beri Nilai Disini" />
                      <button onclick="location.href='detail_tugas.html'">
                        Nilai
                      </button>
                    </div>
                  </td>
                </tr>
                <tr class="td_button">
                  <td>Tugas Pertemuan 2_Genta Alima Persada.pdf</td>
                  <td>
                    <div class="action">
                      <input placeholder="Beri Nilai Disini" />
                      <button onclick="location.href='detail_tugas.html'">
                        Nilai
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </section>
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
