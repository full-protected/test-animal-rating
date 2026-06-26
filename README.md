# Animal Rating — PHP / Symfony Technical Test

A small web application built with PHP 8.2+ and Symfony 7.4 (LTS) that lets users record their favourite animals and rate them.

---

## Stack

- PHP 8.2+
- Symfony 7.4 (LTS)
- SQLite
- Doctrine ORM
- Twig
- Bootstrap 5.3

---

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/full-protected/test-animal-rating.git
cd test-animal-rating
```

### 2. Install dependencies

```bash
composer install
```

### 3. Set up the database

```bash
php bin/console doctrine:migrations:migrate
```

### 4. Start the development server

```bash
symfony server:start -d
```

The app is now available at [https://localhost:8000](https://localhost:8000)

---

## Features

- Submit your name, favourite animal and a score (0–100)
- Animal names are stored case-insensitively
- Each user can keep up to **3 favourite animals**
    - The last submitted animal is always kept
    - If the limit is reached, the animal with the lowest score is removed (oldest if tie)
- `/admin` page shows a ranked list of animals with vote count and average score
- EN / FR language switcher
- Animal name autocomplete (non-exhaustive list)
- Statistics chart on the admin page

---

## Tests

8 tests, 16 assertions covering:

- **Normalization** — animal names are lowercased and trimmed
- **Triple choice logic** — worst scored animal is removed when limit is reached, oldest removed on tie
- **Page access** — home and admin pages return HTTP 200

```bash
php bin/phpunit
```

---

## Git Workflow

This project was developed using a clean Git workflow with feature branches and pull requests.

Each feature was developed in a dedicated branch, reviewed via a PR, then merged into `main`.

You can view the pull request for the **triple choice feature** (Part 2) here:
👉 [PR #11 — feat: allow users to keep up to 3 favourite animals](https://github.com/full-protected/test-animal-rating/pull/11)

This PR shows the commit history, the rule decision, and the changes made to implement the triple choice logic.

---

## What would be improved in a real project

- **Authentication** — users would need to log in so each identity is unique and verified
- **Admin access control** — the `/admin` page would be restricted to users with the `ROLE_ADMIN` role
- **Production mode** — run with `APP_ENV=prod` and compile assets properly
- **Pagination** — the admin stats table could be paginated for large datasets
- **API** — expose a REST or JSON API for the submission and stats endpoints
- **More tests** — add integration tests and more edge case coverage

---

## Notes

> The app runs in `dev` mode by default to allow easy migration management.
> In a real production environment, switch to `APP_ENV=prod`.
