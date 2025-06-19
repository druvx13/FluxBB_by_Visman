# FluxBB by Visman

FluxBB by Visman is a fast, light, and user-friendly open-source forum software. This version builds upon the core strengths of FluxBB, offering a streamlined experience for both users and administrators, with a focus on performance and essential features. It is a customized version maintained by Visman.

## Features

FluxBB by Visman comes packed with a wide range of features to power your online community, including:

*   **User Management:** Robust user registration, profiles, user groups, and permission system.
*   **Forum Organization:** Create categories, forums, and sub-forums to structure discussions.
*   **Posting & Discussion:** Rich text editor for posts, topic creation, replies, and moderation tools.
*   **Private Messaging (PMS_New):** Allows users to send and receive private messages.
*   **Admin Panel:** Comprehensive administration console for managing users, forums, settings, and more.
*   **Plugin System:** Extend core functionality with addons and plugins.
*   **Theming/Styles:** Customize the appearance of the forum with different styles.
*   **Search Functionality:** Powerful search for finding topics and posts.
*   **Smilies & Avatars:** Support for emoticons and user avatars.
*   **Polls:** Engage users with polls within topics.
*   **Multi-language Support:** Interface available in multiple languages.
*   **Security:** Features like input validation, CSRF protection, and optional captcha.
*   **RSS Feeds:** For syndicating forum content.
*   **Caching:** To improve performance.

## Technology Stack

*   **Backend:** PHP (Version 7.2.0 or higher recommended)
*   **Databases:**
    *   MySQL (Version 5.5.3 or higher)
    *   PostgreSQL (Version 7.0.0 or higher)
    *   SQLite 3
*   **Frontend:** HTML, CSS, JavaScript (utilizes jQuery 1.12.4)

## Prerequisites/Server Requirements

Before installing FluxBB by Visman, please ensure your server meets the following requirements:

*   **Web Server:** Apache, Nginx, or any other PHP-compatible web server.
*   **PHP:** Version 7.2.0 or higher.
    *   **Required PHP Extensions:**
        *   `mbstring` (for UTF-8 support)
        *   One of the following database drivers, depending on your chosen database:
            *   `mysqli` (for MySQL)
            *   `pgsql` (for PostgreSQL)
            *   `sqlite3` (for SQLite)
    *   **Recommended PHP Extensions:**
        *   `zlib` (for Gzip compression of output, improving performance)
        *   `gd` (for image manipulation, if avatar features requiring it are used extensively)
*   **Database:**
    *   MySQL: Version 5.5.3 or higher.
    *   PostgreSQL: Version 7.0.0 or higher.
    *   SQLite: Version 3.
*   **Writable Directories:** The following directories need to be writable by the web server:
    *   `cache/`
    *   `img/avatars/`

## Step-by-Step Installation Guide

