# resterland/webatelier

This is a composer package to create a new TYPO3 project.

It includes the goodies of `helhum/typo3-secure-web`. This package currently works
on TYPO3 9.5

## Create new TYPO3-Project

`$ composer create-project resterland/webatelier YourNewProjectFolder`

This will install TYPO3 with the following system extensions

		"helhum/typo3-secure-web": "^0.2.7",
		"helhum/typo3-console": "^5.6",
		"typo3/cms-scheduler": "^9.5",
		"typo3/cms-adminpanel": "^9.5",
		"typo3/cms-beuser": "^9.5",
		"typo3/cms-form": "^9.5",
		"typo3/cms-impexp": "^9.5",
		"typo3/cms-redirects": "^9.5",
		"typo3/cms-reports": "^9.5",
		"typo3/cms-setup": "^9.5",
		"typo3/cms-sys-note": "^9.5",
		"typo3/cms-t3editor": "^9.5",
		"typo3/cms-tstemplate": "^9.5",
		"typo3/cms-viewpage": "^9.5",
		"typo3/cms-info": "^9.5",
		"typo3/cms-rte-ckeditor": "^9.5",
		"typo3/cms-filemetadata": "^9.5",
		"typo3/cms-indexed-search": "^9.5",
		"typo3/cms-seo": "^9.5",
		"typo3/cms-lowlevel": "^9.5",
		"typo3/cms-linkvalidator": "^9.5",
		"typo3/cms-felogin": "^9.5",
		"typo3/cms-belog": "^9.5",

as well as:

		"causal/image_autoresize": ">=1.9 <2.0.0"
