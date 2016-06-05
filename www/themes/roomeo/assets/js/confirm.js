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


function viewUser(url){

	$.get(url, function(data){

			var html = '<div class="directory-info-row">' +
	                '<div class="row">' +
	                    '<div class="col-md-12 col-sm-12">' +
	                        '<div class="panel">' +
	                            '<div class="panel-body">' +
	                                '<h4>'+ data.name +' <span class="text-muted small"> - '+ data.role_id +'</span></h4>' +
	                                '<div class="media">' +
	                                    '<a class="pull-left" href="#">' +
	                                        '<img class="thumb media-object" src="/images/'+ data.profile_picture + '" alt="">' +
	                                    '</a>' +
	                                    '<div class="media-body">' +
	                                        '<address>' +
	                                            'Username : <strong>'+ data.username +'</strong><br>' +
	                                            'Email : <strong>'+ data.email +'</strong><br>' +
	                                            'Address : <strong>'+ data.address +'</strong><br>' +
	                                            'Phone : <strong>'+ data.phone +'</strong><br>' +
	                                        '</address>' +
	                                    '</div>' +
	                                '</div>' +
	                            '</div>' +
	                        '</div>' +
	                    '</div>' +
                    '</div>';


		  bootbox.dialog({
				message: html,
				title: "View User",
	      buttons: {
	          'cancel': {
	              label: 'Close',
	              className: 'btn-warning'
	          },
	      },
			});
	});
}
