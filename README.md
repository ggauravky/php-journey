<div align="center">

<img src="https://www.php.net/images/logos/new-php-logo.svg" alt="PHP Logo" width="120"/>

# 🐘 PHP Journey — Learning PHP from Scratch

[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![XAMPP](https://img.shields.io/badge/XAMPP-Local%20Server-FB7A24?style=for-the-badge&logo=apache&logoColor=white)](https://www.apachefriends.org/)
[![Lessons](https://img.shields.io/badge/Lessons-9%20Complete-22c55e?style=for-the-badge)](https://github.com/ggauravky/php-journey)
[![Status](https://img.shields.io/badge/Status-In%20Progress-f59e0b?style=for-the-badge)](https://github.com/ggauravky/php-journey)
[![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)](LICENSE)
[![GitHub followers](https://img.shields.io/github/followers/ggauravky?label=Follow&style=for-the-badge&logo=github&color=181717)](https://github.com/ggauravky)

> **A structured, hands-on PHP learning repository** — covering everything from "Hello, World!" to building real dynamic web applications. Each folder is a focused lesson. Learn by doing. 🚀

---

</div>

## 📖 About This Repository

This repository is my personal **PHP learning journal**, where I document my journey of learning PHP — one concept at a time. Every folder represents a new topic with working code examples, making it easy to follow along, revisit concepts, and track progress over time.

Whether you're a beginner picking up PHP for the first time or a developer brushing up your skills, this repo is a great hands-on reference.

---

## 🗂️ Lesson Structure

Each lesson lives in its own numbered folder, keeping things organized and easy to navigate.

```
📦 PHP Learning
 ┣ 📁 001 Print Hello World
 ┃ ┗ 📄 index.php
 ┣ 📁 002 Variables And Comments
 ┃ ┣ 📄 index.php
 ┃ ┗ 📄 moreVariables.php          ← NEW
 ┣ 📁 003 Creating Basic Website about me Using php
 ┃ ┣ 📄 index.php
 ┃ ┗ 🖼️ img.png
 ┣ 📁 004 Data Types
 ┃ ┗ 📄 index.php
 ┣ 📁 005 Strings
 ┃ ┗ 📄 index.php
 ┣ 📁 006 Operators                 ← NEW
 ┃ ┗ 📄 operators.php
 ┣ 📁 007 If-Else                   ← NEW
 ┃ ┗ 📄 index.php
 ┣ 📁 008 Switch Case               ← NEW
 ┃ ┗ 📄 index.php
 ┣ 📁 009 Loops                     ← NEW
 ┃ ┗ 📄 index.php
 ┗ 📄 README.md
```

---

## 🧠 Lessons Covered

| # | 📚 Topic | 📝 What You Will Learn | 🔗 Folder |
|---|---|---|---|
| `001` | **Print Hello World** | Running your very first PHP script. Understanding the `<?php ... ?>` tags and the `echo` statement to output content to the browser. | [📂 View](./001%20Print%20Hello%20World/) |
| `002` | **Variables & Comments** | Declaring variables with `$`, working with data types (strings, integers, booleans, floats), single-line & multi-line comments, variable naming rules, and building a styled UI with DaisyUI + Tailwind. | [📂 View](./002%20Variables%20And%20Comments/) |
| `003` | **Creating a Basic Website Using PHP** | Embedding PHP inside HTML, using PHP variables in templates, integrating Bootstrap 5 via CDN, and using the built-in `date()` function. First real mini-project! | [📂 View](./003%20Creating%20Basic%20Website%20about%20me%20Using%20php/) |
| `004` | **Data Types** | Deep dive into all 7 PHP data types: `string`, `integer`, `float`, `boolean`, `array`, `object`, and `null`. Includes `var_dump()`, class instantiation, and array access. | [📂 View](./004%20Data%20Types/) |
| `005` | **Strings** | Mastering PHP string functions: `strlen()`, `strtoupper()`, `strtolower()`, `strrev()`, `strpos()`, `str_replace()`, `str_repeat()`, `trim()`, `ltrim()`, `rtrim()`, `ucwords()`, `ucfirst()`, and more. | [📂 View](./005%20Strings/) |
| `006` | **Operators** | All 5 categories — Arithmetic (`+`, `-`, `*`, `/`, `%`, `**`), Assignment (`=`, `+=`, `-=`, `*=`, `/=`, `%=`), Comparison (`==`, `!=`, `===`, `!==`, `>`, `<`, `>=`, `<=`), Logical (`&&`, `\|\|`, `!`, `xor`), and Increment/Decrement (`++`, `--`). | [📂 View](./006%20Operators/) |
| `007` | **If-Else** | Conditional branching with `if`, `else`, and `elseif`. Real-world examples: voting eligibility check and grade calculator. | [📂 View](./007%20If-Else/) |
| `008` | **Switch Case** | Multi-branch selection using `switch`, `case`, `break`, and `default`. Examples with integers, strings (days & fruits). | [📂 View](./008%20Switch%20Case/) |
| `009` | **Loops** | Iterating with `for` loops (ascending & descending) and `while` loops. Understanding loop counters, conditions, and increments. | [📂 View](./009%20Loops/) |

---

## 💡 Key Concepts Learned So Far

<details>
<summary><strong>🔤 Basics (Lessons 001–003)</strong></summary>

| Concept | Description |
|---|---|
| `echo` | Output data to the browser |
| Variables (`$`) | Store values — strings, integers, floats, booleans |
| Comments | `//`, `#`, and `/* */` comment styles |
| String Concatenation | Join strings using the `.` operator |
| PHP in HTML | Embed PHP blocks directly inside `.php` HTML templates |
| `date()` function | Display current date dynamically |
| Variable Naming Rules | Must start with letter/underscore, case-sensitive |
| Bootstrap 5 | Rapid UI prototyping with CDN |
| DaisyUI + Tailwind | Component-based CSS framework for modern styling |

</details>

<details>
<summary><strong>📦 Data Types & Strings (Lessons 004–005)</strong></summary>

| Concept | Description |
|---|---|
| **7 Data Types** | `string`, `integer`, `float`, `boolean`, `array`, `object`, `null` |
| `var_dump()` | Inspect variable type and value |
| Classes & Objects | Defining a class, constructor, properties, and instantiation with `new` |
| Arrays | Indexed arrays with `array()` and bracket access |
| `null` | Representing an empty/unset variable |
| `strlen()` | Get the length of a string |
| `strtoupper()` / `strtolower()` | Case conversion |
| `strrev()` | Reverse a string |
| `strpos()` | Find position of a substring |
| `str_replace()` | Search and replace within a string |
| `trim()` / `ltrim()` / `rtrim()` | Remove whitespace from strings |
| `str_repeat()` | Repeat a string N times |
| `ucwords()` / `ucfirst()` / `lcfirst()` | Capitalisation helpers |
| `str_word_count()` | Count words in a string |

</details>

<details>
<summary><strong>⚙️ Operators (Lesson 006)</strong></summary>

| Category | Operators |
|---|---|
| Arithmetic | `+`, `-`, `*`, `/`, `%`, `**` |
| Assignment | `=`, `+=`, `-=`, `*=`, `/=`, `%=` |
| Comparison | `==`, `!=`, `===`, `!==`, `>`, `<`, `>=`, `<=` |
| Logical | `&&`, `\|\|`, `!`, `xor` |
| Increment / Decrement | `$x++`, `++$x`, `$x--`, `--$x` |

</details>

<details>
<summary><strong>🔀 Control Flow (Lessons 007–009)</strong></summary>

| Concept | Description |
|---|---|
| `if / else / elseif` | Conditional branching based on expressions |
| `switch / case / default` | Multi-way branching with `break` for flow control |
| `for` loop | Counter-controlled iteration (ascending & descending) |
| `while` loop | Condition-controlled iteration |
| Post-increment vs Pre-increment | Understanding `$x++` vs `++$x` evaluation order |

</details>

---

## 🛠️ Tech Stack & Tools

<div align="center">

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap_5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![DaisyUI](https://img.shields.io/badge/DaisyUI-5A0EF8?style=for-the-badge&logo=daisyui&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=apache&logoColor=white)
![VS Code](https://img.shields.io/badge/VS_Code-007ACC?style=for-the-badge&logo=visualstudiocode&logoColor=white)

</div>

---

## 🚀 How to Run Locally

> **Prerequisites:** [XAMPP](https://www.apachefriends.org/) installed on your machine.

**Step 1 — Clone the repository**
```bash
git clone https://github.com/ggauravky/php-journey.git
```

**Step 2 — Move to XAMPP htdocs directory**
```bash
# On Windows
move php-journey "C:\xampp\htdocs\PHP Learning"
```

**Step 3 — Start Apache in XAMPP Control Panel**

Open XAMPP Control Panel → Click **Start** next to Apache.

**Step 4 — Open any lesson in your Browser**
```
http://localhost/PHP%20Learning/001%20Print%20Hello%20World/
http://localhost/PHP%20Learning/002%20Variables%20And%20Comments/
http://localhost/PHP%20Learning/003%20Creating%20Basic%20Website%20about%20me%20Using%20php/
http://localhost/PHP%20Learning/004%20Data%20Types/
http://localhost/PHP%20Learning/005%20Strings/
http://localhost/PHP%20Learning/006%20Operators/operators.php
http://localhost/PHP%20Learning/007%20If-Else/
http://localhost/PHP%20Learning/008%20Switch%20Case/
http://localhost/PHP%20Learning/009%20Loops/
```

---

## 📈 Progress Roadmap

```
✅ Hello World & Basic Output
✅ Variables, Data Types & Comments
✅ Variable Naming Rules (with DaisyUI + Tailwind)
✅ PHP + HTML Integration (Mini Project)
✅ All 7 Data Types (string, int, float, bool, array, object, null)
✅ String Functions (strlen, strtoupper, strrev, str_replace, trim, ...)
✅ Operators (Arithmetic, Assignment, Comparison, Logical, Inc/Dec)
✅ Conditional Statements (if / else / elseif)
✅ Switch Case (switch / case / break / default)
✅ Loops (for & while)
⬜ Do-While & Foreach Loops
⬜ Functions
⬜ Arrays & Array Functions
⬜ Form Handling (GET & POST)
⬜ Superglobals ($_GET, $_POST, $_SESSION, etc.)
⬜ File Handling
⬜ MySQL & PDO (Database)
⬜ Sessions & Cookies
⬜ Object-Oriented PHP (OOP)
⬜ Error Handling & Exceptions
⬜ REST API with PHP
⬜ Full-Stack Project 🎯
```

---

## 🤝 Contributing

This is a personal learning repo, but feel free to:

- ⭐ **Star** the repo if you find it helpful
- 🐛 **Open an Issue** if you spot a bug or have a suggestion
- 🍴 **Fork** it and start your own PHP journey!

---

## 👨‍💻 About the Author

<div align="center">

<img src="https://github.com/ggauravky.png" width="120" style="border-radius: 50%;" alt="Gaurav Kumar Yadav"/>

### **Gaurav Kumar Yadav**
*Web Developer · PHP Learner · Open Source Enthusiast*

> *"The best way to learn is to build. Every line of code is a step forward."*

<br/>

[![GitHub](https://img.shields.io/badge/GitHub-ggauravky-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ggauravky)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-gauravky-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/gauravky/)
[![Portfolio](https://img.shields.io/badge/Portfolio-ggauravky.vercel.app-000000?style=for-the-badge&logo=vercel&logoColor=white)](https://ggauravky.vercel.app/)
[![Email](https://img.shields.io/badge/Email-kumar.gaurav.yadav2007%40gmail.com-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:kumar.gaurav.yadav2007@gmail.com)

</div>

---

<div align="center">

### ⭐ If this repo helped you, please give it a star!

*Made with ❤️ and lots of ☕ — Happy Coding!*

![Visitor Count](https://komarev.com/ghpvc/?username=ggauravky&label=Repo+Views&color=777BB4&style=flat-square)

</div>
