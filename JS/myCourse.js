// Ambil template course-card
const courseTemplate = document.getElementById('course-template');

// Ambil elemen list-course untuk menambahkan course-card yang diisi
const waitingPaymentCourses = document.getElementById('waitingPayment');
const notRegisteredCourses = document.getElementById('notRegistered');
const myCourses = document.getElementById('myCourse');

const urls = {
  myCourse: 'https://9d46-103-147-9-240.ngrok-free.app/course/myCourse',
  notRegistered: 'https://9d46-103-147-9-240.ngrok-free.app/course/notRegistered',
  waitingPayment: 'https://9d46-103-147-9-240.ngrok-free.app/course/waitingPayment'
}

// Fetch data course dari REST API
function addCourses(container){
  const url = urls[container.id]
  console.log(`${container.id} : ${urls[container.id]}`)
  fetch(url)
    .then(response => response.json())
    .then(courses => {
      // Loop melalui setiap course
      courses.forEach(course => {
        // Kloning template course-card
        const courseCard = courseTemplate.content.cloneNode(true);
        courseCard.querySelector('.course-card').setAttribute('data-idkelas', course.id_kelas);

        // Mengisi data ke dalam elemen-elemen pada template
        courseCard.querySelector('#kategori').textContent = course.id_kategori;
        courseCard.querySelector('#waktu').textContent = course.waktu;
        courseCard.querySelector('#nama-kelas').textContent = course.nama;

        if (course.deskripsi.length > 100) {
          const potonganDeskripsi = course.deskripsi.slice(0, 100) + '...';
          courseCard.querySelector('#deskripsi-kelas').textContent = potonganDeskripsi;
        } else {
          courseCard.querySelector('#deskripsi-kelas').textContent = course.deskripsi;
        }

        const hargaKelas = course.harga;
        const hargaIDRFormat = parseInt(hargaKelas).toLocaleString('id-ID');
        courseCard.querySelector('#harga-kelas').textContent = `Rp. ${hargaIDRFormat}`;

        // Tambahkan course-card yang diisi ke list-course
        container.appendChild(courseCard);
      });
      const courseCards = document.querySelectorAll('.course-card');
      courseCards.forEach(courseCard => {
        courseCard.addEventListener('click', () => {
          const idKelas = courseCard.dataset.idkelas;
          console.log(idKelas);
          // Lakukan operasi lain sesuai dengan ID kelas yang ditekan
        });
      });
    })
    .catch(error => {
      console.error('Error:', error);
    });
}
addCourses(myCourses);
addCourses(waitingPaymentCourses);
addCourses(waitingPaymentCourses);
addCourses(waitingPaymentCourses);
addCourses(notRegisteredCourses);

