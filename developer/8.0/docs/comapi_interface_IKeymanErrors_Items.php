<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanErrors::Items"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanErrors::Items</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanErrors_Clear.php">Prev</a> </td><th width="60%" align="center">IKeymanErrors Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanErrors_RebootRequired.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanErrors_Items"><a class="link" href="comapi_interface_IKeymanErrors.php" title="IKeymanErrors Interface">IKeymanErrors</a>::Items</h5></div></div></div><p>Returns a KeymanError from the collection</p><h6><a name="id620905"></a>Declaration</h6><pre class="programlisting">Property Get Items(Index As Long) As IKeymanError</pre><h6><a name="id620911"></a>Parameters</h6><table id="id620913"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>Index</td><td>Long</td><td>1-based index of KeymanError to retrieve</td></tr></table><h6><a name="id620936"></a>Return Value</h6><a class="link" href="comapi_interface_IKeymanError.php" title="IKeymanError Interface">IKeymanError</a><h6><a name="id620942"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanErrors_Clear.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanErrors.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanErrors_RebootRequired.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanErrors::Clear </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanErrors::RebootRequired</td></tr></table></div>