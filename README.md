# PHP Chikka Service Gateway RSA Signature Generator

## Information

A simple library for the CSG (Chikka Service Gateway) clients for singing post
body requests to be sent to the CSG.

## Usage

Import or copy the contents of the ChikkaRSALib.php file in your code and
simply use it as shown below:

```php
require_once("ChikkaRSALib.php");

// generate a signature for string "my data" using file myprivkey.pem
$signature = generate_signature("my data", file_get_contents("myprivkey.pem"));
```

For testing purposes, you can use the `verify_signature()` function to test whether
your generated signature is actually signed properly and can be verified by the
corresponding public key.

```php
// verify given signature using the data "my data" and file mypubkey.pem
$verified = verify_signature("my data", file_get_contents("mypubkey.pem"), $signature);
if($verified == 1) {
    echo "Verification success"
}
else {
    echo "Verification failed"
}
```

## Open Source Licenses

### PHP Chikka Service Gateway RSA Signature Generator by Chikka Philippines Inc.

Copyright 2014 Chikka Philippines Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

