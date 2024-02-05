<?php
require_once '../config.php';

$produk_result = ambilProduk();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Kasir | App</title>
    
    
    
    <link rel="shortcut icon" href="../dist/assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="">
    


  <link rel="stylesheet" href="../dist/assets/compiled/css/app.css">
  <link rel="stylesheet" href="../dist/assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="../dist/assets/compiled/css/iconly.css">
</head>

<body>
    <script src="../dist/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.html"><img src="../dist/assets/compiled/svg/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--system-uicons" width="20" height="20"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                            opacity=".3"></path>
                        <g transform="translate(-210 -1)">
                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                            <circle cx="220.5" cy="11.5" r="4"></circle>
                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                        </g>
                    </g>
                </svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                    <label class="form-check-label"></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                    </path>
                </svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            <li class="sidebar-item">
                <a href="index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item ">
                <a href="produk.php" class='sidebar-link'>
                    <i class="bi bi-box"></i>
                    <span>Produk</span>
                </a>
            </li>
            <li class="sidebar-item active">
                <a href="pemesanan.php" class='sidebar-link'>
                    <i class="bi bi-cart-fill"></i>
                    <span>Pemesanan</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="detail-pemesanan.php" class='sidebar-link'>
                    <i class="bi bi-journal-bookmark-fill"></i>
                    <span>Detail Pemesanan</span>
                </a>
            </li>
            <li class="sidebar-title">
                <a href="../logout.php" class="submenu-link">
                <i class="bi bi-door-open"></i> Logout</a>
            </li>
        </ul>
    </div>
</div>
        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>Transaksi</h3>
<div class="page-content"> 
    <!-- Tombol tampil produk dengan modal -->

    <div class="me-1 mb-1 d-inline-block">
                                <!-- Button trigger for large size modal -->
                                <button type="button" class="btn btn-outline-primary mt-4 mb-2" data-bs-toggle="modal"
                                    data-bs-target="#large">
                                    Data Produk
                                </button>
                                <!--large size Modal -->
                                <div class="modal fade text-left" id="large" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel17" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel17">Produk</h4>
                                                <button type="button" class="close " data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="card">
                <div class="card-body">
                    <div class="table-responsive datatable-minimal">
                        <table class="table" id="table_produk">
                            <thead>
                                <tr>
                                    <th>ID Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Merk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $produk_result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>{$row['id_produk']}</td>";
                                    echo "<td>{$row['nama_produk']}</td>";
                                    echo "<td>{$row['harga']}</td>";
                                    echo "<td>{$row['merk']}</td>";
                                    echo "<td>
          <button type='button' class='btn btn-outline-primary me-1 mb-1' 
                  onclick='addToTransaction(\"{$row['id_produk']}\", \"{$row['nama_produk']}\", \"{$row['harga']}\", \"{$row['merk']}\")'>
                  Add
          </button>
       </td>";


                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                                                <section class="section">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>

<section class="section">
        <div class="card">
            <div class="card-body">

            <!-- Bagian transaksi -->
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Produk</th>
                            <th>Merk</th>
                            <th>Jumlah Dibeli</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                <form class="form">
                                <div class="row">
                                    <div class="col-md-3 col-5">
                                        <div class="form-group">
                                            <label for="first-name-column">Total</label>
                                            <input type="text" id="first-name-column" class="form-control" name="fname-column" readonly>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-3 col-5">
                                        <div class="form-group">
                                            <label for="last-name-column">Bayar</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                            xname="lname-column">
                                        </div>
                                    </div> -->
                                    <div class="col-md-3 col-5">
                                        <div class="form-group">
                                            <label for="last-name-column">Bayar</label>
                                            <input type="text" id="bayarInput" class="form-control" oninput="calculateKembalian()">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-5">
                                        <div class="form-group">
                                            <label for="last-name-column">Kembalian</label>
                                            <input type="text" id="last-name-column" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Cetak</button>
                                    </div>
                                </div>
                            </form>
            </div>
        </div>

    </section>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2024 &copy; Presma</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                by <a href="https://saugi.me">Cecilia</a></p>
        </div>
    </div>
</footer>
        </div>
    
    <script src="../dist/assets/static/js/components/dark.js"></script>
    <script src="../dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
    
    <script src="../dist/assets/compiled/js/app.js"></script>
    

    
<!-- Need: Apexcharts -->
<script src="../dist/ssets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="../dist/assets/static/js/pages/dashboard.js"></script>

</body>

</html>

<script>
    // Function to add a product to the transaction table
    function addToTransaction(id_produk, nama_produk, harga, merk) {        
        // Get the transaction table body
        var tableBody = document.getElementById('table1').getElementsByTagName('tbody')[0];

        // Create a new row
        var newRow = tableBody.insertRow(tableBody.rows.length);

        // Insert cells into the row
        var cellNO = newRow.insertCell(0);
        var cellNamaProduk = newRow.insertCell(1);
        var cellMerk = newRow.insertCell(2);
        var cellJumlahDibeli = newRow.insertCell(3);
        var cellHarga = newRow.insertCell(4);
        
        // Add data to the cells
        cellNO.innerHTML = tableBody.rows.length; // You can adjust this based on your needs
        cellNamaProduk.innerHTML = nama_produk;
        cellMerk.innerHTML = merk;
        cellJumlahDibeli.innerHTML = '<input type="number" name="jumlah_dibeli[]" oninput="calculateTotal()">';
        cellHarga.innerHTML = harga;
        // Add a delete button to the new row
        var cellDelete = newRow.insertCell(5);
        cellDelete.innerHTML = '<button type="button" class="btn btn-danger" onclick="deleteRow(this)">Delete</button>';
        
    }
    // Function to delete a row from the transaction table
    function deleteRow(button) {
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);

        // Update the row numbers
        var table = document.getElementById('table1');
        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].cells[0].innerHTML = i;
        }
    }

</script>

<script>
    // Function to calculate total based on the quantity and price
    function calculateTotal() {
        var table = document.getElementById('table1');
        var totalInput = document.getElementById('first-name-column');
        var total = 0;

        for (var i = 1; i < table.rows.length; i++) {
            var quantity = parseInt(table.rows[i].cells[3].getElementsByTagName('input')[0].value, 10) || 0;
            var price = parseFloat(table.rows[i].cells[4].innerText) || 0;
            total += quantity * price;
        }

        // Update the total input without decimal places
        totalInput.value = Math.round(total);
    }
</script>

<script>
    // Function to calculate kembalian based on the bayar input
    function calculateKembalian() {
        var totalInput = document.getElementById('first-name-column');
        var bayarInput = document.getElementById('bayarInput');
        var kembalianInput = document.getElementById('last-name-column');

        var total = parseInt(totalInput.value, 10) || 0;
        var bayar = parseInt(bayarInput.value, 10) || 0;

        var kembalian = bayar - total;

        if (kembalian >= 0) {
            kembalianInput.value = kembalian;
        } else {
            // Display the amount that is still due (negative kembalian value)
            kembalianInput.value = "Kurang " + Math.abs(kembalian);
        }
    }
</script>

