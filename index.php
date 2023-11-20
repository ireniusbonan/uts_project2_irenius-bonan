<?php
include 'config/data_register.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="modul/DataTable/datatables.min.css">

    <!-- JavaScript Libraries -->
    <script src="modul/JQuery/jquery.min.js"></script>
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <table id="dataregistrasi" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()):
                $namadepan = $row['nama_depan'];
                $namabelakang = $row['nama_belakang'];
                $namalengkap = $namadepan . " " . $namabelakang;
                $email = $row['email'];
                $username = $row['username'];
                ?>
                <tr>
                    <td><?php echo $namalengkap;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $username;?></td>
                    <td>
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function(){
            $('#dataregistrasi').DataTable({
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 5
            });
        });
    </script>
</body>
</html>
