# Develop your Project in PHP : Assemblerfy

In this project we are going to **put into practice** all the previous knowledge learnt in the master to develop a project of our choice but this time **using PHP in the backend layer**

## The Project

In this PROJECT we have created a **music** that allows the **user** to **login, register and play audio content** in the same way as we would do in the **Itunes platform**. There is also an admin section where we will be able to visualize the content reproduced by each registered user.

### What are the main objectives in this project?

- Improve your knowledge of **PHP**
- Improve your knowledge of working with **HTML, CSS, JS and PHP** together
- Improve your knowledge of working with **GIT**
- Learn how to retrieve info from a **third party API using PHP**

## Folder organization

- PHP_Develop_Project - The project folder that contains:

  - _assets_: Folder that contains used external resources
  - _data_: Folder that contains the JSON files
  - _html_: Folder that contains reusable html code
  - _node_modules_: Folder ignored by git that contains the installation of npm dependencies
  - _postman_: Forther that contains the POSTMAN collection to test the GET requests to the API
  - _project_documentation_: Folder that contains the presentation and documentation of the project
  - _server_: Folder containing all the scripts that run in the server
  - _src_: Folder containing the CSS and the JavaScript code
  - _test_: Folder containing the test scripts
  - _vendor_: Folder ignored by git that contains the installation of composer dependencies
  - _.gitignore_: File that tells **GIT** which files to ignore
  - _adminpanel.php: file with the layout of the admin section
  - _composer.json_: File describing the project with its PHP dependencies
  - _composer.lock_: File listing the installed PHP dependencies
  - _index.php_: main file with the main page
  - _login.php_: file containing the login panel page
  - _package.json_: File describing the project with its JS dependencies
  - _package-lock.json_: File listing the installed JS dependencies
  - _README.md_: This file
  - _register.php_: file containing the register panel page

## Instructions

When setting the URL of our browser to *http://localhost/PHP_Develop_Project/* we will see the main screen, where on the top there is a _nav bar_ and in the center there is an album of _last hit songs_.
<br>
In the _nav bar_ we have the posibility to search **titles, artist** and filter by **album, song or music video**; as well as **register** as a new user or **login** with an already registered **user or admin credentials**.
<br>
Only if we are successfully logged we will be able to reproduce the media content; content which will be stored in our _userlogin.json_ JSON file with the user credentials and the reproduced content information.
<br>
In the admin we are able to see the content viewed by every registered user.


## Authors ✒️

- **Guillermo, Jaime, Sayeed & Yulia** - _All the work of design and code_ - [Repository](https://code.assemblerschool.com/jaime-botet/develop-your-project-in-php)
