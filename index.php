<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <!-- script -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- content -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <button onclick="buka()" type="button" class="btn btn-primary btn-sm">ADD</button>
            </div>
            <div class="card-body">
                <div id="isitabel"></div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="forminput">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Data User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" id="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" id="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" id="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" onclick="simpan()" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <script>

        $(document).ready(function(){
            $('#isitabel').load('datatable.php')
        })

        function buka()
        {
            $('#forminput').modal('show');
        }

        function simpan()
        {
            var nama = $('#nama').val();
            var username = $('#username').val();
            var password = $('#password').val();
            // cara kerja ajax
            $.ajax({
                url: 'simpan.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
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
            $('#nama').val('')
            $('#username').val('')
            $('#password').val('')
            $('#forminput').modal('hide')
        }
    </script>

</body>

</html>