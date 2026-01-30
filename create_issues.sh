#!/bin/bash

echo "🚀 Creating missing issues..."

# Phase 2 (Milestone 3)
gh issue create -t "[Phase 2] Implement Link Creation & Update Logic" -b "Implement create/edit views and controller logic." -m "v0.3 - Link Management" -l "enhancement"
gh issue create -t "[Phase 2] Link Validation Rules" -b "Implement FormRequests for Store/Update Link." -m "v0.3 - Link Management" -l "enhancement"

# Phase 3 (Milestone 4)
gh issue create -t "[Phase 3] Storage Configuration" -b "Configure local/s3 drivers for file uploads." -m "v0.4 - User Profile" -l "enhancement"

# Phase 4 (Milestone 5)
gh issue create -t "[Phase 4] SEO-friendly URLs" -b "Implement slugs for public link pages." -m "v0.5 - Public Pages" -l "enhancement"

# Phase 5 (Milestone 6)
gh issue create -t "[Phase 5] Responsive Design" -b "Ensure UI is mobile-friendly." -m "v0.6 - Frontend & UI" -l "enhancement"

# Phase 6 (Milestone 7)
gh issue create -t "[Phase 6] 80% Code Coverage" -b "Ensure test coverage meets target." -m "v1.0 - Testing & Quality" -l "enhancement"

# Phase 7 (Milestone 8)
gh issue create -t "[Phase 7] Performance Optimization" -b "Cache, assets minification, query optimization." -m "v1.1 - Production Ready" -l "enhancement"

echo "✅ All issues created!"
echo "📋 Here is the updated list:"
gh issue list --limit 40
