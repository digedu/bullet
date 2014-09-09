# Bullet

This script instantly creates a daily email thread that helps you and your team keep track of what everyone is doing along with provoke useful discussion. 

## How it works

1) This script sends a daily email to your team:

```
Subject: Tech Bullet Points Wed 19th Mar
Message: If you have any bullet points "reply all" as needed:
- Reply with goals, concerns, ideas or completed tasks for today
- Write bullet points not paragraphs ;)
- Format bullet points like this
```
2) Team members "reply all" in bullet point form and continue to reply as stuff comes up during the day. Due to using the convention of bullet points, discussion is kept pithy and on point.

## Installation

1) Download and install:

```
wget https://github.com/digedu/bullet/archive/master.zip
apt-get install unzip
unzip master.zip
mv bullet-master /etc/bullet
rm master.zip
```

2) Edit the config script to add your company's teams and messaging:

```
nano /etc/bullet/config.php
```

3) Test the script output by running it in debug mode:

```
php /etc/bullet/bullet.php debug
```

4) Add the following line to cron (where 6 = the time of day you want to send the script):

```
0 6 * * * php /etc/bullet/bullet.php
```

### Background

Based on an idea by [Jason Roberts](http://www.codusoperandi.com/) as discussed in various episodes of [TechZing](http://techzinglive.com).

### License

Copyright digedu, MIT License