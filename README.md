# Anti-Spam-Mail
PHP script pro maskování e-mailu a mailto v HTML pomocí Unicode HTML entit
## Příklad použití
**maskování emailu pomocí funkce:**
```php
<?php
  $mail = "info@nejakadomena.cz";
  AntiSpamEmail($mail);
```
výstup pro HTML:
```
&#105;&#110;<!-- >@. -->&#102;&#111;<!-- >@. -->&#64;&#110;<!-- >@. -->&#101;&#106;<!-- >@. -->&#97;&#107;<!-- >@. -->&#97;&#100;<!-- >@. -->&#111;&#109;<!-- >@. -->&#101;&#110;<!-- >@. -->&#97;&#46;<!-- >@. -->&#99;&#122;<!-- >@. -->
```
HTML zobrazí: `info@nejakadomena.cz`

**maskování linku MAILTO pomocí funkce:**
```php
<?php
  $mail = "info@nejakadomena.cz";
  AntiSpamMailto($mail);
```
výstup pro HTML:
```
&#105;&#110;&#102;&#111;&#64;&#110;&#101;&#106;&#97;&#107;&#97;&#100;&#111;&#109;&#101;&#110;&#97;&#46;&#99;&#122;
```
HTML zobrazí: `nfo@nejakadomena.cz`
