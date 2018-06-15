# [Spiros](https://reactjs.org/) &middot;
<img src="./public/img/logo.svg" align="left" width="190px" height="190px"/>
<img align="left" width="0" height="192px" hspace="10"/>

> Open Source CRM for freelance students with a focus on automating administrative tasks

[![Under Development](https://img.shields.io/badge/under-development-orange.svg)](#)
![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)

> The purpose is to design an open source software for freelancers to manage the daily tasks of their business such as treasury, accounting and customer management.

<br>
<br>

## Installing

### Requirements
* PHP 7.2+
* Composer
* MySQL 5.7+
* Sass

# Getting Started
Clone the project and install the dependencies:

```sh
# /MyProjects
git clone https://github.com/Vondas/Spiros.git
cd Spiros
composer install
```

Create a database named "spiros" with our seed sql script
```sh
# /Spiros
mysql -u username -p < seed/bdd.sql
$ Enter password: password
```

Compile the scss files to css:
```sh
# /Spiros
sass sass:public/styles
```

## Usage

Run a basic php server, serving the public directory
```sh
# /Spiros/public
php -S localhost:8000
```

Watch scss files to compile on changes
```sh
# /Spiros
sass --watch sass:public/styles
```

Open your browser at `localhost:8000`, you should now be on the index page.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change and then : 

1. `Fork` this repository
2. Create a `branch`
3. `Commit` your changes
4. `Push` your `commits` to the `branch`
5. Submit a `pull request`



## Changelog :memo:

See the [CHANGELOG](https://github.com/Vondas/Spiros/blob/master/CHANGELOG.md) file.


## To-Do :man:

- [x] Init the README.MD
- [ ] Push the LOGIN Features for the v0.0.1
- [ ] Make the Router Work 
- [ ] Create the Customers CRUD
- [ ] Create the Tasks CRUD

## Roadmap

v0.0.1


## License

Spiros is [MIT licensed](https://choosealicense.com/licenses/mit/).
