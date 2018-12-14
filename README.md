# webatelier

This repository is for me to learn how to set-up TYPO3 based pojects.

## Create new TYPO3-Project

$ composer create-project resterland/webatelier YourNewProjectFolder

This will install TYPO3 with system extensions I usually need
as well as following extensions:
- causal/image_autoresize
- bk2k/bootstrap-package 
- resterland/resterland

## Existing Project

$ cd ./YourProjectFolder

### Make sure a composer.json file exists

$ composer require resterland/webatelier
