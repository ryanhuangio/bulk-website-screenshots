# Bulk Website Screenshots (Headless Chrome)
Bulk Website Screenshots will automate the task of converting a list of website URLs into screenshots of each website. Bulk Website Screenshots Google Chrome's command line interface, or Headless Chrome (it is headless because it does not have a GUI, the head) to take the screenshots.

**Requirements:**
 * MacOS, Linux or Windows (you need to configure path to Chrome for Linux and Windows)
  * PHP 7/8
  * Google Chrome 59+
  * coreutils

This script was created and tested with MacOS Big Sur (11.5.2), PHP (8.0.9) and Google Chrome (94.0.4606.81).

**Instructions:**

 1. Install coreutils with
    MacOS:
    > brew install coreutils
    
    Windows (Chocolatey package manager required):
    > choco install gnuwin32-coreutils.install
 2. Open screenshot-shell-generator.php and add your list of URLs to $domain variable.
 3. Please run this command:

    > php screenshot-shell-generator.php > create-screenshots.sh && sh
    > create-screenshots.sh
