# Kitab Suci 5.0
Kitab Suci 5.0 app is an innovative solution that allows users to access sacred texts and key teachings from different religions in one easy-to-use platform. With this app, users can explore the scriptures of all religions in Indonesia, the app allows users to read, search and understand the teachings of their religion and promotes deeper interfaith understanding. By providing easy and unified access to key spiritual sources, the app aims to strengthen tolerance, interfaith understanding and peace across Indonesia.

### API Usage
- [Equran.id](https://equran.id/apidev/v2)

### Installation
- Clone the repository
```<PHP>
git clone https://github.com/irizkyw/website-kitab5.0.git
```
- Setup your .env for database and JWT TOKEN
```<raw>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR DATABASE
DB_USERNAME=YOUR DBMS USERNAME
DB_PASSWORD=YOU DBMS PASSWORD

JWT_SECRET=TOKEN_GENERATED
```
- Generate key for JWT Token
```<PHP>
php artisan jwt:secret
```
- Run the application
```<PHP>
php artisan serve
```
For another Issues for find the solution or documentation you can visit [here](https://github.com/irizkyw/website-kitab5.0/issues)

### Developed by
<a href="https://github.com/irizkyw/website-kitab5.0/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=irizkyw/website-kitab5.0" />
</a>
