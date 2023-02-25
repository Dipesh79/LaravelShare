
# Laravel Share

This Laravel package share the current url page to mutiple social media channel.


## Usage/Examples
### Install Using Composer
```javascript
composer require dipesh79/laravel-share
```

### Publish Vendor File
```
php artisan vendor:publish --provider="Dipesh79\LaravelShare\LaravelShareServiceProvider"
```
or 
```
php artisan vendor:publish
```
And publish "Dipesh79\LaravelShare\LaravelShareServiceProvider"


Compact the Required Social Media Share Link to blade

```
use Dipesh79\LaravelShare\LaravelShare;

//Your Controller Method
public function index()
{
  $share = new LaravelShare();
  $facebook_link = $share->facebook();

  //compact the share link to your blade
  return view('index',compact('facebook_link'));
}

```

After sending the url to blade simply add the url to href tag.

```
<a href="{{$facebook_link}}" target="_blank">Share To Facebook</a>
```

OR

```
use Dipesh79\LaravelShare\LaravelShare;

//Your Controller Method
public function index()
{
  $share = new LaravelShare();
 
  //compact the share link to your blade
  return view('index',compact('share'));
}

```

After sending the url to blade simply add the url to href tag.

```
<a href="{{$share->facebook()}}" target="_blank">Share To Facebook</a>
```

If you have to add in most of the blade files then use it in AppServiceProvider.

```
use Dipesh79\LaravelShare\LaravelShare;
use Illuminate\Support\Facades\View;

.
.
.

public function boot()
{
    $share = new LaravelShare();
    View::share('share',$share);
}

```

Then you can use ```share``` variable in any blade file in the laravel project. Then simply do ```{{$share->facebook()}}``` to add respective social media share link in any blade file.
 

## Currently Available Platform

This package provide the following platform sharing functionality.

- Facebook
```{{$share->facebook()}}```
- Twitter
```{{$share->twitter()}}```
- Linkedin
```{{$share->linkedin()}}```
- Pinterest
```{{$share->pinterest()}}```
- WhatsApp
```{{$share->whatsapp()}}```
- Reddit
```{{$share->reddit()}}```

More Coming Soon...

Contact Us we have missed any platform which is used mostly and it would be helpful to add that platform on this project.


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Author

- [@Dipesh79](https://www.github.com/Dipesh79)


## Support

For support, email dipeshkhanal79@gmail.com.

