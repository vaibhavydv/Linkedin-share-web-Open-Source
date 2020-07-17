# Linkedin Share with API Web

How to Install and Run Login and Share Posts(Text, Feed, Image) on LinkedIn

![Vaibhav Yadav](https://repository-images.githubusercontent.com/279960644/93595980-c81b-11ea-94bb-c4f9b926010c)


Step 1 :

> Go to Your Localhost Apache dir : `/var/www/html/`
   For Ex : /var/www/html/linkedin-share-web/

> Clone Code Using `git clone https://github.com/vaibhavydv/linkedin-share-web.git`

Step2 : 

> Set your Local Path in Apache conf (000-default.conf)
For Example : 

```
# LinkedIn Local
<VirtualHost *:85>
   ServerName localhost:85
   DocumentRoot /var/www/html/linkedin-share-web/
   <Directory /var/www/html/linkedin-share-web/>
       Options Indexes FollowSymLinks MultiViews
       AllowOverride All
       Require all granted
   </Directory>
</VirtualHost>

```

Step 3 :

> Edit Your Call back file in local callback 
	
	(/var/www/html/linkedin/init.php) 

Modify Values:

```
$app_id = "";  // app id from linkedin dev app
$app_secret = ""; // app seceret app id from linkedin dev app

$app_callback = "http://localhost:85/callback.php";  // path for call back file
$app_scopes = "r_emailaddress r_liteprofile w_member_social "; // permissions 

```

> Set Call Back Uri In LinkedIn App Settings (https://prnt.sc/tjd5hd)


Step 4 : 
> Run and Check In Your Local (https://prnt.sc/tjd6qu)

	http://localhost:85/ 





---Enjoy---

Code by 
Vaibhav Yadav
Full Stack Developer

Find Me : https://instagram.com/_vaibhavyadav
