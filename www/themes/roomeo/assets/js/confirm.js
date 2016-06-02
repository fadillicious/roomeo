function confirmDelete(url){
	bootbox.confirm({
        title: 'Konfirmasi',
        message: 'Anda Yakin Akan Menghapus Data Ini ?',
        buttons: {
            'cancel': {
                label: 'Tidak',
                className: 'btn-danger'
            },
            'confirm': {
                label: 'Ya',
                className: 'btn-success'
            }
        },
        callback: function (confirmed) {
            if (confirmed) {
               $.post(url, function(response){
                    // window.location = response;
                    window.location.reload();
                    // console.log(response);
                });
            }
        }
    });
}
