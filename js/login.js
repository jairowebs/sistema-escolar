$(document).ready(function(){
    $('#LoginUsuario').on('click', function () {
        LoginUsuario();
        
    });
      $('#LoginProfesor').on('click', function () {
        LoginProfesor();
        
    });
    
    
})

function LoginUsuario() {
    
    var login = $('#usuario').val();
    var pass = $('#pass').val();

    $.ajax({
        url: './includes/loginUsuario.php',
        method: 'POST',
        data: {
            login: login,
            pass:pass
        },
        success: function (data) {
            $('#messageUsuario').html(data);

            if (data.indexOf('Redirecting') >= 0) {
                window.location = 'administrador/';
            }
        }
    })

}


function LoginProfesor() {
    
    var login = $('#usuario').val();
    var pass = $('#pass').val();

    $.ajax({
        url: './includes/loginProfesor.php',
        method: 'POST',
        data: {
            login: login,
            pass:pass
        },
        success: function (data) {
            $('#messageProfesor').html(data);

            if (data.indexOf('Redirecting') >= 0) {
                window.location = 'profesor/';
            }
        }
    })

}
