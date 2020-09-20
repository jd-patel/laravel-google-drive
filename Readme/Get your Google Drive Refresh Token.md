# AWS and Google Drive Storage with Laravel

## Get your Google Drive Refresh Token

Please go to **[OAuth Playground](https://developers.google.com/oauthplayground)**

**https://developers.google.com/oauthplayground**

On the top right corner click on settings icon as shown in screenshot below

Check the checkbox says "Use your own OAuth credentials" and paste your Client ID and Client Secret

<img src="https://user-images.githubusercontent.com/70930043/93717409-484d2100-fb93-11ea-85d7-c7673b02493c.png" title="Step 1">

On the left panel under the "Step 1 Select & authorize APIs" 

Scroll down and go to "Drive API V3" and select "auth/drive"

<img src="https://user-images.githubusercontent.com/70930043/93717415-513df280-fb93-11ea-9344-3b00af09acba.png" title="Step 2">

Click on the Authorize APIs button and allow access to your account

On the "Step 2 Exchange authorization code for tokens" check the checkbox "Auto-refresh the token before it expires."

Click on the button "Exchange authorization code for tokens"

<img src="https://user-images.githubusercontent.com/70930043/93717419-556a1000-fb93-11ea-87df-d0319134af4e.png" title="Step 3">

Click on "Step 2 Exchange authorization code for tokens" and you will have your Refresh Token

On the "Step 3 Configure request to API" you can verify and test your keys using "List possible operations"

<img src="https://user-images.githubusercontent.com/70930043/93717420-58650080-fb93-11ea-8658-1166dc9cda63.png" title="Step 4">