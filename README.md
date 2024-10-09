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
      ```php
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
<summary><strong>bloginfo()</strong></summary>

**Purpose:**
>The `bloginfo()` function is used to retrieve and display information about your WordPress site, such as its name, description, URL, and more. This function is versatile and is commonly used in theme files to output various pieces of site data.

**Parameters:**
>- `$show` (string) – Specifies what information to retrieve. Common values include:
>     - `'name'` – The site’s name.
>     - `'description'` – The site’s tagline or description.
>     - `'wpurl'` – The URL of the WordPress installation.
>     - `'url'` – The URL of the site’s homepage.
>     - `'stylesheet_url'` – The URL to the current theme’s stylesheet.
>     - `'template_url'` – The URL to the current theme’s template directory.
>     - `'admin_email'` – The administrator’s email address.
>     - `'charset'` – The character encoding for the site (e.g., UTF-8).
>- `$filter` (string) – Optional. Whether to apply filters to the output. Default is `'raw'` (no filters).

**Usage:**
>This function is typically used in theme template files (`header.php`) to output site-related information dynamically.

**Example in Practice:**
```php
// Display the site name
bloginfo('name');

// Display the site description (tagline)
bloginfo('description');

// Display the URL of the WordPress installation
bloginfo('wpurl');

// Display the URL of the site’s homepage
bloginfo('url');

// Display the URL to the current theme’s stylesheet
bloginfo('stylesheet_url');

// Display the admin email
bloginfo('admin_email');

// Display the character encoding of the site
bloginfo('charset');
```
</details>

<br>

<details>
<summary><strong>have_posts()</strong></summary>

**Purpose:**
>This function checks if there are any posts available to display. It returns `true` if there are posts, and `false` if there are no more posts to process.

**Parameters:**
>This function does not accept any parameters.

**Usage:**
>It's typically used in the condition of a `while` loop to iterate over posts.

**Example in Practice:**
```php
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

**Parameters:**
>This function does not accept any parameters.

**Usage:**
>It’s usually called right after `have_posts()` in the loop.

**Example in Practice:**
```php
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

**Parameters:**
>- `$before` (string, optional): Text or HTML to output before the title. Default is an empty string.
>- `$after` (string, optional): Text or HTML to output after the title. Default is an empty string.
>- `$echo` (bool, optional): Whether to echo the title or return it as a string. Default is true (echo the title).

**Usage:**
>It’s used within the loop to output the post's title.

**Example in Practice:**
```php
<h2><?php the_title(); ?></h2>
```
</details>

<br>

<details>
<summary><strong>the_content()</strong></summary>

**Purpose:**
>This function displays the content of the current post.

**Parameters:**
>- `$more_link_text` (string, optional): Text to display for the "Read More" link if the post is split using the `<!--more-->` tag. Default is `null`.
>- `$strip_teaser` (bool, optional): Whether to strip the teaser content before the `<!--more-->` tag. Default is `false`.

**Usage:**
>It’s used within the loop to output the post's content.

**Example in Practice:**
```php
<div><?php the_content(); ?></div>
```
</details>

<br>

<details>
<summary><strong>the_permalink()</strong></summary>

**Purpose:**
>`the_permalink()` generates and displays the permanent URL (permalink) for the current post or page within the WordPress Loop. It ensures that each piece of content has a unique and consistent URL that users can click to view the full content.

**Parameters:**
>This function does not accept any parameters.

**Usage:**
>Typically used within a loop, `the_permalink()` is often wrapped in an anchor (`<a>`) tag to create a clickable link that directs visitors to the specific post or page.

**Example in Practice:**
```php
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
```
</details>

<br>

<details>
<summary><strong>get_header()</strong></summary>

**Purpose:**
>The `get_header()` function loads the header template file (header.php) for your WordPress theme. It's used to include the site's header, which typically contains the logo, navigation menu, and other elements that appear at the top of every page.

**Parameters:**
>- `$name` (string, optional): The name of a specific header file to include. If specified, WordPress will look for a template file named `header-{$name}.php`. If not specified, WordPress defaults to `header.php`.

**Usage:**
>This functions are typically called within theme files (e.g., `index.php`, `single.php`, `page.php`) to ensure that the header and footer sections are consistently included on every page of the website.

**Example in Practice:**
```php
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

**Parameters:**
>- `$name` (string, optional): The name of a specific footer file to include. If specified, WordPress will look for a template file named `footer-{$name}.php`. If not specified, WordPress defaults to `footer.php`.

**Usage:**
>This functions are typically called within theme files (e.g., `index.php`, `single.php`, `page.php`) to ensure that the header and footer sections are consistently included on every page of the website.

