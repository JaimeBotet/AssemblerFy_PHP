# PHP Local File System Explorer

We have already learnt how to submit a **form** an send it via **POST** with **AJAX**. Now we are going to navigate through **files** and **folders** within a **System Explorer**. For this we are going to send information of the files/folders we are selecting via ajax and we will process operations with files in the server side.

## The Project

In this PROJECT we will have to create a **system file explorer** that allows the **user** to **navigate, create directories and upload files** in the same way as we would do in the usual **operating system**. The file explorer is a **tool** that allows you to directly **view and manipulate** the files and directories associated with a **path**, so you must take into account from which **path** the user starts and which path they can access.

### What are the main objectives in this project?

- Understand how the **file system works**
- Improve your knowledge of **PHP**
- Improve your knowledge in **HTML, CSS \$ Javascript**
- Improve your knowledge in **logic** and **programming**

## Folder organization

- PHP_FileSystem - The project folder that contains:

  - _assets_: Folder that contains used external resources
  - _data_: Folder that contains files for global variables
  - _html_: Folder that contains reusable html code
  - _node\_modules_: Folder ignored by git that contains the installation of npm dependencies
  - _project\_documentation_: Folder that contains the presentation and documentation of the project
  - _root_: Folder that contains the folder structure through which we will navigate
  - _server_: Folder containing all the scripts that run in the server
  - _src_: Folder containing the CSS and the JavaScript code
  - _.gitignore_: File that tells **GIT** which files to ignore
  - _index.php_: main file
  - _package.json_: File describing the project with its dependencies
  - _package-lock.json_: File listing the installed dependencies
  - _README.md_: This file

## Instructions

When setting the URL of our browser to *http://localhost/PHP_FileSystem/* we will see the main screen, where in the left side a _navigation menu_ will be displayed and on the right side a _results section_.
On top of the navigation menu an _upload file_ field is displayed, and on the top of the results section a _search engine_ is displayed.

- In the navigation menu, as we click on the folders we will see how the folder is deployed and the subfolders are shown.
- In the results section will be shown the content of the selected folder including files of different format and subfolders, as well as the size of each shown element along with its last modification date.
- In the uploadfile field we can browse a file that we wish to upload in the folder that we previously selected.
- The search engine will loop through all the files and folders of our _root/_ directory and list all the files and folders that which name contains the introduced name of the input field.

As it is specified in the requirements of the project the actions of **create, delete and rename directories** are implemented through different buttons that will appear when we select an specific folder:

- _Edit_: will enable you to modify the name of the selected folder and update the path of the underlying folders and files
- _Create_: will enable you to create a subfolder with the specified name of the selected folder
- _Delete_: will make a recursive deletion of all the files and folder inside the selected folder along with the folder itself.

When navigating through the contents of the selected folder in the _results section_ we are able to view the content of the multimedia files, such as images, videos and audios; by double clicking on their extension icon.

## Authors ✒️

- **Jaime Botet & Jorge Garcia** - _All the work of design and code_ - [Repository](https://code.assemblerschool.com/jaime-botet/Local-FileSystem-Explorer)
