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

### 📌 Catatan Penting
- Jangan upload file `.csv` ke GitHub untuk menghindari error push karena batas ukuran file GitHub.
- Jika ingin berkontribusi pada pengolahan data, cukup referensikan file dari lokasi lokal Anda.
- Gunakan `.gitignore` agar folder CSV tidak terupload:

```bash
# .gitignore
/database/data/*.csv
/storage/app/foods/*.csv
````

---

### 🛠️ Teknologi yang Digunakan

* Laravel
* Git
* Google Drive (untuk penyimpanan file CSV)

---

Terima kasih telah berkontribusi!
