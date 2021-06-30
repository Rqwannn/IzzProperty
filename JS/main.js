function InfoRumahJakarta(e){
    e.preventDefault();
    $.ajax({
        url : "http://localhost/IzzProperti/App/Api/getRumahTerlama.php",
        type : 'GET',
        dataType : 'JSON',
        success : function (result){
            if(result.Jakarta != null){
                document.location.href = `infoRumah.php?lokasi=Jakarta&id=${result.Jakarta}`;
            } else {
                Swal.fire(
                    'Oppsss!',
                    'Tidak Ada Rumah Yang Di Jual.',
                    'error'
                )
            }
        },
        error : function (){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Maaf Terjadi Kesalahan!",
                footer:
                    "<a href>Mohon Untuk Melapor Masalah Ini</a>",
            });
        }
    });
}

function InfoRumahBogor(e){
    e.preventDefault();
    $.ajax({
        url : "http://localhost/IzzProperti/App/Api/getRumahTerlama.php",
        type : 'GET',
        dataType : 'JSON',
        success : function (result){
            if(result.Bogor != null){
                document.location.href = `infoRumah.php?lokasi=Bogor&id=${result.Bogor}`;
            } else {
                Swal.fire(
                    'Oppsss!',
                    'Tidak Ada Rumah Yang Di Jual.',
                    'error'
                )
            }
        },
        error : function (){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Maaf Terjadi Kesalahan!",
                footer:
                    "<a href>Mohon Untuk Melapor Masalah Ini</a>",
            });
        }
    });
}

function InfoRumahDepok(e){
    e.preventDefault();
    $.ajax({
        url : "http://localhost/IzzProperti/App/Api/getRumahTerlama.php",
        type : 'GET',
        dataType : 'JSON',
        success : function (result){
            if(result.Depok != null){
                document.location.href = `infoRumah.php?lokasi=Depok&id=${result.Depok}`;
            } else {
                Swal.fire(
                    'Oppsss!',
                    'Tidak Ada Rumah Yang Di Jual.',
                    'error'
                )
            }
        },
        error : function (){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Maaf Terjadi Kesalahan!",
                footer:
                    "<a href>Mohon Untuk Melapor Masalah Ini</a>",
            });
        }
    });
}

$(".contenrAllMenu").owlCarousel({
    margin: 20,
    loop: true,
    autoWidth: true,
    items: 4,
    autoplay: true,
    autoplayTimeout: 5000,
});