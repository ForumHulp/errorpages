Errorpages
===========

Error pages displays custom error pages in your forum. As an option all errors are logged in your errorlog.

[![Build Status](https://travis-ci.org/ForumHulp/errorpages.svg?branch=master)](https://travis-ci.org/ForumHulp/errorpages)

## Requirements
* phpBB 3.1.0-dev or higher
* PHP 5.3.3 or higher

## Installation
You can install this extension on the latest copy of the develop branch ([phpBB 3.1-dev](https://github.com/phpbb/phpbb3)) by doing the following:

1. Copy the [entire contents of this repo](https://github.com/ForumHulp/errorpages/archive/master.zip) to `FORUM_DIRECTORY/ext/forumhulp/errorpages/`.
2. Navigate in the ACP to `Customise -> Extension Management -> Manage extensions`.
3. Click Error pages => `Enable`.

Note: This extension is in development. Installation is only recommended for testing purposes and is not supported on live boards. This extension will be officially released following phpBB 3.1.0. Extension depends on two core changes.

## Update
1. Download the [latest ZIP-archive of `master` branch of this repository](https://github.com/ForumHulp/errorpages/archive/master.zip).
2. Navigate in the ACP to `Customise -> Extension Management -> Manage extensions` and click Error pages => `Disable`.
3. Copy the contents of `errorpages-master` folder to `FORUM_DIRECTORY/ext/forumhulp/errorpages/`.
4. Navigate in the ACP to `Customise -> Extension Management -> Manage extensions` and click Error pages => `Enable`.
5. Click `Details` or `Re-Check all versions` link to follow updates.
6. Or use our Upload Extensions extension

## Uninstallation
Navigate in the ACP to `Customise -> Extension Management -> Manage extensions` and click Error pages => `Disable`.

To permanently uninstall, click `Delete Data` and then you can safely delete the `/ext/forumhulp/errorpages/` folder or use our Upload Extensions extension to delet all files and folders.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2014 - John Peskens (ForumHulp.com)
