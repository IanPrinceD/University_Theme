# WordPress Theme Development

## Table of Content
- [WordPress Theme Development](#wordpress-theme-development)
  - [Table of Content](#table-of-content)
    - [Installing XAMPP](#installing-xampp)
    - [Running a PHP File Locally](#running-a-php-file-locally)
    - [How to Install and Run WordPress Locally with XAMPP](#how-to-install-and-run-wordpress-locally-with-xampp)
    - [How to Create and Set Up a Custom WordPress Theme: A Step-by-Step Guide](#how-to-create-and-set-up-a-custom-wordpress-theme-a-step-by-step-guide)
    - [WordPress pre-build function](#wordpress-pre-build-function)

### Installing XAMPP
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

### Running a PHP File Locally
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

### How to Install and Run WordPress Locally with XAMPP
1. **Download WordPress**
   - Open your browser and search for "WordPress Download" or visit the [official download page](https://wordpress.org/download/).
   - Download the latest version of WordPress.
2. **Extract WordPress**
   - After downloading, extract the WordPress ZIP file.
   - Move the extracted `WordPress` folder to the `htdocs` directory inside your `xampp` folder. For better organization, you can create a dedicated folder for your projects inside `htdocs` and place the WordPress folder there.
3. **Start XAMPP Services**
   - Open the `XAMPP Control Panel`.
   - Start the `Apache` and `MySQL` services.
4. **Set Up the Database**
   - In the XAMPP Control Panel, click the `Admin` button next to MySQL. This will open the `phpMyAdmin` dashboard in your default browser.
   - In phpMyAdmin, create a new database by clicking the `New` button on the left sidebar.
   - Name the database (use lowercase letters), and remember this name for later.
5. **Run WordPress Installation**
   - Open a new tab in your browser and type `localhost/<main_folder>/<subfolder>` in the URL bar.
   - Replace `<main_folder>` with the name of the folder you created inside `htdocs` and `<subfolder>` with the name of your WordPress folder.
   - Follow the on-screen instructions to install WordPress. When prompted, enter the database name you created earlier. Each WordPress site should have its own unique database.
6. **Log in to WordPress**
   - Once WordPress is installed, you can log in to the admin dashboard by appending `/wp-admin` to your local WordPress URL (e.g., `localhost/<main_folder>/<subfolder>/wp-admin`).
   - Use the credentials you set during the installation to log in and start building your site.

### How to Create and Set Up a Custom WordPress Theme: A Step-by-Step Guide
**Step 1: Access the WordPress Files**

1. Navigate to the `wp-content` folder:
   - Open the `htdocs` directory in your XAMPP installation (typically found at `C:\xampp\htdocs` on Windows).
   - Locate the folder where you installed WordPress within `htdocs`.
   - Open this folder, and then go to the `wp-content` directory, which is where all themes, plugins, and uploads are stored.

**Step 2: Create a New Theme Folder**

1. Create a Folder for Your Theme:
   - Inside the `wp-content` folder, find the `themes` directory.
   - Create a new folder within the `themes` directory. This folder will contain all the files for your new theme. Name it something relevant to your theme, such as `mytheme`.

**Step 3: Add the Basic Theme Files**

1. Create `index.php` and `style.css` Files:
   - Inside your theme's folder (e.g., `mytheme`), create two files:
     - `index.php`: This is the main file where you'll start coding the structure of your theme.
     - `style.css`: This file will contain the styles for your theme and important information about the theme itself.

**Step 4: Add a Preview Image(Optional)**

1. Include a Theme Preview Image:
   - If you want to show a preview of your theme in the WordPress dashboard, you can add an image to your theme's folder.
   - Name the image `screenshot.png`. Make sure it's named exactly as `screenshot.png`, because WordPress will look for this file to display the preview.
   - The recommended size for the image is 1200px wide by 900px tall.

**Step 5: Add Theme Information**

1. Edit `style.css` to Include Theme Details:
   - Open the `style.css` file you created earlier.
   - At the very top of the file, add a comment block with the following information:
      ```
      /*
      Theme Name: My Theme
      Author: Your Name
      Version: 1.0
      */
      ```
   - Replace `My Theme`, `Your Name`, and `1.0` with the appropriate details for your theme. You can add more information like `Description`, `Tags`, and `License` if needed.

**Step 6: Activate the Theme**

1. Activate Your Theme in WordPress:
   - Log in to your WordPress dashboard.
   - Go to `Appreance` > `Themes`.
   - Your new theme should appear in the list. Click on `Activate` to make it the active theme for your site.

**Step 7: Customize and Develop Your Theme**

- You can now start building your theme by adding more templates and functionality. This might include creating files like `header.php`, `footer.php`, and `functions.php`, as well as customizing the `index.php` and `style.css` files.

### WordPress pre-build function

<details>
<summary><strong>bloginfo('name')</strong></summary>

**Purpose:**
>`bloginfo('name')` retrieves and displays the name of your WordPress site, which is set in the General Settings of the WordPress admin panel. This is typically used to display the site title in the header or other prominent locations.

**Usage:**
>Commonly used in the `header.php` template or anywhere you want to show the site name.

**Example in Practice:**
```
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- Display post content -->
    <?php endwhile; ?>
<?php endif; ?>
```
</details>

<br>

<details>
<summary><strong>bloginfo('description')</strong></summary>

**Purpose:**
>`bloginfo('description')` retrieves and displays the tagline or site description, also set in the General Settings of the WordPress admin panel. This is usually a short description or slogan for the site.

**Usage:**
>Typically used alongside the site name in the header to display the site’s tagline.

**Example in Practice:**
```
<p><?php bloginfo('description'); ?></p>
```
</details>

<br>

<details>
<summary><strong>have_posts()</strong></summary>

**Purpose:**
>This function checks if there are any posts available to display. It returns `true` if there are posts, and `false` if there are no more posts to process.

**Usage:**
>It's typically used in the condition of a `while` loop to iterate over posts.

**Example in Practice:**
```
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- Display post content -->
    <?php endwhile; ?>
<?php endif; ?>
```
</details>

<br>

<details>
<summary><strong>the_posts()</strong></summary>

**Purpose:**
>This function sets up the post data for the current post in the Loop. It prepares global variables like `$post`, so template tags like `the_title()` and `the_content()` can output the correct information for the current post.

**Usage:**
>It’s usually called right after `have_posts()` in the loop.

**Example in Practice:**
```
<?php while ( have_posts() ) : the_post(); ?>
    <!-- Display post content -->
<?php endwhile; ?>
```
</details>

<br>

<details>
<summary><strong>the_title()</strong></summary>

**Purpose:**
>This function displays the title of the current post within the loop.

**Usage:**
>It’s used within the loop to output the post's title.

**Example in Practice:**
```
<h2><?php the_title(); ?></h2>
```
</details>

<br>

<details>
<summary><strong>the_content()</strong></summary>

**Purpose:**
>This function displays the content of the current post.

**Usage:**
>It’s used within the loop to output the post's content.

**Example in Practice:**
```
<div><?php the_content(); ?></div>
```
</details>

<br>

<details>
<summary><strong>the_permalink()</strong></summary>

**Purpose:**
>`the_permalink()` generates and displays the permanent URL (permalink) for the current post or page within the WordPress Loop. It ensures that each piece of content has a unique and consistent URL that users can click to view the full content.

**Usage:**
>Typically used within a loop, `the_permalink()` is often wrapped in an anchor (`<a>`) tag to create a clickable link that directs visitors to the specific post or page.

**Example in Practice:**
```
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
```
</details>

<br>

<details>
<summary><strong>get_header()</strong></summary>

**Purpose:**
>The `get_header()` function loads the header template file (header.php) for your WordPress theme. It's used to include the site's header, which typically contains the logo, navigation menu, and other elements that appear at the top of every page.

**Usage:**
>This functions are typically called within theme files (e.g., `index.php`, `single.php`, `page.php`) to ensure that the header and footer sections are consistently included on every page of the website.

**Example in Practice:**
```
<?php get_header(); ?>
<!-- Page Content -->
<?php get_footer(); ?>
```
</details>

<br>

<details>
<summary><strong>get_footer()</strong></summary>

**Purpose:**
>The `get_footer()` function loads the footer template file (footer.php) for your WordPress theme. It's used to include the site's footer, which usually contains the copyright notice, social media links, and other elements that appear at the bottom of every page.

**Usage:**
>This functions are typically called within theme files (e.g., `index.php`, `single.php`, `page.php`) to ensure that the header and footer sections are consistently included on every page of the website.

**Example in Practice:**
```
<?php get_header(); ?>
<!-- Page Content -->
<?php get_footer(); ?>
```
</details>

<br>

<details>
<summary><strong>wp_head()</strong></summary>

**Purpose:**
>`wp_head()` is a crucial WordPress function that hooks into the `wp_head` action and outputs content in the `<head>` section of your HTML document. This function is typically used to include metadata, links to stylesheets, scripts, and other elements necessary for your site.

**Usage:**
>Called within the `header.php` template, usually just before the closing `</head>` tag, to ensure that plugins and themes can properly insert required elements into the `<head>`.

**Example in Practice:**
```
<head>
    <?php wp_head(); ?>
</head>
```
</details>

<br>

<details>
<summary><strong>wp_footer()</strong></summary>

**Purpose:**
>`wp_footer()` is similar to `wp_head()`, but it hooks into the `wp_footer` action and outputs content just before the closing `</body>` tag. It is commonly used to include JavaScript files, tracking codes, or other scripts that should be loaded at the end of the page for performance reasons.

**Usage:**
>Called within the `footer.php` template, just before the closing `</body>` tag.

**Example in Practice:**
```
<?php wp_footer(); ?>
</body>
```
</details>

<br>

<details>
<summary><strong>add_action('a', 'b')</strong></summary>

**Purpose:**
>`add_action('a', 'b')` registers a callback function `b` to be executed at a specific action hook `a`. This allows you to insert custom code at various points during the execution of WordPress.

**Usage:**
>Commonly used in `functions.php` or plugins to add custom functionality at predefined points in the WordPress lifecycle.

**Example in Practice:**
```
function my_custom_function() {
    echo 'Hello, World!';
}
add_action('wp_footer', 'my_custom_function');
```
</details>

<br>

<details>
<summary><strong>get_stylesheet_uri()</strong></summary>

**Purpose:**
>`get_stylesheet_uri()` returns the URL of the current theme's `style.css` file. This is useful for linking to the main stylesheet of the theme.

**Usage:**
>Commonly used in the `header.php` file to link the theme's stylesheet.

**Example in Practice:**
```
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
```
</details>

<br>

<details>
<summary><strong>wp_enqueue_style()</strong></summary>

**Purpose:**
>`wp_enqueue_style()` safely registers and enqueues stylesheets in WordPress. It ensures that styles are loaded in the correct order and prevents conflicts with other stylesheets or plugins.

**Usage:**
>Typically used in the functions.php file to load stylesheets for the theme or plugins.

**Example in Practice:**
```
function my_theme_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_styles');
```
</details>