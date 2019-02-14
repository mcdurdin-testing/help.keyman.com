<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanAddinsInstalled Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanAddinsInstalled Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanAddins.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanAddinsInstalled_Install.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanAddinsInstalled">IKeymanAddinsInstalled Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanAddinsInstalled_Install.php">IKeymanAddinsInstalled::Install</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanAddinsInstalled_Items.php">IKeymanAddinsInstalled::Items</a></span></dt></dl></div><p>
        interface IKeymanAddinsInstalled : 
        <a class="link" href="comapi_interface_IKeymanAddins.php" title="IKeymanAddins Interface">IKeymanAddins</a> : 
        <a class="link" href="comapi_interface_IKeymanCollection.php" title="IKeymanCollection Interface">IKeymanCollection</a> : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>Collection of all installed addins available to Keyman Engine</p><h5><a name="id667139"></a>Interface Methods</h5><table id="id667142"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanAddinsInstalled_Install.php" title="IKeymanAddinsInstalled::Install">Install</a></td><td>Method</td><td>Sub Install(Filename As String, Force As Boolean)</td></tr></table><h5><a name="id667162"></a>Interface Properties</h5><table id="id667165"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanAddinsInstalled_Items.php" title="IKeymanAddinsInstalled::Items">Items</a></td><td>Property Get</td><td>Property Get Items(Index) As IKeymanAddinInstalled</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanAddins.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanAddinsInstalled_Install.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanAddins Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanAddinsInstalled::Install</td></tr></table></div>