# SPINsite

https://spin.sidnlabs.nl/

### Note: Install hugo-theme-learn as git submodule
This theme will be added like a dependency repo to original project.

On your root (www-spin) of Hugo execute:

```
$ git submodule add https://github.com/matcornic/hugo-theme-learn.git themes/hugo-theme-learn
```
Next initialize submodule for parent git repo:

```
$ git submodule init
$ git submodule update
```

Now you are ready to add content and customize looks. Do not change any file inside theme directory.

Refer to this theme in config.toml.
