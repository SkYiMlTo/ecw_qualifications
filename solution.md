# Retrieve the second DB

## Using the only user marked as admin in the give database
There are actually lots of user.
Choosing wisely which user to authenticate is the key to waste the minimum amount of time.
Filtering username with "admin", "administrator", or "root" may help.
Only one user has "admin" in its username.

## Log in and go to admin panel
Now, we want to get the last version of our database.
The last database could be found in admin's message.

## Get the last database version in the ticket number 3
Only need to download!


# Retrieve new users

##  Make a diff to found new users.
We know we need to find one new user.
Make a diff between the given database and the database we found before to obtain new users.

## Explore active accounts
You can try users with tools, e.g. burp.

Amongst active users we have:
- HoneyAccounts:
    - riphillips      ->  Error on log
    - lebrown	      ->  the page should not work
    - krroberts       ->  the loading page takes long to redirect
    - majames	      ->  home-honeytoken.php instead of home.php
    - altaylor        ->  you can access to profile.php without any pin code
    - methomas        ->  press F12 and you will see a message in the console ;)
    - admin-alrose    ->  tried to go to "/admin.php"?
    - admin-romason   ->  the admin panel is in "/not-views/admin" instead of "/views/admin"
    - admin-kodavis   ->  there is no permission to go in "/admin"

- Real users:
    - admin-jidavis   ->  Real admin (next step)
    - jasmith         ->  Real user (final step)

  
# - Retrieve the PIN Code in admin panel

## Connect to admin-jidavis
admin-jidavis is the only other admin account.

## Go to Admin panel
We want information about the right PIN code.

## Read ticket 2
Here we find a reset PIN code!


# - Retrive the flag in the user account

## Connect to jasmith
jasmith is the only user account that is in the second database but not in the first one.

## Go to profile

## Enter PIN

## Flag is located in a json
You can edit the html code to retrieve user.json file.
You can add a `<a href="info_users.json">Toto</a>` and click on the button to download it.
Flag is in the file.