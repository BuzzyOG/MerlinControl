<?php
$to = $_POST['user_email'];
$subject = "A big warm welcome " . $_POST['user_name'] . "!";

$message = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
 
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>Welcome to the Merlin Community</title>
  <style type='text/css'>
  body {margin: 0; padding: 0; min-width: 100%!important;}
  img {height: auto;}
  .content {width: 100%; max-width: 600px;}
  .header {padding: 40px 30px 20px 30px;}
  .innerpadding {padding: 30px 30px 30px 30px;}
  .borderbottom {border-bottom: 1px solid #f2eeed;}
  .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
  .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
  .h1 {font-size: 33px; color: #ffffff !important; line-height: 38px; font-weight: bold;}
  .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
  .bodycopy {font-size: 16px; line-height: 22px;}
  .button {text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;}
  .button a {color: #ffffff; text-decoration: none;}
  .footer {padding: 20px 30px 15px 30px; background-color: #222}
  .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;}
  .footercopy a {color: #ffffff; text-decoration: none; text-transform;}
  .smaller { font-size:12px; line-height: 16px;}
  .linked { text-decoration:none; color: rgb(224, 84, 67);}
  .red-button {background-color:#ec2125!important;color:#FFF;line-height:11px;font-size:11px;background-size:12px;display:inline;text-transform:uppercase;-webkit-font-smoothing:antialiased;font-family:san-serif;color: #ffffff !important;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;border:transparent;margin:0 5px 0 0;padding:9px 23px 11px 11px; background-image: url(http://merlin.luke.sx/assets/img/right-arrow.png); background-repeat: no-repeat; background-position: center right;}
  .red-button > a {color:white; text-decoration:none;}

  @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
  body[yahoo] .hide {display: none!important;}
  body[yahoo] .buttonwrapper {background-color: transparent!important;}
  body[yahoo] .button {padding: 0px!important;}
  body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
  body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
  }

  /*@media only screen and (min-device-width: 601px) {
    .content {width: 600px !important;}
    .col425 {width: 425px!important;}
    .col380 {width: 380px!important;}
    }*/

  </style>
</head>

<body yahoo bgcolor='#f6f8f1'>
<table width='100%' bgcolor='#f6f8f1' border='0' cellpadding='0' cellspacing='0'>
<tr>
  <td>
    <!--[if (gte mso 9)|(IE)]>
      <table width='600' align='center' cellpadding='0' cellspacing='0' border='0'>
        <tr>
          <td>
    <![endif]-->     
    <table bgcolor='#ffffff' class='content' align='center' cellpadding='0' cellspacing='0' border='0'>
      <tr>
        <td bgcolor='#222' class='header'>
          <table width='70' align='left' border='0' cellpadding='0' cellspacing='0'>  
            <tr>
              <td height='70' style='padding: 0 20px 20px 0;'>
                <img class='fix' src='http://merlin.luke.sx/assets/img/merlin.png' width='70' height='70' border='0' alt='' />
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
            <table width='425' align='left' cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td>
          <![endif]-->
          <table class='col425' align='left' border='0' cellpadding='0' cellspacing='0' style='width: 100%; max-width: 425px;'>  
            <tr>
              <td height='70'>
                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td class='subhead' style='padding: 0 0 0 3px;'>
                      WELCOME TO
                    </td>
                  </tr>
                  <tr>
                    <td class='h1' style='padding: 5px 0 0 0;'>
                      The Merlin Community
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
      <tr>
        <td class='innerpadding borderbottom'>
          <table width='100%' border='0' cellspacing='0' cellpadding='0'>
            <tr>
              <td class='h2'>
                Thanks for registering " . $_POST['user_name'] . ",
              </td>
            </tr>
            <tr>
              <td class='bodycopy'>
                All you need to do now is verify you account, to do that you can either click on the link below to make this process automatic or go to <a class='linked' href='http://merlin.luke.sx/verifyemail'>http://merlin.luke.sx/verifyemail</a> and enter your 12 digit code.
                <h1 class='h2'>" . $cuthashtime . "-" . $middlehashname . "-" . $endhashtime . "</h1>
                <tr>
                    <td style='padding: 0 0 0 0;'>
                      <table class='buttonwrapper' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                          <td class='red-button' height='45'>
                            <a href='http://merlin.luke.sx/verifyemail?id=" . $codeid . "&" . $code2 . "=" . $code3 . "'>Confirm Registration</a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td class='innerpadding borderbottom'>
          <table width='115' align='left' border='0' cellpadding='0' cellspacing='0'>  
            <tr>
              <td height='115' style='padding: 0 20px 20px 0;'>
                <img class='fix' src='http://merlin.luke.sx/assets/img/merlin.png' width='115' height='115' border='0' alt='' />
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
            <table width='380' align='left' cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td>
          <![endif]-->
          <table class='col380' align='left' border='0' cellpadding='0' cellspacing='0' style='width: 100%; max-width: 380px;'>  
            <tr>
              <td>
                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <td class='h2'>
                      Merlin Development<br>
                    </td>
                  <tr>
                    <td class='bodycopy'>
                      Professional website design and development tailormade around your needs. Plan all repsonsive bespoke web project here, we'd love to help you out.
                    </td>
                  </tr>
                  <tr>
                    <td style='padding: 20px 0 0 0;'>
                      <table class='buttonwrapper' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                          <td class='red-button' height='45'>
                            <a href='#'>See our work</a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
      <tr>
        <td class='innerpadding borderbottom'>
          <table width='115' align='left' border='0' cellpadding='0' cellspacing='0'>  
            <tr>
              <td height='115' style='padding: 0 20px 20px 0;'>
                <img class='fix' src='http://merlin.luke.sx/assets/img/MerlinGreen.png' width='115' height='115' border='0' alt='' />
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
            <table width='380' align='left' cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td>
          <![endif]-->
          <table class='col380' align='left' border='0' cellpadding='0' cellspacing='0' style='width: 100%; max-width: 380px;'>  
            <tr>
              <td>
                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <td class='h2'>
                      Merlin Control<br>
                    </td>
                  <tr>
                    <td class='bodycopy'>
                      It's like a CMS, but better. Manage all of your web content from your pre-developed site by us and track real time statistics. Add features and so much more.
                    </td>
                  </tr>
                  <tr>
                    <td style='padding: 20px 0 0 0;'>
                      <table class='buttonwrapper' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                          <td class='red-button' height='45'>
                            <a href='#'>Your dashboard</a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
      <tr>
        <td class='innerpadding borderbottom'>
          <table width='115' align='left' border='0' cellpadding='0' cellspacing='0'>  
            <tr>
              <td height='115' style='padding: 0 20px 20px 0;'>
                <img class='fix' src='http://merlin.luke.sx/assets/img/MerlinPurple.png' width='115' height='115' border='0' alt='' />
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
            <table width='380' align='left' cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td>
          <![endif]-->
          <table class='col380' align='left' border='0' cellpadding='0' cellspacing='0' style='width: 100%; max-width: 380px;'>  
            <tr>
              <td>
                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <td class='h2'>
                      Merlin Apps<br>
                    </td>
                  <tr>
                    <td class='bodycopy'>
                      A subscription based service that allows you to best utilise awesome web features suchs as your own link and image sharing services all managable under one place
                    </td>
                  </tr>
                  <tr>
                    <td style='padding: 20px 0 0 0;'>
                      <table class='buttonwrapper' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                          <td class='red-button' height='45'>
                            <a href='#'>Coming Soon</a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
      <tr>
        <td class='innerpadding bodycopy smaller'>
          We're glad that you could join something special. As we continue to develop our portfolio and range of services we may occasionaly send you email to show you our new content. Although you accepted our terms of emailing, if you have a problem with this then please feel more than welcome to contact us our website. We hate spam just as much as you do.
        </td>
      </tr>
      <tr>
        <td class='footer' bgcolor='#44525f'>
          <table width='100%' border='0' cellspacing='0' cellpadding='0'>
            <tr>
              <td align='center' class='footercopy'>
                &reg; MerlinDesign, Copyright 2014<br/>
                <!--<a href='#' class='unsubscribe'><font color='#ffffff'>Unsubscribe</font></a> 
                <span class='hide'>from this newsletter instantly</span>-->
              </td>
            </tr>
            <tr>
              <td align='center' style='padding: 20px 0 0 0;'>
                <table border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                    <td width='37' style='text-align: center; padding: 0 10px 0 10px;'>
                      <a href='http://merlin.luke.sx'>
                        <img src='http://merlin.luke.sx/assets/img/home-64.png' width='37' height='37' alt='Facebook' border='0' />
                      </a>
                    </td>
                    <td width='37' style='text-align: center; padding: 0 10px 0 10px;'>
                      <a href='http://www.twitter.com/diamondxf'>
                        <img src='http://merlin.luke.sx/assets/img/twitter-64.png' width='37' height='37' alt='Twitter' border='0' />
                      </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
    </table>
    <![endif]-->
    </td>
  </tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <me@luke.sx>' . "\r\n";

mail($to,$subject,$message,$headers);
?>