# 🎓 AP CET’s College & Branch Prediction System

![License](https://img.shields.io/badge/License-MIT-blue.svg)
![Status](https://img.shields.io/badge/Status-Active-brightgreen)
![PHP](https://img.shields.io/badge/PHP-Server%20Side-blue)
![HTML](https://img.shields.io/badge/HTML-Frontend-orange)
![CSS](https://img.shields.io/badge/CSS-UI%20Design-purple)
![MySQL](https://img.shields.io/badge/MySQL-Database-blue)
![Contributions](https://img.shields.io/badge/Contributions-Welcome-brightgreen)

> *"Life is a matter of choices, and every choice you make makes you"* – John C. Maxwell

The **AP CET’s College and Branch Prediction System** is designed to help students make informed choices during the **AP EAPCET** counseling process.
By analyzing **previous years’ cut-off data**, this system predicts the colleges and branches students are most likely to get based on their **rank, category, and preferences**.

---

## 📸 Demo

*(Add your demo GIF here)*
![Demo GIF Placeholder](https://via.placeholder.com/800x400?text=Demo+GIF+Goes+Here)

---

## 📌 Features

* **Rank & Category Based Predictions** — Accurate preference list generation based on historical cut-off data.
* **Branch & Location Filters** — Filter results by branch, district, or specific colleges.
* **Detailed College Information** — Displays college name, location, and branch-wise predictions.
* **User-Friendly Web Interface** — Simple and easy-to-use UI for all students.
* **Reusable Codebase** — Can be adapted for POLYCET, ECET, ICET, etc. by changing the database.

---

## 🛠️ Tech Stack

| Layer        | Technology                       |
| ------------ | -------------------------------- |
| **Frontend** | HTML, CSS, JavaScript            |
| **Backend**  | PHP                              |
| **Database** | MySQL                            |
| **Server**   | XAMPP                            |
| **Data**     | Cut-off data from previous years |

---

## 📂 Project Structure

```
AP-CET-Prediction/
│── assets/                # Static assets (icons, logos, etc.)
│── css/                   # Stylesheets
│── dashboard/             # Dashboard-related files
│── data/                  # Data files (cut-off datasets, etc.)
│── img/                   # Images used in UI
│── vendor/                # Third-party libraries
│── xampp/                 # Server-related files
│── .htaccess              # Server configuration
│── 404.shtm               # Error page
│── *.php                  # Backend PHP scripts for logic
│── *.html                 # Frontend HTML pages
│── *.css                  # Stylesheets
│── *.png / *.jpg          # Images
│── collegedb.sql          # Database schema & cut-off data
│── README.md              # Project documentation
```

---

## 🔄 Flow Diagram

*(Replace the placeholder with your actual diagram)*
![Flow Diagram](https://via.placeholder.com/800x500?text=Flow+Diagram+Here)

**Process:**

1. **Input Collection** — User enters rank, category, preferred branches, and districts.
2. **Data Processing** — System fetches relevant cut-off data from database.
3. **Filtering** — Applies branch, location, and category filters.
4. **Output Generation** — Displays a ranked list of possible colleges with branch and location.

---

## 🚀 Getting Started

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/lazypandaa/AP-CET-Prediction.git
cd AP-CET-Prediction
```

### 2️⃣ Setup Database

* Import `collegedb.sql` into your MySQL server.
* Configure database credentials in the PHP config file.

### 3️⃣ Start Server

* Use **XAMPP** or **WAMP** to run Apache & MySQL.
* Place the project folder inside the `htdocs` directory.

### 4️⃣ Access the App

Open browser and go to:

```
http://localhost/AP-CET-Prediction
```

---

## 📈 Advantages

* Helps students (especially from rural areas) avoid wrong preference choices.
* Reduces counseling-time stress by providing a ready preference list.
* Works for **any rank and category**.
* Can be expanded for multiple entrance exams.

---

## 🔮 Future Enhancements

* **AI/ML Integration** for smarter predictions.
* **User Login System** to save and revisit preferences.
* **Real-time Cut-off Updates** from official sources.
* **Mobile App Version** for Android/iOS.

---

## 📜 License

This project is licensed under the **MIT License**.

---

## 🤝 Contributing

Contributions are welcome!
Fork the repo → Create a branch → Make changes → Submit a Pull Request.

---

## 📬 Contact

**Eswar**
📧 [eswarlazypanda@gmail.com](mailto:eswarlazypanda@gmail.com)
🌐 [GitHub Profile](https://github.com/lazypandaa)
