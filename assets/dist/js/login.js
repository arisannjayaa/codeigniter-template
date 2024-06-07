$('#form-login').submit(function (e) {
    e.preventDefault();

    let url = $('#login-url').val();
	console.log(url);
    let formData = new FormData(this);
    let btn = '#btn-login';

    new ajaxPost(url, formData, btn, 'snackbarError')
        .done(function (res) {
            snackbar(res.message);

            setTimeout(function () {
                location.href = res.redirect;
            },1300);
        });
});
