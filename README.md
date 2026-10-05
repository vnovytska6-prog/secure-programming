# Secure Programming and Scripting

This repository contains selected coursework from my Computer Science degree at SETU Waterford. I created small examples to understand how security vulnerabilities occur and how changes to the code can address them.

## C programming

I compared vulnerable and improved versions of programs covering:

- Stack buffer overflow caused by copying input into a buffer without checking its size
- Format string vulnerability caused by passing user input directly to `printf()`

The examples helped me practise checking input length and treating user input as data.
<img width="746" height="442" alt="Screenshot 2026-10-05 131704" src="https://github.com/user-attachments/assets/28af7962-6203-4df9-957a-3dd2bbfa407c" />


## Web application security

Using PHP and MariaDB, I explored:

- Cross-site scripting (XSS) caused by displaying user input without output encoding
- SQL injection in a login query built from user input
- Using `htmlspecialchars()` to display input as text
- Using a prepared statement to keep input separate from the SQL query

<img width="711" height="557" alt="Screenshot 2026-10-05 131204" src="https://github.com/user-attachments/assets/521f9111-764f-45b8-8d1d-1ac41ec95344" />

## About these examples

The vulnerable files are intentionally insecure and were tested only in a local coursework environment. The improved files demonstrate fixes for the specific issues studied; they are not complete production applications.
