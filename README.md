# Laravel Nova Field - Array Files
A laravel nova field that will let you save your uploaded files path to your database in array format.

# Installation
```
composer require halimtuhu/array-files
```

# Usage
Create array files just call `Halimtuhu\ArrayFiles\ArrayFiles` class and use `make` static method to create a field.
```
...
use Halimtuhu\ArrayFiles\ArrayFiles;
...
public function fields(Request $request)
    {
        return [
            ...
            ArrayFiles::make('Files', 'files'),
            ...
        ];
    }
...
```
That will create a field with name `Files`. Stored data will look like this.
```
[{
    "url": "http://laranov.halimtuhu.test/storage/wB04AbprHGxHw4I3sizXmuw9L4LBcG0wv0QEacAo.pdf",
    "name": "wB04AbprHGxHw4I3sizXmuw9L4LBcG0wv0QEacAo.pdf"
}, {
    "url": "http://laranov.halimtuhu.test/storage/eOuxUCjHGNokkHdOXYB7gGObxCvf7m30ridFpBpy.pdf",
    "name": "eOuxUCjHGNokkHdOXYB7gGObxCvf7m30ridFpBpy.pdf"
}, {
    "url": "http://laranov.halimtuhu.test/storage/nLkZp4vfpATEp56NStJfeAtKoHvmN2hapfxoNrEN.doc",
    "name": "nLkZp4vfpATEp56NStJfeAtKoHvmN2hapfxoNrEN.doc"
}]
```

# Available Methods
### Disk
Specify disk target for uploaded images.
```
ArrayFiles::make('Files', 'files')
    ->disk('public'),
```
If not specified then the default disk will be used.

### Path
Specify target path for uploaded images.
```
ArrayFiles::make('Files', 'files')
    ->disk('public')
    ->path('files'),
```
If not specified then default path on selected disk will be used.


# Notes
- make sure you have specified correct `APP_URL` on your application
- make sure you have specified default `FILESYSTEM_DRIVER` on your application
