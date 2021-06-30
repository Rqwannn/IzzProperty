const clickValueProfile = document.querySelector(".clickValueProfile");
const cardProfileDown = document.querySelector(".slideDown-Profile");

clickValueProfile.addEventListener("click", function () {
  if (cardProfileDown.style.top == "120%") {
    cardProfileDown.style.opacity = "0";
    cardProfileDown.style.top = "200%";
    setTimeout(function () {
      cardProfileDown.style.display = "none";
    }, 500);
  } else {
    cardProfileDown.style.display = "block";
    setTimeout(function () {
      cardProfileDown.style.opacity = "1";
      cardProfileDown.style.top = "120%";
    }, 100);
  }
});

const Formater = new FormatMoney();
const BodyPetinggi = document.querySelector(".BodyPetinggi");

if (BodyPetinggi != null) {
  $.ajax({
    url: "http://localhost/IzzProperti/App/Api/getPetinggi.php",
    type: "GET",
    dataType: "JSON",
    success: (result) => {
      let Card = ``;
      let index = 1;

      result.forEach((element) => {
        const formatPendapatan = Formater.toRupiah(element.pendapatan);
        Card += `<tr>
                <td class="text-center">${index++}</td>
                <td>${element.nama}</td>
                <td>${formatPendapatan}</td>
                <td>${element.jabatan}</td>
                <td>${element.negara}</td>
            </tr>`;
      });

      BodyPetinggi.innerHTML = Card;
    },
  });
}

const TotalRumah = document.querySelector(".TotalRumah");
const TotalAdmin = document.querySelector(".TotalAdmin");

if (TotalRumah != null) {
  $.ajax({
    url: "http://localhost/IzzProperti/App/Api/setDataAdmin.php",
    type: "GET",
    dataType: "JSON",
    success: (result) => {
        TotalRumah.innerHTML = result.Rumah
        TotalAdmin.innerHTML = result.Admin
    },
  });
}

const BodySetData = document.querySelector(".BodySetData");
const BodySetAdmin = document.querySelector(".BodySetAdmin");

if (BodySetData != null) {
  $.ajax({
    url: "http://localhost/IzzProperti/App/Api/getAllRumah.php",
    type: "GET",
    dataType: "JSON",
    success: (result) => {
      let Card = "";
      let index = 1;
      result.forEach((element) => {
        Card += `<tr>
                <td>${index++}</td>
                <td>${element.nama_pemilik}</td>
                <td>${element.email}</td>
                <td>${element.tipe}</td>
                <td>${Formater.toRupiah(element.harga)}</td>
                <td>
                  <button type="submit" class="btn-table btn-primary" onclick="RumahUpdate(${element.id})">Update</button>
                    <button type="submit" class="btn-table btn-danger" onclick="RumahDelete(${element.id})">Delete</button>
                </td>
            </tr>`;
      });

      BodySetData.innerHTML = Card;
      $("#TableOrder").DataTable({
        paging: true,
        aLengthMenu: [
          [10, 30, 50, -1],
          [10, 30, 50, "All"],
        ],
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        language: {
          search: "",
        },
      });
    },
  });
} else if (BodySetAdmin != null) {
  $.ajax({
    url: "http://localhost/IzzProperti/App/Api/TotalAdmin.php",
    type: "GET",
    dataType: "JSON",
    success: (result) => {
      let Card = "";
      let index = 1;
      result.forEach((element) => {
        Card += `<tr>
                <td>${index++}</td>
                <td>${element.nama_lengkap}</td>
                <td>${element.email}</td>
                <td>${element.usia} Tahun</td>
                <td>
                    <button type="submit" class="btn-table btn-danger" data-id="${
                      element.id
                    }" onclick="AdminDelete(event)">Delete</button>
                </td>
            </tr>`;
      });

      BodySetAdmin.innerHTML = Card;
      $("#TableOrder").DataTable({
        paging: true,
        aLengthMenu: [
          [10, 30, 50, -1],
          [10, 30, 50, "All"],
        ],
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        language: {
          search: "",
        },
      });
    },
  });
}

function AdminDelete(data) {
  const setID = data.target.dataset.id;
  const CekTabel = "Admin";
  Swal.fire({
    title: "Apakah Anda Yakin?",
    text: "Data akan di hapus secara permanen!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, Hapus!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "http://localhost/IzzProperti/App/Api/DeleteData.php",
        type: "POST",
        dataType: "JSON",
        data: {
          ID: setID,
          Tabel: CekTabel,
        },
        success: function (result) {
          console.log(result);
          Swal.fire("Berhasil!", `${result}`, "success");
          setTimeout(() => {
            window.location.reload();
          }, 700);
        },
      });
    }
  });
}

let MaxGambar = 1;

