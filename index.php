<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KYC Registration</title>
</head>

<body>

<link href="kyc-form.css" rel="stylesheet">

<div class="fcf-body">

    <div id="fcf-form">
    <h3 class="fcf-h3">KYC Registration</h3>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="kyc-process.php">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Profession</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Net Worth</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="flex">

            <div class="fcf-form-group" style="width: 50%">
                <label for="Email" class="fcf-label">Valid ID (International Passport or Drivers License)</label>
                <div class="fcf-input-group">
                    <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group pl-10" style="width: 50%">
                <label for="Email" class="fcf-label">Bank statement Upto Six(6) Months</label>
                <div class="fcf-input-group">
                    <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                </div>
            </div>
            
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Any Additional Information (Optional)</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>

        <div class="fcf-credit" id="fcf-credit">
        Totally Secured and Powered by Startacap & Sectigo: <a href="https://www.startacap.com" target="_blank">www.startacap.com</a>
        </div>

    </form>
    </div>

</div>

</body>
</html>