**Example in Practice:**
```php
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

**Parameters:**
>This function does not accept any parameters.

**Usage:**
>Called within the `header.php` template, usually just before the closing `</head>` tag, to ensure that plugins and themes can properly insert required elements into the `<head>`.

**Example in Practice:**
```php
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

**Parameters:**
>This function does not accept any parameters.

**Usage:**
>Called within the `footer.php` template, just before the closing `</body>` tag.

**Example in Practice:**
```php
<?php wp_footer(); ?>
</body>
```
</details>

<br>

<details>
<summary><strong>add_action('a', 'b')</strong></summary>

**Purpose:**
>`add_action('a', 'b')` is a core WordPress function that allows you to hook your custom function (`b`) into a specific action (`a`) during the WordPress lifecycle. This function is a key part of WordPress's hook system, which enables you to execute custom code at predefined points (actions) in WordPress's execution process.

**Parameter**
- `'a'` **(Action Hook)** : The name of the action hook where your function should be executed. Action hooks are predefined points in WordPress where you can "hook" your custom functions. Examples include `wp_head`, `wp_footer`, `init`, and many others.
- `'b'` **(Callback Function)** : The name of the custom function you want to execute when the action hook (`'a'`) is reached. This function can perform any task, such as adding content to the page, modifying settings, or interacting with the database.

**Usage:**
>`add_action()` is typically used in the `functions.php` file of your theme or within a plugin to add custom functionality at specific points in the WordPress workflow.

