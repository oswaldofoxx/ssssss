<?= $this->Html->css('login') ?>
<?= $this->Html->css('alertas') ?>
<!-- include the BotDetect layout stylesheet --> 
<?= $this->Html->css(captcha_layout_stylesheet_url(), ['inline' => false]) ?>


<div class="form">

  <ul class="tab-group">
    <li class="tab active"><a href="#login"><?php echo __('Log In') ?></a></li>
    <li class="tab"><a href="#signup"><?php echo __('Sign Up') ?></a></li>
  </ul>

  <div class="tab-content">
     <div id="login">
      <h2><?php echo __('Log in with your account') ?></h2>

      <!--<form action="/" method="post">-->
        <?= $this->Form->create()?>
        <div class="field-wrap">
          <label>
             <?php echo __('Write your E-mail') ?><span class="req">*</span>
            </label>
          <input type="email" name="email" id="email" required autocomplete="off" />
        </div>

        <div class="field-wrap">
          <label>
              <?php echo __('Enter your password') ?><span class="req">*</span>
            </label>
          <input type="password" name="password" id="password" required autocomplete="off" />
        </div>
        <div class="field-wrap" >
       <!-- show captcha image html --> 
       <div align="center">
        <?= captcha_image_html() ?> 
        </div>
      
        <!-- Captcha code user input textbox --> 
        <?= $this->Form->input('CaptchaCode', [ 
          'label' => __('Retype the characters from the picture:').'*',
          'maxlength' => '10', 
          'id' => 'CaptchaCode',
          'style' => 'color: white'
        ]) ?> 

    </div>
        <p class="forgot"><a href="#"><?php echo __('Forgot Password?') ?></a></p>
    
        <button class="button button-block" ><?php echo __('Log In') ?></button>

      <!--</form>-->
  <?= $this->Form->end()?>
    </div>
    <div id="signup">
      <h2><?php echo __('Sign Up for Free') ?></h2>

      <form action="/" method="post">

        <div class="top-row">
          <div class="field-wrap">
            <label>
                <?php echo __('First Name') ?><span class="req">*</span>
              </label>
            <input type="text" required autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
                <?php echo __('Last Name') ?><span class="req">*</span>
              </label>
            <input type="text" required autocomplete="off" />
          </div>
        </div>

        <div class="field-wrap">
          <label>
             <?php echo __('Email Address') ?><span class="req">*</span>
            </label>
          <input type="email" required autocomplete="off" />
        </div>

        <div class="field-wrap">
          <label>
              <?php echo __('Set A Password') ?><span class="req">*</span>
            </label>
          <input type="password" required autocomplete="off" />
        </div>

        <button type="submit" class="button button-block" /><?php echo __('Get Started') ?></button>

      </form>

    </div>

    

  </div>
  <!-- tab-content -->

</div>
<!-- /form -->
<?= $this->Html->script('jquery-3.1.1.min.js') ?>
<?= $this->Html->script('login') ?>
