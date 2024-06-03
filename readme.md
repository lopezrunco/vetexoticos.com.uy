# Vetexoticos pet shop Wordpress theme

## Instructions:

### 1. Download XAMPP
Go to the official Apache Friends website and download the correct XAMPP software version based on your operating system.

### 2. Install and Run XAMPP on Your Computer
Run the XAMPP installer and follow the installation instructions using the default settings. If you see a pop-up indicating that your antivirus software might affect the installation process, click Yes to continue.

After installing XAMPP, run the application and configure the environment. In the XAMPP control panel, start Apache and MySQL modules to perform the WordPress localhost installation.

If you’re running on the Windows operating system, there’s a chance you might encounter the localhost refused to connect error. Disabling your firewall temporarily or stopping the program that uses port 80 should resolve this issue.

### 3. Download WordPress
Once the server is up and running, the next step is installing WordPress. Download the latest WordPress version, then extract the ZIP file.

Navigate to your XAMPP folder in the C drive (C:\xampp) and locate the htdocs folder. Upload the extracted WordPress files there. We recommend renaming the new folder with your website’s name to make web development on the XAMPP server easier.

### 4. Create a Local Database
Go back to your XAMPP control panel and select the Admin button of the MySQL module to launch phpMyAdmin ‒ an administration tool for managing MySQL and MariaDB databases. It will help you create a local MySQL database for the new website.

Open the Databases tab and enter the database name into the Create database section. Set the dropdown menu’s value to Collation and hit the Create button. Your new MySQL database should appear on the left sidebar of the web page.

### 5. Install WordPress on Localhost
Finish installing WordPress locally by visiting http://localhost/foldername via your browser. Don’t forget to change the “foldername” placeholder with the folder name you chose in the third step.

WordPress requires a list of information to build the localhost site. Fill in the database information as follows:

```
Database name ‒ the name of the database you created in phpMyAdmin.
Username ‒ enter “root” as the default username.
Password ‒ leave the MySQL database password field blank.
Database host ‒ keep the default “localhost.”
Table prefix ‒ keep the default “wp_.”
```

Once done, hit Submit -> Run the installation. Fill in the additional information needed, like the site name and login credentials, and click on the Install WordPress button.

### 6. Check the Local Site You Built
That’s it – your local test site is now ready. Go to http://localhost/foldername/wp-admin and use the login credentials you created in the previous step to access the WordPress dashboard.

<hr>

### Add custom home page in Wordpress:
In the Wordpress administrator create a new page and then go to Settings => Reading. In "
Your homepage displays" select "A static page" and select the page from the list.

### Add menu items:
In the Wordpress administrator create a new menu. Then create a few pages, add them to the menu and in "Menu Settings" go to "Display location" and select "Desktop Primary Left Sidebar".

### Customize menu items classes:
In the Wordpress administrator go to Appearence => Menus and in the top-right section click on the tab "Screen Options". In "Show advanced menu properties" check "Link Target" and "CSS Classes". Then go to the menu items and add the class "nav-item" in every one of them.

### Add FontAwesome icons to the menus items:
In the Wordpress administrator go to Appearence => Menus and in "Navigation Label" paste the icon alongside the menu item name, like this:
```html
    <i class="fas fa-home"></i> Sample page
```

### Add Blog page:
In the Wordpress administrator create a new page called "Blog". Then go to Settings => Reading and in "Your homepage displays" go to "Posts page" and select the Blog page.

### Run SASS command:
```sh
    sass --watch scss/style.scss style.css
```