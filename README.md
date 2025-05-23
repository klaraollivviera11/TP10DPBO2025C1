# Janji
Saya Klara Ollivviera Augustine Gunawan dengan NIM 2306205 mengerjakan soal Tugas Praktikum 10 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

# Desain Program
Program ini merupakan implementasi dari pola Model-View-ViewModel (MVVM), yang digunakan untuk mengelola data customer, shipping method, dan orders pada sistem e-commerce. Program ini memisahkan logika aplikasi, tampilan pengguna, dan data yang disimpan dalam basis data sehingga memudahkan dalam pemeliharaan dan pengelolaan.

## Fitur Utama:
### 1. Manajemen Customer:
- Menambahkan, mengedit, dan menghapus data customer.
- Menampilkan informasi customer, seperti nama.
- Tampilkan data customer dalam bentuk tabel dengan fitur aksi untuk edit dan hapus data.

### 2. Manajemen Shipping:
- Menambahkan, mengedit, dan menghapus metode pengiriman.
- Menampilkan informasi metode pengiriman.
- Tampilkan data metode pengiriman dalam bentuk tabel dengan fitur aksi untuk edit dan hapus data.

### 3. Manajemen Orders:
- Menambahkan, mengedit, dan menghapus data pesanan (orders).
- Menampilkan informasi pesanan, seperti nomor pesanan, customer, dan metode pengiriman.
- Tampilkan data pesanan dalam bentuk tabel dengan fitur aksi untuk edit dan hapus data.

## Arsitektur MVVM:
- **Model**: Bertanggung jawab untuk pengelolaan data dan interaksi dengan basis data. Model mengelola operasi CRUD untuk customer, shipping, dan orders.
- **View**: Bertanggung jawab untuk menampilkan data kepada pengguna, seperti tabel data customer, shipping, dan orders serta form input.
- **ViewModel**: Bertanggung jawab untuk mengambil data dari model dan mengirimnya ke view. ViewModel juga menangani logika bisnis aplikasi, seperti menambah, mengedit, dan menghapus data.

## Tabel Utama:
### Tabel Customer:
- Menyimpan data customer yang meliputi ID dan nama.

### Tabel Shipping Method:
- Menyimpan data metode pengiriman yang meliputi ID dan nama metode pengiriman.

### Tabel Orders:
- Menyimpan data pesanan yang meliputi ID, nomor pesanan, ID customer, dan ID metode pengiriman.

## Struktur Program:
### Folder config:
- **Database.php**: Kelas untuk pengelolaan koneksi ke database.

### Folder Model:
1. **Customer.php**: Kelas untuk mengelola data customer (mengambil, menambah, mengedit, dan menghapus data customer).
2. **Shipping.php**: Kelas untuk mengelola data metode pengiriman (mengambil, menambah, mengedit, dan menghapus data shipping).
3. **Orders.php**: Kelas untuk mengelola data pesanan (mengambil, menambah, mengedit, dan menghapus data orders).

### Folder ViewModel:
1. **CustomerViewModel.php**: Kelas untuk menangani logika terkait customer, seperti mengambil data customer, menambah, mengedit, dan menghapus data customer.
2. **OrdersViewModel.php**: Kelas untuk menangani logika terkait orders, seperti mengambil data orders, menambah, mengedit, dan menghapus data orders.
3. **ShippingViewModel.php**: Kelas untuk menangani logika terkait shipping, seperti mengambil data shipping, menambah, mengedit, dan menghapus data shipping.

### Folder Views:
1. **customer_form.php**: Form untuk menambah dan mengedit data customer.
2. **customer_list.php**: Menampilkan daftar customer dalam bentuk tabel.
3. **orders_form.php**: Form untuk menambah dan mengedit data orders.
4. **orders_list.php**: Menampilkan daftar orders dalam bentuk tabel.
5. **shipping_form.php**: Form untuk menambah dan mengedit data shipping.
6. **shipping_list.php**: Menampilkan daftar shipping dalam bentuk tabel.

# Alur Program
## 1. Menambahkan Customer:
- Gunakan form untuk menambah customer baru.
- Isi data customer dan tekan submit untuk menambah customer baru.

## 2. Mengedit Customer:
- Pilih customer yang ingin diedit pada tabel customer dan klik tombol "Edit".
- Sesuaikan data customer dan tekan submit untuk memperbarui informasi customer.

## 3. Menghapus Customer:
- Pilih customer yang ingin dihapus pada tabel customer dan klik tombol "Hapus".

## 4. Menampilkan Daftar Customer:
- Menampilkan daftar customer dalam bentuk tabel dengan informasi nama.

## 5. Menambahkan Shipping:
- Gunakan form untuk menambah metode pengiriman baru.
- Isi nama metode pengiriman dan tekan submit untuk menambah shipping baru.

## 6. Mengedit Shipping:
- Pilih shipping yang ingin diedit pada tabel shipping dan klik tombol "Edit".
- Sesuaikan data shipping dan tekan submit untuk memperbarui informasi shipping.

## 7. Menghapus Shipping:
- Pilih shipping yang ingin dihapus pada tabel shipping dan klik tombol "Hapus".

## 8. Menampilkan Daftar Shipping:
- Menampilkan daftar shipping dalam bentuk tabel dengan informasi nama metode pengiriman.

## 9. Menambahkan Order:
- Gunakan form untuk menambah order baru.
- Isi nomor order, pilih customer dan shipping, kemudian tekan submit untuk menambah order baru.

## 10. Mengedit Order:
- Pilih order yang ingin diedit pada tabel order dan klik tombol "Edit".
- Sesuaikan data order dan tekan submit untuk memperbarui informasi order.

## 11. Menghapus Order:
- Pilih order yang ingin dihapus pada tabel order dan klik tombol "Hapus".

## 12. Menampilkan Daftar Orders:
- Menampilkan daftar orders dalam bentuk tabel dengan informasi nomor order, customer, dan metode pengiriman.

# Dokumentasi
https://drive.google.com/file/d/1BR561AbYzBKyqqnp1TAmq_0YbjlnJK-S/view?usp=sharing
