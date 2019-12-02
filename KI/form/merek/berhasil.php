
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="HandheldFriendly" content="true" />
    <title>Thank You</title>
    <link href='' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://submit.jotform.me/js/prototype.js"></script>
    <style type="text/css">
      @import url();
      * {
        -moz-box-sizing:border-box;
        -webkit-box-sizing:border-box;
        box-sizing:border-box;
        *behavior:url(js/boxsizing.htc);
      }
      html, body { width:100%; margin:0px; padding:0px; }
      body {
        background:  ;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
        background-size: auto;
        
        font-family: Lucida Grande, sans-serif;
        font-size: 14px;
        color: #555;
        text-align:center;
      }
      .form-all {
        background:  #fff;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
        background-size: auto;
        
        width: 100%;
        max-width: 690px;
        margin: 36px auto;
        padding: 35px 29px ;
        -webkit-box-shadow: 0 4px 4px -1px rgba(0,0,0,0.1);
        box-shadow: 0 4px 4px -1px rgba(0,0,0,0.1);
      }

      #footer {
        text-align: left;
        margin: -35px auto 0;
        font-size: 14px;
        width: 690px;
      }

      #footer > div {
        box-shadow: 0 4px 4px -1px rgba(0,0,0,0.1);
        background-color: #fff;
        padding: 12px 15px;
        overflow: hidden;
      }

      #footer > div > div { padding: 10px 0 10px 5px }

      .thankYouPage-footerJFLink span { display: none }

      @media screen and (max-width: 690px), screen and (max-device-width: 768px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
        body {
          background-color: #fff;
        }
        .form-all {
          margin: 12px 3%;
          border: 0;
          -webkit-box-shadow: none;
          box-shadow: none;
          width: 94%;
          max-width: initial;
        }

        .thankYouPage-footerJFLink img { display: none }
        .thankYouPage-footerJFLink span { display: inline-block }

        #footer {
          width: 94%;
          margin-top: 0;
        }
        #footer > div.summer-sale-2018 > div a { padding: 3px 0 0 1px; font-size: 10px; }
        #footer > div > div { padding: 3px 0 0 5px; font-size: 12px; }


        #footer > div > div span { display: block }
        #footer > div > div span.footer-dash { display: none }
      }
      @media print {
       body {
        background: white;
        color: black;
       }

       .form-all {
        margin:0 auto;
        max-width: 100%;
        box-shadow: none;
        background:white;
        float:none;
        width: 690px;
       } 
       img {
        max-width: 100% !important;
        page-break-inside: avoid;
       }

      }
    </style>
    <style type="text/css">
    
    </style>
    <!-- <link href="css/print-new.css" rel="stylesheet" type="text/css" media="print"> -->
  </head>

<?php
  include koneksi.php;

  if (isset($_POST[])) {
    # code...
  }



?>

  <body class="thankyou">
    <div id="stage" class="form-all">
      <p style="text-align:center;"><img src="https://cdn.jotfor.ms/img/check-icon.png" alt="" width="128" height="128" /></p><div style="text-align:center;"><h1 style="text-align:center;">Thank You!</h1><p style="text-align:center;">Your submission has been received.</p></div>
    </div>
    <div id="footer" class="form-footer">
      
      <div>
  <a href="https://www.jotform.com/?utm_source=thankyoupage&utm_medium=content&utm_content=thankyou_footer_banner&utm_campaign=form_thankyou_page_new_hp&utm_term=93090627944464" target="_blank" style="text-decoration: none; color: #fff; background-color: #f98e03; border-radius: 3px; float: right; padding: 9px 15px; font-size: 14px; display: inline-block; vertical-align: middle;">Create a JotForm</a>
  <div style="color: #575757">
  <a href="https://www.jotform.com/?utm_source=thankyoupage&utm_medium=content&utm_content=thankyou_footer_text&utm_campaign=form_thankyou_page_new_hp&utm_term=93090627944464" target="_blank" style="text-decoration: none; color: black;">Now create your own JotForm - <span style="color: #b1b0b0;">It’s free! </span></a>
  </div>
</div>
    </div>
  </body>
  <script type="text/javascript">
    if (window.parent !== window) {
      var stageMarginTop = ($('stage')) ? parseInt($('stage').getStyle('marginTop')) : 0;
      var height = $$('body').first().getHeight() + stageMarginTop;
      window.parent.postMessage('setHeight:' + height, '*');
      window.parent.postMessage({ action: 'submission-completed' }, '*');
    }
  </script>
</html>
