# PHP authentification via One Time Password (OTP) 👋

![Image](https://github.com/LiliwoL/PHP-Authentication-OTP/raw/php7/img/img.png)

# Sommaire

[toc]

# Sources et dépendances

Application FreeOTP sur Android et iTruc
* [Application FreeOTP](hhttps://freeotp.github.io)

> Marche aussi avec Google Authenticator

Librairie de génération du OTP **(en version 10.0.3 si on est en PHP < 8)**
* [Otphp par Spomky labs sur Packagist](https://packagist.org/packages/spomky-labs/otphp#v10.0.3)
* [Otphp par Spomky labs sur GitHub](https://github.com/Spomky-Labs/otphp/tree/10.0.x)

# Installation de la dépendance

Installation de la dépendance via **composer**:

```bash
composer require spomky-labs/otphp:10.0.3
```

> Attention, le module **php-mbstring** doit être installé!
> Si vous ne l'avez pas: `sudo apt install php-mbstring`

# Utilisation de ce dépôt

* Cloner le dépôt
* 
```bash
git clone git@github.com:LiliwoL/PHP-Authentication-OTP.git
cd PHP-Authentication-OTP
```

* Installer les dépendances (composer doit être installé!)
```bash
composer install
```