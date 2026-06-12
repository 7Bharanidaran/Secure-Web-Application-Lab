
# Secure-Web-Application-Lab

A cybersecurity-focused secure web application developed using PHP and MySQL, demonstrating defense-in-depth principles and protection against common web application attacks based on OWASP best practices.

---

## Overview

Secure-Web-Application-Lab is a practical web security project designed to showcase secure authentication mechanisms, input validation techniques, session hardening, and protection against common web vulnerabilities.

The project demonstrates how multiple layers of security can be implemented to build a resilient web application while following secure coding practices.

---

## Objectives

* Develop a secure authentication system.
* Implement defense-in-depth principles.
* Mitigate common web application attacks.
* Demonstrate secure coding practices.
* Perform security testing using industry-standard tools.
* Document security mechanisms for learning and portfolio purposes.

---

## Features

* User Registration
* User Login and Logout
* Dashboard Access
* Session Management
* Profile Management
* Database Connectivity using MySQL

---

# Security Controls Implemented

## Authentication Security

### Password Hashing

* Secure password storage using `password_hash()`
* Password verification using `password_verify()`

### SQL Injection Prevention

* Prepared Statements
* Parameterized Queries
* Secure Database Interaction

### Input Validation

* Username Validation
* Email Validation
* Password Length Enforcement

### Cross-Site Scripting (XSS) Protection

* Output Encoding using `htmlspecialchars()`

### Session Security

* Session Regeneration
* Session Fixation Protection

### Secure Cookies

* HttpOnly Cookies
* SameSite Cookie Attribute

### CSRF Protection

* Random Token Generation
* Token Verification

### Brute Force Protection

* Failed Login Attempt Tracking
* Login Restriction Mechanism

---

# Security Testing

The application can be tested using the following tools:

* Burp Suite
* OWASP ZAP
* SQLMap
* Nikto
* Nmap

---

# Technology Stack

| Component               | Technology            |
| ----------------------- | --------------------- |
| Backend                 | PHP                   |
| Database                | MySQL                 |
| Web Server              | Apache                |
| Development Environment | XAMPP                 |
| Frontend                | HTML, CSS             |
| Security Testing        | Burp Suite, OWASP ZAP |

---

# Project Structure

```text
Secure-Web-Application-Lab
│
├── config/
├── css/
├── docs/
├── images/
├── js/
├── screenshots/
├── uploads/
│
├── index.php
├── register.php
├── login.php
├── dashboard.php
├── logout.php
├── profile.php
└── README.md
```

---

# Implemented Security Features

| Security Mechanism       | Status      |
| ------------------------ | ----------- |
| Password Hashing         | Implemented |
| SQL Injection Prevention | Implemented |
| Input Validation         | Implemented |
| XSS Protection           | Implemented |
| Session Security         | Implemented |
| Secure Cookies           | Implemented |
| CSRF Protection          | Implemented |
| Brute Force Protection   | Implemented |

---


---

# Future Enhancements

* Role-Based Access Control (RBAC)
* Multi-Factor Authentication (MFA)
* Secure File Upload Validation
* HTTP Security Headers
* HTTPS Configuration
* Security Event Logging
* Wazuh Integration
* Fail2Ban Integration
* Continuous Security Testing

---

# Learning Outcomes

This project demonstrates practical knowledge of:

* Secure Authentication
* Secure Session Management
* Input Validation Techniques
* SQL Injection Mitigation
* Cross-Site Scripting Prevention
* CSRF Mitigation
* Cookie Security
* Brute Force Attack Prevention
* Secure Coding Practices
* OWASP Top 10 Awareness

---

