<p align="center">
  <a href="https://ske.deno.dev/" title="Sigui Kessé Emmanuel"><img src="https://github.com/siguici/art/blob/HEAD/images/ske.svg" alt="SKE" width="160" height="160"/></a>
</p>
<div align="center">

[![php-icon]][php-link]
[![packagist-version-icon]][packagist-version-link]
[![packagist-download-icon]][packagist-download-link]
[![license-icon]][license-link]
[![actions-icon]][actions-link]
[![pr-icon]][pr-link]
[![twitter-icon]][twitter-link]

</div>

[ske-link]: https://ske.deno.dev "Sigui Kessé Emmanuel"

[php-icon]: https://img.shields.io/badge/PHP-ccc.svg?style=flat&logo=php
[php-link]: https://github.com/siguici/skeleton/search?l=php "PHP code"

[packagist-version-icon]: https://img.shields.io/packagist/v/siguici/skeleton
[packagist-version-link]: https://packagist.org/packages/siguici/skeleton "Skeleton Releases"

[packagist-download-icon]: https://img.shields.io/packagist/dt/siguici/skeleton
[packagist-download-link]: https://packagist.org/packages/siguici/skeleton "Skeleton Downloads"

[actions-icon]: https://github.com/siguici/skeleton/workflows/CI/badge.svg
[actions-link]: https://github.com/siguici/skeleton/actions "Skeleton status"

[pr-icon]: https://img.shields.io/badge/PRs-welcome-brightgreen.svg?color=brightgreen
[pr-link]: [contrib-link] "PRs welcome!"

[twitter-icon]: https://img.shields.io/twitter/follow/siguici.svg?label=@siguici
[twitter-link]: https://twitter.com/intent/follow?screen_name=siguici "Ping Sigui"

[license-icon]: https://img.shields.io/badge/license-MIT-blue.svg
[license-link]: https://github.com/siguici/skeleton/blob/HEAD/LICENSE "Skeleton License"
[conduct-link]: https://github.com/siguici/skeleton/blob/HEAD/CODE_OF_CONDUCT.md
[contrib-link]: https://github.com/siguici/.github/blob/HEAD/CONTRIBUTING.md
[discuss-link]: https://github.com/orgs/siguici/discussions
[docs-link]: https://github.com/siguici/skeleton#readme "Skeleton Documentation"

***

# 📦️ [Sigui][ske-link] Skeleton

Create a new [@siguici][ske-link] project based on this template.

## 🔖 Contents

- [📦️ Sigui Skeleton](#️-sigui-skeleton)
  - [🔖 Contents](#-contents)
  - [📋 Requirements](#-requirements)
  - [🎉 Getting Started](#-getting-started)
    - [⚡️ Installation](#️-installation)
    - [🧑‍💻 Usage](#-usage)
    - [🧪 Testing and debugging](#-testing-and-debugging)
  - [📖 Documentation](#-documentation)
  - [👏 Contribution](#-contribution)
    - [👷 Code of Conduct](#-code-of-conduct)
    - [👥 Contributing Guide](#-contributing-guide)
    - [🔒️ Good First Issues](#️-good-first-issues)
    - [💬 Discussions](#-discussions)
  - [🔐 Security Reports](#-security-reports)
  - [📄 License](#-license)

## 📋 Requirements

> - **Requires [PHP 8.1+](https://php.net/releases/)** (at least 8.1.19 recommended to avoid potential bugs).
> - **Requires [Composer v2+](https://getcomposer.org/)** to manage PHP dependencies.

## 🎉 Getting Started

### ⚡️ Installation

[Use this template](https://github.com/vivephp/skeleton/generate) or create a new [Vive][vive-link] library via the [Composer](https://getcomposer.org/) `create-project` command (recommended):

```bash
composer create-project vivephp/skeleton --prefer-source my-lib
```

### 🧑‍💻 Usage

```php
<?php

use Sigui\Skeleton\Program;

$vendor_dir = __DIR__.'/vendor'; // Replace it by your vendor directory

include_once $vendor_dir.'/autoload.php';

Program::main(); // Print "Hello World!"
```

### 🧪 Testing and debugging

🧹 Keep a modern codebase with **Pint**:

```bash
composer lint
```

⚗️ Run static analysis:

- Using **PHPStan**:

```bash
composer analyse
```

- Using **Psalm**:

```bash
composer inspect
```

✅ Run unit tests using **PEST**

```bash
composer test
```

🐛 Check all code bugs:

```bash
composer debug
```

🚀 Fix the entire code:

```bash
composer fix
```

## 📖 Documentation

The full documentation for the Vive Skeleton can be found on [this address][docs-link].

## 👏 Contribution

The main purpose of this repository is to continue evolving Vive. We want to make contributing to this project as easy and transparent as possible, and we are grateful to the community for contributing bug fixes and improvements. Read below to learn how you can take part in improving Vive.

### [👷 Code of Conduct][conduct-link]

Vive has adopted a Code of Conduct that we expect project participants to adhere to.
Please read the [full text][conduct-link] so that you can understand what actions will and will not be tolerated.

### 👥 [Contributing Guide][contrib-link]

Read our [**Contributing Guide**][contrib-link] to learn about our development process, how to propose bugfixes and improvements, and how to build and test your changes to Vive.

### 🔒️ Good First Issues

We have a list of [good first issues][gfi] that contain bugs which have a relatively limited scope. This is a great place to get started, gain experience, and get familiar with our contribution process.

[gfi]: https://github.com/vivephp/skeleton/labels/good%20first%20issue

### 💬 Discussions

Larger discussions and proposals are discussed in [**Vive's GitHub discussions**][discuss-link].

## 🔐 Security Reports

If you discover a security vulnerability within [Vive][vive-link], please email [SIGUI Kessé Emmanuel](https://sigui.ci) at [contact@sigui.ci](mailto:contact@sigui.ci). All security vulnerabilities will be promptly addressed.

## 📄 License

The Vive Skeleton is open-sourced software licensed under the  [MIT License](https://opensource.org/licenses/MIT) - see the [LICENSE][license-link] file for details.

***

<div align="center"><sub>Made with ❤︎ by <a href="https://twitter.com/intent/follow?screen_name=siguici" style="content:url(https://img.shields.io/twitter/follow/siguici.svg?label=@siguici);margin-bottom:-6px">@siguici</a>.</sub></div>
