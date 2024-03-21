<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9; /* Ubah warna background */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .guest {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            background-color: #e0e0e0; /* Ubah warna background */
        }

        .guest p {
            margin: 5px 0;
        }

        .guest-buttons {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .guest-buttons button {
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: 5px;
        }

        .guest-buttons button.view-btn {
            background-color: #4CAF50; /* Warna hijau untuk tombol View */
        }

        .guest-buttons button.delete-btn {
            background-color: #ff6f61; /* Warna merah untuk tombol Delete */
        }

        .guest-buttons button:hover {
            opacity: 0.8;
        }

        @media screen and (max-width: 768px) {
            .container {
                max-width: 95%;
            }
            .guest {
                flex-direction: column;
            }
            .guest-buttons {
                margin-top: 10px;
                justify-content: flex-end;
            }
            .guest-buttons button {
                margin-left: 0;
                margin-right: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buku Tamu</h1>
        <div class="guest">
            <div>
                <p><strong>Nama:</strong> John Doe</p>
                <p><strong>Keperluan:</strong> Membeli baju</p>
                <p><strong>Tanggal Tiba:</strong> 2024-03-21</p>
            </div>
            <div class="guest-buttons">
                <button class="delete-btn">Delete</button> <!-- Ubah kelas menjadi "delete-btn" -->
                <button class="view-btn">View</button> <!-- Ubah kelas menjadi "view-btn" -->
            </div>
        </div>
        <div class="guest">
            <div>
                <p><strong>Nama:</strong> David Smith</p>
                <p><strong>Keperluan:</strong> Membeli baju</p>
                <p><strong>Tanggal Tiba:</strong> 2024-03-20</p>
            </div>
            <div class="guest-buttons">
                <button class="delete-btn">Delete</button> <!-- Ubah kelas menjadi "delete-btn" -->
                <button class="view-btn">View</button> <!-- Ubah kelas menjadi "view-btn" -->
            </div>
        </div>
        <div class="guest">
            <div>
                <p><strong>Nama:</strong> Emily Davis</p>
                <p><strong>Keperluan:</strong> Mencatat Stock</p>
                <p><strong>Tanggal Tiba:</strong> 2024-03-18</p>
            </div>
            <div class="guest-buttons">
                <button class="delete-btn">Delete</button> <!-- Ubah kelas menjadi "delete-btn" -->
                <button class="view-btn">View</button> <!-- Ubah kelas menjadi "view-btn" -->
            </div>
        </div>
        <div class="guest">
            <div>
                <p><strong>Nama:</strong> Michael Brown</p>
                <p><strong>Keperluan:</strong> Mengantar Stock</p>
                <p><strong>Tanggal Tiba:</strong> 2024-03-12</p>
            </div>
            <div class="guest-buttons">
                <button class="delete-btn">Delete</button> <!-- Ubah kelas menjadi "delete-btn" -->
                <button class="view-btn">View</button> <!-- Ubah kelas menjadi "view-btn" -->
            </div>
        </div>
        <div class="guest">
            <div>
                <p><strong>Nama:</strong> Sarah Johnson</p>
                <p><strong>Keperluan:</strong> Membeli baju</p>
                <p><strong>Tanggal Tiba:</strong> 2024-03-03</p>
            </div>
            <div class="guest-buttons">
                <button class="delete-btn">Delete</button> <!-- Ubah kelas menjadi "delete-btn" -->
                <button class="view-btn">View</button> <!-- Ubah kelas menjadi "view-btn" -->
            </div>
        </div>
        <div class="guest">
            <div>
                <p><strong>Nama:</strong> Anna Nguyen</p>
                <p><strong>Keperluan:</strong> Membeli baju</p>
                <p><strong>Tanggal Tiba:</strong> 2024-03-01</p>
            </div>
            <div class="guest-buttons">
                <button class="delete-btn">Delete</button> <!-- Ubah kelas menjadi "delete-btn" -->
                <button class="view-btn">View</button> <!-- Ubah kelas menjadi "view-btn" -->
            </div>
        </div>
        <div class="guest">
            <div>
                <p><strong>Nama:</strong> Amanda Jones</p>
                <p><strong>Keperluan:</strong> Membeli baju</p>
                <p><strong>Tanggal Tiba:</strong> 2024-02-22</p>
            </div>
            <div class="guest-buttons">
                <button class="delete-btn">Delete</button> <!-- Ubah kelas menjadi "delete-btn" -->
                <button class="view-btn">View</button> <!-- Ubah kelas menjadi "view-btn" -->
            </div>
        </div>
    </div>
</body>
</html>
