# CodeIgniter Helper: Skew Picture

**ci-skew-picture**

## About this helper

This CodeIgniter's helper transforms pictures.  

Its usage is recommended for CodeIgniter 2 or greater.

## Usage

```php
$this->load->helper('skew');

$corners = array(
    'top_left'     => array( 50,  50),
    'top_right'    => array(500,   0),
    'bottom_left'  => array(120, 330),
    'bottom_right' => array(450, 300)
);

skewPicture("demo-init.png", "demo-final.png", $corners);
```

![Ale Mohamad](http://alemohamad.com/github/logo2012am.png)