<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled::GetKeyboardFromFile"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanKeyboardsInstalled::GetKeyboardFromFile</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboardsInstalled_Items.php">Prev</a> </td><th width="60%" align="center">IKeymanKeyboardsInstalled Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboardsInstalled_Install.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanKeyboardsInstalled_GetKeyboardFromFile"><a class="link" href="comapi_interface_IKeymanKeyboardsInstalled.php" title="IKeymanKeyboardsInstalled Interface">IKeymanKeyboardsInstalled</a>::GetKeyboardFromFile</h5></div></div></div><p>
            Loads the keyboard file referred to by Filename and returns details about the file.  Does not install the keyboard for use.
          </p><h6><a name="id613551"></a>Declaration</h6><pre class="programlisting">Function GetKeyboardFromFile(Filename as String) as IKeymanKeyboardFile</pre><h6><a name="id613557"></a>Parameters</h6><table id="id613559"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>File</td><td>String</td><td>Full path and filename of the keyboard to load</td></tr></table><h6><a name="id613582"></a>Return Value</h6><a class="link" href="comapi_interface_IKeymanKeyboardFile.php" title="IKeymanKeyboardFile Interface">IKeymanKeyboardFile</a><h6><a name="id613588"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanKeyboardsInstalled_Items.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanKeyboardsInstalled.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanKeyboardsInstalled_Install.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanKeyboardsInstalled::Items </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanKeyboardsInstalled::Install</td></tr></table></div>