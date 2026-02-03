# Projeto: Biolinks - Roadmap & Tasks

## Status Geral: 🟢 Fase 4 (Public Pages) - Concluído
**Próximo Passo**: Fase 5: Frontend & UI.

---

### Phase 0: Repository Standards & Setup ✅
- [x] Initial Project Setup
    - [x] `composer create-project` (Laravel 12)
    - [x] Folder Structure Review
    - [x] `README.md` Standardization
    - [x] Git Repository Initialization (`.gitignore`, Initial Commit)
- [x] Repository Configuration (Priority 1)
    - [x] Add CONTRIBUTING.md, SECURITY.md, LICENSE
    - [x] Add GitHub Actions Workflows (Lint, CI, Release, Docker)
    - [x] Configure Dependabot
    - [x] Install PHPStan & Configure phpstan.neon
    - [x] Add Issue Templates (Bug Report, Feature Request)
    - [x] Add Pull Request Template
    - [x] Add CODEOWNERS
    - [x] Add FUNDING.yml

---

### Phase 1: Authentication System (Aulas 1-7)
- [x] **Aula 1-2**: Login System
    - [x] Create LoginController with routes
    - [x] Implement login view
    - [x] Setup authentication logic
    - [x] Create LogoutController and route
- [x] **Aula 3-4**: Form Validation
    - [x] Add validation rules to login
    - [x] Refactor to Form Requests (LoginRequest)
- [x] **Aula 5**: User Registration
    - [x] Create RegisterController
    - [x] Implement registration view
    - [x] User creation logic
- [x] **Aula 6**: Service Providers
    - [x] Understand and configure Service Providers
- [x] **Aula 7**: Middleware Configuration
    - [x] Setup Guest middleware
    - [x] Setup Auth middleware
    - [x] Protect routes

---

### Phase 2: Link Management (CRUD) (Aulas 8-16)
- [x] **Aula 8**: Create Link Feature
    - [x] Create Link model and migration
    - [x] Create LinkController
    - [x] Implement create link view
- [x] **Aula 9**: Database Relationships
    - [x] Setup User -> Links relationship (hasMany)
    - [x] Setup Link -> User relationship (belongsTo)
- [x] **Aula 10**: Development Tools
    - [x] Install Laravel DebugBar
    - [x] Configure for development environment
- [x] **Aula 11**: List Links
    - [x] Implement index method in LinkController
    - [x] Create links listing view
    - [x] Display user's links (Dashboard)
- [x] **Edit/Update Link** (Additional Feature)
    - [x] Create Edit Controller Method
    - [x] Create Edit View
    - [x] Implement Update Logic
- [x] **Aula 12**: Route Model Binding
    - [x] Implement Route Model Binding for links
    - [x] Simplify controller methods
- [x] **Aula 13**: Delete Link
    - [x] Implement delete functionality
    - [x] Add delete button to UI
- [x] **Aula 14-15**: Link Ordering
    - [x] Add ordering to links listing
    - [x] Refactor ordering logic to model scope
- [x] **Aula 16**: Authorization with Policies
    - [x] Create LinkPolicy
    - [x] Implement authorization rules (view, update, delete)
    - [x] Apply policies to controllers

---

### Phase 3: User Profile (Aulas 17-19)
- [x] **Aula 17**: Update Profile
    - [x] Create profile update form
    - [x] Implement update logic
- [x] **Aula 18**: Custom Validation Rules
    - [x] Create custom validation rule (using Rule::unique)
    - [x] Apply to profile update
- [x] **Aula 19**: File Upload
    - [x] Implement avatar upload
    - [x] Configure storage
    - [x] Display uploaded avatar

---

### Phase 4: Public Pages (Aula 20) ✅
- [x] **Aula 20**: Public Link Page
    - [x] Create public route for user links
    - [x] Implement public view
    - [x] Display links without authentication

---

### Phase 5: Frontend & UI (Aulas 21-26)
- [x] **Aula 21**: TailwindCSS & DaisyUI
    - [x] Install TailwindCSS
    - [x] Install DaisyUI
    - [x] Configure both
- [x] **Aula 22**: Template System
    - [x] Create main layout template
    - [x] Setup navigation (Base)
    - [x] Create core components (Layout, Container)
- [ ] **Aula 23**: Blade Components
    - [ ] Create Blade components
    - [ ] Implement component-based architecture
- [ ] **Aula 24**: Profile UI Components
    - [ ] Create profile-specific components
    - [ ] Refactor profile views
- [ ] **Aula 25**: Dashboard Frontend
    - [ ] Design dashboard layout
    - [ ] Implement dashboard components
- [ ] **Aula 26**: Links Screen Refactor
    - [ ] Refactor links listing UI
    - [ ] Apply final design polish

---

### Phase 6: Testing & Quality Assurance
- [ ] Unit Tests
    - [ ] Test models (User, Link)
    - [ ] Test policies
- [ ] Feature Tests
    - [ ] Test authentication flow
    - [ ] Test link CRUD operations
    - [ ] Test profile update
- [ ] Browser Tests (Pest 4)
    - [ ] Test complete user journey
    - [ ] Test public pages

---

### Phase 7: Deployment & Production
- [ ] Docker Configuration
    - [ ] Create Dockerfile
    - [ ] Create docker-compose.yml
- [ ] Environment Configuration
    - [ ] Setup production .env
    - [ ] Configure database
- [ ] CI/CD Validation
    - [ ] Ensure all workflows pass
    - [ ] Test Docker build