**Example in Practice:**
```php
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

**Parameters:**
>This function does not accept any parameters.

**Usage:**
>Commonly used in the `header.php` file to link the theme's stylesheet.

**Example in Practice:**
```php
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
```
</details>

<br>

<details>
<summary><strong>wp_enqueue_style()</strong></summary>

**Purpose:**
>`wp_enqueue_style()` safely registers and enqueues stylesheets in WordPress. It ensures that styles are loaded in the correct order and prevents conflicts with other stylesheets or plugins.

**Parameters:**
>- `$handle` (string) – A unique name for the stylesheet. This handle is used to identify the stylesheet in the queue.
>- `$src` (string, optional) – The URL to the stylesheet file. If not provided, WordPress will assume the stylesheet is registered and will use the URL specified in `wp_register_style()`.
>- `$deps` (array, optional) – An array of handles for stylesheets that this stylesheet depends on. The specified stylesheets will be loaded before this one.
>- `$ver` (string|bool, optional) – The version number of the stylesheet. This is useful for cache busting. If set to `false`, WordPress will not append a version query string.
>- `$media` (string, optional) – The media for which the stylesheet is intended (e.g., `all`, `screen`, `print`). Defaults to `all`.

**Usage:**
>Typically used in the functions.php file to load stylesheets for the theme or plugins.

**Example in Practice:**
```php
function my_theme_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_styles');
```
</details>

<br>

<details>
<summary><strong>get_theme_file_uri()</strong></summary>

**Purpose:**
>`get_theme_file_uri('<file_path>')` returns the URL to a file within the current theme directory. This is useful for referencing theme assets like images, scripts, or stylesheets. If no `<file_path>` is provided, it returns the URL of the theme's root directory.

**Parameters:**
>- `$file` (string, optional) – The path to the file relative to the theme directory. If not provided, it defaults to the URI of the theme directory.

**Usage:**
>Commonly used when you need to link to a specific file in your theme, such as an image or a script.

**Example in Practice:**
```php
<img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="Site Logo">
```
</details>

<br>

<details>
<summary><strong>wp_enqueue_script('a', 'b', 'c', 'd', 'e')</strong></summary>

**Purpose:**
>`wp_enqueue_script()` is used to safely register and enqueue JavaScript files in WordPress. This function helps manage the loading order and dependencies of scripts, ensuring they load correctly and do not conflict with other scripts.

**Parameter**
- `'a'` : The handle or name of the script.
- `'b'` : The URL to the script (can be a full URL or a call to a function like `get_theme_file_uri()`).
- `'c'` : An array of dependencies, which are other scripts that need to load before this one (e.g., `array('jquery')`).
- `'d'` : The version number of the script (useful for cache busting).
- `'e'` : A boolean value that determines whether the script should be loaded in the footer (`true`) or in the header (`false`).

**Usage:**
>Typically used in the `functions.php` file to load JavaScript files required by your theme or plugin.

**Example in Practice:**
```php
function my_theme_scripts() {
    wp_enqueue_script('custom-script', get_theme_file_uri('js/custom.js'), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');
```
</details>

<br>

<details>
<summary><strong>after_setup_theme</strong></summary>

**Purpose:**
>The *`after_setup_theme` action hook* is used to execute code after the theme has been set up. It allows you to add theme support for various features, such as post thumbnails or custom logos, and initialize other theme-related functionality.

**Parameters:**
>This function does not accept any parameters.

**Usage:**
>You can use this hook to add theme support features or initialize theme settings. Typically, you would add functions to this hook in your theme’s `functions.php` file.

**Example in Practice:**
```php
function mytheme_setup() {
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
        'footer'  => __('Footer Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');
```
</details>

<br>

<details>
<summary><strong>add_theme_support()</strong></summary>

**Purpose:**
>The `add_theme_support()` function is used to enable various features and functionality for your WordPress theme. It allows you to specify which features your theme supports, such as post thumbnails, custom headers, or HTML5 markup.

**Parameter**
>- `$feature` (string) – The feature you want to add support for. This can be a string (e.g., 'post-thumbnails') or an array of options.
>- `$args` (optional) – An array of arguments or options for the feature (used with certain features).

**Usage:**
>Call this function within the `after_setup_theme` hook to ensure it is executed at the appropriate time.

**Example in Practice:**
```php
function mytheme_setup() {
    // Enable support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Enable support for custom logo
    add_theme_support('custom-logo');
    
    // Enable HTML5 support for certain elements
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'mytheme_setup');
```
</details>

<br>

<details>
<summary><strong>site_url()</strong></summary>

**Purpose:**
>The `site_url()` function returns the URL of the WordPress site. It can be used to generate URLs relative to the WordPress installation directory.

**Parameter**
>- `$path` (string) – Optional. The relative path to append to the site URL.
>- `$scheme` (string) – Optional. The scheme to use for the URL. Can be 'http', 'https', 'relative', or 'admin'.

**Usage:**
>Use this function to get the base URL of your WordPress site or to generate URLs dynamically. It’s useful for creating links in your theme or plugin code.

**Example in Practice:**
```php
// Get the site URL
$site_url = site_url();

// Get the URL for a specific path
$about_page_url = site_url('/about/');

// Get the admin URL with HTTPS
$admin_url = site_url('/wp-admin/', 'https');
```
</details>

<br>

<details>
<summary><strong>get_the_ID()</strong></summary>

**Purpose:**
>The `get_the_ID()` function retrieves the ID of the current post within the WordPress Loop. It’s used to get the unique identifier for the post being processed.

**Parameter**
>This function does not accept any parameters.

**Usage:**
>Typically used within the Loop to get the post ID for the current post, which can then be used to retrieve other post data or perform actions related to the post.

**Example in Practice:**
```php
// Inside the Loop
$post_id = get_the_ID();
echo 'The ID of this post is: ' . $post_id;
```
</details>

<br>

<details>
<summary><strong>wp_get_post_parent_id()</strong></summary>

**Purpose:**
>The `wp_get_post_parent_id()` function retrieves the ID of the parent post for a given post. It is useful for determining the parent-child relationship between posts, such as when dealing with hierarchical post types like pages.

**Parameter**
>- `$post_id` (int) – The ID of the post for which to get the parent ID.

**Usage:**
>You would use this function to find out if a post has a parent and to get that parent’s ID. It’s often used when working with hierarchical content.

**Example in Practice:**
```php
// Get the parent ID of the current post
$parent_id = wp_get_post_parent_id(get_the_ID());

if ($parent_id) {
    echo 'The parent post ID is: ' . $parent_id;
} else {
    echo 'This post has no parent.';
}
```
</details>

<br>

<details>
<summary><strong>get_permalink()</strong></summary>

**Purpose:**
>The `get_permalink()` function retrieves the permalink (or URL) for a given post or page. This is useful for generating links to posts or pages.

**Parameter**
>- `$post` (int|WP_Post) – Optional. The post ID or WP_Post object for which to retrieve the permalink. If not provided, it defaults to the current post in the Loop.

**Usage:**
>Use this function to get the URL of a post or page, which can be used in links or redirects.

**Example in Practice:**
```php
// Get the permalink for the current post
$permalink = get_permalink();

// Get the permalink for a specific post by ID
$post_id = 42;
$post_permalink = get_permalink($post_id);

// Display the permalink
echo 'The permalink for the current post is: ' . $permalink;
echo 'The permalink for post ID 42 is: ' . $post_permalink;
```
</details>

<br>

<details>
<summary><strong>wp_list_pages()</strong></summary>

**Purpose:**
>The `wp_list_pages()` function generates a list of pages as an unordered list (`<ul>`), usually used for displaying a menu or a sitemap. It’s commonly used in themes to display a list of pages on a site.

**Parameter**
>The function accepts a single parameter, $args, which is an associative array or a query string of arguments to customize the output.
>- `title_li` (string) – Text to display before the list of pages (default is `Pages`).
>- `echo` (bool) – Whether to echo the list or return it as a string (default is `true` to echo).
>- `exclude` (string) – Comma-separated list of page IDs to exclude from the list.
>- `include` (string) – Comma-separated list of page IDs to include in the list.

**Usage:**
>You can customize the list of pages by passing different arguments.

**Example in Practice:**
```php
// Display a list of all pages
wp_list_pages();

// Display a list of pages excluding certain ones
wp_list_pages(array('exclude' => '42,54'));

// Display a list of pages with a custom title and without echoing
$pages_list = wp_list_pages(array(
    'title_li' => 'My Custom Pages',
    'echo' => false
));
echo $pages_list;
```
</details>

<br>

<details>
<summary><strong>get_pages()</strong></summary>

**Purpose:**
>The `get_pages()` function retrieves a list of pages based on the arguments provided. Unlike `wp_list_pages()`, which outputs an HTML list, `get_pages()` returns an array of page objects that you can loop through and manipulate.

**Parameter**
>This function accepts an array of arguments to customize the query. Some common arguments include:
>- `child_of` (int) – ID of the page whose child pages will be retrieved.
>- `parent` (int) – ID of the parent page.
>- `exclude` (string) – Comma-separated list of page IDs to exclude.
>- `include` (string) – Comma-separated list of page IDs to include.
>- `sort_column` (string) – Column to sort the pages by (e.g., 'post_title', 'menu_order').

**Usage:**
>Use this function when you need more control over how you handle the pages, such as displaying them in a custom format.

**Example in Practice:**
```php
// Get all pages
$all_pages = get_pages();

// Get all child pages of a specific page
$child_pages = get_pages(array('child_of' => 10));

// Get pages and sort them by title
$sorted_pages = get_pages(array('sort_column' => 'post_title'));

// Loop through the pages and display their titles
foreach ($sorted_pages as $page) {
    echo $page->post_title . '<br>';
}
```
</details>

<br>

<details>
<summary><strong>get_the_title()</strong></summary>

**Purpose:**
>The `get_the_title()` function retrieves the title of a post or page. It’s often used within the Loop to display the title of the current post or page.

**Parameter**
>- `$post` (int|WP_Post) – Optional. Post ID or WP_Post object. Defaults to the current post in the Loop.

**Usage:**
>Use this function to get the title of a specific post or the current post.

**Example in Practice:**
```php
// Get the title of the current post
$title = get_the_title();
echo 'The title of this post is: ' . $title;

// Get the title of a specific post by ID
$specific_title = get_the_title(42);
echo 'The title of post 42 is: ' . $specific_title;
```
</details>

<br>

<details>
<summary><strong>language_attributes()</strong></summary>

**Purpose:**
>Outputs the language attributes for the `<html>` tag in your theme, usually including the `lang` attribute and other optional attributes like `dir` (for text direction).

**Parameter**
>This function does not accept any parameters.

**Usage:**
>Use this function to make your site more accessible by providing appropriate language and text direction attributes. It is typically used in the opening `<html>` tag of your theme's `header.php` file.

**Example in Practice:**
```php
<html <?php language_attributes(); ?>>
```
</details>

<br>

<details>
<summary><strong>body_class()</strong></summary>

**Purpose:**
>Adds custom classes to the `<body>` tag, allowing you to style specific pages, posts, or contexts (e.g., single post view, category archive) more easily.

**Parameter**
>`$class` (optional) – Additional classes you want to add to the body tag. Can be a string or an array of class names.

**Usage:**
>Always include this function in your `<body>` tag to add context-specific classes that help with styling and JavaScript targeting. This improves flexibility when styling pages or adding custom behavior.

**Example in Practice:**
```php
<body <?php body_class(); ?>>
```
</details>

<br>

<details>
<summary><strong>register_nav_menu('location', 'description')</strong></summary>

**Purpose:**
>Registers a navigation menu location in WordPress. You can then assign a custom menu to this location from the WordPress admin dashboard.

**Parameter**
>- `location` (string): A unique identifier for the menu location (e.g., 'primary', 'footer').
>- `description` (string): A descriptive name for the menu location, which is displayed in the WordPress admin.

**Usage:**
>- Use this function in your theme's `functions.php` file to register any custom navigation locations.
>- Ensure the `location` is unique to avoid conflicts.
>- Combine this with `wp_nav_menu()` to display the menu in your theme template.

**Example in Practice:**
```php
function register_my_menus() {
    register_nav_menu('primary', 'Primary Menu');
}
add_action('init', 'register_my_menus');
```
</details>

<br>

<details>
<summary><strong>is_page()</strong></summary>

**Purpose:**
>Checks if the current page matches a given page, either by ID, slug, or title. It is useful for conditionally loading content based on the current page.

**Parameter**
>- `$page` (optional): The ID, slug, or title of the page to check. If no parameter is passed, it checks if the current view is a page.

**Usage:**
>- Use `is_page()` in template files or conditional statements when you need to load different content or styles for specific pages.
>- Avoid using too many specific `is_page()` conditions to keep your code maintainable.

**Example in Practice:**
```php
if ( is_page(42) ) {
    // The page ID is 42
}

if ( is_page('about') ) {
    // The page slug is 'about'
}
```
</details>

<br>

<details>
<summary><strong>get_page_by_path()</strong></summary>

**Purpose:**
>Retrieves a page object based on the page’s path (slug).

**Parameter**
>- `$page_path` (string): The path (slug) of the page.
>- `$output` (optional): The required return type. Use `OBJECT` for the full page object, or `ARRAY_A` for an associative array.
>- `$post_type` (optional): The post type to query. Default is 'page'.

**Usage:**
>- Use this when you need to retrieve a page based on its slug instead of ID or title.
>- Always check if the returned page object is valid before using it, to avoid errors.

**Example in Practice:**
```php
$page = get_page_by_path('about');
if ( $page ) {
    // Do something with the page object
}
```
</details>

<br>

<details>
<summary><strong>paginate_links()</strong></summary>

**Purpose:**
>Generates pagination links for paginated posts, archives, or custom queries. It’s commonly used when you have multiple pages of posts or results.

**Parameter**
>- `$args` (array, optional): An array of arguments to customize the pagination. Some key arguments include:
>     - `base`: The base URL for pagination links.
>     - `format`: The format for the pagination links (usually '?paged=%#%').
>     - `total`: The total number of pages.
>     - `current`: The current page number.
>     - `prev_text`: Text for the "previous" link.
>     - `next_text`: Text for the "next" link.
>     - `type`: Return type, either `plain`, `array`, or `list`.

**Usage:**
>- Always check the total number of pages to avoid generating pagination for single-page results.
>- Use `type => 'list'` to get pagination wrapped in an unordered list for easier styling.
>- Customize `prev_text` and `next_text` to improve navigation and match your site's language and theme.

**Example in Practice:**
```php
echo paginate_links( array(
    'base'    => get_pagenum_link(1) . '%_%',
    'format'  => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total'   => $wp_query->max_num_pages,
    'prev_text' => __('« Previous'),
    'next_text' => __('Next »'),
) );
```
</details>

<br>

<details>
<summary><strong>the_author_posts_link()</strong></summary>

**Purpose:**
>Displays a link to the author’s archive page. The link typically contains the author's name and links to a list of all posts written by that author.

**Parameter**
>This function does not accept any parameters.

**Usage:**
>- Use this function in post templates (e.g., `single.php`, `archive.php`) to provide users an easy way to find more posts by the author.
>- Combine it with `get_the_author()` if you want to display more detailed information alongside the author link (like a bio).

**Example in Practice:**
```php
<?php the_author_posts_link(); ?>
```
</details>

<br>

<details>
<summary><strong>the_time()</strong></summary>

**Purpose:**
>Displays the time the post was published, formatted according to a specific date and time format.

**Parameter**
>`$format` (optional): A string representing the format in which you want to display the time. If not provided, it defaults to the format set in the WordPress admin under **Settings** → **General**.

**Usage:**
>- Customize the format to match the style of your site and locale. Common formats include:
>     - `'F j, Y'`: Full date (e.g., July 7, 2024).
>     - `'g:i a'`: Time in 12-hour format (e.g., 10:30 am).
>     - `'Y-m-d'`: ISO date format (e.g., 2024-07-07).
>- If you need both the date and time, consider using `the_date()` and `the_time()` together, as `the_time()` will only display the time portion.

**Example in Practice:**
```php
<?php the_time('F j, Y'); ?>  <!-- Displays: July 7, 2024 -->
<?php the_time('g:i a'); ?>   <!-- Displays: 10:30 am -->
```
</details>

<br>

<details>
<summary><strong>get_the_category_list()</strong></summary>

**Purpose:**
>Retrieves a list of categories associated with the current post. The categories are returned as a string of links, each linking to its respective category archive page.

**Parameter**
>- `$separator` (string, optional): The string to separate each category. Defaults to a comma `,`.
>- `$parents` (string, optional): How to handle parent categories. Possible values are:
>     - `'multiple'`: Show each parent category multiple times.
>     - `'single'`: Only show the parent category once.
>     - `'both'`: Show both the parent and the sub-category.

**Usage:**
>- Use a custom separator if you want the categories to be separated by something other than a comma (e.g., a bullet point or line break).
>- Use this function in post templates where you want to show the categories a post belongs to, typically below the post title or after the content.
>- Ensure the output is escaped with `esc_html()` or `esc_url()` when displaying on the front end to avoid any potential security issues.

**Example in Practice:**
```php
<?php echo get_the_category_list(', '); ?>
```
</details>

<br>

<details>
<summary><strong>is_category()</strong></summary>

**Purpose:**
>Determines whether the current page is a category archive. This function is commonly used in templates to check if the current query is for a category archive page, allowing you to conditionally display content or apply specific behavior based on the category.

**Parameter**
>`$category` (mixed, optional): You can specify a category by its ID, slug, or name. If no argument is passed, the function simply checks whether the current page is any category archive.

**Usage:**
>- Use `is_category()` to conditionally display different layouts, messages, or ads on category archive pages.
>- Combine `is_category()` with other conditional tags like `is_single()` or `is_page()` to create complex conditional logic for templates.
>- When targeting a specific category, it's generally better to use the slug rather than the category name to avoid issues if the category name changes.


**Example in Practice:**
```php
// 1. Check if any category archive page is being viewed:
if ( is_category() ) {
    // Code to display if any category archive is being viewed
}

// 2. Check if a specific category archive is being viewed by ID:
if ( is_category( 5 ) ) {
    // Code to display if the category with ID 5 is being viewed
}

// 3. Check if a specific category archive is being viewed by slug:
if ( is_category( 'news' ) ) {
    // Code to display if the 'news' category archive is being viewed
}

// 4. Check if a specific category archive is being viewed by name:
if ( is_category( 'Latest News' ) ) {
    // Code to display if the 'Latest News' category archive is being viewed
}
```
</details>

<br>

<details>
<summary><strong>single_cat_title()</strong></summary>

**Purpose:**
>Displays or retrieves the name (title) of the current category being viewed. It’s used on category archive pages to show the category title.

**Parameter**
>- `$prefix` (string, optional): A string to display before the category title (e.g., “Category: ”). Defaults to an empty string.
>- `$display` (bool, optional): If `true`, the title is echoed (displayed), otherwise it is returned as a string. Defaults to `true`.

**Usage:**
>- Use this in `category.php` or a generic `archive.php` template when you need to display the current category’s name.
>- Combine this with other conditional tags like `is_category()` to customize your page titles or breadcrumbs for category archives.


**Example in Practice:**
```php
// 1. Display the category title:
<?php single_cat_title(); ?>

// 2. Display the category title with a prefix:
<?php single_cat_title('Category: '); ?>

// 3. Retrieve the category title as a string:
<?php $cat_title = single_cat_title('', false); ?>
```
</details>

<br>

<details>
<summary><strong>is_author()</strong></summary>

**Purpose:**
>Checks if the current page is an author archive page. It returns `true` if you are viewing an archive page listing all posts by a specific author, and `false` otherwise.

**Parameter**
>`$author` (optional): You can specify an author by their ID, user login, or user slug. If no argument is passed, the function checks whether the current query is for any author archive.

**Usage:**
>- Use `is_author()` when you want to customize the author archive page. Combine it with `get_the_author_meta()` to display more information about the author.
>- Use in your `author.php` template or in a generic archive template to conditionally style or display content based on the author being viewed.


**Example in Practice:**
```php
// 1. Check if you are on any author archive page:
if ( is_author() ) {
    // Display content for the author archive
}

// 2. Check if you are on a specific author's archive page (by ID):
if ( is_author( 7 ) ) {
    // Display content for the author with ID 7
}

// 3. Check if you are on a specific author's archive page (by user login):
if ( is_author( 'johndoe' ) ) {
    // Display content for the author with user login 'johndoe'
}
```
</details>

<br>

<details>
<summary><strong>the_archive_description()</strong></summary>

**Purpose:**
>Displays the description for the current archive (category, tag, custom taxonomy, or author). This is useful for adding context to archive pages, especially when an author bio or category description has been set.

**Parameter**
>- `$before` (string, optional): Content to display before the description (e.g., `<p>`, `<div>`, etc.).
>- `$after` (string, optional): Content to display after the description (e.g., `</p>`, `</div>`, etc.).

**Usage:**
>- Use this function in archive templates like `category.php`, `tag.php`, `author.php`, or `taxonomy.php` to display helpful descriptions that improve user understanding or SEO.
>- Combine this with `the_archive_title()` for a more complete archive page heading section.

**Example in Practice:**
```php
// 1. Display the archive description with default formatting:
<?php the_archive_description(); ?>

// 2. Display the archive description wrapped in custom HTML:
<?php the_archive_description('<div class="archive-desc">', '</div>'); ?>
```
</details>

<br>

<details>
<summary><strong>WP_Query()</strong></summary>

**Purpose:**
>A powerful class used for creating custom queries in WordPress. It allows you to retrieve posts or other post types based on a wide variety of parameters such as categories, tags, custom fields, post types, and more.

**Parameter**
>- The `$args` array specifies the query parameters. Some common ones include:
>   - `post_type`: Specifies the type of posts (e.g., 'post', 'page', 'custom_post_type').
>   - `category_name`: Name of the category to retrieve posts from.
>   - `posts_per_page`: Number of posts to display.
>   - `paged`: Page number for paginated results.
>   - `meta_query`: An array for custom field queries.
>   - `orderby`: How to order posts (e.g., 'date', 'title').

**Usage:**
>- Always use `wp_reset_postdata()` after a custom query to avoid interfering with the main loop.
>- Use `WP_Query` for complex or customized queries, but use simpler functions like `get_posts()` or `query_posts()` for basic queries to optimize performance.

**Example in Practice:**
```php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
    'category_name'  => 'news',
);
$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) {
    while ($custom_query->have_posts()) {
        $custom_query->the_post();
        // Display the post content
    }
} else {
    echo 'No posts found';
}

wp_reset_postdata();  // Always reset post data after custom queries
```
</details>

<br>

<details>
<summary><strong>has_excerpt()</strong></summary>

**Purpose:**
>Checks whether the current post has a manually written excerpt. It returns true if the post has an excerpt and false otherwise.

**Parameter**
>This function does not accept any parameters.

**Usage:**
>- Use `has_excerpt()` to conditionally display a manually written excerpt or to generate an automatic excerpt if none is available.
>- Pair this function with `the_excerpt()` to provide fallback behavior for posts without custom excerpts.

**Example in Practice:**
```php
if ( has_excerpt() ) {
    // Display custom excerpt
} else {
    // Fallback content
}
```
</details>

<br>

<details>
<summary><strong>get_the_excerpt()</strong></summary>

**Purpose:**
>Retrieves the post’s excerpt. If a manual excerpt is not available, it will generate an automatic excerpt by trimming the post content.

**Parameter**
>- `$post` (optional): The post object or post ID. If not specified, it defaults to the current post.

**Usage:**
>- Use this function when you need to retrieve and display excerpts without printing them directly (useful when customizing output or combining it with other functions).
>- You can also filter the length and more via `excerpt_length` and `excerpt_more` filters.

**Example in Practice:**
```php
$excerpt = get_the_excerpt();
echo $excerpt;
```
</details>

<br>

<details>
<summary><strong>get_post_type_archive_link()</strong></summary>

**Purpose:**
>Retrieves the URL for the archive page of a specified post type. It’s useful when you need to create a link to a custom post type archive.

**Parameter**
>- `$post_type` (string, required): The slug of the post type you want to get the archive link for.

**Usage:**
>- Use this in templates or menus when you need to link directly to a custom post type’s archive page.
>- Make sure the custom post type has the `'has_archive'` argument set to `true` when registering it, otherwise this function won’t return an archive link.

**Example in Practice:**
```php
$archive_link = get_post_type_archive_link('product');
echo '<a href="' . $archive_link . '">View Products</a>';
```
</details>

<br>

<details>
<summary><strong>wp_reset_postdata()</strong></summary>

**Purpose:**
>Restores the global $post variable to the main query after a custom WP_Query loop. This ensures that subsequent template tags (like the_title() or the_content()) work correctly with the main loop’s posts.

**Parameter**
>This function does not accept any parameters.

**Usage:**
>- Always call `wp_reset_postdata()` after using `WP_Query` or any custom loop to avoid issues with the global post data.

**Example in Practice:**
```php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
);
$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) {
    while ($custom_query->have_posts()) {
        $custom_query->the_post();
        // Display the post content
    }
}

