# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.6.0] - 2026-02-03

## 🎨 Milestone: Frontend & UI Polish (Phase 5)

This release introduces a complete UI overhaul using TailwindCSS v4 and DaisyUI, replacing the raw HTML/CSS implementation with a modern, responsive, and component-based design system.

### ✨ What's Included
- ✅ **Modern Tech Stack**: Integration of TailwindCSS v4 (via Vite) and DaisyUI 5.
- ✅ **Component Architecture**: Reusable Blade components for `Wrapper`, `Card`, `Button`, `Input`, `Form`, and `Icons`.
- ✅ **Dashboard Polishing**: Redesigned dashboard with responsive grid, better spacing, and interactive elements.
- ✅ **Profile UI**: Enhanced profile management screen with proper layout and feedback.
- ✅ **Link Management UI**: Improved lists with iconography and clean actions (Edit, Move Up/Down, Delete).
- ✅ **Routing Improvements**: Dashboard is now the home route (`/`) for authenticated users.

### Added
- `tailwincss` and `daisyui` npm packages.
- Blade Components: `x-layout.app`, `x-container`, `x-card`, `x-button`, `x-input`, `x-textarea`, `x-file-input`, `x-img`.
- Icon Components: `x-icons.arrow-up`, `x-icons.arrow-down`, `x-icons.trash`.
- Recursive `resources/css/app.css` configuration for Tailwind v4.

### Changed
- Refactored all views (`auth`, `dashboard`, `profile`, `link-create/-edit`) to use new components.
- Updated `dashboard.blade.php` to use `:href` binding and absolute positioning for actions.
- Moved `dashboard` route to `/` (home) for better UX.

### Fixed
- Resolved Blade syntax errors caused by incorrect attribute interpolation.
- Fixed `tailwind.config.js` conflicts by removing the file in favor of CSS-first config.
- Corrected redirect expectations in Feature Tests.

## [0.5.0] - 2026-02-02

## 🌐 Milestone: Public Pages (Phase 4)

This release implements public-facing bio-links pages, allowing visitors to view user profiles and their links without authentication.

### ✨ What's Included
- ✅ **Public Profiles**: Dynamic routes using `/{user:handler}`.
- ✅ **Route Model Binding**: Automatic user resolution by handler.
- ✅ **Public View**: Dedicated Blade view for displaying bio links.
- ✅ **SEO-Friendly URLs**: Clean, handler-based profile URLs.

### Added
- `BiolinkController` for handling public profile requests.
- Public bio-links route in `web.php`.
- `resources/views/bio-links.blade.php` for the public profile theme.

---

### 🚀 Next Steps (Phase 5: Frontend & UI)
- [ ] TailwindCSS & DaisyUI Installation & Config
- [ ] Base Layout & Navigation System
- [ ] Dashboard & Profile UI Components
- [ ] Responsive Design Polish

## [0.5.0] - 2026-02-02

## 🌐 Milestone: Public Pages (Phase 4)

This release implements public-facing bio-links pages, allowing visitors to view user profiles and their links without authentication.

### ✨ What's Included
- ✅ **Public Profiles**: Dynamic routes using `/{user:handler}`.
- ✅ **Route Model Binding**: Automatic user resolution by handler.
- ✅ **Public View**: Dedicated Blade view for displaying bio links.
- ✅ **SEO-Friendly URLs**: Clean, handler-based profile URLs.

### Added
- `BiolinkController` for handling public profile requests.
- Public bio-links route in `web.php`.
- `resources/views/bio-links.blade.php` for the public profile theme.

---

## [0.4.0] - 2026-02-02

## 👤 Milestone: User Profile (Phase 3)

This release adds comprehensive user profile management, including avatar uploads and custom validation.

### ✨ What's Included
- ✅ **Profile Management**: Update name, bio, and unique handler.
- ✅ **Avatar Upload**: Support for profile picture uploads with local storage.
- ✅ **Custom Validation**: Robust validation for unique handlers and image constraints.
- ✅ **Storage Configuration**: Symbolic link setup for public asset access.

### Added
- Image upload logic with storage handling.
- Profile update form and controller methods.
- Custom validation rules for profile fields.

---

## [0.3.0] - 2026-02-01

## 🔗 Milestone: Link Management (Phase 2)

This release introduces the core functionality of the platform: the ability for users to manage their bio links.

## ✨ What's Included

### 🏗️ Core Features
- ✅ **Link CRUD**: Complete system to Create, Read, Update, and Delete links.
- ✅ **Link Ordering**: Ability to reorder links (Up/Down) for personalized prioritization.
- ✅ **Dashboard Integration**: User dashboard now displays managed links.

### 🛡️ Authorization & Security
- ✅ **Link Policy**: Robust authorization logic (only owners can edit/delete their links).
- ✅ **Validation**: Strict URL and name validation rules.

### 💾 Database
- ✅ **Links Table**: Migration and Schema with Foreign Keys to Users.
- ✅ **Factories & Seeders**: Test data generation for Links.


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

[Unreleased]: https://github.com/rafaumeu/biolinks/compare/v0.5.0...HEAD
[0.5.0]: https://github.com/rafaumeu/biolinks/compare/v0.4.0...v0.5.0
[0.4.0]: https://github.com/rafaumeu/biolinks/compare/v0.3.0...v0.4.0
[0.3.0]: https://github.com/rafaumeu/biolinks/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/rafaumeu/biolinks/compare/v0.1.0...v0.2.0
[0.1.0]: https://github.com/rafaumeu/biolinks/releases/tag/v0.1.0
