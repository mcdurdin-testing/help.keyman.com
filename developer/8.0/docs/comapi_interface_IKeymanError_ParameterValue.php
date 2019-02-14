<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanError::ParameterValue"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanError::ParameterValue</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanError_ParameterCount.php">Prev</a> </td><th width="60%" align="center">IKeymanError Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanError_Severity.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanError_ParameterValue"><a class="link" href="comapi_interface_IKeymanError.php" title="IKeymanError Interface">IKeymanError</a>::ParameterValue</h5></div></div></div><p>
            Returns the value of the parameter, as a string.  All parameters values are returned as strings
          </p><h6><a name="id621307"></a>Declaration</h6><pre class="programlisting">Property Get ParameterValue(Index As Long) As String</pre><h6><a name="id621313"></a>Parameters</h6><table id="id621315"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>Index</td><td>Long</td><td>1-based index of the Parameter Value</td></tr></table><h6><a name="id621338"></a>Return Value</h6>String<h6><a name="id621342"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanError_ParameterCount.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanError.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanError_Severity.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanError::ParameterCount </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanError::Severity</td></tr></table></div>