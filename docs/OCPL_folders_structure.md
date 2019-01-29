# Description of OCPL folders structure

## 1. Inspirations and assumptions
	 - The idea of PHP universal structure of project: [https://github.com/php-pds/skeleton](https://github.com/php-pds/skeleton)
	 - OCPL needs some cleanup

## 2. TODOs:

	1. I'm not sure what is optimal way of handling these dirs: 
		- `/okapi`
		- `/mobile`
		- `/loogbook`
		- `/vendor`
		- `/xml`
	2. `/resources/` folder as new 'ocpl-dynamic'
		- is this a good idea to store in with git...?

## 3. Folders structure: root-level folders

### `/` (project root folder)
	- **access**: NO access for webserver (PHP not allowed)
	- finally it contains only:
		- README.md
		- LICENSE.txt
		- .htaccess
		- .gitignore
	- **migration**: all scripts from here will be temporary migrated to `/public`, but finally should be refactored to controllers  

### `/bin/` 
	- **access**: NO access for webserver (PHP not allowed) - only command line
	- root-level directory for command-line executable files
	- **migration:**  contains scripts which are used ONLY from command-line - now OCPL has such in :
		- `/ci`
		- `/util.sec`
		- ...?

### `/config/`
	- **access**: NO access from Internet, PHP allowed
	- root-level directory for configuration files
	- contains ONLY config files (PHP) 
	- **migration**: current `/Config` will be just renamed to `/config` + config scripts needs to be fixed

### `/docs/`
	- **access**: NO access for webserver (PHP not allowed)
	- root-level directory for documentation files
	- all doc files should be in markdown if possible
	- **migration** - no migration needed - folder stays as is :)

### `/public/`
	- **access**: NO access for webserver (PHP not allowed) - only command line
	- root-level directory for web server files
	- this folder contains in generally: 
		- index.php - the only PHP (dynamic) file here
		- JS files 
		- hosted JS libs (like tinyMCE)
		- CSSes
		- other STATIC files
	- folder structure - see below 
	- **migration** - see below

### `/resources/`
	- **access**: RW for webserver, PHP not allowed
	- a root-level directory for files which needs webserver RW access for uploaded files etc.
	- let's store main directory structure in git, but the content should be ignored (by git-ignore)
	- **migration** this should become more-less this what we called "ocpl-dynamic" so far

### `/src/`
	- **access**: No access from Internet, PHP allowed
	- a root-level directory for PHP source code files
	- folder structure - see below
	- **migration** - almost all PHP scripts shoudl finally land here, but we need to migrate it partially

## 4. `/public/` folder structure

### `/public/index.php`
	- **ENTRY POINT** to the whole OCPL code - this code should route requests to proper Controller
	- finally it should be THE ONLY (?) PHP script in `/public` folder	
	
### `/public/views/`
	- **contains** JS + CSS strictly specific for given view
	- structure of this folder should reflect structure of `/srv/Views/` folder
	- if given view has other static content (like images) which are usefull ONLY by this view
	these images can be stored here as well

### `/public/js/libs/`
	- **contains** JS external libs which are hosted in OCPL code (like tinyMCE)
	- every lib has its own folder + README file with description how to update this lib
	- JS shoudl be loaded to Views in OCPL code by ONE chunk (every lib has only one reference in PHP code)

### `/public/js/`
	- **contains** JS "common" scripts used by many views - but not external libs (see above)
	- TODO: do we need to store anything here ?!

### `/public/css/`
	- **contains** CSS "common" files used by many views
	- TODO: do we need to store anything here ?!

### `/public/img/`
	- **contains** common used images, icons etc.
	- images should be grouped in logical structure of folders
	- every folder with images should contains README file with description of origin/author of images

## 5. `/srv/` folder structure

### `/srv/Controllers/`
### `/srv/Models/`
### `/srv/Views/`
### `/srv/Utils/`
### `/srv/Libs/`
	- **contains** EXTERNAL PHP libraries hosted in OCPL code
	- every libraru should be stored in separate folder 
	- every folder should contain README with information about given lib + update description
### `/srv/`
