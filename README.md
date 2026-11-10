# HailHack 🚗

**Hire a professional driver on demand.** Riders pick a city and vehicle class, choose an available driver and book by date, time and duration. Drivers manage their own jobs, and an admin console oversees the whole fleet.

> Academic full-stack project built during my **BCA at Kristu Jayanti College, Bangalore (2020–2023)**.
> For my current production work, see **[Acely](https://acely.in)**, a live AI mock-interview platform (Next.js · Spring Boot · PostgreSQL · multi-LLM failover).

---

## Features

### Rider
- Sign up / log in, manage profile, change password
- Filter drivers by **city** and **vehicle class** (LMV / HMV)
- Book a driver for a **date, start time and duration** (past dates blocked client-side)
- See the fare before paying, then record the payment
- Leave **feedback** about a driver and trip

### Driver
- Register with licence class, hourly charge, location and **profile photo upload**
- **My Bookings** dashboard that moves each job through its lifecycle:

  ```
  pending (0)  ──Confirm──▶  confirmed (1)  ──Completed──▶  completed (2)
  ```

### Admin
- Separate admin login
- Manage and remove drivers
- Reports: **bookings**, **customers**, **drivers** and **feedback**

### Under the hood
- **Tiered fare engine:** ₹200/hr for the first 5 hours, ₹300/hr after that
- **AJAX cascading dropdowns:** country → state → city, loaded from the DB without page reloads
- Session-based auth with a separate flow for each role

## Tech stack

| Layer    | Tech                                           |
| -------- | ---------------------------------------------- |
| Frontend | HTML5, CSS3, JavaScript, jQuery, Bootstrap 4   |
| Backend  | PHP (procedural), sessions                     |
| Database | MySQL (mysqli)                                 |
| Server   | Apache (XAMPP / WAMP)                          |

## Data model

```
user ──< booking >── driver_register
  │
  ├──< payment
  └──< feedback

admin_login        country_state_city (location lookup)
```

Full schema: [`database/schema.sql`](database/schema.sql)

## Run locally

1. Install **XAMPP** (Apache + MySQL) and start both services.
2. Clone into the web root:
   ```bash
   cd C:/xampp/htdocs
   git clone https://github.com/vikashkr1101/hailHack.git
   ```
3. Create the database: open phpMyAdmin → *Import* → `database/schema.sql`.
4. Check the credentials in `dbconfig.php` (defaults: `root`, no password, DB `hailHACK`).
5. Visit **http://localhost/hailHack**. The seeded admin login is `admin` / `admin123`.

> **Note:** the original `css/` and `images/` folders and the SQL dump weren't kept when this was uploaded. The schema has been rebuilt from the app's queries, and pages will load without their original styling.

## What I'd do differently today

I built this in my BCA. Looking back as a working engineer, these are the first things I'd change:

| Today                                    | Production fix                                              |
| ---------------------------------------- | ----------------------------------------------------------- |
| SQL built by string concatenation        | Prepared statements (`mysqli_prepare` / PDO) to stop SQL injection |
| Passwords stored in plain text           | `password_hash()` / `password_verify()` (bcrypt)            |
| Credentials hard-coded in `dbconfig.php` | Environment variables                                       |
| No CSRF protection on forms              | Per-session CSRF tokens                                     |
| Status changes via GET links             | POST with role + ownership checks                           |
| Procedural pages                         | MVC structure (e.g. Laravel), or a REST API + SPA            |

## License

[Apache 2.0](LICENSE)
