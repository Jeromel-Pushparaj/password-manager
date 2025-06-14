# 🔐 Password Manager

A secure and user-friendly Password Manager built with Laravel, Blade, and Livewire. This application allows users to store, manage, and organize credentials safely in a MySQL database, with real-time interactivity and encryption support.

## 🚀 Features

- 🧾 Add, edit, view, and delete stored passwords
- 🔒 Generate credential according to the difficulty 
- ⚡ Real-time UI updates with Livewire
- 📁 Category-based password organization
- 🔍 Instant search functionality
- 🧑‍💻 Clean and responsive Blade UI

## 🛠️ Built With

- **Laravel 10** – PHP framework for backend logic
- **Blade** – Templating engine for frontend rendering
- **Livewire** – For dynamic real-time UI components
- **MySQL** – For secure and structured data storage

## 📸 Screenshots

*(Add screenshots of the UI here for better presentation.)*

## ⚙️ Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Jeromel-Pushparaj/password-manager.git
   cd password-manager
    ````

2. Install dependencies:

   ```bash
   composer install
   npm install && npm run dev
   ```

3. Create and set up your `.env` file:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your database in the `.env` file and run migrations:

   ```bash
   php artisan migrate
   ```

5. Start the development server:

   ```bash
   php artisan serve
   ```

## 🧪 Testing (Optional)

Coming soon – unit and feature tests for core functionalities.

## 📌 Todo

* creating web extension to connect password saving and on boarding
* Password sharing with expiration
* Password strength analysis

## 🙌 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you'd like to change.

## 📜 License

This project is open-source under the [MIT License](LICENSE).

---

Made with ❤️ by [Jeromel Pushparaj](https://github.com/Jeromel-Pushparaj)

```

