


# 📬 MailBridge — Dynamic SMTP Mail Sender

MailBridge is an **open-source Laravel + Livewire** application that allows you to send **emails with attachments** using **dynamic SMTP credentials**.  
You can configure and test different mail servers (Google, DigitalOcean, or any SMTP provider) right from your browser — no `.env` edits needed.

---

## 🚀 Features

✅ Built with **Laravel 11**, **Livewire 3**, and **Bootstrap 5**  
✅ Send mails with **attachments**  
✅ Dynamic **SMTP configuration** (no restart or env changes)  
✅ Supports multiple pages — e.g. Google & DigitalOcean mailers  
✅ Clean, responsive **Bootstrap UI** with sidebar navigation  
✅ Uses **SQLite** database for lightweight setup  
✅ Open source & ready to extend

---

## 🛠️ Installation

### 1️⃣ Clone the repository
```bash
git clone https://github.com/yourusername/mailbridge.git
cd mailbridge
```

### 2️⃣ Install dependencies

```bash
composer install
npm install && npm run build
```

### 3️⃣ Environment setup

Copy the example `.env` file and configure your app:

```bash
cp .env.example .env
```

Inside `.env`, use SQLite for simplicity:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```

Then create the database file:

```bash
touch database/database.sqlite
```

### 4️⃣ Run migrations (optional if needed)

```bash
php artisan migrate
```

### 5️⃣ Start the development server

```bash
php artisan serve
```

Access the app at **[http://localhost:8000](http://localhost:8000)**

---

## 💡 Usage

1. Navigate to either **Google Mail** or **DigitalOcean Mail** from the sidebar.
2. Fill in your SMTP settings:

   * SMTP Host (e.g., `smtp.gmail.com`)
   * SMTP Port (e.g., `587`)
   * SMTP User (your email)
   * SMTP Password (app password or token)
   * Encryption (`tls`, `ssl`, or none)
   * From Email / Name
3. Add recipient, subject, message, and optional attachment.
4. Hit **Send Mail** — your email will be sent instantly with the selected SMTP settings!

---

## 📂 Folder Structure

```
app/
 ├── Http/Livewire/
 │    ├── GoogleMail.php
 │    └── DigitalOceanMail.php
 ├── Mail/
 │    └── GenericMail.php
resources/
 ├── views/
 │    ├── layouts/app.blade.php
 │    ├── livewire/
 │    │    ├── google-mail.blade.php
 │    │    └── digitalocean-mail.blade.php
 │    └── emails/generic.blade.php
```

---

## 🧩 Tech Stack

* **Laravel 11**
* **Livewire 3**
* **Bootstrap 5**
* **SQLite**
* **PHP 8.2+**

---

## 📦 Future Enhancements

* Save SMTP profiles in database
* Support for multiple recipients / CC / BCC
* Mail sending history
* Dark mode UI
* API for external integrations

---

## 🧑‍💻 Contributing

Contributions are welcome!
Fork the repo, create a feature branch, and open a pull request.

---

## 📜 License

This project is licensed under the **MIT License** — free to use and modify.

---

## 🌐 Author

**[Alfred Nti]**
🐙 GitHub: [@freddyWhest](https://github.com/freddyWhest)

```
