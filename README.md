# resterland/webatelier

Actually this project just contains a composer.json file which is the base of many of my TYPO3 projects.

This TYPO3 setup only works with `typo3/cms-core` `^11.5` or higher.

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
    - One part of the installation process above, was fetching `helhum/typo3-console`. This extension comes in handy with the next step of the installation.
    - Still on the command line insert following:

      `$ vendor/bin/typo3cms install:setup`

      This will lead you through the whole installation process.

        - just be aware, that you need a user, who has access to the database, otherwise you won't be able to install
          TYPO3 (This is for any TYPO3 installation the case).
        - However, a database itself you don't have to setup before. You can do this during the installation process.
        - At the set up configuration choose your site type. If you go with the default "no", then you will just have
          the possibility to open the backend as the frontend will give you an error. Because no site is configured,
          yet.
    - `Successfully installed TYPO3 CMS!`

That's it. Have fun!
