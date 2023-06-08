<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../CSS/header_footer.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/tugas.css" />
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
            <div class="profile-picture">
              <img src="../ASET/GAMBAR/profilePict.svg" alt="" />
            </div>
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
          <div class="judul"><h1>Management Tugas</h1></div>
          <div class="cari">
            <button onclick="location.href='myclass.php'">
              <img src="../ASET/GAMBAR/close1.png" alt="logo" />
            </button>
          </div>
        </section>
        <section class="table_body">
          <div class="menu">
            <div
              class="menu-item information-menu active"
              onclick="showContainer(0)"
            >
              Tambah Tugas
            </div>
            <div class="menu-item silabus-menu" onclick="showContainer(1)">
              Daftar Tugas
            </div>
          </div>
          <div class="detail">
            <div class="tambah_tugas active">
              <form action="../PHP/tambahtugas.php" method="post">
                <table>
                  <tr>
                    <td colspan="2">
                      <label for="judul">Judul</label>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input
                        type="text"
                        id="judul"
                        required
                        placeholder="Isikan Judul Tugas"
                      />
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <label for="deskripsi">Deskripsi</label>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input
                        type="text"
                        id="deskripsi"
                        required
                        placeholder="Isikan Deskripsi Tugas"
                      />
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <label for="deadline">Deadline</label>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input type="date" id="deadline" required />
                    </td>
                  </tr>
                </table>
                <table align="center">
                  <tr>
                    <td>
                      <div class="submit">
                        <input type="reset" value="Reset" />
                      </div>
                    </td>
                    <td>
                      <div class="submit">
                        <input type="submit" value="Tambah" name="tambah" />
                      </div>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
            <div class="daftar_tugas">
              <table class="list_tugas">
                <tbody>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 1</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 2</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 3</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 4</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 5</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 6</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 7</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 8</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 9</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 10</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="td_button">
                    <td>Tugas Pertemuan 11</td>
                    <td>
                      <div class="action">
                        <button onclick="location.href='detail_tugas.html'">
                          Detail
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
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
    <script src="../JS/course_detail.js"></script>
  </body>
</html>
