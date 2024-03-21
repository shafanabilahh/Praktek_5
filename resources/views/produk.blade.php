<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Baju</title>
    <style>
        /* CSS untuk tata letak produk */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3; /* Ubah warna background */
        }
        header, footer {
            background-color: #333; /* Ubah warna header dan footer */
            color: #fff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        footer {
            bottom: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
            margin: 80px auto 20px auto; /* Berikan margin untuk header */
            padding-bottom: 60px; /* Sesuaikan dengan tinggi footer */
        }
        .product {
            border: 1px solid #ccc;
            padding: 20px;
            width: 30%;
            text-align: center;
            background-color: #fff; /* Ubah warna background */
            border-radius: 5px;
        }
        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .product h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
        }
        .product p {
            margin: 5px 0;
        }
        .product button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .product button:hover {
            background-color: #45a049;
        }

        /* Media query untuk tata letak responsif */
        @media screen and (max-width: 768px) {
            .product {
                width: 45%;
            }
        }

        @media screen and (max-width: 480px) {
            .product {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Produk Baju</h1>
    </header>
    <div class="container">
        <!-- Product 1 -->
        <div class="product">
            <img src="https://cdn.media.amplience.net/i/truworths/prod3117346_1?fmt=auto&$pdp_full_desktop$" alt="Dress">
            <h3>Dress</h3>
            <p>Harga: Rp.600.000</p>
            <p>Jumlah Tersedia: 20</p>
            <button>Beli</button>
        </div>
        <!-- Product 2 -->
        <div class="product">
            <img src="https://cdn.media.amplience.net/i/truworths/prod3156717_1?fmt=auto&$pdp_full_desktop$" alt="Sweatshirt">
            <h3>Sweatshirt</h3>
            <p>Harga: Rp.500.000</p>
            <p>Jumlah Tersedia: 15</p>
            <button>Beli</button>
        </div>
        <!-- Product 3 -->
        <div class="product">
            <img src="https://cdn.media.amplience.net/i/truworths/prod3121900_1?fmt=auto&$pdp_full_desktop$" alt="Jacket">
            <h3>Jacket</h3>
            <p>Harga: Rp.700.000</p>
            <p>Jumlah Tersedia: 25</p>
            <button>Beli</button>
        </div>
        <!-- Product 4 -->
        <div class="product">
            <img src="https://cdn.media.amplience.net/i/truworths/prod3126218_1?fmt=auto&$pdp_full_desktop$" alt="Vest">
            <h3>Vest</h3>
            <p>Harga: Rp.550.000</p>
            <p>Jumlah Tersedia: 18</p>
            <button>Beli</button>
        </div>
        <!-- Product 5 -->
        <div class="product">
            <img src="https://cdn.media.amplience.net/i/truworths/prod3115335_1?fmt=auto&$pdp_full_desktop$" alt="Cropped Tee">
            <h3>Cropped Tee</h3>
            <p>Harga: Rp.650.000</p>
            <p>Jumlah Tersedia: 22</p>
            <button>Beli</button>
        </div>
        <!-- Product 6 -->
        <div class="product">
            <img src="https://cdn.media.amplience.net/i/truworths/prod3135218_1?fmt=auto&$pdp_full_desktop$" alt="Track Top">
            <h3>Track Top</h3>
            <p>Harga: Rp.750.000</p>
            <p>Jumlah Tersedia: 30</p>
            <button>Beli</button>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Produk Baju</p>
    </footer>
</body>
</html>
