const fd = $('.fd').data('fd');
const nm = $('.fd').data('nama');
const lv = $('.fd').data('lvl');
if (fd) {
    if (fd === 'yhapus') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Barang berhasil dihapus'
        })
    } else if (fd === 'xhapus') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'info',
            title: 'Barang tidak bisa dihapus!'
        })
    } else if (fd === 'ytambah') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Data barang berhasil ditambahkan'
        })
    } else if (fd === 'yedit') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Data barang berhasil diubah'
        })
    } else if (fd === 'ylog') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        if (lv == 'Admin') {
            Toast.fire({
                icon: 'success',
                title: 'Hi, Selamat Datang ' + nm + '!',
            })
        } else {
            Toast.fire({
                icon: 'success',
                title: 'Hi, Selamat Datang dan selamat bekerja ' + nm + '!',
            })
        }
    } else if (fd === 'xlog') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'error',
            title: 'Username / Password yang anda masukkan salah!',
        })
    } else if (fd === 'xpass') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'error',
            title: 'Konfirmasi password tidak cocok!',
        })
    } else if (fd === 'xada') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'warning',
            title: 'Username sudah ada, silahkan gunakan username lain!',
        })
    } else if (fd === 'yreg') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            timer: 3000,
            showConfirmButton: false,
            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'info',
            title: 'Register berhasil!',
        })
    }
}


$('.hapus').on('click', function (e) {
    e.preventDefault();

    const url = $(this).attr('href');
    const nama = $(this).attr('nama');
    Swal.fire({
        text: 'Yakin ingin menghapus ' + nama + '?',
        icon: 'question',
        iconPosition: 'top',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: '<i class="fa fa-times"></i>',
        confirmButtonText: '<i class="fa fa-check"></i>',
        target: '#custom-target',
        customClass: {
            container: 'position-center'
        },
        toast: true,
        position: 'sticky'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = url;
        }
    })
});