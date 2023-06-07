const submitBtn = document.getElementById('submit-bayar');
const urlParams = new URLSearchParams(window.location.search);
const via = urlParams.get('via');
const idKelas = urlParams.get('idKelas');
const jumlahCourse = document.getElementById('jumlah-course');
const totalHarga = document.getElementById('total-harga');
const summaryTemplate = document.getElementById('summary-template');
const listCourseContainer = document.getElementById('list-course-container');
const bankChaneel = document.getElementById('bank-channel');
const vaNumber = document.getElementById('va-number');
const idOrder = document.getElementById('order-id');
const vaContainer = document.querySelector('.va');
const listBankTrf = document.querySelector('.bayar')

var selectedBank = null;
let totalHargaCourse = 0;
let bankTerpilih = "";
submitBtn.disabled = true;


function addSummary() {
  if (via === 'cart') {
    fetch('http://127.0.0.1:3333/payment/cart',{
      credentials: "include"
    })
      .then(response => response.json())
      .then(cartData => {
        console.log(cartData);
        cartData.forEach(item => {
          totalHargaCourse += item.kelas.harga;
          const sumCourseItem = summaryTemplate.content.cloneNode(true);
          sumCourseItem.querySelector('#nama-kelas').textContent = item.kelas.nama;
          sumCourseItem.querySelector('#harga-kelas').textContent = `RP. ${item.kelas.harga.toLocaleString('id-ID')}`;

          listCourseContainer.appendChild(sumCourseItem);
        });
        totalHarga.textContent = `RP. ${(totalHargaCourse).toLocaleString('id-ID')}`;
        jumlahCourse.textContent = cartData.length;
      })
      .catch(error => {
        console.log(error);
      });
  } else if (via === 'buy') {
    fetch(`http://127.0.0.1:3333/course/${idKelas}`)
      .then(response => response.json())
      .then(course => {
        const sumCourseItem = summaryTemplate.content.cloneNode(true);
        sumCourseItem.querySelector('#nama-kelas').textContent = course.nama;
        sumCourseItem.querySelector('#harga-kelas').textContent = `RP. ${course.harga.toLocaleString('id-ID')}`;

        listCourseContainer.appendChild(sumCourseItem);
        totalHarga.textContent = `RP. ${(course.harga).toLocaleString('id-ID')}`;
        jumlahCourse.textContent = 1;
      })
      .catch(error => {
        console.error('Error:', error.message);
      });
  }
}
addSummary();

function selectBank(index) {
  var banks = document.getElementsByClassName('bank');
  for (var i = 0; i < banks.length; i++) {
    banks[i].classList.remove('selected');
    banks[i].querySelector('.checkmark').style.display = 'none';
  }

  var selectedBankElement = banks[index];
  selectedBankElement.classList.add('selected');
  selectedBankElement.querySelector('.checkmark').style.display = 'block';

  switch (index) {
    case 0:
      bankTerpilih = "BCA";
      break;
    case 1:
      bankTerpilih = "BNI";
      break;
    case 2:
      bankTerpilih = "PERMATA";
      break;

    default:
      bankTerpilih = "";
      break;
  }

  console.log(bankTerpilih);
  console.log(bankTerpilih);

  if (bankTerpilih != "") {
    submitBtn.disabled = false;
    submitBtn.addEventListener('click', makePayment);
  } else {
    submitBtn.disabled = true;
    submitBtn.removeEventListener('click', makePayment);
  }

}

function makePayment() {
  console.log("clicked")
  submitBtn.innerHTML = '<div class="loader"></div>';
  submitBtn.disabled = true;


  if (via === 'cart') {
    checkoutCart();
  } else if (via === 'buy') {
    buyCourse();
  }
}

function checkoutCart() {
  let cartData;
  fetch('http://127.0.0.1:3333/payment/cart',{
    credentials: "include"
  })
    .then(response => response.json())
    .then(data => {
      cartData = data;
      console.log(cartData);
      const payloadItems = cartData.map(item => ({
        id: item.id_kelas.toString(),
        price: item.kelas.harga,
        quantity: 1,
        name: item.kelas.nama
      }));
      charge(payloadItems);
    })
    .catch(error => {
      console.log(error);
    });
}

function buyCourse() {
  fetch(`http://127.0.0.1:3333/course/${idKelas}`)
    .then(response => response.json())
    .then(course => {
      const payloadItems = [{
        id: course.id_kelas.toString(),
        price: course.harga,
        quantity: 1,
        name: course.nama
      }]
      charge(payloadItems);

    })
    .catch(error => {
      console.error('Error:', error.message);
    });
}
/* const payload = {
  channel: "BCA",
  items: [
    {
      id: "56323",
      name: "Python Pemula Sampai Mahir",
      price: 200000,
      quantity: 1
    }
  ]
}; */
function charge(payloadItems) {
  let payloads = {
    channel: bankTerpilih,
    items: payloadItems
  }
  console.log(JSON.stringify(payloads));
  fetch('http://127.0.0.1:3333/payment/charge', {
    method: 'POST',
    headers:{
      'Content-Type': 'application/json'
    },
    credentials:'include',
    body: JSON.stringify(payloads)
  })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      bankChaneel.textContent = data.va_numbers[0].bank;
      vaNumber.textContent = data.va_numbers[0].va_number;
      idOrder.textContent = data.order_id;
      console.log(data.va_numbers[0].bank);
      console.log(data.va_numbers[0].va_number);
      vaContainer.style.display = 'flex',

      
    })
    .catch(error => {
      console.log(error.message);
      submitBtn.disabled = false;
      submitBtn.innerHTML = 'Gagal Bayar';
    });
}

