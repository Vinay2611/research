<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 04-12-2018
 * Time: 10:22
 */

//filename: websiteguard.php
//--------------------------------------------------------------//
// Purpose: To deny access for spambots, spybots and other bad agents.
// When the useragent is a good one it allows, otherwise your
// php page will stop working and
// protects your website from badbots.
// Inputs: UserAgent string
// Author: Allthewebsites Webmaster [ webmaster AT allthewebsites DOT org ]
// Version: 1.0.0
//---------------------------------------------------------------//
$thisAgent  = $HTTP_SERVER_VARS["HTTP_USER_AGENT"];
//--- Call the function
WebsiteGuard();
//---------------------------------------------------------------//
function WebsiteGuard()
{
    global $thisAgent;
    $isDenied = false;
    if (preg_match("/webzip|httrack|wget|FlickBot|downloader|production
  bot|superbot|PersonaPilot|NPBot|WebCopier|vayala|imagefetch|
  Microsoft URL Control|mac finder|
  emailreaper|emailsiphon|emailwolf|emailmagnet|emailsweeper|
  Indy Library|FrontPage|cherry picker|WebCopier|netzip|
  Share Program|TurnitinBot|full web bot|zeus/i",$thisAgent))
    {
        $isDenied = true;
        // Customize this message :-)
        print("Do not disturb...Zzz...\n");
        exit();
    }
}
//--------------------------------------------------------------//