wp_reset_postdata();  // Resets the global $post variable back to the main query
```
</details>

<br>

<details>
<summary><strong>register_post_type()</strong></summary>

**Purpose:**
>Registers a custom post type in WordPress. You can use this function to create new post types like 'Products', 'Events', or any other type of content you need beyond the default 'post' and 'page'.

**Parameter**
>- `$post_type` (string, required): The unique identifier (slug) for the custom post type.
>- `$args` (array, required): An array of arguments to define how the post type behaves. Key arguments include:
>   - `label`: A human-readable name for the post type.
>   - `public`: Whether the post type is public.
>   - `has_archive`: Whether the post type has an archive page.
>   - `supports`: Features like title, editor, custom fields, etc.

**Usage:**
>- Always register custom post types in the `init` action hook to ensure they are properly initialized.
>- Be descriptive when naming your custom post type and ensure the slug is unique to avoid conflicts.
>- Use `'rewrite' => array('slug' => 'custom-slug')` if you want a custom URL structure for the post type.

**Example in Practice:**
```php
function create_custom_post_type() {
    $args = array(
        'label'         => 'Products',
        'public'        => true,
        'has_archive'   => true,
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'     => 'dashicons-cart',
    );
    register_post_type('product', $args);
}
add_action('init', 'create_custom_post_type');
```
</details>

<br>

<details>
<summary><strong>get_the_content()</strong></summary>

**Purpose:**
>Retrieves the full post content. Unlike `the_content()`, this function returns the content instead of directly displaying it, allowing you to manipulate or customize the output.

**Parameter**
>- `$more_link_text` (string, optional): Text to display for "read more" links when a post is split by the `<!--more-->` tag. Defaults to `null`.
>- `$strip_teaser` (bool, optional): Whether to remove the teaser part of the post before the `<!--more-->` tag. Defaults to `false`.

**Usage:**
>- Use `get_the_content()` when you need the full post content for custom manipulation, rather than immediately displaying it.
>- If you need to filter or apply formatting (such as applying shortcodes or automatic paragraphs), you can pass the content through functions like `apply_filters('the_content', $content)`.

**Example in Practice:**
```php
$content = get_the_content();
echo $content;
```
</details>

<br>

<details>
<summary><strong>is_admin()</strong></summary>

**Purpose:**
>Determines if the current request is for an admin page. It returns `true` if the request is within the WordPress admin panel (`wp-admin`) and `false` if it’s a front-end request.

**Parameter**
>This function does not accept any parameters.

**Usage:**
>- Use `is_admin()` when you need to target admin-specific logic, such as enqueueing scripts or handling admin-only functionality.
>- This function is often used in combination with hooks like `admin_enqueue_scripts` or to conditionally run code in `functions.php`.

**Example in Practice:**
```php
if ( is_admin() ) {
    // Code to run only in the admin area
}
```
</details>

<br>

<details>
<summary><strong>is_main_query()</strong></summary>

**Purpose:**
>Checks whether the current query is the main WordPress query. This is useful when customizing queries in WordPress, as it helps differentiate between the main query and custom queries (e.g., created with `WP_Query()`).

**Parameter**
>This function does not accept any parameters.

**Usage:**
>- Always use `is_main_query()` inside the `pre_get_posts` hook to ensure you’re modifying the main query and not any secondary or custom queries (like sidebar widgets or related posts).
>- This function is especially important in themes and plugins where you may be working with multiple queries on the same page.

**Example in Practice:**
```php
// 1. Check if it's the main query:
if ( is_main_query() ) {
    // This is the main query
}

