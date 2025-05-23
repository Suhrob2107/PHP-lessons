# PHP-lessons


# Print information to the screen

- A simple HTML form is used to collect user data: `First Name`, `Last Name`, and `Age`.
- When the user submits the form, the data is sent to a PHP script (`liste.php`) using the **POST** method.
- The PHP script receives the form data using the `$_POST` superglobal and displays it using the `echo` statement.

# Creating table

- 🧠 How It Works

- The user enters the number of **rows (line)** and **columns (col)** in the form.
- After clicking submit, the form sends data to `tablo.php` using the `GET` method.
- The PHP script reads the input using `$_GET` (note: original code uses `$_POST`, which needs to match the form method).
- It uses nested `for` loops to generate an HTML `<table>` with the specified number of rows and columns.
- Each cell displays its position as `row - column` (e.g., `1 - 1`, `1 - 2`, etc.).

# PHP String Explode and Word Count Example

This script demonstrates how to split a sentence into individual words using PHP and display each word separately.

## 🧠 How It Works

- A string is defined: `"Ankara dan Antalya 525 km"`
- The `explode(" ", $string)` function splits the sentence into an array of words using space (`" "`) as the delimiter.
- `count()` is used to calculate how many words are in the sentence.
- A `for` loop is used to print each word along with its index.

## 🔍 Output Example

# PHP Word Highlighter with Search Input

This project demonstrates a simple PHP script that:
- Takes a predefined sentence
- Lets the user enter a word to search
- Highlights the searched word in the sentence (if found)

# PHP Grade Calculator: Pass or Fail

This project demonstrates a simple PHP-based grade calculator that:
- Takes student name, midterm (vize), and final exam grades from an HTML form.
- Calculates the weighted average: 40% midterm + 60% final.
- Displays whether the student has **passed** or **failed** based on the average.
- Highlights the result in **green** (passed) or **red** (failed).

# PHP Dynamic DIV Box Generator with Gradient and Shadow

This project demonstrates how to dynamically generate styled HTML `<div>` elements using PHP.


# PHP Character Highlighter Using `substr()`

This project demonstrates a simple character-level search and highlighting mechanism in PHP using HTML tables and form input.

## 🔍 What It Does

- Takes a single character input from the user via a form
- Searches the character inside a predefined string: `"kara kar ka k"`
- Highlights every matching character in **orange**
- Displays the result as an HTML table, with one character per cell

# PHP Dynamic Character Drawing: Horizontal & Vertical Placement

This project demonstrates how to dynamically generate characters in horizontal and vertical arrangements using PHP and inline CSS positioning.

## 🎯 What It Does

- Two custom PHP functions: `yatay()` (horizontal) and `dikey()` (vertical)
- Each function prints a specified character (`$value`) multiple times using an HTML `<h>` tag with inline CSS
- The output characters are positioned absolutely on the page using `top` and `left` coordinates
- Each character is separated by 10px in the specified direction


# PHP Letter Highlighter from a Keyboard Row

This project demonstrates a simple PHP script that highlights a specific letter from a predefined set of characters, similar to a keyboard row.

## 💡 What It Does

- Displays a row of letters (like the top row of a QWERTY keyboard)
- Accepts user input from a form (`GET` method)
- Highlights the matching character in **green with white text**
- Other letters are displayed normally

# PHP MySQL Grade Submission Form

This script allows users to submit their name, midterm, and final exam grades through a form and saves the data into a MySQL database.


# PHP Student Grade Management System

This project is a simple PHP + MySQL-based application that allows users to:

✅ Add student information (Name, Midterm, Final)  
✅ Display student records in a table  
✅ Calculate and display average grades  
✅ Update and delete records using action links


# PHP Faculty and Department-Based Course Registration Form

This project demonstrates a multi-level dynamic form in PHP that allows users to select a faculty, view its departments, and register a new course to a specific department.

---

## 🎯 Features

- Lists all faculties from the `fakulte` table
- Displays all departments related to the selected faculty (`bolum`)
- Highlights the selected department
- Shows a course registration form with fields for:
  - Course Name (`dersAdi`)
  - T/U Hours (`T`, `U`)
  - ECTS (`AKTS`)
  - Theoretical Credit (`TK`)
  - Semester (`dNo`)
