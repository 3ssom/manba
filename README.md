CONTENTS OF THIS FILE 
---------------------

 * SUMMARY
 * Requirements
 * Installation
 * Configuration
 * Gitflow Workflow
 * Maintainers

-- SUMMARY --
 * Open Source Platform (Manba’a).

-- Requirements (Preferred) --
- Docker.
- Lando.

-- INSTALLATION --
* Clone this repo and use branch "main" as a master.
* Use Lando to fire up the project locally "lando start".

-- CONFIGURATION --
 * Use Lando to set up Database, Configuration after cloning main branch as mentioned above.
   - First import DB using, "lando db-import database-file.sql" (Ask for a copy).
   - Run "lando composer install" or "composer install".
   - Then import latest configuration using, "lando drush cim".
   - Put the right setting.php file in (web/sites/default) path, use "lando info" to see your DB creds.

-- Gitflow Workflow --
* Main branches for Manba’a environments: 
  - Development environment branch (main).
* Feature Branch Workflow:
  - Create new issue using Github issues page.
  - Create new branch from the issue off the (main) branch.
  - Pushing new feature work when main branch is ready/done.
  - Merge it into "main" branch by creating new Pull Request in the branch page using Github UI.

-- Maintainers --
* Essam AlQaie (3ssom) - https://www.drupal.org/u/3ssom
* Mohammed Abdullah Bamlhes (bamlhes) - https://www.drupal.org/u/bamlhes
* Musab Basudan (musabbasudan) - https://www.drupal.org/u/musabbasudan
* Raed Alkhurayji (raedkhurayji) - https://www.drupal.org/u/raedkhurayji
