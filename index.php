<?php

// If the project name is not set we display the table of projects.
if (!isset($_GET["project"]))
  {
  header( 'location: viewProjects.php' );
  exit(0);
  }

/*
// Check if the project has any subproject
$Project = new Project();
$Project->Id = $projectid;
$Project->Fill();

$displayProject = false;
if( (isset($_GET["display"]) && $_GET["display"]=="project") ||
    (isset($_GET["parentid"]) && $_GET["parentid"] > 0) )
  {
  $displayProject = true;
  }

if(!$displayProject && !isset($_GET["subproject"]) && $Project->GetNumberOfSubProjects($date) > 0)
  {
  $xml = generate_subprojects_dashboard_XML($Project, $date);
  // Now doing the xslt transition
  generate_XSLT($xml,"indexsubproject");
  }
else
  {
  echo_main_dashboard_JSON($Project, $date);
  // Now doing the xslt transition
  if($xml)
    {
    if(isset($_GET["parentid"]))
      {
      generate_XSLT($xml,"indexchildren");
      }
    else
      {
      generate_XSLT($xml,"index");
      }
    }
  }
*/

include_once("cdash/common.php");
load_view("index");
?>
