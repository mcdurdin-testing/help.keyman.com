<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::UnregisterControllerWindow"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanControl::UnregisterControllerWindow</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanControl_StopVisualKeyboard.php">Prev</a> </td><th width="60%" align="center">IKeymanControl Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanControl_VisualKeyboardVisible.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanControl_UnregisterControllerWindow"><a class="link" href="comapi_interface_IKeymanControl.php" title="IKeymanControl Interface">IKeymanControl</a>::UnregisterControllerWindow</h5></div></div></div><p>
            Unregisters a window from the list of controller windows.  Used by Keyman Controllers.
          </p><h6><a name="id600287"></a>Declaration</h6><pre class="programlisting">Sub UnregisterControllerWindow(Value As Long)</pre><h6><a name="id600293"></a>Parameters</h6><table id="id600295"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>Value</td><td>Long</td><td>Handle to Window</td></tr></table><h6><a name="id600318"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanControl_StopVisualKeyboard.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanControl.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanControl_VisualKeyboardVisible.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanControl::StopVisualKeyboard </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanControl::VisualKeyboardVisible</td></tr></table></div>