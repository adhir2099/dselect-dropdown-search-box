![PHP](https://img.shields.io/badge/php-8-brightgreen)
![Responsive](https://img.shields.io/badge/Responsive-Yes-ff69b4)
![Bootstrap](https://img.shields.io/badge/bootstrap-5.2.3-blue)
![Jquery](https://img.shields.io/badge/jquery-3.5.1-orange)

# Select dropdown with search box using Dselect & PHP
Bootstrap 5 select dropdown using dselect to search through the dropdown.

# Database 
* countries.sql

There is the schema for the table.

```sql
    CREATE TABLE `countries` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `country_code` varchar(2) NOT NULL DEFAULT '',
        `country_name` varchar(100) NOT NULL DEFAULT '',
        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;
```

# Config parameters

```javascript
const config = {
    search: false, // Toggle search feature. Default: false
    creatable: false, // Creatable selection. Default: false
    clearable: false, // Clearable selection. Default: false
    maxHeight: '360px', // Max height for showing scrollbar. Default: 500px
    size: '', // Can be "sm" or "lg". Default ''
}

dselect(document.querySelector('#select_box'), config)
```

or like this:

```javascript
    dselect(select_box_element, {
        search: true,
        creatable: false,
        maxHeight: '360px'
    });
```

Parameters can also be set in "data-dselect-*" attribute:

```html
    <select data-dselect-search="true" data-dselect-creatable="true" data-dselect-clearable="true" data-dselect-max-height="500px" data-dselect-size="lg" class="form-select" id="select_box">
        <option value="">Select country</option>
    </select>
```
## Front

<p align="left">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=js,jquery,bootstrap,css,html" />
  </a>
</p>

## Backend

<p align="left">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=php,mysql" />
  </a>
</p>

## Libraries included
* Bootstrap v5.2.3
* Jquery v3.5.1
* Dselect

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b your-branch`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin your-branch`
5. Submit a PR

<h3 align="left">Get in touch with me:</h3>
<p align="left">
<a href="https://www.linkedin.com/in/adhir-serrano/" target="blank"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/linked-in-alt.svg" alt="adhir2099" height="30" width="40" /></a>
</p>
<p align="right" > Created with 🧡 by <a href="https://github.com/adhir2099">Adhir2099</a></p>