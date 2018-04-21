# Health It Forward 1.0
<!-- markdown-toc start - Don't edit this section. Run M-x markdown-toc-refresh-toc -->
**Table of Contents**

- [Summary](#summary)
- [Release Notes](#release-notes)
    - [Software Features](#software-features)
    - [Bug Fixes](#bug-fixes)
    - [Known Bugs and Defects](#known-bugs-and-defects)
- [Install Guide](#install-guide)
    - [Prerequisites](#prerequisites)
    - [Dependent Libraries](#dependent-libraries)
    - [Download Instructions](#download-instructions)
    - [Build Instructions](#build-instructions)
    - [Installation](#installation)
    - [Run Instructions](#run-instructions)
    - [Deployment Instructions](#deployment-instructions)
    - [Troubleshooting](#troubleshooting)

<!-- markdown-toc end -->


## Summary
This is a two semester project undertaken by five Georgia Tech undergrads to
create a forum for Parkinson's patients. 

A challenge in fighting diseases is the lack of communication between various
individuals that are affected by the illness. Patients miss out on new and
improved treatments because of lack of awareness. Doctors' abilities to create
new treatments and cures are inhibited. In order to improve the communication
between patients, doctors and caregivers, Health It Forward proposes to bring
them together in a forum-style website. 
  
This forum will be different from most other similar websites that are designed
for social and informal purposes. This forum is a platform for users to discuss
new and current treatments for Parkinson’s disease in a formal setting. Certain
patient information will be private to conform with the guidelines set by
**HIPAA**, which is a blanket law for electronic health records. Other health
benefit websites do not offer forums for open discussion, nor do they have
private messaging groups to discuss personal health history among patients. The
main goal of Health It Forward is to congregate all the said groups to increase
the visibility and the ease of access to discussions on health treatments, and
bring together the _aggregating outliers_.

There are individual cases where an unconventional or an experimental treatment
works wonders for an individual suffering from a life-threatening illness. If it
was possible to bring together, or in other words, aggregate this information to
a centralized forum, it will be available to other patients and they will have
more options in case the conventional medicine does not work for them. This is
called aggregating outliers.


## Release Notes
This section serves as a document which outlines the features and bugs present
in the Health It Forward platform as it exists at the time of the document's
creation: `version 1.0`.

### Software Features
In this initial release of Health It Forward, the software features of the
deliverable include mainly foundational capabilities integral to creating an
online forum:
* Website with **home page**, **about page**, and **forums page**
* Register/create an account on the site
* Set account _user type_ during registration with appropriate verification
    * Options: Patient, caregiver, medical professional
* Upload verification document when registering as medical professional
* User data permenance in the presence of a backend SQL database
* Logging in and logging out
* Profile viewing and editing
    * Edit name, user type, profile picture
* Forums based on user type
    * General forum for all users, patient-only forum, caregiver-only forum,
    medical professional-only forum
* Post threads onto forums as well as comments on threads
* Personal medical health surveys
    * Surveys are only limited to seven questions

### Bug Fixes
* Forums are now correctly restricted by user type
    * Earlier in the life of the site, a bug prevented user type from affecting
    user access to forums
* The general forums page is a forum instead of a page that links to the user-
specific forums

### Known Bugs and Defects
At the time of this document's creation, there are no known bugs in the system's
code


## Install Guide
This section serves as a document which anybody can use as a guide for setting
up the environment required for running and modifying the Health It Forward
system.

### Prerequisites
In order to be able to run the Health It Forward website, a server is required
to setup the backend database as well as run _Wordpress_. The **Windows 10
Operating System** is also required for the method outlined in this document
for setting up a server. The server used here is `WAMP`, described below and
[here](http://www.wampserver.com/en/).

In order to access and edit the website, an internet browser is also required.
For the development of this project, the most recent version of **Google
Chrome** was used.

### Dependent Libraries
The `WAMP` server is required for the website to run; it can be downloaded
on the `WAMP` [website](http://www.wampserver.com/en/) under the
_Download_ section.

**TODO: write about things like buddypress**

### Download Instructions
In order to download the code, simlpy go to the website's
[source page](https://github.com/vmurahari3/Health-It-Forward),
select the `Clone or download` dropdown, and select **Download ZIP**. This will
download all of the required source code for running the website, but building
the site will require additional setup, described below.

### Build Instructions
No build required as all of this code will be ran on off of _Wordpress_ and the
`WAMP` server.

### Installation
With the source downloaded (see **Download Instructions**) as well as the `WAMP`
server, start by installing the server.

In order to install the server, navigate to wherever it was downloaded and run
the downloaded installer, following the installer's instructions.

Once the `WAMP` server has been installed, a green icon on the lower righthand
corner of the screen should appear. Click on this icon, and then click on the
**phpMyAdmin** item. A new window in the default internet browser will open.
The username for this login page that opens is **root** with a blank password.

**TODO: keep going on with this**

### Run Instructions
To run the website, 

### Deployment Instructions
This section outlines how to deploy and host Health It Forward on a live
website.

The first step is to export the local site's backend database. This can be
accomplished by using phpMyAdmin. To do this, go to
`http://localhost/phpmyadmin/` and click on your Wordpress database (it should
be in a list of databases found on your machine). After clicking on the
Wordpress database, click on the **Export** buttom on the top menu. Once this
has been clicked, click on the **Quick** option.

Now open an FTP client and connect to a web hosting account. Upload files to the
right directory.

Next, create a MySQL database on the live site using phpMyAdmin. Once created,
add users to the database (again with phpMyAdmin). With the user added,
use phpMyAdmin to modify the user's privileges to be all.

Now import the Wordpress database into phpMyAdmin. Click on the previously
created database and hit the **import** option and choose the saved database
file.

This concludes how to deploy Health It Forward onto a live site.


### Troubleshooting
More detailed installation information for the server can be found
[here](http://www.wpbeginner.com/wp-tutorials/how-to-install-wordpress-on-your-windows-computer-using-wamp/).

More detailed deployment informatoin for the site can be found
[here](http://www.wpbeginner.com/wp-tutorials/how-to-move-wordpress-from-local-server-to-live-site/).