function TambahGambar(){
    const WrapperGambar = document.querySelector('.WrapperGambar');

    if(MaxGambar < 10){
        $(WrapperGambar).append(`<div class="col-md-12">
        <div class="inputAdmin d-flex flex-column">
            <label for="file" class="text-secondary">Gambar</label>
            <div class="input-group mb-3">
                <input type="file" class="form-control GambarRumah">
                <button onclick="HapusGambar(event)" class="btn btn-outline-secondary" type="button" id="button-addon2" style="border-top-left-radius: 0;border-bottom-left-radius: 0;"><i class="fas fa-minus"></i></button>
            </div>
        </div>
    </div>`);
    MaxGambar++
    } else {

    }
}

function HapusGambar(event){
    let getWrapper = event.target.parentNode.parentNode.parentNode;
    getWrapper.remove(getWrapper);
}

function TambahDataRumah(){
    // Variabel Informasi Pemilik

    const nama = document.getElementById('nama');
    const telepon = document.getElementById('telepon');
    const email = document.getElementById('email');

    // Variabel Spesifikasi Rumah

    const tipeRumah = document.getElementById('tipeRumah');
    const luasTanah = document.getElementById('luasTanah');
    const kamarMandi = document.getElementById('kamarMandi');
    const Fasilitas = document.getElementById('Fasilitas');
    const luasBangunan = document.getElementById('luasBangunan');
    const kamarTidur = document.getElementById('kamarTidur');
    const lantai = document.getElementById('lantai');
    const carpotGarasi = document.getElementById('carpotGarasi');

    // Variabel Lokasi Rumah

    const alamat = document.getElementById('alamat');
    const kota = document.getElementById('kota');
    const provinsi = document.getElementById('provinsi');
    const kodePos = document.getElementById('kodePos');
    const maps = document.getElementById('maps');

    // Variabel Info Lainya

    const harga = document.getElementById('harga');
    const deskripsi = document.getElementById('deskripsi');
    const sertifikat = document.getElementById('sertifikat');

    // Variabel Gambar Rumah

    const GambarRumah = document.querySelectorAll('.GambarRumah');

    // Ajax

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data Akan Langsung Ditambahkan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Tambahkan!'
      }).then((result) => {
        if (result.isConfirmed) {
            let Form = new FormData();

            Form.append('email', email.value);
            Form.append('telepon', telepon.value);
            Form.append('nama', nama.value);
            Form.append('tipeRumah', tipeRumah.value);
            Form.append('luasTanah', luasTanah.value);
            Form.append('kamarMandi', kamarMandi.value);
            Form.append('Fasilitas', Fasilitas.value);
            Form.append('luasBangunan', luasBangunan.value);
            Form.append('kamarTidur', kamarTidur.value);
            Form.append('lantai', lantai.value);
            Form.append('carpotGarasi', carpotGarasi.value);
            Form.append('alamat', alamat.value);
            Form.append('kota', kota.value);
            Form.append('provinsi', provinsi.value);
            Form.append('kodePos', kodePos.value);
            Form.append('maps', maps.value);
            Form.append('harga', harga.value);
            Form.append('sertifikat', sertifikat.value);
            Form.append('deskripsi', deskripsi.value);
            
            let indexGambar = 0;
            
            GambarRumah.forEach((result) => {
                ++indexGambar;
                Form.append(`Gambar${indexGambar}`, result.files[0]);
            });

            Form.append('jmlGambar', indexGambar);

            $.ajax({
              url: "http://localhost/IzzProperti/App/Api/TambahRumah.php",
              type: "POST",
              dataType: "JSON",
              cache: false,
              contentType: false,
              processData: false,
              data: Form,
              success: function (result) {
                if(result == "Data Berhasil Ditambahkan."){
                  Swal.fire(
                    'Berhasil!',
                    `${result}`,
                    'success'
                  )
                setTimeout(() => {
                  document.location.reload();
                }, 1000);
                } else {
                  Swal.fire(
                    'Gagal!',
                    `${result}`,
                    'error'
                  )
                }
              },
              error : function (e){
                Swal.fire(
                  'Oppsss!',
                  'Data Gagal Di Tambahkan.',
                  'error'
              )
            }
          });
        } 
    })
}

function RumahUpdate(data){
  document.location.href = `UpdateRumah.php?id=${data}`
}

function RumahDelete(data){
  const id = data;
  Swal.fire({
    title: 'Apakah Anda Yakin?',
    text: "Data Rumah Akan Segera Terhapus!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, Hapus!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url : 'http://localhost/IzzProperti/App/Api/DeleteRumah.php',
        type : 'POST',
        dataType : 'JSON',
        data : {
          id : id
        },
        success : function (result){
          Swal.fire(
            'Berhasil!',
            `${result}`,
            'success'
          )
          setTimeout(() => {
            document.location.reload();
          }, 1000);
        },
        error : function (e) {
          Swal.fire(
            'Oppsss!',
            'Data Gagal Di Hapus.',
            'error'
          )
        }
      })
    }
  })
  
}

const setKota = document.getElementById('setKota');
const getKota = document.getElementById('kota');

