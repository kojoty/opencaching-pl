# Description of OCPL folders structure

1. Inspirations and assumptions
------------
	 - The idea of PHP universal structure of project: [https://github.com/php-pds/skeleton](https://github.com/php-pds/skeleton)
	 - OCPL needs some cleanup

2. TODOs:
------------
	1. I'm not sure what is optimal way of handling these dirs: 
		- `/okapi`
		- `/mobile`
		- `/loogbook`
		- `/vendor`
		- `/xml`
	2. `/resources/` folder as new 'ocpl-dynamic'
		- is this a good idea to store in with git...?

3. Folders structure: root-level folders
------------
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

4. `/public/` folder structure
------------
### `/public/index.php`
	- ENTRY POINT to the whole OCPL code - this cde shoudl route requests to proper Controller
	- finally it should be the only PHP script in `/public` folder
	
### `/public/js/libs/`
	- JS external libs which are hosted in OCPL code (like tinyMCE)
	- every lib has its own folder + README file with description how to update this lib
	- JS shoudl be loaded to Views in OCPL code by ONE chunk (every lib has only one reference in PHP code)
	
### `/public/js/`


### `/public/css/`
### `/public/views/`
### `/public/images/`

5. `/srv/` folder structure
### `/srv/Controllers/`
### `/srv/Models/`
### `/srv/Views/`
### `/srv/Utils/`
### `/srv/Libs/`
### `/srv/`
