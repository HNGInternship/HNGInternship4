# Hotel.NG Internship 4



Table of Contents
=================
  * [Introduction](#introduction)
  * [Stage 0](#stage-0)
  * [Stage 1](#stage-1-setting-up-of-environment-for-coding)
      * [Pre-requisite](#pre-requisite)
      * [Task](#task)
  * [Stage 2](#stage-2-learning-collaborative-coding)


---
## Introduction
 Please invite others who are interested in learning to code. Use this link: [Click Me!](https://bit.ly/2Jv2VNj)

> Please do invite all others who may be interested in the internship

Notice: 
*Setting up your profile information such as, names, display names, what you can do, (off-course that will change as soon as you learn on), profile image, phone number and status is very important.*


**Please set your profile picture - we always disable all those without profile pictures**
---
## Stage 0
*If you know you have no knowledge of programming at all, join [#stage0](https://hnginternship4.slack.com/archives/CA2BESFFA)*

As soon as you complete stage 1 task, please exit stage0 channel

---
## Stage 1 (Setting up of environment for Coding)

### Pre-requisite
1. Set your profile picture.
2. Setup a Git account and learn how to use Git. 
    * Free GitHub private account for the next 1 year. Use this link to redeem: [https://github.com/redeem/hng_ingressive_github](https://github.com/redeem/hng_ingressive_github), or use the coupon code HNG_INGRESSIVE_GITHUB on your existing github account. Once done, give a shout-out to @GitHubCommunity @GitHubEducation and @_Ingressive_ on Twitter
3. Setup a Figma account. 
    * Figma is the first interface design tool with real-time collaboration. It keeps everyone on the same page. Focus on the work instead of fighting your tools.

    1. Go to [figma.com](figma.com)
    2. Click Sign Up at the top right side of your screen
    3. Enter your details and Sign Up
    4. Go to your MailBox for a confirmation link which returns you back to your figma profile
    5. Click the + sign at the top left side of your screen to get started
    
4. Download and install Docker. 
    * #### Guide for installing docker on windows Method 1

        Step 1 - Make sure you have Microsoft 64bit Windows 10 Pro, Enterprise and Education (1607 Anniversary Update, Build 14393 or later).

        Step 2 - Make sure your system supports virtualization and *make sure it is enabled*

        Step 3 - Go to https://docs.docker.com/docker-for-windows/install/

        Step 4 - Download the stable version community edition

        Step 5 - Double click on your *Docker for windows installer.exe* file and follow all the prompt the install wizard gives

        Step 6 After docker has been installed locate the docker icon and start up docker

        Step 7 After docker has started, open your terminal and type the command `docker -version` if everything went smoothly it should output the version of docker installed

        Step 8 Run the command `docker run hello-world` then it should build your very first docker container. Once this is successful, you're all set and ready to go

    * #### Guide for installing docker on windows Method 2
        If your system doesn't meet the specifications for installing docker, you can install docker toolbox instead

        *Note* For people whose windows operating system is maybe Windows 10 home or windows 7, or not 1607 Anniversary Update, Build 14393 or later

        Also for people whose system does not support virtualization

        Step 1 - Go to https://docs.docker.com/toolbox/toolbox_install_windows/

        Step 2 - Download docker toolbox from that link

        Step 3 - Double click on the docker toolbox installer 

        Step 4 - Follow all the prompts in the setup wizard

        Step 5 - After installation is complete, look for the Docker quick start icon and lunch, a bash window should open

        Step 6 - When the bash window is open, once docker starts you should see the docker symbol drawn command line style and most importantly you would see a $ symbol with your keyboard cursor blinking

        Step 7 - To verify your installation, type the command `docker run hello-world` then if that runs successfully, you are set to go
        
    * #### Guide for installing docker on Ubuntu 16.04 and 17.10

        Make sure you're using a user that has *`sudo`* privileges
        *NOTE!!!*
        Do not run these commands as a root user i.e. your terminal would use the # symbol, always make sure you're seeing this symbol $
        I take no responsibility for what ever damage you incur on your system if you do the wrong thing

        Step 1 - Update the `apt` package index

         ```$ sudo apt-get update```

        Step 2 - Install packages to allow `apt` to use a repository over HTTPS
        
        ```$ sudo apt-get install apt-transport-https ca-certificates curl software-properties-common -y```
            
        Step 3 - Add docker's official GPG key

        ```$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -```

       
        Step 4 - Add the Docker repository to APT sources

        ```$ sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"```
 
        Step 5 - Update the `apt` package index

        ```$ sudo apt-get update```

        Step 6 - Finally, install docker-ce

        ```$ sudo apt-get install docker-ce```

        Step 7 - Verify docker has been installed

        ```$ sudo docker run hello-world```

        If this runs successfully, then you're almost golden.

    * #### Guide for Executing the Docker Command Without Sudo

        Step 1 - Create docker group

        ```$ sudo groupadd docker```

        Step 2 - Add your user to the `docker` group.

        ```$ sudo usermod -aG docker ${USER}```
        Step 3 - Log out and log back in so that your group membership is re-evaluated.

        If testing on a virtual machine, it may be necessary to restart the virtual machine for changes to take effect.

        On a desktop Linux environment such as X Windows, log out of your session completely and then log back in.

        Step 4 - Verify that you can run `docker` commands without `sudo`.

        ```$ docker run hello-world```

        If this works then you're done

    * #### Guide for installing docker-compose on Ubuntu 16.04 and 17.10
    
        Step 1 - Add the repo to your system

        ```$ sudo curl -L https://github.com/docker/compose/releases/download/1.21.0-rc1/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose```

        Step 2 - Set the permissions

        ```$ sudo chmod +x /usr/local/bin/docker-compose```

        Step 3 - Check your docker-compose version

        ```docker-compose -version```

        Your output should be something like this

        ```docker-compose version 1.21.0, build 1d32980```

    * #### Guide for installing docker-machine on Ubuntu 16.04 and 17.10

        Step 1 - Copy this command as it is and paste in your terminal

        ```$ sudo curl -L https://github.com/docker/machine/releases/download/v0.14.0/docker-machine-`uname -s`-`uname -m` >/tmp/docker-machine &&
            sudo chmod +x /tmp/docker-machine &&
            sudo cp /tmp/docker-machine /usr/local/bin/docker-machine```

        Step 2 - Run this command to verify docker-machine has been installed

        ```$ docker-machine -version```

        Your output should be something like this

        ```docker-machine version 0.14.0, build 89b8332```
        After all this, you're golden, docker is now fully installed on your Ubuntu machine
        
5. Get a basic PHP environment working on your system (Hello World).

### Task
To pass stage 1, 
Go to [#stage1](https://hnginternship4.slack.com/messages/CA2DJC5JB)
You will need the following:

1. Design a very simple page in Figma
2. Implement it in html/css (this design should include showing the current time using php)
3. Setup docker
4. Get php to run in docker
4. Make your app work on your local browser
5. Your app must show properly
6. You will need to submit a screenshot to pass to Stage 2


---
## Stage 2 (Learning Collaborative Coding.):

To pass stage 2,
1. Create a Github Account (If you dont already have one)
2. Create a new Repository (Use any name)
3. Push your HTML Page from Stage 1 Task to the new Repository
5. Post your Repository URL to #results

4. Alert a Mentor to add you to the HNG 4.0 GitHub Organization

5. Clone the HNG4.0 Repository
6. Open Contributors.txt and add your name at the end. 
7.  Commit your change
8. Pull Repository
9. Resolve Merge Conflict if any
10.  Push your code.
11. Alert a Mentor to Review.
