$(document).ready(function(){
    kosong()
})

function buka()
{
    $('#forminput').modal('show');
}

function simpan()
{
    var id_user = $('#id_user').val()
    var nama = $('#nama').val();
    var username = $('#username').val();
    var password = $('#password').val();
    // cara kerja ajax
    $.ajax({
        url: 'simpan.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            'id_user': id_user,
            'nama': nama,
            'username': username,
            'password': password
        },
        success: function(data)
        {
            console.log(data.pesan);
            if(data.pesan == "berhasil")
            {
                kosong()
            }
        }
    })
}

function kosong()
{
    $('#id_user').val('')
    $('#nama').val('')
    $('#username').val('')
    $('#password').val('')
    $('#forminput').modal('hide')
    $('#isitabel').load('datatable.php')
}

function hapus(id)
{
    $.ajax({
        url: 'hapus.php',
        type: 'POST',
        dataType: 'json',
        data: {
            'id_user':id
        },
        success: function(data)
        {
            if(data.pesan == "berhasil")
            {
                kosong()
            }
        }
    })
}

function edit(id,nama,username,password)
{
    $('#id_user').val(id)
    $('#nama').val(nama)
    $('#username').val(username)
    $('#password').val(password)

    $('#forminput').modal('show');
}