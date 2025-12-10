# Twig Ticket App

A simple ticket management web application built with **PHP** and **Twig** templating engine. It allows users to create, view, and manage tickets with a clean, modern UI.

---

## Table of Contents

- [Demo](#demo)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

---

## Demo

Run locally at: `http://localhost:8000`  

*(You need PHP installed or XAMPP/WAMP to run this project locally.)*

---

## Features

- View all tickets
- Create new tickets
- Delete tickets
- Responsive design
- Built using modern CSS practices

---

## Tech Stack

- PHP 8+
- Twig Template Engine
- Composer for dependency management
- Vanilla CSS & JS
- XAMPP/WAMP for local server (optional)

---

## Project Structure

twig-ticket-app/
├─ public/
│ ├─ css/
│ ├─ js/
│ └─ index.php
├─ src/
│ ├─ Controller/
│ ├─ Core/
│ ├─ Entity/
│ ├─ Form/
│ └─ Repository/
├─ templates/
│ ├─ auth/
│ ├─ dashboard/
│ ├─ includes/
│ └─ tickets/
├─ config/
├─ var/
├─ vendor/
├─ composer.json
└─ README.md

yaml
Copy code

---

## Installation

1. **Clone the repository**

```bash
git clone https://github.com/Flow1313/twig-ticket-app.git
cd twig-ticket-app
Install dependencies with Composer

bash
Copy code
composer install
Run the development server

Using PHP built-in server:

bash
Copy code
php -S localhost:8000 -t public
Using XAMPP/WAMP:
Copy the project to htdocs and open http://localhost/twig-ticket-app/public

Usage
Open your browser at http://localhost:8000

View all tickets on the homepage

Click Create Ticket to add a new ticket

Delete tickets using the provided buttons

Contributing
Fork the project

Create your feature branch (git checkout -b feature/YourFeature)

Commit your changes (git commit -m 'Add some feature')

Push to the branch (git push origin feature/YourFeature)

Open a Pull Request

License
This project is licensed under the MIT License. See the LICENSE file for details.