// 2. Use it within the `pre_get_posts` action to modify the main query:
function modify_main_query( $query ) {
    if ( is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 10 ); // Modify the main query on the home page
    }
}
add_action( 'pre_get_posts', 'modify_main_query' );
```
</details>

<br>

<details>
<summary><strong>get_query_var()</strong></summary>

**Purpose:**
>Retrieves a public query variable (a parameter from the current query) based on its key. It’s commonly used to get custom query variables, pagination information, or values like category slugs, page numbers, etc.

**Parameter**
>- `$var` (string, required): The name of the query variable you want to retrieve (e.g., 'paged', 'category_name').
>- `$default` (mixed, optional): The value to return if the query variable is not set. Defaults to an empty string.

**Usage:**
>- Use `get_query_var()` for pagination (`paged`), taxonomies (`category_name`, `tag`), or custom variables in templates and queries.
>- You can add your own custom query variables using the `query_vars` filter, then retrieve them with `get_query_var()`.

**Example in Practice:**
```php
// 1. Get the current page number (for pagination):
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

// 2. Get a custom query variable: If you’ve added a custom query variable using `add_query_var()`, you can retrieve its value like this:
$my_custom_var = get_query_var('my_custom_var');


// Additional example: Adding a custom query variable
function add_custom_query_var( $vars ) {
    $vars[] = 'custom_var';
    return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );

// Retrieve it
$custom_value = get_query_var('custom_var');
```
</details>