# lessphp frontend v1.0.0

`lessphp frontend` uses lessphp to compile LESS to disk or on the fly.
The documentation for lessphp is great, so check it out: <http://leafo.net/lessphp/docs/>.

Here's a quick tutorial:

### How to use in your PHP project
* Download lessphp frontend archive. https://github.com/andrew13/lessphp-frontend/downloads
* Unzip the downloaded package.
* Upload the folder to your web server, for better overview its recommended to use the directory that includes your CSS files.
* Place this script tag inside of your head tag:
```
<script type="text/javascript" src="path_to_lesscssfe/"></script>
```
* Edit the configuration file config.php as needed.
* Insert a link tag with the path to your master stylesheet in the same file with the script tag but, below it.
* If you are not using a master file put your CSS link tags directly in your HTML
* Make sure your CSS directory has chmod 750 or above.
* Navigate to the file with the lesscssfe script tag in your browser
* It's done! But don't forget to comment out the script tag once you're done.
* So the visitors don't have to compile lesscssfe over and over again.

### Thanks
* Thanks to leafo for create lessphp a port of less. https://github.com/leafo/lessphp
