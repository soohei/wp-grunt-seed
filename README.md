## Setup

#### Install WordPress

```
$ git submodule update --init --recursive
```

#### Setup workflow

1. `$ cd wp-content/themes/YOUR_THEME_DIR/`
1. `$ npm install`
1. `$ bower install`


## Develop

#### Start watching

```
$ grunt
```

## Deploy

#### 1. Minify/Optimize codes

```
$ grunt dist
```

#### 2. Upload

- `wp-content/themes/YOUR_THEME_DIR/**/*.php`
- `wp-content/themes/YOUR_THEME_DIR/assets`