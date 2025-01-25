# WordPress Plugin Auto-Packaging and Release Template

🚀 **Streamline your WordPress plugin development with this free, open-source template!**  
This repository provides a robust, well-structured template for WordPress plugin development, complete with automated packaging, testing, and release workflows.

---

## Features

- **Automated Releases**: GitHub Actions for versioning, tagging, and packaging.
- **Dockerized Development**: Local WordPress environment with Docker.
- **Testing Framework**: PHPUnit for unit tests and compatibility checks.
- **Security Scanning**: Integrated security checks with CodeQL.
- **Translation Support**: Ready for localization with `.pot` files.
- **Composer Integration**: Manage dependencies and autoloading.

---

## Getting Started

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/ref34t/wordpress-plugin-auto-packaging.git
   cd wordpress-plugin-auto-packaging

   ## GitHub Actions Workflows

This template includes the following GitHub Actions workflows:

- **Continuous Integration (CI)**: Runs tests and checks whenever code is pushed or a pull request is opened.
- **Automated Releases**: Packages the plugin and creates a GitHub release whenever a new tag is pushed.
- **Security Scanning**: Uses CodeQL to analyze the code for vulnerabilities.

To trigger a release, push a new tag:
```bash
git tag v1.0.0
git push origin v1.0.0