1.  **Download/Clone the Software:**
    *   **Option 1 (Download Zip):** Download the latest release from the [FluxBB by Visman GitHub Releases](https://github.com/MioVisman/FluxBB_by_Visman/releases) page.
    *   **Option 2 (Git Clone):** Clone the repository using Git:
        ```bash
        git clone https://github.com/MioVisman/FluxBB_by_Visman.git
        ```

2.  **Upload Files:**
    *   If you downloaded a ZIP file, extract it.
    *   Upload the entire contents of the `FluxBB_by_Visman` directory (or the extracted folder) to your web server. This is typically into a directory like `public_html`, `www`, `htdocs`, or a subdirectory if you want to run the forum from a specific path (e.g., `yourdomain.com/forum/`).

3.  **Set Permissions:**
    *   Ensure the following directories are writable by the web server. You might need to use a command like `chmod -R 777 cache img/avatars` or `chmod -R 775 cache img/avatars` and ensure the web server user owns the files, depending on your server setup. Consult your hosting provider's documentation if unsure.
        *   `cache/`
        *   `img/avatars/`
    *   **Important:** After installation, for better security, you might consider changing permissions to `755` for directories and `644` for files, ensuring `cache/` and `img/avatars/` remain writable by the PHP process.

4.  **Create a Database:**
    *   Using your database management tool (e.g., phpMyAdmin, cPanel, command-line), create a new database for FluxBB.
    *   Create a database user and grant this user full privileges to the newly created database. Note down the database name, username, and password, as you'll need them during the installation script.

5.  **Run the Installer:**
    *   Open your web browser and navigate to `install.php` in the directory where you uploaded FluxBB. For example:
        *   `http://yourdomain.com/install.php`
        *   `http://yourdomain.com/forum/install.php` (if installed in a subdirectory)
    *   The FluxBB installation screen will appear.

6.  **Follow On-Screen Instructions:**
    *   **Language Selection:** Choose your desired language for the installation process.
    *   **Database Setup:**
        *   **Database Type:** Select your database system (MySQLi, PostgreSQL, or SQLite3).
        *   **Database Server Hostname:** Often `localhost`, but check with your hosting provider.
        *   **Database Name:** The name of the database you created in step 4.
        *   **Database Username:** The username you created in step 4.
        *   **Database Password:** The password for the database user.
        *   **Table Prefix:** A prefix for FluxBB's tables (e.g., `fluxbb_`). This is useful if you're sharing the database with other applications.
    *   **Administration Setup:**
        *   **Administrator Username:** Choose a username for the main admin account.
        *   **Password & Confirm Password:** Set a strong password for the admin account.
        *   **Administrator Email:** Your email address.
    *   **Board Setup:**
        *   **Board Title:** The name of your forum (e.g., "My Community Forum").
        *   **Board Description:** A short description of your forum.
        *   **Base URL:** The full URL to your FluxBB installation (e.g., `http://yourdomain.com/forum`). The installer usually auto-detects this.
        *   **Default Language:** The default language for the forum.
        *   **Default Style:** The default theme/style for the forum.
    *   Click "Start Install". The installer will create the necessary tables and configure your board.

7.  **Post-Installation:**
    *   **IMPORTANT:** For security reasons, delete or rename the `install.php` file from your server immediately after the installation is complete.
    *   Your forum is now installed! You can access it by going to the Base URL you configured.
    *   The installer should have created an `include/config.php` file with your board's core configuration. Normally, you don't need to edit this manually, but it's good to know it's there.

## Configuration

Most of FluxBB's settings can be configured through the **Admin Panel** after installation. This includes board settings, user groups, forum management, appearance, and more.

The core database connection details and some fundamental settings are stored in the `include/config.php` file. This file is automatically generated during the installation process. While you typically won't need to edit this file manually, it contains:

*   Database type (`$db_type`)
*   Database host (`$db_host`)
*   Database name (`$db_name`)
*   Database username (`$db_username`)
*   Database password (`$db_password`)
*   Table prefix (`$db_prefix`)
*   Cookie settings (`$cookie_name`, `$cookie_seed`, etc.)

**Advanced Configuration:** Some specific behaviors or plugin settings might require defining constants or variables directly in `include/config.php` or other files, as per their respective documentation. Always back up `include/config.php` before making manual changes.

## Directory Structure Overview

Here's a brief overview of the main directories within a FluxBB installation:

*   `addons/`: Contains additional modules or addons that can extend FluxBB's functionality.
*   `admin_*.php` (root files): PHP scripts that handle various aspects of the administration panel.
*   `cache/`: Stores cached data to improve forum performance. (Must be writable)
*   `img/`: Contains all image assets for the forum, including:
    *   `avatars/`: User-uploaded avatars. (Must be writable)
    *   `smilies/`: Emoticon images.
    *   `user_agent/`: Browser and OS icons.
*   `include/`: Core FluxBB files, including:
    *   `common.php`: Essential functions and setup.
    *   `dblayer/`: Database abstraction layer (MySQLi, PostgreSQL, SQLite3).
    *   `pms_new/`: Files related to the Private Messaging System.
    *   `template/`: Default HTML templates for the forum structure.
    *   `user/`: User-specific include files.
    *   `config.php`: (Generated during installation) Core configuration settings.
*   `install.php`: The installation script (should be deleted after installation).
*   `js/`: JavaScript files used by FluxBB, including jQuery.
*   `lang/`: Language packs for internationalization. Each language has its own subdirectory (e.g., `English/`, `Russian/`).
*   `plugins/`: Official and third-party plugins.
*   `style/`: Contains different themes (styles) for the forum. Each style has its own subdirectory and CSS files.
*   Other root PHP files (e.g., `index.php`, `viewforum.php`, `viewtopic.php`, `profile.php`, `login.php`): Handle the main forum functionalities.

## Usage

### Accessing the Forum

Once FluxBB is installed, users can access the forum by navigating to the **Base URL** you configured during installation (e.g., `http://yourdomain.com/forum`).

From there, they can:

*   Browse public forums and topics.
*   Register for a new account (if registration is enabled).
*   Log in with their existing credentials.
*   Participate in discussions, create new topics, and reply to posts (based on their permissions).
*   Manage their profile and settings.

### Accessing the Admin Panel

Administrators can manage the forum settings, users, forums, and other aspects through the Admin Panel.

*   To access the Admin Panel, log in with your administrator account.
*   Once logged in, you should see an "Admin" link in the main navigation menu, or you can directly navigate to `admin_index.php` (e.g., `http://yourdomain.com/forum/admin_index.php`).

The Admin Panel provides access to:

*   **Options:** General board settings, features, and preferences.
*   **Users:** Manage users, user groups, ranks, and bans.
*   **Forums:** Create, edit, and delete categories and forums; manage permissions.
*   **Plugins:** Install and manage plugins.
*   **Appearance:** Change styles and manage smilies.
*   **Maintenance:** Tools for board maintenance, such as pruning old posts.
*   And much more.

## Contributing

Contributions to FluxBB by Visman are welcome! Whether it's bug reports, feature suggestions, or code contributions, your help is appreciated.

### Reporting Bugs

*   If you find a bug, please check the [GitHub Issues](https://github.com/MioVisman/FluxBB_by_Visman/issues) to see if it has already been reported.
*   If not, create a new issue, providing as much detail as possible:
    *   Steps to reproduce the bug.
    *   Expected behavior.
    *   Actual behavior.
    *   Your FluxBB version, PHP version, and database type.
    *   Any relevant error messages.

### Suggesting Features

*   If you have an idea for a new feature or an enhancement, please open an issue on GitHub to discuss it.
*   Describe the feature and why you think it would be beneficial.

### Code Contributions

*   If you'd like to contribute code:
    1.  Fork the [repository](https://github.com/MioVisman/FluxBB_by_Visman) on GitHub.
    2.  Create a new branch for your feature or bug fix (e.g., `feature/new-thing` or `fix/login-bug`).
    3.  Make your changes, adhering to the existing code style as much as possible.
    4.  Test your changes thoroughly.
    5.  Commit your changes with clear and descriptive commit messages.
    6.  Push your branch to your fork.
    7.  Create a Pull Request (PR) against the main repository's `master` branch (or the relevant development branch).
    8.  Clearly describe the changes made in your PR.

Please note that this version of FluxBB is maintained by Visman, so contributions will be reviewed based on the project's direction and standards.

## License

FluxBB by Visman is released under the **GNU General Public License version 2 or higher (GPL-2.0-or-later)**.

You can find the full text of the license in the [COPYING](COPYING) file included with this software, or online at [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html).

This means the software is free to download, use, modify, and distribute under the terms of the GPL.
