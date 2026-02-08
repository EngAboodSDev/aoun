# عون لمساعدة الحجاج والمعتمرين | Aoun - Hajj & Umrah Helper

A web platform designed to assist pilgrims (Hajj) and Umrah performers with comprehensive guides, volunteer support, and translation services. The platform connects pilgrims with multilingual volunteers and provides step-by-step ritual instructions in Arabic.

---

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [License](#license)

---

## Overview

**عون (Aoun)** means "Help" or "Support" in Arabic. This platform serves as a digital companion for Muslims performing Hajj or Umrah by providing:

- **Detailed ritual guides** for Hajj and Umrah with step-by-step instructions
- **Volunteer matching** — pilgrims can find volunteers who speak their language
- **Real-time translation** — translate text between 50+ languages
- **News updates** — latest Hajj and Umrah news from Saudi Arabia
- **FAQ section** — answers to common questions about rituals and procedures

The interface is fully in **Arabic** with RTL (right-to-left) layout, catering to the primary audience of pilgrims and volunteers.

---

## Features

### Authentication
- **Login** — Username and password authentication
- **Registration** — Sign up as pilgrim (Hajj/Umrah) or volunteer
- **Language selection** — Volunteers can specify languages they speak (Arabic, Bengali, English, German, etc.)
- **Session management** — Cookie-based sessions for authenticated users

### Hajj Guide (`hajj.php`)
- Complete guide to Hajj rituals
- Illustrated steps with images
- Covers all mandatory rites and procedures

### Umrah Guide (`umrah.php`)
- Six-step Umrah ritual guide:
  1. الإحرام (Ihram) — State of consecration
  2. تلفظ بنيتك وردد التلبية — Declare intention and recite Talbiyah
  3. تقدم تجاه الكعبة — Approach the Kaaba
  4. قم بالطواف — Perform Tawaf (circumambulation)
  5. قم بالسعي — Perform Sa'i (between Safa and Marwah)
  6. احلق شعرك أو قصه — Shave or trim hair

### Volunteer Connection (`chat.php`)
- Browse volunteers by language
- Filter volunteers by spoken language
- Direct WhatsApp contact links
- Display of volunteer languages, email, and contact info

### Translation (`translate.php`)
- Multi-language text translation
- 50+ languages supported via MyMemory API
- Text-to-speech (TTS) for pronunciation
- Copy to clipboard
- Swap source and target languages

### News (`news.php`)
- Latest Hajj and Umrah news
- Links to external news sources
- Card-based layout with images

### FAQ (`FAQ.php`)
- Accordion-style FAQ section
- Topics: differences between Hajj and Umrah, rituals, legal rulings, proxy performance, health procedures

---

## Tech Stack

| Layer | Technology |
|-------|------------|
| **Backend** | PHP 8.x |
| **Database** | MySQL / MariaDB |
| **Frontend** | HTML5, CSS3, JavaScript |
| **Framework** | Bootstrap 5 |
| **Libraries** | jQuery, Choices.js, Font Awesome |
| **APIs** | MyMemory Translation API |
| **Server** | XAMPP (Apache) |

---

## Project Structure

```
Aoun/
├── index.php          # Login & registration page
├── home.php           # Homepage (requires auth)
├── hajj.php           # Hajj ritual guide
├── umrah.php          # Umrah ritual guide
├── chat.php           # Volunteer contact / matching
├── translate.php      # Translation tool
├── news.php           # Hajj & Umrah news
├── FAQ.php            # Frequently asked questions
├── dbcon.php          # Database connection
├── css/
│   ├── style.css      # Main styles
│   └── trans_style.css # Translation page styles
├── js/
│   ├── script.js      # Login form toggle, Choices.js init
│   ├── languages.js   # Language list for registration
│   ├── countries.js   # Language codes for translation
│   └── trans_script.js # Translation logic
├── images/               # Images (Hajj, Umrah, news, user avatar)
├── database/
│   ├── aoun.sql       # Database schema
│   └── aoun (1).sql   # Alternative schema with sample data
└── README.md
```

---

## Requirements

- **PHP** 7.4 or higher (8.x recommended)
- **MySQL** 5.7+ or **MariaDB** 10.4+
- **Apache** (or compatible web server)
- **XAMPP** (or similar local stack)

---

## Installation

1. **Clone or copy** the project into your web server directory:
   ```
   c:\xampp\htdocs\2025\Aoun\
   ```

2. **Start XAMPP** and ensure Apache and MySQL are running.

3. **Import the database** (see [Database Setup](#database-setup)).

4. **Configure** `dbcon.php` with your database credentials (see [Configuration](#configuration)).

5. **Access the application** in your browser:
   ```
   http://localhost/2025/Aoun/
   ```

---

## Configuration

### Database Connection (`dbcon.php`)

Edit `dbcon.php` to match your environment:

```php
$con = mysqli_connect("localhost", "root", "", "aoun", "3308");
```

| Parameter | Description |
|-----------|-------------|
| Host | `localhost` (or your DB host) |
| Username | `root` (or your MySQL user) |
| Password | `""` (or your MySQL password) |
| Database | `aoun` |
| Port | `3308` (default MySQL is 3306) |

---

## Database Setup

1. Open **phpMyAdmin** or MySQL CLI.

2. Create the database and import the schema:
   ```sql
   -- Run the contents of database/aoun.sql or database/aoun (1).sql
   ```

3. **Tables:**
   - **`users`** — id, username, email, phone, password, isVolunteer
   - **`users_language`** — id, language, user_id (foreign key to users)

4. Sample data is included in `aoun (1).sql` for testing.

---

## Usage

### For Pilgrims (Hajj/Umrah)
1. Register or log in.
2. Browse **Hajj** or **Umrah** guides for ritual instructions.
3. Use **Translate** to convert text between languages.
4. Go to **التواصل مع المتطوعين** (Contact Volunteers) to find volunteers by language.
5. Click **التواصل عبر الواتساب** to open WhatsApp and contact a volunteer.

### For Volunteers
1. Register and select **مــتـطـــوع** (Volunteer).
2. Choose the languages you speak during registration.
3. Pilgrims can find and contact you via the volunteer page.

### Translation
- Enter text in the source language.
- Select source and target languages.
- Click **Translate Text**.
- Use the speaker icon for TTS or the copy icon to copy the result.

---

## Supported Languages (Registration)

- Arabic | العربية  
- Bengali | البنغالية  
- Chinese | الصينية  
- Dutch | الهولندية  
- English | الإنجليزية  
- French | الفرنسية  
- German | الألمانية  
- Hindi | الهندية  
- Italian | الإيطالية  
- Japanese | اليابانية  
- Korean | الكورية  
- Portuguese | البرتغالية  
- Russian | الروسية  
- Spanish | الإسبانية  
- Swahili | السواحيلية  
- Turkish | التركية  

---

## Translation API

The translation feature uses the free **MyMemory API**:
- URL: `https://api.mymemory.translated.net/get`
- No API key required for basic usage
- Rate limits may apply for heavy use

---

## Security Notes

- Passwords are stored in plain text in the current implementation. Consider hashing (e.g., `password_hash()`) for production.
- Use prepared statements or parameterized queries to prevent SQL injection.
- Validate and sanitize all user inputs.

---

## License

All rights reserved © 2023 عون لمساعدة الحجاج والمعتمرين (Aoun - Hajj & Umrah Helper)

---

## Credits

- **Bootstrap** — [getbootstrap.com](https://getbootstrap.com)
- **Font Awesome** — [fontawesome.com](https://fontawesome.com)
- **Choices.js** — [github.com/bbbootstrap](https://github.com/bbbootstrap/libraries)
- **MyMemory** — [mymemory.translated.net](https://mymemory.translated.net)
- **Tajawal Font** — Google Fonts
