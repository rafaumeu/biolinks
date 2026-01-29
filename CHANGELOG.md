# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- Initial project setup with Laravel 12
- Complete GitHub workflows (CI, Lint, Docker, Release)
- Professional documentation (README, CONTRIBUTING, SECURITY)
- PHPStan level 5 static analysis
- Auto-labeling for Issues and PRs

### Changed
- N/A

### Deprecated
- N/A

### Removed
- N/A

### Fixed
- N/A

### Security
- N/A

---

## [0.2.0] - 2026-01-29

## 🔐 Milestone: Authentication System (Phase 1)

This release implements a complete, secure, and production-ready authentication system, marking the completion of Phase 1.

## ✨ What's Included

### 👤 User Management
- ✅ **Login System**: Full login flow with "Remember Me" functionality.
- ✅ **Registration**: New user registration with password hashing.
- ✅ **Secure Logout**: Invokable controller ensuring session invalidation.
- ✅ **Dashboard**: Protected dashboard route for authenticated users.

### 🛡️ Security & Validation
- ✅ **Form Requests**: Dedicated `LoginRequest` and `RegisterRequest` for robust validation.
- ✅ **Middleware Protection**:
  - `guest` middleware for Login/Register pages.
  - `auth` middleware for Dashboard and Logout.
- ✅ **Session Management**: Secure session handling and regeneration.
- ✅ **Password Security**: Environment-based password default rules.

### 🏗️ Architecture & Code Quality
- ✅ **Invokable Controllers**: Modern single-action controllers (e.g., `LogoutController`).
- ✅ **Route Organization**: Grouped routes in `web.php` for better maintainability.
- ✅ **Type Safety**: Strictly typed requests and return types.

## 🚀 Next Steps

Phase 2 (v0.3) - Link Management:
- [ ] Create Link Model & Migration
- [ ] Implement Link CRUD Controllers
- [ ] User-Link Relationships
- [ ] Link Ordering System
- [ ] Link Policies & Authorization

---

## [0.1.0] - 2026-01-27

### Added
- Initial repository setup
- Laravel 12 base installation
- GitHub Actions workflows
  - CI pipeline with Pest tests
  - Laravel Pint code formatting
  - PHPStan static analysis
  - Docker image publishing
  - Release drafter automation
- Issue and PR templates
- CODEOWNERS configuration
- Dependabot setup
- Complete project documentation

[Unreleased]: https://github.com/rafaumeu/biolinks/compare/v0.1.0...HEAD
[0.1.0]: https://github.com/rafaumeu/biolinks/releases/tag/v0.1.0
