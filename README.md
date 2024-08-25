# WordPress Theme Development

## Table of Content
- [WordPress Theme Development](#wordpress-theme-development)
  - [Table of Content](#table-of-content)
  - [Installing XAMPP](#installing-xampp)
  - [Running a PHP File Locally](#running-a-php-file-locally)

## Installing XAMPP
1. **Download XAMPP**
   - Open your browser and search for "XAMPP" or visit the [official download page](https://www.apachefriends.org/download.html).
   - Choose the version that matches your operating system (Windows, Linux, or macOS)
2. **Install XAMPP**
   - Once the download is complete, locate the installer file.
   - Right-click on the installer and select `Run as administrator` to begin the installation process.
3. **Set Up XAMPP**
   - Follow the on-screen instructions to complete the installation.
   - After installation, open the `XAMPP Control Panel`
4. **Test XAMPP**
   - In the XAMPP Control Panel, start both the `Apache` and `MySQL` modules.
   - Click the `Admin` button next to Apache. This should open your default browser and navigate to `localhost/dashboard`, indicating that XAMPP is working correctly.

## Running a PHP File Locally
1. **Start XAMPP**
   - Open the `XAMPP Control Panel` and start both the `Apache` and `MySQL` services.
2. **Locate the `htdocs` Folder**
   - Navigate to the `xampp` installation directory on your computer.
   - Inside the `xampp` folder, locate and open the `htdocs` folder. This is where your PHP files should be stored.
3. **Organize your PHP Files**
   - For better organization, create a new folder inside the `htdocs` directory. This folder will hold all your PHP projects.
   - Within the main folder, create a subfolder for each specific project or repository.
4. **Create an `index.php` File**
   - Open your project's subfolder using a code editor like Visual Studio Code (VSCode).
   - In the subfolder, create a new file named `index.php` and write your PHP Code for testing.
5. **Run your PHP File**
   - Open your web browser and type the following into the URL bar: `localhost/<main_folder/<subfolder>`.
   - Replace `<main_folder>` with the name of the folder you created inside `htdocs`, and `<subfolder>` with the name of your specific project folder.

