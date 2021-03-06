[![Bancha logo](http://docs.banchaproject.com/wiki/images/github-logo.png)](http://banchaproject.com)

Bancha Sample Project
=============================

This is the development playground for Bancha developers, providing sample of how to use Bancha.

[Live demo](http://samples.banchaproject.com)


How to setup the project
------------------------

__CakePHP Setup:__

1. Download [CakePHP](http://www.cakephp.org) latest (tested with 2.1)
1. Download this project inside __/app__
1. Configure your _app/Config/database.php_, then go in your console inside _app/_ and execute _"./Console/cake" schema create_ to create all the tables
1. Open __/bancha/setup-check.html__ to see if everything works.

__For ExtJS Support:__

1. Download [ExtJS 4](http://www.sencha.com/products/extjs/download/).
1. Place _ext-all.js_ and _ext-all-dev.js_ inside _app/webroot/js/_ and the ExtJS ressources folder into _app/webroot/css/_

__For Sencha Touch Support:__

1. Download [Sencha Touch 2](http://www.sencha.com/products/touch/download/).
1. Place _sencha-touch-all-debug.js_ and the _resources_ folder inside _app/webroot/js/touch/sencha-touch/_



That's it, enjoy!



More information
----------------

*   [Bancha Overview](http://banchaproject.org/)
*   [Updates on Twitter](http://twitter.com/#!/banchaproject)

-------------------------

_This package is not for production use. It includes multiple licences, 
everything works under GNU General Public License version 3 as far as we 
know, but there is no warranty._

THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.