<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>        
    body {
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
        }
        .header {
            width: 100%;
            height: 50px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #17a196;
            color: #ffffff;
            justify-content: space-between;
            align-items: center;
            text-align: left;
            display: flex;
            padding: 0 20px;
            box-sizing: border-box;
            gap: 20px;
            text-decoration: none;
        }
        .header a {
            text-decoration: none;
        }
        .footer {
            width: 100%;
            height: auto;
            position: fixed;
            bottom: 0;
            left: 0;
            background-color: #ffffff;
            color: #17a196;
            border-top: 1px solid #17a196;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 30px;
            box-sizing: border-box;
        }
        .spacer {
            height: 200px;
        }
        .judul {
            width: 100%;
        }
        .footer p, .total p, .total h1 {
            margin: 0;
        }
        .total {
            display: flex;
            gap: 5px;
        }
        .footer button {
            background-color: #17a196;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .footer button:hover {
            background-color: #148a84;
        }
        .c-item {
            padding: 20px 100px;
            margin-top: 70px;
        }
        .item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #17a196;
            padding: 10px 0;
        }
        .items {
            display: flex;
            align-items: center;
        }
        .deskripsi-item {
            margin-left: 20px;
        }
        .deskripsi-item h4 {
            font-size: 13pt;
            font-weight: 600;
        }
        .total-item {
            display: flex;
            gap: 5px;
        }
        .qty {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .qty button {
            padding: 5px 10px;
            background-color: #17a196;
            color: #ffffff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .qty button:hover {
            background-color: #148a84;
        }
        .item input[type="checkbox"] {
            margin-right: 15px;
        }
        .delete-selected {
            display: none;
            margin-left: 20px;
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .delete-selected:hover {
            background-color: #c51400;
        }
        p , h4, h3 {
            margin: 0%;
        }
        .item p{
            font-size: 8pt;
        }
        .item h3 {
            font-size: 19pt;
        }
        .footer h1 {
            font-size: 21pt;
            font-weight: 700;
        }
        @media (max-width: 768px) {
            .c-item {
                padding: 10px;
            }
            .item img {
                width: 70px;
                height: 70px;
            }
            .deskripsi-item h4 {
                font-size: 11pt;
            }
            .deskripsi-item p {
                font-size: 7pt;
            }
            .total-item h3 {
                font-size: 14pt;
            }
            .qty button {
                padding: 3px 6px;
            }
            .jml {
                font-size: 12pt;
            }
            h1{
                font-size: 17pt;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <a href="/" class="back" style="color:white;">&lt;</a>
    <div class="judul">Keranjang Saya</div>
    <button id="deleteSelected" class="delete-selected">Hapus</button>
</div>

<div class="c-item">
    @for ($i = 0; $i < 30; $i++)
    <div class="item">
        <div class="items">
            <input type="checkbox" class="delete-checkbox">
            <img src="img/contoh.png" width="100" height="100" alt="">
            <div class="deskripsi-item">
                <h4>Bear Brand 1000Liter Original</h4>
                <p>Barcode: 12093141891</p>
                <div class="total-item">
                    <p>Rp</p>
                    <h3 class="price">100.000</h3>
                </div>
            </div>
        </div>
        <div class="qty">
            <button class="increase">+</button>
            <div class="jml">10</div>
            <button class="decrease">-</button>
        </div>
    </div>
    @endfor
</div>

<div class="spacer"></div>

<div class="footer">
    <div class="footer-kiri">
        <p>Total Belanja: </p>
        <div class="total">
            <p>Rp</p>
            <h1 id="totalAmount">0</h1>
        </div>
    </div>
    <div class="footer-kanan">
        <button id="checkout">Checkout</button>
    </div>
</div>

<script>
    function updateTotal() {
        let total = 0;
        document.querySelectorAll('.item').forEach(item => {
            const quantity = parseInt(item.querySelector('.jml').textContent);
            const price = parseInt(item.querySelector('.price').textContent.replace('.', ''));
            total += quantity * price;
        });
        document.getElementById('totalAmount').textContent = total.toLocaleString();
    }

    function toggleDeleteButton() {
        const checkedItems = document.querySelectorAll('.delete-checkbox:checked').length;
        const deleteButton = document.getElementById('deleteSelected');
        if (checkedItems > 0) {
            deleteButton.style.display = 'block';
        } else {
            deleteButton.style.display = 'none';
        }
    }

    document.querySelectorAll('.increase').forEach(button => {
        button.addEventListener('click', function () {
            const qtyDiv = this.nextElementSibling;
            let qty = parseInt(qtyDiv.textContent);
            qtyDiv.textContent = ++qty;
            updateTotal();
        });
    });

    document.querySelectorAll('.decrease').forEach(button => {
        button.addEventListener('click', function () {
            const qtyDiv = this.previousElementSibling;
            let qty = parseInt(qtyDiv.textContent);
            if (qty > 1) {
                qtyDiv.textContent = --qty;
                updateTotal();
            }
        });
    });

    document.querySelectorAll('.delete-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', toggleDeleteButton);
    });

    document.getElementById('deleteSelected').addEventListener('click', function () {
        Swal.fire({
            title: 'Anda yakin?',
            text: "Item yang dipilih akan dihapus!",
            icon: 'warning',
            width: 400, // Ukuran box lebih kecil
            showCancelButton: true,
            confirmButtonColor: '#17a196',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelectorAll('.delete-checkbox:checked').forEach(checkbox => {
                    checkbox.closest('.item').remove();
                });
                updateTotal();
                Swal.fire(
                    'Dihapus!',
                    'Item yang dipilih telah dihapus.',
                    'success'
                );
                toggleDeleteButton(); // Cek ulang untuk sembunyikan tombol delete
            }
        });
    });

    updateTotal();
</script>

</body>
</html>
