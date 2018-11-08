 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <!DOCTYPE html>
  <html>
    <head>
      <title><?php echo $title ?></title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/materialize.min.css')?>"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/site.min.css')?>"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
     <nav>
      <div class="nav-wrapper">
        <div class="row">
          <div class="col s12">
            <a href="#" class="brand-logo"><?php echo $this->config->item('siteName') ?></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="about"><?php echo $this->lang->line('linkAbout') ?></a></li>
              <li><a href="portfolio"><?php echo $this->lang->line('linkPortfolio') ?></a></li>
              <li><a href="contact"><?php echo $this->lang->line('linkContact') ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>