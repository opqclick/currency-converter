# currency-converter
<code> composer require opqclick/currency-converter </code>

# By default, Composer pulls in packages from Packagist. So you’ll have to make a slight adjustment to your new project composer.json file. Open the file and update include the following array somewhere in the object:
<code>
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/fhsinchy/inspire"
    }
]
</code>

# Add the service provider in {config/app.php} providers array
<code>Opqclick\CurrencyConverter\Providers\CurrencyConverterServiceProvider::class</code>

# endpoints
The package containing 1 endpoints

2. {base_url}/{amount}{required}/{currency}{required}

