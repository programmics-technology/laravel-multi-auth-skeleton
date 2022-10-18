# Laravel Multi Auth Skeleton (User, Admin Setup)

This skelton comes with basic user auth setup with some packages & those are.

1. Image manipulation library | https://intervention.io/
2. Yazra Datatable | https://yajrabox.com/docs/laravel-datatables/master

# Requirements

1. Your system must have PHP verison 8.0 or above.


# Installation of this project

Step 1
install PHP  by Brew(FOR MAC ONLY, Skip this if you have alredy installed)
`$ brew install php`
It will install php 8.0

Step 2(FOR MAC ONLY, Skip this if you have alredy installed)
Install Composer \
`brew install composer` \
For more 
https://formulae.brew.sh/formula/composer

Step 3 \
Setup Git and clone the project file by \
`git clone ` 

Step 4 \
Download all dependecy by Composer \
`composer install`

Step 5 \
Craete .Env File by duplicalating .env.example  

Step 6 \
Setup Env File by changing database credintial 

Step 7 \
Run the migration for Database php artisan command  \
`php artisan migrate`

Step 8 \
Run the seeder for Default Admin Credentials php artisan command  \
`php artisan db:seed --class=AdminDefaultCredSeeder`

Step 9 \
Run the server for Host php artisan command  \
`php artisan serve`


it will be host on a ip which will visble on your terminal.

# Instruction

This project has some built in function such as Notification, Setting, User & Admin.

1. Some functions are commented, Please read all the comments before use them, so that you will better know about that function.
2. You can remove any of that function which you are not going to use or keep as it is.
3. There are no limits you can customize any of the function as your project requirement. they are open to update.
4. Default Admin Credentials - email. admin@gmail.com | password. 12345678
5. Admin URL `http://127.0.0.1:8000/admin`
5. That's it, Now you are good to go...😊

