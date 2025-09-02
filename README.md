# FarmToFarming

FarmToFarming is a web application designed to connect farmers and landowners, enabling seamless registration, land management, and dashboard functionalities.

## Features

- Farmer and client registration
- Land registration and management
- Admin dashboard for managing users and land data
- User dashboards for farmers and clients
- Image upload and display (e.g., soil reports)
- Responsive UI with Bootstrap

## Getting Started

### Prerequisites

- PHP >= 7.4
- Composer
- Node.js & npm
- MySQL

## Demo Video
https://github.com/user-attachments/assets/d192ee05-c718-4b1c-b941-f16549b1f2d1

## UI/Dashboard Screenshots.

### Landing page
<img width="1850" height="821" alt="Screenshot 2025-09-03 020131" src="https://github.com/user-attachments/assets/06f4e94a-cc5e-43f4-82bd-076f0d4578d9" />

### login/signup 
<img width="1059" height="859" alt="Screenshot 2025-09-03 020113" src="https://github.com/user-attachments/assets/02cbd227-53bf-4bfd-ba6c-fd94b851c9a4" />

### Home page
<img width="1911" height="946" alt="Screenshot 2025-09-03 020052" src="https://github.com/user-attachments/assets/88c57165-3030-445a-b501-d43411bf55af" />

### Detail form
<img width="1885" height="954" alt="Screenshot 2025-09-03 020037" src="https://github.com/user-attachments/assets/41d6ec11-6982-4b2c-a1fa-f68d0a110393" />

### Dashboard for farmers
<img width="1895" height="940" alt="Screenshot 2025-09-03 020017" src="https://github.com/user-attachments/assets/f1b360fc-3e39-413e-8b5b-77f859be409e" />

## DataBase Model structure to store farmer-land details
<img width="1744" height="917" alt="image" src="https://github.com/user-attachments/assets/deae1085-96be-4955-94a7-dbb08adc1ab7" />


### Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/FarmToFarming.git
   cd FarmToFarming
   ```

2. Install PHP dependencies:
   ```sh
   composer install
   ```

3. Install JavaScript dependencies:
   ```sh
   npm install
   ```

4. Copy `.env.example` to `.env` and configure your environment variables.

5. Generate application key:
   ```sh
   php artisan key:generate
   ```

6. Run migrations:
   ```sh
   php artisan migrate
   ```

7. Start the development server:
   ```sh
   php artisan serve
   ```


