<?php
    $page_title = "Form Snippet";
    include_once('/includes/header.php');
?>

                <div class="col s12 m12 l6">
                  <div class="card-panel">
                      <div class="card-image">
              <img src="http://materializecss.com/images/sample-1.jpg">
              <span class="card-title">Card Title</span>
            </div>
                    <h4 class="header2">Form with placeholder</h4>
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="John Doe" id="name2" type="text">
                            <label for="first_name" class="active">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="john@domainname.com" id="email2" type="email">
                            <label for="email" class="active">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="YourPassword" id="password2" type="password">
                            <label for="password" class="active">Password</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea placeholder="Oh WoW! Let me check this one too." id="message2" class="materialize-textarea"></textarea>
                            <label for="message" class="active">Message</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

<div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="content/images/spot/logo-small.jpg" width="200em">
              
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
                <div class="row">
                <form class="col s12 l8 m7">
                    <div class="row">
                   <div class="input-field col s12 m6">
                    <select class="icons">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="CPT" data-icon="../content/images/cpt/logo.png" class="left circle">Cultural Promotions Team</option>
                        <option value="CPT" data-icon="../content/images/df/logo.png" class="left circle">Dulaang Filipino</option>
                        <option value="CPT" data-icon="../content/images/karilyo/logo.png" class="left circle">Karilyo</option>
                        <option value="CPT" data-icon="../content/images/sbrdc/logo.png" class="left circle">Saint Benilde Romancon Dance Company</option>
                        <option value="CPT" data-icon="../content/images/spot/logo.png" class="left circle">Stage Productions and Operations Team</option>
                    </select>
                    <label>Artist Group</label>
                </div>  
                    </div>
                  </form>  
              </div>
            </div>
              
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>

<?php

include_once('/includes/footer.php');
?>