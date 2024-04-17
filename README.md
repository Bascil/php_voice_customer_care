# PHP package for SMS Shortcode

Hi Guys, this is a PHP package for a call center automation system such as customer care used my mobile operators like safaricom.This application consumes the `Africa's Talking` API.This is developed on sandbox (testing) mode. To go live contact `Africa's Talking Ltd` on https://www.africastalking.com/contact.

## Prerequisites

For testing download `Africa's Talking` android app from Google Playstore.The web interface may have issues

## Installation

This project supports both composer dependency management tool and can also be used without composer

### Using Composer

Run the following command

```
composer require bascil/php_voice_customer_care

```

### Without composer

Download the source code as zipped

## Configuration

1. Go to "https://account.africastalking.com/". Create an account then click on the `Go to Sandbox App` button

2. Configure your phone number for voice.(`Voice > Create a number` ) then configure the voice callback URL under the phone number you have created.(`Voice > Phone Numbers > Actions ... > Callback` ). A URL example would be `http://www.wiretechafrica.com/voice/customerCare.php`. Replace the domain name with your own. `Africa's Talking` will assign you a phone number that you can then use to interact with their voice APIs. Calls made to this phone number will be directed to your web servers, while you will also be able to originate calls as the assigned phone number.

3. Upload media files you may wish to use to your server. Ive uploaded three mp3 files in the media folder that will play when the call is made to the configured phone number. This is especialy useful if you have recorded voice that will emulate human interaction or music that plays during call waiting. You may opt to include text within the XML <say></say> tags for text to speech functionality provided by the `Africa's Talking` APIs. You can choose between `male`and `female` voices within the <say> tags but the female voice is configured by default.

4. If working from localhost you can set up a `Ngrok` server or `Localtunnel` to expose your localhost to the internet. Use the temporary URL provided as your callback e.g http://6a71f5ec.ngrok.io/folder_name/ussd.php. This only works when the computer is on and connected to the internet. If using `Ngrok` free package this address may change every 8 hours. You could opt for a paid version at 5 US dollars a month.

5. Now test the USSD application using `Africa's Talking` android app downloaded from Google Playstore or use the web interface at https://simulator.africastalking.com:1517/ using the USSD code you configured i.e. `*384*1100#`.Make sure you configure a phone number similar to the one created in step 2.

## Linux Hosting

If you need VPS or dedicated hosting, please visit this link [Servercrust](https://servercrust.com).

## Support

Need support using this package:-

Email basilndonga@gmail.com or skype me at `basilndonga`.

If you wish to be added as a contributor to this project let me know. If you wish to buy me a coffee, you can support me on this [link](https://buymeacoffee.com/basilndonga).

If you were inspired by this project, don't forget to follow me on github and on twitter `@basilndonga` as well.

If you wish to engage me as a developer for your project, feel free to contact me

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Happy coding!!!!!!!
