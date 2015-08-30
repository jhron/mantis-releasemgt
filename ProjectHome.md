This plugin was originally created, together with his own [plugin-in system](http://deboutv.free.fr/mantis/plugin.php?plugin=PluginManager) for Mantis, by **Vincent Debout**.

Original plugin can be found here http://deboutv.free.fr/mantis/plugin.php?plugin=ReleaseMgt

However Vincent had no more time to maintain this plugin and it become incompatible with newer versions of Mantis (I don't know from which version exactly).

I adapted this plugin so it is directly compatible with new Mantis plugin system. And after executing sql script can new plugin use data from old plugin. So who is still using old version of this plugin will be able to use they old data (in case that for storage was used local disk).

**For the moment I did conversion of those features**:
  * Disk file storage type
  * Email notification (to developer and/or user who reports a bug).

**What is not yet converted (functional)**
  * Remote FTP file storage type
  * Database file storage type

[Description](Description.md)
[Installation](Installation.md)