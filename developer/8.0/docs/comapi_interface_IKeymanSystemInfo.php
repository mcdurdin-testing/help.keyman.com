<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanSystemInfo Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanSystemInfo Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackagesInstalled_Items.php">Prev</a> </td><th width="60%" align="center">Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanSystemInfo_EngineInstallPath.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="comapi_interface_IKeymanSystemInfo">IKeymanSystemInfo Interface</h4></div></div></div><div class="toc"><dl><dt><span class="section"><a href="comapi_interface_IKeymanSystemInfo_EngineInstallPath.php">IKeymanSystemInfo::EngineInstallPath</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanSystemInfo_EngineVersion.php">IKeymanSystemInfo::EngineVersion</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanSystemInfo_IsAdministrator.php">IKeymanSystemInfo::IsAdministrator</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanSystemInfo_Refresh.php">IKeymanSystemInfo::Refresh</a></span></dt><dt><span class="section"><a href="comapi_interface_IKeymanSystemInfo_RunDiagnostics.php">IKeymanSystemInfo::RunDiagnostics</a></span></dt></dl></div><p>
        interface IKeymanSystemInfo : 
        <a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a> : 
        IDispatch</p><p>
        Returns information about the Keyman Engine installation and allows access to the diagnostic tool.
      </p><h5><a name="id609844"></a>Interface Methods</h5><table id="id609847"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanSystemInfo_Refresh.php" title="IKeymanSystemInfo::Refresh">Refresh</a></td><td>Method</td><td>Sub Refresh</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanSystemInfo_RunDiagnostics.php" title="IKeymanSystemInfo::RunDiagnostics">RunDiagnostics</a></td><td>Method</td><td>Sub RunDiagnostics</td></tr></table><h5><a name="id609878"></a>Interface Properties</h5><table id="id609880"><tr><th>Name</th><th>Type</th><th>Declaration</th></tr><tr><td><a class="link" href="comapi_interface_IKeymanSystemInfo_EngineInstallPath.php" title="IKeymanSystemInfo::EngineInstallPath">EngineInstallPath</a></td><td>Property Get</td><td>Property Get EngineInstallPath As String</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanSystemInfo_EngineVersion.php" title="IKeymanSystemInfo::EngineVersion">EngineVersion</a></td><td>Property Get</td><td>Property Get EngineVersion As String</td></tr><tr><td><a class="link" href="comapi_interface_IKeymanSystemInfo_IsAdministrator.php" title="IKeymanSystemInfo::IsAdministrator">IsAdministrator</a></td><td>Property Get</td><td>Property Get IsAdministrator As Boolean</td></tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanPackagesInstalled_Items.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interfaces.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanSystemInfo_EngineInstallPath.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanPackagesInstalled::Items </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanSystemInfo::EngineInstallPath</td></tr></table></div>