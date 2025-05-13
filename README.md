```markdown
# Capstone Project - Platform Edukasi Gizi Berbasis Web 
untuk Meningkatkan Kesadaran Pola Makan Sehat 
dan Gizi Seimbang di Indonesia

## 📂 Penempatan File CSV (Dataset)

Karena keterbatasan GitHub dalam menyimpan file besar (>100MB), seluruh file `.csv` pada proyek ini **tidak disertakan langsung dalam repositori ini**. Untuk menjalankan proyek secara lengkap, Anda perlu mengunduh file CSV dari link yang tersedia, lalu menempatkannya secara manual ke dalam struktur folder berikut:

---

#### 1. `capstone01/database/data/`

Tempatkan file berikut ke dalam folder ini:
- `food_nutrient.csv`
- `nutrient.csv`

📍 **Struktur folder:**
```

capstone01/
└── database/
└── data/
├── food\_nutrient.csv
└── nutrient.csv

```

---

#### 2. `capstone01/storage/app/foods/`

Tempatkan file berikut ke dalam folder ini:
- `food.csv`

📍 **Struktur folder:**
```

capstone01/
└── storage/
└── app/
└── foods/
└── food.csv

````

---

### 🔗 Link Unduhan File CSV

Seluruh file CSV tersedia dalam folder Google Drive berikut:

👉 [📁 Link Google Drive Dataset](https://drive.google.com/drive/folders/1kv4Hs7l2RjoL0j_5oWZI2V2eQChCf8pq?usp=drive_link)

> *Pastikan Anda sudah login akun UMS untuk mengakses file, dan memiliki izin akses.*

---

### ⚠️ Jika Terlanjur Commit File CSV Besar

Jika Anda **terlanjur meng-commit file CSV besar** dan mengalami error saat push (karena GitHub menolak file >100MB), ikuti langkah berikut:

1. **Clone ulang repo di folder baru agar bersih:**

```bash
git clone https://github.com/NAUFALZHM/Capstone_Project.git cleanedrepo
cd cleanedrepo
````

2. **Hapus file CSV dari project dan commit ulang:**

```bash
git rm --cached capstone01/database/data/food_nutrient.csv
git rm --cached capstone01/database/data/nutrient.csv
git rm --cached capstone01/storage/app/foods/food.csv
```

3. **Tambahkan ke `.gitignore` agar tidak ikut commit lagi:**

```bash
echo "capstone01/database/data/*.csv" >> .gitignore
echo "capstone01/storage/app/foods/*.csv" >> .gitignore
```

4. **Commit ulang dan push paksa:**

```bash
git commit -am "Remove large CSV files from history"
git push origin main --force
```

---

### 📌 Catatan Penting

* Jangan upload file `.csv` ke GitHub untuk menghindari error push karena batas ukuran file GitHub.
* Jika ingin berkontribusi pada pengolahan data, cukup referensikan file dari lokasi lokal Anda.
* Pastikan `.gitignore` mencantumkan file `.csv`:

```bash
# .gitignore
capstone01/database/data/*.csv
capstone01/storage/app/foods/*.csv
```

---

### 🛠️ Teknologi yang Digunakan

* Laravel
* Git
* Google Drive (untuk penyimpanan file CSV)

---

Terima kasih telah berkontribusi!

```
