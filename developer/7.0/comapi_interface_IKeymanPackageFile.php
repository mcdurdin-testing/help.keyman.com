<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanPackageFile Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageInstalled_Uninstall.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageFile_Graphic.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="comapi_interface_IKeymanPackageFile"></a>IKeymanPackageFile Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanPackageFile_Graphic.php">IKeymanPackageFile::Graphic</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanPackageFile_Install.php">IKeymanPackageFile::Install</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanPackageFile_ReadMe.php">IKeymanPackageFile::ReadMe</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanPackageFile_SubFiles.php">IKeymanPackageFile::SubFiles</a></span></dt></dl></div><p>
        interface IKeymanPackageFile : 
        <a class="link" href="comapi_interface_IKeymanPackage.php" title="IKeymanPackage Interface">IKeymanPackage</a> : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        Describes a Keyman Package file that has not been installed.
      </p><h5><a name="id766928"></a>Interface Methods</h5><table id="id766931"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanPackageFile_Install.php" title="IKeymanPackageFile::Install">Install</a></td><td>Method</td><td>Sub Install(AllUsers As Boolean, Force As Boolean, ShortcutRootPath As String)</td></tr></table><h5><a name="id766951"></a>Interface Properties</h5><table id="id766954"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanPackageFile_Graphic.php" title="IKeymanPackageFile::Graphic">Graphic</a></td><td>Property Get</td><td>Property Get Graphic As stdole.IPicture</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanPackageFile_ReadMe.php" title="IKeymanPackageFile::ReadMe">ReadMe</a></td><td>Property Get</td><td>Property Get ReadMe As String</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanPackageFile_SubFiles.php" title="IKeymanPackageFile::SubFiles">SubFiles</a></td><td>Property Get</td><td>Property Get SubFiles As IKeymanPackageSubFiles</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackageInstalled_Uninstall.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanPackageFile_Graphic.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanPackageInstalled::Uninstall </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanPackageFile::Graphic</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>