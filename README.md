# Project-I

# Introduction

Exam Portal is an web application to fill out exam forms and view examination status throughout the course term. It is built on HTML5.

# Methodology and Tools

Exam Portal is essentialy made using waterfall model for software development and following tools were used for the project 

[![My Skills](https://skillicons.dev/icons?i=js,html,css,mysql,php)](https://skillicons.dev)


# Contributing to this project

### Fork the repo to your github

Fork this repository by clicking on the fork button on the top of this page. This will create a copy of this repository in your account.

![image](https://user-images.githubusercontent.com/59206903/199491617-1a830cd3-e3f3-4d1e-83cb-079cb7feb803.png)

### Clone the repo

Now clone the forked repository to your machine. Go to your GitHub account, open the forked repository, click on the code button and then click the copy to clipboard icon.

![image](https://user-images.githubusercontent.com/59206903/199491899-b95cb41a-0877-4a3e-81c2-dd76227a0a78.png)

Open a terminal and run the following git command:

```markdown
git clone <copied url>
```

### Create your branch

Create a branch to make changes into using the following command

```markdown
git checkout -b <new-branch-name>
```

### Make your changes and add changes

contribute your changes but make sure to explain your changes through proper comments then add your contributions to git using

```markdown
git add <changed-file-name>
```

### Commit and Push changes

commit your changes and push to your repo

```markdown
git push <changed-file-name>
```

```markdown
git push origin -u <your-branch-name>
```

### Submit your changes for review

If you go to your repository on GitHub, click  `Compare & pull request`button then we will review your code

# Setting up Backend for contribution

## Prerequisites

- working xampp installation
- proper permission to htdocs folder

## Steps for dev setup

- fork and then clone repo forked into htdocs folder in your system
    
    ```jsx
    git clone <url>
    ```
    
    the htdocs folder is located on following path according to devices
    
    1. linux: `/opt/lampp/htdocs`
    2. windows: `C:\xampp\htdocs\`
    3. osx: `/Applications/XAMPP/htdocs`
- go to `[localhost/phpmyadmin](http://localhost/phpmyadmin)` and select SQL
    
    

## Prerequisites

- working xampp installation
- proper permission to htdocs folder

## Steps for dev setup

- fork and then clone repo forked into htdocs folder in your system
    
    ```jsx
    git clone "url"
    ```
    
    the htdocs folder is located on following path according to devices
    
    1. linux: `/opt/lampp/htdocs`
    2. windows: `C:\xampp\htdocs\`
    3. osx: `/Applications/XAMPP/htdocs`
- go to `[localhost/phpmyadmin](http://localhost/phpmyadmin)` and select SQL
    
![Screenshot from 2022-11-03 18-49-54](https://user-images.githubusercontent.com/59206903/199731257-410bb02a-da53-4ea6-b815-c0a864cd1dfd.png)

    
- create a database as follows
    
    ```sql
    CREATE DATABASE Exam-Portal;
    ```
    
- then go to db Exam-Portal and paste the following instructions on SQL section
    
    ```sql
    CREATE TABLE `Exam-Portal`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `Email` VARCHAR(255) NOT NULL , `Password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    ```
    
- create a database as follows
    
    ```sql
    CREATE DATABASE Exam-Portal;
    ```
    
- then go to db Exam-Portal and paste the following instructions on SQL section
    
    ```sql
    CREATE TABLE `Exam-Portal`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `Email` VARCHAR(255) NOT NULL , `Password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    ```