if(setKota != null){
  getKota.value = setKota.value;
}

const oldGambar = document.getElementById('oldGambar');
const WrapperOldGambar = document.querySelector('.WrapperOldGambar');
const kota = document.getElementById('kota');

if(oldGambar != null){
  const setValue = oldGambar.value.split(",");

  setValue.forEach((element) => {
    $(WrapperOldGambar).append(`<div class="col-md-12 mb-3">
      <div class="inputAdmin d-flex flex-column">
          <label for="file" class="text-secondary">Nama Gambar</label>
          <div class="input-group">
            <input type="text" class="form-control oldRumah" disabled value="${element}">
            <button onclick="HapusGambar(event)" class="btn btn-outline-secondary" type="button" id="button-addon2" style="border-top-left-radius: 0;border-bottom-left-radius: 0;"><i class="fas fa-minus"></i></button>
          </div>
          <img src="../Img/Kawasan${kota.value}/${element}" class="mt-2" width="120">
        </div>
      </div>`);
    });
}

function UpdateDataRumah(data){
      // Variabel Informasi Pemilik

      const nama = document.getElementById('nama');
      const telepon = document.getElementById('telepon');
      const email = document.getElementById('email');
  
      // Variabel Spesifikasi Rumah
  
      const tipeRumah = document.getElementById('tipeRumah');
      const luasTanah = document.getElementById('luasTanah');
      const kamarMandi = document.getElementById('kamarMandi');
      const Fasilitas = document.getElementById('Fasilitas');
      const luasBangunan = document.getElementById('luasBangunan');
      const kamarTidur = document.getElementById('kamarTidur');
      const lantai = document.getElementById('lantai');
      const carpotGarasi = document.getElementById('carpotGarasi');
  
      // Variabel Lokasi Rumah
  
      const alamat = document.getElementById('alamat');
      const kota = document.getElementById('kota');
      const provinsi = document.getElementById('provinsi');
      const kodePos = document.getElementById('kodePos');
      const maps = document.getElementById('maps');
  
      // Variabel Info Lainya
  
      const harga = document.getElementById('harga');
      const deskripsi = document.getElementById('deskripsi');
      const sertifikat = document.getElementById('sertifikat');
  
      // Variabel Gambar Rumah
  
      const GambarRumah = document.querySelectorAll('.GambarRumah');
      const GambarLama = document.querySelectorAll('.oldRumah');
  
      // Ajax
  
      Swal.fire({
          title: 'Apakah Anda Yakin?',
          text: "Data Akan Langsung Ditambahkan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Tambahkan!'
        }).then((result) => {
          if (result.isConfirmed) {
              let Form = new FormData();
  
              Form.append('id', data);
              Form.append('email', email.value);
              Form.append('telepon', telepon.value);
              Form.append('nama', nama.value);
              Form.append('tipeRumah', tipeRumah.value);
              Form.append('luasTanah', luasTanah.value);
              Form.append('kamarMandi', kamarMandi.value);
              Form.append('Fasilitas', Fasilitas.value);
              Form.append('luasBangunan', luasBangunan.value);
              Form.append('kamarTidur', kamarTidur.value);
              Form.append('lantai', lantai.value);
              Form.append('carpotGarasi', carpotGarasi.value);
              Form.append('alamat', alamat.value);
              Form.append('kota', kota.value);
              Form.append('provinsi', provinsi.value);
              Form.append('kodePos', kodePos.value);
              Form.append('maps', maps.value);
              Form.append('harga', harga.value);
              Form.append('sertifikat', sertifikat.value);
              Form.append('deskripsi', deskripsi.value);
              
              let indexGambar = 0;
              
              GambarRumah.forEach((result) => {
                  ++indexGambar;
                  Form.append(`Gambar${indexGambar}`, result.files[0]);
              });

              let indexOldGambar = 0;

              GambarLama.forEach((result) => {
                ++indexOldGambar;
                Form.append(`OldGambar${indexOldGambar}`, result.value);
              }); 

              Form.append('jmlOldGambar', indexOldGambar);
              Form.append('jmlGambar', indexGambar);
  
              $.ajax({
                url: "http://localhost/IzzProperti/App/Api/UpdateRumah.php",
                type: "POST",
                dataType: "JSON",
                cache: false,
                contentType: false,
                processData: false,
                data: Form,
                success: function (result) {
                  if(result == "Data Berhasil Diupdate."){
                    Swal.fire(
                      'Berhasil!',
                      `${result}`,
                      'success'
                    )
                    setTimeout(() => {
                      document.location.reload();
                    }, 1000);
                  } else {
                    Swal.fire(
                      'Gagal!',
                      `${result}`,
                      'error'
                    )
                  }
                },
                error : function (e){
                  Swal.fire(
                    'Oppsss!',
                    'Data Gagal Di Tambahkan.',
                    'error'
                )
              }
            });
          } 
      })
}