# AWS and Google Drive Storage with Laravel

## Get your Google Drive Client ID and Secret

Please login to your google account and go to **[Google Console](https://console.developers.google.com/)**

## Create a Project to get your Keys

Create a new project as shown in Screenshot

<img src="https://user-images.githubusercontent.com/70930043/93717278-6cf4c900-fb92-11ea-9750-e9d431cd7c29.png" title="Step 1">

<img src="https://user-images.githubusercontent.com/70930043/93717345-d7a60480-fb92-11ea-8789-5eac976494c6.png" title="Step 2">

Please enter project name and create project it will take few seconds to create project.

## Enable API

Go to API listing page by clicking on the **+ ENABLE APIS AND SERVICES** on top bar.

Go to **Google Drive API** by searching in the search bar and enable Google Drive API

<img src="https://user-images.githubusercontent.com/70930043/93717358-e987a780-fb92-11ea-9d0e-10015965e181.png" title="Step 3">

<img src="https://user-images.githubusercontent.com/70930043/93717364-f1dfe280-fb92-11ea-9b50-b21fbaf78c69.png" title="Step 4">

## Create Credentials for Googel Drive API

Go to "OAuth consent screen" tab from left panel and Configure Consent Screen

<img src="https://user-images.githubusercontent.com/70930043/93717381-0d4aed80-fb93-11ea-8bad-28583aa942b3.png" title="Step 5">

Create User type as External

Note: If your account is G Suite account then only you will be able to select Internal User Type.

Add your application name and Save it

<img src="https://user-images.githubusercontent.com/70930043/93719259-e8f50e00-fb9e-11ea-8aa1-0018d403acc4.png" title="Step 6">

Then go to Credentials tab from left panel and click on "+ Create Credentials" and select "OAuth Client ID".

<img src="https://user-images.githubusercontent.com/70930043/93717393-2358ae00-fb93-11ea-8144-64abb94f4bf5.png" title="Step 7">

Choose application type as "Web application" and give app name.

Please add "https://developers.google.com/oauthplayground" in "Authorized redirect URIs"

This URL will help you to get your Refresh Token

<img src="https://user-images.githubusercontent.com/70930043/93717398-2c497f80-fb93-11ea-9937-5291e47e3ce8.png" title="Step 8">

Click on Create and there you have your Client ID and Client Secret.