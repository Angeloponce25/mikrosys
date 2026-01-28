    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="<?= BASE_URL ?>/assets/js/jquery.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?= BASE_URL ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function(){

            $('#username').on('keyup', function(){
                let username = $(this).val();

                if(username.length > 0){
                    $('#login').removeClass('btn-secondary')
                               .addClass('btn-primary')
                               .prop('disabled', false);
                } else {
                    $('#login').removeClass('btn-primary')
                               .addClass('btn-secondary')
                               .prop('disabled', true);
                }
            });

            // Enviar login con AJAX
            $('#formLogin').on('submit', function(e){
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: "<?= BASE_URL ?>/auth/doLogin",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(response){

                        if(response.trim() === "success"){
                            window.location.href = "<?= BASE_URL ?>/dashboard";
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Usuario o contraseña incorrectos'
                            });
                        }

                    },
                    error: function(){
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error de conexión con el servidor'
                        });
                    }
                });

            });

        });

        function show_password() {
            let x = document.getElementById("password");
            x.type = (x.type === "password") ? "text" : "password";
        }
    </script>
</body>
</html>
