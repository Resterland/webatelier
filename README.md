# resterland/webatelier

This is my composer package to create a new TYPO3 project.

It is based on the superb composer package `helhum/typo3-secure-web` by Helmut Hummel.

This TYPO3 setup only works with `typo3/cms-core` `^9.5` or higher.

## How it works
1. Create new TYPO3-Project:

    `$ composer create-project resterland/webatelier YourNewProjectFolder`

    Of course you should replace "YourNewProjectFolder" with your own project name.

    Hit the Enter-key and the magic takes its course.
    Composer will fetch and install all the necessary files and packages needed for the real TYPO3-Installation process.

2. Do you want to remove the existing VCS (.git, .svn..) history? [Y,n]?

    This is the question just at the end of the fetching process.

    As you don't use the VCS history anymore just go with the "Y".
3. Install TYPO3-CMS with command line (recommended)

    - change to your new created project folder

        `$ cd YourNewProjectFolder`
    - As you can see now, the base structure of your new project is already in place.
    - One part of the installation above, fas fetching `helhum/typo3-console`. This comes in handy with the next step of the installation.
    - Still on the command line insert following:

        `$ vendor/bin/typo3cms install:setup`

        This will lead you through the whole installation process.

        -  just be aware, that you need a user, who has access to the database, otherwise you won't be able to install TYPO3 (This is for any TYPO3 installation the case).
        - However, a database itself you don't have to setup before. You can do this during the installation process.
        - At the set up configuration choose your site type. If you go with the default "no", then you will just have the possibility to open the backend as the frontend will give you an error. Because no site is configured, yet.
    - That's it `Successfully installed TYPO3 CMS!`
## Increase Security
Although the setup with the `helhum/typo3-secure-web` is already quite secure, as it separates server document root inside the `public` folder and the TYPO3 files and directories inside the `private` folder, you can increase security further (see https://github.com/helhum/typo3-secure-web for more details).

For this approach you need to install `helhum/typo3-config-handling` another outstanding extension written by Helmut Hummel:

`$ composer require helhum/typo3-config-handling:^1.0@beta`

Why @beta? Because the latest stable release `0.7.3` is not compatible with TYPO3 ^9 and higher.

(see https://github.com/helhum/typo3-config-handling for more details)

That's it. Have fun!
